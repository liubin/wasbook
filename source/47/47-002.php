<?php
  $id = isset($_POST['id']) ? $_POST['id'] : '';
  $pwd = isset($_POST['pwd']) ? $_POST['pwd'] : '';
  $url = isset($_POST['url']) ? $_POST['url'] : '';
  // 输入ID和密码即认为登录成功
  if ($id != '' && $pwd != '') {
    // 重定向到指定的URL
    header('Location: ' . $url);
    exit();
}
// 下面为登录失败
?>
<body>
ID和密码不匹配
<a href="47-001.php">重新登录</a>
</body>
