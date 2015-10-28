<?php

namespace App\Modules;

interface Module {
  function register();
  function renderableViewTemplates();
}