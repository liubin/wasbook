<?php
  session_start();
  // 确认用户ID
  $token = $_COOKIE['token'];
  if (! $token || $token != $_SESSION['token']) {
    die('认证错误。token不正确');
  }
?>
<body> 通过检查token来进行认证状态确认。 </body>
