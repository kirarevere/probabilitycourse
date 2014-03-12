<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<?php include '../Control/autonumber.php'; loadHeaders(40); ?>
	<meta name='section'	content='3.2.4' />
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

	<title>Variance | Standard Deviation</title>
	<meta name="description" content="Definition and examples of variance" />	

</head><body>
	<div id="container">
		<span class="hide_print">
			<script type="text/javascript" src="http://probabilitycourse.com/javascript/top_page_html_code.js"></script>
		</span>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter3/3_2_3_functions_random_var.php">previous</a></div>
    			<div class="right"><a href="chapter3/3_2_5_solved3_2.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>3.2.4 Variance</h2></div>
    		<div class="right hide_print">
			<a href="http://probabilitycourse.com/videos/chapter3/video3_9.html"><img src="http://probabilitycourse.com/images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img id="printButton" src="http://probabilitycourse.com/images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></div>
    		<div class="clear"></div>
			
			<p>Consider two random variables $X$ and $Y$ with the following PMFs.
			<table align="center">			
            <tr>
              <td>$\hspace{60pt}$</td>
              <td>\begin{equation} \label{eq:X-var}
                  P_X(x) = \left\{
                \begin{array}{l l}
                   0.5 & \quad \text{for  } x=-100\\
                   0.5 & \quad \text{for  } x=100\\
                   0   & \quad \text{ otherwise}
                \end{array} \right.
                \end{equation}</td>
			  <td>$\hspace{60pt} (3.3)$</td>
            </tr>
            <tr>
              <td>$\hspace{60pt}$</td>
              <td>\begin{equation} \label{eq:Y-var}
                  P_Y(y) = \left\{
                \begin{array}{l l}
                   1 & \quad \text{for  } y=0\\
                   0 & \quad \text{ otherwise}
                \end{array} \right.
                \end{equation}</td>
			  <td>$\hspace{60pt} (3.4)$</td>
            </tr>
            </table><br>              
                
			Note that $EX=EY=0$. Although both random variables have the same mean value, their distribution 
			is completely different. $Y$ is always equal to its mean of $0$, while $X$ is either $100$ or $-100$, 
			quite far from its mean value. The <b>variance</b> is a measure of how spread out the distribution of 
			a random variable is. Here, the variance of $Y$ is quite small since its distribution is concentrated at 
			a single value, while the variance of $X$ will be larger since its distribution is more spread out.</p>
			
			<div style="padding: 15px; border: black 1px solid">
			The <b>variance</b> of a random variable $X$, with mean $EX=\mu_X$, is defined as
			$$\textrm{Var}(X)=E\big[ (X-\mu_X)^2\big].$$
			</div><br>
			
			<p>By definition, the variance of $X$ is the average value of $(X-\mu_X)^2$. Since $(X-\mu_X)^2 \geq 0$, 
			the variance is always larger than or equal to zero. A large value of the variance means that $(X-\mu_X)^2$ 
			is often large, so $X$ often takes values far from its mean. This means that the distribution is very 
			spread out. On the other hand, a low variance means that the distribution is concentrated around its average.</p>
			
			<p>Note that if we did not square the difference between $X$ and its mean, the result would be $0$. That is
			$$E[X-\mu_X]=EX-E[\mu_X]=\mu_X-\mu_X=0.$$
			$X$ is sometimes below its average and sometimes above its average. Thus, $X-\mu_X$ is sometimes 
			negative and sometimes positive, but on average it is zero.</p>
			
			<p>To compute $Var(X)=E\big[ (X-\mu_X)^2\big]$, note that we need to find the expected value of $g(X)=(X-\mu_X)^2$, 
			so we can use LOTUS. In particular, we can write
			$$\textrm{Var}(X)=E\big[ (X-\mu_X)^2\big]=\sum_{x_k \in R_X} (x_k-\mu_X)^2 P_X(x_k).$$
			For example, for $X$ and $Y$ defined in Equations 3.3 and 3.4, we have
			<table align="center">			
            <tr>
              <td>$\textrm{Var}(X)$</td>
              <td>$=(-100-0)^2(0.5)+(100-0)^2(0.5)=10,000$</td>
            </tr>
            <tr>
              <td>$\textrm{Var}(Y)$</td>
              <td>$=(0-0)^2(1)=0.$</td>
            </tr>
            </table><br>
			As we expect, $X$ has a very large variance while Var$(Y)=0$.</p>
			
			<p>Note that Var$(X)$ has a different unit than $X$. For example, if $X$ is measured in $meters$ then 
			Var$(X)$ is in $meters^2$. To solve this issue, we define another measure, called the <b>standard deviation</b>, 
			usually shown as $\sigma_X$, which is simply the square root of variance.</p>
			
			<div style="padding: 15px; border: black 1px solid">
			The <b>standard deviation</b> of a random variable $X$ is defined as
			$$\textrm{SD}(X)= \sigma_X= \sqrt {\textrm{Var}(X)}.$$
			</div><br>
			
			<p>The standard deviation of $X$ has the same unit as $X$. For $X$ and $Y$ defined in Equations 3.3 and 3.4, 
			we have
			<table align="center">			
            <tr>
              <td>$\sigma_X$</td>
              <td>$=\sqrt{10,000}= 100$</td>
            </tr>
            <tr>
              <td>$\sigma_Y$</td>
              <td>$=\sqrt{0}=0$.</td>
            </tr>
            </table><br></p>
			
			<p>Here is a useful formula for computing the variance.</p>
			
			<div style="padding: 15px; border: black 1px solid">
			Computational formula for the variance:
			$$\hspace{70pt} \textrm{Var}(X)=E\big[X^2\big]-\big[EX\big]^2 \hspace{70pt} (3.5)$$
			</div><br>
			
			<p>To prove it note that
			<table align="center">			
            <tr>
              <td>$\textrm{Var}(X)=E\big[ (X-\mu_X)^2\big]$</td>
              <td>$= E \big[ X^2-2 \mu_X X + \mu_X^2 \big]$</td>
            </tr>
            <tr>
              <td></td>
              <td>$=E\big[X^2\big]-2E\big[\mu_X X\big]+E\big[\mu_X^2\big] \textrm{   by linearity of expectation.}$</td>
            </tr>
            </table><br>
			
			Note that for a given random variable $X$, $\mu_X$ is just a constant real number thus 
			$E\big[\mu_X X\big]=\mu_X E[X]=\mu_X^2$, and $E[\mu_X^2 \big]=\mu_X^2$, so we have<br><br>
			<table align="center">			
            <tr>
              <td>$\textrm{Var}(X)$</td>
              <td>$=E\big[X^2\big]-2\mu_X^2+\mu_X^2$</td>
            </tr>
            <tr>
              <td></td>
              <td>$=E\big[X^2\big]-\mu_X^2$.</td>
            </tr>
            </table><br>
			
			Equation 3.5 is usually easier to work with compared to $\textrm{Var}(X)=E\big[ (X-\mu_X)^2\big]$. 
			To use this equation, we can find $E[X^2]=EX^2$ using LOTUS
			$$E X^2=\sum_{x_k \in R_X} x_k^2 P_X(x_k),$$
			and then subtract $\mu_X^2$ to obtain the variance.</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>I roll a fair die and let $X$ be the resulting number. Find $EX$, Var$(X)$, and $\sigma_X$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 We have $R_X=\{1,2,3,4,5,6\}$ and $P_X(k)=\frac{1}{6}$ for $k=1,2,...,6$. Thus, we have
						 $$EX=1 \cdot \frac{1}{6}+ 2 \cdot \frac{1}{6}+ 3 \cdot \frac{1}{6}+ 4 \cdot \frac{1}{6}+ 5 \cdot \frac{1}{6}+ 6 \cdot \frac{1}{6}=\frac{7}{2}$$
						 $$EX^2=1 \cdot \frac{1}{6}+ 4\cdot \frac{1}{6}+ 9\cdot \frac{1}{6}+ 16 \cdot \frac{1}{6}+ 25\cdot \frac{1}{6}+ 36 \cdot \frac{1}{6}=\frac{91}{6}.$$
						 Thus
						 $$\textrm{Var}(X)=E\big[X^2\big]-\big(EX\big)^2=\frac{91}{6}-\left(\frac{7}{2}\right)^2=\frac{91}{6}-\frac{49}{4}\approx 2.92$$
						 $$\sigma_X= \sqrt {\textrm{Var}(X)}\approx \sqrt{2.92} \approx 1.71$$
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>

			<p>Note that variance is not linear. In particular, we have the following theorem.</p>
			
			<div style="padding: 15px; border: black 1px solid">
			<span class='theorem'>Theorem </span><br>
			For a random variable $X$ and real numbers $a$ and $b$,
			$$\hspace{70pt} \textrm{Var}(aX+b)=a^2 \textrm{Var}(X) \hspace{70pt} (3.6)$$
			</div><br>
			
			<i>Proof</i><br>
			<p>If $Y=aX+b$, $EY=aEX+b$. Thus,
			<table align="center">			
            <tr>
              <td>$\textrm{Var} (Y)$</td>
              <td>$=E[ (Y-EY)^2 ]$</td>
            </tr>
            <tr>
              <td></td>
              <td>$= E[ (aX+b-aEX-b)^2 ]$</td>
            </tr>
			<tr>
              <td></td>
              <td>$=E[a^2(X-\mu_X)^2]$</td>
            </tr>
			<tr>
              <td></td>
              <td>$=a^2 E[(X-\mu_X)^2]$</td>
            </tr>
			<tr>
              <td></td>
              <td>$=a^2 \textrm{Var}(X)$.</td>
            </tr>
            </table><br></p>
			
			<p>From Equation 3.6, we conclude that, for standard deviation, $\textrm{SD}(aX+b)=|a|\textrm{SD}(X)$. We 
			mentioned that variance is NOT a linear operation. But there is a very important case, in which 
			variance behaves like a linear operation and that is when we look at sum of independent random variables.</p>
			
			<div style="padding: 15px; border: black 1px solid">
			<a name="eq37"></a>
			<span class='theorem'>Theorem </span><br>
			If $X_1, X_2,\cdots ,X_n$ are independent random variables and $X=X_1+X_2+\cdots+X_n$, then
			$$\hspace{70pt} \textrm{Var}(X)=\textrm{Var}(X_1)+\textrm{Var}(X_2)+\cdots+\textrm{Var}(X_n) \hspace{70pt} (3.7)$$
			</div><br>

			<p>We will prove this theorem in Chapter 6, but for now we can look at an example to see how we can use it.</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>If $X \sim Binomial(n,p)$ find Var$(X)$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 We know that we can write a $Binomial(n,p)$ random variable as the sum on $n$ <b>independent</b> 
						 $Bernoulli(p)$ random variables, i.e., $X=X_1+X_2+\cdots+X_n$. Thus, we conclude
						 $$\textrm{Var}(X)=\textrm{Var}(X_1)+\textrm{Var}(X_2)+\cdots+\textrm{Var}(X_n).$$
						 If $X_i \sim Bernoulli(p)$, then its variance is
						 $$\textrm{Var}(X_i)=E[X_i^2]-(EX_i)^2=1^2 \cdot p+0^2 \cdot (1-p)-p^2=p(1-p).$$
						 Thus,
						 <table align="center">			
                          <tr>
                            <td>$\textrm{Var}(X)$</td>
                            <td>$=p(1-p)+p(1-p)+\cdots+p(1-p)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=np(1-p)$.</td>
                          </tr>
                          </table><br>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>

			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter3/3_2_3_functions_random_var.php">previous</a></div>
    			<div class="right"><a href="chapter3/3_2_5_solved3_2.php">next</a><a> &rarr;</a></div>
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
