<?php
  $mail = $_POST['mail'];
  system("/usr/sbin/sendmail -i <template.txt $mail");
?>
<body>
您的反馈内容已经收到
</body>
