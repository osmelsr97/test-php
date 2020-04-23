<?php
declare(strict_types=1);

require_once dirname(__DIR__) . '/vendor/autoload.php';

$helloWorld = new \App\Printer();
$text = $helloWorld->print();
print_r($text);