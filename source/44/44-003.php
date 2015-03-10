<?php
  session_start();
  header('Content-Type: text/html; charset=UTF-8');
  $id = @$_POST['ID'];   // ユーザID
  $pwd = @$_POST['PWD']; // パスワード
  // データベースに接続
  $con = pg_connect("host=localhost dbname=wasbook user=postgres password=wasbook");
  // SQLの組み立て
  $sql = "SELECT * FROM users WHERE id ='$id' and PWD = '$pwd'";
  $rs = pg_query($con, $sql);  // クエリー実行
?>
<html>
<body>
<?php
  if (pg_num_rows($rs) > 0) { // SELECTした行が存在する場合ログイン成功
    $_SESSION['id'] = $id;
    echo 'ログイン成功です';
  } else {
    echo 'ログイン失敗です';
  }
  pg_close($con);
?>
</body>
</html>
