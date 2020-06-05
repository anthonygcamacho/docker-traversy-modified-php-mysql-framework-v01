<?php
  /*
   * Base Controller
   * Loads models and views
   */

   class Controller {

     // Load model
     public function model($model){
       // require model file
       require __DIR__ . '/../models/' . $model . '.php';
       // instantiate model
       return new $model();
     }

     // Load views
     public function view($view, $data = []){
       // check for view file_exists
       if(file_exists('../app/views/' . $view . '.php')){
         require __DIR__ . '/../views/' . $view . '.php';
       } else {
         die('View does not exist');
       }
     }

   }
