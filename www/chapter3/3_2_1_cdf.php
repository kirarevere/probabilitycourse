<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<?php include '../Control/autonumber.php'; loadHeaders(37); ?>
	<meta name='section'	content='3.2.1' />
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

	<title>Cumulative Distribution Function</title>
	<meta name="description" content="Definition and examples of the Cumulative Distribution Function" />

</head><body>
	<div id="container">
		<span class="hide_print">
			<script type="text/javascript" src="http://probabilitycourse.com/javascript/top_page_html_code.js"></script>
		</span>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter3/3_1_6_solved3_1.php">previous</a></div>
    			<div class="right"><a href="chapter3/3_2_2_expectation.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>3.2.1 Cumulative Distribution Function</h2></div>
    		<div class="right hide_print">
			<a href="http://probabilitycourse.com/videos/chapter3/video3_5.html"><img src="http://probabilitycourse.com/images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img id="printButton" src="http://probabilitycourse.com/images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></div>
    		<div class="clear"></div>
			
			<p>The PMF is one way to describe the distribution of a discrete random variable. As we will see later on, 
			PMF cannot be defined for continuous random variables. The cumulative distribution function (CDF) 
			of a random variable is another method to describe the distribution of random variables. The advantage 
			of the CDF is that it can be defined for any kind of random variable (discrete, continuous, and mixed).</p>
			
			<div style="padding: 15px; border: black 1px solid">
			<span class='definition'>Definition </span><br>
			The cumulative distribution function (CDF) of random variable $X$ is defined as
			$$F_X(x) = P(X \leq x),  \textrm{ for all }x \in \mathbb{R}$$
			</div><br>
			
			<p>Note that the subscript $X$ indicates that this the CDF of the random variable $X$. Also, note that the CDF 
			is defined for all $x \in \mathbb{R}$. Let us look at an example.</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>I toss a coin twice. Let $X$ be the number of observed heads. Find the CDF of $X$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 Note that here $X \sim Binomial (2, \frac{1}{2})$. The range of $X$ is $R_X=\{0,1,2\}$ and 
						 its PMF is given by
						 $$P_X(0)=P(X=0)=\frac{1}{4}$$
						 $$P_X(1) =P(X=1)=\frac{1}{2}$$
						 $$P_X(2)=P(X=2)=\frac{1}{4}$$
						 To find the CDF, we argue as follows. First, note that if $x < 0$, then
						 $$F_X(x)=P(X \leq x)=0, \textrm{ for } x < 0$$
						 Next, if $x\geq 2$,
						 $$F_X(x)=P(X \leq x)=1, \textrm{ for } x\geq 2$$
						 Next, if $0 \leq x < 1$,
						 $$F_X(x)=P(X \leq x)=P(X=0)=\frac{1}{4}, \textrm{ for } 0 \leq x < 1$$
						 Finally, if $1 \leq x < 2$,
						 $$F_X(x)=P(X \leq x)=P(X=0)+P(X=1)=\frac{1}{4}+\frac{1}{2}=\frac{3}{4}, \textrm{ for } 1 \leq x < 2$$
						 Thus, to summarize, we have
						 \begin{equation}
                           \nonumber F_X(x) = \left\{
                          \begin{array}{l l}
                             0 & \quad \text{for  } x < 0\\
                             \frac{1}{4} & \quad \text{for  } 0 \leq x < 1\\
                             \frac{3}{4} & \quad \text{for  } 1 \leq x < 2 \\
                             1 & \quad \text{for  } x \geq 2\\
                          \end{array} \right.
                        \end{equation}
						Note that when you are asked to find the CDF of a random variable, you need to find the function for the 
            			entire real line. Also, for discrete random variables, we must be careful when to use "$ < $" or "$\leq$".  
            			Figure 3.3 shows the graph of $F_X(x)$. Note that the CDF is flat between the points 
            			in $R_X$ and jumps at each value in the range. The size of the jump at each point is equal to the probability 
            			at that point. For, example, at point $x=1$, the CDF jumps from $\frac{1}{4}$ to $\frac{3}{4}$. The size 
            			of the jump here is $\frac{3}{4}-\frac{1}{4}=\frac{1}{2}$ which is equal to $P_X(1)$. Also, note that 
            			the open and closed circles at point $x=1$ indicate that $F_X(1)=\frac{3}{4}$ and not $\frac{1}{4}$.
						<figure>
              					<img src="http://probabilitycourse.com/images/chapter3/CDF-TwoDice_b.png" width="400" height="257" alt="Figure" title="Figure" border="0" />
              					<figcaption>Fig.3.3 - CDF for Example 3.9.</figcaption>
            			</figure>						
						</li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<p>In general, let $X$ be a discrete random variable with range $R_X=\{x_1,x_2,x_3,...\}$, such that 
			$x_1 < x_2 < x_3 < ...$ Here, for simplicity, we assume that the range $R_X$ is bounded from below, i.e., 
			$x_1$ is the smallest value in $R_X$. If this is not the case then $F_X(x)$ approaches zero as 
			$x \rightarrow -\infty$ rather than hitting zero. Figure 3.4 shows the general form of the CDF, 
			$F_X(x)$, for such a random variable. We see that the CDF is in the form of a staircase. In particular, 
			note that the CDF starts at $0$; i.e.,$F_X(-\infty)=0$. Then, it jumps at each point in the range. 
			In particular, the CDF stays flat between $x_k$ and $x_{k+1}$, so we can write
			$$F_X(x)=F_X(x_k), \textrm{ for }x_k \leq x < x_{k+1}$$</p>

			<p>The CDF jumps at each $x_k$. In particular, we can write
			$$F_X(x_k)-F_X(x_k-\epsilon)=P_X(x_k), \textrm{ For $\epsilon>0$ small enough.}$$
			Thus, the CDF is always a non-decreasing function, i.e., if $y \geq x$ then $F_Y(y)\geq F_X(x)$. 
			Finally, the CDF approaches $1$ as $x$ becomes large. We can write
			$$\lim_{x \rightarrow \infty} F_X(x)=1$$</p>
			
			<figure>
  					<img src="http://probabilitycourse.com/images/chapter3/CDF-Discrete_b.png" width="500" height="255" alt="Figure" title="Figure" border="0" />
  					<figcaption>Fig.3.4 - CDF of a discrete random variable.</figcaption>
			</figure>
			
			<p>Note that the CDF completely describes the distribution of a discrete random variable. In particular, 
			we can find the PMF values by looking at the values of the jumps in the CDF function. Also, if we have 
			the PMF, we can find the CDF from it. In particular, if $R_X=\{x_1,x_2,x_3,...\}$, we can write
			$$F_X(x)=\sum_{x_k \leq x} P_X(x_k)$$
			Now, let us prove a useful formula.</p>
			
			<div style="padding: 15px; border: black 1px solid">
			For all $a \leq b$, we have
			$$\hspace{50pt} P(a < X \leq b)=F_X(b)-F_X(a) \hspace{80pt} (3.1)$$
			</div><br>
			
			<p>To see this, note that for $a \leq b$. we have
			$$P(X \leq b)=P(x \leq a) + P(a < X \leq b)$$
			Thus,
			$$F_X(b)=F_X(a) + P(a < X \leq b)$$
			Again, pay attention to the use of "$ < $" and "$\leq$" as in the case of discrete random variables they 
			could make a difference. We will see later that Equation 3.1 is true for all types of random variables 
			(discrete, continuous, and mixed). Note that the CDF gives us $P(X \leq x)$. To find $P(X < x)$, for a 
			discrete random variable, we can simply write
			$$P(X < x)=P(X \leq x)-P(X=x)=F_X(x)-P_X(x)$$</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			Let $X$ be a discrete random variable with range $R_X=\{1,2,3,...\}$ and PMF given by
			$$P_X(k)=\frac{1}{2^k}   \textrm{  for } k=1,2,3,...$$
			<ol type="a">
                <li>Find and plot the CDF of $X$, $F_X(x)$.</li>
                <li>Find $P(2 < X \leq 5)$.</li>
                <li>Find $P(X > 4)$.</li>
            </ol> 
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 First, note that this is a valid PMF. In particular,
						 $$\sum_{k=1}^{\infty} P_X(k)=\sum_{k=1}^{\infty} \frac{1}{2^k}=1   \textrm{  (geometric sum)}$$
						 <ol type="a">
						 	 <li>To find the CDF, note that
							 <table align="center">			
                              <tr>
                                <td>$\textrm{For } x < 1,$</td>
                                <td>$F_X(x)=0$</td>
                              </tr>
                              <tr>
                                <td>$\textrm{For } 1\leq x < 2,$</td>
                                <td>$F_X(x)=P_X(1)=\frac{1}{2}$</td>
                              </tr>
							  <tr>
                                <td>$\textrm{For } 2\leq x \leq 3,$</td>
                                <td>$F_X(x)=P_X(1)+P_X(2)=\frac{1}{2}+ \frac{1}{4}=\frac{3}{4}$</td>
                              </tr>
                              </table><br>
							  In general we have
							  $$\textrm{For }  0 < k \leq x < k+1,$$
							  $$F_X(x) =P_X(1)+P_X(2)+...+P_X(k)$$
							  $$=\frac{1}{2}+ \frac{1}{4}+...+\frac{1}{2^k}=\frac{2^k-1}{2^k}$$
							  Figure 3.5 shows the CDF of $X$.
							  <figure>
                      					<img src="http://probabilitycourse.com/images/chapter3/CDF-geometric_b.png" width="500" height="400" alt="Figure" title="Figure" border="0" />
                      					<figcaption>Fig.3.5 - CDF of random variable given in Example 3.10.</figcaption>
                    		  </figure>
							 </li><br>
							 <li>To find $P(2 < X \leq 5)$, we can write
							 $$P(2 < X \leq 5)=F_X(5)-F_X(2)=\frac{31}{32}-\frac{3}{4}=\frac{7}{32}$$
							 Or equivalently, we can write
							 $$P(2 < X \leq 5)=P_X(3)+P_X(4)+P_X(5)=\frac{1}{8}+\frac{1}{16}+\frac{1}{32}=\frac{7}{32}$$
							 which gives the same answer.
							 </li><br>
							 <li>To find $P(X > 4)$, we can write
							 $$P(X > 4)=1-P(X \leq 4)=1-F_X(4)=1-\frac{15}{16}=\frac{1}{16}$$
							 </li>						 
						 </ol> 
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>

			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter3/3_1_6_solved3_1.php">previous</a></div>
    			<div class="right"><a href="chapter3/3_2_2_expectation.php">next</a><a> &rarr;</a></div>
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
