<?php

  // Load Config
  require __DIR__ . '/helpers/env.php';
  require __DIR__ . '/helpers/error-reporting.php';
  require __DIR__ . '/helpers/functions.php';
  require __DIR__ . '/helpers/config.php';
  require __DIR__ . '/helpers/cookies.php';
  
  require __DIR__ . '/vendor/autoload.php';

  // Autoload Core libraries
  spl_autoload_register(function($classname){
    require __DIR__ . '/libraries/'.$classname.'.php';
  });
