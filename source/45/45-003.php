<?php
  function ex($s) { // XSS対策用のHTMLエスケープと表示関数
    echo htmlspecialchars($s, ENT_COMPAT, 'UTF-8');
  }
  session_start();
  $id = $_SESSION['id']; // ユーザIDの取り出し
  // ログイン確認…省略
  $pwd = $_POST['pwd'];   // パスワードの取得
  // パスワード変更処理　ユーザ$idのパスワードを$pwdに変更する 
?>
<body>
<?php ex($id); ?>さんのパスワードを<?php ex($pwd); ?>に変更しました
</body>

