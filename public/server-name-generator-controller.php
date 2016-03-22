<?
function getRandomElement($array) {
  $key = array_rand($array);
  $value = $array[$key];
  return $value;
}

function generateServerName($nouns, $adjectives) {
  return getRandomElement($adjectives) . " " . getRandomElement($nouns, $adjectives);
}

function pageController() {
  $nouns = ['hobbitses','lettuce', 'elephant', 'custard', 'beard', 'monkey', 'shadow', 'planet', 'waterfall', 'sandwich', 'nerf-herder', 'airplane', 'apparatus', 'brothers', 'creature', 'cup', 'goldfish'];
  $adjectives = ['alluring', 'filthy', 'scruffy-looking', 'wild', 'vivacious', 'brave', 'clumsy', 'diligent', 'mysterious', 'zany', 'nasty', 'wicked', 'acrobatic', 'acidic', 'academic', 'advanced', 'amazing'];
  $data = [];

  $data['title'] = "Server Name Generator";
  $data['serverName'] = generateServerName($nouns, $adjectives);
  return $data;
}

extract(pageController());

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
      <h1 class ="hidden" id="serverName"></h1>
    </div>
  </body>
</html>
