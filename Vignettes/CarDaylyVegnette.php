<?php

namespace Vignettes;

class CarDaylyVegnette extends AbstractVignette
{
	const COLOR = 'green';
	const DAYLY_PRICE = 5;
	const STICKING_TIME = 5;
	
	/**
	 * @param string $date 'Y-m-d'
	 */
	public function __constructor($date = '') {
		parent::__constructor();
		$this->color = self::COLOR;
		$this->price = self::DAYLY_PRICE;
	}
}