<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="section"	content="4.3.1" />
	<?php include '../Control/autonumber.php'; loadHeaders(53); ?>
	
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
				<div class="left"><a>&larr; </a><a href="chapter4/4_2_6_solved4_2.php">previous</a></div>
    			<div class="right"><a href="chapter4/4_3_2_delta_function.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>4.3.1 Mixed Random Variables</h2></div>
    		<div class="right hide_print">
			<a href=""><img src="http://probabilitycourse.com/images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img id="printButton" src="http://probabilitycourse.com/images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></div>
    		<div class="clear"></div>
			
			<p>Here we discuss <i>mixed</i> random variables. These are random variables that are neither discrete nor 
			continuous, but are mixture of both. In particular, a mixed random variable has a continuous and a discrete 
			part. Thus, we can use our tools from previous chapters to analyze them. In this section we provide some 
			examples on how we can do this. Then in section 4.3.2, we revisit the concept of mixed random variables 
			using the <i>delta "function"</i>.</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>Let $X$ be a continuous random variable with the following PDF:
            \begin{equation}
             \nonumber f_X(x) = \left\{
              \begin{array}{l l}
                2x & \quad  0 \leq x \leq 1\\
                0 & \quad \text{otherwise}
              \end{array} \right.
            \end{equation}
            Let also
            \begin{equation}
             \nonumber Y=g(X) = \left\{
              \begin{array}{l l}
                X & \quad  0 \leq X \leq \frac{1}{2}\\
                \frac{1}{2} & \quad  X>\frac{1}{2}
              \end{array} \right.
            \end{equation}
            Find the CDF of $Y$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>First we note that $R_X=[0,1]$. For $x \in [0,1]$, $0 \leq g(x) \leq \frac{1}{2}$. 
						 Thus, $R_Y=[0,\frac{1}{2}]$, and therefore
						 $$F_Y(y)=0, \hspace{20pt} \textrm{ for } y < 0$$
						 $$F_Y(y)=1, \hspace{20pt}  \textrm{ for } y > \frac{1}{2}.$$
						 Now note that
						 <table align="center">			
                          <tr>
                            <td>$P\left(Y=\frac{1}{2}\right)$</td>
                            <td>$=P\left(X>\frac{1}{2}\right)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=\int_{\frac{1}{2}}^{1} 2x dx=\frac{3}{4}.$</td>
                          </tr>
                          </table><br>
						  Also, for $0 < y < \frac{1}{2}$,
						  <table align="center">			
                          <tr>
                            <td>$F_Y(y)$</td>
                            <td>$=P(Y \leq y)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=P(X \leq y)$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\int_{0}^{y} 2x dx$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=y^2.$</td>
                          </tr>
                          </table><br>
						  Thus, the CDF of $Y$ is given by
                          \begin{equation}
                           \nonumber F_Y(y) = \left\{
                            \begin{array}{l l}
                              1 & \quad  y \geq \frac{1}{2}\\
                              y^2 & \quad 0 \leq y < \frac{1}{2}\\
                              0 & \quad \text{otherwise}
                            \end{array} \right.
                          \end{equation}
						  Figure 4.9 shows the CDF of $Y$. We note that the CDF is not continuous, so $Y$ is not a 
						  continuous random variable. On the other hand, the CDF is not in the staircase form, so it 
						  is not a discrete random variable either. It is indeed a <i>mixed</i> random variable. 
						  There is a jump at $y=\frac{1}{2}$, and the amount of jump is $1-\frac{1}{4}=\frac{3}{4}$, 
						  which is the probability that $Y=\frac{1}{2}$. The CDF is continuous at other points.</p>
						  <figure>
                  				<img src="http://probabilitycourse.com/images/chapter4/CDF-Mixed_b.png" width="400" height="341" alt="Figure" title="Figure" border="0" />
                  				<figcaption>Fig.4.9 - CDF of a Mixed random variable, Example 4.12.</figcaption>
                		  </figure>
						  <p>The CDF of $Y$ has a continuous part and a discrete part. In particular, we can write
						  $$F_Y(y)=C(y)+D(y)$$
						  where $C(y)$ is the continuous part of $F_Y(y)$, i.e.,
						  \begin{equation}
                           \nonumber C(y) = \left\{
                            \begin{array}{l l}
                              \frac{1}{4} & \quad  y \geq \frac{1}{2}\\
                              y^2 & \quad 0 \leq y < \frac{1}{2}\\
                              0 & \quad y < 0
                            \end{array} \right.
                          \end{equation}
						  
                          The discrete part of $F_Y(y)$ is $D(y)$, given by                          
                          \begin{equation}
                           \nonumber D(y) = \left\{
                            \begin{array}{l l}
                              \frac{3}{4} & \quad  y \geq \frac{1}{2}\\
                              0 & \quad y < \frac{1}{2}
                            \end{array} \right.
                          \end{equation}</p>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<p>In general, the CDF of a mixed random variable $Y$ can be written as the sum of a continuous 
			function and a staircase function:
			$$F_Y(y)=C(y)+D(y).$$
			We differentiate the continuous part of the CDF. In particular, let's define
			$$c(y)=\frac{dC(y)}{dy}, \textrm{ wherever }C(y) \textrm{ is differentiable.}$$
			Note that this is not a valid PDF as it does not integrate to one. Also, 
			let $\{y_1,y_2,y_3,...\}$ be the set of jump points of $D(y)$, i.e., the points for which $P(Y=y_k)>0$. 
			We then have
			$$\int_{-\infty}^{\infty} c(y) dy+ \sum_{y_k} P(Y=y_k)=1.$$
			The expected value of $Y$ can be obtained as
			$$EY=\int_{-\infty}^{\infty} yc(y) dy+ \sum_{y_k} y_k P(Y=y_k).$$</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>Let $Y$ be the mixed random variable defined in Example 4.12.
			<ol type="a">
                <li>Find $P(\frac{1}{4} \leq Y \leq \frac{3}{8})$.</li>
                <li>Find $P(Y \geq \frac{1}{4})$.</li>
                <li>Find $EY$.</li>
            </ol></p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>Since we have the CDF of $Y$, we can find the probability that $Y$ is in any given interval. 
						 We should pay special attention if the interval includes any jump points.
						 <ol type="a">
						 	 <li>Find $P(\frac{1}{4} \leq Y \leq \frac{3}{8})$: We can write
							 <table align="center">			
                              <tr>
                                <td>$P\left(\frac{1}{4} \leq Y \leq \frac{3}{8}\right)$</td>
                                <td>$=F_Y\left(\frac{3}{8}\right)-F_Y\left(\frac{1}{4}\right)+P\left(Y=\frac{1}{4}\right)$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=\left(\frac{3}{8}\right)^2-\left(\frac{1}{4}\right)^2+0=\frac{5}{64}.$</td>
                              </tr>
                              </table><br></li>
							  <li>Find $P(Y \geq \frac{1}{4})$: We have
							  <table align="center">			
                              <tr>
                                <td>$P\left(Y \geq \frac{1}{4}\right)$</td>
                                <td>$=1-F_Y\left(\frac{1}{4}\right)+P\left(Y=\frac{1}{4}\right)$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=1-\left(\frac{1}{4}\right)^2=\frac{15}{16}.$</td>
                              </tr>
                              </table><br></li>
							  <li>Find $EY$: Here, we can differentiate the continuous part of the CDF to obtain
							  \begin{equation}
                              \nonumber  c(y)=\frac{dC(y)}{dy}= \left\{
                              \begin{array}{l l}
                                2y & \quad  0 \leq y \leq \frac{1}{2}\\
                                0 & \quad \textrm{otherwise}
                              \end{array} \right.
                              \end{equation}
							  So, we can find $EY$ as
							  <table align="center">			
                              <tr>
                                <td>$EY$</td>
                                <td>$=\int_{0}^{\frac{1}{2}}y (2y) dy+ \frac{1}{2} P\left(Y=\frac{1}{2}\right)$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=\frac{1}{12}+\frac{3}{8}=\frac{11}{24}.$</td>
                              </tr>
                              </table><br>
							  </li>
						 </ol></p> 
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>

			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter4/4_2_6_solved4_2.php">previous</a></div>
    			<div class="right"><a href="chapter4/4_3_2_delta_function.php">next</a><a> &rarr;</a></div>
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
