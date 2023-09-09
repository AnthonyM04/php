<?php
  echo 'hello world!';

?>

<?
  print 'Print is functionally the same as echo.';
/* You can 
  add a comment */

echo <<<HERE
<p>There's also something called heredoc that allows you to print multiple lines without stopping.
It will look for a defined identifier. </p>