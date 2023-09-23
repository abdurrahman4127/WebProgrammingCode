<?php
    // $servername = "127.0.0.1"; works as well
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "university";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // to update everyone's GCPA
    // $sql = "UPDATE `student` SET `cgpa`='3.0'";

    // to update perticular person's name
    // $sql = "UPDATE `student` SET `name`='Spike Spiegel' where `name` = 'simon'";

    // to delete
    // $sql = "DELETE FROM `student` WHERE `sl` = 5";

    // $name = "L Lawliet";

    $sql = "SELECT * FROM student";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border = 1>";
        echo "<th>SL</th><th>NAME</th><th>STUDENT_ID</th><th>CGPA</th>";

        while($row = $result->fetch_assoc()) {
            echo 
                "<tr>
                    <td>$row[sl]</td>
                    <td>$row[name]</td>
                    <td>$row[s_id]</td>
                    <td>$row[cgpa]</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "no one exists with that name {$name}";
    }

    $conn->close();
?>