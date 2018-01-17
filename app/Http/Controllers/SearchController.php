<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchnumber()
    {
        return view('/search/searchnumber');
    }

    public function searchcity()
    {
        return view('/search/searchcity');
    }
}
