<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use App\Article;
use App\Category;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Brian2694\Toastr\Facades\Toastr;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $articles = Article::latest()->get();

        return view('admin.article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $categories = Category::all();
        $tags = Tag::all();
        return view('admin.article.create', compact('categories', 'tags'));
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
            'title' => 'required',
            'categories' => 'required|max:25, min:3',
            'tags' => 'required|max:25, min:3',
            'quote' => 'max:255',
            'body' => 'required'
        ]);
        $image = $request->file('image');
        $slug = str::slug($request->title);
        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $ext = $image->getClientOriginalExtension();
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$ext;
            if (!Storage::disk('public')->exists('post')) {
                Storage::disk('public')->makeDirectory('post');
            }
            $imageSize = Image::make($image)->resize(777, 441)->stream();
            Storage::disk('public')->put('post/'.$imageName, $imageSize);
        }else{
            $imageName = 'default.png';
        }
        $article = new Article();
        $article->user_id = Auth::id();
        $article->title = str::title($request->title);
        $article->slug = $slug;
        if($request->status){
            $article->status = true;
        }
        $article->is_approve = true;
        $article->image = $imageName;
        $article->quote = $request->quote;
        $article->body = $request->body;
        $article->save();
        $article->articleTags()->attach($request->tags);
        $article->articleCategories()->attach($request->categories);
        toastr::success('Your Tag Successfully Created :)', 'success');
        return redirect()->route('admin.article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      return $article = Article::find($id);
       return view('admin.article.edit', compact('article'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
