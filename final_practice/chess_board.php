<?php
$size = 5;

$count = 0;

for ($i = 0; $i < $size; $i++) {
    echo "<table border=1>";
    echo "<tr>";

    $count = 0;
    for ($j = 0; $j < $size; $j++) {
        if (abs($i-$j)%2==0) {
            echo "<td style='height:40px; width: 50px; background-color:black'> - </td>";
        } 

        else {
            echo "<td style='height:40px; width: 50px; background-color:white; color:white'> - </td>";
        }
    }

    echo "</tr>";
}

/*
for black:
    00 02 04
    11 13 15
    20 22 24
    31 33 35
    40 42 44

    see the pattern, jackass?
    the difference between i and j are always even 
*/