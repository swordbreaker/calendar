<?php

class CalendarController
{
	private $CalendarService;
	private $CalendarList;

	public function __construct()
	{
		$this->CalendarService = new CalendarService();
		$this->CalendarList = $this->CalendarService->getCalendarListDao();
	}

	public function index()
	{
		$this->setTestData();

		$CalendarDao = $this->CalendarService->getCalendarDao(0);

		$Event1 = $CalendarDao->getEvent(0);
		foreach ($Event1 as $key => $value) {
			echo $key;
			echo $value;
			echo "<br>";
		}

		$Event2 = $CalendarDao->getEvent(1);
		foreach ($Event2 as $key => $value) {
			echo $key;
			echo $value;
			echo "<br>";
		}

		$CalendarDao2 = $this->CalendarService->getCalendarDao(1);

		$Event3 = $CalendarDao2->getEvent(0);
		foreach ($Event3 as $key2 => $value2) {
			echo $key2;
			echo $value2;
			echo "<br>";
		}
		
	}

	public function addEvent($calendarId, $event)
	{
		$this->CalendarList->getCalendar($calendarId)->addEvent($event);
	}

	public function deletEvent($calendarId, $eventId)
	{
		$this->CalendarList->getCalendar($calendarId)->deletEvent($eventId);
	}

	public function addCalendar($name)
	{
		$this->CalendarList->addCalendar($name);
	}

	public function deletCalendar($id)
	{		
		$this->CalendarList->deletCalendar($id);
	}

	private function setTestData()
	{
		$this->addCalendar('Arbeit');
		$this->addCalendar('Privat');
		$event1 = array(
			'Aufstehen',
			'8.00',
			'21.08.2013',
		);
		$event2 = array(
			'Schlafen',
			'23.00',
			'21.08.2013',
		);
		$event3 = array(
			'Gehen',
			'11.00',
			'21.08.2013',
		);
		$this->addEvent(0, $event1);
		$this->addEvent(0, $event2);
		$this->addEvent(1, $event3);
	}

}