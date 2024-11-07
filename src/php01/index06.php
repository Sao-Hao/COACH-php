<?php

function san($tei, $high) {
    $san = $tei * $high / 2;
    return $san . "<br>";
}

function si($tei, $high) {
    $si = $tei * $high;
    return $si . "<br>";
}

function dai($tei, $high,$jyou) {
    $dai = ($tei+$jyou)*$high / 2;
    return $dai . "<br>";
}

$sankaku= san(5,10);
echo $sankaku;

$sikaku = si(2,10);
echo $sikaku;

$daikei = dai(2,10,3);
echo $daikei;


function getSquareArea($base, $height)
{
  return $base * $height;
}
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);

