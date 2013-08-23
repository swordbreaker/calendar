<?php

$calendarList = $data['calendarList'];

foreach ($calendarList as $key => $calendar) {
	echo '<a href="'. BASE_URL .'/calendar/showCalendar/'. $key .'">'. $calendar->name .'</a>';
	echo ' ';
	echo '<a href="'. BASE_URL .'/calendar/deleteCalendar/'. $key .'">delete</a>';
	echo '<br>';
}