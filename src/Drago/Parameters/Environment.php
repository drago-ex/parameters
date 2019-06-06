<?php

declare(strict_types = 1);

/**
 * Drago Parameters
 * Package built on Nette Framework
 */
namespace Drago\Parameters;

use Nette\SmartObject;


/**
 * Current application environment.
 * @package Drago\Parameters
 */
class Environment
{
	use SmartObject;

	/** @var bool */
	private $environment;


	public function __construct(bool $environment)
	{
		$this->environment = $environment;
	}


	/**
	 * Returned environment in application.
	 */
	public function isProduction(): bool
	{
		$environment = $this->environment;
		return $environment;
	}
}
