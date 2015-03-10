<?php
  define('TMPLDIR', '/var/www/4a/tmpl/');
  $tmpl = basename($_GET['template']);
?>
<body>
<?php readfile(TMPLDIR . $tmpl . '.html'); ?>
メニュー（以下略）
</body>
