<?php
$toDo = [
    [
      "beschrijving" => "series",
      "uren" => 7,
      "categorie" => "le work"
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
    echo '<h1>';
    echo $do["beschrijving"];;
    echo '</h1>';
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
  </head>
  <body>
      
  </body>
  </html>