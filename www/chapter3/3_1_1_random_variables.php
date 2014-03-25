<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<?php include '../Control/autonumber.php'; initChapterHeaders(3); ?>
	<meta name='section'	content='3.1.1' />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	
	<script type="text/x-mathjax-config">
  			MathJax.Hub.Config({
    		tex2jax: { inlineMath: [['$','$'],['\\(','\\)']] }
  			});
	</script>	
	<script type="text/javascript"
  			src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
	</script>
	
	<script type='text/javascript' src='http://code.jquery.com/jquery-1.6.3.js'></script>
	<script type="text/javascript" src="javascript/menu_js_code.js"></script>
	<script type="text/javascript" src="javascript/solved_prob.js"></script>
	
	<link rel="stylesheet" type="text/css" href="http://probabilitycourse.com/style_sheet.css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="print.css" media="print" />

	<title>Random Variables | Analysis | Random Experiments</title>
	<meta name="description" content="We focus on numerical aspects of an experiment for our analysis" />

</head><body>
	<div id="container">
		<span class="hide_print">
			<script type="text/javascript" src="http://probabilitycourse.com/javascript/top_page_html_code.js"></script>
		</span>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter2/2_3_0_chapter2_problems.php">previous</a></div>
    			<div class="right"><a href="chapter3/3_1_2_discrete_random_var.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>3.1.1 Random Variables</h2></div>
    		<div class="right hide_print">
			<a href="http://probabilitycourse.com/videos/chapter3/video3_1.html"><img src="http://probabilitycourse.com/images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img id="printButton" src="http://probabilitycourse.com/images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></div>
    		<div class="clear"></div>
			
			<p>In general, to analyze random experiments, we usually focus on some numerical aspects of the 
			experiment. For example, in a soccer game we may be interested in the number of goals, shots, 
			shots on goal, corners kicks, fouls, etc. If we consider an entire soccer match as a random 
			experiment, then each of these numerical results gives some information about the outcome of 
			the random experiment. These are examples of <i>random variables</i>. In a nutshell, a random 
			variable is a real-valued variable whose value is determined by an underlying random experiment.</p>
			
			<p>Let's look at an example.</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>I toss a coin five times. This is a random experiment and the sample space can be written as
			$$S=\{TTTTT,TTTTH,... , HHHHH\}.$$
			Note that here the sample space $S$ has $2^5=32$ elements. Suppose that in this experiment, we are interested 
			in the number of heads. We can define a random variable $X$ whose value is the number of observed heads. 
			The value of $X$ will be one of $0, 1,2,3,4$ or $5$ depending on the outcome of the random experiment.</p>
			<hr /><br>

			<p>In essence, a random variable is a real-valued function that assigns a numerical value to each possible 
			outcome of the random experiment. For example, the random variable $X$ defined above assigns the value 
			$0$ to the outcome $TTTTT$, the value $2$ to the outcome $THTHT$, and so on. Hence, the random variable 
			$X$ is a function from the sample space $S$=$\{TTTTT$,$TTTTH$, $\cdots$ ,$HHHHH\}$ to the real numbers 
			(for this particular random variable, the values are always integers between $0$ and $5$).</p>
			
			<div style="padding: 15px; border: black 1px solid">
			<p>Random Variables:<br>
			A random variable $X$ is a function from the sample space to the real numbers:
			$$X:S\rightarrow \mathbb{R}$$</p>
			</div><br>
			
			<p>We usually show random variables by capital letters such as $X$, $Y$, and $Z$. Since a random variable 
			is a function, we can talk about its range. The range of a random variable $X$, shown by Range$(X)$ 
			or $R_X$, is the set of possible values for $X$. In the above example, Range$(X)=R_X=\{0,1,2,3,4,5\}$.</p>
			
			<div style="padding: 15px; border: black 1px solid">
			<p>The range of a random variable $X$, shown by Range$(X)$ or $R_X$, is the set of possible values of $X$.</p>
			</div><br>
			
			<hr /><br>
			<a name="ex45"></a>
			<span class='example'>Example </span><br>
			<p>Find the range for each of the following random variables.
			<ol type="1">
                <li>I toss a coin $100$ times. Let $X$ be the number of heads I observe.</li>
                <li>I toss a coin until the first heads appears. Let $Y$ be the total number of coin tosses.</li>
                <li>The random variable $T$ is defined as the time (in hours) from now until the next earthquake occurs in a certain city.</li>
            </ol></p> 
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <ol type="1">
                              <li>The random variable $X$ can take any integer from $0$ to $100$, so $R_X=\{0,1,2,...,100\}$.</li>
                              <li>The random variable $Y$ can take any positive integer, so $R_Y=\{1,2,3,...\}=\mathbb{N}$.</li>
                              <li>The random variable $T$ can in theory get any positive real number, so $R_T=[0,\infty)$.</li>
                         </ol> 
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>


			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter2/2_3_0_chapter2_problems.php">previous</a></div>
    			<div class="right"><a href="chapter3/3_1_2_discrete_random_var.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>		
		</div>
		<div id="menu" class="hide_print">
			 <script type="text/javascript" src="javascript/menu_html_code.js"></script>
		</div>

		<div id="footer" class="hide_print">
			<script type="text/javascript" src="javascript/footer_html_code.js"></script>
		</div>
	</div>
</body>
</html>
