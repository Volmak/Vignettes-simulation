<?php

namespace Vignettes;

trait YearTrait
{
	const YEAR_FACTOR = 6;
	
	private function calculatePrice()
	{
		$this->price *= self::YEAR_FACTOR;
	}
	
	public function disclose()
	{
		$this->date = date('Y') . '-1-1';
	}
}