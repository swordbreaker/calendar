<?php
$calendar = $data['calendar'];
$calendarId = $data['calendarId'];

$eventList = $calendar->events;

echo '<h2>'. $calendar->name .'</h2>';

foreach ($eventList as $eventId => $event) {
	echo '<a href="'. BASE_URL .'/calendar/showEvent/'. $calendarId .'/'. $eventId .'">'. $event->name .'</a>';
	echo '<br>';
	echo $event->startTime;
	echo " - ";
	echo $event->endTime;
	echo "<br>";
	echo $event->startDate;
	echo " - ";
	echo $event->endDate;
	echo "<br>";
}