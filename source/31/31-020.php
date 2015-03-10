<?php
  session_start();  // セッションの開始
?>
<html>
<head><title>ログインしてください</title></head>
<body>
<form action="31-021.php" method="POST">
ユーザ名<input type="TEXT" name="ID"><BR>
パスワード<input type="PASSWORD" name="PWD"><BR>
<input type=SUBMIT value="ログイン">
</form>
</body>
</html>
