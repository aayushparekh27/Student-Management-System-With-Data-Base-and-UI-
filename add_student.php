<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect and sanitize input data
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $enrollment_number = $_POST['enrollment_number'] ?? '';
    $phone_number = $_POST['phone_number'] ?? '';
    $university_name = $_POST['university_name'] ?? '';
    $college_name = $_POST['college_name'] ?? '';
    $enrollment_date = $_POST['enrollment_date'] ?? '';

    // Prepare the SQL query to insert the data
    $sql = "INSERT INTO Students (name, email, enrollment_number, phone_number, university_name, college_name, enrollment_date) 
            VALUES ('$name', '$email', '$enrollment_number', '$phone_number', '$university_name', '$college_name', '$enrollment_date')";

    // Execute the query and check for success
    if ($conn->query($sql) === TRUE) {
        echo "New student added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close(); // Close the database connection
}
?>
