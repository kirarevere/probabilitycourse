<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name='section'	content='4.1.0' />
	<?php include '../Control/autonumber.php'; initChapterHeaders(4); ?>
	
	<script type="text/x-mathjax-config">
  			MathJax.Hub.Config({
    		tex2jax: { inlineMath: [['$','$'],['\\(','\\)']] }
  			});
	</script>	
	<script type="text/javascript"
  			src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
	</script>
	
	<script type='text/javascript' src='http://code.jquery.com/jquery-1.6.3.js'></script>
	<script type="text/javascript" src="http://probabilitycourse.com/javascript/menu_js_code.js"></script>
	<script type="text/javascript" src="http://probabilitycourse.com/javascript/solved_prob.js"></script>
	
	<link rel="stylesheet" type="text/css" href="http://probabilitycourse.com/style_sheet.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="print.css" media="print" />

	<title>Continuous Random Variables</title>
	<meta name="description" content="Definition and examples of continuous random variables" />

</head><body>
	<div id="container">
		<span class="hide_print">
			<script type="text/javascript" src="http://probabilitycourse.com/javascript/top_page_html_code.js"></script>
		</span>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter3/3_3_0_chapter3_problems.php">previous</a></div>
    			<div class="right"><a href="chapter4/4_1_1_pdf.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>4.1.0 Continuous Random Variables <br>and their Distributions</h2></div>
    		<div class="right hide_print">
			<a href="http://probabilitycourse.com/videos/chapter4/video4_1.html"><img src="http://probabilitycourse.com/images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img id="printButton" src="http://probabilitycourse.com/images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></div>
    		<div class="clear"></div>
			
			<p>Remember that discrete random variables can take only a countable number of possible values. On the other 
			hand, a continuous random variable $X$ has a range in the form of an interval or a union of non-overlapping 
			intervals on the real line (possibly the whole real line). Also, for any  $x \in \mathbb{R}$, $P(X=x)=0$. 
			Thus, we need to develop new tools to deal with continuous random variables. The good news is that the 
			theory of continuous random variables is completely analogous to the theory of discrete random variables. 
			Indeed, if we want to oversimplify things, we might say the following: take any formula about discrete 
			random variables, and then replace <i>sums</i> with <i>integrals</i>, and replace <i>PMFs</i> with 
			probability density functions (<i>PDFs</i>), and you will get the corresponding formula for continuous 
			random variables. Of course, there is a little bit more to the story and that's why we need a chapter 
			to discuss it. In this chapter, we will also introduce mixed random variables that are mixtures of discrete 
			and continuous random variables.</p>
			
			<p>We have in fact have already seen examples of a continuous random variables before, e.g., 
			<a href="http://probabilitycourse.com/chapter1/1_3_5_continuous_models.php#ex14">Example 1.14</a>. Let us look 
			at the same example with just a little bit different wording.</p>
			
			<hr /><br>
			<a name="ex64"></a>
			<span class='example'>Example </span><br>
			<p>I choose a real number uniformly at random in the interval $[a,b]$, and call it $X$. By uniformly at 
			random, we mean all intervals in $[a,b]$ that have the same length must have the same probability. 
			Find the CDF of $X$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 As we mentioned, this is almost exactly the same problem as Example 1.14, with the difference 
						 being, in that problem, we considered the interval from $1$ to $2$. In that example, 
						 we saw that all individual points have probability $0$, i.e., $P(X=x)=0$ for all $x$. Also, 
						 the uniformity implies that the probability of an interval of length $l$ in $[a,b]$ must 
						 proportional to its length:
						 $$P(X \in [x_1,x_2])  \propto (x_2-x_1), \hspace{20pt} \textrm{where }a \leq x_1 \leq x_2 \leq b.$$
						 Since $ P(X \in [a,b])=1$, we conclude
						 $$P(X \in [x_1,x_2]) =\frac{x_2-x_1}{b-a}, \hspace{20pt} \textrm{where }a \leq x_1 \leq x_2 \leq b.$$
						 Now, let us find the CDF. By definition $F_X(x)=P(X \leq x)$, thus we immediately have
						 $$F_X(x) =0, \hspace{20pt} \textrm{for } x < a$$
						 $$F_X(x) =1, \hspace{20pt} \textrm{for } x \geq b.$$
						 For $a \leq x \leq b$, we have
						 <table align="center">			
                          <tr>
                            <td>$F_X(x)$</td>
                            <td>$=P(X \leq x)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=P(X \in [a,x])$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\frac{x-a}{b-a}.$</td>
                          </tr>
                          </table><br>
						  Thus, to summarize
						  <a style="background: none; padding: 0px; border: none; margin: 0px;" name="eq41"></a>
						  \begin{equation}
						  \hspace{70pt}
                          F_X(x)  = \left\{
                          \begin{array}{l l}
                            0 & \quad \textrm{for } x < a \\
                            \frac{x-a}{b-a} & \quad \textrm{for }a \leq x \leq b\\
                            1 & \quad \textrm{for } x > b
                          \end{array} \right.
						  \hspace{70pt} (4.1)
                          \end{equation}
						  Note that here it does not matter if we use "$ < $" or "$ \leq $", as each individual point has 
						  probability zero, so for example $P(X < 2)=P(X \leq 2)$. Figure 4.1 shows the CDF of $X$.  
						  As we expect the CDF starts at zero and ends at $1$.
						  <figure>
                  					<img src="http://probabilitycourse.com//images/chapter4/CDF-Uniform_b.png" width="400" height="320" alt="Figure" title="Figure" border="0" />
                  					<figcaption>Fig.4.1 - CDF for a continuous random variable uniformly distributed over $[a,b]$.</figcaption>
                		  </figure>
						  
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<p>One big difference that we notice here as opposed to discrete random variables is that the CDF is a continuous 
			function, i.e., it does not have any jumps. Remember that jumps in the CDF correspond to points $x$ for which 
			$P(X=x) > 0$. Thus, the fact that the CDF does not have jumps is consistent with the fact that $P(X=x)=0$ for 
			all $x$. Indeed, we have the following definition for continuous random variables.</p>
			
			<div style="padding: 15px; border: black 1px solid">			
			<span class='definition'>Definition </span><br>
			A random variable $X$ with CDF $F_X(x)$ is said to be continuous if $F_X(x)$ is a continuous 
			function for all $x \in \mathbb{R}$.</div><br>
			
			<p>We will also assume that the CDF of a continuous random variable is differentiable almost everywhere 
			in $\mathbb{R}$.</p>
			
			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter3/3_3_0_chapter3_problems.php">previous</a></div>
    			<div class="right"><a href="chapter4/4_1_1_pdf.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>		
		</div>
		<div id="menu" class="hide_print">
			 <script type="text/javascript" src="javascript/menu_html_code.js"></script>
		</div>

		<div id="footer" class="hide_print">
			<script type="text/javascript" src="http://probabilitycourse.com/javascript/footer_html_code.js"></script>
		</div>
	</div>
</body>
</html>
