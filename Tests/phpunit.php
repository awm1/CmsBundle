#!/usr/bin/env php
<?php

if (!file_exists(dirname(__DIR__).'/vendor/symfony/phpunit-bridge/bin/simple-phpunit')) {
    echo "Unable to find the `simple-phpunit` script in `vendor/symfony/phpunit-bridge/bin/`.\n";
    exit(1);
}

if (false === getenv('SYMFONY_PHPUNIT_VERSION')) {
    putenv('SYMFONY_PHPUNIT_VERSION=7.5');
}
if (false === getenv('SYMFONY_PHPUNIT_REMOVE')) {
    putenv('SYMFONY_PHPUNIT_REMOVE=symfony/yaml');
}
if (false === getenv('SYMFONY_PHPUNIT_DIR')) {
    putenv('SYMFONY_PHPUNIT_DIR='.dirname(__DIR__).'/vendor/bin/.phpunit');
}

require dirname(__DIR__).'/vendor/symfony/phpunit-bridge/bin/simple-phpunit';
