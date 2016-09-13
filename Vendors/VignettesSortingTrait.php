<?php

namespace Vendors;

trait VignettesSortingTrait
{
	private function sortByPrice()
	{
		usort($this->vignattes, function ($a, $b) {

			$priceA = $a->getPrice();
			$priceB = $b->getPrice();
			
		    if ($priceA == $priceB) {
		        return 0;
		    }
		    return ($priceA < $priceB) ? -1 : 1;
		});
	}
}