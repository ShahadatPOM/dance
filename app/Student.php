<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'nok_id', 'ed_school_id', 'surgery_id', 'role_id', 'first_name', 'last_name', 'email', 'password', 'dob',
        'age', 'mobile', 'telephone', 'image', 'allergies_med', 'date_joined', 'date_terms_agreed', 'status', 'registration_source',
    ];


    public function role(){
        return $this->belongsTo(Student::class);
    }
}
