<?php
    $reparacao = 78;
    $IVA = 23;

    $total = $reparacao + ($reparacao / 100 * $IVA);
    echo "reparação = ".$reparacao."<br>"
        ."reparação com o IVA = ".$total;

    


?>