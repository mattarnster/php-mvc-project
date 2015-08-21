<?php

namespace App\Models;

use \App\Database\DBConnector;
use \App\Config\ConfigReader;

class Model {
  private $dbc = null;
  private $dbcf = null;

  function __construct() {
    // Get DB Config
    $cf = new ConfigReader();
    $cf->readConfig();

    $this->dbcf = $cf->getDatabaseConfig();

    $this->dbc = new DBConnector($this->dbcf);

    // // Test for table existance
    $this->testForTableRead();
  }

  private function testForTableRead() {
    $result = $this->dbc->executeQuery('SELECT * FROM ' . $this->getTable() . ';');
    if (!$result) {
      throw new \Exception("Query could not be executed", 1);   
    } else {
      return true;
    }
  }

  public function fetchAll() {
    $result = $this->dbc->executeQuery('SELECT * FROM ' . $this->getTable() . ';');
    
    return $result;
  }
}