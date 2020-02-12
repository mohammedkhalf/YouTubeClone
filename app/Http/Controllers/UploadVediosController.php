<?php

namespace App\Http\Controllers;
use App\Channel;
use Illuminate\Http\Request;

class UploadVediosController extends Controller
{

    public function index()
    {
        return view('channels.upload');
    }


}
