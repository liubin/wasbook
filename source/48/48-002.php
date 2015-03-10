<?php
  session_start();
  // 用户IDの确认
  $token = $_COOKIE['token'];
  if (! $token || $token != $_SESSION['token']) {
    die('認証エラー。トークンが不正です。');
  }
?>
<body> トークンをチェックし、認証状態を确认しました </body>
