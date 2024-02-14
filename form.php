<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Information</title>
    <meta charset="UTF-8">
    <meta name="description" content="Form">
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

    <h1>Student Information Record</h1>

    <section id= "form" class="form">
        <div class="container">
            <div class="data">Data</div>
            <form action="sendInfo.php" method="post">
                <div class="databox">
                    <div class="dataspace">
                        <span>First Name</span> <input type="text" name="fname" placeholder="Enter First Name" required>
                    </div>
                    <div class="dataspace">
                        <span>Last Name</span> <input type="text" name="lname" placeholder="Enter Last Name" required>
                    </div>
                </div>
                <div class="databox">
                    <div class="dataspace">
                        <span>Email</span> <input type="email" name="email" placeholder="student@student.on.ca" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required>
                    </div>
                    <div class="dataspace">
                        <span>Subject</span> <input type="text" name="subjectt" placeholder="Enter subejct" required>
                    </div>
                </div>
                <div class="databox">
                    <div class="dataspace">
                        <span>Grade</span> <input type="number" name="grade" placeholder="1" step="0.01">
                    </div>
                </div>
                <div class="submitButton">
                <input class="submit" type="submit" value="Submit form">
                </div>
            </form>
        </div>
    </section>    
    <div class="footer">
        <footer>
            <p>©2024 Georgian College</p>
        </footer>
    </div>
</body>
</html>