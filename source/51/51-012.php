<?php
  $token = $_POST['token'];
  session_start();
  if ($token != session_id()) {
    die('session error');
  }
  session_destroy();
?>
<body>
<a href="51-011.php">back</a>
</body>
