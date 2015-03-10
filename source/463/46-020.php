<?php
  session_start();
  $name = @$_SESSION['name'];
  $mail = @$_SESSION['mail'];
?>
<head><title>输入个人信息</title></head>
<body>
<form action="46-021.php" method="POST">
姓名:<input name="name" value="<?php 
  echo htmlspecialchars($name, ENT_COMPAT, 'UTF-8'); ?>"><br>
邮件:<input name="mail" value="<?php 
  echo htmlspecialchars($mail, ENT_COMPAT, 'UTF-8'); ?>"><br>
<input type="submit" value="确认">
</form>
</body>
</html>
