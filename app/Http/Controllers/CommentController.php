<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Posts;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function store(Request $request)
    {
    	if (Auth::check())
    	{
    		$validator = Validator::make($request->all(), [
    			'comment_body' => 'required | string'
    		]);

    		if ($validator->fails()) {
    			return redirect()->back()->with('message', 'Comment area is mandetory');
    		}

    		$post = Posts::where('slug', $request->post_slug)->where('status', '0')->first();

    		if ($post)
    		{
    			Comment::create([
    				'post_id' => $post->id,
    				'user_id' => Auth::user()->id,
    				'comment_body' => $request->comment_body
    			]);
    			return redirect()->back();
    		}

    		else

    		{
    			return redirect()->back()->with('message', 'No Such Post Found');
    		}
    	}
    	else
    	{
    		return redirect()->back()->with('message', 'Login First To Comment');
    	}
    }

    public function destroy($comment_id)
    {
    	$comment = Comment::find($comment_id);
        $comment->delete();
    	return redirect()->back()->with('message', 'Your Comment Has Been Deleted');
    }
}
