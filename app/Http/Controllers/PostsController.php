<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Http\Controllers\Controller;

class PostsController extends Controller {
  public function index() {
    $posts = Post::fetchAll();
    return view('posts.index')->withPosts($posts);
  }

  public function show($slug) {
    $post = Post::find($slug);
    return view('posts.show')->withPost($post);
  }
}
