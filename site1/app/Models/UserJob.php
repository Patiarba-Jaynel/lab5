<?php

namespace App\Models;

use App\Models\User;

use Illuminate\Database\Eloquent\Model;


class UserJob extends Model {

    protected $table = 'tbluserjob';


    protected $fillable = ['jobid', 'jobname'];

    public $timestamp = false;

    protected $primaryKey = 'jobid';

}