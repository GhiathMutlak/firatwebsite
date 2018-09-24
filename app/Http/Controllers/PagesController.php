<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index() {
        $name = "index page";
        return view('pages.index')->with( 'name', $name );
    }

    public function about() {
        $name = "about page";
        return view('pages.about')->with('name', $name);
    }

    public function proLanguage() {
        $name = "";
        $names = array( 'J'=>'JAVA', 'P'=>'PHP', 'C'=>'C++' );
        return view('pages.proLanguage')->with('names', $names)->with( 'name', $name );
    }

}
