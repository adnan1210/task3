<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard')->with('active_status', Auth::user()->active_status);
    }

    public function changeStatus(User $user){
        $user->update(['active_status'=>1]);
        return redirect()->back();
    }
}
