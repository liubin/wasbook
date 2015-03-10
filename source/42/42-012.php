<?php
  // mb_regex_encodingは内部エンコーディングが設定されている場合は省略可能
  mb_regex_encoding('UTF-8'); // プログラムの先頭で一度設定すればよい
  $p = isset($_GET['p']) ? $_GET['p'] : '';
  if (mb_ereg('\A[a-zA-Z0-9]{1,5}\z', $p) === false) {
    die('1文字以上5文字以下の英数字を入力してください');
  }
?>
<body>
pは<?php echo htmlspecialchars($p, ENT_NOQUOTES, 'UTF-8'); ?>です
</body>
