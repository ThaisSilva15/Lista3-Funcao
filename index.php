<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            function primo($num) {
                $cont=0;  
                for ($i=1; $i<=$num; $i++){
                    if ($num%$i==0){
                        $cont++;
                   }
                }
                if ($cont==2){
                    echo " Primo ";
                } else {
                    echo " Não é primo ";
                }
             }
       
            
            primo(24);
        ?>
    </body>
</html>
