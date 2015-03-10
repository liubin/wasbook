<?php
# リダイレクト関数を定義する
  function redirect($url) {
# URLとして不適切な文字があればエラーとして処理を停止する
    if (! mb_ereg('\A[-_.!~*\'();\/?:@&=+\$,%#a-zA-Z0-9]+\z', $url)) {
      die('Bad URL');
    }
    header('Location: ' . $url);
  }
# 呼び出し例
  $url = isset($_GET['url']) ? $_GET['url'] : '';
  redirect($url);
?>
<body>
リダイレクトします
</body>
