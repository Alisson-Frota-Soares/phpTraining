<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php5</title>
</head>
<body>
    <form method="post">
        <label>digite um numero inteiro</label>
        <input name="n1" type="number" required >
        <br>
        <label>digite outro numero inteiro</label>
        <input name="n2" type="number" required >
        <br><br>
        <input value="calcular" type="submit" />
        <input value="limpar" type="reset" />
    </form>
    
    <?php
    
        if (isset($_POST["n1"]) && isset($_POST["n2"])) {

            $n1 = $_POST["n1"];
            $n2 = $_POST["n2"];
                    
            $quociente = $n1 / $n2;
            $resto = $n1 % $n2;
                
            echo "numero 1 = ".$n1."<br>"
                ."numero 2 = ".$n2."<br><br>"
                ."Quociente = ".$quociente."<br>"
                ."Resto = ".$resto;

            


        }
    ?>


</body>
</html>
