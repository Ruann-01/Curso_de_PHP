<?php
	$num = array($_POST['nome1'],$_POST['nome2'],$_POST['nome3'],$_POST['nome4'],$_POST['nome5'],$_POST['nome6'],$_POST['nome7'],$_POST['nome8'],$_POST['nome9']);

    for ($i=count($num)-1; $i <= count($num); $i--) { 
        echo "As palavras são: " .$num[$i]. "<br>";
    if ($i == 0) {
            break;
        }
    }
 ?>