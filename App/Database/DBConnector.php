<?php

namespace App\Database;

class DBConnector {
  private $db_connection;
  
  private $db_host = '';
  private $db_user = '';
  private $db_pass = '';
  private $db_name = '';

  function __construct($cf) {
    $this->parseConfigValues($cf);
    $this->testConnection();
  }

  private function getDbHost() {
    return $this->db_host;
  }

  private function getDbName() {
    return $this->db_name;
  }

  private function getDbUser() {
    return $this->db_user;
  }

  private function getDbPass() {
    return $this->db_pass;
  }

  private function parseConfigValues($cf) {
    $valid_config_array_values = array('DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASS');

    foreach ($valid_config_array_values as $v) {
      if (array_key_exists($v, $cf)) {
        switch ($v) {
          case 'DB_HOST':
            $this->db_host = $cf[$v];
            break;
          case 'DB_USER':
            $this->db_user = $cf[$v];
            break;
          case 'DB_PASS':
            $this->db_pass = $cf[$v];
            break;
          case 'DB_NAME':
            $this->db_name = $cf[$v];
            break;
        }
      } else {
        throw new \Exception("Error Processing Request: Bad config file", 1);
      }
    }
  }

  private function testConnection() {
    $connection_string = 'mysql:host=' . $this->getDbHost() . ';dbname=' . $this->getDbName();
    
    try {
      $db_connection = new \PDO($connection_string, $this->getDbUser(), $this->getDbPass());
    } catch (\PDOException $e) {
      throw new Exception("PDO Exception!", 1);
    }

    return true;
  }
}