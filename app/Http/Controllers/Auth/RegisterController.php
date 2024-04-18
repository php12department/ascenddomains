<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\BillingInformation;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'billing_first_name' => ['required', 'string', 'max:255'],
            'billing_last_name' => ['required', 'string', 'max:255'],
            'billing_country' => ['required', 'string', 'max:255'],
            'billing_address1' => ['required', 'string'],
            'billing_zip_code' => ['required', 'numeric', 'digits_between:4,5'],
            'billing_city' => ['required', 'string', 'max:255'],
            'billing_state' => ['required', 'string', 'max:255'],
            'billing_phone_number' => ['required', 'numeric', 'digits:10'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // Create user
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        // Create billing information
        $billingInfo = BillingInformation::create([
            'user_id' => $user->id,
            'first_name' => $data['billing_first_name'],
            'last_name' => $data['billing_last_name'],
            'country' => $data['billing_country'],
            'address1' => $data['billing_address1'],
            'address2' => $data['billing_address2'],
            'zip_code' => $data['billing_zip_code'],
            'city' => $data['billing_city'],
            'state' => $data['billing_state'],
            'phone_number' => $data['billing_phone_number'],
        ]);

        return $user;
    }
}
