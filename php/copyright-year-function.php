<?php
// Copyright function
// In footer call copyright();
// <p>Copyright &copy; <?php copyright(); !> All rights reserved.</p>

	function copyright(){
		$start_year = '2015';
		$current_year = date('Y');

		if ($current_year == $start_year) {
			echo $start_year;
			// Return "2015"
		} else {
			echo $start_year . " &ndash; " . $current_year;
			// Return "2015 - 2016" if current_year is 2016
		}
	}

// Copyright function end
?>