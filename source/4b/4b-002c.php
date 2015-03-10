<?php
  $mail = $_POST['mail'];
  $h = popen('/usr/sbin/sendmail -t -i', 'w');
  if ($h === FALSE) {
    die('ただいま混み合っております。しばらくたってから..');
  }
  fwrite($h, <<<EndOfMail
To: $mail
From: webmaster@example.jp
Subject: =?UTF-8?B?5Y+X44GR5LuY44GR44G+44GX44Gf?=
Content-Type: text/plain; charset="UTF-8"
Content-Transfer-Encoding: 8bit

お問い合わせを受け付けました
EndOfMail
);
  pclose($h);
?>
<body>
お問い合わせを受け付けました
</body>
