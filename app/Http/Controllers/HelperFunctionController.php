<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelperFunctionController extends Controller
{
    function index()
    {
        return makeSlug('Hello World');   // Will returns hello-world
    }
}
