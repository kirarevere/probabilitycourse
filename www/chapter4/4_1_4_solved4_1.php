<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="section"	content="4.1.4" />
	<?php include '../Control/autonumber.php'; loadHeaders(47); ?>
	
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
				<div class="left"><a>&larr; </a><a href="chapter4/4_1_3_functions_continuous_var.php">previous</a></div>
    			<div class="right"><a href="chapter4/4_2_1_uniform.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>4.1.4 Continuous Random Variables: Solved Problems</h2></div>
    		<div class="right hide_print">
			<img id="printButton" src="http://probabilitycourse.com/images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></div>
    		<div class="clear"></div>
			
			<span class='problem'>Problem </span><br>
			<p>Let $X$ be a random variable with PDF given by
			\begin{equation}
              \nonumber f_X(x) = \left\{
              \begin{array}{l l}
                cx^2& \quad   |x| \leq 1\\
                0 & \quad \text{otherwise}
              \end{array} \right.
              \end{equation}
			  <ol type="a">
                  <li>Find the constant $c$.</li>
                  <li>Find $EX$ and Var$(X)$.</li>
                  <li>Find $P(X \geq \frac{1}{2})$.</li>
              </ol></p> 
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p><ol type="a">
						 	 <li>To find $c$, we can use  $\int_{-\infty}^{\infty} f_X(u)du=1$:
							 <table align="center">			
                              <tr>
                                <td>$1$</td>
                                <td>$=\int_{-\infty}^{\infty} f_X(u)du$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$= \int_{-1}^{1} cu^2du$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$= \frac{2}{3} c.$</td>
                              </tr>
                              </table><br>
							  Thus, we must have $c=\frac{3}{2}$.
							  </li>
							  <li>To find $EX$, we can write
							  <table align="center">			
                              <tr>
                                <td>$EX$</td>
                                <td>$= \int_{-1}^{1} u f_X(u)du$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$= \frac{3}{2}\int_{-1}^{1} u^3 du$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=0.$</td>
                              </tr>
                              </table><br>
							  In fact, we could have guessed $EX=0$ because the PDF is symmetric around $x=0$. 
							  To find Var$(X)$, we have
							  <table align="center">			
                              <tr>
                                <td>$\textrm{Var}(X)$</td>
                                <td>$=EX^2-(EX)^2=EX^2$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$= \int_{-1}^{1} u^2 f_X(u)du$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$= \frac{3}{2}\int_{-1}^{1} u^4 du$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\frac{3}{5}.$</td>
                              </tr>
                              </table><br>
							  </li>
							  <li>To find $P(X \geq \frac{1}{2})$, we can write
							  $$P(X \geq \frac{1}{2})=\frac{3}{2} \int_{\frac{1}{2}}^{1} x^2dx=\frac{7}{16}.$$
							  </li>
						 </ol></p>						 
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span><br>
			<p>Let $X$ be a continuous random variable with PDF given by
			$$f_X(x)=\frac{1}{2}e^{-|x|}, \hspace{20pt} \textrm{for all }x \in \mathbb{R}.$$
			If $Y=X^2$, find the CDF of $Y$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>First, we note that $R_Y=[0,\infty)$. For $y \in [0,\infty)$, we have
						 <table align="center">			
                          <tr>
                            <td>$F_Y(y)$</td>
                            <td>$=P(Y \leq y)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=P(X^2 \leq y)$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=P(-\sqrt{y} \leq X \leq \sqrt{y})$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\int_{-\sqrt{y}}^{\sqrt{y}} \frac{1}{2}e^{-|x|} dx$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\int_{0}^{\sqrt{y}} e^{-x} dx$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=1-e^{-\sqrt{y}}.$</td>
                          </tr>
                          </table><br>
						  Thus,
						  \begin{equation}
                            \nonumber F_Y(y) = \left\{
                            \begin{array}{l l}
                              1-e^{-\sqrt{y}} & \quad   y \geq 0\\
                              0 & \quad \text{otherwise}
                            \end{array} \right.
                            \end{equation}</p>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span><br>
			<p>Let $X$ be a continuous random variable with PDF
			\begin{equation}
            \nonumber f_X(x) = \left\{
            \begin{array}{l l}
              4x^3 & \quad   0 < x \leq 1\\
              0 & \quad \text{otherwise}
            \end{array} \right.
            \end{equation}
			Find $P(X \leq \frac{2}{3} | X> \frac{1}{3})$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>We have
						 <table align="center">			
                          <tr>
                            <td>$P(X \leq \frac{2}{3} | X > \frac{1}{3})$</td>
                            <td>$=\frac{P(\frac{1}{3} < X \leq \frac{2}{3})}{P(X > \frac{1}{3})}$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=\frac{\int_{\frac{1}{3}}^{\frac{2}{3}} 4x^3 dx}{\int_{\frac{1}{3}}^{1} 4x^3 dx}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\frac{3}{16}.$</td>
                          </tr>
                          </table><br></p>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span><br>
			<p>Let $X$ be a continuous random variable with PDF
			\begin{equation}
            \nonumber f_X(x) = \left\{
            \begin{array}{l l}
              x^2\left(2x+\frac{3}{2}\right) & \quad   0 < x \leq 1\\
              0 & \quad \text{otherwise}
            \end{array} \right.
            \end{equation}
			If $Y=\frac{2}{X}+3$, find Var$(Y)$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>First, note that
						 $$\textrm{Var}(Y)=\textrm{Var}\left(\frac{2}{X}+3\right)=4\textrm{Var}\left(\frac{1}{X}\right), \hspace{15pt} \textrm{using Equation 4.4}$$
						 Thus, it suffices to find Var$(\frac{1}{X})=E[\frac{1}{X^2}]-(E[\frac{1}{X}])^2$. Using LOTUS, we have
						 $$E\left[\frac{1}{X}\right]=\int_{0}^{1}  x\left(2x+\frac{3}{2}\right) dx =\frac{17}{12}$$
						 $$E\left[\frac{1}{X^2}\right]=\int_{0}^{1} \left(2x+\frac{3}{2}\right) dx =\frac{5}{2}.$$
						 Thus, Var$\left(\frac{1}{X}\right)=E[\frac{1}{X^2}]-(E[\frac{1}{X}])^2=\frac{71}{144}$. So, we obtain
						 $$\textrm{Var}(Y)=4\textrm{Var}\left(\frac{1}{X}\right)=\frac{71}{36}.$$</p>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span><br>
			<p>Let $X$ be a <u>positive</u> continuous random variable. Prove that $EX=\int_{0}^{\infty} P(X \geq x)  dx$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>We have
						 $$P(X \geq x)=\int_{x}^{\infty}f_X(t)dt.$$
						 Thus, we need to show that
						 $$\int_{0}^{\infty} \int_{x}^{\infty}f_X(t)dtdx=EX.$$
						 The left hand side is a double integral. In particular, it is the integral of $f_X(t)$ over 
						 the shaded region in Figure 4.4.
						 <figure>
                  				<img src="http://probabilitycourse.com/images/chapter4/Double-Int-EX_b.png" width="400" height="345" alt="" title="" border="0" />
                  				<figcaption>Fig.4.4 - The shaded area shows the region of the double integral of Problem 5.</figcaption>
                		 </figure>
						 We can take the integral with respect to $x$ or $t$. Thus, we can write
						 <table align="center">			
                          <tr>
                            <td>$\int_{0}^{\infty} \int_{x}^{\infty}f_X(t)dtdx$</td>
                            <td>$=\int_{0}^{\infty} \int_{0}^{t}f_X(t)dx dt$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=\int_{0}^{\infty} f_X(t) \left(\int_{0}^{t} 1 dx \right) dt$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\int_{0}^{\infty} tf_X(t) dt=EX \hspace{20pt} \textrm{since $X$ is a positive random variable}.$</td>
                          </tr>
                          </table><br></p>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span><br>
			<p>Let $X \sim Uniform(-\frac{\pi}{2},\pi)$ and $Y=\sin(X)$. Find $f_Y(y)$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>Here $Y=g(X)$, where $g$ is a differentiable function. Although $g$ is not monotone, it can 
						 be divided to a finite number of regions in which it is monotone. Thus, we can use 
						 Equation 4.6. We note that since $R_X=[-\frac{\pi}{2},\pi]$, $R_Y=[-1,1]$. By looking at 
						 the plot of $g(x)=\sin(x)$ over $[-\frac{\pi}{2},\pi]$, we notice that for $y \in (0,1)$ 
						 there are two solutions to $y=g(x)$, while for $y \in (-1,0)$, there is only one solution. 
						 In particular, if $y \in (0,1)$, we have two solutions: $x_1=\arcsin(y)$, and  $x_2=\pi-\arcsin(y)$. 
						 If $y \in (-1,0)$ we have one solution, $x_1=\arcsin(y)$. Thus, for $y \in(-1,0)$, we have
						 <table align="center">			
                          <tr>
                            <td>$f_Y(y)$</td>
                            <td>$= \frac{f_X(x_1)}{|g'(x_1)|}$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$= \frac{f_X(\arcsin(y))}{|\cos(\arcsin(y))|}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$= \frac{\frac{2}{3 \pi}}{\sqrt{1-y^2}}.$</td>
                          </tr>
                          </table><br>
						  For $y \in(0,1)$, we have
						  <table align="center">			
                          <tr>
                            <td>$f_Y(y)$</td>
                            <td>$= \frac{f_X(x_1)}{|g'(x_1)|}+\frac{f_X(x_1)}{|g'(x_1)|}$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$= \frac{f_X(\arcsin(y))}{|\cos(\arcsin(y))|}+\frac{f_X(\pi-\arcsin(y))}{|\cos(\pi-\arcsin(y))|}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$= \frac{\frac{2}{3 \pi}}{\sqrt{1-y^2}}+\frac{\frac{2}{3 \pi}}{\sqrt{1-y^2}}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$= \frac{4}{3 \pi \sqrt{1-y^2}}.$</td>
                          </tr>
                          </table><br>
						  To summarize, we can write
                          \begin{equation}
                          \nonumber f_Y(y) = \left\{
                          \begin{array}{l l}
                            \frac{2}{3 \pi \sqrt{1-y^2}} & \quad   -1 < y < 0\\
                            \frac{4}{3 \pi \sqrt{1-y^2}} & \quad   0 < y < 1\\
                            0 &   \quad \text{otherwise}
                          \end{array} \right.
                          \end{equation}</p>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			
			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter4/4_1_3_functions_continuous_var.php">previous</a></div>
    			<div class="right"><a href="chapter4/4_2_1_uniform.php">next</a><a> &rarr;</a></div>
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
