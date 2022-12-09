<?php

namespace App\controllers;

class Controller {
  protected $model;
  protected $model_name;

  public function __construct() {
    $this->model = new $this->model_name;
  }
}
