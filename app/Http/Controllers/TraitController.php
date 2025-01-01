<?php

namespace App\Http\Controllers;

use App\Traits\ImageUpload;
use Illuminate\Http\Request;

class TraitController extends Controller
{

    use ImageUpload;   // Add the trait to the class

    function index()
    {
        $this->uploadImage();   // To use the method in the ImageUpload trait.
    }
}
