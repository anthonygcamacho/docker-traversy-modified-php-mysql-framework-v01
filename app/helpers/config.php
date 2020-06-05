<?php

  // Globals
  define('APPROOT', dirname(dirname(__FILE__)));
  define('SITENAME', 'rf-php-framework');
  define('LINE_BREAK', '<br />');

  // Settings
  switch (ENVIRONMENT) {
    case 'development':
      define('DB_HOST', 'localhost');
      define('DB_USER', 'username');
      define('DB_PASS', 'password');
      define('DB_NAME', 'domain_name_here');
      define('SITEURL', 'http://localhost:8080');
      define('SITEDOMAIN', 'http://localhost:8080');
      define('PUBLICASSETS', 'http://localhost:8080/public');
      define('HTTP_SECURE', 'http');
      define('CSS_VERSION', '20200101.01');
      define('JS_VERSION', '20200101.01');
      break;
    case 'production':
      define('DB_HOST', 'localhost');
      define('DB_USER', 'username');
      define('DB_PASS', 'password');
      define('DB_NAME', 'domain_name_here');
      define('SITEURL', '[FULL_URL_HERE]');
      define('SITEDOMAIN', '[FULL_URL_HERE]');
      define('PUBLICASSETS', '[FULL_URL_HERE]/public');
      define('HTTP_SECURE', 'https');
      define('CSS_VERSION', '20200101.01');
      define('JS_VERSION', '20200101.01');
      break;
    default:
      break;
  }
