<?php
  function pageController() {
    $favoriteThings = ['books', 'tv', 'video games', 'sleep', 'movies'];

  $data = [$favoriteThings];
  return $data;
  }

extract(pageController());
?>



<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="my-favorite-things.css">
    <title>Favorite Things</title>
  </head>

  <body>
    <h1>This is a list of my favorite things!</h1>
    <ul> 

    <?php foreach ($favoriteThings as $thing): ?>
        <li><?= $thing; ?></li>
    <?php endforeach; ?>

    </ul>
  </body>
</html>