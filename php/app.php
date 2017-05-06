<?php
	if ($_POST)
		{
			// Get data from text area
			$data = explode("\n", $_POST['urlList']);

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
			echo '<table style="font-size:12px"><thead><th class="col-xs-3">URL</th><th class="col-xs-2 text-center">Status</th>
	</thead><tbody>' ;
			foreach (array_combine($data, $status) as $data => $status) {
				echo '<tr><td>',$data,'</td><td>',$status,'</td></tr>' ;
			}
			echo '</tbody></table>';

		}
		else {}

?>