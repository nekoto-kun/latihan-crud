<?php

function createConnection()
{
  $hostname = '127.0.0.1';
  $username = 'root';
  $password = '';
  $db = 'tutorial';

  try {
    $conn = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $conn;
  } catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
  }
}
