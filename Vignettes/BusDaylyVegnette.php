<?php

namespace Vignettes;

class BusDaylyVegnette extends AbstractVignette
{
	const COLOR = 'blue';
	const DAYLY_PRICE = 9;
	const STICKING_TIME = 20;
	
	/**
	 * @param string $date 'Y-m-d'
	 */
	public function __constructor($date = '') {
		parent::__constructor();
		$this->color = self::COLOR;
		$this->price = self::DAYLY_PRICE;
	}
}