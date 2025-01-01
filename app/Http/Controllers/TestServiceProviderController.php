<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestServiceProviderController extends Controller
{
    function index()
    {
        dd(app()->make('test_service'));
    }
}
