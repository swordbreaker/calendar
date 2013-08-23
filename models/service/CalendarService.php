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
	private $calendarDao;

	/**
	 * __construct
	 */
	public function __construct()
	{
		$this->calendarDao = new CalendarDao();
	}

	/**
	 * get the Event Class
	 * @param  integer $id
	 * @return Object Event Class
	 */
	public function getEvent($calendarId, $eventId)
	{
		return $this->calendarDao->getEvent($calendarId, $eventId);
	}

	/**
	 * Add a new Event
	 * @param array $event name, startTime, endTime, startDate, endDate
	 */
	public function addEvent($calendarId, $eventArray)
	{
		$this->calendarDao->addEvent($calendarId, $eventArray);
	}

	/**
	 * delete a Event
	 * @param  integer $id
	 */
	public function deleteEvent($calendarId, $eventId)
	{
		$this->calendarDao->deleteEvent($calendarId, $eventId);
	}

	public function updateEvent($calendarId, $eventId, $eventArray)
	{
		$this->calendarDao->updateEvent($calendarId, $eventId, $eventArray);
	}

	/**
	 * get a list of all Calendar
	 * @return arrayObject 
	 */
	public function getCalendarList()
	{
		return $this->calendarDao->getCalendarList();
	}

	/**
	 * get a Calendar
	 * @param integer $id
	 */
	public function getCalendar($id)
	{
		return $this->calendarDao->getCalendar($id);
	}

	/**
	 * Creat a new Calendar
	 * @param string $name Calendar Name
	 */
	public function addCalendar($name)
	{
		$this->calendarDao->addCalendar($name);	
	}

	/**
	 * Delete a Calendar
	 * @param  interger $id
	 */
	public function deleteCalendar($id)
	{
		$this->calendarDao->deleteCalendar($id);
	}

	public function updateCalendar($id, $name)
	{
		$this->calendarDao->updateCalendar($id, $name);
	}
}
