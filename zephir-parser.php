<?php

include_once __DIR__ . '/vendor/autoload.php';

$parser = new \PhpParser\Parser\Zephir(new \PhpParser\Lexer\Emulative(), array());
$result = $parser->parse(file_get_contents(__DIR__ . '/test/zephir-code/parser/Application.zep'));

var_dump($result);
