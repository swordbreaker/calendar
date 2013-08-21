<?php

/**
* 
*/
class CalendarListDao
{
	private $CalendarDao;

	public function __construct()
	{
		$this->CalendarDao = array();
	}

	public function getCalendar($id)
	{
		return $this->CalendarDao[$id];
	}

	public function addCalendar($name)
	{
		array_push($this->CalendarDao, new CalendarDao($name));
	}

	public function deletCalendar($id)
	{
		unset($this->CalendarDao[$id]);
	}
}