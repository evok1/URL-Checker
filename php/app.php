<?php
	
	// Main function
	function scan_url ($data) {

		// Checking HTTP status for each URL
		foreach ($data as $url) {

			// Removing unwanted caracters
			$url=str_replace("\r","",$url) ;
			$url=str_replace("\n","",$url) ;

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

			sleep(1) ;
		}

		// Creating table from data & status
		foreach (array_combine($data, $status) as $data => $status) {
			echo '<tr><td>',$data,'</td><td>',$status,'</td></tr>';
		}
	}

	// test function
	function scan_url2 ($data) {

		// Checking HTTP status for each URL
		foreach ($data as $url) {
			
			// Removing unwanted caracters
			$url=str_replace("\r","",$url) ;
			$url=str_replace("\n","",$url) ;

			// Check HTTP header for each URL. Thx http://stackoverflow.com/questions/11797680/curl-getting-http-code
			$ch = curl_init($url);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
			curl_setopt($ch,CURLOPT_TIMEOUT,10);
			$output = curl_exec($ch);
			$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			curl_close($ch);
		}

		// Creating table from data & status
		foreach ($data as $url) {
			echo '<tr><td>',$url,'</td><td>',$httpcode,'</td></tr>';
		}

	}

?>