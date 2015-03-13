<?php
  define('TMPLDIR', '/var/www/4a/tmpl/');
  $tmpl = $_GET['template'];
?>
<body>
<?php readfile(TMPLDIR . $tmpl . '.html'); ?>
菜单（以下省略）
</body>
