#!perl
use strict;
use utf8;
use CGI qw/-no_xhtml :standard/;
use Encode qw(encode decode);

my $cgi = new CGI;
my $id = decode('utf-8', $cgi->param('ID'));
my $pwd = decode('utf-8', $cgi->param('PWD'));
my $url = decode('utf-8', $cgi->param('URL'));

# ログインはIDとパスワードが入力されていれば成功する
if ($id ne '' && $pwd ne '') {
  print encode('UTF-8', "Location: $url\n\n");
  ##print $cgi->redirect($url);
  exit 0;
}
## ログイン失敗
print encode('UTF-8', <<END_OF_HTML);
Content-Type: text/html; charset=UTF-8

<body>
IDまたはパスワードが違います
<a href="47-020.cgi">再ログイン</a>
</body>
END_OF_HTML
