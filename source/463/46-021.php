<?php
  session_start();
  $name = $_SESSION['name'] = $_POST['name'];
  $mail = $_SESSION['mail'] = $_POST['mail'];
?>
<head><title>确认个人信息</title></head>
<body>
<form action="46-022.php" method="POST">
姓名:<?php echo htmlspecialchars($name, ENT_COMPAT, 'UTF-8'); ?><br>
邮件:<?php echo htmlspecialchars($mail, ENT_COMPAT, 'UTF-8'); ?><br>
<input type="submit" value="注册"><br>
<a href="46-020.php">返回</a>
</form>
</body>
</html>
