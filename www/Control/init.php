<?php
	/* Configuration Options */
	$DEBUG = TRUE;

	/*
		Initialize the start values for each page for every element type
	*/
	if($DEBUG) { $start_time = microtime(true); }
	error_reporting(E_ERROR|E_PARSE);
	$chapterOneDir = 'chapter1/';
	$files = glob($chapterOneDir . '*.html');
	$exampleCount = 0;
	$theoremCount = 0;
	$lemmaCount = 0;

	/* DB */
	$db = new SQLite3("Model/sections.db");	

	foreach($files as $file) {
		if(filemtime($file) > 1388484610)
		{
			$meta = get_meta_tags($file);
			$dom = new DOMDocument;
			$dom->loadHTMLFile($file);
			/* scan for element count */
			foreach($dom->getElementsByTagName('meta') as $tag) {
				if(stripos($tag->getAttribute("name"),"exampleCount") !== false) {
					$exampleCount = $tag->getAttribute("content") . "<br />";
					echo $exampleCount;
				}
			}
//			$path = new DomXPath($dom);
//			$classes = array('theorem','example','lemma');
//			foreach($classes as $classname){
//				$node = $path->query("//*[contains(concat(' ',normalize-space(@class), ' '), ' $classname ')]");
//				${"$classname"."Count"}= $node->length;
//			}
//
//			$section = $meta['section'];
//			$updateSQL = "update section set exampleCount=$exampleCount, lemmaCount=$lemmaCount, theoremCount=$theoremCount where id=='$section'";
//			$update = $db->prepare($updateSQL);
//			$update->execute();
//			/* 1.1.[0-1] */
		}
	}
//	$prevVals = "select * from section where id=='1.1.0'";
//	$query = $db->prepare($prevVals);
//	$results = $query->execute();

	
//	function assignStartValues($chap,$sec,$sub)
//	{
//		global $db;
//		// we need to fetch values from the previous page
//		if($sec==2 && $sub==0)
//		{
//			$prevSection = $chap . "." . ($sec-1) . "." . "1";
//		}
//		elseif($sec==3 && $sub==1)
//		{
//			$prevSection = $chap . "." . ($sec-1) . "." . "5";
//		}
//		elseif($sec==4 && $sub==0)
//		{
//			$prevSection = $chap . "." . ($sec-1) . "." . "6";
//		}
//		elseif($sec==5 && $sub==0)
//		{
//			$prevSection = $chap . "." . ($sec-1) . "." . "5";
//		}
//		else
//		{
//			$prevSection = $chap . "." . $sec . "." . ($sub-1);
//		}
//		$preQuery = "select * from section where id=='$prevSection'";
//		$preQuery = $db->prepare($preQuery);
//		$preResults =  $preQuery->execute();
//		$preResults =  $preResults->fetchArray();
//		$thisStartExample = $preResults['startExample'] + $preResults['exampleCount'];
//		$thisStartLemma = $preResults['startLemma'] + $preResults['lemmaCount'];
//		$thisStartTheorem = $preResults['startTheorem'] + $preResults['theoremCount'];
//		$updateThis = "update section set startExample=$thisStartExample,startLemma=$thisStartLemma,startTheorem=$thisStartTheorem where id=='$chap.$sec.$sub'";
//		$updateThis = $db->prepare($updateThis);
//		$updateThis->execute();
//	}
//
//	assignStartValues(1,1,1);
//	for($i=0;$i<6;$i++)
//	{
//		assignStartValues(1,2,$i);
//	}
//	for($i=1;$i<7;$i++)
//	{
//		assignStartValues(1,3,$i);
//	}	
//	for($i=0;$i<6;$i++)
//	{
//		assignStartValues(1,4,$i);
//	}	
//	assignStartValues(1,5,0);

	if($DEBUG) {
		$end_time = microtime(true);
		$time = $end_time - $start_time;
		echo "time to init $time <br />";
	}
