<?php

function add($x , $y){
    return $x + $y ;
}

echo add(15 , 10);


function hello($x){

    $user = $x;

    if ($user === "Abdullah"){
        echo "hello " . $user;
    }else{
        echo "Bye " . $user;
    }

}

hello("Abdullah");
echo "<br>";
hello("Ahmed");
echo "<br>";

?>