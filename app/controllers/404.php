<?php

  class PageNotFound extends Controller {

    public function __construct(){

    }

    public function index(){
      $data = [
        'title' => ''
      ];
      $this->view('pages/404', $data);
    }

  }
