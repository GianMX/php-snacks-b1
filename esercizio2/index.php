<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP-Snacks-Esercizio 2</title>
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <!-- MY STYLE -->
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php
    // GET ELEMENT (NAME/MAIL/AGE)
      $name = $_GET['name'];
      $mail = $_GET['mail'];
      $age = $_GET['age'];
      // VARIABLES
      // if some value is empty
      if(empty($name) || empty($mail) || empty($age) ){
      echo '<h2>Acceso negato</h2>';
        // if miss @ or dot
        }elseif(strpos($mail, '.')===false || strpos($mail, '@')===false){
          echo '<h2>Acceso negato</h2>';
          // if miss numeric age
        }elseif(is_numeric($age)===false){
          echo '<h2>Acceso negato</h2>';
          // else is all fine
          }else{
            echo '<h2>Acceso riuscito</h2>';
          }
    ?>
  </body>
</html>
