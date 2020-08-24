<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use DataTables;

class RoleController extends Controller
{
    public function index(){
        $roles = Role::all();
        return view('role.index', \compact('roles'));
    }

    public function create(){
        return view('role.create');
    }
    public function store(Request $request){
        $this->validate($request, [
            'role' => 'required|unique:roles',
        ]);
        $role = new Role();
        $role->role = $request->role;
        $role->save();
        return back();
    }
    public function edit($id){
        $role = Role::findOrFail($id);
        return view('role.edit', compact('role'));
    }
    public function update(Request $request, $id){
        $this->validate($request, [
            'role' => 'required|unique:roles,role,'.$request->id,
        ]);
        $role = Role::findOrFail($id);
        $role->role = $request->role;
        $role->save();
        return back();
    }
    public function delete($id){
        $role = Role::findOrFail($id);
        $role->delete();
        return back();
    }
    
}
