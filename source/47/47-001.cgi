#!perl
use utf8;
use strict;
use CGI qw/-no_xhtml :standard/;

my $cgi = new CGI;
my $url = $cgi->param('url');

# URL符合条件时重定向
if ($url =~ /^http:\/\/example\.jp\//) {
  print "Location: $url\n\n";
  ##print $cgi->redirect($url);
  exit 0;
}
## URL非法时的错误信息
print <<END_OF_HTML;
Content-Type: text/html; charset=UTF-8

<body>
Bad URL
</body>
END_OF_HTML
