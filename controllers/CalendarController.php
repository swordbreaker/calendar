<?php

/*
 * (c) Tobias Bollinger <tobias.bollinger@gmail.com>
 *
 */

namespace Calendar;

/**
 * Calendar Controller
 */
class CalendarController
{
	private $CalendarService;
	private $CalendarList;
	private $Loader;
	/**
	 * __construct
	 */
	public function __construct()
	{
		$this->CalendarService = new CalendarService();
		$this->Loader = new Loader();
		$this->Loader->setTemplate('template/header.php', 'template/footer.php');
	}

	/**
	 * index Controller
	 */
	public function index()
	{
		$this->setTestData();

		$data['Calendar1'] = $this->CalendarService->getCalendar(0);
		$data['Calendar2'] = $this->CalendarService->getCalendar(1);

		$this->Loader->loadView('listEvents', $data);
	}

	/**
	 * add a Event
	 * @param integer $calendarId
	 * @param array $event name, startTime, endTime, startDate, endDate
	 */
	public function addEvent($calendarId, $event)
	{
		$this->CalendarService->getCalendar($calendarId)->addEvent($event);
	}

	/**
	 * delet a Evebt
	 * @param  integer $calendarId
	 * @param  interger $eventId
	 */
	public function deletEvent($calendarId, $eventId)
	{
		$this->CalendarService->getCalendar($calendarId)->deletEvent($eventId);
	}

	/**
	 * add a new Calendar
	 * @param string $name
	 */
	public function addCalendar($name)
	{
		$this->CalendarService->addCalendar($name);
	}

	/**
	 * delet a Calendar
	 * @param  integer $id
	 */
	public function deletCalendar($id)
	{		
		$this->CalendarService->deletCalendar($id);
	}

	/**
	 * [say description]
	 * @param  string $value [description]
	 * @return [type]        [description]
	 */
	public function say($value='')
	{
		$data = array('name' => $value);
		$this->Loader->setSideTitle('Test Side');
		$this->Loader->loadView('test', $data);
	}

	/**
	 * Set Test Data
	 */
	private function setTestData()
	{
		$this->addCalendar('Arbeit');
		$this->addCalendar('Privat');
		$event1 = array(
			'Aufstehen',
			'8.00',
			'8.00',
			'21.08.2013',
			'22.08.2013',
		);
		$event2 = array(
			'Schlafen',
			'23.00',
			'8.00',
			'21.08.2013',
			'21.08.2013',
		);
		$event3 = array(
			'Gehen',
			'11.00',
			'12.00',
			'21.08.2013',
			'21.08.2013',
		);
		$this->addEvent(0, $event1);
		$this->addEvent(0, $event2);
		$this->addEvent(1, $event3);
	}
}