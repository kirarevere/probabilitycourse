<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="section"	content="4.3.3" />
		<?php include '../Control/autonumber.php'; loadHeaders(55); ?>
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
				<div class="left"><a>&larr; </a><a href="chapter4/4_3_2_delta_function.php">previous</a></div>
    			<div class="right"><a href="chapter4/4_4_0_chapter4_problems.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>4.3.3 Solved Problems:<br>Mixed Random Variables</h2></div>
    		<div class="right hide_print">
			<a href=""><img src="http://probabilitycourse.com/images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img id="printButton" src="http://probabilitycourse.com/images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></div>
    		<div class="clear"></div>
			
			<span class='problem'>Problem </span><br>
			<p>Here is one way to think about a mixed random variable. Suppose that we have a discrete random variable 
			$X_d$ with (generalized) PDF and CDF $f_d(x)$ and $F_d(x)$, and a continuous random variable $X_c$ with 
			PDF and CDF $f_{c}(x)$ and $F_c(x)$. Now we create a new random variable $X$ in the following way. We 
			have a coin with $P(H)=p$. We toss the coin once. If it lands heads then the value of $X$ is determined 
			according to the probability distribution of $X_d$. If the coin lands tails, the value of $X$ is determined 
			according to the probability distribution of $X_c$.
			<ol type="a">
                <li>Find the CDF of $X, F_X(x)$.</li>
                <li>Find the PDF of $X, f_X(x)$.</li>
                <li>Find $EX$.</li>
                <li>Find Var$(X)$.</li>
            </ol></p> 

			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p><ol type="a">
						 	 <li>Find the CDF of $X, F_X(x)$: We can write
							 <table align="center">			
                              <tr>
                                <td>$F_X(x)$</td>
                                <td>$=P(X \leq x)$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=P(X \leq x |H) P(H)+P(X \leq x |T) P(T) \textrm{(law of total probability)}$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=p P(X_d \leq x)+(1-p)P(X_c \leq x)$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=p F_d(x)+(1-p)F_c(x)$.</td>
                              </tr>
                              </table><br>
							 </li>
							 <li>Find the PDF of $X, f_X(x)$: By differentiating $F_X(x)$, we obtain
							 <table align="center">			
                              <tr>
                                <td>$f_X(x)$</td>
                                <td>$=\frac{dF_X(x)}{dx}$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=p f_d(x)+(1-p)f_c(x)$.</td>
                              </tr>
                              </table><br>
							 </li>
							 <li>Find $EX$: We have
							 <table align="center">			
                              <tr>
                                <td>$EX$</td>
                                <td>$=\int_{-\infty}^{\infty} xf_X(x)dx$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=p \int_{-\infty}^{\infty} xf_d(x)dx+(1-p)\int_{-\infty}^{\infty} xf_c(x)dx$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=pEX_d+(1-p)EX_c$.</td>
                              </tr>
                              </table><br>
							 </li>
							 <li>Find Var$(X)$:
							 <table align="center">			
                              <tr>
                                <td>$EX^2$</td>
                                <td>$=\int_{-\infty}^{\infty} x^2f_X(x)dx$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=p \int_{-\infty}^{\infty} x^2f_d(x)dx+(1-p)\int_{-\infty}^{\infty} x^2f_c(x)dx$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=pEX^2_d+(1-p)EX^2_c$.</td>
                              </tr>
                              </table><br>
							  Thus,
							  <table align="center">			
                              <tr>
                                <td>$\textrm{Var}(X)$</td>
                                <td>$=EX^2-(EX)^2$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=pEX^2_d+(1-p)EX^2_c- (pEX_d+(1-p)EX_c)^2$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=pEX^2_d+(1-p)EX^2_c-p^2(EX_d)^2-(1-p)^2 (EX_c)^2-2p(1-p)EX_d EX_c$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=p(EX^2_d-(EX_d)^2)+(1-p)(EX^2_c-(EX_c)^2)+p(1-p)(EX_d-EX_c)^2$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=p\textrm{Var}(X_d)+(1-p)\textrm{Var}(X_c)+p(1-p)\big(EX_d-EX_c\big)^2$.</td>
                              </tr>
                              </table><br>
							 </li>
						 </ol></p> 
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span><br>
			<p>Let $X$ be a random variable with CDF
			\begin{equation}
            \nonumber F_X(x) = \left\{
            \begin{array}{l l}
              1  &  \quad  x \geq 1 \\
              \frac{1}{2}+\frac{x}{2}  &  \quad  0 \leq x < 1  \\
              0 &  \quad x &lt; 0
            \end{array} \right.
            \end{equation}
			<ol type="a">
                <li>What kind of random variable is X: discrete, continuous, or mixed?</li>
                <li>Find the PDF of X, $f_X (x)$.</li>
                <li>Find $E(e^X)$.</li>
                <li>Find $P(X=0|X \leq 0.5)$.</li>
            </ol></p> 
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p><ol type="a">
						 	 <li>What kind of random variable is X: discrete, continuous, or mixed? We note that the CDF has a 
							 discontinuity at $x=0$, and it is continuous at other points. Since $F_X(x)$ is not flat in 
							 other locations, we conclude $X$ is a mixed random variable. Indeed, we can write
							 $$F_X(x)=\frac{1}{2} u(x)+ \frac{1}{2} F_Y(x),$$
							 where $Y$ is a $Uniform(0,1)$ random variable. If we use the interpretation of Problem 1, we can 
							 say the following. We toss a fair coin. If it lands heads then $X=0$, otherwise $X$ is obtained 
							 according the a $Uniform(0,1)$ distribution.
							 </li>
							 <li>Find the PDF of X, $f_X (x)$: By differentiating the CDF, we obtain
							 $$f_X(x)=\frac{1}{2} \delta(x)+ \frac{1}{2} f_Y(x),$$
							 where $f_Y(x)$ is the PDF of $Uniform(0,1)$, i.e.,
							 \begin{equation}
                              \nonumber f_Y(x) = \left\{
                               \begin{array}{l l}
                              1 &  \quad 0 < x < 1   \\
                              0 &  \quad \text{otherwise}
                              \end{array} \right.
                              \end{equation}
							 </li>
							 <li>Find $E(e^X)$: We can use LOTUS to write
							 <table align="center">			
                              <tr>
                                <td>$E(e^X)$</td>
                                <td>$=\int_{-\infty}^{\infty} e^xf_X(x)dx$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=\frac{1}{2} \int_{-\infty}^{\infty} e^x \delta(x)dx+ \frac{1}{2} \int_{-\infty}^{\infty} e^x f_Y(x)dx$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\frac{1}{2} e^0+\frac{1}{2} \int_{0}^{1} e^x dx$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\frac{1}{2}+\frac{1}{2}(e-1)$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\frac{1}{2}e$.</td>
                              </tr>
                              </table><br>
							  Here is another way to think about this part: similar to part (c) of Problem 1, we can write
							  <table align="center">			
                              <tr>
                                <td>$E(e^X)$</td>
                                <td>$=\frac{1}{2} \times e^{0} + \frac{1}{2} E[e^Y]$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=\frac{1}{2} +\frac{1}{2} \int_{0}^{1} e^y dy$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\frac{1}{2}e$.</td>
                              </tr>
                              </table><br>
							 </li>
							 <li>Find $P(X=0|X \leq 0.5)$: We have
							 <table align="center">			
                              <tr>
                                <td>$P(X=0|X \leq 0.5)$</td>
                                <td>$=\frac{P(X=0, X \leq 0.5)}{P(X \leq 0.5)}$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=\frac{P(X=0)}{P(X \leq 0.5)}$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\frac{0.5}{\int_{0}^{0.5}f_X(x)dx}$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\frac{0.5}{0.75}=\frac{2}{3}$.</td>
                              </tr>
                              </table><br>
							 </li>
						 </ol></p> 
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span><br>
			<p>Let $X$ be a $Uniform(-2,2)$ continuous random variable. We define $Y=g(X)$, where the 
			function $g(x)$ is defined as
			\begin{equation}
            \nonumber g(x)=\left\{
             \begin{array}{l l}
            1 &  \quad x > 1   \\
            x &  \quad 0 \leq x \leq 1\\
            0 &  \quad \text{otherwise}
            \end{array} \right.
            \end{equation}
			Find the CDF and PDF of $Y$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>Note that $R_Y=[0,1]$. Therefore, 

						 $$F_Y(y)=0 \quad \textrm{for} \quad y<0$$

						 $$F_Y(y)=1 \quad \textrm{for} \quad y \geq 1$$
						We also note that 
						$$P(Y=0)=P(X < 0)=\frac{1}{2}$$
						 $$P(Y=1)=P(X > 1)=\frac{1}{4}.$$
						Also for $0 < y < 1$, 
						$$F_Y(y)=P(Y \leq y)= P(X \leq y)=F_X(y)=\frac{y+2}{4}.$$

						Thus, the CDF of $Y$ is given by	
						\begin{equation}
            					\nonumber F_Y(y)=\left\{
            					 \begin{array}{l l}
            					1 &  \quad y \geq 1   \\
          					  \frac{y+2}{4} &  \quad 0 \leq y < 1\\
            					0 &  \quad \text{otherwise}
            					\end{array} \right.
           					 \end{equation}
					 	In particular, we note that there are two jumps in the CDF, one at $y=0$ and another at $y=1$. We can find the generalized PDF of $Y$ by differentiating $F_Y(y)$:
						 $$f_Y(y)=\frac{1}{2} \delta(y)+\frac{1}{4} \delta(y-1)+\frac{1}{4} (u(y)-u(y-1)).$$</p>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>

			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter4/4_3_2_delta_function.php">previous</a></div>
					<div class="right"><a href="chapter4/4_4_0_chapter4_problems.php">next</a>&rarr;</div>
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
