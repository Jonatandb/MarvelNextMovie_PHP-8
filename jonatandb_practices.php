<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="color-scheme" content="light dark" />
  <title>Mi primera app PHP - Jonatandb</title>
  <!-- Pico.css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css" />
</head>


<?php
// Variables
$name = "Jonatandb";
$birthYear = 1990;
$currentYear = 2024;
$message = "Tags PHP abreviados: &lt;?= y ?> (hacen echo automáticamente)";

// Contantes (hay de 2 tipos)
//  Constante global
define("LOGO_URL", "https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-svg-vector.svg");
//  Constante local
const WIDTH = 300;

?>

<body>

  <main class="container">

    <img src="<?= LOGO_URL ?>" alt=" Logo PHP" width="<?= WIDTH ?>">
    <h1>
      <?php echo "Mi primera app PHP by $name"; ?>
    </h1>
    <section style="overflow: scroll; height: 60vh;">

      <p><?= $message ?></p>
      <p>Concatenación con . => <?= "Mi " . "nombre " . "es $name" ?></p>
      <p>Cálculos con variables: $currentYear - $birthYear => <?= $currentYear - $birthYear; ?></p>
      <p>gettype($birthYear) muestra tipo de dato => <?= gettype($birthYear) ?></p>
      <p>var_dump($birthYear) muestra tipo de dato y valor => <?= var_dump($birthYear) ?></p>
      <p>Se pueden castear tipos de datos => (bool)$birthYear =><?= (bool)$birthYear ?></p>
      <p>Se puede verificar si una variable es numerica => is_numeric($birthYear) =><?= is_numeric($birthYear) ?></p>
      <p>O si es booleana: is_bool($var), string: is_string($var), nula: is_null($birthYear) => <?= is_null($birthYear) ? "Es nula" : "No es nula" ?></p>


      <?php
      if ($currentYear >= 2024) {
        echo "<p>Dentro de un if hay que usar echo para devolver algo</p>";
      } else if ($currentYear == 1970) {
        echo "Acá el else if va separado";
      }
      ?>

      <?php if ($currentYear < 2030) : ?>
        <p>Esta es otra forma de usar if's (Con dos puntos. Ver el código fuente)</p>
        <p>Ideal para cuando se tiene mucho código HTML</p>
        <p>Acá el elseif se escribe todo junto</p>
      <?php endif; ?>

      <p>También se puede usar el if (ternario) <?= ($name != "") ? "🤙🏻" : "😥" ?></p>
    </section>
  </main>
</body>

</html>