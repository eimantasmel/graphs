<?php

declare(strict_types=1);

require './Graph.php';

$graph = new Graph();
$graph->readData(__DIR__ . DIRECTORY_SEPARATOR . 'data/data.txt');
var_dump($graph->getVerticies());