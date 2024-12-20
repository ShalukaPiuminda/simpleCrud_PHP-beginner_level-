<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Data Table</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body, html {
      height: 100%;
      margin: 0;
    }

    .container {
      display: flex;
      flex-direction: column;
      justify-content: center; /* Centers vertically */
      align-items: center; /* Centers horizontally */
      min-height: 50vh /* Full screen height */
    }    

    .table-container {
      background: rgba(255, 255, 255, 0.95);
      border-radius: 15px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 90%;
      max-width: 1000px;
    }

    .table-container h1 {
      text-align: center;
      margin-bottom: 20px;
      color: #343a40;
    }

    .btn-transparent {
      background: rgba(0, 123, 255, 0.1);
      color: #007bff;
      border: 1px solid #007bff;
      transition: background-color 0.3s, color 0.3s;
    }
    .btn-transparent:hover {
      background: #007bff;
      color: #fff;
    }

    th {
      background-color: #6c757d;
      color: white;
    }

    tr:hover {
      background-color: #e9ecef;
    }
  </style>
</head>
<body>
  <!-- Include header -->
  <?php include './includes/header.php'; ?>

  <!-- Container to center the table -->
  <div class="container">
    <div class="table-container">
      <h1>User Data Display</h1>
      <table class="table table-hover table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php include 'display.inc.php'; ?>
        </tbody>
      </table>
    </div>
  </div>

   <!-- Footer Include -->
   <?php include './includes/footer.php' ?>

<!-- External Scripts -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="./script.js"></script>
</body>

</html>
