<?php

/**
* 
*/
class CalendarService
{
	private $CalendarDao;
	private $CalendarListDao;

	public function __construct()
	{
		$this->CalendarDao = array();
		$this->CalendarListDao = new CalendarListDao();
	}

	public function getCalendarDao($id)
	{
		return $this->CalendarListDao->getCalendar($id);
	}

	public function getCalendarListDao()
	{
		return $this->CalendarListDao;
	}
}