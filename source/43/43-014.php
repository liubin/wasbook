<?php
header('Content-Type: text/html; charset=Shift_JIS');
?>
<form action="">
お名前:<input name=name value="<?php echo htmlspecialchars($_GET['name'], ENT_QUOTES); ?>"><BR>
メールアドレス:<input name=mail value="<?php echo htmlspecialchars($_GET['mail'], ENT_QUOTES); ?>"><BR>
<input type=submit>
</form>
