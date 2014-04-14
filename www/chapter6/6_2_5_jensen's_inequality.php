<?php
	$section_no			= "6.2.5";
	$section_title	= "Jensen's Inequality";
	$section_next		= "chapter6/6_2_6_solved6_2.php";
	$section_prev		= "chapter6/6_2_4_markov_chebyshev_inequalities.php";
	include						"../Control/autonumber.php";
	loadHeaders(88);
	include						"section_header.php";
?><!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name='section'	content='6.2.5' />
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
				<div class="left"><a>&larr; </a><a href="chapter6/6_2_4_markov_chebyshev_inequalities.php">previous</a></div>
    			<div class="right"><a href="chapter6/6_2_6_solved6_2.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>6.2.5 Jensen's Inequality</h2></div>
            <!--
    		<div class="right hide_print">
			<a href="http://probabilitycourse.com/videos/chapter6/video4_3.html"><img src="http://probabilitycourse.com/images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img id="printButton" src="http://probabilitycourse.com/images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></div>
            -->
    		<div class="clear"></div>
			
			<p>
           Remember that variance of every random variable $X$ is a positive value, i.e.,
\begin{align}%\label{}
  Var(X)=EX^2-(EX)^2 \geq 0.
\end{align}
Thus,
\begin{align}%\label{}
  EX^2 \geq (EX)^2.
\end{align}
If we define $g(x)=x^2$, we can write the above inequality as
\begin{align}%\label{}
  E[g(X)] \geq g(E[X]).
\end{align}
The function $g(x)=x^2$ is an example of <b>convex</b> function. <b>Jensen's inequality</b> states that, for any convex function $g$, we have  $E[g(X)] \geq g(E[X])$. So what is a convex function? Figure 6.2 depicts a convex function. A function is convex if, when you pick any two points on the graph of the function and draw a line segment between the two points, the entire segment lies above the graph. On the other hand, if the line segment always lies below the graph, the function is said to be <b>concave</b>. In other words, $g(x)$ is convex if and only if $-g(x)$ is concave.<br/>
           
            <figure align="center">
              					  <img src="http://probabilitycourse.com/images/chapter6/Convex_b.png" width="440" height="212" alt="Figure" title="Figure" border="0" />
              					  <figcaption align="left">Fig.6.2 - An example of a randomly generated graph based on the $G(n,p)$ model. Here $n=5$ and $p$ was chosen to be $\frac{1}{2}$.</figcaption>
   			  </figure>
              <br/>
              We can state the definition for convex and concave functions in the following way:
              <br/>
               </p>
               
			
			<div style="padding: 15px; border: black 1px solid">

<span class='definition'>Definition </span><br>
Consider a function $g: I \rightarrow \mathbb{R}$, where $I$ is an interval in $\mathbb{R}$. We say that $g$ is a <b>convex </b>function if for any two points $x$ and $y$ in $I$ and any $\alpha \in [0,1]$, we have
\begin{align}%\label{}
  g(\alpha x+ (1-\alpha)y) \leq \alpha g(x)+ (1-\alpha)g(y),
\end{align}
we say that $g$ is <b>concave</b> if
\begin{align}%\label{}
  g(\alpha x+ (1-\alpha)y) \geq \alpha g(x)+ (1-\alpha)g(y).
\end{align}
</p>
			</div><br/>
            <p>Note that in the above definition the term $\alpha x+ (1-\alpha)y$ is the weighted average of $x$ and $y$. Also, $\alpha g(x)+ (1-\alpha)g(y)$ is the weighted average of $g(x)$ and $g(y)$. More generally, for a convex function $g: I \rightarrow \mathbb{R}$, and $x_1$, $x_2$,...,$x_n$ in $I$ and nonnegative real numbers $\alpha_i$ such that $\alpha_1+\alpha_2+...+\alpha_n=1$, we have
\begin{align}\label{eq:conv}
  g(\alpha_1 x_1+\alpha_2 x_2+...+\alpha_n x_n) \leq \alpha_1 g(x_1)+ \alpha_2 g(x_2)+...+\alpha_n g(x_n).&\qquad(6.4)
\end{align} 
If $n=2$, the above statement is the definition of convex functions. You can extend it to higher values of $n$ by induction.</p>
<p>Now, consider a discrete random variable $X$ with $n$ possible values $x_1$, $x_2$,...,$x_n$. In Equation 6.4, we can choose $\alpha_i=P(X=x_i)=P_X(x_i)$. Then, the left-hand side of 6.4 becomes $g(EX)$ and the right-hand side becomes $E[g(X)]$ (by LOTUS). So we can prove the Jensen's inequality in this case. Using limiting arguments, this result can be extended to other types of random variables.</p>
<div style="padding: 15px; border: black 1px solid">
<p align="center">Jensen's Inequality:</p>
<p style="padding-top:5px;">
If $g(x)$ is a convex function on $R_X$, and and $E[g(X)]$ and $g(E[X])$ are finite, then
\begin{align}%\label{}
  E[g(X)] \geq g(E[X]).
\end{align}
</p>
			</div><br/>
            <p>To use Jensen's inequality, we need to determine if a function $g$ is convex. A useful method is the second derivative.</p>
            <div style="padding: 15px; border: black 1px solid">
<p>
A twice-differentiable function $g: I \rightarrow \mathbb{R}$ is convex if and only if $g''(x) \geq 0$ for all $x \in I$.
</p>
			</div><br/>
            <p>For example, if $g(x)=x^2$, then $g''(x) =2 \geq 0$, thus $g(x)=x^2$ is convex over $\mathbb{R}$.</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>Let $X$ be a positive random variable. Compare $E[X^a]$ with $(E[X])^{a}$ for all values of $ a\in \mathbb{R}$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 First note
                         <table align="center" width="60%">			
                          <tr>
                            <td>$E[X^a]=1=(E[X])^{a},$</td>
                            <td>$\textrm{ if }a=0$</td>
                          </tr>
                          <tr>
                            <td>$E[X^a]=EX=(E[X])^{a},$</td>
                            <td>$\textrm{ if }a=1.$</td>
                          </tr>
						  </table><br>

So let's assume $a\neq 0,1$. Letting $g(x)=x^a$, we have
\begin{align}%\label{}
 g''(x)=a(a-1)x^{a-2}.
\end{align}
On $(0, \infty)$, we can say $g''(x)$ is positive, if $a&lt;0$ or $a&gt;1$. It is negative, if $0&lt;a&lt;1$. Therefore we conclude that $g(x)$ is convex, if $a&lt;0$ or $a>1$. It is concave, if $0&lt;a&lt;1$. Using Jensen's inequality we conclude
<table align="center" width="60%">			
                          <tr>
                            <td>$E[X^a] \geq (E[X])^{a},$</td>
                            <td>$\textrm{ if }a&lt;0 \textrm{ or }a>1$</td>
                          </tr>
                          <tr>
                            <td>$E[X^a] \leq (E[X])^{a},$</td>
                            <td>$\textrm{ if }0&lt;a&lt;1.$</td>
                          </tr>
						  </table><br>

						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
	
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter6/6_2_4_markov_chebyshev_inequalities.php">previous</a></div>
    			<div class="right"><a href="chapter6/6_2_6_solved6_2.php">next</a><a> &rarr;</a></div>
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
