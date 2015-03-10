<?php
$tmpfile = $_FILES["imgfile"]["tmp_name"];
$tofile = $_FILES["imgfile"]["name"];

if (! is_uploaded_file($tmpfile)) {
  die('ファイルがアップロードされていません');
// 画像を img ディレクトリに移動
} else  if (! move_uploaded_file($tmpfile, 'img/' . $tofile)) {
  die('ファイルをアップロードできません');
}
$imgurl = 'img/' . urlencode($tofile);
?>
<body>
<a href="<?php echo htmlspecialchars($imgurl); ?>"><?php
 echo htmlspecialchars($tofile, ENT_NOQUOTES, 'UTF-8'); ?></a>
をアップロードしました<BR>
<img src="<?php echo htmlspecialchars($imgurl); ?>">
</body>
