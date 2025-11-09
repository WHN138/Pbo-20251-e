<?php

//panggil file luaslingkaran
require_once('./LuasLingkaran.php');

//panggil namespace luaslingkaran
use App\Math\LuasLingkaran;

$lingkaran = new LuasLingkaran(12);
//$lingkaran->jari = 12; //asign proper
$lingkaran->tampil('roda'); //panggil method tampil

LuasLingkaran::testing(); //panggil static method