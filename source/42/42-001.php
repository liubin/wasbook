<?php
  $name = isset($_GET['name']) ? $_GET['name'] : '';
  // 文字エンコーディング（Shift_JIS）のチェック
  if (! mb_check_encoding($name, 'Shift_JIS')) {
    die('文字エンコーディングが不正です');
  }
 // 文字エンコーディングの変換（Shift_JIS→UTF-8）
  $name = mb_convert_encoding($name, 'UTF-8', 'Shift_JIS');
?>
<body>
名前は<?php echo htmlspecialchars($name, ENT_NOQUOTES, 'UTF-8'); ?>です
</body>
