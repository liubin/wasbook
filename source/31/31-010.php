<?php
  $user = @$_SERVER['PHP_AUTH_USER'];
  $pass = @$_SERVER['PHP_AUTH_PW'];

  if (! $user || ! $pass) {
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="Basic Authentication Sample"');
    echo "请输入用户名和密码";
    exit;
  }
?>
<body>
登录成功<BR>
用户名:<?php echo htmlspecialchars($user, ENT_NOQUOTES, 'UTF-8'); ?><BR>
密码:<?php echo htmlspecialchars($pass, ENT_NOQUOTES, 'UTF-8'); ?> <BR>
</body>
