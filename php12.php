<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php11</title>
</head>
<body>
    <form method="post" action="">
        <input type="number" name="num">
        <input type="submit" value="enviar" >
    </form>
    <?php
        if (isset($_POST["num"])) {
            
            $num = $_POST["num"];
            
            for ($i=1; $i <= 10; $i++) {
                
                echo $num." x ".$i." = ".$num * $i."<br>";


            }


        }
    
    ?>    
</body>
</html>