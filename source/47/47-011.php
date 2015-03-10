<?php
  $url = '//trap.example.com/trap.php';
  if (mb_ereg("^/", $url)) {
    echo 'OK';
  } else {
    echo 'NG';
  }

