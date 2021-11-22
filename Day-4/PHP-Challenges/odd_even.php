<?php

    echo "<h3>Find odd and even number without using modulus</h3>";

    function oddEven($n){
        $num = ($n/2)*2;
        if($n == $num){
            echo "even";
        }
        else{
            echo "odd";
        }
    }

?>