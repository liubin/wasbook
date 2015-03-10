<?php
  define('TMPLDIR', '/var/www/4a/tmpl/');
  $tmpl = $_GET['template'];
  if (! preg_match('/\A[a-z0-9]+\z/ui', $tmpl)) {
    die('templateは英数字のみ指定できます');
  }
?>
<body>
<?php readfile(TMPLDIR . $tmpl . '.html'); ?>
メニュー（以下略）
</body>
