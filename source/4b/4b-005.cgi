#!/usr/bin/perl
# OSコマンドインジェクション脆弱性対処版
# 但し、ディレクトリ・トラバーサル脆弱性は残っています
use strict;
use utf8;
use open ':utf8';  # デフォルトの文字コードをUTF-8に
use CGI;

print "Content-Type: text/plain; charset=UTF-8\r\n\r\n";

my $q = new CGI;
my $file = $q->param('file');
open IN, '<', $file or die $!;  # ファイルを開く
print <IN>;       # ファイルの内容を全て表示
close IN;         # ファイルクローズ
