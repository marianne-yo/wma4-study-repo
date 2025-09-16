<?php
/*
    Marianne C. Balen
    BSIT-WMA4A
*/

if (!empty($_POST["Submit"])) {
    $student = $_POST["studentName"];
    $course = $_POST["courseName"];

    $subjects = !empty($_POST['subjects']) ? $_POST['subjects'] : [];

    function displaySubs($subjArr) {
        echo "<h3>Favorite Subjects: </h3>";
        foreach ($subjArr as $subject) {
            echo $subject . "<br> ";
        }
        echo "<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
</head>
<body>
    
    <h2>Student Form</h2>
    <form action="" method="post">
        Student Name: <input type="text" name="studentName"/><br><br>
        Course: <input type="text" name="courseName"/><br><br>

        Favorite Subjects:<br>
        <input type="checkbox" id="sub1" name="subjects[]" value="Math" />
        <label for="sub1">Math</label><br>

        <input type="checkbox" id="sub2" name="subjects[]" value="English" />
        <label for="sub2">English</label><br>

        <input type="checkbox" id="sub3" name="subjects[]" value="Science" />
        <label for="sub3">Science</label><br>

        <input type="checkbox" id="sub4" name="subjects[]" value="History" />
        <label for="sub4">History</label><br><br>
        
        <input type="submit" name="Submit" value="Submit" />
        <br>
    </form>

    <?php
    if (!empty($_POST["Submit"])) {
        displaySubs($subjects);
    }
    ?>
</body>
</html>
