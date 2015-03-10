<?php
  session_start();  // セッションの開始
  $id = $_POST['ID'];
  $pwd = $_POST['PWD'];
  // IDとパスワードのどちからかが空の場合はログイン失敗
  if ($id == '' || $pwd == '') {
    die('ログイン失敗');
  }
  $_SESSION['ID'] = $id;
?>
<html>
<head><title>ログイン</title></head>
<body>
ログイン成功しました
<a href="31-022.php">プロフィール</a>
</body>
</html>
