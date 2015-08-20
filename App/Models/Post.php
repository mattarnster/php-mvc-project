<?php

namespace App\Models;

use \App\Config\ConfigReader;
use \App\Database\DBConnector;

class Post {
  private $table = "post";
  private $fields = array('id', 'post_title', 'post_text', 'post_created_at');

  private $dbc = null;
  private $dbcf = null;

  function __construct() {
    // Get DB Config
    $cf = new ConfigReader();
    $cf->readConfig();

    $this->dbcf = $cf->getDatabaseConfig();

    $this->dbc = new DBConnector($this->dbcf);
    // Test for table existance
    $this->testForTableRead();
  }

  private function testForTableRead() {
    $result = $this->dbc->executeQuery('SELECT * FROM ' . $this->table . ';');
    if (!$result) {
      throw new \Exception("Query could not be executed", 1);   
    } else {
      return true;
    }
  }

  public function getAllPosts() {
    $result = $this->dbc->executeQuery('SELECT * FROM ' . $this->table . ';');
    
    return $result;
  }
}