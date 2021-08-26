<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('backend.article.index');
    }

    public function create()
    {
        return view('backend.article.create');
    }
}
