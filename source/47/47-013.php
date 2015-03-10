<?php
 // $url = "http://example.jp/example.jp.php?aaa-_.!~*'();/?:@&=+\$,%#a-zA-Z0-9\"";
  $url = "http://example.jp/example.jp.php?aaa-_.!~*'();/?:@&=+\$,%#a-zA-Z0-9";
//  if (mb_ereg("\\Ahttp://example\\.jp/[-_.!~*'();\\/?:@&=+\\$,%#a-zA-Z0-9]+\\z", $url)) {
  if (mb_ereg('\Ahttp://example\.jp/[-_.!~*\'();\/?:@&=+\$,%#a-zA-Z0-9]+\z', $url)) {
  //if (mb_ereg("\\Ahttp://example\\.jp/[!-~]*\\z", $url)) {
    echo 'OK';
  } else {
    echo 'NG';
  }

