<?php

namespace App\models\triosound;

use App\models\Model;

class Triosound extends Model {
  public function getTriosounds () {
    $stmt = $this->db->prepare(
      "SELECT ts.id, ts.title, ts.singer, ts.cover_path AS coverUrl, ts.created_at AS createdAt, tm.song_path AS songUrl
      FROM triosound_song ts
      JOIN triosound_mp3 tm 
      ON ts.id = tm.fk_triosound_song_id"
    );
    $stmt->execute();
    $results = $stmt->fetchAll(\PDO::FETCH_OBJ);
    return $results;
  }
}
