<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name='section'	content='6.2.2' />
	<?php include '../Control/autonumber.php'; loadHeaders(45); ?>
	
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

	<title>Intro to Probability</title>

</head><body>
	<div id="container">
		<span class="hide_print">
			<script type="text/javascript" src="http://probabilitycourse.com/javascript/top_page_html_code.js"></script>
		</span>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter6/6_2_1_union_bound_and_exten.php">previous</a></div>
    			<div class="right"><a href="chapter6/6_2_3_chernoff_bounds.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>6.2.2 Markov and Chebyshev Inequalities</h2></div>
    		<!--
            <div class="right hide_print">
			<a href="http://probabilitycourse.com/videos/chapter6/video4_3.html"><img src="http://probabilitycourse.com/images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img id="printButton" src="http://probabilitycourse.com/images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></div>
            -->
    		<div class="clear"></div>
			
			<p>
			Let $X$ be any positive continuous random variable, we can write
            <table align="center" width="75%">			
                          <tr>
                            <td>$EX$</td>
                            <td>$= \int_{-\infty}^{\infty} x f_X(x) dx$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$= \int_{0}^{\infty} x f_X(x) dx $</td><td align="right">$ \textrm{(since $X$ is positive-valued)}$</td>
                          </tr><tr>
                            <td></td>
                            <td>$\geq \int_{a}^{\infty} x f_X(x) dx  $</td><td align="right">$\textrm{(for any $a>0$)}$</td>
                          </tr><tr>
                            <td></td>
                            <td>$\geq \int_{a}^{\infty} a f_X(x) dx $</td><td align="right">$ \textrm{(since $x>a$ in the integrated region)}$</td>
                          </tr><tr>
                            <td></td>
                            <td>$= a \int_{a}^{\infty} f_X(x) dx $</td>
                          </tr><tr>
                            <td></td>
                            <td>$= a P(X \geq a).$</td>
                          </tr>
						  </table><br>
Thus, we conclude
\begin{align}%\label{}
  P(X \geq a) \leq \frac{EX}{a}, &\qquad \textrm{for any $a>0$}.
\end{align}
We can prove the above inequality for discrete or mixed random variables similarly (using the generalized PDF), so we have the following result, called <b>Markov's inequality</b>.

           </p>
			<div style="padding: 15px; border: black 1px solid">
			
<p align="center">Markov's Inequality</p>

<p>If $X$ is any <u>nonnegative</u> random variable, then</p>
<table align="center" width="45%">			
                          <tr>
                            <td>$P(X \geq a) \leq \frac{EX}{a},$</td>
                            <td>$\textrm{for any $a>0$}.$</td>
                          </tr>
						  </table><br>


			</div><br>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>Prove the union bound using Markov's inequality.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 Similar to the discussion in previous section, let $A_1, A_2, ..., A_n$ be any events and if $X$ be the number events $A_i$ that occur. We saw that
\begin{align}
    EX=P(A_1)+P(A_2)+...+P(A_n)=\sum_{i=1}^n P(A_i).
\end{align}
Since, $X$ is a nonnegative random variable, we can apply Markov's inequality. Choosing $a=1$, we have
\begin{align}%\label{}
  P(X \geq 1) \leq {EX}= \sum_{i=1}^n P(A_i).
\end{align}
But note that $P(X \geq 1)= P\biggl(\bigcup_{i=1}^n A_i\biggr)$.
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='example'>Example </span><br>
			<p>Let $X \sim Binomial(n,p)$. Using Markov's inequality, find an upper bound on $P(X \geq \alpha n)$, where $p&lt; \alpha&lt;1$. Evaluate the bound for $p=\frac{1}{2}$ and $\alpha=\frac{3}{4}$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 Note that $X$ is a nonnegative random variable and $EX=np$. Applying the Markov's inequality, we obtain
\begin{align}%\label{}
  P(X \geq \alpha n) &\leq \frac{EX}{\alpha n}=\frac{pn}{\alpha n}=\frac{p}{\alpha}.
\end{align}
For $p=\frac{1}{2}$ and $\alpha=\frac{3}{4}$, we obtain
\begin{align}%\label{}
  P(X \geq \frac{3n}{4})\leq \frac{2}{3}.
\end{align}
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<p><b><font size="3">Chebyshev's Inequality:</font></b></p>
			<p>Let $X$ be any random variable. If you define $Y=(X-EX)^2$, then $Y$ is a nonnegative random variable, so we can apply Markov's inequality to $Y$. In particular, for any positive real number $b$, we have
\begin{align}%\label{}
  P(Y \geq b^2) \leq \frac{EY}{b^2}.
\end{align}
But note that
\begin{align}%\label{}
  &EY=E(X-EX)^2=Var(X)\\
  &P(Y \geq b^2)=P\big((X-EX)^2 \geq b^2\big)=P\big(|X-EX|\geq b\big).
\end{align}
Thus, we conclude that
\begin{align}%\label{}
  P\big(|X-EX|\geq b\big) \leq \frac{Var(X)}{b^2}.
\end{align}
This is <b>Chebyshev's inequality</b>.</p>
			
			<div style="padding: 15px; border: black 1px solid">
			<p align="center">Chebyshev's Inequality</p>
If $X$ is any random variable, then for any $b>0$ we have
\begin{align}%\label{}
  P\big(|X-EX|\geq b\big) \leq \frac{Var(X)}{b^2}.
\end{align}
			</div><br>
			
			<p>The Chebyshev's inequality states that the difference between $X$ and $EX$ is somehow limited by $Var(X)$. This is intuitively expected as variance shows on average how far we are from the mean.</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>Let $X \sim Binomial(n,p)$. Using the Chebyshev's inequality, find an upper bound on $P(X \geq \alpha n)$, where $p< \alpha&lt;1$. Evaluate the bound for $p=\frac{1}{2}$ and $\alpha=\frac{3}{4}$.</p> 
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 One way to obtain a bound is to write
                         <table align="center" width="60%">			
                          <tr>
                            <td>$P(X \geq \alpha n)$</td>
                            <td>$=P(X-np \geq \alpha n-np)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$\leq P\big(|X-np|\geq n\alpha-np\big)$</td>
                          </tr><tr>
                            <td></td>
                            <td>$\leq \frac{Var(X)}{(n\alpha-np)^2}$</td>
                          </tr><tr>
                            <td></td>
                            <td>$=\frac{p(1-p)}{n(\alpha-p)^2}.$</td>
                          </tr>
						  </table><br>

For $p=\frac{1}{2}$ and $\alpha=\frac{3}{4}$, we obtain
\begin{align}%\label{}
  P(X \geq \frac{3n}{4})\leq \frac{4}{n}.
\end{align}
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			
			<div class="thinblock hide_print">
			  <div class="left"><a>&larr; </a><a href="chapter6/6_2_1_union_bound_and_exten.php">previous</a></div>
    			<div class="right"><a href="chapter6/6_2_3_chernoff_bounds.php">next</a><a> &rarr;</a></div>
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
