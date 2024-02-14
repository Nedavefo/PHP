<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Information</title>
    <meta charset="UTF-8">
    <meta name="description" content="Info page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="hcont">
            <nav>
                <ul id="navbar">
                    <li><a href="#">Home</a></li>
                    <li><a href="Form.php">Student records</a></li>
                    <li><a href="Display.php">Student Grades</a></li>
                </ul>
            </nav>
        </div>
        <div>
            <form class="d-flex" role="search" action="#" method="get" onsubmit="return false;">
            <input class="search" type="search" placeholder="Search" aria-label="Search" id="searchInput">
            <button class="button" type="button" onclick="search()">Search</button>
            </form>
        </div>
    </header>
    
    <section class="php">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "myDB";
    
    $conn = new mysqli($servername, $username, $password, $database);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $table_exists_query = "SHOW TABLES LIKE 'tbl_student_info'";
    $table_exists_result = $conn->query($table_exists_query);

    if ($table_exists_result->num_rows == 0) {
        $create_table_sql = "CREATE TABLE tbl_student_info (
            student_id INT AUTO_INCREMENT PRIMARY KEY,
            fname VARCHAR(30),
            lname VARCHAR(30),
            email VARCHAR(30),
            subjectt VARCHAR(30),
            grade DECIMAL(8,2) DEFAULT 0
        )";
    
        if ($conn->query($create_table_sql) === TRUE) {
            echo '<div id="success-message1">Table created successfully</div>';
        } else {
            echo "Error creating table: " . $conn->error;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $subjectt = $_POST['subjectt'];
        $grade = floatval($_POST['grade']);

        $insert_data_sql = "INSERT INTO tbl_student_info (
                                fname,
                                lname,
                                email,
                                subjectt,
                                grade
                            ) VALUES ('$fname', '$lname', '$email', '$subjectt', $grade)";

        if ($conn->query($insert_data_sql) === TRUE) {
            echo '<div id="success-message2">Information saved successfully!</div>';
        } else {
            echo "Error inserting data: " . $conn->error;
        }
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
