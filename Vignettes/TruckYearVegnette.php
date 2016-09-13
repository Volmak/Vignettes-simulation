<?php

namespace Vignettes;

class TruckYearVegnette extends AbstractVignette
{
	use YearTrait;
	/**
	 * @param string $date 'Y-m-d'
	 */
	public function __constructor($date = '') {
		parent::__constructor();
		$this->calculatePrice();
	}
}