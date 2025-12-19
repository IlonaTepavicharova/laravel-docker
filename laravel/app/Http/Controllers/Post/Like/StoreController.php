<?php

namespace App\Http\Controllers\Post\Like;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\Comment\StoreRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
//use http\Client\Curl\User;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function __invoke(Post $post)
    {
        auth()->user()->likedPost()->toggle($post->id);

        return redirect()->back();
    }
}
