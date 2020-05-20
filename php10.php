<?php 
    $prova1 = 20;
    $prova2 = 13;
    $prova3 = 16;

    $media = ($prova1 + $prova2 + $prova3) / 3;

    echo "prova 1 nota: ".$prova1."<br>";

    echo "prova 2 nota: ".$prova2."<br>";

    echo "prova 3 nota: ".$prova3."<br>";

    echo "media: ".$media;
    
    echo "<br>";

    if ($media >= 9.5)
        echo "Está aprovado!";
    else if ($media > 8)
        echo "Está de recuperação";
    else if ($media <= 8)
        echo "Está reprovado";
        
    
    

?>