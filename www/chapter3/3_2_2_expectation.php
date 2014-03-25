<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<?php include '../Control/autonumber.php'; loadHeaders(38); ?>
	<meta name='section'	content='3.2.2' />
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

	<title>Expectation | Mean | Average</title>
	<meta name="description" content="Definitions and examples of Expectation for different distributions" />

</head><body>
	<div id="container">
		<span class="hide_print">
			<script type="text/javascript" src="http://probabilitycourse.com/javascript/top_page_html_code.js"></script>
		</span>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter3/3_2_1_cdf.php">previous</a></div>
    			<div class="right"><a href="chapter3/3_2_3_functions_random_var.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>3.2.2 Expectation</h2></div>
    		<div class="right hide_print">
			<a href="http://probabilitycourse.com/videos/chapter3/video3_6.html"><img src="http://probabilitycourse.com/images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img id="printButton" src="http://probabilitycourse.com/images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></div>
    		<div class="clear"></div>
			
			<p>If you have a collection of numbers $a_1,a_2,...,a_N$, their average is a single number that describes 
			the whole collection. Now, consider a random variable $X$. We would like to define its average, or as 
			it is called in probability, its <b>expected value</b> or <b>mean</b>. The expected value is defined 
			as the weighted average of the values in the range.</p>
			
			<div style="padding: 15px; border: black 1px solid">
			<i>Expected value</i> (= mean=average):<br>
			<span class='definition'>Definition </span><br>
			Let $X$ be a discrete random variable with range $R_X=\{x_1,x_2,x_3, ...\}$ (finite or countably infinite). 
			The <i>expected</i> value of $X$, denoted by $EX$ is defined as
			$$EX=\sum_{x_k \in R_X} x_k \textrm{P}(X=x_k)=\sum_{x_k \in R_X} x_k P_X(x_k)$$
			</div><br>
			
			<p>To understand the concept behind $EX$, consider a discrete random  variable with range $R_X=\{x_1,x_2,x_3, ...\}$. 
			This random variable is a result of random experiment. Suppose that we repeat this experiment a very 
			large number of times $N$, and that the trials are independent. Let $N_1$ be the number of times we 
			observe $x_1$, $N_2$ be the number of times we observe $x_2$, ...., $N_k$ be the number of times we 
			observe $x_k$, and so on. Since $P(X=x_k)=P_X(x_k)$, we expect that
			$$P_X(x_1)\approx \frac{N_1}{N}$$
			$$P_X(x_2)\approx \frac{N_2}{N}$$
			$$\hspace{10pt}   .  \hspace{20pt}   .  \hspace{20pt}   .$$
			$$P_X(x_k)\approx \frac{N_k}{N}$$
			$$\hspace{10pt}   .  \hspace{20pt}   .  \hspace{20pt}   .$$
			In other words, we have $N_k \approx N P_X(x_k)$. Now, if we take the average of the observed values 
			of $X$, we obtain
			<table align="center">			
            <tr>
              <td>$\textrm{Average }$</td>
              <td>$=\frac{N_1 x_1+N_2 x_2+N_3 x_3+...}{N}$</td>
            </tr>
            <tr>
              <td></td>
              <td>$\approx \frac{x_1 N P_X(x_1)+x_2N P_X(x_2)+x_3N P_X(x_3)+...}{N}$</td>
            </tr>
			<tr>
              <td></td>
              <td>$=x_1 P_X(x_1)+x_2 P_X(x_2)+x_3 P_X(x_3)+...$</td>
            </tr>
            <tr>
              <td></td>
              <td>$=EX.$</td>
            </tr>
            </table><br>
			Thus, the intuition behind $EX$ is that if you repeat the random experiment independently $N$ times 
			and take the average of the observed data, the average gets closer and closer to $EX$ as $N$ gets 
			larger and larger. We sometimes denote $EX$ by $\mu_X$.</p>
			
			<div align="center" style="padding: 15px; border: black 1px solid">
			Different notations for expected value of $X$:  $EX=E[X]=E(X)=\mu_X$.
			</div><br>

			<p>Let's compute the expected values of some well-known distributions.</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>Let $X \sim Bernoulli(p)$. Find $EX$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 For the Bernoulli distribution, the range of $X$ is $R_X=\{0,1\}$, and $P_X(1)=p$ 
						 and $P_X(0)=1-p$. Thus,
						 <table align="center">			
                          <tr>
                            <td>$EX$</td>
                            <td>$=0 \cdot P_X(0)+1 \cdot P_X(1)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=0 \cdot (1-p)+ 1 \cdot p$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=p$.</td>
                          </tr>
                          </table><br>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<p>For a Bernoulli random variable, finding the expectation $EX$ was easy. However, for some random variables, 
			to find the expectation sum might need a little algebra. Let's look at another example.</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>Let $X \sim Geometric(p)$. Find $EX$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 For the geometric distribution, the range is $R_X=\{1,2,3,... \}$ and the PMF is given by						 
						 $$P_X(k) = q^{k-1}p,  \hspace{20pt} \text{  for  } k=1,2,...$$
						 where, $0 < p < 1$ and $q=p-1$. Thus, we can write
						 <table align="center">			
                          <tr>
                            <td>$EX$</td>
                            <td>$=\sum_{x_k \in R_X} x_k P_X(x_k)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=\sum_{k=1}^{\infty} k q^{k-1}p$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=p\sum_{k=1}^{\infty} k q^{k-1}$.</td>
                          </tr>
                          </table><br>
						  Now, we already know the geometric sum formula
						  $$\sum_{k=0}^{\infty} x^k= \frac{1}{1-x}, \hspace{20pt} \textrm{ for } |x| < 1.$$
						  But we need to find a sum $\sum_{k=1}^{\infty} k q^{k-1}$. Luckily, we can convert the geometric 
						  sum to the form we want by taking derivative with respect to $x$, i.e.,
						  $$\frac{d}{dx} \sum_{k=0}^{\infty} x^k=  \frac{d}{dx} \frac{1}{1-x}, \hspace{20pt} \textrm{ for } |x| < 1.$$
						  Thus, we have
						  $$\sum_{k=0}^{\infty} k x^{k-1}= \frac{1}{(1-x)^2}, \hspace{20pt} \textrm{ for } |x| < 1.$$
						  To finish finding the expectation, we can write
						  <table align="center">			
                          <tr>
                            <td>$EX$</td>
                            <td>$=p\sum_{k=1}^{\infty} k q^{k-1}$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=p \frac{1}{(1-q)^2}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=p \frac{1}{p^2}$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=\frac{1}{p}$.</td>
                          </tr>
                          </table><br>
						  So, for $X \sim Geometric(p)$, $EX=\frac{1}{p}$. Note that this makes sense intuitively. 
						  The random experiment behind the geometric distribution was that we tossed a coin until 
						  we observed the first heads, where $P(H)=p$. Here, we found out that on average you need 
						  to toss the coin $\frac{1}{p}$ times in this experiment. In particular, if $p$ is small 
						  (heads are unlikely), then $\frac{1}{p}$ is large, so you need to toss the coin a large 
						  number of times before you observe a heads. Conversely, for large $p$ a few coin tosses 
						  usually suffices.
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='example'>Example </span><br>
			<p>Let $X \sim Poisson(\lambda)$. Find $EX$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 Before doing the math, we suggest that you try to guess what the expected value would be. 
						 It might be a good idea to think about the examples where the Poisson distribution is used. For 
						 the Poisson distribution, the range is $R_X=\{0,1,2,\cdots \}$ and the PMF is given by
						 $$P_X(k) = \frac{e^{-\lambda} \lambda^k}{k!},  \hspace{20pt} \text{  for  } k=0,1,2,...$$
						 Thus, we can write
						 <table align="center">			
                          <tr>
                            <td>$EX$</td>
                            <td>$=\sum_{x_k \in R_X} x_k P_X(x_k)$</td>
							<td></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=  \sum_{k=0}^{\infty} k \frac{e^{-\lambda} \lambda^k}{k!}$</td>
							<td></td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=e^{-\lambda}  \sum_{k=1}^{\infty} \frac{ \lambda^k}{(k-1)!}$</td>
							<td></td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=e^{-\lambda}  \sum_{j=0}^{\infty} \frac{\lambda^{(j+1)}}{j!}$</td>
							<td>$\textrm{ by letting }j=k-1$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\lambda e^{-\lambda}  \sum_{j=0}^{\infty} \frac{ \lambda^j}{j!}$</td>
							<td></td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\lambda e^{-\lambda} e^{\lambda}$</td>
							<td>$\textrm{ Taylor series for } e^{\lambda}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\lambda$.</td>
							<td></td>
                          </tr>
                          </table><br>
						  So the expected value is $\lambda$. Remember, when we first talked about the Poisson distribution, 
						  we introduced its parameter $\lambda$ as the average number of events. So it is not surprising 
						  that the expected value is $EX=\lambda$.
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<p>Before looking at more examples, we would like to talk about an important property of expectation, 
			which is <i>linearity</i>. Note that if $X$ is a random variable, any function of $X$ is also a random 
			variable, so we can talk about its expected value.  For example, if $Y=aX+b$, we can talk about $EY=E[aX+b]$. 
			Or if you define $Y=X_1+X_2+\cdots+X_n$, where $x_i$'s are random variables, we can talk about 
			$EY=E[X_1+X_2+\cdots+X_n]$. The following theorem states that expectation is linear, which makes it 
			easier to calculate the expected value of linear functions of random variables.</p>
			
			<div style="padding: 15px; border: black 1px solid">
			Expectation is linear:<br>
			<span class='theorem'>Theorem </span><br>
			We have
			<ul>
                <li>$E[aX+b]=aEX+b$, for all $a,b \in \mathbb{R}$.</li>
                <li>$E[X_1+X_2+\cdots+X_n]=EX_1+EX_2+\cdots+EX_n$, for any set of random variables $X_1, X_2,\cdots,X_n$.</li>
            </ul> 
			</div><br>
			
			<p>We will prove this theorem later on in Chapter 5, but here we would like to emphasize its 
			importance with an example.</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>Let $X \sim Binomial(n,p)$. Find $EX$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 We provide two ways to solve this problem. One way is as before: we do the math and 
						 calculate $EX=\sum_{x_k \in R_X} x_k P_X(x_k)$ which will be a little tedious. A much 
						 faster way would be to use linearity of expectation. In particular, remember that if 
						 $X_1, X_2, ...,X_n$ are independent $Bernoulli(p)$ random variables, then the random 
						 variable $X$ defined by $X=X_1+X_2+...+X_n$ has a $Binomial(n,p)$ distribution. Thus, 
						 we can write<br><br>
						 <table align="center">			
                          <tr>
                            <td>$EX$</td>
                            <td>$=E[X_1+X_2+\cdots+X_n]$</td>
							<td></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=EX_1+EX_2+\cdots+EX_n$</td>
							<td>$\hspace{20pt} \textrm{by linearity of expectation}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=p+p+\cdots+p$</td>
							<td></td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=np$.</td>
							<td></td>
                          </tr>
                          </table><br>
						  We will provide the direct calculation of $EX=\sum_{x_k \in R_X} x_k P_X(x_k)$ in the Solved 
						  Problems section and as you will see it needs a lot more algebra than above. The bottom line 
						  is that linearity of expectation can sometimes make our calculations much easier. Let's look 
						  at another example.
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='example'>Example </span><br>
			<p>Let $X \sim Pascal(m,p)$. Find $EX$. (<i>Hint:</i> Try to write $X=X_1+X_2+\cdots+X_m$, 
			such that you already know $EX_i$.)</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 We claim that if $X_i$'s are independent and $X_i \sim Geometric(p)$, for $i=1$, $2$, $\cdots$, 
						 $m$, then the random variable $X$ defined by $X=X_1+X_2+\cdots+X_m$ has $Pascal(m,p)$. To see 
						 this, you can look at 
						 <a style="color: #337810; background: none; padding: 0px; border: none; margin: 0px;" href="http://probabilitycourse.com/chapter3/solved3_1.html#prob5">Problem 5 in Section 3.1.6</a> 
						 and the discussion there. Now, since we already know $EX=\frac{1}{p}$, we conclude
						 <table align="center">			
                          <tr>
                            <td>$EX$</td>
                            <td>$=E[X_1+X_2+\cdots+X_n]$</td>
							<td></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=EX_1+EX_2+\cdots+EX_n$</td>
							<td>$\hspace{20pt} \textrm{by linearity of expectation}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\frac{1}{p}+\frac{1}{p}+\cdots+\frac{1}{p}$</td>
							<td></td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\frac{m}{p}$</td>
							<td></td>
                          </tr>
                          </table><br>
						  Again, you can try to find $EX$ directly and as you will see, you need much more algebra 
						  compared to using the linearity of expectation.
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>

			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter3/3_2_1_cdf.php">previous</a></div>
    			<div class="right"><a href="chapter3/3_2_3_functions_random_var.php">next</a><a> &rarr;</a></div>
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
