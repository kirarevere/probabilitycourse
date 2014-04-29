<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<?php include '../Control/autonumber.php'; loadHeaders(30); ?>
	<meta name='section'	content='3.1.4' />
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
	
	<link rel="stylesheet" type="text/css" href="http://probabilitycourse.com/style_sheet.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="print.css" media="print" />

	<title>Independent Random Variables</title>
	<meta name="description" content="Definition of independent random variables with examples" />

</head><body>
	<div id="container">
		<span class="hide_print">
			<script type="text/javascript" src="http://probabilitycourse.com/javascript/top_page_html_code.js"></script>
		</span>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter3/3_1_3_pmf.php">previous</a></div>
    			<div class="right"><a href="chapter3/3_1_5_special_discrete_distr.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>3.1.4 Independent Random Variables</h2></div>
    		<div class="right hide_print">
			<a href="http://probabilitycourse.com/videos/chapter3/video3_2.html"><img src="http://probabilitycourse.com/images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img id="printButton" src="http://probabilitycourse.com/images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></div>
    		<div class="clear"></div>
			
			<p>In real life, we usually need to deal with more than one random variable. For example, if you study 
			physical characteristics of people in a certain area, you might pick a person at random and then 
			look at his/her weight, height, etc. The weight of the randomly chosen person is one random variable 
			and while his/her height is another one. Not only do we need to study each random variable separately, 
			but also we need to consider if there is <i>dependence</i> (i.e., correlation) between them. Is it 
			true that a taller person is more likely to be heavier or not? The issues of dependence between 
			several random variables will be studied in detail later on, but here we would like to talk about 
			a special scenario where two random variables are <i>independent</i>.</p>
			
			<p>The concept of independent random variables is very similar to independent events. Remember, two 
			events $A$ and $B$ are independent if we have $P(A,B)=P(A)P(B)$ (remember comma means <i>and</i>, i.e., 
			$P(A,B)=P(A \textrm{ and } B)=P(A \cap B)$). Similarly, we have the following definition for independent 
			discrete random variables.</p>
			
			<div style="padding: 15px; border: black 1px solid">
			<span class='definition'>Definition </span><br>
			Consider two discrete random variables $X$ and $Y$. We say that $X$ and $Y$ are independent if
			$$P\bigg(X=x,Y=y\bigg)=P(X=x) P(Y=y), \hspace{20pt} \textrm{ for all } x,y.$$
			In general, if two random variables are independent, then  you can write
			$$P\bigg(X \in A,Y \in B\bigg)=P(X \in A) P(Y \in B), \hspace{20pt} \textrm{ for all sets } A \textrm{ and } B.$$
			</div><br>
			
			<p>Intuitively, two random variables $X$ and $Y$ are independent if knowing the value of one of them 
			does not change the probabilities for the other one. In other words, if $X$ and $Y$ are independent, 
			we can write
			$$P(Y=y|X=x)=P(Y=y), \textrm{ for all } x,y.$$
			Similar to independent events, it is sometimes easy to argue that two random variables are independent 
			simply because they do not have any physical interactions with each other. Here is a simple example: 
			I toss a coin $2N$ times. Let $X$ be the number of heads that I observe in the first $N$ coin tosses 
			and let $Y$ be the number of heads that I observe in the second $N$ coin tosses. Since $X$ and $Y$ are 
			the result of independent coin tosses, the two random variables $X$ and $Y$ are independent. On the 
			other hand, in other scenarios, it might be more complicated to show whether two random variables are 
			independent.</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>I toss a coin twice and define $X$ to be the number of heads I observe. Then, I toss the coin two more 
			times and define $Y$ to be the number of heads that I observe this time. Find 
			$P\bigg((X < 2) \textrm{ and } (Y>1)\bigg)$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 Since $X$ and $Y$ are the result of different independent coin tosses, the two random 
						 variables $X$ and $Y$ are independent. Also, note that both random variables have the 
						 distribution we found in 
						 <a style="color: #337810; background: none; padding: 0px; border: none; margin: 0px;" href="http://probabilitycourse.com/chapter3/3_1_3_pmf.php#ex46">Example 3.3</a>. 
						 We can write
						 <table align="center">			
                          <tr>
                            <td>$P\bigg((X < 2) \textrm{ and } (Y > 1)\bigg)$</td>
                            <td>$=P(X < 2)P(Y > 1) \hspace{20pt} \textrm{(because $X$ and $Y$ are independent)}$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=\big(P_X(0)+P_X(1)\big)P_Y(2)$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\left(\frac{1}{4}+\frac{1}{2}\right)\frac{1}{4}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\frac{3}{16}$.</td>
                          </tr>
                          </table><br>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<p>We can extend the definition of independence to $n$ random variables.</p>
			
			<div style="padding: 15px; border: black 1px solid">
			<span class='definition'>Definition </span><br>
			Consider $n$ discrete random variables $X_1, X_2, X_3, ...,X_n$. We say that $X_1, X_2, X_3, ...,X_n$ are 
			independent if
			$$P\bigg(X_1=x_1, X_2=x_2, ... ,X_n=x_n\bigg)$$
			$$=P(X_1=x_1) P(X_2=x_2) ... P(X_n=x_n), \hspace{20pt} \textrm{ for all } x_1, x_2,..., x_n.$$
			</div><br>

			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter3/3_1_3_pmf.php">previous</a></div>
    			<div class="right"><a href="chapter3/3_1_5_special_discrete_distr.php">next</a><a> &rarr;</a></div>
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
