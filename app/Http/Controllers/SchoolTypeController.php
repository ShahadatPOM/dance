<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SchoolType;
use Datatables;

class SchoolTypeController extends Controller
{
    public function index(Request $r){
        if ($r->ajax()) {
            $schoolType = SchoolType::latest()->get();
            return Datatables::of($schoolType)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
     
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('admin.schoolType.index');
    }

    public function create(){
        return view('admin.schoolType.create');
        
    }

    public function store(Request $r){
        $schoolType = new SchoolType();
        $schoolType->school_type_name = $r->school_type_name;
        $schoolType->save();
        return redirect()->route('schoolType.index');        
    }

    public function edit($id){
        $schoolType = SchoolType::findOrfail($id);
        return view('admin.schoolType.edit', compact('schoolType'));
        
    }

    public function update(Request $r, $id){
        $schoolType = SchoolType::findOrfail($id);
        $schoolType->school_type_name = $r->school_type_name;
        $schoolType->save();
        return redirect()->route('schoolType.index');
        
    }

    public function delete($id){
        $schoolType = SchoolType::findOrfail($id);
        $schoolType->delete();
        return back();
    }
}
