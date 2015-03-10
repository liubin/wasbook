<?php
  $mail = $_POST['mail'];
  system('/usr/sbin/sendmail <template.txt ' . escapeshellarg($mail));
?>
<body>
お問い合わせを受け付けました
</body>
