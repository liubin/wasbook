<?php // 用来确认是否已登录的脚本
  session_start();
  $id = @$_GET['id'];
  if (! $id) $id = 'yamada';
  $_SESSION['id'] = $id;
?>
<body>
已登录(id:<?php echo 
  htmlspecialchars($id, ENT_NOQUOTES, 'UTF-8'); ?>)<br>
<a href="45-002.php">修改密码</a>
</body>
