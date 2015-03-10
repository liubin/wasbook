<?php
  $mail = $_POST['mail'];
  system('/usr/sbin/sendmail <template.txt ' . escapeshellcmd($mail));
?>
<body>
您的反馈内容已经收到
<?php echo htmlspecialchars('/usr/sbin/sendmail <template.txt ' . escapeshellcmd($mail)); ?>
</body>
