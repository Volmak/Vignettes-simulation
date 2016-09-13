<?php

namespace Vendors;

class GasStation
{
	const NUMBER_OF_VIGNETTES = 100;
	
	private $money;
	
	use VignetteFactoryTrait;
	use VignettesSortingTrait;
	
	public function __construct() //should be automatic
	{
		$this->money = 0;
		$this->generateVignettes();
		$this->sortByPrice();
	}
}