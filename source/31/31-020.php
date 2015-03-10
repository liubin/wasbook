<?php
  session_start();  // 启动session
?>
<html>
<head><title>请登录</title></head>
<body>
<form action="31-021.php" method="POST">
用户名<input type="TEXT" name="ID"><BR>
密码<input type="PASSWORD" name="PWD"><BR>
<input type=SUBMIT value="登录">
</form>
</body>
</html>
