<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Account</title>
  <!-- Correct Bootstrap CSS Path -->
  <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f0f8ff; /* Light blue background */
      margin: 0;
      font-family: Arial, sans-serif;
      padding-bottom: 60px; /* Space for footer */
    }

    /* Header and Footer styling */
    header {
      background-color: #007bff; /* Blue background */
      color: white;
      padding: 15px 0;
      text-align: center;
    }

    /* Form container styling */
    .form-container {
      background-color: #ffffff; /* Solid white background */
      border-radius: 10px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
      padding: 40px;
      width: 100%;
      max-width: 450px;
      margin: auto; /* Center the form horizontally */
    }

    .form-container h1 {
      text-align: center;
      margin-bottom: 30px;
      color: #333;
      font-size: 24px;
      font-weight: 600;
    }

    /* Form elements styling */
    .form-container .form-label {
      font-weight: 500;
      color: #555;
    }

    .form-container .form-control {
      border-radius: 8px;
      padding: 12px;
      font-size: 16px;
    }

    .form-container button {
      border-radius: 8px;
      padding: 12px;
      font-size: 16px;
      transition: background-color 0.3s;
    }

    .form-container button:hover {
      background-color: #0056b3; /* Darker blue on hover */
    }

    /* Center the form container vertically */
    .d-flex-center {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding-top: 20px; /* Space from the top */
    }

    /* Footer styling */
    footer {
      width: 100%;
      padding: 10px 0;
      position: relative; /* Ensure footer is placed at the bottom without overlap */
    }
  </style>
</head>
<body>

<?php include 'includes/header.php'; ?>

<!-- Main content centered in the viewport -->
<div class="d-flex-center">
  <div class="form-container">
    <h1>Insert User Details</h1>
    <form action="./insert.inc.php" method="post">
      <div class="mb-3">
        <label for="name" class="form-label">User Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Helaya" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">User Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Helaya@gmail.com" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">User Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="********" required>
      </div>
      <button type="submit" class="btn btn-primary w-100">Submit</button>
    </form>
  </div>
</div>

<!-- Footer (included from 'footer.php') -->
<?php include 'includes/footer.php'; ?>

<!-- Correct Bootstrap JS Path -->
<script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
