<?php
  $id = isset($_POST['id']) ? $_POST['id'] : '';
  $pwd = isset($_POST['pwd']) ? $_POST['pwd'] : '';
  $url = isset($_POST['url']) ? $_POST['url'] : '';
  // 登录はIDと密码が入力されていれば成功する
  if ($id != '' && $pwd != '') {
    // 指定したURLにリダイレクト
    header('Location: ' . $url);
    exit();
}
// 以下は登录失敗の場合
?>
<body>
IDまたは密码が違います
<a href="47-001.php">再登录</a>
</body>
