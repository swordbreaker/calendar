<?php

class CalendarDao
{
	private $EventModel = array();
	private $CalendarModel;

	public function __construct($name)
	{
		$this->EventModel = array();
		$this->CalendarModel = new CalendarModel($name);
	}

	public function getEvent($id)
	{
		return $this->EventModel[$id];
	}

	public function addEvent($event)
	{
		array_push($this->EventModel, $event);
	}

	public function deletEvent($id)
	{
		unset($this->EventModel[$id]);
	}

}