<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <section>
    <main>
        <?php 
        
        $min = $_GET["minimo"];
        $max = $_GET["maximo"];

        $num = mt_rand($min,$max);
        // use random_int( variaveis que vc criou) para criar numeros e senhas criptografados

        echo(" O sorteio foi realizado com sucesso ! O número sorteado entre $min e $max foi $num")


        
        ?>
    </main>
</section>
</body>
</html>