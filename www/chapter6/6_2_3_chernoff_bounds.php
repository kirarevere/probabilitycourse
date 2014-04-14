<?php
	$section_no			= "6.2.3";
	$section_title	= "Chernoff Bounds";
	$section_next		= "chapter6/6_2_4_markov_chebyshev_inequalities.php";
	$section_prev		= "chapter6/6_2_2_markov_chebyshev_inequalities.php";
	include						"../Control/autonumber.php";
	loadHeaders(86);
	include						"section_header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name='section'	content='6.2.3' />
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
				<div class="left"><a>&larr; </a><a href="chapter6/6_2_2_markov_chebyshev_inequalities.php">previous</a></div>
    			<div class="right"><a href="chapter6/6_2_4_markov_chebyshev_inequalities.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>6.2.3 Chernoff Bounds</h2></div>
    		<!--
            <div class="right hide_print">
			<a href="http://probabilitycourse.com/videos/chapter6/video4_3.html"><img src="http://probabilitycourse.com/images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img id="printButton" src="http://probabilitycourse.com/images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></div>
            -->
    		<div class="clear"></div>
			
			<p>
            If $X$ be a random variable, then for any $a \in \mathbb{R}$, we can write
\begin{align}%\label{}
  P(X \geq a)= P(e^{sX} \geq e^{sa}),  &\qquad \textrm{ for } s>0 \\
  P(X \leq a)= P(e^{sX} \geq e^{sa}),  &\qquad \textrm{ for } s&lt;0.
\end{align}


Now, note that $e^{sX}$ is always a positive random variable for all $s \in \mathbb{R}$. Thus, we can apply Markov's inequality. So for $s>0$, we can write
\begin{align}%\label{}
  P(X \geq a)&= P(e^{sX} \geq e^{sa})\\
  & \leq \frac{E[e^{sX}]}{e^{sa}} &\qquad \textrm{ by Markov's inequality}.
\end{align}
Similarly, for $s&lt;0$, we can write
\begin{align}%\label{}
  P(X \leq a)&= P(e^{sX} \geq e^{sa})\\
  & \leq \frac{E[e^{sX}]}{e^{sa}}.
\end{align}
Note that $E[e^{sX}]$ is in fact the moment generating function, $M_X(s)$. Thus, we conclude
            </p>
			
			<div style="padding: 15px; border: black 1px solid">
			<p align="center">Chernoff Bounds:</p>

<p style="padding-top:5px;">
<table align="center" width="60%">			
                          <tr>
                            <td>$P(X \geq a)\leq e^{-sa}M_X(s),$</td>
                            <td>$\textrm{ for all }s>0$</td>
                          </tr>
                          <tr>
                            <td>$P(X \leq a)\leq e^{-sa}M_X(s),$</td>
                            <td>$ \textrm{ for all }s&lt;0$</td>
                          </tr>
						  </table><br>
</p>
			</div><br>
            <p>Since Chernoff bounds are valid for all values of $s>0$ and $s&lt;0$, we can choose $s$ in a way to obtain the best bound, that is we can write
            
\begin{align}%\label{}
  P(X \geq a)&  \leq  \min_{s>0} e^{-sa}M_X(s) \\
  P(X \leq a)&\leq  \min_{s&lt;0} e^{-sa}M_X(s).
\end{align}
Let us look at an example to see how we can use Chernoff bounds.</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>Let $X \sim Binomial(n,p)$. Using Chernoff bounds, find an upper bound on $P(X \geq \alpha n)$, where $p< \alpha&lt;1$. Evaluate the bound for $p=\frac{1}{2}$ and $\alpha=\frac{3}{4}$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 For $X \sim Binomial(n,p)$, we have
\begin{align}%\label{}
  M_X(s)=(pe^s+q)^n, &\qquad \textrm{ where }q=1-p.
\end{align}
Thus, Chernoff bound for $P(X \geq a)$ can be written as
\begin{align}\label{eq:cher-1}
  P(X \geq \alpha n)&  \leq  \min_{s>0} e^{-sa}M_X(s)\\
\ &= \min_{s>0} e^{-sa}(pe^s+q)^n.
\end{align}
To find the minimizing value of $s$, we can write
\begin{align}%\label{}
  \frac{d}{ds} e^{-sa}(pe^s+q)^n=0,
\end{align}
which results in
\begin{align}%\label{}
  e^{s}=\frac{aq}{np(1-\alpha)}.
\end{align}
By using this value of $s$ in Equation 6.3 and some algebra, we obtain
\begin{align}%\label{}
  P(X \geq \alpha n)&  \leq \big( \frac{1-p}{1-\alpha}\big)^{(1-\alpha)n} \big(\frac{p}{\alpha}\big)^{\alpha n}.
\end{align}
For $p=\frac{1}{2}$ and $\alpha=\frac{3}{4}$, we obtain
\begin{align}%\label{}
  P(X \geq \frac{3}{4} n)&  \leq  \big(\frac{16}{27}\big)^{\frac{n}{4}}.
\end{align}
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
						
			<p><b><font size="3">Comparison between Markov, Chebyshev, and Chernoff Bounds:</font></b></p>
			<p>Above, we found upper bounds on $P(X \geq \alpha n)$ for $X \sim Binomial(n,p)$. It is interesting to compare them. Here, are the results that we obtain for $p=\frac{1}{4}$ and $\alpha=\frac{3}{4}$:
\begin{align}%\label{}
  &P(X \geq \frac{3n}{4})\leq \frac{2}{3}  \hspace{58pt} \textrm{Markov} \\
  &P(X \geq \frac{3n}{4})\leq \frac{4}{n}  \hspace{57pt} \textrm{Chebshev} \\
  &P(X \geq \frac{3n}{4})\leq \big(\frac{16}{27}\big)^{\frac{n}{4}}  \hspace{35pt} \textrm{Chernoff}.
\end{align}
The bound given by Markov is the "weakest" one. It is constant and does not change as $n$ increases. The bound given by Chebyshev's inequality is "stronger" than the one given by Markov's inequality. In particular, note that $\frac{4}{n}$ goes to zero as $n$ goes to infinity. The strongest bound is the Chenoff bound. It goes to zero exponentially fast.
</p>
			
			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter6/6_2_2_markov_chebyshev_inequalities.php">previous</a></div>
    			<div class="right"><a href="chapter6/6_2_4_markov_chebyshev_inequalities.php">next</a><a> &rarr;</a></div>
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
<?php include 'section_footer.php'; ?>
