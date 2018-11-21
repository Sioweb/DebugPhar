<?php

$phar_original = new Phar('composer.phar', 0, 'composer.phar');
$phar = new Phar('composer_new.phar', 0, 'composer_new.phar');
// add all files in the project, only include php files
$phar->buildFromDirectory(dirname(__FILE__) . '/extracted');
$phar->setStub(str_replace('composer.', 'composer_new.', $phar_original->getStub()));
