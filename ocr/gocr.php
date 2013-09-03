<?php
//You need Ziin Image Format library. Read about it on:
//http://de77.com/php/pure-php-image-library-almost-20-image-formats
include '../zif_one/zif.php';
include '../zif_one/zif_one.php';

$im = imagecreatefromfile('input.png');

imagepnm($im, 'input2.pnm');

exec('gocr049 input2.pnm', $text);
$text = implode('<br>', $text);

echo $text;