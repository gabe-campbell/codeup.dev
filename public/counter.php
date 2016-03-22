<?php 
var_dump($_GET)

function pageController() {
    if(isset($_GET['counter'])) {
      $counter = $_GET['counter'];
    } else {
      $counter = 0;
    }
}

extract(pageController());
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="counter.css">
  </head>

  <body>
    <div>
        <h2 id="plus">+</h2>
        <a href="#counter.php"><?= $counter+1; ?>&#9650;</a>
        <h2 id="btnCount"><?= $counter; ?></h2>
        <a href="#counter.php"><?= $counter-1; ?>&#9660;</a>
        <h2 id="minus">-</h2>
    </div>
  </body>
</html>