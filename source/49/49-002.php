<?php
  $from = $_POST['from'];
  $body = $_POST['body'];

  mb_language('Japanese');
  mb_send_mail("wasbook@example.jp", "問い合わせがありました",
    "以下の問い合わせがありましたので対応お願いします\n\n" . $body,
     "From: " . $from);
?>
<body>
送信しました
<?php //echo $from ?>
</body>
