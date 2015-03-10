<body>
<?php
  $p = $_GET['p'];
  if (ereg('^[0-9]+$', $p) === FALSE) {
    die('整数値を入力してください');
  }
  echo $p;
?>
</body>
