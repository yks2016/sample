<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class StaticPagesController extends Controller
{
    public function home()
    {
        $feed_items = [];
        if (Auth::check()) {
            $feed_items = Auth::user()->feed()->paginate(20);
        }
        return view('staticPages/home', compact('feed_items'));
    }

    public function help()
    {
        return view('staticPages/help');
    }

    public function about()
    {
        return view('staticPages/about');
    }
}
