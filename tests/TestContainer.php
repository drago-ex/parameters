<?php

declare(strict_types = 1);


abstract class TestContainer extends Tester\TestCase
{
	/** @var Nette\DI\Container */
	protected $container;


	public function __construct(Nette\DI\Container $container)
	{
		$this->container = $container;
	}
}
