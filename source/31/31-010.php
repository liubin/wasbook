<?php
  $user = @$_SERVER['PHP_AUTH_USER'];
  $pass = @$_SERVER['PHP_AUTH_PW'];

  if (! $user || ! $pass) {
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="Basic Authentication Sample"');
    echo "ユーザ名とパスワードが必要です";
    exit;
  }
?>
<body>
認証しました<BR>
ユーザ名:<?php echo htmlspecialchars($user, ENT_NOQUOTES, 'UTF-8'); ?><BR>
パスワード:<?php echo htmlspecialchars($pass, ENT_NOQUOTES, 'UTF-8'); ?> <BR>
</body>
