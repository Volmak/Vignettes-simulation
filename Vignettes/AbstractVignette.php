<?php

namespace Vignettes;

use Vehicles\AbstractVehicle;
abstract class AbstractVignette
{
	protected $date;
	protected $color;
	protected $price;
	
	public function __construct()
	{

	}

	/**
	 * @param string $date 'Y-m-d'
	 */
	public function disclose($date = '')
	{
		if (!$date){
			$date = date('Y-m-d');
		}
		if (!$this->validateDate($date)){
			throw new \Exception('Invalid date');
		}
		$this->date = $date;
	}
	
	public function validateDate($date)
	{
		$dateArray = explode('-', $date);
		return checkdate($dateArray[1], $dateArray[2], $dateArray[0]);
	}
	
	public function getPrice()
	{
		return $this->price;
	}
	
	public function stickOnWindow()
	{
		return self::STICKING_TIME;
	}
}