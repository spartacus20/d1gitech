<?php

$ligax = mysqli_connect('localhost','id18418381_loja','D1*tech12345');
					
                    if(!$ligax){
                    echo "<p> Falha na ligação";
                    exit;
                    }
                  
                   
                    mysqli_select_db($ligax,'id18418381_d1gitech');


?>