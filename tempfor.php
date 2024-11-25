<?php

// Assuming you have a list of faculties with their usernames stored in a database or an array, you can retrieve that data here
$faculties = [
    "Faculty A" => "faculty_a_username",
    "Faculty B" => "faculty_b_username",
    "Faculty C" => "faculty_c_username",
];

// Check if a faculty has been selected
if (isset($_POST['faculty'])) {

    // Retrieve the username for the selected faculty
    $selected_faculty = $_POST['faculty'];
    $username = $faculties[$selected_faculty];

    // Output the username in the next text box
    echo '<input type="text" name="username" value="'.$username.'">';
}

?>

<!-- Create a form with a select box for faculties and a text box for username -->
<form method="POST">
    <label for="faculty">Select a faculty:</label>
    <select id="faculty" name="faculty">
        <option value="Faculty A">Faculty A</option>
        <option value="Faculty B">Faculty B</option>
        <option value="Faculty C">Faculty C</option>
    </select>

    <label for="username">Username:</label>
    <input type="text" name="username" id="username" readonly>
</form>
