<?php

namespace App\Controllers;

use App\Models\Course;
use App\Helpers\Connection;

use PDO;
use PDOException;

class CourseController
{
  public static function getAllCourses()
  {
    $sql = "SELECT * FROM courses";

    try {
      $conn = Connection::createConnection();
      $result = $conn->query($sql, PDO::FETCH_ASSOC);

      $courses = [];

      while ($course = $result->fetch()) {
        $courses[] = $course;
      }
      return $courses;
    } catch (PDOException $e) {
      die('Error reading data: ' . $e->getMessage());
    }
  }

  public static function getOneCourse($id)
  {
    $sql = "SELECT * FROM courses WHERE id = $id";

    try {
      $conn = Connection::createConnection();
      $result = $conn->query($sql, PDO::FETCH_ASSOC);

      return $result->fetch();
    } catch (PDOException $e) {
      die('Error reading data: ' . $e->getMessage());
    }
  }

  public static function createCourse($data)
  {
    try {
      $conn = Connection::createConnection();
      $sql = 'INSERT INTO courses (title, category, description) VALUES (?, ?, ?)';
      $statement = $conn->prepare($sql);

      $statement->execute([$data['title'], $data['category'], $data['description']]);
    } catch (PDOException $e) {
      die('Error creating data: ' . $e->getMessage());
    }
  }

  public static function updateCourse($data)
  {
    try {
      $conn = Connection::createConnection();
      $sql = 'UPDATE courses SET title=?, category=?, description=? WHERE id=?';
      $statement = $conn->prepare($sql);

      $statement->execute([$data['title'], $data['category'], $data['description'], $data['id']]);
    } catch (PDOException $e) {
      die('Error update data: ' . $e->getMessage());
    }
  }

  public static function deleteCourse($id)
  {
    try {
      $conn = Connection::createConnection();
      $sql = "DELETE FROM courses WHERE id = $id";
      $conn->query($sql);
    } catch (PDOException $e) {
      die('Error deleting data: ' . $e->getMessage());
    }
  }
}
