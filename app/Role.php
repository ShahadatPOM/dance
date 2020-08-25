<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable=[
        'role',
    ];

    public function student(){
        return $this->hasOne(Role::class);
    }
}
