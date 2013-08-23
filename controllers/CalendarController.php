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
	private $calendarService;
	private $loader;
	/**
	 * __construct
	 */
	public function __construct()
	{
		$this->calendarService = new CalendarService();
		$this->loader = new Loader();
		$this->loader->setTemplate('template/header.php', 'template/footer.php');
	}

	/**
	 * index Controller
	 */
	public function index()
	{
		$this->listCalendars();
	}

	public function listCalendars()
	{
		$CalendarList = $this->calendarService->getCalendarList();

		$data['calendarList'] = $CalendarList;
		$this->loader->loadView('listCalendar', $data);
	}

	/**
	 * show a Calendar
	 * @param  integer $id
	 */
	public function showCalendar($id)
	{
		$data['calendar'] = $this->calendarService->getCalendar($id);
		$data['calendarId'] = $id;
		$this->loader->loadView('showCalendar', $data);
	}

	/**
	 * Show a Event
	 * @param  integer $calendarId
	 * @param  integer $eventId
	 */
	public function showEvent($calendarId, $eventId)
	{
		$data['event'] = $this->calendarService->getEvent($calendarId, $eventId);
		$data['calendarId'] = $calendarId;
		$data['eventId'] = $eventId;
		$this->loader->loadView('showEvent', $data);
	}

	/**
	 * add a Event
	 * @param integer $calendarId
	 * @param array $event name, startTime, endTime, startDate, endDate
	 */
	public function addEvent($calendarId, $event)
	{
		$this->calendarService->addEvent($calendarId, $event);
	}

	/**
	 * delete a Evebt
	 * @param  integer $calendarId
	 * @param  interger $eventId
	 */
	public function deleteEvent($calendarId, $eventId)
	{
		$this->calendarService->deleteEvent($calendarId, $eventId);
	}

	/**
	 * update the Event
	 * @param  interger $calendarId
	 * @param  interger $eventId
	 */
	public function updateEvent($calendarId, $eventId)
	{
		$eventArray = array(
			'name' => $_GET['name'],
			'startTime' => $_GET['startTime'],
			'endTime' => $_GET['endTime'],
			'startDate' => $_GET['startDate'],
			'endDate' => $_GET['endDate'],
			);

		$this->calendarService->updateEvent($calendarId, $eventId, $eventArray);
		//URL for testing http://localhost/calendar/calendar/updateEvent/0/0/?name=neuerName&startTime=10.00&endTime=11.00&startDate=23.08.2013&endDate=23.08.2013

		//for testing
		$this->showEvent($calendarId, $eventId);
	}

	/**
	 * add a new Calendar
	 * @param string $name
	 */
	public function addCalendar($name)
	{
		$this->calendarService->addCalendar($name);
	}

	/**
	 * delete a Calendar
	 * @param  integer $id
	 */
	public function deleteCalendar($id)
	{
		$this->calendarService->deleteCalendar($id);
	}

	/**
	 * update a Calendar
	 * @param  integer $calendarId
	 * @param  string $name
	 */
	public function updateCalendar($calendarId, $name)
	{
		$this->calendarService->updateCalendar($calendarId, $name);

		//for testing
		$this->showCalendar($calendarId);
	}
}