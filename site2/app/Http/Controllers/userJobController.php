<?php

namespace App\Http\Controllers;

use App\Models\UserJob;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;

class userJobController extends Controller
{

    use ApiResponser;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }


    public function index() 
    {
        $userjobid = UserJob::all();

        return $this->successResponse($userjobid);

    }

    public function show($id)
    {
        $userjob = UserJob::findOrFail($id);
        return $this->successResponse($userjob);
    }

    //
}
