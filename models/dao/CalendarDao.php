<?php

/*
 * (c) Tobias Bollinger <tobias.bollinger@gmail.com>
 *
 */

namespace Calendar;

/**
 * Calendar Data Access Objects Class
 * One Calender with many Events
 */
class CalendarDao
{
	private $calendars;

	/**
	 * __construct
	 * @param string $name Calendar name
	 */
	public function __construct()
	{
		$this->calendars = array();
		require_once 'models/dao/testData.php';
		$this->calendars = $testCalendars;
	}

	/**
	 * get the Event Class
	 * @param  integer $id
	 * @return Object Event Class
	 */
	public function getEvent($calendarId, $eventId)
	{
		return $this->calendars[$calendarId]->events[$eventId];
	}

	/**
	 * Add a new Event
	 * @param array $event name, startTime, endTime, startDate, endDate
	 */
	public function addEvent($calendarId, $eventArray)
	{
		$Event = new EventModel($eventArray[0], $eventArray[1], $eventArray[2], $eventArray[3], $eventArray[4]);
		$this->calendars[$calendarId]->addEvent($Event);
	}

	/**
	 * delet a Evente
	 * @param  integer $id
	 */
	public function deleteEvent($calendarId, $eventId)
	{
		$this->calendars[$calendarId]->removeEvent($eventId);
	}

	/**
	 * update a Event
	 * @param  integer $calendarId
	 * @param  integer $eventId 
	 * @param  array $eventArray name, timeStart, timeEnd, dateStart, dateEnd
	 */
	public function updateEvent($calendarId, $eventId, $eventArray)
	{
		$this->calendars[$calendarId]->events[$eventId]->name = $eventArray['name'];
		$this->calendars[$calendarId]->events[$eventId]->startTime = $eventArray['startTime'];
		$this->calendars[$calendarId]->events[$eventId]->endTime = $eventArray['endTime'];
		$this->calendars[$calendarId]->events[$eventId]->startDate = $eventArray['startDate'];
		$this->calendars[$calendarId]->events[$eventId]->endDate = $eventArray['endDate'];
	}

	/**
	 * get All Calendar 
	 * @return object CalendarDao
	 */
	public function getCalendarList()
	{
		return $this->calendars;
	}

	/**
	 * get a Calendar by id
	 * @param  integer $id
	 * @return oject Calender Class
	 */
	public function getCalendar($id)
	{
		return $this->calendars[$id];
	}

	/**
	 * Add a Calendar
	 * @param string $name Calendar Name
	 */
	public function addCalendar($name)
	{
		array_push($this->calendars, new CalendarModel($name));
	}

	/**
	 * delete a Calendar
	 * @param  interger $id
	 */
	public function deleteCalendar($id)
	{
		unset($this->calendars[$id]);
	}

	/**
	 * update Caldendar name
	 * @param  interger $id
	 * @param  string $name
	 */
	public function updateCalendar($id, $name)
	{
		$this->calendars[$id]->name = $name;
	}
}