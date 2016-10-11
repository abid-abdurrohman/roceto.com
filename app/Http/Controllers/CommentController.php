<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\News;
use App\Model\Comment;
use App\Http\Requests;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $news = News::findOrFail($id);
        return view('admin.comment.create', compact('news'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $this->validate($request, [
            'comment' => 'required'
        ]);
        $input = $request->all();
        $news = News::findOrFail($id);
        $input['news_id'] = $news->id;
        $input['user_id'] = 1;
        Comment::create($input);
        return redirect()->action('NewsController@show', $news->slug)->with('success', 'Comment has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $id_comment)
    {
        $news = News::findOrFail($id);
        $comment = Comment::findOrFail($id_comment);
        return view('admin.comment.show', compact('news', 'comment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $id_comment)
    {
        $news = News::findOrFail($id);
        $comment = comment::findOrFail($id_comment);
        return view('admin.comment.edit', compact('news', 'comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $id_comment)
    {
        $this->validate($request, [
            'comment' => 'required'
        ]);
        $news = News::findOrFail($id);
        $comment = Comment::findOrFail($id_comment);
        $input = $request->all();
        $input['news_id'] = $news->id;
        $input['user_id'] = 1;
        $comment->update($input);
        return redirect()->action('NewsController@show', [$news->slug])->with('info', 'Comment has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $id_comment)
    {
        $news = News::findOrFail($id);
        $comment = Comment::findOrFail($id_comment);
        $comment->delete();
        return redirect()->action('NewsController@show', $news->slug)->with('danger', 'Comment has been deleted');
    }
}
