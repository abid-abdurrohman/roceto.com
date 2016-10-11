<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\News;
use App\Model\Tag;
use App\Model\Comment;
use App\Model\User;
use App\Http\Requests;

class NewsUserController extends Controller
{
    public function index()
    {
      	$news = News::latest()->paginate(5);
      	return view('news.news', compact('news'));
    }

    public function show($slug)
    {
      	$other_news = News::all();
      	$news = News::where('slug', $slug)->first();
        $comments = Comment::where('news_id', $news->id)->join('users', 'users.id', '=', 'comments.user_id')
          ->select('users.name as nama_user', 'users.avatar as avatar_user', 'comments.*')->get();
        return view('news.news-single', compact('news', 'other_news', 'comments'));
    }

    
}
