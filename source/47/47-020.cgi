#!/usr/bin/perl
use utf8;
use strict;
use CGI qw/-no_xhtml :standard/;

my $cgi = new CGI;
my $url = $cgi->param('url');

# URLの先頭一致検索でオープンリダイレクタ対策
if ($url =~ /^http:\/\/example\.jp\//) {
  print "Location: $url\n\n";
  exit 0;
}
## URLが不正の場合のエラーメッセージ
print <<END_OF_HTML;
Content-Type: text/html; charset=UTF-8

<body>
Bad URL
</body>
END_OF_HTML
