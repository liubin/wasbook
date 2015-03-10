<?php
  $url = @$_GET['url'];
  if (! isset($url)) {
     $url = 'http://example.jp/47/47-003.php';
  }
?>
<html>
<head><title>ログインしてください</title></head>
<body>
<form action="47-002.php" method="POST">
ユーザ名<input type="text" name="id"><BR>
パスワード<input type="password" name="pwd"><BR>
<input type="hidden" name="url" 
value="<?php echo htmlspecialchars($url, ENT_COMPAT, 'UTF-8') ?>">
<input type="submit" value="ログイン">
</form>
</body>
</html>
