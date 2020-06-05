<?php

  class Somecategory extends Controller {

    public function __construct(){

    }

    public function index(){
      $data = [
        'title' => ''
      ];
      $this->view('pages/somecategory', $data);
    }

  }
