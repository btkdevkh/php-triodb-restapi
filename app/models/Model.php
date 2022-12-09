<?php

namespace App\models;

use App\libraries\Database;

class Model extends Database {
  protected $db;

  public function __construct() {
    $this->db = $this->connect();
  }

  public static function json ($datas) {
    header("Access-Control-Allow-Origin: *");
    header('Content-Type: application/json');
    header("Access-Control-Allow-Methods: PUT, DELETE, GET, POST");
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    echo json_encode(["items" => $datas]);
  }
}
