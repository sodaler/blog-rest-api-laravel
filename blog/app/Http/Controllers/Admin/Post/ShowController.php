<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Post;


class ShowController extends BaseController
{
    public function __invoke(Post $post)
    {
        $posts = Post::all();
        return view('admin.post.show', compact('post', 'posts'));
    }
}
