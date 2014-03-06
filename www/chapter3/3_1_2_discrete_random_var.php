<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<?php include '../Control/autonumber.php'; loadHeaders(32); ?>
	<meta name='section'	content='3.1.2' />
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
	
	<link rel="stylesheet" type="text/css" href="http://probabilitycourse.com/style_sheet.css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="print.css" media="print" />

	<title>Intro to Probability</title>

</head><body>
	<div id="container">
		<span class="hide_print">
			<script type="text/javascript" src="javascript/top_page_html_code.js"></script>
		</span>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter3/3_1_1_random_variables.php">previous</a></div>
    			<div class="right"><a href="chapter3/3_1_3_pmf.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>3.1.2 Discrete Random Variables</h2></div>
    		<div class="right hide_print">
			<a href="http://probabilitycourse.com/videos/chapter3/video3_1.html"><img src="http://probabilitycourse.com/images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img id="printButton" src="http://probabilitycourse.com/images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></div>
    		<div class="clear"></div>
			
			<p>There are two important classes of random variables that we discuss in this book: <i>discrete random variables</i> 
			and <i>continuous random variables</i>. We will discuss discrete random variables in this chapter and 
			continuous random variables in Chapter 4. There will be a third class of random variables that are called 
			<i>mixed random variables</i>. Mixed random variables, as the name suggests, can be thought of as mixture 
			of discrete and continuous random variables. We will discuss mixed random variables in Chapter 4 as well.</p>
			
			<p>Remember that a set $A$ is countable if either
			<ul>
                <li>$A$ is a finite set such as $\{1,2,3,4\}$, or</li>
                <li>it can be put in one-to-one correspondence with natural numbers (in this case the set is said to be countably infinite)</li>
            </ul>
			In particular, as we discussed in Chapter 1, sets such as $\mathbb{N}, \mathbb{Z}, \mathbb{Q}$ and their 
			subsets are countable, while sets such as nonempty intervals $[a,b]$ in $\mathbb{R}$ are uncountable. 
			A random variable is discrete if its range is a countable set. 
			In <a href="http://probabilitycourse.com/chapter3/3_1_1_random_variables.php#ex45">Example 3.2</a>, the random 
			variables $X$ and $Y$ are discrete, while the random variable $T$ is not discrete.</p>
			
			<div align="center" style="padding: 15px; border: black 1px solid">
			$X$ is a discrete random variable, if its range is countable.
			</div><br>

			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter3/3_1_1_random_variables.php">previous</a></div>
    			<div class="right"><a href="chapter3/3_1_3_pmf.php">next</a><a> &rarr;</a></div>
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
