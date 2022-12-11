<?php

namespace App\models\triomovie;

use App\models\Model;

class Triomovie extends Model {
  public function getTriomovies () {
    $stmt = $this->db->prepare("SELECT * FROM trio_movie ORDER BY released_year DESC");
    $stmt->execute();
    $results = $stmt->fetchAll(\PDO::FETCH_OBJ);
    return $results;
  }
}
