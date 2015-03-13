#!/usr/bin/perl
# OS命令注入脆弱性对策
# 但是文件夹遍历威胁还存在
use strict;
use utf8;
use open ':utf8';  # 默认字符编码设置为UTF-8
use CGI;

print "Content-Type: text/plain; charset=UTF-8\r\n\r\n";

my $q = new CGI;
my $file = $q->param('file');
open IN, '<', $file or die $!;  # 打开文件
print <IN>;       # 显示文件内容
close IN;         # 关闭文件
