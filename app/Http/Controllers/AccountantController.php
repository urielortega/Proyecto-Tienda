<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountantController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','is.accountant']);
    }

    public function index()
    {
        return view('accountant.accountant');
    }
}