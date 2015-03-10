<?php
  $mail = $_POST['mail'];
  system('/usr/sbin/sendmail <template.txt ' . escapeshellcmd($mail));
?>
<body>
お問い合わせを受け付けました
<?php echo htmlspecialchars('/usr/sbin/sendmail <template.txt ' . escapeshellcmd($mail)); ?>
</body>
