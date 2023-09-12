<?php

    $bmaior = $_REQUEST['bmaior'];
    $bmenor = $_REQUEST['bmenor'];
    $altura = $_REQUEST['altura'];

    $area = (($bmaior + $bmenor) / 2) * $altura;

    echo "A área do Trapézio é de $area";
