<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    function index()
    {
        return view('localization.index');
    }
}
