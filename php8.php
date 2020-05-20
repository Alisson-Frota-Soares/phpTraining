<?php 
    $pais = "Portugal em Grande";

    echo $pais."<br>";

    echo "a) quarto: ".$pais[3]." /quinto: ".$pais[4]
    ." /sexto: ".$pais[5]." /setimo: ".$pais[6];
    echo "<br>";

    echo "b) ".strlen($pais);

    echo "<br>";

    echo "c) ".strtoupper($pais);

    echo "<br>";

    echo "c) ".strtolower($pais);

    echo "<br>";

    echo "c) ".str_word_count($pais);
?>