<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Http\Controllers\Controller;

class FrontController extends Controller
{
  public function index()
  {
    $data = User::first();
    return view('index')->with(compact('data'));
  }
}