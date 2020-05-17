<?php

    echo "Hey, This is kamal";

    // This is a Comment

    /*  
        This is multiline comment
        Got it? 
    */

    $a = 10;
    $b = 20;

    echo $a;

    echo "<hr/>";
    echo "<br/>";

    $r = $a + $b;
    $r = $a - $b;
    $r = $a * $b;
    $r = $a / $b;
    $r = $a % $b;

    echo "The result is: " . $r;

    if($a > $b){
        echo "a is greater than b";
    }
    elseif($a == $b){
        echo "a is equal to b";
    }
    else{
        echo "a is smaller than b";
    }

    $index_array = ["a", "b", "c", 1234];
    echo $index_array[2];

    $associative_array = ["pencils" => 4, "pens" => 10, "erasers" => 2];
    echo $associative_array["pencils"];

    for($i = 0; $i < sizeof($index_array); $i++){
        echo $index_array[$i];
    }

    while($i < sizeof($index_array)){
        echo $index_array[$i];
        $i++;
    }

    foreach($associative_array as $ac){
        echo $ac;
    }

    if(isset($_GET['username'])){
        echo $_GET['username'];
    }

    if(isset($_POST['username'])){
        echo $_POST['username'];
    }

    if(isset($_REQUEST['username'])){
        echo $_REQUEST['username'];
    }


?>