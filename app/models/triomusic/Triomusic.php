<?php

namespace App\models\triomusic;

use App\models\Model;

class Triomusic extends Model {
  public function getTriomusics () {
    $stmt = $this->db->prepare("SELECT tm.id, tm.title, tm.singer, tm.cover_url AS coverUrl, tm.music_url AS songUrl, tm.created_at AS createdAt FROM trio_music tm");
    $stmt->execute();
    $results = $stmt->fetchAll(\PDO::FETCH_OBJ);
    return $results;
  }
}
