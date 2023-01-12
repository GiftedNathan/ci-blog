<?php

namespace App\Controllers;

class PageController extends BaseController
{
    public function index()
    {
        helper('url');
        return view('pages/index');
    }

    public function about()
    {
        return view('pages/about');
    }
}
