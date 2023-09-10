<?php
  function flip_coin() {
    $keep_going = 'y';
    while( 'y' == $keep_going) {
      if ( random_int(0,1) ) {
        echo "heads! \n";
      } else {
        echo "tails! \n";
      }
      $keep_going = readline('Flip again? (y/n) ');                
    }
  }

<html>
  <head>
    <title>Flip a coin</title>
  </head>
  <body>
    <h1>Flip a coin</h1>
    <?php flip_coin(); ?>
  </body>
<html/>
