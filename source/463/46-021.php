<?php
  session_start();
  $name = $_SESSION['name'] = $_POST['name'];
  $mail = $_SESSION['mail'] = $_POST['mail'];
?>
<head><title>個人情報の確認</title></head>
<body>
<form action="46-022.php" method="POST">
氏名:<?php echo htmlspecialchars($name, ENT_COMPAT, 'UTF-8'); ?><br>
メール:<?php echo htmlspecialchars($mail, ENT_COMPAT, 'UTF-8'); ?><br>
<input type="submit" value="登録"><br>
<a href="46-020.php">戻る</a>
</form>
</body>
</html>
