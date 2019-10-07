<?php

declare(strict_types = 1);

require __DIR__ . '/../vendor/autoload.php';

Tester\Environment::setup();


$boot = new Nette\Configurator;
$boot->setTempDirectory(getTempDir());
$boot->createRobotLoader()
	->addDirectory(__DIR__)
	->addDirectory(__DIR__ . '/../src')
	->register();

$boot->addConfig(__DIR__ . '/app.neon');
return $boot->createContainer();


function getTempDir(): string
{
	$dir = __DIR__ . '/tmp/';
	if (!is_dir($dir)) {
		mkdir($dir);
	}
	return $dir;
}
