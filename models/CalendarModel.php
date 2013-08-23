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
	public $name;
	public $events;

	/**
	 * __construct
	 * @param string $name
	 */
	public function __construct($name)
	{
		$this->name = $name;
		$this->events = array();
	}

	public function addEvent($event)
	{
		array_push($this->events, $event);
	}

	public function removeEvent($id)
	{
		unset($this->events[$id]);
	}
}