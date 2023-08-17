<?php

/**
 * Pode ser simplificado com a constante STDOUT
 */
$screen = fopen("php://stdout", "w");

fwrite(STDOUT, "Hello World");
