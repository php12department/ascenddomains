<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use GuzzleHttp\Client;

use Illuminate\Http\Request;
use App\Models\DomainTransaction;
use App\Models\BillingInformation;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;


class ApiController extends Controller
{
    public function getToken()
    {
        $uid = config('app.dazzemail');
        $password = config('app.dazzpass');

        $response = Http::withOptions([
            'verify' => false,
        ])->post('https://daaz.com/api/v1/generate/token', [
            'uid' => $uid,
            'password' => $password,
        ]);
        if ($response->ok()) {
            $data = $response->json();
            return $data['result']['ssoToken'];
        } else {
            $error = $response->json();
            Log::error('Error generating token: ' . json_encode($error));
            return null;
        }
    }
    public function getCountryCodes()
    {
        $response = Http::withOptions([
            'verify' => false,
        ])->get('https://restcountries.com/v3.1/all');

        if ($response->getStatusCode() == 200) {
            $countries = json_decode($response->getBody(), true);
            $countryCodes = [];

            foreach ($countries as $country) {
                if (isset($country['cca2']) && isset($country['idd']['root']) && isset($country['idd']['suffixes'])) {
                    $countryCode = $country['idd']['root'] . $country['idd']['suffixes'][0];
                    $countryCodes[$country['name']['common']] = $countryCode;
                }
            }
            return $countryCodes;
        } else {
            return [];
        }
    }

    private function getPhoneCodeByCountry($country)
    {
        $countryCodes = $this->getCountryCodes();
        return $countryCodes[$country] ?? 'default_phone_code';
    }
    public function extractNumericPhoneCode($phoneCode)
    {
        $numericPhoneCode = preg_replace('/[^0-9]/', '', $phoneCode);
        return $numericPhoneCode;
    }
    public function createsingledaazsecure($id)
    {

        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $token = $this->getToken();
        if (!$token) {
            echo "Error: Unable to retrieve SSO token.";
            return;
        }
        $domainDetails = Domain::find($id);
        if (!$domainDetails) {
            echo "Error: Domain not found.";
            return;
        }
        $billingInfo = BillingInformation::where('user_id', Auth::id())->first();
        if (!$billingInfo) {
            echo "Error: Billing information not found.";
            return;
        }
        $phoneCode1 = $this->getPhoneCodeByCountry($billingInfo->country);
        $phoneCode = $this->extractNumericPhoneCode($phoneCode1);
        $binAmount = (float)str_replace(['$', ' ', ','], '', $domainDetails->bin);
        $data = [
            "domain" => $domainDetails->name,
            "price" => $binAmount,
            "currency" => "usd",
            "service_fee_pay_by" => "both",
            "buyer_email" => Auth::user()->email,
            "buyer_mobile" => $billingInfo->phone_number,
            "buyer_phone_code" => $phoneCode,
        ];
        $response = Http::withOptions([
            'verify' => false,
        ])->withHeaders([
            'ssotoken' => $token,
            'Content-Type' => 'application/json',
        ])->post('https://daaz.com/api/v1/create-single-daaz-secure', $data);
        if ($response->ok()) {
            $responseData = $response->json();
            $transactionId = $responseData['result']['transaction_id'] ?? null;
            DomainTransaction::create([
                'domain_id' => $id,
                'transaction_id' => $transactionId,
                'response' => json_encode($responseData),
            ]);
            $domainDetails->buyer_id = Auth::id();
            $domainDetails->is_sold = 1;
            $domainDetails->save();
            return redirect()->route('index')->with('success', 'Operation successful!');
        } elseif ($response->serverError()) {
            $responseData = $response->json();
            DomainTransaction::create([
                'domain_id' => $id,
                'response' => json_encode($responseData),
            ]);
            return redirect()->route('index')->with('error', 'Server error occurred. ' . json_encode($responseData));
        } elseif ($response->clientError()) {
            $responseData = $response->json();
            DomainTransaction::create([
                'domain_id' => $id,
                'response' => json_encode($responseData),
            ]);
            return redirect()->route('index')->with('error', 'Client error occurred. ' . json_encode($responseData));
        } else {
            DomainTransaction::create([
                'domain_id' => $id,
            ]);
            return redirect()->route('index')->with('error', 'Unexpected error occurred.');
        }
    }

}
