<?php

$CalendarList = $data['CalendarList'];

foreach ($CalendarList as $key => $Calendar) {
	echo '<a href="'. BASE_URL .'/calendar/showCalendar/'. $key .'">'. $Calendar->name .'</a>';
	echo ' ';
	echo '<a href="'. BASE_URL .'/calendar/deleteCalendar/'. $key .'">delete</a>';
	echo '<br>';
}