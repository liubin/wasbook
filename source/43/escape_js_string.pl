#!/usr/bin/perl
use strict;
use utf8;
use Encode qw(decode encode);
# ...
# 入力をすべて\uXXXX形式でエスケープする
sub unicode_escape {
  my $u16 = encode('UTF-16BE', $_[0]);  # UTF-16に変換
  my $hex = unpack('H*', $u16);          # 16進数文字列に変換
# 以下、4文字ずつ切り出して、それぞれの先頭に\uをつけたものを連結する
  $hex =~ s/([0-9a-f]{4})/\\u\1/g;
  return $hex;
}

# 英数字以外を\uXXXX形式でエスケープする
sub escape_js_string {
  my ($s) = @_;
# 英数字以外の文字列をunicode_escape関数に渡して変換する
  $s =~ s/([^0-9a-zA-Z]+)/unicode_escape($1)/eg;
  return $s;
}
print escape_js_string("感じand吉\\\'\"\n") . "\n";
