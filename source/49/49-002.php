<?php
  $from = $_POST['from'];
  $body = $_POST['body'];

  mb_language('Japanese');
  mb_send_mail("wasbook@example.jp", "有新的联系",
    "下面是新收到的用户联系内容，请处理\n\n" . $body,
     "From: " . $from);
?>
<body>
已经发送
<?php //echo $from ?>
</body>
