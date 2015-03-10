<?php
  session_start();
  $id = $_SESSION['id'];
?>
<body>
id = <?php echo htmlspecialchars($id); ?><br>
<form action="51-012.php" method="POST">
<!-- 以下はCSRF防止用トークン -->
<input type="hidden" name="token" value="<?php echo
  htmlspecialchars(session_id()); ?>">
<input type="submit" value="ログアウト">
</form>
<a href="51-010.php">login</a>
</body>

