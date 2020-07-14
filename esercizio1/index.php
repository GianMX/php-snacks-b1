<?php
  $matches = [
    [
    'team a' => 'Red Team',
    'team b' => 'Blue Team',
    'team a points' => rand(1, 200),
    'team b points' => rand(1, 200)
    ],
    [
    'team a' => 'Doom',
    'team b' => 'Wolfenstein',
    'team a points' => rand(1, 200),
    'team b points' => rand(1, 200)
    ],
    [
    'team a' => 'Jotaro Kujo',
    'team b' => 'Dio Brando',
    'team a points' => rand(1, 200),
    'team b points' => rand(1, 200)
    ],
    [
    'team a' => 'Walter White',
    'team b' => 'Dexter Morgan',
    'team a points' => rand(1, 200),
    'team b points' => rand(1, 200)
    ]
  ]
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP-Snacks-Esercizio 1</title>
  </head>
  <!-- GOOGLE FONT -->
  <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
  <!-- MY STYLE -->
  <link rel="stylesheet" href="style.css">
  <body>
    <h2>RISULTATO PARTITE</h2>
      <ul>
        <?php for($i = 0; $i < count($matches); $i++) {
        $single_match = $matches[$i];?>
          <li>
            <?php echo $single_match['team a']; ?> - <?php echo $single_match['team b']; ?> | <?php echo $single_match['team a points'];?> - <?php echo $single_match['team b points'];?>
          </li>
        <?php } ?>
      </ul>
  </body>
</html>
