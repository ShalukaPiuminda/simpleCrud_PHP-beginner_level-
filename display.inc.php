<?php
require_once 'connect.php';

// Retrieving data from the database
$sql = "SELECT * FROM user_table";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["gmail"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["password"]) . "</td>";
        echo "<td>";
        echo "<button class='btn btn-transparent btn-sm' onClick=\"redirectToUpdateForm('" . htmlspecialchars($row["id"]) . "')\">Edit</button> ";
        echo "<a href=\"delete.php?delete_id=" . htmlspecialchars($row["id"]) . "\" class='btn btn-transparent btn-sm'>Delete</a>";
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5' class='text-center'>No data available</td></tr>";
}

$con->close();
?>
