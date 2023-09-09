<?php
  echo 'hello world!';

?>

<?php
  print 'Print is functionally the same as echo.';
/* You can 
  add a comment */
?>

<!-- what are variables?  -->

<!-- variables must start with a $ followed by a letter or an underscore, then a alpha numberic character string! -->

<!-- $variables = 'containers for storing information that will be referenced later! such as names, numbers, and other data.'; -->

<?php
  $age = 36;
  echo "Single quotes\nJoe is $age years old!\nDouble quotes\n";

  echo 'Joe is $age years old!';  
?>

<!-- how to use variables in single quotes;  -->

<?php
  $age = 36;
  echo 'Brenda is'. $age .'years old.'; // concatenation!
?>

<!-- how to deal with quotes and other special characters. -->
<?php
  echo "Joe's nickname in high school was \"Crazy Joe.\"";
  echo "this is 100 percent true."
  // the back lashes tell the computer to ignore what is between and to not treat those characters as code!
?>

<?php
  $age = 36;
  $color1 = 'red';
  $color2 = 'green';

  $colors = array('red', 'green', 'blue', 'yellow', 'purple');  

echo $colors[0];

$fav_colors = array(
  'joe' => 'red',
  'erin' => 'blue',
  'teresa' => 'green',
  'lou' => 'yellow',
  'abby' => 'purple'
);

echo $fav_colors['teresa'];