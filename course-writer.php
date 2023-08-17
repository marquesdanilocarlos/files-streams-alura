<?php

$fileName = __DIR__ . "/new-course.txt";

/**
 * Modo w - Escreve substituindo o conteúdo
 * Modo a - Escreve adicionando ao conteúdo
 */
/*
$file = fopen($fileName, "a");

$newCourseName = "Curso 12" . PHP_EOL;

fwrite($file, $newCourseName);

fclose($file);*/

$newCourseName = "Curso 13";

file_put_contents($fileName, $newCourseName, FILE_APPEND);