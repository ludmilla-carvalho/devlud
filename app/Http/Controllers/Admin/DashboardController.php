<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
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
        $port = \App\Portfolio::count();
        $skills = \App\Skill::count();
        $certs = \App\Certificate::count();
        $msgs = \App\Message::count();
        return view('admin.dashboard.index', compact('port', 'skills', 'certs', 'msgs'));
    }
}
