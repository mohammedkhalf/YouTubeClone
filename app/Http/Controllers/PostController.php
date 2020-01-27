<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

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

    public function search ($searchKey)
    {
        $users = User::search($searchKey)->get();
        return view('search' , compact('users'));
    }
}
