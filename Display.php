<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employee Information</title>
    <meta charset="UTF-8">
    <meta name="description" content="View page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="hcont">
            <nav>
                <ul id="navbar">
                    <li><a href="Form.php">Student records</a></li>
                    <li><a href="Display.php">Student Grades</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <h1>View student data</h1>

    <section class="php">
    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="myDB";
    
    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die("connection failed".$conn->connect_error);
    }
    $sql = "SELECT * FROM tbl_student_info";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo '<div class="table-container">';
        echo "<table>";
        echo "<tr>";
        echo "<th>Employee ID</th>";
        echo "<th>First Name</th>";
        echo "<th>Last Name</th>";
        echo "<th>Email</th>";
        echo "<th>Subject</th>";
        echo "<th>Grade</th>";
        echo "</tr>";
        
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["student_id"] . "</td>";
            echo "<td>" . $row["fname"] . "</td>";
            echo "<td>" . $row["lname"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["subjectt"] . "</td>";
            echo "<td>" . $row["grade"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo '</div>';
    } else {
        echo "0 results found";
    }
    
    $conn->close();
    ?>
    </section>    
    <div class="footer">
        <footer>
            <p>©2024 Georgian College</p>
        </footer>
    </div>
</body>
</html>