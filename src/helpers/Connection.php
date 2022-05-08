<?php

namespace App\Helpers;

use PDO;
use PDOException;

class Connection
{
  public static function createConnection()
  {
    $hostname = '127.0.0.1';
    $username = 'root';
    $password = '';
    $db = 'test-db';

    try {
      $conn = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      return $conn;
    } catch (PDOException $e) {
      echo 'Connection failed: ' . $e->getMessage();
    }
  }
}
