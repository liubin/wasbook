<?php
  $id = @$_POST['id'];
  $pwd = @$_POST['pwd'];
?>
<html>
<head>
<meta HTTP-EQUIV="Refresh" CONTENT="5; URL=http://example.jp/47/47-003.php">
</head>
<body>
これはデモ用にそうしていますが、実際の攻撃では、こんな表示は出ません。<br>
IDとパスワードを収集しました。<br>
5秒後にhttp://example.jp/47/47-003.phpに遷移します。<br>
id:<?php echo htmlspecialchars($id); ?><br>
pwd:<?php echo htmlspecialchars($pwd); ?><br>
</body>
</html>
