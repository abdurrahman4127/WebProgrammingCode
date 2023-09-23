<?php
    $pineapple = $_POST['pineapple'];
    $price = $pineapple * 12.50;

    $tips = $_POST['tips'];

    // discount calculation
    if($pineapple >=1 && $pineapple <=10) {
        $price = $price - ($price * 0.10);
    } 
    elseif($pineapple >=11 && $pineapple <=20) {
        $price = $price - ($price * 0.15);
    }
    else {
        $price = $price - ($price * 0.20);
    }



    // adding tax
    $price = $price + ($price * .20);

    //checking for home delivery
    $is_delivery = $_POST['radio'];

    //checking for home delivery
    if($is_delivery == 'yes') {
        $price += 50;
    } else {
        //
    }
    
    // adding tips
    $price += $tips;

    echo 'your bill: ' . $price;
?>
