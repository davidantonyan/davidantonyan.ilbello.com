<?php
namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller{

    public function __construct()
    {
        $this->middleware('admin');
    }
    
    public function showDashboard()
    {
        return view('admin.dashboard.dashboard')->with(['user'=>Auth::guard('admin')->user()]);
    }
}