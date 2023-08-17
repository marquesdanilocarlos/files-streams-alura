<?php

$generalCourses = file(__DIR__ . "/courses-list.txt");
$phpCourses = file(__DIR__ . "/php-courses.txt");

$csvFile = fopen("courses.csv", "w");

foreach ($generalCourses as $course) {
    $line = [trim($course), "Sim"];
    fputcsv($csvFile, $line);
}

foreach ($phpCourses as $course) {
    $line = [trim($course), "Não"];
    fputcsv($csvFile, $line);
}

fclose($csvFile);