<?php
function check_url($url) {
  if (preg_match('/\Ahttp:/', $url) 
     || preg_match('/\Ahttps:/', $url)
     || preg_match('#\A/#', $url))  {
    return true;
  } else {
    return false;
  }
}
$url = $_GET['url'];
if (! check_url($url)) {
  die('URLの形式が不正です');
}
?>
<body>
<a href="<?php echo htmlspecialchars($url); ?>">ブックマーク</a>
</body>
