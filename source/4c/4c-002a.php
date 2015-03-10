<?php
define('UPLOADPATH', '/var/upload');

function get_upload_file_name($tofile) {
  $info = pathinfo($tofile);
  $ext = strtolower($info['extension']);
  if ($ext != 'png' && $ext != 'jpg' && $ext != 'gif') {
    die('拡張子はpng、gif、jpgのいずれかを指定ください');
  }
  $count = 0;
  do {
    $file = sprintf('%s/%08x.%s', UPLOADPATH, mt_rand(), $ext);
    $fp = @fopen($file, 'x');
  } while ($fp === FALSE && ++$count < 10);
  if ($fp === FALSE) {
    die('ファイルが作成できません');
  }
  fclose($fp);
  return $file;
}

$tmpfile = $_FILES["imgfile"]["tmp_name"];
$orgfile = $_FILES["imgfile"]["name"];
if (! is_uploaded_file($tmpfile)) {
  die('ファイルがアップロードされていません');
}
$tofile = get_upload_file_name($orgfile);
if (! move_uploaded_file($tmpfile, $tofile)) {
  die('ファイルをアップロードできません');
}
$imgurl = '4c-003.php?file=' . basename($tofile);
?>
<body>
<a href="<?php echo htmlspecialchars($imgurl); ?>"><?php
 echo htmlspecialchars($orgfile, ENT_NOQUOTES, 'UTF-8'); ?></a>
をアップロードしました<BR>
<img src="<?php echo htmlspecialchars($imgurl); ?>">
</body>
