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
	private $EventModel = array();
	private $CalendarModel;

	/**
	 * __construct
	 * @param string $name Calendar name
	 */
	public function __construct($name)
	{
		$this->EventModel = array();
		$this->CalendarModel = new CalendarModel($name);
	}

	/**
	 * get the Name of the Caldendar
	 * @return string Calendar name
	 */
	public function getCalendarName()
	{
		return $this->CalendarModel->getName();
	}

	/**
	 * get the Event Class
	 * @param  integer $id
	 * @return Object Event Class
	 */
	public function getEvent($id)
	{
		return $this->EventModel[$id];
	}

	/**
	 * Add a new Event
	 * @param array $event name, startTime, endTime, startDate, endDate
	 */
	public function addEvent($event)
	{
		array_push($this->EventModel, $event);
	}

	/**
	 * delet a Event
	 * @param  integer $id
	 */
	public function deletEvent($id)
	{
		unset($this->EventModel[$id]);
	}
}