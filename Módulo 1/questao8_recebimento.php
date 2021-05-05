<?php
	$num = array($_POST['numero1'],$_POST['numero2'],$_POST['numero3'],$_POST['numero4'],$_POST['numero5'],$_POST['numero6'],$_POST['numero7'],$_POST['numero8'],$_POST['numero9']);

    for ($i=0; $i < count($num); $i++) { 
         if ($num[$i]>=18) {
             echo "Com " .$num[$i]. " anos é maior de idade <br>";
         }else {
             echo "Com " .$num[$i]. " anos é menor de idade <br>";
         }
 }
 ?>