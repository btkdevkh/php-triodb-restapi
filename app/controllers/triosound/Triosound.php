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
      $triosound->createdAt = date_format(date_create($triosound->createdAt), 'd/m/Y');
      $triosound->coverUrl = URLROOT . URL_IMG . $triosound->coverUrl;
      $triosound->songUrl = URLROOT . URL_SONG . $triosound->songUrl;
    }
    Model::json($triosounds);
  }
}
