<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <form action="sort.php" method="post" class="form-container">
        <label for="number">Digite um número:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Enviar</button>
    </form>

    <main class="result-container">
      <?php 
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $min = 0;
        $max = 10;

        $number = $_POST['number'];

        // Gerar número aleatório
        $num = random_int($min, $max);

        echo "<p>O número gerado é <span class='number'>$num</span></p>";

        if($number == $num) {
            echo "<p class='success'>Parabéns, você ganhou!</p>";
        } else {
            echo "<p class='failure'>Você perdeu.</p>";
        }
      }

      if ($number > 10 ) {
        echo "o valor é só até 10 kkkkkkkkk";
      }
      if ($number < 0) {
        echo "o valor vai de 0 a 10 não contamos números negativos KKKKKKK";
      }
      ?>
    </main>


</div>
</body>
</html>
