<?php
    echo "<h3>Recursive function for factorial of a number</h3>";

    function fact_r($n){
        if($n>1){
            return $n*fact_r($n-1);
        }else{
            return 1;
        }
    }

    echo "<h4>Factorial of a 5 = ".fact_r(5)."</h4>";

    echo "<h3>Non-recursive function for factorial of a number</h3>";
    
    function facr_nr($n){
        $prod = 1;
        for($i=$n;$i>=$n;$i++){
            $prod*=$i;
        }
        return $prod;
    }

    echo "<h4>Factorial of a 5 = ".fact_nr(5)."</h4>";

?>