<?php

$matches = [];
$result = (bool)preg_match_all("/iko|afia|nan/i", "Iko Afianando", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu anjing dan bangsat"); // akan merekplace kata anjing dan bangsat
var_dump($result);

$result = preg_split("/[\s,-]/", "Iko Afianando, Iko Afianando Kun, Iko Afianando Boy");
var_dump($result);