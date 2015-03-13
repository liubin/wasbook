#!/usr/bin/perl
use strict;
use CGI;
use utf8;
use Encode;

my $q = new CGI;
my $mail = $q->param('mail');

# 不经过shell，而是以管道的方式调用sendmail
open my $pipe, '|-', '/usr/sbin/sendmail', $mail or die $!;

# 填充邮件内容
print $pipe encode('UTF-8', <<EndOfMail);
To: $mail
From: webmaster\@example.jp
Subject: =?UTF-8?B?5Y+X44GR5LuY44GR44G+44GX44Gf?=
Content-Type: text/plain; charset="UTF-8"
Content-Transfer-Encoding: 8bit

您的反馈内容已经收到
EndOfMail

close $pipe;

# 下面用于在页面显示
print encode('UTF-8', <<EndOfHTML);
Content-Type: text/html; charset=UTF-8

<body>
您的反馈内容已经收到
</body>
EndOfHTML
