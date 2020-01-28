<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Jobs\SendWelcomeEmail;  //where let this job controller

class PostController extends Controller
{
    public function index()
    {
        return view('form');
    }
    public function store(Request $request)
    {
        $this->validate($request ,[
            'g-recaptcha-response' => 'required|captcha'
        ]);
        return $request->all();
    }
    public function processQueue()
    {
        $emailJob = new SendWelcomeEmail();
        $emailJob->delay(Carbon::now()->addMinutes(1));
        dispatch($emailJob);
    }
}
