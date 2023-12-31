<?php

namespace App\Models;

use App\Models\User;

use Illuminate\Database\Eloquent\Model;


class User extends Model {

    public $timestamps = false;

    protected $table = 'users';

    protected $fillable = [
        'username', 'password', 'gender', 'jobid'
    ];

    protected $hidden =[
        "password"
    ];
}