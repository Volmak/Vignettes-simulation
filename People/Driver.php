<?php

namespace People;

use Vignettes\AbstractVignettes;
class Driver
{
	private $name;
	private $vehicles = [];
	private $money;
	private $gasStation;
	
	public function __construct($name, $vehicles, $money, $gasStation)
	{
		$this->name = $name;
		$this->vehicles = $vehicles;
		$this->money = $money;
		$this->gasStation = $gasStation;
	}
	
	public function buyVignette($index, AbstractVignette $type)
	{
		
	}
	
	public function buyVignettes(AbstractVignette $type) 
	{
		;
	}
}