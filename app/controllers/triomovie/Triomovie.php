<?php

namespace App\controllers\triomovie;

use App\models\Model;
use App\controllers\Controller;

class Triomovie extends Controller {
  protected $model_name = \App\models\triomovie\Triomovie::class;
  
  public function index () {
    $this->getTriomovies();
  }
  
  public function getTriomovies () {
    $triomovies = $this->model->getTriomovies();
    foreach($triomovies as $triomovie) {
      $triomovie->created_at = date_format(date_create($triomovie->created_at), 'd/m/Y');
      $triomovie->cover_url = URLROOT . URL_MOVIECOVER . strtolower($triomovie->cover_url);
      $triomovie->movie_url = URLROOT . URL_MOVIE . strtolower($triomovie->movie_url);
      $triomovie->sub_title = URLROOT . URL_MOVIE . $triomovie->sub_title ?? strtolower($triomovie->sub_title);
    }
    Model::json($triomovies);
  }
}
