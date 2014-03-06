<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<?php include '../Control/autonumber.php'; loadHeaders(39); ?>
	<meta name='section'	content='3.2.3' />
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

	<title>Functions of Random Variables | PMF | CDF | Expected Value | Law of the Unconscious Statistician</title>
	<meta name="description" content="Examples of functions of random variables" />

</head><body>
	<div id="container">
		<span class="hide_print">
			<script type="text/javascript" src="http://probabilitycourse.com/javascript/top_page_html_code.js"></script>
		</span>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter3/3_2_2_expectation.php">previous</a></div>
    			<div class="right"><a href="chapter3/3_2_4_variance.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>3.2.3 Functions of Random Variables</h2></div>
    		<div class="right hide_print">
			<a href="http://probabilitycourse.com/videos/chapter3/video3_8.html"><img src="http://probabilitycourse.com/images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img id="printButton" src="http://probabilitycourse.com/images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></div>
    		<div class="clear"></div>
			
			<p>If $X$ is a random variable and $Y=g(X)$, then $Y$ itself is a random variable. Thus, we can talk 
			about its PMF, CDF, and expected value. First, note that the range of $Y$ can be written as
			$$R_Y=\{g(x) | x \in R_X \}$$
			If we already know the PMF of $X$, to find the PMF of $Y=g(X)$, we can write
			<table align="center">			
            <tr>
              <td>$P_Y (y)$</td>
              <td>$=P(Y=y)$</td>
            </tr>
            <tr>
              <td></td>
              <td>$=P(g(X)=y)$</td>
            </tr>
			<tr>
              <td></td>
              <td>$=\sum_{x:g(x)=y} P_X(x)$</td>
            </tr>
            </table><br>
			Let's look at an example.</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>Let $X$ be a discrete random variable with $P_X(k)=\frac{1}{5}$ for 
			$k=-1,0,1,2,3$. Let $Y=2|X|$. Find the range and PMF of $Y$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 First, note that the range of $Y$ is
						 <table align="center">			
                          <tr>
                            <td>$R_Y$</td>
                            <td>$=\{2|x| \textrm{ where } x \in R_X \}$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=\{0,2,4,6\}$</td>
                          </tr>
                          </table><br>
						  To find $P_Y(y)$, we need to find $P(Y=y)$ for $y=0,2,4,6$. We have<br><br>
						  <table align="center">			
                          <tr>
                            <td>$P_Y(0)$</td>
                            <td>$=P(Y=0)=P(2|X|=0)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=P(X=0)= \frac{1}{5}$</td>
                          </tr>
						  <tr>
                            <td>$P_Y(2)$</td>
                            <td>$=P(Y=2)=P(2|X|=2)$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=P\big((X=-1) \textrm{ or } (X=1) \big)$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=P_X(-1)+ P_X(1)= \frac{1}{5}+\frac{1}{5}=\frac{2}{5}$</td>
                          </tr>
						  <tr>
                            <td>$P_Y(4)$</td>
                            <td>$=P(Y=4)=P(2|X|=4)$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=P(X=2)+P(X=-2)= \frac{1}{5}$</td>
                          </tr>
						  <tr>
                            <td>$P_Y(6)$</td>
                            <td>$=P(Y=6)=P(2|X|=6)$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=P(X=3)+P(X=-3)= \frac{1}{5}$</td>
                          </tr>
                          </table><br>
						  so, to summarize
						  \begin{equation}
                             \nonumber P_Y(k) = \left\{
                            \begin{array}{l l}
                               \frac{1}{5} & \quad \text{for  } k=0,4,6\\
                               \frac{2}{5} & \quad \text{for  } k=2\\
                                   0   & \quad \text{ otherwise}
                            \end{array} \right.
                            \end{equation}
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<b><font size="3">Expected Value of a Function of a Random Variable (LOTUS)</font></b><br>
			<p>Let $X$ be a discrete random variable with PMF $P_X(x)$, and let $Y=g(X)$. Suppose that we are 
			interested in finding $EY$. One way to find $EY$ is to first find the PMF of $Y$ and then use the 
			expectation formula $EY=E[g(X)]=\sum_{y \in R_Y} y P_Y(y)$. But there is another way which is usually 
			easier. It is called the law of the unconscious statistician (LOTUS).</p>
			
			<div style="padding: 15px; border: black 1px solid">
			Law of the unconscious statistician (LOTUS) for discrete random variables:<br>
			$$\hspace{60pt} E[g(X)]=\sum_{x_k \in R_X} g(x_k)P_X(x_k) \hspace{80pt} (3.2)$$
			</div><br>
			
			<p>You can prove this by writing $EY=E[g(X)]=\sum_{y \in R_Y} y P_Y(y)$ in terms of $P_X(x)$. In practice 
			it is usually easier to use LOTUS than direct definition when we need $E[g(X)]$.</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>Let $X$ be a discrete random variable with range $R_X=\{0, \frac{\pi}{4}, \frac{\pi}{2}, \frac{3\pi}{4}, 
			\pi \}$, such that $P_X(0)=P_X(\frac{\pi}{4})=P_X(\frac{\pi}{2})=P_X(\frac{3\pi}{4})=P_X(\pi)=\frac{1}{5}$. 
			Find $E[\sin (X)]$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 Using LOTUS, we have<br><br>
						 <table align="center">			
                          <tr>
                            <td>$E[g(X)]$</td>
                            <td>$=\sum_{x_k \in R_X} g(x_k)P_X(x_k)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=\sin(0) . \frac{1}{5}+\sin(\frac{\pi}{4}) . \frac{1}{5}+\sin(\frac{\pi}{2}) . \frac{1}{5}+ \sin(\frac{3\pi}{4}) . \frac{1}{5}\sin(\pi) . \frac{1}{5}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=0 . \frac{1}{5}+\frac{\sqrt{2}}{2} . \frac{1}{5}+1. \frac{1}{5}+ \frac{\sqrt{2}}{2} . \frac{1}{5}+ 0 . \frac{1}{5}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\frac{\sqrt{2}+1}{5}$</td>
                          </tr>
                          </table><br>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>

			<span class='example'>Example </span><br>
			<p>Prove $E[aX+b]=aEX+b$ (linearity of expectation).</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 Here $g(X)=aX+b$, so using LOTUS we have<br><br>
						 <table align="center">			
                          <tr>
                            <td>$E[aX+b]$</td>
                            <td>$=\sum_{x_k \in R_X} (ax_k+b)P_X(x_k)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=\sum_{x_k \in R_X} ax_kP_X(x_k)+ \sum_{x_k \in R_X} bP_X(x_k)$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=a \sum_{x_k \in R_X} x_kP_X(x_k)+ b\sum_{x_k \in R_X} P_X(x_k)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=a EX+ b$</td>
                          </tr>
                          </table><br>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>

			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter3/3_2_2_expectation.php">previous</a></div>
    			<div class="right"><a href="chapter3/3_2_4_variance.php">next</a><a> &rarr;</a></div>
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
