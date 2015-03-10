<?php
  session_start();
  $name = $_SESSION['name'];
  $mail = $_SESSION['mail'];
?>
<head><title>个人信息注册</title></head>
<body>
注册成功<br>
姓名:<?php echo htmlspecialchars($name, ENT_COMPAT, 'UTF-8'); ?><br>
邮件:<?php echo htmlspecialchars($mail, ENT_COMPAT, 'UTF-8'); ?><br>
</body>
</html>
