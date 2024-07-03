<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View as View;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index(): View
    {
        return view('admin.dashboard');
    }
}
