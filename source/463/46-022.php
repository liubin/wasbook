<?php
  session_start();
  $name = $_SESSION['name'];
  $mail = $_SESSION['mail'];
?>
<head><title>個人情報の登録</title></head>
<body>
登録しました<br>
氏名:<?php echo htmlspecialchars($name, ENT_COMPAT, 'UTF-8'); ?><br>
メール:<?php echo htmlspecialchars($mail, ENT_COMPAT, 'UTF-8'); ?><br>
</body>
</html>
