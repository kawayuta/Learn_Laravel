<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Input;
use Image;

class ArticlesController extends Controller
{
    public function index() {
        $articles = Article::all();
        return view('articles.index',compact('articles'));
    }

    public function show($id) {
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    public function create() {
        return view('articles.create');
    }


    public function store(ArticleRequest $request){
        $this->article = new Article();
        $this->article->fill($request->all());

        $image = Input::file('data');
        if(!empty($image)) {
            $this->article->fig_mime = $image->getMimeType();
            switch ($this->article->fig_mime) {
                case "image/jpg": $flag = TRUE; break;
                case "image/jpeg": $flag = TRUE; break;
                case "image/png": $flag = TRUE; break;
                case "image/gif": $flag = TRUE; break;
                default: $flag = FALSE;
            }
            if ($flag == FALSE) {
                \Flash::error('アップロード可能な画像ファイルは jpg, png, gif のみです。');
                return redirect()->back();
            }

            $resizeimage = Image::make($image);

            $resizeimage->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $this->article->fig_orig = file_get_contents($image);
            $this->article->fig_thumbnail = $resizeimage;
        }

        $this->article->save();
        return redirect('/events');

    }

    public function destroy($id)
    {
        $post = Article::find($id);
        $post->delete();
        return redirect('/events');
    }
}
