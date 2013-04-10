

<?php
	$days = array("Friday", "Saturday", "Sunday");
	$hourAm = array(6, 7, 8, 9, 10, 11);
	$hourPm = array(12, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11);

	function scheduleFriday() {
	GLOBAL $days, $hourAm, $hourPm;
		echo "<td><h2>$days[0]</h2></td>"; 
		foreach ($hourAm as $hourA) {
			echo '<td class="hour"><h3 class="t-stamp">' . $hourA . "am" . '</h3></td>';		
				}
		foreach ($hourPm as $hourP) {
			echo '<td class="hour"><h3 class="t-stamp">' . $hourP ."pm" .'</h3></td>';
				}

		unset($hourA);
		unset($hourP);
	}
		function scheduleSaturday() {
	GLOBAL $days, $hourAm, $hourPm;
		echo "<td><h2>$days[1]</h2></td>"; 
		
		
		foreach ($hourAm as $hourA) {
			echo '<td class="hour"><h3 class="t-stamp">' . $hourA . "am" . '</h3></td>';		
		}

		foreach ($hourPm as $hourP) {
			echo '<td class="hour"><h3 class="t-stamp">' . $hourP ."pm" .'</h3></td>';
		}

		unset($hourA);
		unset($hourP);
		}
		function scheduleSunday() {
	GLOBAL $days, $hourAm, $hourPm;	
		echo "<td><h2>$days[2]</h2></td>"; 
		

		foreach ($hourAm as $hourA) {
			echo '<td class="hour"><h3 class="t-stamp">' . $hourA . "am" . '</h3></td>';		
		}

		foreach ($hourPm as $hourP) {
			echo '<td class="hour"><h3 class="t-stamp">' . $hourP ."pm" .'</h3></td>';
		}

					unset($hourA);
					unset($hourP);
	}
//end fullSchedule
	$locations = array("Holiday Ballroom", "Key Ballroom", "Assigned Rooms", "West Foyer")
//start next event countdown 

					?>