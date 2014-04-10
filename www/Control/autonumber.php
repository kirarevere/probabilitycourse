<?php
	/* CONFIGURE */
	error_reporting(E_PARSE);
	$data = null;
	$DATA_DIR = $_SERVER['DOCUMENT_ROOT'] . "/Control/DATA";
	$chapterOneDir = $_SERVER['DOCUMENT_ROOT'] . "/chapter1/";
	$chapterTwoDir = $_SERVER['DOCUMENT_ROOT'] . "/chapter2/";
	$chapterThreeDir = $_SERVER['DOCUMENT_ROOT'] . "/chapter3/";
	$chapterFourDir = $_SERVER['DOCUMENT_ROOT'] . "/chapter4/";
	$chapterFiveDir = $_SERVER['DOCUMENT_ROOT'] . "/chapter5/";
	$chapterSixDir	= $_SERVER['DOCUMENT_ROOT'] . "/chapter6/";
	$exCount; $thCount; $lmCount;

	$currentChapter; $currentSection; $currentSubsection;

	//	We should process html files in order
	//	should be sorted by chapter and section number
	//		->	$chapter1Dir = "/var/www/probabilitycourse.com/www/chapter1/	
	//	

	/*$count = 0;
 
		for each ordered html file as $page
			$count += countElem($page,$elemType)
			setStart($page+1,$count);
		end

		countElem($page,$elemType)
			$count = 0;
			foreach elem that is $elemType
				$count++
			return $count
		end

		setStart($page,$count)
			
		end
	*/

// Let's store inside DATA	fileName,exampleStart,theoremStart,lemmaStart,lastScanTime

	function createEntry($chapter,$section,$subSection,$exampleStart,$theoremStart,$lemmaStart,$defStart,$lastScanTime)	{
			$i=0;
		foreach(func_get_args() as $arg)	{
			$i++;
			if(is_null($arg)) { echo "$chapter null arg $i. cannot create entry\n"; return false; }
		}
		return "$chapter,$section,$subSection,$exampleStart,$theoremStart,$lemmaStart,$defStart,$lastScanTime\n";
	}

	function readEntry($pageNo)	{
		global $data;
		list($ch,$sec,$subsec,$ex,$th,$lm,$def,$mod) = parseEntry($data[$pageNo]);
		echo "Section $ch.$sec.$subsec\n\tEx Count: $ex\n\tTheorem Count: $th\n\tLemma Count: $lm\n\tLast scanned: $mod\n";
	}

	function getExampleStart($pageNo)	{
		global $data;
		list($ch,$sec,$subsec,$ex,$th,$lm,$def,$mod) = parseEntry($data[$pageNo]);
		return $ex;
	}
	function getLemmaStart($pageNo)	{
		global $data;
		list($ch,$sec,$subsec,$ex,$th,$lm,$def,$mod) = parseEntry($data[$pageNo]);
		return $lm;
	}

	function getTheoremStart($pageNo)	{
		global $data;
		list($ch,$sec,$subsec,$ex,$th,$lm,$def,$mod) = parseEntry($data[$pageNo]);
		return $th;
	}

	function getDefStart($pageNo) {
		global $data;
		list($ch,$sec,$subsec,$ex,$th,$lm,$def,$mod) = parseEntry($data[$pageNo]);
		return $def;
	}

	function parseEntry($entry)	{
		return sscanf($entry,"%d,%d,%d,%d,%d,%d,%d");
	}

	function getSectionInfo($pageNo,$field) {
 		global $data;
		list($ch,$sec,$subsec,$ex,$th,$lm,$def,$mod) = parseEntry($data[$pageNo+1]);
		switch($field) {
			case 'chapter':
				return $ch;
			case 'section':
				return $sec;
			case 'subsection':
				return $subsec;
			case 'exampleStartVal':
				return $ex;
			case 'theoremStartVal':
				return $th;
			case 'lemmaStartVal':
				return $lm;
			case 'defStartVal':
				return $def;
			case 'lastModified':
				return $mod;
			default:
				echo "request cannot be completed. unknown field '$field.'<br />";
				return false;
		}
	}

	function initElemCount($phpDir,$mod,$dataFile)	{
		$exCount = 0;
		$thCount = 0;
		$lmCount = 0;
		$defCount = 0;
//		global $DATA_DIR;
//		if(is_null($dataFile = fopen($DATA_DIR,$mod))) {
//			echo "DATA file could not be opened.<br/>";
//		}
		$files = glob($phpDir . '*.php');
		if(count($files)==0) {
		//	echo "No files found in $phpDir.<br/>";
		}
		$dom = new domDocument;	
		foreach($files as $file)	{
			$filename = substr($file,strlen($phpDir));
			if(strcmp($filename,"section_header.php") == 0 || strcmp($filename,"section_footer.php") == 0)
				continue;
			$fileInfo = sscanf($filename,"%d_%d_%d_%s");
			list($ch,$sec,$subsec,$name) = $fileInfo;
//			echo "$ch.$sec.$subsec $name\n";
			$dom->loadHTMLFile($file);
			foreach($dom->getElementsByTagName('span') as $tag)	{
				if(stripos($tag->getAttribute('class'),"example") !== false) {
					$exCount++;
				} else if(stripos($tag->getAttribute('class'),"theorem") !== false) {
					$thCount++;
				} else if(stripos($tag->getAttribute('class'),"lemma") !== false) {
					$lmCount++;
				} else if(stripos($tag->getAttribute('class'),"definition") !== false) {
					$defCount++;
				}
			}
			// at this point should create entry for the page
			fwrite($dataFile,createEntry($ch,$sec,$subsec,$exCount,$thCount,$lmCount,$defCount,filemtime($file)));
		}
	}

	function startup()	{
		global $data;
		global $chapterOneDir, $chapterTwoDir, $chapterThreeDir, $chapterFourDir, $chapterFiveDir;
		global $DATA_DIR;
		global $exCount, $thCount, $lmCount;
		$exCount = 0; $thCount = 0; $lmCount = 0;	
		$dataFile = fopen($DATA_DIR,"w+");
		initElemCount($chapterOneDir,"w+",$dataFile);
		initElemCount($chapterTwoDir,"a",$dataFile);
		initElemCount($chapterThreeDir,"a",$dataFile);
		initElemCount($chapterFourDir,"a",$dataFile);
		initElemCount($chapterFiveDir,"a",$dataFile);
		initElemCount($chapterSixDir,"a",$dataFile);
		// create DATA
		$data = file($DATA_DIR);
	}

	function loadHeaders($pageNo)	{
		$ex = getExampleStart($pageNo);
		$lm = getLemmaStart($pageNo);
		$tm = getTheoremStart($pageNo);
		$def = getDefStart($pageNo);
		// retrieve chapter.section.subsection
		$chap = getSectionInfo($pageNo,'chapter');
		echo	"<style>\n\r"
					.	"body	{	counter-reset: example $ex"
					.	" theorem	$tm"
					. " lemma $lm"
					. " definition $def"
					. " problem 0"
					. ";}\n\r"
					. ".example,.theorem,.lemma,.problem, .definition { font-weight:bold; }\n\r"
					.	".example:after { counter-increment: example 1; content:'$chap.'counter(example); }\n\r"
					.	".theorem:after { counter-increment: theorem 1; content:'$chap.'counter(theorem); }\n\r"
					. ".lemma:after		{ counter-increment: lemma	1;	content:'$chap.'counter(lemma);		}\n\r"
					. ".problem:after { counter-increment: problem 1; content:counter(problem); }\n\r"
					. ".definition:after { counter-increment: definition 1; content:'$chap.'counter(definition); }\n\r"
					.	"</style>\n\r";
	}

	function initChapterHeaders($chap) {
		echo "<style>\n\r"
					. "body { counter-reset: example 0"
					. " theorem 0"
					. " problem 0"
					. " definition 0"
					. " lemma 0"
					. " ;}\n\r"
					. ".example, .theorem, .lemma, .problem, .definition { font-weight:bold; }\n\r"
					.	".example:after { counter-increment: example 1; content:'$chap.'counter(example); }\n\r"
					.	".theorem:after { counter-increment: theorem 1; content:'$chap.'counter(theorem); }\n\r"
					. ".lemma:after		{ counter-increment: lemma	1;	content:'$chap.'counter(lemma);		}\n\r"
					. ".problem:after { counter-increment: problem 1; content:counter(problem); }\n\r"
					. ".definition:after { counter-increment: definition 1; content:'$chap.'counter(definition); }\n\r"
					.	"</style>\n\r";	
	}

	startup();
