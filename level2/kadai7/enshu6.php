<?php


$fmt = 'Y 年 m 月 d 日 H 時 i 分 s 秒';
$time = '2025 年 09 月 21 日 21 時 38 分 48 秒';

$dt = DateTime::createFromFormat($fmt, $time);

if ($dt === false) {
    print "parse failed\n";
    exit;
}

print $dt->format('Y-m-d H:i:s') . "\n";



$base = new DateTime('2025/09/23 10:58:31');

$base->add(new DateInterval('P1YT10H'));
print $base->format('Y-m-d H:i:s') . "\n";

$base->sub(new DateInterval('P3MT20M'));
print $base->format('Y-m-d H:i:s') . "\n";



$dt1 = new DateTime('2025/09/23 10:58:31');
$dt2 = new DateTime('2025/10/01');


$diff1 = $dt1->diff($dt2, false);
print $diff1->format('%R %Y年%M月%d日 %H時間%I分%S秒') . "\n";


$diff2 = $dt1->diff($dt2, true);
print $diff2->format('%R %Y年%M月%d日 %H時間%I分%S秒') . "\n";