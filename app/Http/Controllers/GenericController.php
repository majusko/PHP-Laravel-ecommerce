<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class GenericController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function contact()
    {
        return view('pages.contact');
    }

}
