<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function showConfirmPage()
    {
        return view('Confirm');
    }

    public function showThanksPage()
    {
        return view('thanks');
    }

    public function showRegisterPage()
    {
        return view('register');
    }

    public function createNewUser()
    {
    }

    public function showLoginPage()
    {
        return view('login');
    }
}