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
  $type = exif_imagetype($imgfile);
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

$mimes = array('jpg' => 'image/jpeg', 'png' => 'image/png', 'gif' => 'image/gif');

$file = $_GET['file'];
$info = pathinfo($file);       // ファイル情報の取得
$ext = strtolower($info['extension']);     // 拡張子
$content_type = $mimes[$ext]; // Content-Typeの取得
if (! $content_type) {
  die('拡張子はpng、gif、jpgのいずれかを指定ください');
}
$path = UPLOADPATH . '/' . basename($file);
check_image_type($path, $path);
header('Content-Type: ' . $content_type);
readfile($path);
?>
