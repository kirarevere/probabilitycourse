<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name='section'	content='4.1.2' />
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

	<title>Expected Value and Variance</title>
	<meta name="description" content="Definitions and examples for expected values of continuous distributions" />

</head><body>
	<div id="container">
		<span class="hide_print">
			<script type="text/javascript" src="http://probabilitycourse.com/javascript/top_page_html_code.js"></script>
		</span>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter4/4_1_1_pdf.php">previous</a></div>
    			<div class="right"><a href="chapter4/4_1_3_functions_continuous_var.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>4.1.2 Expected Value and Variance</h2></div>
    		<div class="right hide_print">
			<a href="http://probabilitycourse.com/videos/chapter4/video4_3.html"><img src="http://probabilitycourse.com/images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img id="printButton" src="http://probabilitycourse.com/images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></div>
    		<div class="clear"></div>
			
			<p>As we mentioned earlier, the theory of continuous random variables is very similar to the theory of discrete 
			random variables. In particular, usually summations are replaced by integrals and PMFs are replaced by PDFs. 
			The proofs and ideas are very analogous to the discrete case, so sometimes we state the results without 
			mathematical derivations for the purpose of brevity.</p>
			
			<p>Remember that the expected value of a discrete random variable can be obtained as
			$$EX=\sum_{x_k \in R_X} x_k P_X(x_k).$$
			Now, by replacing the sum by an integral and PMF by PDF, we can write the definition of expected value of 
			a continuous random variable as</p>
			
			<div align="center" style="padding: 15px; border: black 1px solid">
			$$EX= \int_{-\infty}^{\infty} xf_X(x)dx$$
			</div><br>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>Let $X \sim Uniform(a,b)$. Find $EX$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 As we saw, the PDF of $X$ is given by
                          \begin{equation}
                           \nonumber f_X(x) = \left\{
                            \begin{array}{l l}
                              \frac{1}{b-a} & \quad  a < x < b\\
                              0 & \quad x < a \textrm{ or } x > b
                            \end{array} \right.
                          \end{equation}
						  so to find its expected value, we can write
						  <table align="center">			
                            <tr>
                              <td>$EX$</td>
                              <td>$= \int_{-\infty}^{\infty} xf_X(x)dx$</td>
                            </tr>
                            <tr>
                              <td></td>
                              <td>$=\int_{a}^{b} x (\frac{1}{b-a}) dx$</td>
                            </tr>
							<tr>
                              <td></td>
                              <td>$=\frac{1}{b-a} \bigg[ \frac{1}{2}x^2 \bigg]_{a}^{b} dx$</td>
                            </tr>
							<tr>
                              <td></td>
                              <td>$=\frac{a+b}{2}.$</td>
                            </tr>
                            </table><br>
							This result is intuitively reasonable: since $X$ is uniformly distributed over the interval 
							$[a,b]$, we expect its mean to be the middle point, i.e., $EX=\frac{a+b}{2}$.
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='example'>Example </span><br>
			<p>Let $X$ be a continuous random variable with PDF
			\begin{equation}
             \nonumber f_X(x) = \left\{
              \begin{array}{l l}
                2x & \quad  0 \leq x \leq 1\\
                0 & \quad \text{otherwise}
              \end{array} \right.
            \end{equation}
			Find the expected value of $X$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 We have
						 <table align="center">			
                          <tr>
                            <td>$EX$</td>
                            <td>$= \int_{-\infty}^{\infty} xf_X(x)dx$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=\int_{0}^{1} x (2x) dx$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\int_{0}^{1} 2x^2 dx$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\frac{2}{3}.$</td>
                          </tr>
                          </table><br>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<b><font size="3">Expected Value of a Function of a Continuous Random Variable</font></b><br>
			<p>Remember the law of the unconscious statistician (LOTUS) for discrete random variables:
			$$\hspace{70pt} E[g(X)]=\sum_{x_k \in R_X} g(x_k)P_X(x_k) \hspace{70pt} (4.2)$$
			Now, by changing the sum to integral and changing the PMF to PDF we will obtain the similar formula for 
			continuous random variables.</p>
			
			<div style="padding: 15px; border: black 1px solid">
			Law of the unconscious statistician (LOTUS) for continuous random variables:
			$$\hspace{70pt} E[g(X)]=\int_{-\infty}^{\infty} g(x) f_X(x) dx \hspace{70pt} (4.3)$$
			</div><br>
			
			<p>As we have seen before, expectation is a linear operation, thus we always have
			<ul>
                <li>$E[aX+b]=aEX+b$, for all $a,b \in \mathbb{R}$, and</li>
                <li>$E[X_1+X_2+...+X_n]=EX_1+EX_2+...+EX_n$, for any set of random variables $X_1, X_2,...,X_n$.</li>
            </ul></p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			Let $X$ be a continuous random variable with PDF
			\begin{equation}
               \nonumber f_X(x) = \left\{
                \begin{array}{l l}
                  x+\frac{1}{2} & \quad  0 \leq x \leq 1\\
                  0 & \quad \text{otherwise}
                \end{array} \right.
              \end{equation}
			 Find $E(X^n)$, where $n \in \mathbb{N}$. 
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 Using LOTUS we have
						 <table align="center">			
                          <tr>
                            <td>$E[X^n]$</td>
                            <td>$=\int_{-\infty}^{\infty} x^n f_X(x) dx$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$= \int_{0}^{1} x^n (x+\frac{1}{2}) dx$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$= \bigg[\frac{1}{n+2}x^{n+2}+\frac{1}{2(n+1)}x^{n+1} \bigg]_{0}^{1}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\frac{3n+4}{2(n+1)(n+2)}.$</td>
                          </tr>
                          </table><br>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<b><font size="3">Variance</font></b><br>
			<p>Remember that the variance of any random variable is defined as
			$$\textrm{Var}(X)=E\big[(X-\mu_X)^2\big]=EX^2-(EX)^2.$$
			So for a continuous random variable, we can write</p>
			
			<div style="padding: 15px; border: black 1px solid">
			<table align="center">			
            <tr>
              <td>$$\textrm{Var}(X)$$</td>
              <td>$$=E\big[(X-\mu_X)^2\big]=\int_{-\infty}^{\infty} (x-\mu_X)^2 f_X(x)dx$$</td>
            </tr>
            <tr>
              <td></td>
              <td>$$=EX^2-(EX)^2=\int_{-\infty}^{\infty} x^2 f_X(x)dx-\mu_X^2$$</td>
            </tr>
            </table><br>
			</div><br>
			
			<p>Also remember that for $a,b \in \mathbb{R}$, we always have
			$$\textrm{Var}(aX+b)=a^2 \textrm{Var}(X).$$</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			Let $X$ be a continuous random variable with PDF
			\begin{equation}
             \nonumber f_X(x) = \left\{
              \begin{array}{l l}
                \frac{3}{x^4} & \quad   x \geq 1\\
                0 & \quad \text{otherwise}
              \end{array} \right.
            \end{equation}
			Find the mean and variance of $X$.
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <table align="center">			
                          <tr>
                            <td>$E[X]$</td>
                            <td>$=\int_{-\infty}^{\infty} x f_X(x) dx$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$= \int_{1}^{\infty} \frac{3}{x^3} dx$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$= \bigg[-\frac{3}{2}x^{-2} \bigg]_{1}^{\infty}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\frac{3}{2}.$</td>
                          </tr>
                          </table><br>
						  Next, we find $EX^2$ using LOTUS,
						  <table align="center">			
                          <tr>
                            <td>$E[X^2]$</td>
                            <td>$=\int_{-\infty}^{\infty} x^2 f_X(x) dx$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$= \int_{1}^{\infty} \frac{3}{x^2} dx$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$= \bigg[-3x^{-1} \bigg]_{1}^{\infty}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=3.$</td>
                          </tr>
                          </table><br>
						  Thus, we have
						  $$\textrm{Var}(X)=EX^2-(EX)^2=3-\frac{9}{4}=\frac{3}{4}.$$
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			
			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter4/4_1_1_pdf.php">previous</a></div>
    			<div class="right"><a href="chapter4/4_1_3_functions_continuous_var.php">next</a><a> &rarr;</a></div>
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
