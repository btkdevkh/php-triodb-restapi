<?php

namespace App\libraries;

use Error;

class Core {   
  protected $currentController = 'Triosound';
  protected $currentMethod = 'index';
  protected $params = []; 

  public function __construct() {
    try {
      $url = $this->getUrl();
      // echo '<pre>';
      // var_dump($url);
      // echo '</pre>';

      if(!isset($url)) {
        throw new Error('Must contains "api/triosound" convention');
      }
      if(!isset($url[0]) || !isset($url[1])) {
        throw new Error('Must contains "api/triosound" convention');
      }

      if(!str_contains ($url[0], 'api') || !str_contains ($url[1], 'triosound')) {
        throw new Error('Must contains "api/triosound"');
      }

      $this->currentController = ucwords($url[1]);
      unset($url[0]);
      unset($url[1]);

      $this->currentController = "App\controllers\\" . strtolower($this->currentController) . "\\" . $this->currentController;
      $this->currentController = new $this->currentController;

      if(isset($url[2])) {
        if(method_exists($this->currentController, $url[2])) {
          $this->currentMethod = $url[2];
          unset($url[2]);
        }
      }

      $this->params = $url ? array_values($url) : [];

      call_user_func_array([$this->currentController, $this->currentMethod], $this->params);

    } catch(\Throwable $th) {
      var_dump('Throwable:', $th->getMessage());
    }
  }

  public function getUrl() {
    if(isset($_GET['url'])) {
      $url = rtrim($_GET['url'], "/");
      $url = filter_var($url, FILTER_SANITIZE_URL);
      $url = explode("/", $url);
      return $url;
    }
  }
}
