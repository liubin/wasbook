<?php
  session_start();
?>
<html>
<body>
現在のユーザID:<?php echo  htmlspecialchars($_SESSION['id'], ENT_COMPAT, 'UTF-8'); ?><BR>
</body>
</html>
