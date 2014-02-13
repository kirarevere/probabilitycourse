<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="section"	content="4.2.3" />
	<?php include '../Control/autonumber.php'; loadHeaders(50); ?>
	
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
				<div class="left"><a>&larr; </a><a href="chapter4/4_2_2_exponential.php">previous</a></div>
    			<div class="right"><a href="chapter4/4_2_4_Gamma_distribution.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>4.2.3 Normal (Gaussian) Distribution</h2></div>
    		<div class="right hide_print">
			<a href=""><img src="http://probabilitycourse.com/images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img id="printButton" src="http://probabilitycourse.com/images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></div>
    		<div class="clear"></div>
			
			<p>The normal distribution is by far the most important probability distribution. One of the main reasons 
			for that is the <i>Central Limit Theorem</i> (CLT) that we will discuss later in the book. To give you 
			an idea, the CLT states that if you add a large number of random variables, the distribution of the sum 
			will be approximately normal under certain conditions. The importance of this result comes from the fact 
			that many random variables in real life can be expressed as the sum of a large number of random variables 
			and, by the CLT, we can argue that distribution of the sum should be normal. The CLT is one of the most 
			important results in probability and we will discuss it later on. Here, we will introduce normal random 
			variables.</p>
			
			<p>We first define the <b>standard normal random variable</b>. We will then see that we can obtain other normal 
			random variables by <i>scaling</i> and <i>shifting</i> a standard normal random variable. This is similar 
			to <a href="chapter4/4_2_2_exponential.php#lemma5">Lemma 4.1</a> which stated that we 
			can obtain any exponential random variable by scaling an $Exponential(1)$ random variable.</p>
			
			<div style="padding: 15px; border: black 1px solid">
			A continuous random variable $Z$ is said to be a <i>standard normal (standard Gaussian)</i> random variable, 
			shown as $Z \sim  N(0,1)$, if its PDF is given by
			$$f_Z(z) = \frac{1}{\sqrt{2 \pi}} \exp\left\{-\frac{z^2}{2}\right\},    \hspace{20pt} \textrm{for all } z \in \mathbb{R}.$$
			</div><br>
			
			<p>The $\frac{1}{\sqrt{2 \pi}}$ is there to make sure that the area under the PDF is equal to one. We will 
			verify that this holds in the solved problems section. Figure 4.6 shows the PDF of the standard normal 
			random variable.</p>
			
			<figure>
  					<img src="http://probabilitycourse.com/images/chapter4/PDF-Normal_b.png" width="300" height="184" alt="Figure" title="Figure" border="0" />
  					<figcaption>Fig.4.6 - PDF of the standard normal random variable.</figcaption>
			</figure>
			
			<p>Let us find the mean and variance of the standard normal distribution. To do that, we will use a simple 
			useful fact. Consider a function $g(u):\mathbb{R}\rightarrow\mathbb{R}$. If $g(u)$ is an odd function, 
			i.e., $g(-u)=-g(u)$, and $|\int_{0}^{\infty} g(u) du| < \infty$, then
			$$\int_{-\infty}^{\infty} g(u) du=0.$$
			For our purpose, let
			$$g(u)= u^{2k+1}\exp\left\{-\frac{u^2}{2}\right\},$$
			where $k=0,1,2,...$. Then $g(u)$ is an odd function. Also $|\int_{0}^{\infty} g(u) du| < \infty$. One way 
			to see this is to note that $g(u)$ decays faster than the function $\exp\left\{-u\right\}$ and since 
			$|\int_{0}^{\infty} \exp\left\{-u\right\} du| < \infty$, we conclude that $|\int_{0}^{\infty} g(u) du| < \infty$. Now, 
			let $Z$ be a standard normal random variable. Then, we have
			$$EZ^{2k+1} = \frac{1}{\sqrt{2 \pi}}  \int_{-\infty}^{\infty} u^{2k+1}\exp\left\{-\frac{u^2}{2}\right\} du=0.$$
			For all $k \in \{0,1,2,..,\}$.  Thus, we have shown that for a standard normal random variable $Z$, we have
			$$EZ=EZ^3=EZ^5=....=0.$$
			In particular, the standard normal distribution has zero mean. This is not surprising as we can see 
			from Figure 4.6 that the PDF is symmetric around the origin, so we expect that $EZ=0$. Next, let&#39;s find $EZ^2$.
			<table align="center">			
            <tr>
              <td>$EZ^2$</td>
              <td>$= \frac{1}{\sqrt{2 \pi}}  \int_{-\infty}^{\infty} u^2\exp\left\{-\frac{u^2}{2}\right\} du$</td>
            </tr>
            <tr>
              <td></td>
              <td>$= \frac{1}{\sqrt{2 \pi}}\bigg[ -u\exp\left\{-\frac{u^2}{2}\right\}\bigg]_{-\infty}^{\infty}+\frac{1}{\sqrt{2 \pi}} \int_{-\infty}^{\infty} \exp\left\{-\frac{u^2}{2}\right\} du \hspace{20pt} (\textrm{integration by parts})\\$</td>
            </tr>
			<tr>
              <td></td>
              <td>$=  \int_{-\infty}^{\infty} \frac{1}{\sqrt{2 \pi}} \exp\left\{-\frac{u^2}{2}\right\} du$</td>
            </tr>
			<tr>
              <td></td>
              <td>$=1.$</td>
            </tr>
            </table><br>
			The last equality holds because we are integrating the standard normal PDF from $-\infty$ to $\infty$. Thus, 
			we conclude that for a standard normal random variable $Z$, we have
			$$\textrm{Var}(Z)=1.$$
			So far we have shown the following.</p>
			
			<div align="center" style="padding: 15px; border: black 1px solid">
			If $Z \sim Normal(0,1)$, then $EZ=0$ and Var$(Z)=1$.
			</div><br>
			
			<b><font size="3">CDF of the standard normal</font></b><br>
			<p>To find the CDF of the standard normal distribution, we need to integrate the PDF function. 
			In particular, we have
			$$F_Z(z)=\frac{1}{\sqrt{2 \pi}}  \int_{-\infty}^{z}\exp\left\{-\frac{u^2}{2}\right\} du.$$
			This integral does not have a closed form solution. Nevertheless, because of the importance of 
			the normal distribution, the values of $F_Z(z)$ have been tabulated and many calculators and 
			software packages have this function. We usually denote the standard normal CDF by $\Phi$.</p>
			
			<div style="padding: 15px; border: black 1px solid">
			The CDF of the standard normal distribution is denoted by the $\Phi$ function:
			$$\Phi(x)=P(Z \leq x)= \frac{1}{\sqrt{2 \pi}}  \int_{-\infty}^{x}\exp\left\{-\frac{u^2}{2}\right\} du.$$
			</div><br>
			
			<p>As we will see in a moment, the CDF of any normal random variable can be written in terms of the 
			$\Phi$ function, so the $\Phi$ function is widely used in probability. Figure 4.7 shows the $\Phi$ function.</p>
			
			<figure>
  					<img src="http://probabilitycourse.com/images/chapter4/Phi_b.png" width="600" height="180" alt="Figure" title="Figure" border="0" />
  					<figcaption>Fig.4.7 - The $\Phi$ function (CDF of standard normal).</figcaption>
			</figure>
			
			<p>Here are some properties of the $\Phi$ function that can be shown from its definition.
			<ol type="1">
                <li>$\lim \limits_{x\rightarrow \infty} \Phi(x)=1, \hspace{5pt} \lim \limits_{x\rightarrow -\infty} \Phi(x)=0$;</li>
                <li>$\Phi(0)=\frac{1}{2}$;</li>
                <li>$\Phi(-x)=1-\Phi(x)$ for all $x \in \mathbb{R}$.</li>
            </ol>
			
			Also, since the $\Phi$ function does not have a closed form, it is sometimes useful to use upper or lower 
			bounds. In particular we can state the following bounds (see problem 7 in the solved problem section). 
			For all $x \geq 0$,
			$$\hspace{50pt} \frac{1}{\sqrt{2\pi}} \frac{x}{x^2+1} \exp\left\{-\frac{x^2}{2}\right\} \leq 1-\Phi(x) \leq 
			\frac{1}{\sqrt{2\pi}} \frac{1}{x} \exp\left\{-\frac{x^2}{2}\right\} \hspace{50pt} (4.7)$$</p><br /><hr />

				As we mentioned earlier, because of the importance of the normal distribution, the values
				of the $\Phi$ function have been tabulated and many calculators and software packages have this
				function. For example, you can use the normcdf command in MATLAB to compute $\Phi(x)$ for a
				given number $x$. More specifically, $normcdf(x)$ returns $\Phi(x)$. Also, the function $norminv$ returns
				$\Phi^{−1}(x)$. That is, if you run $x=norminv(y)$, then $x$ will be the real number for which $\Phi(x) = y$.<hr /><br />
			
			<b><font size="3">Normal random variables</font></b><br>
			<p>Now that we have seen the standard normal random variable, we can obtain any normal random variable 
			by shifting and scaling a standard normal random variable. In particular, define
			$$X=\sigma Z+\mu, \hspace{20pt} \textrm{where }\sigma > 0$$
			Then
			$$EX=\sigma EZ+\mu=\mu$$
			$$\textrm{Var}(X)=\sigma^2  \textrm{Var}(Z)=\sigma^2.$$
			We say that $X$ is a normal random variable with mean $\mu$ and variance $\sigma^2$. We write 
			$X \sim N(\mu, \sigma^2)$.</p>
			
			<div style="padding: 15px; border: black 1px solid">
			If $Z$ is a standard normal random variable and $X=\sigma Z+\mu$, then $X$ is a normal random variable 
			with mean $\mu$ and variance $\sigma^2$, i.e,
			$$X \sim N(\mu, \sigma^2).$$
			</div><br>
			
			<p>Conversely, if $X \sim N(\mu, \sigma^2)$, the random variable defined by $Z=\frac{X-\mu}{\sigma}$ is a 
			standard normal, i.e., $Z \sim N(0,1)$. To find the CDF of $X \sim N(\mu, \sigma^2)$, we can write
			<table align="center">			
            <tr>
              <td>$F_X(x)$</td>
              <td>$=P(X \leq x)$</td>
            </tr>
            <tr>
              <td></td>
              <td>$=P( \sigma Z+\mu \leq x) \hspace{20pt} \big(\textrm{where }Z \sim N(0,1)\big)$</td>
            </tr>
			<tr>
              <td></td>
              <td>$=P\left(Z \leq \frac{x-\mu}{\sigma}\right)$</td>
            </tr>
			<tr>
              <td></td>
              <td>$=\Phi\left(\frac{x-\mu}{\sigma}\right).$</td>
            </tr>
            </table><br></p>
			
			<p>To find the PDF, we can take the derivative of $F_X$,
			<table align="center">			
            <tr>
              <td>$f_X(x)$</td>
              <td>$=\frac{d}{dx} F_X(x)$</td>
            </tr>
            <tr>
              <td></td>
              <td>$=\frac{d}{dx}  \Phi\left(\frac{x-\mu}{\sigma}\right)$</td>
            </tr>
			<tr>
              <td></td>
              <td>$=\frac{1}{\sigma} \Phi&#39;\left(\frac{x-\mu}{\sigma}\right) \hspace{20pt} \textrm{chain rule for derivative}$</td>
            </tr>
			<tr>
              <td></td>
              <td>$=\frac{1}{\sigma} f_Z\left(\frac{x-\mu}{\sigma}\right)$</td>
            </tr>
			<tr>
              <td></td>
              <td>$=\frac{1}{\sigma\sqrt{2 \pi} } \exp\left\{-\frac{(x-\mu)^2}{2\sigma^2}\right\}.$</td>
            </tr>
            </table><br></p>
			
			<div style="padding: 15px; border: black 1px solid">
			If $X$ is a normal random variable with mean $\mu$ and variance $\sigma^2$, i.e,  $X \sim N(\mu, \sigma^2)$, then
			$$f_X(x)=\frac{1}{ \sigma\sqrt{2 \pi}} \exp\left\{-\frac{(x-\mu)^2}{2\sigma^2}\right\}$$
			$$F_X(x)=P(X \leq x)=\Phi\left(\frac{x-\mu}{\sigma}\right)$$
			$$P(a < X \leq b)= \Phi\left(\frac{b-\mu}{\sigma}\right)-\Phi\left(\frac{a-\mu}{\sigma}\right).$$
			</div><br>
			
			<p>Figure 4.8 shows the PDF of the normal distribution for several values of $\mu$ and $\sigma$.</p>
			
			<figure>
  					<img src="http://probabilitycourse.com/images/chapter4/PDF-Normal-gen_b.png" width="600" height="355" alt="Figure" title="Figure" border="0" />
  					<figcaption>Fig.4.8 - PDF for normal distribution.</figcaption>
			</figure>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			Let $X \sim N(-5,4)$.
			<ol type="a">
                <li>Find $P(X < 0)$.</li>
                <li>Find $P(-7 < X < -3)$.</li>
                <li>Find $P(X > -3 | X  >-5)$.</li>
            </ol> 
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>$X$ is a normal random variable with $\mu=-5$ and $\sigma=\sqrt{4}=2$, thus we have
						 <ol type="a">
						 	 <li>Find $P(X < 0)$:
							 <table align="center">			
                              <tr>
                                <td>$P(X < 0)$</td>
                                <td>$=F_X(0)$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=\Phi\bigg(\frac{0-(-5)}{2}\bigg)$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\Phi(2.5)\approx 0.99$.</td>
                              </tr>
                              </table><br>
							 </li>
							 <li>Find $P(-7 < X < -3)$:
							 <table align="center">			
                              <tr>
                                <td>$P(-7 < X < -3)$</td>
                                <td>$=F_X(-3)-F_X(-7)$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=\Phi\bigg(\frac{(-3)-(-5)}{2}\bigg)-\Phi\bigg(\frac{(-7)-(-5)}{2}\bigg)$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\Phi(1)-\Phi(-1)$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=2\Phi(1)-1  \hspace{20pt} \big(\textrm{since }\Phi(-x)=1-\Phi(x)\big)$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$\approx 0.68$.</td>
                              </tr>
                              </table><br>
                  			</li>
							<li>Find $P(X > -3 | X > -5)$:
							<table align="center">			
                            <tr>
                              <td>$P(X > -3 | X > -5)$</td>
                              <td>$=\frac{P(X > -3,X > -5)}{P(X > -5)}$</td>
                            </tr>
                            <tr>
                              <td></td>
                              <td>$=\frac{P(X > -3)}{P(X > -5)}$</td>
                            </tr>
							<tr>
                              <td></td>
                              <td>$=\frac{1-\Phi\bigg(\frac{(-3)-(-5)}{2}\bigg)}{1-\Phi\bigg(\frac{(-5)-(-5)}{2}\bigg)}$</td>
                            </tr>
							<tr>
                              <td></td>
                              <td>$=\frac{1-\Phi(1)}{1-\Phi(0)}$</td>
                            </tr>
							<tr>
                              <td></td>
                              <td>$\approx \frac{0.1587}{0.5} \approx 0.32$.</td>
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

			<p>An important and useful property of the normal distribution is that a linear transformation of a normal 
			random variable is itself a normal random variable. In particular, we have the following theorem:</p>
			
			<div style="padding: 15px; border: black 1px solid">
			<span class='theorem'>Theorem </span><br>
			If $X \sim N(\mu_X, \sigma_X^2)$, and $Y=aX+b$, where $a,b \in \mathbb{R}$, then $Y \sim N(\mu_Y, \sigma_Y^2)$ where
			$$\mu_Y=a\mu_X+b, \hspace{10pt} \sigma^2_Y=a^2 \sigma_X^2.$$
			</div><br>
			
			<i>Proof</i><br>
			<p>We can write
			$$X =\sigma_X Z+ \mu_X \hspace{20pt} \textrm{where } Z \sim N(0,1).$$
			Thus,
			<table align="center">			
            <tr>
              <td>$Y$</td>
              <td>$=aX+b$</td>
            </tr>
            <tr>
              <td></td>
              <td>$=a(\sigma_X Z+ \mu_X)+b$</td>
            </tr>
			<tr>
              <td></td>
              <td>$=(a \sigma_X) Z+ (a\mu_X+b).$</td>
            </tr>
            </table><br>
			Therefore,
			$$Y \sim N(a\mu_X+b, a^2 \sigma^2_X).$$</p>

			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter4/4_2_2_exponential.php">previous</a></div>
    			<div class="right"><a href="chapter4/4_2_4_Gamma_distribution.php">next</a><a> &rarr;</a></div>
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
