<?php
  session_start();
  $id = $_POST['id'];  // 必ずログインに成功する（仕様）
  session_regenerate_id(true);  // セッションIDの変更
  $_SESSION['id'] = $id;  // ユーザIDをセッションに保存
?>
<body>
<?php echo htmlspecialchars($id, ENT_COMPAT, 'UTF-8'); ?>さん、ログイン成功です<BR>
<a href="46-012.php">個人情報</a>
</body>
