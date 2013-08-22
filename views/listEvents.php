<?php

$Calendar1 = $data['Calendar1'];
$Calendar2 = $data['Calendar2'];

echo $Calendar1->getCalendarName(0);
echo "<br>";

$Event1 = $Calendar1->getEvent(0);
foreach ($Event1 as $key => $value) 
{
	echo $value;
	echo "<br>";
}

$Event2 = $Calendar1->getEvent(1);
foreach ($Event2 as $key => $value) 
{
	echo $value;
	echo "<br>";
}

echo $Calendar2->getCalendarName(1);
echo "<br>";

$Event3 = $Calendar2->getEvent(0);
foreach ($Event3 as $key2 => $value2) 
{
	echo $value2;
	echo "<br>";
}