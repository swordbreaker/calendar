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
	private $Calendars;

	/**
	 * __construct
	 * @param string $name Calendar name
	 */
	public function __construct()
	{
		$this->Calendars = array();
		require_once 'models/dao/testData.php';
		$this->Calendars = $TestCalendars;
	}

	/**
	 * get the Event Class
	 * @param  integer $id
	 * @return Object Event Class
	 */
	public function getEvent($calendarId, $eventId)
	{
		return $this->Calendars[$calendarId]->events[$eventId];
	}

	/**
	 * Add a new Event
	 * @param array $event name, startTime, endTime, startDate, endDate
	 */
	public function addEvent($calendarId, $eventArray)
	{
		$Event = new EventModel($eventArray[0], $eventArray[1], $eventArray[2], $eventArray[3], $eventArray[4]);
		$this->Calendars[$calendarId]->addEvent($Event);
	}

	/**
	 * delet a Evente
	 * @param  integer $id
	 */
	public function deleteEvent($calendarId, $eventId)
	{
		$this->Calendars[$calendarId]->removeEvent($eventId);
	}

	/**
	 * update a Event
	 * @param  integer $calendarId
	 * @param  integer $eventId 
	 * @param  array $eventArray name, timeStart, timeEnd, dateStart, dateEnd
	 */
	public function updateEvent($calendarId, $eventId, $eventArray)
	{
		$this->Calendars[$calendarId]->events[$eventId]->name = $eventArray['name'];
		$this->Calendars[$calendarId]->events[$eventId]->startTime = $eventArray['startTime'];
		$this->Calendars[$calendarId]->events[$eventId]->endTime = $eventArray['endTime'];
		$this->Calendars[$calendarId]->events[$eventId]->startDate = $eventArray['startDate'];
		$this->Calendars[$calendarId]->events[$eventId]->endDate = $eventArray['endDate'];
	}

	/**
	 * get All Calendar 
	 * @return object CalendarDao
	 */
	public function getCalendarList()
	{
		return $this->Calendars;
	}

	/**
	 * get a Calendar by id
	 * @param  integer $id
	 * @return oject Calender Class
	 */
	public function getCalendar($id)
	{
		return $this->Calendars[$id];
	}

	/**
	 * Add a Calendar
	 * @param string $name Calendar Name
	 */
	public function addCalendar($name)
	{
		array_push($this->Calendars, new CalendarModel($name));
	}

	/**
	 * delete a Calendar
	 * @param  interger $id
	 */
	public function deleteCalendar($id)
	{
		unset($this->Calendars[$id]);
	}

	/**
	 * update Caldendar name
	 * @param  interger $id
	 * @param  string $name
	 */
	public function updateCalendar($id, $name)
	{
		$this->Calendars[$id]->name = $name;
	}
}