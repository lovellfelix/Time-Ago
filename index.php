<?php
$time = strtotime('2012-06-13 15:25:43');  // Time to convert 
· 8 minutes ago 
echo ' · '.timeStamp($time).' ago '; // Prints timestamp

function timeStamp ($time)
{

    $time = time() - $time; // Calculate the time since that moment ago

    $tokens = array (  // Default time units.
        31536000 => 'year',
        2592000 => 'month',
        604800 => 'week',
        86400 => 'day',
        3600 => 'hour',
        60 => 'minute',
        1 => 'second'
    );

    foreach ($tokens as $unit => $text) {
        if ($time < $unit) continue;
        $numberOfUnits = floor($time / $unit);
        return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':''); // Automatically de-pluralized if, say there is only 1 year.
    }




}?>