<?php
echo "While Loops in PHP <br>";

// echo 1 . "<br>";     
// echo 2 . "<br>";
// echo 3 . "<br>";
// echo 4 . "<br>";
// echo 5 . "<br>";

// Incrementing by 1 (i++)
$i = 0;
while($i<5){
    echo $i+1 . "<br>";
    $i++;
}

// Incrementing by 2 (i+=2)
$i = 0;
while($i<5){
    echo $i+1 . "<br>";
    $i+=2;
}

// While Loops with two variables
$i = 0;
$x = 9;
while($i<100 && $x<60){
    echo $i+1 . "<br>";
    $i+=3;
    $x+=4;
}
?>