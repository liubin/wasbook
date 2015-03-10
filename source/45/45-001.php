<?php // ログインしたことにする確認用のスクリプト
  session_start();
  $id = @$_GET['id'];
  if (! $id) $id = 'yamada';
  $_SESSION['id'] = $id;
?>
<body>
ログインしました(id:<?php echo 
  htmlspecialchars($id, ENT_NOQUOTES, 'UTF-8'); ?>)<br>
<a href="45-002.php">パスワード変更</a>
</body>
