<?php

$httpAddress = "https://swapi.dev/api/films/4";
$data = file_get_contents($httpAddress);

var_dump($data);