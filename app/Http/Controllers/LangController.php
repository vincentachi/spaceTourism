<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LangController extends Controller
{
    public function choixLang($lang)
    {
        if (in_array($lang, ['fr', 'en'])){
            session()->put('locale', $lang);
            // dd($lang);
            // App::setLocale($lang);
            // $var = App::getLocale();
            // dd($var);
        }
    return redirect()->back();
    }
}
