<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="section"	content="4.4.0" />
		<?php include '../Control/autonumber.php'; loadHeaders(55); ?>
	<script type="text/x-mathjax-config">
  			MathJax.Hub.Config({
    		tex2jax: { inlineMath: [['$','$'],['\\(','\\)']] }
  			});
	</script>	
	<script type="text/javascript">
		window.onbeforeunload = function(e) {
			window.history.back();
		}
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
				<div class="left"><a>&larr; </a><a href="chapter4/4_3_3_solved4_3.php">previous</a></div>
    			<div class="right"><a href="chapter5/5_1_0_joint_distributions.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>4.4 End of Chapter Problems</h2></div>
    		<div class="right hide_print">
			<a href=""><img src="http://probabilitycourse.com/images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img id="printButton" src="http://probabilitycourse.com/images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></div>
    		<div class="clear"></div>
			
			<span class='problem'>Problem </span><br>
				<p>
					Choose a real number uniformly at random in the interval $[2,6]$ and call it $X$.
					<ol type="a">
						<li>Find the CDF of X, $F_X (x)$.
						<li>Find $EX$.
					</ol>
				</p>
			<hr /><br>
			
			<span class='problem'>Problem </span><br>
			<p>
				Let $X$ be a continuous random variable with the following PDF
				\begin{equation}
					\nonumber f_X(x) = \left\{
					\begin{array}{l l}
              ce^{-4x} & \quad x \geq 0 \\
              0  &  \quad otherwise
            \end{array} \right.
            \end{equation}
				where $c$ is a positive constant.
				<ol type="a">
					<li>Find c.</li>
					<li>Find the CDF of X, $F_X(x)$.</li>
					<li>Find $P(2 &lt; X &lt; 5)$.
					<li>Find $EX$. </li>
				</ol>
			</p>
			<hr /><br />
			
			<span class='problem'>Problem </span><br>
			<p>
				Let $X$ be a continuous random variable with PDF
				\begin{equation}
					\nonumber f_X(x) = \left\{
					\begin{array}{l l}
						x^{2} + \frac{2}{3} & \quad 0 \leq x \leq 1 \\
						0 & \quad otherwise
					\end{array} \right.
					\end{equation}
				<ol type="a">
					<li>Find $E(X^{n})$, for $n=1,2,3,\cdots$.</li>
					<li>Find the variance of $X$.</li>
				</ol>
			</p>
			<hr /><br />
			
			<span class='problem'>Problem </span><br>
			<p>
				Let $X$ be a $uniform(0,1)$ random variable, and let $Y = e^{-X}$.
				<ol type="a">
					<li>Find CDF of $Y$.</li>
					<li>Find PDF of $Y$.</li>
					<li>Find $EY$.</li>
				</ol>
			</p>
			<hr /><br />

			<span class='problem'>Problem </span><br />
			<p>
				Let $X$ be a continuous random variable with PDF
				\begin{equation}
					\nonumber f_X(x) = \left\{
					\begin{array}{l l}
						\frac{5}{32}x^{4} & \quad 0 &lt; x \leq 2 \\	
						0 & \quad otherwise
					\end{array} \right.
					\end{equation}
				and let $Y = X^{2}$.
				<ol type="a">
					<li>Find CDF of $Y$.</li>
					<li>Find PDF of $Y$.</li>
					<li>Find $EY$.</li>
				</ol>
			</p>
			<hr /><br />

			<span class='problem'>Problem </span><br />
			<p>
				Let $X \sim Exponential (\lambda)$, and $Y=a X$, where $a$ is a positive real number.  Show that 
				$$Y \sim Exponential(\frac{\lambda}{a}).$$
			</p>
			<hr /><br />
			
			
			<span class='problem'>Problem </span><br />
			<p>
				 Let $X \sim Exponential (\lambda)$. Show that
				<ol type="a">
					<li>$EX^n=\frac{n}{\lambda} EX^{n-1}$, for $n=1,2,3,\cdots$;</li>
					<li>$EX^n=\frac{n!}{\lambda^{\large{n}}}$, for $n=1,2,3,\cdots$.</li>
				</ol>
			</p>
			<hr /><br />
			
			
			
			<span class='problem'>Problem </span><br />
			<p>
				Let $X \sim N(3,9)$.
				<ol type="a">
					<li>Find $P(X &gt; 0)$.</li>
					<li>Find $P(-3 &lt; X &lt; 8)$.</li>
					<li>Find $P(X &gt; 5|X &gt; 3)$.</li>
				</ol>
			</p>
			<hr /><br />
			
			
			
			
			
			

			<span class='problem'>Problem </span><br />
			<p>
				Let $X \sim N(3,9)$ and $Y = 5 - X$.
				<ol type="a">
					<li>Find $P(X &gt; 2)$.</li>
					<li>Find $P(-1 &lt; Y &lt; 3)$.</li>
					<li>Find $P(X &gt; 4|Y &lt; 2)$.</li>
				</ol>
			<hr /><br />


			<span class='problem'>Problem </span><br />
				Let $X$ be a continuous random variable with PDF
				\begin{equation}
					\nonumber f_X(x) = 
					\frac{1}{\sqrt{2\pi}}e^{-\frac{x^{2}}{2}} \hspace{20pt} \textrm{for all }x \in \mathbb{R}.
					\end{equation}
				and let $Y = \sqrt{|X|}$. Find $f_Y(y)$.
			<hr /><br />


			<span class='problem'>Problem </span><br />
			<p>
				Let $X \sim Exponential(2)$ and $ Y = 2 + 3X$.
				<ol type="a">
					<li>Find $P(X &gt; 2)$.</li>
					<li>Find $EY$ and $Var(Y)$.</li>
					<li>Find $P(X &gt; 2|Y &lt; 11)$.</li>
				</ol>
			</p>
			<hr /><br />


			<span class='problem'>Problem </span><br />
			<p>
				The <b>median</b> of a continuous random variable $X$ can be defined as the unique real number <i>m</i> that satisfies
				\begin{equation}
					P(X \geq m) = P(X &lt; m) = \frac{1}{2}.
				\end{equation}
				Find the median of the following random variables
				<ol type="a">
					<li>$X \sim Uniform(a,b)$.</li>
					<li>$Y \sim Exponential(\lambda)$.</li>
					<li>$W \sim N(\mu,\sigma)$.</li>
				</ol>
			</p>
			<hr /><br />


			<span class='problem'>Problem </span><br />
				<p>
					Let $X$ be a random variable with the following CDF
					\begin{equation}
						\nonumber F_X(x) = \left\{
						\begin{array}{l l}
							0 & \quad \textrm{for}\: x &lt; 0 \\
							x & \quad \textrm{for}\: 0 \leq x &lt; \frac{1}{4} \\
							x + \frac{1}{2} & \quad \textrm{for}\: \frac{1}{4} \leq x &lt; \frac{1}{2} \\
							1 & \quad \textrm{for}\: x \geq \frac{1}{2}
						\end{array} \right.
						\end{equation}
					<ol type="a">
						<li>Plot $F_X(x)$ and explain why $X$ is a mixed random variable.</li>
						<li>Find $P(X \leq \frac{1}{3})$.</li>
						<li>Find $P(X \geq \frac{1}{4})$.</li>
						<li>Write CDF of $X$ in the form of</li>
						\begin{equation}
							\nonumber F_X(x) = C(x) + D(x),
						\end{equation}
						where $C(x)$ is a continuous function and $D(x)$ is in the form of a staircase function, i.e.,
						\begin{equation}
							\nonumber D(x)=\sum_k a_ku(x - x_k).
						\end{equation}
						<li>Find $c(x) = \frac{d}{dx}C(x)$.</li>
						<li>Find $EX$ using $EX = \int_{-\infty}^{\infty} xc(x)dx + \sum_k x_k a_k$</li>
					</ol>
				</p>
			<hr /><br />


			<span class='problem'>Problem </span><br />
				<p>
					Let $X$ be a random variable with the following CDF
					\begin{equation}
						\nonumber F_X(x) = \left\{
						\begin{array}{l l}
							0 & \quad \textrm{for}\: x &lt; 0 \\
							x & \quad \textrm{for}\: 0 \leq x &lt; \frac{1}{4} \\
							x + \frac{1}{2} & \quad \textrm{for}\: \frac{1}{4} \leq x &lt; \frac{1}{2} \\
							1 & \quad \textrm{for}\: x \geq \frac{1}{2}
						\end{array} \right.
						\end{equation}
					<ol type="a">
						<li>Find the generalized PDF of $X, f_X(x)$.</li>
						<li>Find $EX$ using $f_X(x)$.</li>
						<li>Find $Var(X)$ using $f_X(x)$.</li>
					</ol>
				</p>
			<hr /><br />


			<span class='problem'>Problem </span><br />
				<p>
					Let $X$ be a mixed random variable with the following generalized PDF
					\begin{equation}
						\nonumber f_X(x) = \frac{1}{3}\delta(x + 2) + \frac{1}{6}\delta(x - 1) + \frac{1}{2}\frac{1}{\sqrt{2\pi}}e^{-\frac{x^2}{2}}.
					\end{equation}
					<ol type="a">
						<li>Find $P(X = 1)$ and $P(X = -2)$.</li>
						<li>Find $P(X \geq 1)$.</li>
						<li>Find $P(X = 1|X \geq 1)$.</li>
						<li>Find $EX$ and $Var(X)$.</li>
					</ol>
				</p>
			<hr /><br />


			<span class='problem'>Problem </span><br />
				<p>
					A company makes a certain device. We are interested in the lifetime of the device. It is estimated that around 2% of the devices are defective from the start so they have a lifetime of 0 years. If a device is not defective, then the lifetime of the device is exponentially distributed with a parameter $\lambda = 2$ years. Let X be the lifetime of a randomly chosen device					
					<ol type="a">
						<li>Find the generalized PDF of $X$.</li>
						<li>Find $P(X \geq 1)$.</li>
						<li>Find $P(X &gt; 2|X \geq 1)$.</li>
						<li>Find $EX$ and $Var(X)$.</li>
					</ol>

				</p>
			<hr /><br />


			<span class='problem'>Problem </span><br />
				<p>
					A continuous random variable is said to have a $Laplace(\mu,b)$ distribution [<a href="#">14</a>] if its PDF is given by
					\begin{equation}
						\nonumber f_X(x) = \frac{1}{2b} \exp \left( -\frac{|x - \mu|}{b}\right)\\
						\nonumber =
							\left\{\begin{matrix}
      				\frac{1}{2b} \exp  \left( \frac{x-\mu}{b} \right)
      					\\
      				\frac{1}{2b} \exp \left( -\frac{x-\mu}{b} \right) 
  					\nonumber  \end{matrix}\right.
						\end{equation}
					where $\mu \in \mathbb{R}$ and $b &gt; 0$.
					<ol type="a">
						<li>If $X \sim Laplace(0,1)$, find $EX$ and $Var(X)$.</li>
						<li>If $X \sim Laplace(0,1)$ and $Y = bX + \mu$, show that $Y \sim Laplace(\mu,b)$.</li>
						<li>Let $Y \sim Laplace(\mu,b)$, where $\mu \in \mathbb{R}$ and $b &gt; 0$. Find $EY$ and $Var(Y)$.</li>
					</ol>
				</p>
			<hr /><br />


			<span class='problem'>Problem </span><br />
				<p>
					Let $X \sim Laplace(0,b)$, i.e.,
					\begin{equation}
						\nonumber f_X(x) = \frac{1}{2b} \exp \left( -\frac{|x|}{b} \right),
					\end{equation}
					where $b &gt; 0$. Define $Y = |X|$. Show that $Y \sim Exponential \left( \frac{1}{b} \right)$.
				</p>
			<hr /><br />

			<span class='problem'>Problem </span><br />
				<p>
					A continuous random variable is said to have the <b>standard Cauchy</b> distribution if its PDF is given by
					\begin{equation}
						\nonumber f_X(x) = \frac{1}{\pi(1 + x^2)}.
					\end{equation}
					If $X$ has a standard Cauchy distribution, show that $EX$ is not well-defined. Also, show $EX^2 = \infty$.
				</p>
			<hr /><br />


			<span class='problem'>Problem </span><br />
				<p>
					A continuous random variable is said to have a <b>Rayleigh distribution</b> with parameter $\sigma$ if its PDF is given by
					\begin{equation}
						\nonumber f_X(x) = \frac{x}{\sigma^2} e^{-x^2/2\sigma^2} u(x)\\
  					\nonumber  =
    					\left\{\begin{array}{l l}
      				\frac{x}{\sigma^2} e^{-x^2/2\sigma^2} & \quad \textrm{if}\: x \geq 0\\
      				0  & \quad \textrm{if } x &lt; 0
  					\end{array}\right.
						\end{equation}
					where $\sigma &gt; 0$.
					<ol type="a">
						<li>if $X \sim Rayleigh(\sigma)$, find $EX$.</li>
						<li>if $X \sim Rayleigh(\sigma)$, find the CDF of $X, F_X(x)$.</li>
						<li>If $X \sim Exponential(1)$ and $Y = \sqrt{2\sigma^2X}$, show that $Y \sim Rayleigh(\sigma)$.</li>
					</ol>
				</p>
			<hr /><br />


			<span class='problem'>Problem </span><br />
				<p>
					A continuous random variable is said to have a $Pareto(x_m,\alpha)$ distribution [<a href="#">15</a>] if its PDF is given by
					\begin{equation}
					\nonumber f_X(x) = \left\{
						\begin{array}{l l}
							\alpha \frac{x_m^{\alpha}}{x^{\alpha+1}} & \quad \textrm{for}\: x \geq x_m \\
							0 & \quad \textrm{for}\: x &lt; x_m
						\end{array} \right.
						\end{equation}
					where $x_m, \alpha &gt; 0$. Let $X \sim Pareto(x_m,\alpha)$.
					<ol type="a">
						<li>Find the CDF of $X$, $F_X(x)$.</li>
						<li>Find $P(X &gt; 3x_m|X &gt; 2x_m)$.</li>
						<li>If $\alpha &gt; 2$, find $EX$ and $Var(X)$.</li>
					</ol>
				</p>
			<hr /><br />


			<span class='problem'>Problem </span><br />
				<p>
					Let $Z \sim N(0,1)$. If we define $X = e^{\sigma Z+\mu}$, then we say that $X$ has a log-normal distribution with parameters
					$\mu$ and $\sigma$, and we write $X \sim LogNormal(\mu,\sigma)$.
					<ol type="a">
						<li>If $X \sim LogNormal(\mu,\sigma)$, find the CDF of $X$ in terms of the $\Phi$ function.</li>
						<li>Find $EX$ and $Var(X)$.</li>
					</ol>
				</p>
			<hr /><br />


			<span class='problem'>Problem </span><br />
				<p>
					Let $X_1$, $X_2$, $\cdots$, $X_n$ be independent random variables with $X_i \sim Exponential(\lambda)$. Define
					\begin{equation}
					\nonumber Y = X_1 + X_2 + \cdots + X_n.
					\end{equation}
					As we will see later, $Y$ has a <b>Gamma</b> distribution with parameters $n$ and $\lambda$, i.e.,
					$Y \sim Gamma(n,\lambda)$. Using this, show that if $Y \sim Gamma(n,\lambda)$, then $EY = \frac{n}{\lambda}$ and $Var(Y) = \frac{n}{\lambda^2}$.
				</p>
			<hr /><br />


			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter4/4_3_3_solved4_3.php">previous</a></div>
    			<div class="right"><a href="chapter5/5_1_0_joint_distributions.php">next</a><a> &rarr;</a></div>
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
