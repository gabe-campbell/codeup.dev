<?php
$adjectives = array('alluring', 'filthy', 'scruffy-looking', 'wild', 'vivacious', 'brave', 'clumsy', 'diligent', 'mysterious', 'zany', 'nasty', 'wicked', 'acrobatic', 'acidic', 'academic', 'advanced', 'amazing');

$nouns = array('hobbitses','lettuce', 'elephant', 'custard', 'beard', 'monkey', 'shadow', 'planet', 'waterfall', 'sandwich', 'nerf-herder', 'airplane', 'apparatus', 'brothers', 'creature', 'cup', 'goldfish');
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="server-name-generator.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <title>Server Name Generator</title>
  </head>
  <body>
    <div class="generatorDiv">
      <button id="genButton">Generate!</button>
      <h1 class ="hidden" id="textDisplay"></h1>
    </div>
    <script>
      
      function newServerName(event) {
        <?php $numberGenAdjective = (int)rand ((int)0, (int)16); ?>
        <?php $numberGenNoun = (int)rand ((int)0, (int)16); ?>

        $("#genButton").click(function() {
            $("#textDisplay").removeClass('hidden');
          });
        $("#textDisplay").html("<?= $adjectives[$numberGenAdjective].'-'.$nouns[$numberGenNoun]; ?>");
      };

      genButton.addEventListener('click', newServerName);
    </script>
  </body>
</html>