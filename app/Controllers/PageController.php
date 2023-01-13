<?php

namespace App\Controllers;

class PageController extends BaseController
{
    public function index()
    {
        helper('url');
        return view('layouts/header')
            .view('pages/index')
            .view('layouts/footer');
    }

    public function about()
    {
        return view('layouts/header')
            .view('pages/about')
            .view('layouts/footer');
    }
}
