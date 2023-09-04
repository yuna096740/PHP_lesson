<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Progate</title>
    <link rel="stylesheet" type="text/css" href="sample.css">
  </head>
  <body>
    <h2 class="title">PHP lesson</h2>

    <?php
      echo "hello, world";
    ?><br>

    <?php
      $color = array("red:", "bule:", "yellow:");
      echo $color[0];
      echo $color[1];
      echo $color[2];

      $color[] = "purple:";
      echo $color[3];
    ?>

  
  </body>
</html>