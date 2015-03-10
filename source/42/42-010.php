<?php
  $p = isset($_GET['p']) ? $_GET['p'] : '';
  if (preg_match('/\A[a-z0-9]{1,5}\z/ui', $p) == 0) {
    die('1文字以上5文字以下の英数字を入力してください');
  }
?>
<body>
pは<?php echo htmlspecialchars($p, ENT_NOQUOTES, 'UTF-8'); ?>です
</body>

