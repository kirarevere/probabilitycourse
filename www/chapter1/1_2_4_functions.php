<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../"></base>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="section"	content="1.2.4"	/>
	<?php include '../Control/autonumber.php'; ?>
	<?php loadHeaders(5); ?>
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
	<script type="text/javascript" src="javascript/solved_prob.js"></script>
	
	<link rel="stylesheet" type="text/css" href="style_sheet.css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="print.css" media="print" />

	<title>Intro to Probability</title>

</head><body>
	<div id="container">
		<script type="text/javascript" src="javascript/top_page_html_code.js"></script>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock">
				<div class="left"><a>&larr; </a><a href="chapter1/1_2_3_cardinality.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_2_5_solved1.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>1.2.4 Functions</h2></div>
    		<div class="right">
			<a href="videos/chapter1/video1_2.html"><img src="images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<a href="chapter1/functions_print.html"><img src="images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></a></div>
    		<div class="clear"></div>
			
			<p>We often need the concept of functions in probability. A function $f$ is a rule that takes an input 
			from a specific set, called the <b>domain</b>, and produces an  output from another set, called 
			<b>co-domain</b>. Thus, a function <i>maps</i> elements from the domain set to elements in the 
			co-domain with the property that each input is mapped to exactly one output. For a function $f$, 
			if $x$ is an element in the domain, then the function value (the output of the function) is 
			shown by $f(x)$. If $A$ is the domain and $B$ is the co-domain for the function $f$, we use 
			the following notation.
			$$f:A \rightarrow B$$</p>			
			<hr /><br>
			
			<span class='example'>Example </span><br>

			<ul>
    			<li>Consider the function $f:\mathbb{R} \rightarrow \mathbb{R}$, defined as $f(x)=x^2$. This 
				function takes any real number $x$ and outputs $x^2$. For example, $f(2)=4$.</li>
    			<li>Consider the function $g:\{H,T\} \rightarrow \{0,1\}$, defined as $g(H)=0$ and $g(T)=1$. 
				This function can only take two possible inputs $H$ or $T$, where $H$ is mapped to $0$ and $T$ is mapped to $1$.</li>
			</ul>
			<hr /><br>
			
			<p>The output of a function $f: A \rightarrow B$ always belongs to the co-domain $B$. However, not all 
			values in the co-domain are always covered by the function. In the above example, 
			$f:\mathbb{R} \rightarrow \mathbb{R}$, the function value is always a positive number $f(x)=x^2 \geq 0$. 
			We define the <b>range</b> of a function as the set containing all the possible values of $f(x)$. 
			Thus, the range of a function is always a subset of its co-domain. For the above function $f(x)=x^2$, 
			the range of $f$ is given by
			$$\textrm{Range}(f)=\mathbb{R}^{+}=\{x \in \mathbb{R} | x \geq 0 \}$$</p>
			
			Figure 1.14 pictorially shows a function, its domain, co-domain, and range. The figure shows that an 
			element $x$ in the domain is mapped to $f(x)$ in the range.
			<figure>
  					<img src="images/chapter1/function_b.png" width="350" height="217" alt="Function" title="Function" border="0" />
  					<figcaption>Fig.1.14 - Function $f: A \rightarrow B$, the range is always a subset of the co-domain.</figcaption>
			</figure>
			<br>
			
			<hr />
			<div class="thinblock">
				<div class="left"><a>&larr; </a><a href="chapter1/1_2_3_cardinality.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_2_5_solved1.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>		
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
