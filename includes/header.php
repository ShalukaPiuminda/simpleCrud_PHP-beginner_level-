<style>
  body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f8f9fa; /* Light background */
  }
  .navbar {
    background-color: #007bff; /* Blue navbar */
    padding: 0.5rem 1rem;
  }
  .navbar .navbar-brand, 
  .navbar .nav-link {
    color: #fff !important;
    font-weight: 500;
  }
  .navbar .nav-link:hover {
    color: #d4d4d4 !important;
  }
  .navbar-toggler {
    border-color: rgba(255, 255, 255, 0.3);
  }
  .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
  }
  .container-fluid {
    margin-top: 2rem;
  }
  h1 {
    margin-bottom: 1.5rem;
    font-size: 1.75rem;
    color: #333;
    text-align: center;
  }
  .table-container {
    padding: 1rem;
    border-radius: 8px;
    background: #fff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    max-width: 80%;
    margin: auto;
  }
</style>

<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <i class="bi bi-house-fill"></i> User Home
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="insert.php">Add User</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="index.php#about">About Us</a>
          </li>

        <li class="nav-item">
          <a class="nav-link" href="display.php">All Users</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
