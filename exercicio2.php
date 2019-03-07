<?php

    function primo($num) {
                $cont=0;  
                
                for ($i=1; $i<=$num; $i++){
                    if ($num%$i==0){
                        $cont++;
                   }
                }
                
                if ($cont == 2){
                    echo "<p>O número $num é Primo</p>";
                } else {
                    echo "<p>O número $num NÃO é Primo</p>";
                }
    }
    
    for ($i=1; $i<=100; $i++){
      primo ($i);  
    }
?>
    

