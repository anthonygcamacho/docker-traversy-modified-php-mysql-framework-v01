<?php
if(ENVIRONMENT == 'development'){
    ini_set('display_errors', 1);
    error_reporting(E_ALL ^ E_NOTICE);
}
