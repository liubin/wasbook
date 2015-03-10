<?php
  $mail = $_POST['mail'];
  mb_language('Japanese');
  mb_send_mail($mail, "受け付けました",
    "お問い合わせを受け付けました",
     "From: webmaster@example.jp");
?>
<body>
お問い合わせを受け付けました
</body>
