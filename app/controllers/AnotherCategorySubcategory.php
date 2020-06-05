<?php

  class AnotherCategorySubcategory extends Controller {

    public function __construct(){

    }

    public function index(){
      $data = [
        'title' => ''
      ];
      $this->view('pages/another-category-subcategory', $data);
    }

  }