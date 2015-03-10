<?php
  session_start();
  header('Content-Type: text/html; charset=Shift_JIS');
?>
<body>
<form action="">
お名前:<input name=name value="<?php echo htmlspecialchars($_GET['name'], ENT_QUOTES, 'Shift_JIS'); ?>"><BR>
メールアドレス:<input name=mail value="<?php echo htmlspecialchars($_GET['mail'], ENT_QUOTES, 'Shift_JIS'); ?>"><BR>
<input type="submit">
</form>
</body>
