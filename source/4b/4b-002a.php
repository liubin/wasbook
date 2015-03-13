<?php
  $mail = $_POST['mail'];
  mb_language('Japanese');
  mb_send_mail($mail, "反馈已经收到",
    "您的反馈内容已经收到",
     "From: webmaster@example.jp");
?>
<body>
您的反馈内容已经收到
</body>
