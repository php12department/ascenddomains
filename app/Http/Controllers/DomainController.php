<?php

namespace App\Http\Controllers;

use App\Models\DomainCategory;
use Illuminate\Http\Request;
use App\Models\Domain;
use App\Models\DomainType;


class DomainController extends Controller
{
    public function index()
    {
        // $domains = Domain::all();
        $domains = Domain::with('type')->get();
        //$domains = Domain::take(20)->get();
        return view('admin.domains.index', ['domains' => $domains]);
        //return view('admin.dashboardbkup', ['domains' => $domains]);
    }
    public function show($id)
    {
        $domain = Domain::findOrFail($id);
        return view('admin.domains.show', ['domain' => $domain]);
    }
    public function edit($id)
    {
        $domain = Domain::findOrFail($id);
        $domainTypes = DomainType::where('is_deleted', 0)->get();
        $domainCategory = DomainCategory::where('is_delete', 0)->get();
            return view('admin.domains.edit', [
            'domain' => $domain,
            'domainTypes' => $domainTypes,
            'domainCategory' => $domainCategory,
        ]);
    }

    public function update(Request $request, $id)
    {
        $domain = Domain::findOrFail($id);
        $domain->type_id = $request->input('domain_type');
        $domain->category_id = $request->input('category_id');
        $domain->save();
        return redirect()->route('admin.domains', $domain->id)->with('status', 'Domain updated successfully!');
    }

    public function domainTypes()
    {
        $domainTypes = DomainType::where('is_deleted', 0)->get();
        return view('admin.domain_types.index', ['domainTypes' => $domainTypes]);
    }

}
