<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth, View;
use App\Models\User;

class DashboardController extends Controller
{
    protected $view = 'admin.';

    // public function __construct()
    // {
            // #code..    
    // }

    protected function guard()
    {
        return auth()->guard();
    }

    public function index()
    {
        $title = 'Dashboard';
        $data = User::all();

        return view($this->view.'dashboard', compact('title', 'data'));
    }

    public function header()
    {
        $data = User::all();
        return view('layouts.admin.inc.header')->with(compact('data'));
    }
}
