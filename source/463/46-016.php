<?php
  session_start();
  // 用户IDの确认
  $token = $_COOKIE['token'];
  if (! $token || $token != $_SESSION['token']) {
    die('認証エラー');
  }
?>
<body> 認証に成功しました </body>
