<?php

$fileName = __DIR__ . "/lista-cursos.txt";
$file = fopen($fileName, "r");

/**
 * Leitura linha a linha
 *
while(!feof($file)) {
    $course = fgets($file);

    echo "$course </br>";
}

**/

/**
 *Leitura do arquivo total
$fileSize = filesize($fileName);
$courses = fread($file, $fileSize);

echo $courses;

fclose($file);
 **/

$courses = file_get_contents($fileName);

$arrCourses = file($fileName);

var_dump($courses, $arrCourses);

