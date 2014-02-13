<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<?php include '../Control/autonumber.php'; loadHeaders(26); ?>
	<meta name='section'	content='2.2.0' />
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
	
	<link rel="stylesheet" type="text/css" href="http://probabilitycourse.com/style_sheet.css" />

	<title>Intro to Probability</title>

</head><body>
	<div id="container">
		<script type="text/javascript" src="http://probabilitycourse.com/javascript/top_page_html_code.js"></script>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock">
				<div class="left"><a>&larr; </a><a href="chapter2/2_1_5_solved2_1.php">previous</a></div>
    			<div class="right"><a href="chapter2/2_2_1_linear_homogeneous.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>2.2 Using Recursion</h2></div>
    		<div class="right">
			<a href="http://probabilitycourse.com/chapter2/using_recursion_print.html"><img src="http://probabilitycourse.com/images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></a></div>
    		<div class="clear"></div>
			
			<p>Some problems in combinatorics and probability can be solved using recursive methods. Here is 
			the basic idea. Suppose we are interested in computing a sequence $a_n$, for $n=0,1,2,...$. 
			The value $a_n$ could be the number of elements in a set or the probability of a certain event. 
			We may be able to find a <b>recursive</b> relation that relates $a_n$ to other $a_i$'s where 
			$i < n$. For example, suppose that for a certain problem, we can show that
			$$a_n=a_{n-1}+2a_{n-3}, \textrm{ for } n=3,4,5,...$$
			Now if we know $a_0, a_1, $ and $a_2$, we can use the above recursive equation to find $a_n$ 
			for all $n$. Let&#39;s look at an example.</p>
			
			<hr /><br>
			<a name="example40"></a>
			<span class='example'>Example </span><br>
			<p>Find the total number of sequences of length $n$ (using $H$ and $T$) such that no two $H$'s are 
			next to each other? For example, for $n=2$, we have $3$ possible sequences: $HT, TH, TT$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 Let $a_n$ be the number of such sequences. Let's call these sequences  
						 "NO-HH sequences". We have $a_1=2, a_2=3$. But how do we find, say $a_{1000}$? 
						 To do this, we will show that
						 $$\hspace{50pt} a_n=a_{n-1}+a_{n-2} \textrm{ for } n=3,4,5,... \hspace{70pt}(2.7)$$
						 To show this, consider a NO-HH sequence of length $n$. This sequence either starts with a $T$ or an $H$.<br>
						 <ol type="1">
                              <li>If it starts with a $T$, then the rest of the sequence is simply a NO-HH sequence of 
							  length $n-1$. Conversely, by adding a $T$ in front of any NO-HH sequence of length $n-1$, 
							  we can obtain a NO-HH sequence of length $n$.</li>
                              <li>If it starts with an $H$, then the second element in the sequence must be a $T$. 
							  In this case, the rest of the sequence is simply a NO-HH sequence of length $n-2$. 
							  Conversely, by adding  $HT$ in front of any NO-HH sequence of length $n-2$, we can obtain 
							  a NO-HH sequence of length $n$.</li>							  
                          </ol><br>
						 Thus, we conclude that $a_n=a_{n-1}+a_{n-2}$. Using this recursive equations and since we 
						 already know that $a_1=2$ and $a_2=3$, we can find 
						 $$a_3=5, a_4=8, a_5=13, ...$$
						 Using a computer program we can compute $a_n$ for the larger values of $n$. However, there is 
						 also a straight forward method to solve Equation 2.7 to obtain a simple formula 
						 for $a_n$ that does not involve previous values in the sequence. We will discuss how to solve 
						 these equations in general shortly. Here we solve Equation 2.7 to find a formula 
						 for the number of No-HH sequences of length $n$. The trick as we will see is to let $a_k=x^k$ 
						 and find non-zero values of $x$ that satisfy the recursive equation. In particular, letting 
						 $a_k=x^k$ in Equation 2.7, we obtain
						 $$x^2=x+1$$
 						 which gives
						 $$x_1=\frac{1+\sqrt{5}}{2},  x_2=\frac{1-\sqrt{5}}{2}$$
						 Then the general solution can be written in the form of
						 $$a_n=\alpha_1 x_1^n+ \alpha_2 x_2^n$$
						 where $\alpha_1$ and $\alpha_2$ are constants to be determined from the known values of 
						 $a_n$. For example, here we know $a_1=2, a_2=3$. Using these two values we can find $\alpha_1$ 
						 and $\alpha_2$. It is a little bit easier to use $a_0$ and $a_1$. That is, since $a_2=a_1+a_0$, 
						 we obtain $a_0=1$. Thus we have
						 $$a_0=1= \alpha_1 \left(\frac{1+\sqrt{5}}{2} \right)^0+ \alpha_2 \left(\frac{1-\sqrt{5}}{2}\right)^0$$
						 $$a_1=2= \alpha_1 \left(\frac{1+\sqrt{5}}{2}\right)^1+ \alpha_2 \left(\frac{1-\sqrt{5}}{2}\right)^1$$
						 Thus, we obtain
						 $$\alpha_1+\alpha_2=1$$
						 $$\alpha_1 (\frac{1+\sqrt{5}}{2} )+ \alpha_2 (\frac{1-\sqrt{5}}{2})=2$$
						 By solving these equations, we obtain $\alpha_1=\frac{5+3 \sqrt{5}}{10}$, and 
						 $\alpha_2=\frac{5-3 \sqrt{5}}{10}$. Finally,
						 $$a_n= \frac{5+3 \sqrt{5}}{10} \bigg(\frac{1+\sqrt{5}}{2} \bigg)^n+ \frac{5-3 
						 \sqrt{5}}{10} \bigg(\frac{1-\sqrt{5}}{2}\bigg)^n \hspace{30pt} (2.8)$$
						 This might seem somewhat strange as it does not look like an integer. However, you can evaluate the above 
						 expression for small values of $n$ to see that in fact square roots always cancel out and the 
						 resulting values of $a_n$ are always integers. If the above calculation seems confusing, 
						 don't worry. We will now discuss in general how to solve recursive equations such as the one 
						 given in Equation 2.7.

						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
 
			<hr />
			<div class="thinblock">
				<div class="left"><a>&larr; </a><a href="chapter2/2_1_5_solved2_1.php">previous</a></div>
    			<div class="right"><a href="chapter2/2_2_1_linear_homogeneous.php">next</a><a> &rarr;</a></div>
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
