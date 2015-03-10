<?php
  $a = array(1, 2, 3);
  $ex = var_export($a, true);
  $b64 = base64_encode($ex);
?>
<body>
<form action="4e-002.php" method="GET">
<input type="hidden" name="data" value="<?php echo htmlspecialchars($b64) ?>">
<input type="submit" value="次へ">
</form>
</body>
