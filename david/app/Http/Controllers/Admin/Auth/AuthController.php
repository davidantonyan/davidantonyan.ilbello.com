<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Admin;
use Auth;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $redirectTo = '/admin/dashboard';
    protected $guard = 'admin';

    public function __construct()
    {
        $this->middleware($this->guestMiddleware(),['except'=>'logout']);
    }

    public function showLoginForm(){
        return view('admin.auth.login');
    }

}