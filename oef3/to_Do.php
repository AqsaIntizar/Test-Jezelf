<?php
$toDo = [
    [
      "beschrijving" => "series",
      "uren" => 7,
      "categorie" => "thuis"
    ],
    [
        "beschrijving" => "trainen",
        "uren" => 1,
        "categorie" => "thuis"
    ],
    [
        "beschrijving" => "wenen",
        "uren" => 3,
        "categorie" => "thuis"
    ],
    [
        "beschrijving" => "huiswerk",
        "uren" => 6,
        "categorie" => "school"
    ]
  ];
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
        <?php foreach ($toDo as $do): ?>
        <?php
          if ($do["uren"] <= 2){
            $color = "groen";
          } else if($do["uren"] >= 5){
            $color = "rood";
          }else{
            $color = "oranje";
          }
        ?>
        <div class="task <?php echo $color; ?>">
          <?php echo $do["beschrijving"]; ?> <br>
          <?php echo $do["categorie"]; ?> <br>
        </div>
      <?php endforeach; ?>
      
  </body>
  </html>
  