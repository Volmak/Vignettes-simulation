<?php

namespace Vignettes;

class CarYearVegnette extends AbstractVignette
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