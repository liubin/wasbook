<?php
  session_start();
?>
<html>
<body>
現在の用户ID:<?php echo  htmlspecialchars($_SESSION['id'], ENT_COMPAT, 'UTF-8'); ?><BR>
</body>
</html>
