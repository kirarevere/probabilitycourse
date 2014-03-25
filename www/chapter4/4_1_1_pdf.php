<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="section"	content="4.1.1" />
	
	<?php include '../Control/autonumber.php'; loadHeaders(44); ?>
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

	<title>Probability Density Function | PDF | Distributions</title>
	<meta name="description" content="Definitions and examples of the Probability Density Function" />

</head><body>
	<div id="container">
		<span class="hide_print">
			<script type="text/javascript" src="http://probabilitycourse.com/javascript/top_page_html_code.js"></script>
		</span>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter4/4_1_0_continuous_var.php">previous</a></div>
    			<div class="right"><a href="chapter4/4_1_2_expected_val_variance.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>4.1.1 Probability Density Function (PDF)</h2></div>
    		<div class="right hide_print">
			<a href="http://probabilitycourse.com/videos/chapter4/video4_2.html"><img src="http://probabilitycourse.com/images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img id="printButton" src="http://probabilitycourse.com/images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></div>
    		<div class="clear"></div>
			
			<p>To determine the distribution of a discrete random variable we can either provide its PMF or CDF. For 
			continuous random variables, the CDF is well-defined so we can provide the CDF. However, the PMF does 
			not work for continuous random variables, because for a continuous random variable $P(X=x)=0$ for all 
			$x \in \mathbb{R}$. Instead, we define <b>probability density function (PDF)</b>. The PDF is the 
			<b>density</b> of probability rather than the probability mass. The concept is very similar to mass density 
			in physics: its unit is probability per unit length. To get a feeling for PDF, consider a continuous 
			random variable $X$ and define the function $f_X(x)$ as follows (wherever the limit exists):
			$$f_X(x)=\lim_{\Delta \rightarrow 0} \frac{P(x < X \leq x+\Delta)}{\Delta}.$$
			The function $f_X(x)$ gives us the probability density at point $x$. It is the limit of the probability 
			of the interval $(x,x+\Delta]$ divided by the length of the interval as the length of the interval goes 
			to $0$. Remember that
			$$P(x < X \leq x+\Delta)=F_X(x+\Delta)-F_X(x).$$
			So, we conclude that
			<table align="center">			
            <tr>
              <td>$f_X(x)$</td>
              <td>$=\lim_{\Delta \rightarrow 0} \frac{F_X(x+\Delta)-F_X(x)}{\Delta}$</td>
            </tr>
            <tr>
              <td></td>
              <td>$=\frac{dF_X(x)}{dx}=F'_X(x), \hspace{20pt} \textrm{if }F_X(x) \textrm{ is differentiable at }x.$</td>
            </tr>
            </table><br>
			Thus, we have the following definition for the PDF of continuous random variables:</p>
			
			<div style="padding: 15px; border: black 1px solid">
			<span class='definition'>Definition </span><br>
			Consider a continuous random variable $X$ with CDF $F_X(x)$. The function $f_X(x)$ defined by
			$$f_X(x)=\frac{dF_X(x)}{dx}=F'_X(x), \hspace{20pt} \textrm{if }F_X(x) \textrm{ is differentiable at }x$$
			is called the probability density function (PDF) of $X$.
			</div><br>
			
			<p>Let us find the PDF of the uniform random variable $X$ discussed in 
			<a href="chapter4/4_1_0_continuous_var.php#ex64">Example 4.1</a>. This random 
			variable is said to have $Uniform(a,b)$ distribution. The CDF of $X$ is given in Equation 4.1. By taking the 
			derivative, we obtain
            \begin{equation}
             f_X(x) = \left\{
              \begin{array}{l l}
                \frac{1}{b-a} & \quad  a < x < b\\
                0 & \quad x < a \textrm{ or } x > b
              \end{array} \right.
            \end{equation}
			Note that the CDF is not differentiable at points $a$ and $b$. Nevertheless, as we will discuss later on, 
			this is not important. Figure 4.2 shows the PDF of $X$. As we see, the value of the PDF is constant in the 
			interval from $a$ to $b$. That is why we say $X$ is uniformly distributed over $[a,b]$.</p>
			
			<figure>
  					<img src="http://probabilitycourse.com/images/chapter4/PDF-Uniform_b.png" width="400" height="320" alt="Figure" title="Figure" border="0" />
  					<figcaption>Fig.4.2 - PDF for a continuous random variable uniformly distributed over $[a,b]$.</figcaption>
			</figure>
			
			<p>The uniform distribution is the simplest continuous random variable you can imagine. For other types 
			of continuous random variables the PDF is non-uniform. Note that for small values of $\delta$ we can write
			$$P(x < X \leq x+\delta) \approx f_X(x) \delta.$$
			Thus, if $f_X(x_1)>f_X(x_2)$, we can say $P(x_1 < X \leq x_1+\delta)>P(x_2 < X \leq x_2+\delta)$, i.e., the value 
			of $X$ is more likely to be around $x_1$ than $x_2$. This is another way of interpreting the PDF.</p>
			
			<hr /><br>
			
			<p>Since the PDF is the derivative of the CDF, the CDF can be obtained from PDF by integration:
			$$F_X(x)=\int_{-\infty}^{x} f_X(u)du.$$
			Also, we have
			$$P(a < X \leq b) = F_X(b)-F_X(a)=\int_{a}^{b} f_X(u)du.$$
			In particular, if we integrate over the entire real line, we must get $1$, i.e.,
			$$\int_{-\infty}^{\infty} f_X(u)du=1.$$
			That is, the area under the PDF curve must be equal to one. We can see that this holds for the uniform 
			distribution since the are under the curve in Figure 4.2 is one. Note that $f_X(x)$ is density of 
			probability, so it must be larger than or equal to zero, but it can be larger than $1$. Let us 
			summarize the properties of the PDF.</p>
			
			<div style="padding: 15px; border: black 1px solid">
			Consider a continuous random variable $X$ with PDF $f_X(x)$. We have
			<ol type="1">
                <li>$f_X(x) \geq 0$ for all $x \in \mathbb{R}$.</li>
                <li>$\int_{-\infty}^{\infty} f_X(u)du=1$.</li>
                <li>$P(a < X \leq b) = F_X(b)-F_X(a)=\int_{a}^{b} f_X(u)du$.</li>
                <li>More generally, for a set $A$, $P(X \in A) =\int_{A} f_X(u)du$.</li>
            </ol> 
			</div><br>
			
			<p>In the last item above, the set $A$ must satisfy some mild conditions which are almost always satisfied 
			in practice. An example of set $A$ could be a union of some disjoint intervals. For example, if 
			you want to find $P(X \in [0,1] \cup [3,4])$, you can write
			$$P(X \in [0,1] \cup [3,4]) = \int_{0}^{1} f_X(u)du+\int_{3}^{4} f_X(u)du.$$
			Let us look at an example to practice the above concepts.</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			Let $X$ be a continuous random variable with the following PDF
			\begin{equation}
             \nonumber f_X(x) = \left\{
              \begin{array}{l l}
                ce^{-x} & \quad  x \geq 0\\
                0 & \quad \text{otherwise}
              \end{array} \right.
            \end{equation}
			where $c$ is a positive constant.
			<ol type="a">
                <li>Find $c$.</li>
                <li>Find the CDF of X, $F_X(x)$.</li>
                <li>Find $P(1 < X < 3)$.</li>
            </ol> 
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <ol type="a">
						 	 <li>To find $c$, we can use property 2 above, in particular
							 <table align="center">			
                              <tr>
                                <td>$1$</td>
                                <td>$=\int_{-\infty}^{\infty} f_X(u)du$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$= \int_{0}^{\infty} ce^{-u}du$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$= c  \bigg[-e^{-x}\bigg]_{0}^{\infty}$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$= c$.</td>
                              </tr>
                              </table><br>
							  Thus, we must have $c=1$.
							 </li><br>
							 <li>To find the CDF of X, we use $F_X(x)=\int_{-\infty}^{x} f_X(u)du$, so for $x < 0$, we 
							 obtain $F_X(x)=0$. For $x \geq 0$, we have
							 $$F_X(x) = \int_{0}^{x} e^{-u}du=1-e^{-x}.$$
							 Thus,
							 \begin{equation}
                              \nonumber F_X(x) = \left\{
                              \begin{array}{l l}
                                1-e^{-x} & \quad  x\geq 0\\
                                0 & \quad \text{otherwise}
                              \end{array} \right.
                              \end{equation}
							 </li><br>
							 <li>We can find $P(1 < X < 3)$ using either the CDF or the PDF. If we use the CDF, 
							 we have
							 $$P(1 < X < 3)=F_X(3)-F_X(1)=\big[1-e^{-3}\big]-\big[1-e^{-1}\big]=e^{-1}-e^{-3}.$$
							 Equivalently, we can use the PDF. We have
							 <table align="center">			
                              <tr>
                                <td>$P(1 < X < 3)$</td>
                                <td>$=\int_{1}^{3} f_X(t)dt$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=\int_{1}^{3} e^{-t}dt$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=e^{-1}-e^{-3}.$</td>
                              </tr>
                              </table><br>
							 </li>
						 </ol> 
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<b><font size="3">Range</font></b><br>
			<p>The range of a random variable $X$ is the set of possible values of the random variable. If $X$ is a 
			continuous random variable, we can define the range of $X$ as the set of real numbers $x$ for which 
			the PDF is larger than zero, i.e,
			$$R_X=\{x | f_X(x)>0\}.$$
			The set $R_X$ defined here might not exactly show all possible values of $X$, but the difference is 
			practically unimportant.</p>
			
			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter4/4_1_0_continuous_var.php">previous</a></div>
    			<div class="right"><a href="chapter4/4_1_2_expected_val_variance.php">next</a><a> &rarr;</a></div>
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
