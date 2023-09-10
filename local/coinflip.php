<?php

  $keep_going = 'y';

  while ( 'y' == $keep_going) {
    if ( random_int(0,1) ) {
      echo "heads! \n";
    } else {
      echo "tails! \n";
    }

    $keep_going = readline('Flip again? (y/n) ');
  }
    
?>