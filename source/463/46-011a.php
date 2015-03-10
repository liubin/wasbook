<?php
  session_start();
  $id = $_POST['id'];  // 必ず登录に成功する（仕様）
  session_regenerate_id(true);  // Session IDの変更
  $_SESSION['id'] = $id;  // 用户IDをセッションに保存
?>
<body>
<?php echo htmlspecialchars($id, ENT_COMPAT, 'UTF-8'); ?>さん、登录成功です<BR>
<a href="46-012.php">个人信息</a>
</body>
