<?php

require '../vendor/autoload.php';

use Nplasencia\HtmlNode;

$node = HtmlNode::textarea('Add your text here')
    ->name('content')
    ->id('content');

echo $node->render();
