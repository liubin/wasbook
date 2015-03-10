<?php
// /dev/urandomによる疑似乱数生成器
function getToken() {
  // /dev/urandomから24バイト読み込み
  $s = file_get_contents('/dev/urandom', false, NULL, 0, 24);
  return base64_encode($s); // base64エンコードして返す
}

  // ここまでで認証成功
  session_start();
  $token = getToken(); // トークンの生成
  // トークンとcookieとセッションに保存
  setcookie('token', $token, 0, '/');  // トークンcookie
  $_SESSION['token'] = $token;
?>
<body>
認証成功<a href="46-016.php">next</a>
</body>

