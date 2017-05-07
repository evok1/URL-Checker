<?php
	// Get data from text area
	/*
	if ($_POST) {	
		$data = explode("\n", $_POST['urlList']);
	} else {}
	*/

	function scan_url ($data) {
		// Checking HTTP status for each URL
		$status = array();
		foreach ($data as $url) {
			// Check HTTP header for each URL
			$headers = get_headers($url) ;
			$server_status = $headers[0] ;
			if (strpos($server_status, '200') !== false) {
				$status[] = '200' ;
			} elseif (strpos($server_status, '301') !== false) {
				$status[] = '301' ;
			} elseif (strpos($server_status, '404') !== false) {
				$status[] = '404' ;
			} else {
				$status[] = $headers[0] ;
			}
		}
		// Creating table from data & status
		foreach (array_combine($data, $status) as $data => $status) {
			echo '<tr><td>',$data,'</td><td>',$status,'</td></tr>' ;
		}
	}
?>