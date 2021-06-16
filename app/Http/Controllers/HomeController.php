<?php

namespace App\Http\Controllers;

use App\UploadSettuweb;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $upload_settuweb = UploadSettuweb::all();
        return view('admin.dashboard_settuweb', compact('upload_settuweb'));
    }
}
