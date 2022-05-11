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
        $courses[] = new Course($course['id'], $course['title']);
      }
      return $courses;
    } catch (PDOException $e) {
      die('Error reading data: ' . $e->getMessage());
    }
  }

  public static function getOneCourse()
  {
  }

  public static function createCourse()
  {
  }

  public static function updateCourse($newCourse)
  {
  }

  public static function deleteCourse($id)
  {
  }
}
