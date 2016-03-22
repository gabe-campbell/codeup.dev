<?php
  //logic
  //creating data to pass below

  $blogPosts = [
    [
    'title' => 'OMG, first post!',
      'body' => 'follow me on insta!'
    ],
    [
    'title' =>  'Second post for momentum',
      'body' => 'I will commit to posting!'
    ]
  ];
?>
<!doctype html>

<html>
  
  <head>
    <title>Codeup!</title>
  </head>

  <body>
    
    <?php foreach ($blogPosts as $post){ ?>

      <h2><?php echo $post['title']; ?></h2>
      <p><?php echo $post['body']; ?></p>
      
    <?php } ?>
  </body>

</html>