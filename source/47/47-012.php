<?php
  $url = "http://example.jp/example.jp.php?\r\naaa";
  if (mb_ereg("^http://example\\.jp/", $url)) {
    echo 'OK';
  } else {
    echo 'NG';
  }

