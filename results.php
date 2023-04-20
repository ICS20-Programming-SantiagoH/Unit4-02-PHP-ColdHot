<?php

// Initial variables and constants
$degrees = "";

// get temprature from user
$tempOutside = $_POST['degrees'];

// If statments for hot or cold
if ($tempOutside < 15) {
  echo 'It is cold outside, Burrrr.';

}
else {
  echo 'It is hot outside!';

}

?>