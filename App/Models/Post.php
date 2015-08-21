<?php

namespace App\Models;

class Post extends Model {
  private $table = "post";
  private $fields = array('id', 'post_title', 'post_text', 'post_created_at');

  function getTable() {
    return $this->table;
  }
}