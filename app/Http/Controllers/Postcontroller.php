<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    // Postというモデルを$postsという変数をインスタンス化し格納
    public function index(Post $post)
    {
        // returnで後ろに書いてある値を返却。Controllerからviewにデータが渡る。
        // WithでPostテーブルにある取得件数を制御した関数データをGet（ページネーション）
        return view('posts/index') -> with(['posts'=> $post -> getPaginateByLimit()]);
    }
    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }
    public function create()
    {
        return view('/posts/create');
    }
    public function store(Request $request, Post $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
}