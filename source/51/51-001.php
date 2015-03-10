<pre>
<?php
  // FIXEDSALTはサイト毎に変更してください
  define('FIXEDSALT', 'bc578d1503b4602a590d8f8ce4a8e634a55bec0d');
  define('STRETCHCOUNT', 1000);

  // ソルトを生成する
  function get_salt($id) {
    return $id . pack('H*', FIXEDSALT);  // ユーザIDと固定文字列を連結
  }

  function get_password_hash($id, $pwd) {
    $salt = get_salt($id);
    $hash = '';  // ハッシュの初期値
    for ($i = 0; $i < STRETCHCOUNT; $i++) {
      $hash = hash('sha256', $hash . $pwd . $salt); // 
    }
    return $hash;
  }
  // 呼び出し例
  var_dump(get_password_hash('user1', 'pass1'));
  var_dump(get_password_hash('user1', 'pass2'));
  var_dump(get_password_hash('user2', 'pass1'));
