<?php
// /dev/urandomによる疑似乱数生成器
function getToken() {
  // /dev/urandomから24バイト読み込み
  $s = file_get_contents('/dev/urandom', false, NULL, 0, 24);
  return base64_encode($s); // base64エンコードして返す
}

  // ここまでで認証成功
  session_start();
  session_regenerate_id(true); // セッションIDの再生成
  $token = getToken(); // トークンの生成
  // トークンとcookieとセッションに保存
  setcookie('token', $token, 0, '', '', true, true);
  $_SESSION['token'] = $token;
?>
<body>
認証成功<a href="48-002.php">next</a>
</body>

