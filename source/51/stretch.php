<?php
  $h = '';
  var_dump(pack('H*', '21224142'));
  $start = microtime(true);
  for ($i = 0; $i < 1000000; $i++) {
    $h = hash('sha256', $h);
  }
  $end = microtime(true);
  echo 'time = ' . ($end - $start) . "\n";
  echo $h . "\n";
