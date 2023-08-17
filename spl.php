<?php


$coursesFile = new SplFileObject(__DIR__ . "/courses.csv");

while (!$coursesFile->eof()) {
    $line = $coursesFile->fgetcsv(",");

    echo $line[0] . "<br/>";
}

$createDate = new DateTime();
$createDate->setTimestamp($coursesFile->getCTime());

echo $createDate->format("d/m/Y");

