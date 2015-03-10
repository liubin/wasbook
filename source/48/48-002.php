<?php
  session_start();
  // ユーザIDの確認
  $token = $_COOKIE['token'];
  if (! $token || $token != $_SESSION['token']) {
    die('認証エラー。トークンが不正です。');
  }
?>
<body> トークンをチェックし、認証状態を確認しました </body>
