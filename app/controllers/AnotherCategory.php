<?php

  class AnotherCategory extends Controller {

    public function __construct(){

    }

    public function index(){
      $data = [
        'title' => ''
      ];
      $this->view('pages/another-category', $data);
    }

  }