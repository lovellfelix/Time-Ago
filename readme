Facebook Style time stamp using PHP
===========

The function returns the difference between two Dates as a nice, human string for use in the browser. For instance, the values returned are seconds ago, 50 minutes ago, 7 hours ago, 1 day ago, 2 weeks ago, 1 year ago, and so on.

###Syntax
    $time = strtotime(YYYY-MM-DD HH:MM:SS)

###Example

    $time = strtotime('2010/09/10 10:00:00') => "- 3 days ago" 


The default time units are:

		$tokens = array (
        31536000 => 'year',
        2592000 => 'month',
        604800 => 'week',
        86400 => 'day',
        3600 => 'hour',
        60 => 'minute',
        1 => 'second'
    );
	
The text will be automatically de-pluralized if, say there is only 1 year or 2 years.	

		foreach ($tokens as $unit => $text) {
        if ($time < $unit) continue;
        $numberOfUnits = floor($time / $unit);
        return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
    }
