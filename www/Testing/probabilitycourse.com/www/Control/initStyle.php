<?php
	function initStyle($pageNo)	{
		$sE = getStartExample($pageNo);
		$sT = getStartTheorem($pageNo);
		$sL = getStartLemma($pageNo);
		$sP = 0;
	echo "\n\r
		<style>
		body	{
			counter-reset:	example	$sE theorem $sT lemma $sL problem $sP;
		}\n\r
		.example, .theorem, .lemma, .problem {	font-weight:	bold;	}
		.example:after { counter-increment: example 1; content: counter(example);	}
		.theorem:after { counter-increment: theorem 1; content: counter(theorem); }
		.lemma:after { counter-increment: lemma 1; content: counter(lemma); }
		.problem:after { counter-increment: problem 1; content: counter(problem); }
		</style>\n\r";
	}
