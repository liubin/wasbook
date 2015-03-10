<?php
  session_start();
  header('Content-Type: text/html; charset=UTF-8');
  $id = @$_POST['ID'];   // 用户ID
  $pwd = @$_POST['PWD']; // 密码
  // 数据库に接続
  $con = pg_connect("host=localhost dbname=wasbook user=postgres password=wasbook");
  // SQLの組み立て
  $sql = "SELECT * FROM users WHERE id ='$id' and PWD = '$pwd'";
  $rs = pg_query($con, $sql);  // クエリー実行
?>
<html>
<body>
<?php
  if (pg_num_rows($rs) > 0) { // SELECTした行が存在する場合登录成功
    $_SESSION['id'] = $id;
    echo '登录成功です';
  } else {
    echo '登录失敗です';
  }
  pg_close($con);
?>
</body>
</html>
