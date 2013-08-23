<?php

$TestCalendars = array();

$TestCalendars[0] = new Calendar\CalendarModel('Arbeit');
$TestCalendars[1] = new Calendar\CalendarModel('Privat');

$event1 = new Calendar\EventModel(
	'Aufstehen',
	'8.00',
	'8.00',
	'21.08.2013',
	'22.08.2013'
	);
$event2 = new Calendar\EventModel(
	'Schlafen',
	'23.00',
	'8.00',
	'21.08.2013',
	'21.08.2013'
	);
$event3 = new Calendar\EventModel(
	'Gehen',
	'11.00',
	'12.00',
	'21.08.2013',
	'21.08.2013'
	);

$TestCalendars[0]->addEvent($event1);
$TestCalendars[0]->addEvent($event2);
$TestCalendars[1]->addEvent($event3);
