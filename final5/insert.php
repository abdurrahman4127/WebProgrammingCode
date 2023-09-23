<?php
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $dbname = "university";

    $conn = new mysqli($server_name, $user_name, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $_POST['name'];
    $s_id = $_POST['s_id'];
    $cgpa = $_POST['cgpa'];

    $sql = "INSERT INTO `student`(`name`, `s_id`, `cgpa`) 
    VALUES ('{$name}', '{$s_id}', '{$cgpa}')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } 
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
