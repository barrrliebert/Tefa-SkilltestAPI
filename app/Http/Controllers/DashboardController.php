<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // Ambil token dari session
        $token = $request->session()->get('access_token');

        return view('dashboard', compact('token'));
    }
}
