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
  die('URL格式不对');
}
?>
<body>
<a href="<?php echo htmlspecialchars($url); ?>">收藏夹</a>
</body>
