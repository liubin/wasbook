<?php
  session_start();
  $_SESSION['answer'] = $_POST['answer'];
  $session_filename = session_save_path() . '/sess_' . session_id();
?>
<body>
質問を受け付けました<br>
セッションファイル名<br> 
<?php echo $session_filename; ?><br>
<a href="4d-001.php?header=<?php 
  echo $session_filename; ?>%00">
ファイルインクルード攻撃</a>
</body>
