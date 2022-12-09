<?php

namespace App\models\triosound;

use App\models\Model;

class Triosound extends Model {
  public function getTriosounds () {
    $stmt = $this->db->prepare("SELECT * FROM triosound_song");
    $stmt->execute();
    $results = $stmt->fetchAll(\PDO::FETCH_OBJ);
    return $results;
  }
}
