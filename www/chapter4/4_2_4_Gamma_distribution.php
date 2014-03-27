<!DOCTYPE html>
<html>
<head>
	<base href="../" />
	<title>4.2.4 Gamma Distribution</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="en-US" />
	<!-- Auto Numbering Required Fields-->
	<meta name='section' content='4.2.4' />
	<?php include '../Control/autonumber.php'; loadHeaders(51); ?>

	<!-- /Auto Numbering -->

	<!-- MathJax -->
	<script type="text/javascript"
		src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
	</script>
	<script type="text/x-mathjax-config">
		MathJax.Hub.Config({
			tex2jax: { inlineMath: [['$','$'],['\\(','\\)']] }
		});
	</script>
	
	<!-- /MathJax -->

	<!-- Javascript -->
	<script type='text/javascript' src='http://code.jquery.com/jquery-1.6.3.js' ></script>
	<script type='text/javascript' src='javascript/menu_js_code.js'/></script>
	<script type='text/javascript' src='javascript/solved_prob.js' ></script>
	
	<!-- /Javascript -->
	
	<!-- CSS Stylesheets -->
	<link rel="stylesheet" type="text/css" href="style_sheet.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="print.css" media="print" />
	<!-- /CSS Stylesheets -->
</head>
<body>
	<!-- Something meaninful -->
	<div id="container"> 
		<!-- Hide when printed -->
		<span class="hide_print">
			<script type="text/javascript" src="http://probabilitycourse.com/javascript/top_page_html_code.js"></script>
		</span>

		<div id="wrapper">
			<div id="content">
				<div class="thinblock hide_print">
					<div class="left">
						&larr;<a href="chapter4/4_2_3_normal.php">previous</a>
					</div>
					<!-- /left div -->
					<div class="right">
						<a href="chapter4/4_2_5_other_distr.php">next</a>&rarr;
					</div>
					<!-- /right div -->
					<br style="clear:both;" />
				</div>
				<!-- /thinblock hide_print div -->
				<hr>
			
				<!-- Section header -->
				<div class="left">
					<h2>4.2.4 Gamma Distribution</h2>
				</div>
				<!-- /Section header div -->
			
				<!-- Video / Print buttons -->
				<div class="right hide_print">
<!-- No video
					<a href="#"><img src="http://probabilitycourse.com/images/video_icon_lg.png" 
							alt="Video Available" 
							title="Video Available" 
							border="0" 
							style="vertical-align: middle;"/></a>
		No Video -->
					<img src="http://probabilitycourse.com/images/print.png" 
							id="printButton"
							width="40" 
							height="40" 
							alt="Printer Friendly" 
							title="Printer Friendly" 
							style="vertical-align: middle;"/>
				</div>
				<!-- /Video and Print buttons -->
				<br style="clear:both;" />
				<hr />
<!--
				<span style="display:none;">
-->
				<span>
				<!-- Section Content -->
				<p>
					The gamma distribution is another widely used distribution. Its importance is largely due to
					its relation to exponential and normal distributions. Here, we will provide an introduction to the
					gamma distribution. In Chapters <a href="#">6</a> and <a href="#">11</a>, we will discuss more properties of the gamma
					random variables. Before introducing the gamma random variable, we need to introduce the
					gamma function.
				</p>
				<p>
					<b>Gamma function:</b> The gamma function [<a href="bibliography.html#wiki-gamma-distr">14</a>], shown by $ \Gamma(x)$, is an extension of the factorial
					function to real (and complex) numbers. Specifically, if $n \in \{1,2,3,...\} $, then
					$$ \Gamma(n) = (n-1)!$$
					More generally, for any positive real number $\alpha$, $\Gamma(\alpha)$ is defined as
					$$ \Gamma(\alpha) = \int_0^\infty x^{\alpha - 1} e^{-x} {\rm d}x, \hspace{20pt} \textrm{for }\alpha&gt;0. $$
				<br />
					Figure 4.9 shows the gamma function for positive real values.
					<div style="width:100%;text-align:center;">
					<img style="display:block;width:300px;margin: 0 auto;"src="../images/chapter4/gamma-function-color.png" />
					Figure 4.9: The Gamma function for some real values of $\alpha$.
					</div>
					<br />
				</p>
				<p>
					Note that for $\alpha=1$, we can write
					$$ 
					\begin{align*}
					\Gamma(1) &#38;= \int_0^\infty e^{-x} dx 
					\\ &#38;= 1. 
					\end{align*}
					$$
					Using the change of variable $x = \lambda y$, we can show the following equation that is often useful when working with
					the gamma distribution:
					$$ \Gamma(\alpha) = \lambda^{\alpha} \int_0^\infty y^{\alpha-1} e^{-\lambda y} dy \hspace{20pt} \textrm{for } \alpha,\lambda &gt; 0.$$
					Also, using integration by parts it can be shown that
					$$ \Gamma(\alpha + 1) = \alpha\Gamma(\alpha), \hspace{20pt} \textrm{for } \alpha &gt; 0.$$
					Note that if $\alpha = n$, where $n$ is a positive integer, the above equation reduces to
					$$ n! = n \cdot (n-1)!.$$
				</p>
			
				<!-- Properties of gamma function -->
				<div style="padding: 15px; border: black 1px solid;">
					<h3 style="font-weight: 400; text-align: center;">
						Properties of the gamma function
					</h3>
					For and positive real number $\alpha$:
					<ol type="1">
						<li style="height:55px"> $\Gamma(\alpha) = \int_0^\infty x^{\alpha - 1} e^{-x} dx$.</li>
						<li style="height:55px"> 
							$\int_0^\infty x^{\alpha - 1} e^{-\lambda x} dx = \frac{\Gamma(\alpha)}{\lambda^{\alpha}}, 
							\hspace{20pt} \textrm{for } \lambda &gt; 0.$
						</li>
						<li style="height:55px"> $\Gamma(\alpha + 1) = \alpha \Gamma(\alpha).$ </li>
						<li style="height:55px"> $\Gamma(n) = (n - 1)!, \textrm{ for } n = 1,2,3,\cdots .$</li>
						<li style="height:55px"> $\Gamma(\frac{1}{2}) = \sqrt{\pi}$.</li>
					</ol>
				</div>
				<!-- /Properties of gamma function -->

				<br /><hr />
				<span class="example">Example </span><br />
				Answer the following questions:
				<ol type="1">
					<li> Find $\Gamma(\frac{7}{2}).$</li>
					<li>
						Find the value of the following integral:
						$$ I = \int_0^\infty x^{6} e^{-5x} dx.$$
					</li>
				</ol>
				<!-- Solution -->
				<div class="solvedprob">
					<ul>
						<li>
							<a><b>Solution</b></a>
							<ul>
								<ol type="1">
									<li> 
										To find $\Gamma(\frac{7}{2}),$ we can write
										$$ 
										 \begin{align}
										 \Gamma(\frac{7}{2}) &#38;= \frac{5}{2} \cdot \Gamma(\frac{5}{2}) \hspace{20pt} \textrm{(using Property 3)}
										 \\ &#38;= \frac{5}{2} \cdot \frac{3}{2} \cdot \Gamma(\frac{3}{2}) \hspace{20pt} \textrm{(using Property 3)}
										 \\ &#38;= \frac{5}{2} \cdot \frac{3}{2} \cdot \frac{1}{2} \cdot \Gamma(\frac{1}{2}) \textrm{(using Property 3)}
										 \\ &#38;= \frac{5}{2} \cdot \frac{3}{2} \cdot \frac{1}{2} \cdot \sqrt{\pi} \hspace{20pt} \textrm{(using Property 5)}
										 \\ &#38;= \frac{15}{8} \sqrt{\pi}.
										 \end{align} 
										$$
									</li>
									<li>
										Using Property 2 with $\alpha = 7$ and $\lambda = 5$, we obtain
										$$ 
											\begin{align*}
											I &#38;= \int_0^\infty x^{6} e^{-5x} dx 
										\\ &#38;= \frac{\Gamma(7)}{5^7} 
										\\ &#38;= \frac{6!}{5^7} \hspace{20pt} \textrm{(using Property 4)} 
										\\ &#38;\approx 0.0092 
										\end{align*}
										$$
									</li>
								</ol>
							</ul>
						</li>
					</ul>
				</div>
				<!-- /Solution -->
				<hr /><br />

				<b>Gamma Distribution:</b><br />
				We now define the gamma distribution by providing its PDF:
				<br />
	
				<div style="padding: 15px; border: black 1px solid">
					A continuous random variable $X$ is said to have a <i>gamma</i> distribution with parameters
					$\alpha &gt; 0 \textrm{ and } \lambda &gt; 0 $, shown as $X \sim Gamma(\alpha,\lambda)$, if its PDF
					is given by
					$$ 
						f_X(x) = \left\{
						\begin{array}{l l}
						\frac{\lambda^{\alpha} x^{\alpha-1} e^{-\lambda x}}{\Gamma(\alpha)} \hspace {5pt} x &gt; 0\\
						0 \hspace{56pt} \textrm{otherwise}
						\end{array}\right.
					$$
				</div>
				<br />
				If we let $\alpha = 1$, we obtain
				$$
					f_X(x) = \left\{
					\begin{array}{l l}
					\lambda e^{-\lambda x} \hspace{20pt} x &gt; 0\\
					0 \hspace{41pt} \textrm{otherwise}
					\end{array}\right.
				$$
				Thus, we conclude $Gamma(1,\lambda) = Exponential(\lambda)$. More generally, if you sum $n$
				independent $Exponential(\lambda)$ random variables, then you will get a $Gamma(n,\lambda)$
				random variable. We will prove this later on using the moment generating function. The gamma
				distribution is also related to the normal distribution as will be discussed later. Figure 4.10 
				shows the PDF of the gamma distribution for several values of $\alpha$. 
				<br>
				<br>
				
				<div style="width:100%;text-align:center;">
										<img style="margin: 0 auto;width:500px; height: auto; display: block;" src="../images/chapter4/gamma-color.png" />
										Figure 4.10: PDF of the gamma distribution for some values of $\alpha$ and $\lambda$.
									</div>


				<br>
				<hr /><br />

				<span class="example">Example </span><br />
				Using the properties of the gamma function, show that the gamma PDF integrates to 1, i.e., show
				that for $\alpha , \lambda &gt; 0$, we have
				$$\int_0^\infty \frac{\lambda^{\alpha}x^{\alpha - 1} e^{-\lambda x}}{\Gamma(\alpha)} dx = 1.$$

				<!-- Solution -->
				<div class="solvedprob">
					<ul>
						<li>
							<a><b>Solution</b></a><br />
							<ul>
								<li>
									We can write
									$$ 
										\begin{align*}
										\int_0^\infty \frac{\lambda^{\alpha} x^{\alpha - 1} e^{-\lambda x}}{\Gamma(\alpha)} dx &#38;=
										\frac{\lambda^{\alpha}}{\Gamma(\alpha)} \int_0^\infty x^{\alpha - 1} e^{-\lambda x} dx\\
										\\ \hspace{20pt} &#38;= \frac{\lambda^{\alpha}}{\Gamma(\alpha)} \cdot \frac{\Gamma(\alpha)}{\lambda^{\alpha}}
										\hspace{20pt} \textrm{(using Property 2 of the gamma function)}\\
										\\ \hspace{0px} &#38;= 1.
										\end{align*}
									$$
									
								</li>
							</ul>
						</li>
					</ul>
				</div>
				<!-- /Solution -->
				
				<hr /><br />
				
				

				In the solved problems section, we calculate the mean and variance for the gamma distribution. In particular,
				we find out that if $X \sim Gamma(\alpha,\lambda)$, then
				$$ EX = \frac{\alpha}{\lambda}, \hspace{20pt} Var(X) = \frac{\alpha}{\lambda^2}.$$
				<!-- /Section Content -->

				<!-- Bottom nav -->
				<div class="thinblock hide_print">
					<div class="left">
						&larr;<a href="chapter4/4_2_3_normal.php">previous</a>
					</div>
					<!-- /left div -->
					<div class="right">
						<a href="chapter4/4_2_5_other_distr.php">next</a>&rarr;
					</div>
					<!-- /right div -->
					<br style="clear:both;" />
				</div>
				<!-- /bottom nav div -->
			</div>
			<!-- /content div -->
				<!-- Sidebar menu -->
				<div id="menu" class="hide_print">
				 <script type="text/javascript" src="javascript/menu_html_code.js"></script>
				</div>
				<!-- /Sidebar menu -->

				<!-- footer -->
				<div id="footer" class="hide_print">
					<script type="text/javascript" src="http://probabilitycourse.com/javascript/footer_html_code.js"></script>
				</div>
				<!-- /footer -->
        </span>
		</div>
		<!-- /wrapper div -->
	</div>
	<!-- /container div -->
</body>
</html>
