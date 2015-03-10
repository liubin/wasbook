<?php
define('UPLOADPATH', '/var/upload');

// function check_image_type($imgfile, $tofile)
//   $imgfile : チェック対象画像ファイル名
//   $tofile : ファイル名（拡張子チェック用）
function check_image_type($imgfile, $tofile) {
  // 拡張子の取得とチェック
  $info = pathinfo($tofile);
  $ext = strtolower($info['extension']);
  if ($ext != 'png' && $ext != 'jpg' && $ext != 'gif') {
    die('拡張子はpng、gif、jpgのいずれかを指定ください');
  }
  // 画像タイプ取得
  $imginfo = getimagesize($imgfile);
  $type = $imginfo[2];
  // 以下、正常な組み合わせの場合はreturnしていく
  if ($ext == 'gif' && $type == IMAGETYPE_GIF)
    return;
  if ($ext == 'jpg' && $type == IMAGETYPE_JPEG)
    return;
  if ($ext == 'png' && $type == IMAGETYPE_PNG)
    return;
  // 最後までreturnしない組み合わせはエラー
  die('拡張子とイメージ形式が一致しません');
}

function get_upload_file_name($tofile) {
  // 拡張子のチェック
  $info = pathinfo($tofile);
  $ext = strtolower($info['extension']);
  if ($ext != 'png' && $ext != 'jpg' && $ext != 'gif') {
    die('拡張子はpng、gif、jpgのいずれかを指定ください');
  }
  // 以下、ユニークなファイル名の生成
  $count = 0; // ファイル名作成試行の回数
  do {
    // ファイル名の組み立て
    $file = sprintf('%s/%08x.%s', UPLOADPATH, mt_rand(), $ext);
    // ファイルを作成する。既存の場合はエラー
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
// 画像のチェック
check_image_type($tmpfile, $orgfile);
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
