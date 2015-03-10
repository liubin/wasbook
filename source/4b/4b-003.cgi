#!/usr/bin/perl
print "Content-Type: text/plain\n\n<body>";
open FL, '/bin/pwd|' or die $!;
print <FL>;
close FL;
print "</body>";
