<?php
//Pode ser simplificado com a constante STDIN
$contentFromInput = fopen("php://stdin", "r");

$newCourse = fgets($contentFromInput);

file_put_contents(__DIR__ . "/courses-list.txt", "\n$newCourse", FILE_APPEND);
