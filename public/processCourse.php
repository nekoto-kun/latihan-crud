<?php

require '../vendor/autoload.php';

use App\Controllers\CourseController;

if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {
  if (isset($_POST['_method'])) {
    if ($_POST['_method'] == 'PUT') {
      CourseController::updateCourse($_POST);
    }
    if ($_POST['_method'] == 'DELETE') {
      CourseController::deleteCourse($_POST['id']);
    }
  } else {
    CourseController::createCourse($_POST);
  }
  header('Location: /');
}
