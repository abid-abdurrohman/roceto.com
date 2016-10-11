<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\News;
use App\Model\Tag;

class TagUserController extends Controller
{
    public function index($id)
    {
        $news_tag = News::join('news_tag', 'news.id', '=', 'news_tag.news_id')->where('news_tag.tag_id', $id)->select('news.*', 'news_tag.tag_id as id_tag')->paginate(5);
        $tags = Tag::findOrFail($id);
        // $news = News::findOrFail(1);
        // $tags = $news->tags()->get();
        // return dd($tags);
        return view('tags.tags',compact('news_tag', 'tags'));
    }
}
