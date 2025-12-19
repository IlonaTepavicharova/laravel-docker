<?php

namespace App\Http\Controllers\Personal\Liked;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
//use http\Client\Curl\User;
use Illuminate\Http\Request;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = auth()->user()->likedPost;
        return view('personal.liked.index', compact('posts'));
    }
}
