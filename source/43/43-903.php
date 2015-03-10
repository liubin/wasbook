<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
<HEAD><TITLE>情報収集スクリプト</TITLE></HEAD>
<BODY>
情報を受け付けました（本当の罠ではこんな表示はしない）<br>
氏　　名:<?php echo @$_POST['name']; ?><BR>
住　　所:<?php echo @$_POST['addr']; ?><BR>
電話番号:<?php echo @$_POST['tel']; ?><BR>
品　　目:<?php echo @$_POST['kind']; ?><BR>
数    量:<?php echo @$_POST['num']; ?><BR>
カード番号:<?php echo @$_POST['card']; ?><BR>
カード期限:<?php echo @$_POST['thru']; ?><BR>
</BODY>
</HTML>
