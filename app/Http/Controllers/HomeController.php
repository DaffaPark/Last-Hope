<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\User;
use App\Models\Posts;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kategories = Kategori::count();
        $users = User::count();
        $posts = Posts::count();
        $user = User::findOrFail(Auth::id());
        return view('home',compact('kategories','users','user','posts'));
    }
}
