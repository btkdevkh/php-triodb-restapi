<?php

namespace App\controllers\triosound;

use App\models\Model;
use App\controllers\Controller;

class Triosound extends Controller {
  protected $model_name = \App\models\triosound\Triosound::class;
  
  public function index () {
    $this->getTriosounds();
  }
  
  public function getTriosounds () {
    $triosounds = $this->model->getTriosounds();
    foreach($triosounds as $triosound) {
      $triosound->cover_path = URLROOT . URL_IMG . $triosound->cover_path;
    }
    Model::json($triosounds);
  }
}
