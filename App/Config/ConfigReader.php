<?php

namespace App\Config;

class ConfigReader {
  private $database_config;
  private $routables_config;

  public function readConfig() {
    $config = __DIR__.'/../../config.yml';
    
    $config = file_get_contents($config);
    $config = \yaml_parse($config);

    if (!$config) {
      throw new \Exception("Error Processing Request: Couldn't read config file.", 1);
    }

    $this->database_config = $config['Database'];
    $this->routables_config = $config['Routables'];

    return true;
  }

  public function getDatabaseConfig() {
    return $this->database_config;
  }

  public function getRoutablesConfig() {
    return $this->routables_config;
  }
}