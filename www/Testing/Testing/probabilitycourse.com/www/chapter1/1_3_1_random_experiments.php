<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../"></base>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="section"	content="1.3.1"	/>
	<?php include '../Control/autonumber.php'; ?>
	<?php loadHeaders(7); ?>
<!--
	<style>
		body	{	counter-reset:	example	<?php getExampleStart(8);	?>;	}
		.example	{	font-weight:	bold;	}
		.example:after	{	counter-increment:	example	1;	content:	counter(example);	}
	</style>
-->
	<script type="text/x-mathjax-config">
  			MathJax.Hub.Config({
    		tex2jax: { inlineMath: [['$','$'],['\\(','\\)']] },
				"HTML-CSS": { scale: 100 }
  			});
	</script>	
	<script type="text/javascript"
  			src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
	</script>
	
	<script type='text/javascript' src='http://code.jquery.com/jquery-1.6.3.js'></script>
	<script type="text/javascript" src="javascript/menu_js_code.js"></script>
	
	<link rel="stylesheet" type="text/css" href="style_sheet.css" />

	<title>Intro to Probability</title>

</head><body>
	<div id="container">
		<script type="text/javascript" src="javascript/top_page_html_code.js"></script>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock">
				<div class="left"><a>&larr; </a><a href="chapter1/1_2_5_solved1.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_3_2_probability.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>1.3.1 Random Experiments</h2></div>
    		<div class="right">
			<a href="videos/chapter1/video1_3.html"><img src="images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<a href="chapter1/random_experiments_print.html"><img src="images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></a></div>
    		<div class="clear"></div>
			
			<p>Before rolling a die you do not know the result. This is an example of a <b>random experiment</b>. 
			In particular, a random experiment is a process by which we observe something uncertain. After 
			the experiment, the result of the random experiment is known. An <b>outcome</b> is a result of a 
			random experiment. The set of all possible outcomes is called the <b>sample space</b>. Thus in 
			the context of a random experiment, the sample space is our <i>universal set</i>. Here are some 
			examples of random experiments and their sample spaces:
			<ul>
    			<li>Random experiment: toss a coin; sample space: $S=\{heads, tails\}$ or as we usually write it $\{H,T\}$.</li>
    			<li>Random experiment: roll a die; sample space: $S=\{1, 2, 3, 4, 5, 6\}$.</li>
    			<li>Random experiment: observe the number of iPhones sold by an Apple store in 
				Boston in $2015$; sample space: $S=\{0, 1, 2, 3, \cdots \}$.</li>
    			<li>Random experiment: observe the number of goals in a soccer match; sample space: $S=\{0, 1, 2, 3, \cdots \}$.</li>
			</ul></p>
			
			<p>When we repeat a random experiment several times, we call each one of them a <b>trial</b>. Thus, a trial 
			is a particular performance of a random experiment. In the example of tossing a coin, each trial will 
			result in either heads or tails. Note that the sample space is defined based on how you define your random 
			experiment. For example:</p>
			
			<hr /><br>
			<p><span class='example'>Example </span><br>
			We toss a coin three times and observe the sequence of heads/tails. The sample space here may be defined as
			$$S = \{(H,H,H), (H,H,T), (H,T,H), (T,H,H), (H,T,T),(T,H,T),(T,T,H),(T,T,T)\}$$</p>
			<br><hr />
			
			<p>Our goal is to assign probability to certain <b>events</b>. For example, suppose that we would like 
			to know the probability that the outcome of rolling a fair die is an even number. In this case, our event 
			is the set $E=\{2, 4, 6\}$. If the result of our random experiment belongs to the set $E$, we say that 
			the event $E$ has occurred. Thus an event is a collection of possible outcomes. In other words, an event 
			is a subset of the sample space to which we assign a probability. Although we have not yet discussed how 
			to find the probability of an event, you might be able to guess that the probability of $\{2, 4, 6 \}$ is 
			$50$ percent which is the same as $\frac{1}{2}$ in the probability theory convention.</p>
			
			<div align="center"><p style="padding: 15px; border: black 1px solid">
			Outcome: A result of a random experiment<br>
			Sample Space: The set of all possible outcomes<br>
			Event: A subset of the sample space</p>
			</div>
			
			<p><i>Union and Intersection:</i> If $A$ and $B$ are events, then $A \cup B$ and $A \cap B$ are also events. 
			By remembering the definition of union and intersection, we observe that $A \cup B$ occurs if $A$ <u>or</u> $B$ 
			occur. Similarly, $A \cap B$ occurs if both $A$ <u>and</u> $B$ occur. Similarly, if $A_1, A_2,\cdots, A_n$ are 
			events, then the event $A_1 \cup A_2 \cup A_3 \cdots \cup A_n$ occurs if <u>at least</u> one of 
			$A_1, A_2,\cdots, A_n$ occurs. The event $A_1 \cap A_2 \cap A_3 \cdots \cap A_n$ occurs if 
			<u>all of</u> $A_1, A_2,\cdots, A_n$ occur. It can be helpful to remember that the key words "or" and "at least" 
			correspond to unions and the key words "and" and "all of" correspond to intersections.</p>			
			
			<hr />
			<div class="thinblock">
				<div class="left"><a>&larr; </a><a href="chapter1/1_2_5_solved1.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_3_2_probability.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>		
		</div>
		<div id="menu">
			 <script type="text/javascript" src="javascript/menu_html_code.js"></script>
		</div>

		<div id="footer">
			<script type="text/javascript" src="javascript/footer_html_code.js"></script>
		</div>
	</div>
</body>
</html>
