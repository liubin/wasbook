<?php
  session_start();
  $id = $_POST['id'];
  $_SESSION['id'] = $id;
?>
<html>
<body>
<?php echo htmlspecialchars($id, ENT_COMPAT, 'UTF-8'); ?>
さん、ログイン成功です<BR>
<a href="46-012.php">個人情報</a>
</body>
</html>
