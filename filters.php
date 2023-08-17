<?php

$fileName = __DIR__ . "/courses-list.txt";
$file = fopen($fileName, "r");

var_dump(stream_get_filters());

stream_filter_append($file, 'string.toupper');

$content = fread($file, filesize($fileName));

var_dump($content);