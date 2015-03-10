<?php
  $addr = isset($_GET['addr']) ? $_GET['addr'] : '';
  if (preg_match('/\A[[:^cntrl:]]{1,30}\z/u', $addr) == 0) {
    die('30文字以内で住所を入力してください（必須項目）。改行やタブなどの制御文字は使用できません');
  }
?>
<body>
addrは<?php echo htmlspecialchars($addr, ENT_NOQUOTES, 'UTF-8'); ?>です
</body>
