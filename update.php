<?php
require_once "connect.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Retrieve the record with the given ID
    $sql = "SELECT * FROM user_table WHERE id = '$id'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = htmlspecialchars($row['name']); // Escape data to prevent XSS
        $email = htmlspecialchars($row['gmail']); // Adjusted for 'gmail' column
        $password = htmlspecialchars($row['password']);
        ?>
        
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Edit User</title>
            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        </head>
        <body>
            <div class="container mt-5">
                <h1 class="text-center">Edit User</h1>
                <form action="./update.inc.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="mb-3">
                        <label for="name" class="form-label">User Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="<?php echo $name; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">User Email</label>
                        <input type="email" class="form-control" name="email" id="email" value="<?php echo $email; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">User Password</label>
                        <input type="password" class="form-control" name="password" id="password" value="<?php echo $password; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Update</button>
                </form>
            </div>
        </body>
        </html>
        
        <?php
    } else {
        echo "<p class='text-danger'>No record found with ID $id.</p>";
    }
} else {
    echo "<p class='text-danger'>No ID provided.</p>";
}
?>
