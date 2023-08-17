<?php

$zipAddress = "zip://" . __DIR__ . "/files.zip#courses-list.txt";

echo file_get_contents($zipAddress);