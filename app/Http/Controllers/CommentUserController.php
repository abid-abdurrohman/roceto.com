<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Model\Comment;

use App\Model\News;
use Illuminate\Support\Facades\Auth;

class CommentUserController extends Controller
{
    public function store($id, Request $request){
    	  $this->validate($request, [
          'comment' => 'required'
        ]);
        $input = $request->all();
        $input['news_id'] = $id;
        $input['user_id'] = Auth::user()->id;

        Comment::create($input);
        $news = News::findOrFail($id);
        return redirect()->action('NewsUserController@show', $news->slug)->with('success', 'Comment success');
    }
}
