<?php

$phar = new Phar('composer.phar');
$phar->extractTo(__DIR__.'/extracted');
