<?php

/*
 * (c) Tobias Bollinger <tobias.bollinger@gmail.com>
 *
 */

$testCalendars = array();
$testCalendars[0] = new Calendar\CalendarModel('Arbeit');
$testCalendars[1] = new Calendar\CalendarModel('Privat');

$event1 = new Calendar\EventModel(
	'Meeting mit Bob',
	'9.00',
	'10.00',
	'21.08.2013',
	'22.08.2013'
	);
$event2 = new Calendar\EventModel(
	'Einen Kaffee holen gehen',
	'10.05',
	'10.10',
	'21.08.2013',
	'21.08.2013'
	);
$event3 = new Calendar\EventModel(
	'Ins Kino mit Klaus',
	'20.00',
	'22.00',
	'21.08.2013',
	'21.08.2013'
	);
$testCalendars[0]->addEvent($event1);
$testCalendars[0]->addEvent($event2);
$testCalendars[1]->addEvent($event3);
