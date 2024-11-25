<?php
// Connect to the database
include('authentication.php');
include'db.php';

// Check if the admin is logged in
if (isset($_SESSION['auth_faculty'])) {
    $admin_id = $_SESSION['auth_faculty'];

    // Retrieve the subjects assigned to the admin
    $query = "SELECT s_cname FROM subject_info WHERE admin_id = $admin_id";
    $result = mysqli_query($conn, $query);

    // Check if any subjects were found
    if (mysqli_num_rows($result) > 0) {
        // Display the subjects
        echo "<h2>Subjects assigned to you:</h2>";
        echo "<ul>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<li>" . $row['subject_name'] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No subjects have been assigned to you.</p>";
    }
}
?>
