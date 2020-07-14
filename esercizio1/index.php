<?php
  $matches = [
    [
    'team_a' => 'Red Team',
    'team_b' => 'Blue Team',
    'team_a_points' => rand(1, 200),
    'team_b_points' => rand(1, 200)
    ],
    [
    'team_a' => 'Doom',
    'team_b' => 'Wolfenstein',
    'team_a_points' => rand(1, 200),
    'team_b_points' => rand(1, 200)
    ],
    [
    'team_a' => 'Jotaro Kujo',
    'team_b' => 'Dio Brando',
    'team_a_points' => rand(1, 200),
    'team_b_points' => rand(1, 200)
    ],
    [
    'team_a' => 'Walter White',
    'team_b' => 'Dexter Morgan',
    'team_a_points' => rand(1, 200),
    'team_b_points' => rand(1, 200)
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
            <?php echo $single_match['team_a']; ?> - <?php echo $single_match['team_b']; ?> | <?php echo $single_match['team_a_points'];?> - <?php echo $single_match['team_b_points'];?>
          </li>
        <?php } ?>
      </ul>
  </body>
</html>
