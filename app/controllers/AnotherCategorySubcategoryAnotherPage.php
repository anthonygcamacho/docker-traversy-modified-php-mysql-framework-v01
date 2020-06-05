<?php

  class AnotherCategorySubcategoryAnotherPage extends Controller {

    public function __construct(){

    }

    public function index(){
      $data = [
        'title' => ''
      ];
      $this->view('pages/another-category-subcategory-another-page', $data);
    }

  }
