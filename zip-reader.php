<?php

$zipAddress = "zip://" . __DIR__ . "/files.zip#courses-list.txt";

echo file_get_contents($zipAddress);


echo "<hr/>";



$protectedZipAddress = $zipAddress = "zip://" . __DIR__ . "/protected-files.zip#courses-list.txt";
$context = stream_context_create([
    "zip" => [
        "password" => "a654321"
    ]
]);

echo file_get_contents($protectedZipAddress, false, $context);