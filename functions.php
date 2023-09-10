<?php
  function is_bigger() {
    return 10 >= 5;
    }

$bigger = is_bigger();
    if ($bigger) {
      echo "yes, 10 is still bigger than 5!";
    } else {
      echo "It is not bigger.";
    }
