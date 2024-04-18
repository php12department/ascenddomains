<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Domain;


class DomainController extends Controller
{
    public function index()
    {
        $domains = Domain::all();
        //$domains = Domain::take(20)->get();

        return view('admin.domains.index', ['domains' => $domains]);
        //return view('admin.dashboardbkup', ['domains' => $domains]);
    }
}
