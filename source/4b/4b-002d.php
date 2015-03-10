<?php
  $mail = $_POST['mail'];
  system('/usr/sbin/sendmail <template.txt ' . escapeshellarg($mail));
?>
<body>
您的反馈内容已经收到
</body>
