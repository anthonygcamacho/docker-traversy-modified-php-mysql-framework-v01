<?php

  class SomeOtherCategorySomeOtherPage extends Controller {

    public function __construct(){

    }

    public function index(){
      $data = [
        'title' => ''
      ];
      $this->view('pages/some-other-category-some-other-page', $data);
    }

  }
