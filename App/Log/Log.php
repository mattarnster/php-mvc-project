<?php

namespace App\Log;

class Log {
  private $debug = 0;
  private $log_messages = array();

  function __construct($debug_flag) {
    $this->debug = $debug_flag;
  }

  function log($s, $lm) {
    if ($this->debug) {
      $this->log_messages[] = $s . ": " . $lm;
    }
  }

  function getLogMessages() {
    return $this->log_messages;
  }
}