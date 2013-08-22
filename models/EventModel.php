<?php

/*
 * (c) Tobias Bollinger <tobias.bollinger@gmail.com>
 *
 */

namespace Calendar;

/**
 * EventModel Class
 */
class EventModel
{
	public $name;
	public $startTime;
	public $endTime;
	public $startDate;
	public $endDate;

	/**
	* __construct
	* @param string name
	* @param date startTime date('H:i:s') 
	* @param date endTime date('H:i:s')
	* @param date startDate date('d, m, Y')
	* @param date endDate date('d, m, Y')
	*/	
	public function __construct($name, $startTime, $endTime, $startDate, $endDate)
	{
		$this->name = $name;
		$this->startTime = $startTime;
		$this->endTime = $endTime;
		$this->startDate = $startDate;
		$this->endDate = $endDate;
	}
}