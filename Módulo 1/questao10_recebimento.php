<?php
    $data = $_POST['data'];
    $data = explode("-", $data);

    list($dia, $mes, $ano) = $data;

    $data = "$ano-$mes-$dia";

    echo "" .$ano. "<br>";
    echo "" .$mes. "<br>";
    echo "" .$dia. "<br>";
?>