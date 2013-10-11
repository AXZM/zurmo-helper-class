<?php
/**
 * Bootstraper for PHPUnit tests.
 */
error_reporting(E_ALL | E_STRICT);
$_ENV['zurmo-test'] = true;
$loader = require_once __DIR__ . '/../vendor/autoload.php';
$loader->add('Zurmo\\', __DIR__);