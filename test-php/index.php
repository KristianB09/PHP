<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./styling/php-test.css">
    <title>Document</title>
  </head>
  <body>
    <?php
        $name = "Dune";
        $read = true;

        if($read) {
          $message = "You have read $name";
        } else {
          $message = "You have not read $name";
        }

    ?>

    <h1>
      <?= $message; ?>
    </h1>
  </body>
</html>
