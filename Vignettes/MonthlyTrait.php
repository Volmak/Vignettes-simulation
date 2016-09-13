<?php

namespace Vignettes;

trait MontlyTrait
{
	const MONHLY_FACTOR = 10;
	
	private function calculatePrice()
	{
		$this->price *= self::MONHLY_FACTOR;
	}
}