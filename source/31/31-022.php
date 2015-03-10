<?php
  session_start();  // 启动session
  $id = $_SESSION['ID'];
  if ($id == '') {
    die('请登录');
  }
?>
<html>
<head><title>个人信息</title></head>
<body>
用户ID:<?php echo htmlspecialchars($id, ENT_NOQUOTES, 'UTF-8'); ?>
</body>
</html>
