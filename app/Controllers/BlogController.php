<?php

namespace App\Controllers;

class BlogController extends BaseController
{
    public function index()
    {
        return view('layouts/header')
                    .view('blog/index')
                    .view('layouts/footer');
    }

    public function create()
    {
        return view('layouts/header')
                    .view('blog/create')
                    .view('layouts/footer');
    }
}
