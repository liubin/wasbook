<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
<HEAD><TITLE>○○市粗大ゴミ受付センター</TITLE></HEAD>
<BODY>
<FORM action="" METHOD=POST>
氏　　名<INPUT size="20" name="name" value="<?php echo @$_POST['name']; ?>"><BR>
住　　所<INPUT size="20" name="addr" value="<?php echo @$_POST['addr']; ?>"><BR>
電話番号<INPUT size="20" name="tel" value="<?php echo @$_POST['tel']; ?>"><BR>
品　　目<INPUT size="10" name="kind" value="<?php echo @$_POST['kind']; ?>">
数量<INPUT size="5" name="num" value="<?php echo @$_POST['num']; ?>"><BR>
<input type=submit value="申込"></FORM>
</BODY>
</HTML>
