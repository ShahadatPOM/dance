<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NOK;

class NokController extends Controller
{
    public function index(){
        $noks = NOK::all();
        return view('nok.index', compact('noks'));
    }

    public function create(){
        return view('nok.create');
    }
    public function store(Request $request){
        $this->validate($request, [
            'nok_firstname' => 'required',
            'nok_lastname' => 'required',
            'nok_email' => 'required|email|unique,noks',
            'nok_password' => 'required',
            'nok_mobile' => 'required',
            'nok_license_no' => 'required',
            'nok_address' => 'required',
            'role_id' => 'required',
        ]);

        $nok = new Nok();
        $nok->nok_firstname = $request->nok_firstname;
        $nok->nok_lastname = $request->nok_lastname;
        $nok->nok_email = $request->nok_email;
        $nok->nok_password = bcrypt($request->nok_password);
        $nok->nok_mobile = $request->nok_mobile;
        $nok->nok_license_no = $request->nok_license_no;
        $nok->nok_address = $request->nok_address;
        $nok->date_terms_agreed = $request->date_terms_agreed;
        $nok->status = $request->status;
        $nok->nok_council_id = $reques->nok_council_id;
        $nok->role_id = $request->role_id;
        $nok->save();
        return back();
    }
    public function edit($id){
        $nok = Nok::findOrFail($id);
        return view('nok.edit', compact('nok'));
    }
    public function update(Request $request, $id){
        $this->validate($request, [
            'nok_firstname' => 'required',
            'nok_lastname' => 'required',
            'nok_email' => 'required|email|unique,noks'.$request->id,
            'nok_mobile' => 'required',
            'nok_license_no' => 'required',
            'nok_address' => 'required',
        ]);
        $nok = Nok::findOrFail($id);
        $nok->nok_firstname = $request->nok_firstname;
        $nok->nok_lastname = $request->nok_lastname;
        $nok->nok_email = $request->nok_email;
        $nok->nok_mobile = $request->nok_mobile;
        $nok->nok_license_no = $request->nok_license_no;
        $nok->nok_address = $request->nok_address;
        $nok->date_terms_agreed = $request->date_terms_agreed;
        $nok->status = $request->status;
        $nok->nok_council_id = $reques->nok_council_id;
        $nok->role_id = $request->role_id;
        $role->save();
        return back();
    }
    public function delete($id){
        $nok = Nok::findOrFail($id);
        $nok->delete();
        return back();
    }
}
