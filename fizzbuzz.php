<?php
   for ($count = 1; $count <= 100; $count++){
    if ($count % 3 == 0){
        echo 'fizz';
    }

    elseif ($count % 5 == 0){
        echo 'buzz';
        }
    
    elseif ($count % 3 == 0 && $count % 5 == 0){
        echo 'fizzbuzz';
        }
    
    else{
        echo $count;
        }   
        echo '<br>';
   }
?>