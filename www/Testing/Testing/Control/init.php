<?php
	/*
		Initialize the start values for each page for every element type
	*/
	$files = glob('Documents/*.html');
	foreach($files as $file) {
		echo $file . "<br />";
		$meta = get_meta_tags($file);
		foreach($meta as $m)
		{
			echo $m . "<br />";
		}
		$dom = new DOMDocument;
		$dom->loadHTMLFile($file,LIBXML_NOERROR+LIBXML_NOWARNING);
		$path = new DomXPath($dom);
		$classes = array('theorem','example','lemma');
		foreach($classes as $classname){
			echo $classname . " ";
			$node = $path->query("//*[contains(concat(' ',normalize-space(@class), ' '), ' $classname ')]");
			echo " " . $node->length . "<br />";
		}
	}
