<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Students</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Student List</h2>
    <div class="floating-box">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Enrollment Number</th>
                <th>Date of Birth</th>
                <th>Phone Number</th>
                <th>University Name</th>
                <th>College Name</th>
                <th>Enrollment Date</th>
            </tr>
            <?php
            include 'db.php';
            $sql = "SELECT * FROM Students";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['student_id']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['enrollment_number']}</td>
                            <td>{$row['dob']}</td>
                            <td>{$row['phone_number']}</td>
                            <td>{$row['university_name']}</td>
                            <td>{$row['college_name']}</td>
                            <td>{$row['enrollment_date']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='9'>No students found</td></tr>";
            }
            $conn->close();
            ?>
        </table>
    </div>
</body>
</html>
