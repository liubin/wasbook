<?php
  define('TMPLDIR', '/var/www/4a/tmpl/');
  $tmpl = $_GET['template'];
  if (! preg_match('/\A[a-z0-9]+\z/ui', $tmpl)) {
    die('template只能为小写英文和数字');
  }
?>
<body>
<?php readfile(TMPLDIR . $tmpl . '.html'); ?>
菜单（以下省略）
</body>
