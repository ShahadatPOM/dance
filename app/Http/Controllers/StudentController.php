<?php

namespace App\Http\Controllers;

use App\Student;
use App\Role;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;


class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        return view('student.index', \compact('students'));
    }

    public function create(){
        $roles = Role::all();
        return view('student.create', compact('roles'));
    }
    public function store(Request $request){
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'mobile' => 'required',
            'date_joined' => 'required',
            'date_terms_agreed' => 'required',
            'role_id' => 'required',
        ]);

        $student = new Student();
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->email = $request->email;
        $student->password = bcrypt($request->password);
        $student->dob = $request->dob;
        $student->age = $request->age;
        $student->mobile = $request->mobile;
        $student->telephone = $request->telephone;
        $student->allergies_med = $request->allergies_med;
        $student->date_joined = $request->date_joined;
        $student->date_terms_agreed = $request->date_terms_agreed;
        $student->status = $request->status;
        $student->registration_source = $request->registration_source;
        $student->ed_school_id = $request->ed_school_id;
        $student->nok_id = $request->nok_id;
        $student->surgery_id = $request->surgery_id;
        $student->role_id = $request->role_id;
        if($request->hasFile('image')){
            $image = $request->file('image');
            
            $filename= 'image'.time() . '.'.$image->getClientOriginalExtension();
            $student->image=$filename;
            $location = public_path('image/'.$filename);
            Image::make($image)->save($location);
        }
        $student->save();
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
