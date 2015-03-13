<?php
  $mail = $_POST['mail'];
  $h = popen('/usr/sbin/sendmail -t -i', 'w');
  if ($h === FALSE) {
    die('服务器忙，请稍后');
  }
  fwrite($h, <<<EndOfMail
To: $mail
From: webmaster@example.jp
Subject: =?UTF-8?B?5Y+X44GR5LuY44GR44G+44GX44Gf?=
Content-Type: text/plain; charset="UTF-8"
Content-Transfer-Encoding: 8bit

您的反馈内容已经收到
EndOfMail
);
  pclose($h);
?>
<body>
您的反馈内容已经收到
</body>
