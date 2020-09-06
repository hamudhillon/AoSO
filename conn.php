<?php 
$con = new mysqli("sql12.freemysqlhosting.net","sql12364057","K6Gsy1QZwX","sql12364057");

// Check connection
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

?>
