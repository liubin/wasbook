<?php
  session_start();
  $id = $_POST['id'];
  $_SESSION['id'] = $id;
?>
<html>
<body>
<?php echo htmlspecialchars($id, ENT_COMPAT, 'UTF-8'); ?>
さん、登录成功です<BR>
<a href="46-012.php">个人信息</a>
</body>
</html>
