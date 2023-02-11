<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        //
//        dump($posts);
        return ($posts);
    }

    public function create()
    {
        $postsarr = [
            [
                'title' => 'title of php',
                'content' => 'some content',
                'image' => 'image.jpg',
                'likes' => 100,
                'is_published' => 1,
            ],
            [
                'title' => 'another title of php',
                'content' => 'another some content',
                'image' => 'another image.jpg',
                'likes' => 110,
                'is_published' => 1,
            ],
        ];
        foreach ($postsarr as $item) {
            Post::create($item);
        }
    }

    public function update()
    {
        $post = Post::find(5);
        $post->update([
            'likes' => 30,
            'is_published' => 1,
        ]);
    }

    public function delete()
    {
        $post = Post::find(6);

    }
}
