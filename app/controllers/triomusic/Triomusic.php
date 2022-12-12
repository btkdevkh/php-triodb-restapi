<?php

namespace App\controllers\triomusic;

use App\models\Model;
use App\controllers\Controller;

class Triomusic extends Controller {
  protected $model_name = \App\models\triomusic\Triomusic::class;
  
  public function index () {
    $this->getTriomusics();
  }
  
  public function getTriomusics () {
    $triomusics = $this->model->getTriomusics();
    foreach($triomusics as $triomusic) {
      $triomusic->createdAt = date_format(date_create($triomusic->createdAt), 'd/m/Y');
      $triomusic->coverUrl = URLROOT . URL_MUSICCOVER . $triomusic->coverUrl;
      $triomusic->songUrl = URLROOT . URL_MUSIC . $triomusic->songUrl;
    }
    Model::json($triomusics);
  }
}
