<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    // Postというモデルを$postsという変数をインスタンス化し格納
    public function index(Post $post)
    {
        // returnで後ろに書いてある値を返却。PostテーブルにあるすべてのデータをGet
        return $post->get();
    }
}