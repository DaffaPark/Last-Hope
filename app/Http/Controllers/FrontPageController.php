<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Posts;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FrontPageController extends Controller
{
    public function index()
    {

        $categories = Kategori::where('status', '0')->get()->take(3);
        $latest_post = Posts::where('status', '0')->orderBy('created_at','DESC')->get()->take(3);
        return view('front.welcome', compact('categories','latest_post'));
    }
    public function user()
    {
        $user = User::findOrFail(Auth::id());

        return view('front.welcome', compact('user'));
    }

    public function viewCategory($category_slug)
    {
        $category = Kategori::where('slug', $category_slug)->where('status', '0')->first();
        if ($category)
        {
            $post = Posts::where('kategori_id', $category->id)->where('status', '0')->paginate(2);
            return view('front.post.index', compact('post','category'));
        }
        else
        {
            return redirect('/');
        }
    }
    public function viewCategories()
    {
        $categories = Kategori::where('status', '0')->get();
        return view('front.post.category', compact('categories'));
    }

    public function latestPosts()
    {
        $allposts = Posts::where('status', '0')->orderBy('created_at','DESC')->paginate(5);
        return view('front.post.latestPosts', compact('allposts'));
    }

    public function viewPost(string $kategori_slug, string $post_slug)
    {
        $category = Kategori::where('slug', $kategori_slug)->where('status', '0')->first();
        if ($category)
        {
            $post = Posts::where('kategori_id', $category->id)->where('slug', $post_slug)->where('status', '0')->first();
            $latest_posts = Posts::where('kategori_id', $category->id)->where('status', '0')->orderBy('created_at', 'DESC')->get()->take(10);
            return view('front.post.view', compact('post','latest_posts','category'));
        }
        else
        {
            return redirect('/');
        }
    }
}
