#!/usr/bin/perl
use utf8;
use strict;
use CGI qw/-no_xhtml :standard/;
use Encode qw(encode decode);

my $cgi = new CGI;
my $pageid = decode('UTF-8', $cgi->param('pageid'));

my $cookie = $cgi->cookie(-name => 'PAGEID',
                         -value => $pageid);
print $cgi->header(-charset => 'UTF-8', -cookie=>$cookie);
# encodeによりUTF-8符号化で出力する
print encode('UTF-8', <<END_OF_HTML);
<body>
クッキー値をセットしました
</body>
END_OF_HTML
