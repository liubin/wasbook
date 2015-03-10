<?php
  header('Content-Type: text/html; charset=EUCJP');
?>
<body>
Page Error: <?php echo htmlspecialchars($_GET['err']); ?>
</body>

