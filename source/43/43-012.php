<head>
<script src="jquery-1.4.4.min.js"></script>
<script>
function init(name) {
  $('#name').text(name);
}
</script></head>
<body onload="init('<?php echo htmlspecialchars($_GET['name'], ENT_QUOTES) ?>')">
こんにちは<span id="name"></span>さん
</body>
