<?php

/*
 * (c) Tobias Bollinger <tobias.bollinger@gmail.com>
 *
 */

namespace Calendar;

/**
 * Calendar List Data Access Objects Class
 * Many Calendars
 */
class CalendarListDao
{
	private $CalendarDao;

	/**
	 * __construct description
	 */
	public function __construct()
	{
		$this->CalendarDao = array();
	}

	/**
	 * get a Calendar by id
	 * @param  integer $id
	 * @return oject Calender Class
	 */
	public function getCalendar($id)
	{
		return $this->CalendarDao[$id];
	}

	/**
	 * Add a Calendar
	 * @param string $name Calendar Name
	 */
	public function addCalendar($name)
	{
		array_push($this->CalendarDao, new CalendarDao($name));
	}

	/**
	 * Delet a Calendar
	 * @param  interger $id
	 */
	public function deletCalendar($id)
	{
		unset($this->CalendarDao[$id]);
	}
}