<?php
$Calendar = $data['Calendar'];
$calendarId = $data['calendarId'];

$EventList = $Calendar->events;

echo '<h1>'. $Calendar->name .'</h1>';

foreach ($EventList as $eventId => $Event) {
	echo '<a href="'. BASE_URL .'/calendar/showEvent/'. $calendarId .'/'. $eventId .'">'. $Event->name .'</a>';
	echo '<br>';
	echo $Event->startTime;
	echo " - ";
	echo $Event->endTime;
	echo "<br>";
	echo $Event->startDate;
	echo " - ";
	echo $Event->endDate;
	echo "<br>";
}