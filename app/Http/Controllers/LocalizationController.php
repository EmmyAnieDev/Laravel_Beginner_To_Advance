<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocalizationController extends Controller
{
    function index()
    {
        return view('localization.index');
    }


    function selectLanguage()
    {
        $locale = request('locale'); // Retrieve the requested locale from the request.

        // Validate the requested locale.
        if ( in_array($locale, ['en', 'fr'])) {
            App::setLocale($locale);
        }

        // If locale does not exist, this fallbacks to 'en' by default which is sets in the .env file

        return view('localization.select-lang');
    }


}
