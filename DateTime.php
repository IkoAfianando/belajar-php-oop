<?php

$dataTime = new DateTime();
$dataTime->setDate(1990, 1, 20);
$dataTime->setTime(10, 10, 10, 0);

$dataTime->add(new DateInterval("P1Y"));

$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = 1;
$dataTime->add($minusOneMonth);

var_dump($dataTime);

$now = new DateTime();
var_dump($now);
$now->setTimezone(new DateTimeZone("America/New_York"));
var_dump($now);

$string = $now->format("Y-m-d H:i:s");
echo "Waktu saat ini $string" . PHP_EOL;

$date = DateTime::createFromFormat("Y-m-d H:i:s", "2020-10-10 10:10:10",
    new DateTimeZone("Asia/Jakarta"));
if($date) {
    var_dump($date);
}else {
    echo "Format Salah" . PHP_EOL;
}
