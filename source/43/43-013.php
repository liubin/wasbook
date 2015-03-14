<?php
function escape_js($s) {
  return mb_ereg_replace('([\\\\\'"])', '\\\1', $s);
}
?>
<body>
<script src="jquery-1.4.4.min.js"></script>
你好<span id="name"></span>
<script>
  $('#name').text('<?php echo escape_js($_GET['name']); ?>');
</script>
</body>
