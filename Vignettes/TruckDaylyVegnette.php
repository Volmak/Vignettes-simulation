<?php

namespace Vignettes;

class TruckDaylyVegnette extends AbstractVignette
{
	const COLOR = 'yellow';
	const DAYLY_PRICE = 7;
	const STICKING_TIME = 10;
	
	/**
	 * @param string $date 'Y-m-d'
	 */
	public function __constructor($date = '') {
		parent::__constructor();
		$this->color = self::COLOR;
		$this->price = self::DAYLY_PRICE;
	}
}