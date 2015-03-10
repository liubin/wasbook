<?php
  $name = @$_POST['name'];
  $mail = @$_POST['mail'];
  $gender = @$_POST['gender'];
  // ここで登録処理が入る
?>
<html>
<head><title>登録完了</title></head>
<body>
氏名:<?php echo htmlspecialchars($name, ENT_NOQUOTES, 'UTF-8'); ?><BR>
メールアドレス:<?php echo htmlspecialchars($mail, ENT_NOQUOTES, 'UTF-8'); ?><BR>
性別:<?php echo htmlspecialchars($gender, ENT_NOQUOTES, 'UTF-8'); ?><BR>
登録されました
</body></html>
