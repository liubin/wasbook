<?php
  $name = @$_POST['name'];
  $mail = @$_POST['mail'];
  $gender = @$_POST['gender'];
  // 在这里进行注册处理
?>
<html>
<head><title>注册完了</title></head>
<body>
姓名:<?php echo htmlspecialchars($name, ENT_NOQUOTES, 'UTF-8'); ?><BR>
邮件地址:<?php echo htmlspecialchars($mail, ENT_NOQUOTES, 'UTF-8'); ?><BR>
性別:<?php echo htmlspecialchars($gender, ENT_NOQUOTES, 'UTF-8'); ?><BR>
已注册
</body></html>
