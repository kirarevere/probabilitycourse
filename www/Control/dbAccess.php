<?php
	$db 			= null;
	$results 	= null;
	function getStart($pageNo)
	{
		global $db, $results;
		$start_time = microtime(true);
		if(is_null($db))
		{
			$db = new SQLite3('../Model/sections.db');
			$startValQuery = "SELECT * from section where id=='$pageNo'";
			$startValQuery = $db->prepare($startValQuery);
			$results = $startValQuery->execute();
			$results = $results->fetchArray(SQLITE3_ASSOC);
		}
		$end_time = microtime(true);
		$time = $end_time - $start_time;
		echo "took $time to read" . "<br />";
		return $results;
	}
	

	function getStartExample($pageNo)
	{
		$results = getStart($pageNo);
		return $results['startExample'];
	}
	
	function	getStartTheorem($pageNo)
	{
		$results = getStart($pageNo);
		return $results['startTheorem'];
	}

	function getStartLemma($pageNo)
	{
		$results = getStart($pageNo);
		return $results['startLemma'];
	}

