<?php

  class SomecategorySomepage extends Controller {

    public function __construct(){

    }

    public function index(){
      $data = [
        'title' => ''
      ];
      $this->view('pages/somecategory-somepage', $data);
    }

  }
