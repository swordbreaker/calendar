<?php

class EventModel
{
	public $name;
	public $time;
	public $date;

	public function __construct($name, $time, $date)
	{
		$this->name = $name;
		$this->time = $time;
		$this->date = $date;
	}
}