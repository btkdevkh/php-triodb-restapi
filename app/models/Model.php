<?php

namespace App\models;

use App\libraries\Database;

class Model extends Database {
  protected $db;

  public function __construct() {
    $this->db = $this->connect();
  }

  public static function json ($datas) {
    header('Access-Control-Allow-Origin: *');
    echo json_encode($datas);
  }
}
