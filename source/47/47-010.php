<?php
  $url = 'http://trap.example.com/example.jp.php';
  if (mb_ereg("example\\.jp", $url)) {
    echo 'OK';
  } else {
    echo 'NG';
  }

