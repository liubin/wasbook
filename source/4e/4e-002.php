<?php
  $data = $_GET['data'];
  $str = base64_decode($data);
  eval('$a = ' . $str . ';');
?>
<body>
<?php var_dump($a); ?>
</body>
