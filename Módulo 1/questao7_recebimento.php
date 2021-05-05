<?php
     $num1 = $_POST['numero1'];
     $num2 = $_POST['numero2'];
     $num3 = $_POST['numero3'];
     $num4 = $_POST['numero4'];
     $num5 = $_POST['numero5'];

     if ($num1>$num2 && $num1>$num3 && $num1>$num4 && $num1>$num5) {
         echo "O maior número é $num1!";
     }elseif ($num2>$num1 && $num2>$num3 && $num2>$num4 && $num2>$num5) {
         echo "O maior número é $num2!";
     }elseif ($num3>$num1 && $num3>$num2 && $num3>$num4 && $num3>$num5) {
         echo "O maior número é $num3!";
     }elseif ($num4>$num1 && $num4>$num2 && $num4>$num3 && $num4>$num5) {
         echo "O maior número é $num4!";
     }else{
         echo "O maior número é $num5!";
     }

?>