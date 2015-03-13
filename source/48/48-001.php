<?php
// 采用/dev/urandom创建模拟随机数
function getToken() {
  // 从/dev/urandom读取24个字节
  $s = file_get_contents('/dev/urandom', false, NULL, 0, 24);
  return base64_encode($s); // base64编码后返回
}

  // 到这里已经认证成功
  session_start();
  session_regenerate_id(true); // 重新生成Session ID
  $token = getToken(); // 生成token
  // 将token保存到cookie和session
  setcookie('token', $token, 0, '', '', true, true);
  $_SESSION['token'] = $token;
?>
<body>
認証成功<a href="48-002.php">next</a>
</body>

