<?php

  // Echo the request method
  echo($_SERVER['REQUEST_METHOD'] . " REQUEST");
  echo("\r\n");

  // Echo each request parameter
  foreach($_REQUEST as $k => $v) {
    echo "$k = $v\r\n";
  }

?>
