<?php
    $textfeild1 = $_POST['txt1'];
    
    $new_balace = $textfeild1 + ($textfeild1 * .2); 
    
    echo "with bonus: $new_balace";    
    // echo "with bonus: " . $new_balace;    
?>
