<?php

require '../vendor/autoload.php';

use Nplasencia\HtmlNode;

$node = HtmlNode::textarea('Add your text here')
    ->name('content')
    ->id('myTextArea');

var_dump($node('id'), $node('width', 100));
