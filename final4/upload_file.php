<?php
    $file_path = $_FILES['upload_file']['tmp_name'];

    $file_name = $_FILES['upload_file']['name'];
    echo "file name: " . $file_name . "<br>";

    $file_size = $_FILES['upload_file']['size'];
    echo "file size: " . ($file_size / 1024) . "KB <br>";
    
    $file_type = $_FILES['upload_file']['type'];
    echo "file type: " . $file_type . "<br>";

    // location to save
    $server_path = './' . $file_name;

    if ($file_size < (300 * 1024) && $file_type == "image/jpeg") {
        if(move_uploaded_file($file_path, $server_path)){
            echo "<br>[successfully uploaded]";
        } else {
            echo "<br>[failed to upload]";
        }
    }
    else {
        echo "<br>[failed to upload]";
    }
?>