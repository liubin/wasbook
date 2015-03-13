#!perl
use strict;
use utf8;
use CGI qw/-no_xhtml :standard/;
use Encode qw(encode decode);

my $cgi = new CGI;
my $id = decode('utf-8', $cgi->param('ID'));
my $pwd = decode('utf-8', $cgi->param('PWD'));
my $url = decode('utf-8', $cgi->param('URL'));

# 输入ID和密码即认为登录成功
if ($id ne '' && $pwd ne '') {
  print encode('UTF-8', "Location: $url\n\n");
  ##print $cgi->redirect($url);
  exit 0;
}
## 登录失敗
print encode('UTF-8', <<END_OF_HTML);
Content-Type: text/html; charset=UTF-8

<body>
ID和密码不匹配
<a href="47-020.cgi">重新登录</a>
</body>
END_OF_HTML
