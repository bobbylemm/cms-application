<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

/**
 * This methods returns the posts that have been trahsed but not deleted
 */
class TrashedController extends Controller
{
    public function index()
    {
        $trashed = Post::onlyTrashed()->get();
        return view('posts.index')->withPosts($trashed);
    }
}
