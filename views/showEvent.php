<?php
$event = $data['event'];
$calendarId = $data['calendarId'];
$eventId = $data['eventId'];

echo $event->name;
echo "<br>";
echo $event->startTime;
echo " - ";
echo $event->endTime;
echo "<br>";
echo $event->startDate;
echo " - ";
echo $event->endDate;
echo "<br>";
echo '<a href="'. BASE_URL .'/calendar/deleteEvent/'. $calendarId .'/'. $eventId .'">delete</a>';