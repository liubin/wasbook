<?php
// 将字符串转换为\uXXXX的形式
function unicode_escape($matches) {
  $u16 = mb_convert_encoding($matches[0], 'UTF-16');
  return preg_replace('/[0-9a-f]{4}/' , '\u$0', bin2hex($u16));
}
// 英文字母以为的字符转换为\uXXXX的而形式进行转义
function escape_js_string($s) {
  return preg_replace_callback('/[^-\.0-9a-z]+/u', 'unicode_escape', $s);
}
?>
【测试示例】
<script>
  alert('<?php echo escape_js_string('??and吉'); ?>');
</script>

