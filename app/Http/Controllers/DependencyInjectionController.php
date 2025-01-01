<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DependencyInjectionController extends Controller
{

    public $request;

    // Using the dependency class in the constructor will make it available throughout this class
    public function __construct(Request $request)
    {
        $this->request = $request;
    }


    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return [1, 2, 3, 4, 5, 6, 7, 8, 9, $request->number]; // Using the method-injected dependency
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', $this->request->word];  // Using the class-wide dependency injected via the constructor
    }

}
