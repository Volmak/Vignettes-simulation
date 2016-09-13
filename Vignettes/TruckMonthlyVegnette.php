<?php

namespace Vignettes;

class TruckMonthlyVegnette extends AbstractVignette
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