<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Home</title>
  <!-- Bootstrap CSS -->
  <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .btn-animated {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-animated:hover {
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .heading {
      animation: fadeIn 2s ease;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }

    .about-section {
      background: linear-gradient(to right, #6a11cb, #2575fc);
      color: white;
      padding: 40px;
      border-radius: 8px;
    }

    .navbar-brand {
      font-size: 1.5rem;
      font-weight: bold;
    }

    .card {
      background: white;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }

    .carousel-inner {
      height: 300px;
    }

    .carousel-inner img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .carousel-caption {
      background: rgba(0, 0, 0, 0.7);
      color: white;
      padding: 10px;
      border-radius: 5px;
    }
  </style>

</head>
<body class="bg-light">
  <!-- Header Include -->
  <?php include './includes/header.php' ?>

  <!-- Main Content -->
  <div class="container text-center py-5">
    <h1 class="heading text-primary mb-4">Welcome to User Home</h1>
    <a href="insert.php" class="btn btn-success btn-animated px-4 py-2">
      <h2 class="m-0">Add User</h2>
    </a>
  </div>

  <!-- Slideshow Section -->
  <div id="carouselExampleIndicators" class="carousel slide mt-4" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./images/pic1.jpg" class="d-block" alt="Slide 1">
        <div class="carousel-caption">
          <h5>Slide 1 Title</h5>
          <p>Description for Slide 1.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./images/pic2.jpg" class="d-block" alt="Slide 2">
        <div class="carousel-caption">
          <h5>Slide 2 Title</h5>
          <p>Description for Slide 2.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./images/pic3.jpg" class="d-block" alt="Slide 3">
        <div class="carousel-caption">
          <h5>Slide 3 Title</h5>
          <p>Description for Slide 3.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- About Us Section -->
  <div id="about" class="about-section text-center mt-5">
    <div class="container">
      <h2 class="mb-4">About Us</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card p-4">
            <h4>Our Mission</h4>
            <p>Learn PHP through simple projects and enhance the skills.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card p-4">
            <h4>Contain</h4>
            <p>Add, view, edit, and delete CRUD functions.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card p-4">
            <h4>Learn</h4>
            <p>Database connection, simple CRUD, includes, and basic JavaScript functions.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Include -->
  <?php include './includes/footer.php' ?>

  <!-- External Scripts -->
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="./script.js"></script>
</body>
</html>
