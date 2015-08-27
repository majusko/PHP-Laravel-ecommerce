<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{

    const TITLE = "PHP-Laravel-ecommerce";
    const GITHUB_LINK = "https://github.com/majusko/PHP-Laravel-ecommerce";

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function about()
    {
        return view('pages.about')->with('title', self::TITLE)->with('github_link', self::GITHUB_LINK);
    }
}
