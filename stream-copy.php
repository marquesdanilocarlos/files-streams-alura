<?php

$zipAddress = "zip://" . __DIR__ . "/files.zip#courses-list.txt";
$zipFile = fopen($zipAddress, "r");

stream_copy_to_stream($zipFile,STDOUT);