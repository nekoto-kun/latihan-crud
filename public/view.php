<?php
require '../vendor/autoload.php';

use App\Controllers\CourseController;

$course = CourseController::getOneCourse($_GET['id']);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title><?= $course['title'] ?></title>

  <style>
    .cover {
      object-fit: cover;
      width: 100%;
      height: 240px;
    }
  </style>
</head>

<body>
  <header>
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">About</h4>
            <p class="text-muted">Our online courses is diverse and always up-to-date. Feel free to explore new skills provided by our professionals.</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contact</h4>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">Follow on Twitter</a></li>
              <li><a href="#" class="text-white">Like on Facebook</a></li>
              <li><a href="#" class="text-white">Email me</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="/" class="navbar-brand d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 48 48" data-name="Layer 1" id="Layer_1" class="me-2" stroke="currentColor" fill="white">
            <path d="M8,1A2,2,0,0,0,6,3V45a2,2,0,0,0,4,0V3A2,2,0,0,0,8,1Z" />
            <path d="M43.55,13.74C38.22,7.18,32.71,7.62,27.84,8c-4.63.37-8.29.66-12.29-4.27A2,2,0,0,0,12,5V22a2,2,0,0,0,.94,1.7,9.09,9.09,0,0,0,4.91,1.46c4,0,7.8-2.62,11.28-5,5.14-3.53,8.49-5.52,11.81-3.45a2,2,0,0,0,2.61-3ZM26.87,16.85C22.22,20,19,22,16,20.78V9.66c4.18,3,8.37,2.63,12.16,2.33,2.54-.2,4.79-.38,7,.31C32.23,13.17,29.46,15.07,26.87,16.85Z" />
          </svg>
          <strong>Digital Lecture</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </header>

  <main>
    <div class="album py-5 bg-light">
      <div class="container">
        <div class="col-8">
          <h3><?= $course['title'] ?></h3>
          <h5 class="badge bg-success"><?= $course['category'] ?></h5>
          <hr>
          <p><?= $course['description'] ?></p>
        </div>
      </div>
    </div>

  </main>

  <footer class="text-muted py-5">
    <div class="container">
      <p class="float-end mb-1">
        <a href="#">Back to top</a>
      </p>
      <p class="mb-0">&copy; <?= date('Y') ?> STMIK LIKMI</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>