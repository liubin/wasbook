#!/usr/bin/perl
use strict;
use utf8;
use Encode qw(decode encode);
# ...
# 将字符串转换为\uXXXX的形式进行转义
sub unicode_escape {
  my $u16 = encode('UTF-16BE', $_[0]);  # 转换为UTF-16
  my $hex = unpack('H*', $u16);          # 转换为16进制的字符串
# 每4个字符切分，在头部加上\u后连成一个字符串
  $hex =~ s/([0-9a-f]{4})/\\u\1/g;
  return $hex;
}

# // 英文字母以为的字符转换为\uXXXX的而形式进行转义
sub escape_js_string {
  my ($s) = @_;
# 英文数字以外的字符串用unicode_escape进行转换
  $s =~ s/([^0-9a-zA-Z]+)/unicode_escape($1)/eg;
  return $s;
}
print escape_js_string("感じand吉\\\'\"\n") . "\n";
