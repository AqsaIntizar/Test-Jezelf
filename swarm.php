
 <?php
// Array voor users aanmaken
$users = [
  [
    "username" => "lenny",
    "picture" => "img/profile.png",
    "comment" => "le work",
    "country" => "San Fransisco",
    "city" => "CA",
    "like" => "img/like.png",
    "time" => "7m",
    "img" => "img/pic.jpeg"
  ],
  [
    "username" => "Bart",
    "picture" => "img/profile.png",
    "comment" => "I LOVE PINDAKAAS",
    "country" => "LA",
    "city" => "CA",
    "like" => "img/like.png",
    "time" => "7m"
  ],
  [
    "username" => "lenny",
    "picture" => "img/profile.png",
    "comment" => "le work",
    "country" => "San Fransisco",
    "city" => "CA",
    "like" => "img/like.png",
    "time" => "7m",
    "img" => "img/pic.jpeg"
  ]
];

//var_dump($users);

?>
  <!DOCTYPE html>
  <html>
  <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Swarm</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css" />
      <link rel="stylesheet" type="text/css" media="screen" href="css/app.css" />
      <script src="main.js"></script>
  </head>
  <body>
  <?php include_once('header.php'); ?>
  <div class="post__comments">

        <?php foreach ($users as $user): ?><!-- Toon elke comment apart -->
        <img src="
            <?php     
            echo $user['picture']; ?>" width=50px
            >
          <h1 class="post__comment">
            <?php 
            echo $user['username']; ?>
          </h1>          
            <p>
            <?php
            echo $user['comment']
            ?>
            </p>
            <p>
            <?php
            echo $user['country']
            ?>
            </p>
            <p>
            <?php
            echo $user['city']
            ?>
            </p>
            <p>
            <?php
            echo $user['time']
            ?>
            </p>
            <img src="
            <?php
            echo $user['like']
            ?> 
            " width=40px>
            <img src="
            <?php     
            echo $user['img']; ?>" width=100%
            >
            <hr>

        <?php endforeach; ?>

        

      </div>
      
      
  </body>
  <?php include_once('footer.php'); ?>
  </html>
  
  
