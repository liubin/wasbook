#!perl
use utf8;
use strict;
use CGI; qw/-no_xhtml :standard/;
use Encode qw(encode decode);

my $cgi = new CGI;

print encode('UTF-8', <<END);
Content-Type: text/html; charset=UTF-8

<body>
ログインしました
</body>
END
