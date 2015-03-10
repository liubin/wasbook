<?php
  session_start();  // 启动session
  $id = $_POST['ID'];
  $pwd = $_POST['PWD'];
  // ID或密码之一为空的话登录失败
  if ($id == '' || $pwd == '') {
    die('登录失敗');
  }
  $_SESSION['ID'] = $id;
?>
<html>
<head><title>登录</title></head>
<body>
登录成功
<a href="31-022.php">个人信息</a>
</body>
</html>
