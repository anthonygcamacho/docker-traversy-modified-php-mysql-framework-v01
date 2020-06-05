<?php

  class AboutSubpage extends Controller {

    public function __construct(){

    }

    public function index(){
      $data = [
        'title' => ''
      ];
      $this->view('pages/about-subpage', $data);
    }

  }
