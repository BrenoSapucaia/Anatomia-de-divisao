<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $dividendo = $_GET["d1"] ?? 0;
    $divisor = $_GET["d2"] ?? 1;    
    ?>
    <main>
        <h1> Anatomia de Divisão</h1>
        <form action="" method="get">
        <label for="d1"> dividendo</label>
        <input type="number" name="d1" id="d1" value="<?= $dividendo; ?>">

        <label for="d2">divisor</label>
        <input type="number" name="d2" id="d2" value="<?= $divisor; ?>">
        <input type="submit" value="calcular">
    </form> 
    </main>
    <section>
        <h2>estrutura da divisão</h2>
        <?php 
        $quociente = intdiv($dividendo, $divisor);
        $resto = $dividendo % $divisor;
        ?>
        <table>
            <tr>
                <td><?= "Dividendo:" .$dividendo ?></td>
                <td><?="Divisor:". $divisor ?></td>
            </tr>
            <tr>
                <td><?="Resto:" .$resto?></td>
                <td><?="Quociente:" .$quociente?></td>
            </tr>
        </table>
    </section>
    
</body>
</html>