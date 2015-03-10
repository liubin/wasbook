<?php
define('UPLOADPATH', '/var/upload');
$mimes = array('jpg' => 'image/jpeg', 'png' => 'image/png', 'gif' => 'image/gif');

$file = $_GET['file'];
$info = pathinfo($file);       // ファイル情報の取得
$ext = strtolower($info['extension']);     // 拡張子
$content_type = $mimes[$ext]; // Content-Typeの取得
if (! $content_type) {
  die('拡張子はpng、gif、jpgのいずれかを指定ください');
}
header('Content-Type: ' . $content_type);
readfile(UPLOADPATH . '/' . basename($file));
?>
