<?php
    /* digitar dos numero e imprimir cual es el <mayor></mayor>*/
    $nr1=100; $nr2=20;
    if ($nr1 > $nr2){
        echo "El nro " . $nr1 . " Es mayor que ". $nr2;
    }
    else{
        echo "El nro ".$nr2 ." es mayor que ". $nr1;
    }
    echo "<br>";

    // coloca un nro del 1 a 7 y mostrar el día

    $dia = 1;
    if ($dia == 1){
        echo "Lunes";
    }
    elseif ($dia == 2){
        echo "Martes";
    }
    elseif($dia == 3){
        echo "Mércoles";
    }
    else{
        echo "Error en el nro";
    }
    
    echo "<br>";
    switch ($dia) {
        case 1: echo "Lunes"; break;
        case 2: {echo "Martes";break;}
        case 3: {echo "Miércoles";break;}
        default:
                {echo "error en el nro ";}

    }

    for ($i=1; $i<11; $i++){
        echo "<p> 1 * ". $i. " = ". $i * 1 ."</p>";
    }
    $i=1;
    while ($i<11){
        echo "<p> while 1 * ". $i. " = ". $i * 1 ."</p>";
        $i++;
    }

    $res ="s";
    while($res =="s"){
        echo "Bienvenido ";
        $res ="n";
    }

    //array

    echo "<br>";echo "<br>";
    $colors = ['blue','red','yello'];
    print_r($colors);
    echo "<br>";
    print_r($colors[0]);
    echo "<br>"; echo "foreach";
    foreach($colors as $valor){
        echo "<br>";
        echo "dentro de foreach ".$valor;
        echo "<br>";
    }

    echo "<br>";echo "<br>";
    echo "<br> Asociativos";
    echo "<br>";
    $datos =[
        "name" => "Albeiro",
        "cc" => 123,
        "phone"=> 317,
        "name1" => "Albeixxro",
        "cc2" => 123,
        "phone2"=> 317,
    ];

    print_r($datos);
    echo "<br>"; echo "Asocitivo";
    foreach($datos as $key => $valor){
        echo "<br>";
        echo "$key $valor";        
    }
?>

