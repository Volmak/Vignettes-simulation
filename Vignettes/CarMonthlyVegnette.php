<?php

namespace Vignettes;

class CarMonthlyVegnette extends AbstractVignette
{
	use MontlyTrait;
	/**
	 * @param string $date 'Y-m-d'
	 */
	public function __constructor($date = '') {
		parent::__constructor();
		$this->calculatePrice();
	}
}