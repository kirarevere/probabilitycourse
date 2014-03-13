<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="section"	content="4.2.6" />
	<?php include '../Control/autonumber.php'; loadHeaders(52); ?>
	
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
				<div class="left"><a>&larr; </a><a href="chapter4/4_2_5_other_distr.php">previous</a></div>
    			<div class="right"><a href="chapter4/4_3_1_mixed.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>4.2.6 Special Continuous Distributions: <br>Solved Problems</h2></div>
    		<div class="right hide_print">
			<a href=""><img src="http://probabilitycourse.com/images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img id="printButton" src="http://probabilitycourse.com/images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></div>
    		<div class="clear"></div>
			
			<span class='problem'>Problem </span><br>
			<p>Suppose the number of customers arriving at a store obeys a Poisson distribution with average of $\lambda$ 
			customers per unit time. That is, if $Y$ is the number of customers arriving in an interval of length $t$, 
			then $Y \sim Poisson (\lambda t)$. Suppose that the store opens at time $t=0$. Let $X$ be the arrival 
			time of the first customer. Show that $X \sim Exponential(\lambda)$.</p>

			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>We first find $P(X > t)$:
						 <table align="center">			
                          <tr>
                            <td>$P(X > t)$</td>
                            <td>$=P(\textrm{No arrival in }[0,t])$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=e^{-\lambda t}\frac{(\lambda t)^0}{0!}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=e^{-\lambda t}$</td>
                          </tr>
                          </table><br>
						  Thus, the CDF of $X$ for $x>0$ is given by
						  $$F_X(x)=1-P(X>x)=1-e^{-\lambda x}$$
						  which is the CDF of $Exponential(\lambda)$. Note that by the same argument, the time between 
						  the first and second customer has also $Exponential(\lambda)$ distribution. In general, 
						  the time between the $k$'th and $k+1$'th customer is $Exponential(\lambda)$.</p>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span> (Exponential as the limit of Geometric)<br>
			<p>Let $Y \sim Geometric(p)$, where $p=\lambda \Delta$. Define $X=Y \Delta$, where $\lambda, \Delta>0$. 
			Prove that for any $x \in (0,\infty)$, we have
			$$\lim_{\Delta \rightarrow 0} F_X(x)=1-e^{-\lambda x}$$</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>If $Y \sim Geometric(p)$ and $q=1-p$, then
						 <table align="center">			
                          <tr>
                            <td>$P(Y \leq n)$</td>
                            <td>$=\sum_{k=1}^{n} pq^{k-1}$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=p. \frac{1-q^n}{1-q}=1-(1-p)^n$</td>
                          </tr>
                          </table><br>
						  Then for any $y \in (0,\infty)$, we can write
						  $$P(Y \leq y) =1-(1-p)^{\lfloor y\rfloor}$$
						  where $\lfloor y\rfloor$ is the largest integer less than or equal to $y$. 
						  Now, since $X=Y \Delta$, we have
						  <table align="center">			
                          <tr>
                            <td>$F_X(x)$</td>
                            <td>$=P(X \leq x)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=P\left(Y \leq \frac{x}{\Delta}\right)$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=1-(1-p)^{\lfloor \frac{x}{\Delta} \rfloor}=1-(1-\lambda \Delta)^{\lfloor \frac{x}{\Delta} \rfloor}$</td>
                          </tr>
                          </table><br>
						  Now, we have
						  <table align="center">			
                          <tr>
                            <td>$\lim_{\Delta \rightarrow 0} F_X(x)$</td>
                            <td>$=\lim_{\Delta \rightarrow 0} 1-(1-\lambda \Delta)^{\lfloor \frac{x}{\Delta} \rfloor}$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=1-\lim_{\Delta \rightarrow 0} (1-\lambda \Delta)^{\lfloor \frac{x}{\Delta} \rfloor}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=1-e^{-\lambda x}$</td>
                          </tr>
                          </table><br>
						  The last equality holds because 
						  $\frac{x}{\Delta}-1 \leq \lfloor \frac{x}{\Delta} \rfloor \leq \frac{x}{\Delta}$, and we know
						  $$\lim_{\Delta \rightarrow 0^{+}} (1-\lambda \Delta)^{\frac{1}{\Delta}}=e^{-\lambda}$$</p>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span><br>
			<p>Let $U \sim Uniform(0,1)$ and $X=-\ln (1-U)$. Show that $X \sim Exponential(1)$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>First note that since $R_U=(0,1)$,  $R_X=(0,\infty)$. We will find the CDF of $X$. 
						 For $x \in(0,\infty)$, we have
						 <table align="center">			
                          <tr>
                            <td>$F_X(x)$</td>
                            <td>$=P(X \leq x)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=P(-\ln (1-U) \leq x)$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=P\left(\frac{1}{1-U} \leq e^x\right)$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=P(U \leq 1-e^{-x})=1-e^{-x}$</td>
                          </tr>
                          </table><br>
						  which is the CDF of an $Exponential(1)$ random variable.</p>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			
			<span class='problem'>Problem </span><br>
			<p>Let $X \sim N(2,4)$ and $Y=3-2X$.
			<ol type="a">
                <li>Find $P(X > 1)$.</li>
                <li>Find $P(-2 < Y < 1)$.</li>
                <li>Find $P(X > 2 |Y < 1)$.</li>
            </ol></p> 
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p><ol type="a">
						 	 <li>Find $P(X > 1)$: We have $\mu_X=2$ and $\sigma_X=2$. Thus,
							 <table align="center">			
                              <tr>
                                <td>$P(X > 1)$</td>
                                <td>$=1-\Phi\left(\frac{1-2}{2}\right)$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=1-\Phi(-0.5)=\Phi(0.5)=0.6915$</td>
                              </tr>
                              </table><br>
							 </li>
							 <li>Find $P(-2 < Y < 1)$: Since $Y=3-2X$, using Theorem 4.3, we have $Y \sim N(-1,16)$. 
							 Therefore,
							 <table align="center">			
                              <tr>
                                <td>$P(-2 < Y < 1)$</td>
                                <td>$=\Phi\left(\frac{1-(-1)}{4}\right)-\Phi\left(\frac{(-2)-(-1)}{4}\right)$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=\Phi(0.5)-\Phi(-0.25)=0.29$</td>
                              </tr>
                              </table><br>
                  			 </li>
							 <li>Find $P(X > 2 |Y < 1)$:
							 <table align="center">			
                              <tr>
                                <td>$P(X > 2 |Y < 1)$</td>
                                <td>$=P(X > 2 |3-2X < 1)$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=P(X > 2 |X > 1)$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\frac{P(X > 2,X > 1)}{P(X > 1)}$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\frac{P(X > 2)}{P(X > 1)}$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\frac{1-\Phi(\frac{2-1}{2})}{1-\Phi(\frac{1-1}{2})}$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\frac{1-\Phi(0.5)}{1-\Phi(0)}$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$\approx 2(1-0.6915) \approx 0.62$</td>
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
			<p>Let $X \sim N(0,\sigma^2)$. Find $E|X|$</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>We can write $X=\sigma Z$, where $Z \sim N(0,1)$. Thus, $E|X|=\sigma E|Z|$. We have
						 <table align="center">			
                          <tr>
                            <td>$E|Z|$</td>
                            <td>$=\frac{1}{\sqrt{2\pi}}\int_{-\infty}^{\infty} |t| e^{-\frac{t^2}{2}}dt$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=\frac{2}{\sqrt{2\pi}}\int_{0}^{\infty} |t| e^{-\frac{t^2}{2}}dt \hspace{20pt}(\textrm{integral of an even function})$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\sqrt{\frac{2}{\pi}}\int_{0}^{\infty} t e^{-\frac{t^2}{2}}dt$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\sqrt{\frac{2}{\pi}}\bigg[-e^{-\frac{t^2}{2}} \bigg]_{0}^{\infty}=\sqrt{\frac{2}{\pi}}$</td>
                          </tr>
                          </table><br>
						  Thus, we conclude $E|X|=\sigma E|Z|=\sigma\sqrt{\frac{2}{\pi}}$.</p>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span><br>
			<p>Show that the constant in the normal distribution must be $\frac{1}{\sqrt{2 \pi}}$. That is, show that
			$$I=\int_{-\infty}^{\infty} e^{-\frac{x^2}{2}}dx=\sqrt{2 \pi}$$
			<i>Hint:</i> Write $I^2$ as a double integral in polar coordinates.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>Let $I=\int_{-\infty}^{\infty} e^{-\frac{x^2}{2}}dx$. We show that $I^2=2\pi$. To see this, note
						 <table align="center">			
                          <tr>
                            <td>$I^2$</td>
                            <td>$= \int_{-\infty}^{\infty} e^{-\frac{x^2}{2}}dx \int_{-\infty}^{\infty} e^{-\frac{y^2}{2}}dy$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=\int_{-\infty}^{\infty} \int_{-\infty}^{\infty} e^{-\frac{x^2+y^2}{2}}dxdy$</td>
                          </tr>
                          </table><br>
						  To evaluate this double integral we can switch to polar coordinates. This can be done by change 
						  of variables $x=r \cos \theta, y=r \sin \theta$, and $dx dy=rdrd\theta$. In particular, we have
						  <table align="center">			
                          <tr>
                            <td>$I^2$</td>
                            <td>$=\int_{-\infty}^{\infty} \int_{-\infty}^{\infty} e^{-\frac{x^2+y^2}{2}}dxdy$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=\int_{0}^{\infty} \int_{0}^{2\pi} e^{-\frac{r^2}{2}}r d\theta dr$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=2 \pi \int_{0}^{\infty} r e^{-\frac{r^2}{2}} dr$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=2 \pi \bigg[-e^{-\frac{r^2}{2}}\bigg]_{0}^{\infty}=2 \pi$</td>
                          </tr>
                          </table><br></p>  
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span><br>
			<p>Let $Z \sim N(0,1)$. Prove for all $x \geq 0$,
			$$\frac{1}{\sqrt{2\pi}} \frac{x}{x^2+1} e^{-\frac{x^2}{2}} \leq P(Z \geq x) \leq \frac{1}{\sqrt{2\pi}} \frac{1}{x} e^{-\frac{x^2}{2}}$$</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>To show the upper bound, we can write
						 <table align="center">			
                          <tr>
                            <td>$P(Z \geq x)$</td>
                            <td>$= \frac{1}{\sqrt{2 \pi}}  \int_{x}^{\infty}e^{-\frac{u^2}{2}} du$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$\leq \frac{1}{\sqrt{2 \pi}}  \int_{x}^{\infty} \frac{u}{x} e^{-\frac{u^2}{2}} du \hspace{10pt} (\textrm{since $u \geq x > 0$})$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$= \frac{1}{\sqrt{2 \pi}}\frac{1}{x}  \left[-e^{-\frac{u^2}{2}}\right]^{\infty}_{x}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\frac{1}{\sqrt{2\pi}} \frac{1}{x} e^{-\frac{x^2}{2}}$</td>
                          </tr>
                          </table><br>
						  To show the lower bound, let $Q(x)=P(Z \geq x)$, and
						  $$h(x)=Q(x)-\frac{1}{\sqrt{2\pi}} \frac{x}{x^2+1} e^{-\frac{x^2}{2}} \hspace{10pt} \textrm{ for all }x \geq 0$$
						  It suffices to show that
						  $$h(x)\geq 0 \hspace{10pt} \textrm{ for all }x \geq 0$$
						  To see this, note that the function $h$ has the following properties
						  <ol type="1">
                              <li>$h(0)=\frac{1}{2}$</li>
                              <li>$\lim \limits_{x \rightarrow \infty} h(x)=0$</li>
                              <li>$h'(x)=-\frac{2}{\sqrt{2\pi}}\left( \frac{e^{-\frac{x^2}{2}}}{(x^2+1)}\right) < 0$  for all $x \geq 0$</li>
                          </ol>
						  Therefore, $h(x)$ is a strictly decreasing function that starts at $h(0)=\frac{1}{2}$ and 
						  decreases as $x$ increases. It approaches $0$ as $x$ goes to infinity. We conclude that 
						  $h(x) \geq 0$ for all $x \geq 0$.</p>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr />

			<!-- Problem Begin -->
			<span class='problem'>Problem </span><br />
			<p>
			Let $X \sim Gamma(\alpha,\lambda)$, where $\alpha, \lambda \gt 0$. Find $EX$, and $Var(X)$.
			</p>
			<div class='solvedprob'>
				<ul>
					<li><a><b>Solution</b></a>
					<ul>
						<li>
							<p>
							To find $EX$ we can write
							$$
							\begin{align*}
							EX 	&#38;= \int_0^\infty x f_X(x) dx \\
								 	&#38;= \int_0^\infty x \cdot \frac{\lambda^{\alpha}}{\Gamma{\alpha}} x^{\alpha - 1} e^{-\lambda x} {\rm d}x 		\\
								 	&#38;= \frac{\lambda^{\alpha}}{\Gamma{\alpha}} \int_0^{\infty} x \cdot x^{\alpha - 1} e^{-\lambda x} {\rm d}x 	\\
								 	&#38;= \frac{\lambda^{\alpha}}{\Gamma{\alpha}} \int_0^{\infty} x^{\alpha} e^{-\lambda x} {\rm d}x								\\
									&#38;= \frac{\lambda^{\alpha}}{\Gamma{\alpha}} \frac{\Gamma{\alpha + 1}}{\lambda{\alpha + 1}}
							\end{align*}
							$$
									&#38;\textrm{(using property 2 of the gamma function)}	\\
									&#38;= \frac{\lambda{\alpha}}{\Gamma{\alpha}} {\lambda \Gamma{\alpha}}
									&#38;\textrm{(using property 3 of the gamma function)}	\\
									&#38;= \frac{\alpha}{\lambda}.	
							\end{align*}
							$$
							</p>
						</li>
					</ul></li>
				</ul>	
			</div>
			<!-- Problem End -->

			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter4/4_2_5_other_distr.php">previous</a></div>
    			<div class="right"><a href="chapter4/4_3_1_mixed.php">next</a><a> &rarr;</a></div>
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
