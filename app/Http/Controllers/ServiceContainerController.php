<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceContainerController extends Controller
{
    function index()
    {
        // The 'app()' function returns the service container,
        // which holds all the services and dependencies for the application.
        dd(app());
    }

    function createBinding()
    {
        // The 'make()' method resolves the service or dependency
        // associated with the provided abstract name ('first_class' in this case).
        app()->make('first_class');
    }
}
