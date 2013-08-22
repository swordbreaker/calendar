<?php

/*
 * (c) Tobias Bollinger <tobias.bollinger@gmail.com>
 *
 */

namespace Calendar;

/**
 * Calendar Service Class
 * Get all Calendar Data
 */
class CalendarService
{
	private $CalendarListDao;

	/**
	 * __construct
	 */
	public function __construct()
	{
		$this->CalendarListDao = new CalendarListDao();
	}

	/**
	 * get a Calendar
	 * @param integer $id
	 */
	public function getCalendar($id)
	{
		return $this->CalendarListDao->getCalendar($id);
	}

	/**
	 * Creat a new Calendar
	 * @param string $name Calendar Name
	 */
	public function addCalendar($name)
	{
		$this->CalendarListDao->addCalendar($name);	
	}

	/**
	 * Delet a Calendar
	 * @param  interger $id
	 */
	public function deletCalendar($id)
	{
		$this->CalendarListDao->deletCalendar($id);
	}
}
