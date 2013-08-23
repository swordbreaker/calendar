<?php
$Event = $data['Event'];
$calendarId = $data['calendarId'];
$eventId = $data['eventId'];

echo $Event->name;
echo "<br>";
echo $Event->startTime;
echo " - ";
echo $Event->endTime;
echo "<br>";
echo $Event->startDate;
echo " - ";
echo $Event->endDate;
echo "<br>";
echo '<a href="'. BASE_URL .'/calendar/deleteEvent/'. $calendarId .'/'. $eventId .'">delete</a>';