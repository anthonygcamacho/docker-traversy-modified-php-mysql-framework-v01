<?php

  /*
  * App Core Class
  * Creates URL & loads core controller
  * URL FORMAT - /controller/methods/params
  */
  class Core {

    protected $currentController = 'Home';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct(){

      $this->forceTrailingSlash();

      $url = $this->getUrl();
      // print_array($url);

      $strJsonFileContents = file_get_contents(APPROOT . '/helpers/registered-pages.json');
      $registered_pages = json_decode($strJsonFileContents, true);
      // print_array($registered_pages);
       
      // Home
      if(!$url[0]){
        require APPROOT . '/controllers/' . $this->currentController . '.php';
        $this->currentController = new $this->currentController;
      }

      // Pages & Categories
      if(is_array($url) && count($url) > 0){
        $controller_name = $this->urlChecker($url)[0];
        $registered_page = $this->urlChecker($url)[1];
        if ( !file_exists(APPROOT . '/controllers/' . $controller_name . '.php') || !in_array($registered_page, $registered_pages['list']) ){
          $this->currentController = $this->pageNotFoundToggle(true, $this->currentController);
        } else {
          $this->currentController = $controller_name;
          require APPROOT . '/controllers/' . $this->currentController . '.php';
          $this->currentController = new $this->currentController;
        }
      }

      // Attach Params & Initialize Page
      $this->params = $url ? array_values($url) : [];
      call_user_func_array([$this->currentController, $this->currentMethod], $this->params);

    }

    public function forceTrailingSlash(){
      $parts = explode('?', $_SERVER['REQUEST_URI'], 2);
      if (substr($parts[0], -1) !== '/') {
        print_r($parts);
        $uri = SITEDOMAIN.$parts[0].'/'.(isset($parts[1]) ? '?'.$parts[1] : '');
        header('Location: '.$uri, true, 301);
        exit;
      }
    }

    public function getUrl(){
      if(isset($_GET['url'])){
      $url = rtrim($_GET['url'], '/');
      $url = filter_var($url, FILTER_SANITIZE_URL);
      $url = explode('/', $url);
      return $url;
      }
    }

    public function urlChecker($url){
      $controller_name = '';
      $registered_page = '';
      foreach($url as $key) {
        if(substr_count($key, '-') > 0){
          $controller_name .= str_replace( " ","", ucwords( str_replace( "-", " ", $key ) ) );
        } else {
          $controller_name .= ucwords($key);
        }
        if($registered_page){
          $registered_page .= '-' . strtolower( $key );
        } else {
          $registered_page .= strtolower( $key );
        }
      }
      return [$controller_name, $registered_page];
    }

    public function pageNotFoundToggle($toggle, $currentController){
      if($toggle){
        require APPROOT . '/controllers/404.php';
        return new PageNotFound;
      } else {
        header('Location: '.SITEURL);
      }
    }

  }
