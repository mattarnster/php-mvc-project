<?php

namespace App\Controller;

use App\View\View;
use App\Models\Post;

class PostController extends BaseController {
  function __construct() {
    // Controller init code
  }

  function index() {
    $posts = new Post();
    $posts_data = $posts->fetchAll();
    
    return $view = new View('post.index', ['posts' => $posts_data]);
  }

  function post() {
    return false;
  }
}