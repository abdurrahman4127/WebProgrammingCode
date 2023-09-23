<?php
    $server_name = "localhost";
    $user = "root";
    $password = "";
    $db_name = "university";

    $conn = new mysqli($server_name, $user, $password, $db_name);

    if($conn->connect_error){
        echo "error: " . $conn->connect_error;
    }

    if(isset($_POST['name']) && isset($_POST['cgpa'])) {
        $name = $_POST['name'];
        $cgpa = $_POST['cgpa'];

        $sql = "INSERT INTO `abc`(`name`, `cgpa`) VALUES ('$name','$cgpa')";
        
        if($conn->query($sql)) {
            echo "congratulation, son, you have made something! <br>";
        } else {
            echo "you're a fucking disappointment! <br>";
        }
    } 


    // to see the data
    $sql2 = "SELECT * FROM `abc`";
    $result = $conn->query($sql2);

    if($result->num_rows > 0) {
        echo "<table border=1>";
        echo "<th>ID</th><th>NAME</th><th>CGPA</th>";

        while($row = $result->fetch_assoc()) {
            echo "
                <tr>
                    <td>$row[id]</td><td>$row[name]</td><td>$row[cgpa]</td>
                </tr>";
        }
    }

    $conn->close();
?>

