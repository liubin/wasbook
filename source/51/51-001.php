<pre>
<?php
  // FIXEDSALT要根据网站不同分别进行设置
  define('FIXEDSALT', 'bc578d1503b4602a590d8f8ce4a8e634a55bec0d');
  define('STRETCHCOUNT', 1000);

  // 创建salt
  function get_salt($id) {
    return $id . pack('H*', FIXEDSALT);  // 将用户id和字符串连接
  }

  function get_password_hash($id, $pwd) {
    $salt = get_salt($id);
    $hash = '';  // hash的初始值
    for ($i = 0; $i < STRETCHCOUNT; $i++) {
      $hash = hash('sha256', $hash . $pwd . $salt); // 
    }
    return $hash;
  }
  // 调用方法
  var_dump(get_password_hash('user1', 'pass1'));
  var_dump(get_password_hash('user1', 'pass2'));
  var_dump(get_password_hash('user2', 'pass1'));
