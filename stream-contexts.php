<?php

$contextDelete = stream_context_create([
    "http" => [
        "accept" => "application/json",
        "method" => "DELETE",
        "header" => "X-From: PHP",
    ]
]);

echo file_get_contents("https://httpbin.org/delete", false, $contextDelete);


$contextPost = stream_context_create([
    "http" => [
        "accept" => "application/json",
        "method" => "POST",
        "header" => "X-From: PHP\r\nContent-Type: text/plain",
        "content" => "Conteudo via POST"
    ]
]);

echo file_get_contents("https://httpbin.org/post", false, $contextPost);
