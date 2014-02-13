<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../"></base>
	<!-- Autonumbering -->
	<?php include '../Control/autonumber.php'; ?>
	<?php loadHeaders(11); ?>
<!--
	<style>
		.example	{	font-weight:	bold;	}
		.example:after	{	counter-increment:	example	1;	content:	counter(example);	}
	</style>
-->
	<!-- Autonumbering -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="section"	content="1.3.5"	/>

<!--
	<style>
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
	<script type="text/javascript" src="javascript/solved_prob.js"></script>
	
	<link rel="stylesheet" type="text/css" href="style_sheet.css" />
	<link rel="stylesheet" type="text/css" href="print.css" media="print" />
	<link rel="stylesheet" type="text/css" href="mobile.css" media="only screen and (max-device-width:700px), only screen and (max-width: 700px)" />

	<title>Intro to Probability</title>

</head><body>
	<div id="container">
		<span class="hide_print">
		<script type="text/javascript" src="javascript/top_page_html_code.js"></script>
		</span>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter1/1_3_4_discrete_models.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_3_6_solved2.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>1.3.5 Continuous Probability Models</h2></div>
    		<div class="right hide_print"><a href="videos/chapter1/video1_4.html"><img src="images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img src="images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;" id="printButton"/></div>
    		<div class="clear"></div>
			
			<p>Consider a scenario where your sample space $S$ is, for example, $[0,1]$. This is an uncountable set; 
			we cannot list the elements in the set. At this time, we have not yet developed the tools needed to 
			deal with continuous probability models, but we can provide some intuition by looking at a simple example.</p>
			
			<hr /><br>
			<a name="ex14"></a>
			<span class='example'>Example </span><br>
			Your friend tells you that she will stop by your house sometime after or equal to $1$ p.m. and before $2$ p.m., 
			but she cannot give you any more information as her schedule is quite hectic. Your friend is very dependable, 
			so you are sure that she will stop by your house, but other than that we have no information about the  
			arrival time. Thus, we assume that the arrival time is completely random in the $1$ p.m. and $2$ p.m. interval 
			(As we will see, in the language of probability theory, we say that the arrival time is "uniformly" 
			distributed on the $[1,2)$ interval). Let $T$ be the arrival time.
			<ol type="a">
    			<li>What is the sample space $S$?</li>
    			<li>What is the probability of $P(1.5)=$? Why?</li>
    			<li>What is the probability of $T \in [1,1.5)$?</li>
    			<li>For $1 \leq a \leq b \leq 2$, what is $P(a \leq T \leq b)=P([a,b])$?</li>
			</ol> 				
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <ol type="a">
    					 	 <li>Let's start by writing the sample space $S$. Since any real number in $[1,2)$ is a 
							 possible outcome, the sample space is indeed $S=[1,2)$.</li><br>
    						 <li>Now, let's look at $P(1.5)$. A reasonable guess would be $P(1.5)=0$. 
							 But can we provide a reason for that? Let us divide the $[1,2)$ interval to 
							 $2N$ equal-length and disjoint intervals, 
							 $$[1,1+\frac{1}{2N}), [1+\frac{1}{2N}, 1+\frac{2}{2N}), 
							 \cdots, [1+\frac{N-1}{2N}, 1+\frac{N+1}{2N}),\cdots,[1+\frac{2N-1}{2N}, 1+\frac{2N}{2N})$$ 
							 See Figure 1.18.
							 <figure>
  							 		 <img src="images/chapter1/line1-2_b.png" width="600" height="184" alt="Equal-length Intervals" title="Equal-length Intervals" border="0" />
  									 <figcaption>Fig.1.18 - Dividing the interval $[1,2)$ to $2N$ equal-length intervals.</figcaption>
							 </figure>
							 The only information that we have is that the arrival time is "uniform" on the $[1,2)$ interval. 
							 Therefore, all of the above intervals should have the same probability, and since their union is 
							 $S$ we conclude that<br><br>
							 <table align="center">			
                              <tr>
                                <td>$P\big([1,1+\frac{1}{2N})\big)$</td>
                                <td>$=P\big([1+\frac{1}{2N}, 1+\frac{2}{2N})\big)=\cdots$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$\cdots=P\big([1+\frac{N-1}{2N}, 1+\frac{N+1}{2N})\big)=\cdots$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$\cdots=P\big([1+\frac{2N-1}{2N},2)\big)$</td>
                              </tr>
							  <tr>
                                 <td></td>
                                 <td>$=\frac{1}{2N}$</td>
                              </tr>
                              </table><br>
							 In particular, by defining $A_N=[1+\frac{N-1}{2N}, 1+\frac{N+1}{2N})$, we conclude that
							 $$P(A_N)=P\big([1+\frac{N-1}{2N}, 1+\frac{N+1}{2N})\big)=\frac{1}{2N}$$
							 Now note that for any $N \geq 1$, $1.5 \in A_N$. Thus, $\{1.5\} \subset A_N$, so
							 $$P(1.5) \leq P(A_N)=\frac{1}{2N}, \hspace{20pt} \textrm{for all }N \geq 1$$
							 Since $P(1.5)$ cannot be negative, we conclude that $P(1.5)=0$. Similarly, we can argue 
							 that $P(x)=0$ for all $x \in [1,2)$.
							 </li><br>
							 <li>
							 Next, we find $P([1,1.5))$. This is the first half of the entire sample space $S=[0,1)$ and 
							 because of uniformity, its probability must be $0.5$. In other words,
							 $$P([1,1.5))=P([1.5,2)) \hspace{20pt} \textrm{(by uniformity)}$$
							 $$P([1,1.5))+P([1.5,2))=P(S)=1$$
							 Thus
							 $$P([1,1.5))=P([1.5,2))=\frac{1}{2}$$
							 </li><br>
							 <li>
							 The same uniformity argument suggests that all intervals in $[1,2)$ with the same length must 
							 have the same probability. In particular, the probability of an interval is proportional to 
							 its length. For example, since
							 $$[1,1.5)=[1,1.25) \cup [1.25, 1.5)$$
							 Thus, we conclude<br><br>
							 <table align="center">			
                              <tr>
                                <td>$P\big([1,1.5)\big)$</td>
                                <td>$=P\big([1,1.25)\big)+ P\big([1.25, 1.5)\big)$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=2P\big([1,1.25)\big)$</td>
                              </tr>
                              </table><br>
							 And finally, since $P\big([1,2)\big)=1$, we conclude
							 $$P([a,b])=b-a \textrm{ for } 1\leq a \leq b \leq 2$$
							 </li>				 
						 </ol> 
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<p>The above example was a somewhat simple situation in which we have a continuous sample space. In reality, 
			the probability might not be uniform, so we need to develop tools that help us deal with general 
			distributions of probabilities. These tools will be introduced in the coming chapters.</p>
			
			<p><i>Discussion:</i> You might ask why $P(x)=0$ for all $x \in [1,2)$, but at the same time, the outcome 
			of the experiment is always a number in $[1,2)$? We can answer this question from different points of view. 
			From a mathematical point of view, we can explain this issue by using the following analogy: consider a 
			line segment of length one. This line segment consists of points of length zero. Nevertheless, these 
			zero-length points as a whole constitute a line segment of length one. From a practical point of view, 
			we can provide the following explanation: our observed outcome is not all real values in $[1,2]$. That 
			is, if we are observing time, our measurement might be accurate up to minutes, or seconds, or milliseconds, 
			etc. Our continuous probability model is a limit of a discrete probability model, when the precision 
			becomes infinitely accurate. Thus, in reality we are always interested in the probability of some intervals 
			rather than a specific point $x$. For example, when we say, "What is the probability that your friend shows 
			up at $1:32$ p.m.?", what we may mean is, "What is the probability that your friend shows up between $1:32:00$ p.m.
			and $1:32:59$ p.m.?" This probability is nonzero as it refers to an interval with a one-minute length. 
			Thus, in some sense, a continuous probability model can be looked at as the "limit" of a discrete space. 
			Remembering from calculus, we note that integrals are defined as the limits of sums. That is why we use 
			integrals to find probabilities for continuous probability models, as we will see later.</p>	
			
			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter1/1_3_4_discrete_models.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_3_6_solved2.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>		
		</div>
		<span class="hide_print">
		<div id="menu">
			 <script type="text/javascript" src="javascript/menu_html_code.js"></script>
		</div>

		<div id="footer">
			<script type="text/javascript" src="javascript/footer_html_code.js"></script>
		</div>
		</span>
	</div>
</body>
</html>
