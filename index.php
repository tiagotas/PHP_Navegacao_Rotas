<?php

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

//echo $uri_parse;

include 'rotas.php';

