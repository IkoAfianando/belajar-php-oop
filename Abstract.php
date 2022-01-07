<?php

require_once "data/Location.php";

use Data\{Location, City, Province, Country}; // dengan adanya abstract tidak bisa di inisialisasi

$city = new City();
$province = new Province();
$country= new Country();
