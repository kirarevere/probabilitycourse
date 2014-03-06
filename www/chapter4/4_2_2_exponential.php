<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="section"	content="4.2.2" />
	<?php include '../Control/autonumber.php'; loadHeaders(49); ?>
	
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
	
	<link rel="stylesheet" type="text/css" href="http://probabilitycourse.com/style_sheet.css" media="screen"/>
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
				<div class="left"><a>&larr; </a><a href="chapter4/4_2_1_uniform.php">previous</a></div>
    			<div class="right"><a href="chapter4/4_2_3_normal.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>4.2.2 Exponential Distribution</h2></div>
    		<div class="right hide_print">
			<a href="http://probabilitycourse.com/videos/chapter4/video4_8.html"><img src="http://probabilitycourse.com/images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img id="printButton" src="http://probabilitycourse.com/images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></div>
    		<div class="clear"></div>
			
			<p>The exponential distribution is one of the widely used continuous distributions. It is often used to 
			model the time elapsed between events. We will now mathematically define the exponential distribution 
			and derive its mean and expected value. Then we will develop the intuition for the distribution and 
			discuss several interesting properties that it has.
			<div style="padding: 15px; border: black 1px solid">
			A continuous random variable $X$ is said to have an <i>exponential</i> distribution with parameter 
			$\lambda>0$, shown as $X \sim Exponential(\lambda)$, if its PDF is given by
            \begin{equation}
             \nonumber f_X(x) = \left\{
              \begin{array}{l l}
                \lambda e^{-\lambda x} & \quad  x > 0\\
                0 & \quad \textrm{ otherwise}
              \end{array} \right.
            \end{equation}
			</div><br>
			
			Figure 4.5 shows the PDF of exponential distribution for several values of $\lambda$.</p>
			
			<figure>
  					<img src="http://probabilitycourse.com/images/chapter4/PDF-Exp_b.png" width="400" height="350" alt="Figure" title="Figure" border="0" />
  					<figcaption>Fig.4.5 - PDF of the exponential random variable.</figcaption>
			</figure>
			
			<p>It is convenient to use the unit step function defined as
            \begin{equation}
             \nonumber u(x) = \left\{
              \begin{array}{l l}
                1 & \quad  x \geq 0\\
                0 & \quad \textrm{ otherwise}
              \end{array} \right.
            \end{equation}
			so we can write the PDF of an $Exponential(\lambda)$ random variable as
			$$f_X(x)= \lambda e^{-\lambda x} u(x).$$</p>
			
			<p>Let us find its CDF, mean and variance. For $x > 0$, we have
			$$F_X(x) = \int_{0}^{x} \lambda e^{-\lambda t}dt=1-e^{-\lambda x}.$$
			So we can express the CDF as
			$$F_X(x) = \big(1-e^{-\lambda x}\big)u(x).$$
			
			
			<p>Let $X \sim Exponential (\lambda)$. We can find its expected value as follows, using integration by parts:
			<table align="center">			
            <tr>
              <td>$EX$</td>
              <td>$= \int_{0}^{\infty} x \lambda  e^{- \lambda x}dx$</td>
            </tr>
			<tr>
              <td></td>
              <td>$= \frac{1}{\lambda} \int_{0}^{\infty} y e^{- y}dy$</td>
			  <td>$\textrm{choosing $y=\lambda x$}$</td>
            </tr>
			<tr>
            <tr>
              <td></td>
              <td>$= \frac{1}{\lambda} \bigg[-e^{-y}-ye^{-y} \bigg]_{0}^{\infty}$</td>
            </tr>
			<tr>
              <td></td>
              <td>$=\frac{1}{\lambda}.$</td>
            </tr>
            </table><br></p>
			
			<p>Now let's find Var$(X)$. We have
			<table align="center">			
            <tr>
              <td>$EX^2$</td>
              <td>$= \int_{0}^{\infty} x^2 \lambda e^{- \lambda x}dx$</td>
            </tr>
			<tr>
              <td></td>
              <td>$= \frac{1}{\lambda^2} \int_{0}^{\infty} y^2 e^{- y}dy$</td>
            </tr>
			<tr>
            <tr>
              <td></td>
              <td>$= \frac{1}{\lambda^2} \bigg[-2e^{-y}-2ye^{-y}-y^2e^{-y} \bigg]_{0}^{\infty}$</td>
            </tr>
			<tr>
              <td></td>
              <td>$=\frac{2}{\lambda^2}.$</td>
            </tr>
            </table><br></p>
			
			<p>Thus, we obtain
			$$\textrm{Var} (X)=EX^2-(EX)^2=\frac{2}{\lambda^2}-\frac{1}{\lambda^2}=\frac{1}{\lambda^2}.$$
			
			
			<div align="center" style="padding: 15px; border: black 1px solid">
			If $X \sim Exponential(\lambda)$, then $EX=\frac{1}{\lambda}$ and Var$(X)=\frac{1}{\lambda^2}$.
			</div><br>
			
			<p>An interesting property of the exponential distribution is that it can be viewed as a continuous analogue 
			of the geometric distribution. To see this, recall the random experiment behind the geometric distribution: 
			you toss a coin (repeat a Bernoulli experiment) until you observe the first heads (success). Now, suppose 
			that the coin tosses are $\Delta$ seconds apart and in each toss the probability of success is $p=\Delta \lambda$. 
			Also suppose that $\Delta$ is very small, so the coin tosses are very close together in time and the probability 
			of success in each trial is very low. Let $X$ be the time you observe the first success. We will show in the 
			solved problem section that the distribution of $X$ converges to $Exponential(\lambda)$ as $\Delta$ 
			approaches zero.</p>

			<p>To get some intuition for this interpretation of the exponential distribution, suppose you are waiting 
			for an event to happen. For example, you are at a store and are waiting for the next customer. In each 
			millisecond, the probability that a new customer enters the store is very small. You can imagine that, 
			in each millisecond, a coin (with a very small $P(H)$) is tossed, and if it lands heads a new customers 
			enters. If you toss a coin every millisecond, the time until a new customer arrives approximately follows 
			an exponential distribution.</p>
			
			<p>The above interpretation of the exponential is useful in better understanding the properties of the 
			exponential distribution. The most important of these properties is that the exponential distribution 
			is <b>memoryless</b>. To see this, think of an exponential random variable in the sense of tossing a lot 
			of coins until observing the first heads. If we toss the coin several times and do not observe a heads, 
			from now on it is like we start all over again. In other words, the failed coin tosses do not impact 
			the distribution of waiting time from now on. The reason for this is that the coin tosses are independent. 
			We can state this formally as follows:
			$$P(X > x+a |X > a)=P(X > x).$$</p>
			
			<div style="padding: 15px; border: black 1px solid">
			If $X$ is exponential with parameter $\lambda>0$, then $X$ is a <i>memoryless</i> random variable, that is
			$$P(X > x+a |X > a)=P(X > x),  \hspace{10pt} \textrm{ for }a,x \geq 0.$$
			</div><br>

			From the point of view of waiting time until arrival of a customer, the memoryless property means that 
			it does not matter how much you have waited so far. If you have not observed a customer until time $a$, 
			the distribution of waiting time until the next customer is the same as when you started at time zero. 
			Let us prove the memoryless property of the exponential distribution.
			<table align="center">			
            <tr>
              <td>$P(X > x+a |X > a)$</td>
              <td>$=\frac{P\big(X > x+a, X > a \big)}{P(X > a)}$</td>
            </tr>
            <tr>
              <td></td>
              <td>$= \frac{P(X > x+a)}{P(X > a)}$</td>
            </tr>
			 <tr>
              <td></td>
              <td>$= \frac{1-F_X(x+a)}{1-F_X(a)}$</td>
            </tr>
			 <tr>
              <td></td>
              <td>$= \frac{e^{-\lambda (x+a)}}{e^{-\lambda a}}$</td>
            </tr>
			 <tr>
              <td></td>
              <td>$= e^{-\lambda x}$</td>
            </tr>
			 <tr>
              <td></td>
              <td>$=P(X > x).$</td>
            </tr>
            </table><br>

			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter4/4_2_1_uniform.php">previous</a></div>
    			<div class="right"><a href="chapter4/4_2_3_normal.php">next</a><a> &rarr;</a></div>
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
