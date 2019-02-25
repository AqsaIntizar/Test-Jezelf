<?php
$toDo = [
    [
      "beschrijving" => "series",
      "uren" => 7,
      "categorie" => "thuis"
    ],
    [
        "beschrijving" => "trainen",
        "uren" => 2,
        "categorie" => "thuis"
    ],
    [
        "beschrijving" => "wenen",
        "uren" => 1,
        "categorie" => "thuis"
    ],
    [
        "beschrijving" => "huiswerk",
        "uren" => 6,
        "categorie" => "school"
    ]
  ];

  foreach ($toDo as $do) {
    echo '<div>';
        echo '<h1>';
        echo $do["beschrijving"];
        echo '</h1>';
        echo '<p>';
        echo $do["uren"];
        echo '</p>';
        echo '<p>';
        echo $do["categorie"];
        echo '</p>';
    echo '</div>';
  }
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css" />
      <link rel="stylesheet" type="text/css" media="screen" href="css/app.css" />
      <title>oef3</title>
      <style type="text/css"></style>
  </head>
  <body>
 
      
  </body>
  </html>
  