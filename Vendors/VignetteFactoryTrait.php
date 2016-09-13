<?php

namespace Vendors;

use Vignettes\AbstractVignette;
trait VignetteFactoryTrait
{
	const NUMBER_OF_VIGNETTE_TYPES = 3 /*Vehicle types*/ * 3 /*Durations*/;

	private $vignettes = [];
	
	private function generateVignettes()
	{
		for ($i = 0; $i < self::NUMBER_OF_VIGNETTES; $i++){
			
			$rand = rand(1, self::NUMBER_OF_VIGNETTE_TYPES);
			
			switch ($rand){
				case 0 :
					$this->vignattes[] =  new CarDaylyVegnette();
					break;
				case 1 :
					$this->vignattes[] =  new CarMonthlyVegnette();
					break;
				case 2 :
					$this->vignattes[] =  new CarYearVegnette();
					break;
				case 3 :
					$this->vignattes[] =  new TruckDaylyVegnette();
					break;
				case 4 :
					$this->vignattes[] =  new TruckMonthlyVegnette();
					break;
				case 5 :
					$this->vignattes[] =  new TruckYearVegnette();
					break;
				case 6 :
					$this->vignattes[] =  new BusDaylyVegnette();
					break;
				case 7 :
					$this->vignattes[] =  new BusMonthlyVegnette();
					break;
				case 8 :
					$this->vignattes[] =  new BusYearVegnette();
					break;
			}
		}
		
	}
}