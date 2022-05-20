<?php
require '../vendor/autoload.php';

use App\Controllers\CourseController;

$courses = CourseController::getAllCourses();

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Home</title>

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

    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Online Courses</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
          <p>
            <button href="#" class="btn btn-primary my-2" data-bs-toggle="modal" data-bs-target="#addnew">Add course</button>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p>
        </div>
      </div>
    </section>

    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <?php foreach ($courses as $course) : ?>
            <div class="col">
              <div class="card shadow-sm">
                <img src="https://placeimg.com/640/480/tech" class="cover">

                <div class="card-body">
                  <h5 class="card-title"><?= $course['title'] ?></h5>
                  <p class="card-text"><?= $course['description'] ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="/view.php?id=<?= $course['id'] ?>" type="button" class="btn btn-sm btn-outline-secondary">View</a>
                      <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editData" onclick="setCourseToEdit(<?= $course['id'] ?>, '<?= $course['title'] ?>', '<?= $course['category'] ?>', '<?= $course['description'] ?>')">Edit</button>

                      <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#confirmDelete" onclick="setIdToDelete(<?= $course['id'] ?>)">Delete</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach ?>
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

  <!-- Add new course modal -->
  <div class="modal fade" id="addnew" tabindex="-1" aria-labelledby="addnewLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addnewLabel">Add new course</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="processCourse.php" method="post">
          <div class="modal-body">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="courseName" placeholder="Course name" name="title" required>
              <label for="courseName" class="form-label">Course name</label>
            </div>
            <div class="mb-3">
              <label for="courseCategory" class="form-label">Category</label>
              <select class="form-select" aria-label="Category" id="courseCategory" name="category" required>
                <option value="" selected>Choose a category</option>
                <option>Math</option>
                <option>Economy</option>
                <option>Linguistic</option>
                <option>Tech</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="courseDescription" class="form-label">Course description</label>
              <textarea rows="4" class="form-control" name="description" id="courseDescription"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Edit course modal -->
  <div class="modal fade" id="editData" tabindex="-1" aria-labelledby="editDataLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editDataLabel">Update course</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="processCourse.php" method="post">
          <input type="hidden" name="_method" value="PUT">
          <input type="hidden" name="id" value="" id="idToBeUpdated">
          <div class="modal-body">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="editCourseName" placeholder="Course name" name="title" required>
              <label for="editCourseName" class="form-label">Course name</label>
            </div>
            <div class="mb-3">
              <label for="editCourseCategory" class="form-label">Category</label>
              <select class="form-select" aria-label="Category" id="editCourseCategory" name="category" required>
                <option value="" selected>Choose a category</option>
                <option>Math</option>
                <option>Economy</option>
                <option>Linguistic</option>
                <option>Tech</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="editCourseDescription" class="form-label">Course description</label>
              <textarea rows="4" class="form-control" name="description" id="editCourseDescription"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Delete Confirmation Modal -->
  <div class="modal fade" id="confirmDelete" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="confirmDeleteLabel">Delete confirmation</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Are you sure you want to delete this course?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <form action="processCourse.php" method="post">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="" id="courseIdToDelete">
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <script>
    function setIdToDelete(id) {
      document.getElementById('courseIdToDelete').setAttribute('value', id)
    }
  </script>

  <script>
    function setCourseToEdit(id, title, category, description) {
      document.getElementById('idToBeUpdated').setAttribute('value', id)
      document.getElementById('editCourseName').setAttribute('value', title)

      const cat = document.getElementById('editCourseCategory')
      const optToSelect = Array.from(cat.options).find(item => item.text === category)
      optToSelect.selected = true

      document.getElementById('editCourseDescription').innerHTML = description
    }
  </script>
</body>

</html>