<?php

namespace App\Http\Controllers;

use App\Model\News;
use App\Model\Tag;
use App\Model\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::paginate(5);
        $tags = Tag::lists('nama', 'id');
        return view('admin.news.index', compact('news', 'tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::lists('nama', 'id');
        return view('admin.news.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'thumbnail' => 'required',
            'kategori' => 'required',
            'tag_list' => 'required',
            'deskripsi' => 'required'
        ]);
        $input = $request->all();
        $input['author'] = "Admin";
        $input['slug'] = str_slug($request->judul, '-');

        $photo = $request->thumbnail->getClientOriginalName();
        $destination = 'images/news/'.$request->kategori.'/';
        $request->thumbnail->move($destination, $photo);

        $input['thumbnail'] = $destination.$photo;

        $news = News::create($input);

        $news->tags()->attach($request->input('tag_list'));

        return redirect()->action('NewsController@index')->with('success','News has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
      $news = News::where('slug', $slug)->first();
      $comments = Comment::all();
      return view('admin.news.show', compact('news', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $news = News::findOrFail($id);
      $tags = Tag::lists('nama', 'id');

      return view('admin.news.edit', compact('news', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'judul' => 'required',
        'thumbnail' => 'required',
        'kategori' => 'required',
        'deskripsi' => 'required'
      ]);
      $input = $request->all();
      $news = News::findOrFail($id);

      $input['slug'] = str_slug($request->judul, '-');
      $photo = $request->thumbnail->getClientOriginalName();
      $destination = 'images/news/'.$request->kategori.'/';
      $request->thumbnail->move($destination, $photo);

      $input['thumbnail'] = $destination.$photo;
      $news->update($input);

      $news->tags()->sync($request->input('tag_list'));
      return redirect()->action('NewsController@index')->with('info','News has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $news = News::findOrFail($id);
      Storage::delete($news->thumbnail);
      $news->delete();
      return redirect()->action('NewsController@index')->with('danger','News has been deleted');
    }

}
