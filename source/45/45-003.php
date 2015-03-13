<?php
  function ex($s) { // 用来防止XSS的HTML转义和显示函数
    echo htmlspecialchars($s, ENT_COMPAT, 'UTF-8');
  }
  session_start();
  $id = $_SESSION['id']; // 取出用户ID
  // 登录确认…省略
  $pwd = $_POST['pwd'];   // 取得密码
  // 修改密码，将用户$id的密码设为$pwd 
?>
<body>
<?php ex($id); ?> 的密码已经修改为 <?php ex($pwd); ?>
</body>

