<?php

namespace Quality\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Facades\Image;
use Quality\Article;

class ArticleController extends Controller
{
    
    public function __construct() {
        $this->middleware('auth')->except([
            'index', 'show'
        ]);
    }
    
    public function index() {
        $articles = Article::latest()->paginate(10);
        
        return view('articles.index', compact('articles'));
    }
    
    public function show($local, Article $article) {
        return view('articles.show', compact('article'));
    }
    
    public function edit($local, Article $article) {
        return view('articles.edit', compact('article'));
    }
    
    public function create() {
        return view('articles.create', compact('article'));
    }
    
    public function store() {
        $this->validate(request(), [
            'title' => ['required'],
            'title_fr' => ['required'],
            'body' => ['required'],
            'body_fr' => ['required'],
            'picture' => ['required', 'max:2000', 'mimetypes:image/jpeg,image/png'],
        ]);
        
        $image = request()->file('picture');
        $name = str_random(16).'-article.'.$image->getClientOriginalExtension();
        
        if(!File::isDirectory(public_path('upload'))) {
            File::makeDirectory(public_path('upload'), 0775);
        }
        
        $image = Image::make($image);
        $image = $image->widen(640, function ($constraint) {
            $constraint->upsize();
        });
        $image = $image->crop(640, 360);
        
        Log::info(public_path('upload').'/'.$name);
        $image->save(public_path('upload').'/'.$name);
        
        
        $article = Article::insert([
            'title' => request('title'),
            'title_fr' => request('title_fr'),
            'body' => request('body'),
            'body_fr' => request('body_fr'),
            'picture' => $name,
            'created_at' => Carbon::now()
        ]);
        
        $article = Article::latest()->first();
        
        return redirect()->route('articles.show', [
            'local' => session('lang'),
            'article' => $article,
        ]);
    }
    
    public function update($local, Article $article) {
        $this->validate(request(), [
            'title' => ['required'],
            'title_fr' => ['required'],
            'body' => ['required'],
            'body_fr' => ['required'],
        ]);
        
        $article->title = request('title');
        $article->title_fr = request('title_fr');
        $article->body = request('body');
        $article->body_fr = request('body_fr');
        
        if(request()->hasFile('picture')) {
            $image = request()->file('picture');
            $name = str_random(16).'-article.'.$image->getClientOriginalExtension();
    
            if(!File::isDirectory(public_path('upload'))) {
                File::makeDirectory(public_path('upload'), 0775);
            }
            $image = Image::make($image);
            $image = $image->widen(640, function ($constraint) {
                $constraint->upsize();
            });
            $image = $image->crop(640, 360);
    
            $image->save(public_path('upload').'/'.$name);
            $article->picture = $name;
        }
        
        $article->save();
        
        return view('articles.show', compact('article'));
    }
    
    public function destroy($local, Article $article) {
        $article->delete();
        
        return redirect()->route('articles.index', session('lang'));
    }
}
