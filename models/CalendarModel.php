<?php

/*
 * (c) Tobias Bollinger <tobias.bollinger@gmail.com>
 *
 */

namespace Calendar;

/**
 * CalendarModel Class
 */
class CalendarModel
{
	private $name;

	/**
	 * __construct
	 * @param string $name
	 */
	public function __construct($name)
	{
		$this->name = $name;
	}

	/**
	 * get Calendar Name
	 * @return string Calendar name
	 */
	public function getName()
	{
		return $this->name;
	}
}