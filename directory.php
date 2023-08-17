<?php

$directory = dir(__DIR__);

echo $directory->path;

echo "<hr/>";

while ($file = $directory->read()) {
    echo "$file<br/>";
}
