<?php
  session_start();
  function islogin() {
    if (! isset($_SESSION['id'])) {
      return false;
    }
    if ($_SESSION['expires'] < time()) {
      session_destroy();
      return false;
    }
    $_SESSION['expires'] = time() + $_SESSION['timeout'];
    return true;
  }
  if (islogin()) {
    $id = $_SESSION['id'];
  } else {
    $id = '???';
  }
?>
<body>
<?php echo htmlspecialchars($id, ENT_NOQUOTES, 'UTF-8');  ?>
<?php
  var_dump($_SESSION['id']);
  var_dump($_SESSION['timeout']);
  var_dump($_SESSION['expires']);
?>
</body>
