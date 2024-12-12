<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Account</title>
  <!-- Bootstrap CSS -->
  <link href="./boostrap/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f0f8ff; /* Light blue background */
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .form-container {
      background: rgba(255, 255, 255, 0.8); /* White with transparency */
      border-radius: 15px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      padding: 30px;
      width: 100%;
      max-width: 400px;
    }
    .form-container h1 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }
  </style>
</head>
<body>
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
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>