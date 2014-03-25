<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="section"	content="4.1.3" />
	<?php include '../Control/autonumber.php'; loadHeaders(46); ?>
	
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

	<title>Functions of Continuous Random Variables </title>
	<meta name="description" content="Examples of functions of continuous random variables" />

</head><body>
	<div id="container">
		<span class="hide_print">
			<script type="text/javascript" src="http://probabilitycourse.com/javascript/top_page_html_code.js"></script>
		</span>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter4/4_1_2_expected_val_variance.php">previous</a></div>
    			<div class="right"><a href="chapter4/4_1_4_solved4_1.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>4.1.3 Functions of Continuous Random Variables</h2></div>
    		<div class="right hide_print">
			<a href="http://probabilitycourse.com/videos/chapter4/video4_5.html"><img src="http://probabilitycourse.com/images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img id="printButton" src="http://probabilitycourse.com/images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></a></div>
    		<div class="clear"></div>
			
			<p>If $X$ is a continuous random variable and $Y=g(X)$ is a function of $X$, then $Y$ itself is a random 
			variable. Thus, we should be able to find the CDF and PDF of $Y$.  It is usually more straightforward 
			to start from the CDF and then to find the PDF by taking the derivative of the CDF. Note that before 
			differentiating the CDF, we should check that the CDF is continuous. As we will see later, the function 
			of a continuous random variable might be a non-continuous random variable. Let's look at an example.</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>Let $X$ be a $uniform(0,1)$ random variable, and let $Y=e^X$.
			<ol type="a">
                <li>Find CDF of $Y$.</li>
                <li>Find PDF of $Y$.</li>
                <li>Find $EY$.</li>
            </ol></p> 
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 First, note that we already know the CDF and PDF of $X$. In particular,
						 \begin{equation} %\label{eq:CDF-uniform}
                            \nonumber F_X(x)  = \left\{
                            \begin{array}{l l}
                              0 & \quad \textrm{for } x < 0 \\
                              x & \quad \textrm{for }0 \leq x \leq 1\\
                              1 & \quad \textrm{for } x > 1
                            \end{array} \right.
                          \end{equation}
						  It is a good idea to think about the range of $Y$ before finding the distribution. Since 
						  $e^x$ is an increasing function of $x$ and $R_X=[0,1]$, we conclude that $R_Y=[1,e]$. 
						  So we immediately know that
						  $$F_Y(y)=P(Y \leq y)=0, \hspace{20pt} \textrm{for } y < 1$$
						  $$F_Y(y)=P(Y \leq y)=1, \hspace{20pt} \textrm{for } y \geq e.$$
						  <ol type="a">
						  	  <li>To find $F_Y(y)$ for $y \in[1,e]$, we can write<br><br>
							  <table align="center">			
                              <tr>
                                <td>$F_Y(y)$</td>
                                <td>$=P(Y \leq y)$</td>
								<td></td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=P(e^X \leq y)$</td>
								<td></td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=P(X \leq \ln y)$</td>
								<td>$\textrm{since $e^x$ is an increasing function}$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=F_X(\ln y)=\ln y \hspace{30pt}$</td>
								<td>$\textrm{since $0 \leq \ln y \leq 1$.}$</td>
                              </tr>
                              </table><br>
							  To summarize
							  \begin{equation}
                                \nonumber F_Y(y)  = \left\{
                                \begin{array}{l l}
                                  0 & \quad \textrm{for } y < 1 \\
                                  \ln y & \quad \textrm{for }1 \leq y < e\\
                                  1 & \quad \textrm{for } y \geq e
                                \end{array} \right.
                              \end{equation}
							  </li>
							  <li>The above CDF is a continuous function, so we can obtain the PDF of $Y$ by taking 
							  its derivative. We have
							  \begin{equation}
                                \nonumber f_Y(y)=F'_Y(y)  = \left\{
                                \begin{array}{l l}
                                  \frac{1}{y} & \quad \textrm{for }1 \leq y \leq e\\
                                  0 & \quad \textrm{otherwise}
                                \end{array} \right.
                              \end{equation}
							  Note that the CDF is not technically differentiable at points $1$ and $e$, but as we 
							  mentioned earlier we do not worry about this since this is a continuous random variable 
							  and changing the PDF at a finite number of points does not change probabilities.
							  </li><br>
							  <li>To find the $EY$, we can directly apply LOTUS,
							  <table align="center">			
                              <tr>
                                <td>$E[Y]=E[e^X]$</td>
                                <td>$=\int_{-\infty}^{\infty} e^x f_X(x) dx$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=\int_{0}^{1} e^x dx$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=e-1.$</td>
                              </tr>
                              </table><br>
							  For this problem, we could also find $EY$ using the PDF of $Y$,
							  <table align="center">			
                              <tr>
                                <td>$E[Y]$</td>
                                <td>$=\int_{-\infty}^{\infty} y f_Y(y) dy$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=\int_{1}^{e} y \frac{1}{y} dy$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=e-1.$</td>
                              </tr>
                              </table><br>
							  Note that since we have already found the PDF of $Y$ it did not matter which method we used to 
							  find $E[Y]$. However, if the problem only asked for $E[Y]$ without asking for the PDF of 
							  $Y$, then using LOTUS would be much easier.
							  </li>
						  </ol> 
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='example'>Example </span><br>
			<p>Let $X \sim Uniform(-1,1)$ and $Y=X^2$. Find the CDF and PDF of $Y$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 First, we note that $R_Y=[0,1]$. As usual, we start with the CDF.  For $y \in [0,1]$, we have
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
                            <td>$= \frac{\sqrt{y}-(-\sqrt{y})}{1-(-1)} \hspace{80pt} \textrm{since } X \sim Uniform(-1,1)$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$= \sqrt{y}.$</td>
                          </tr>
                          </table><br>
						  Thus, the CDF of $Y$ is given by
						  \begin{equation}
                            \nonumber F_Y(y)= \left\{
                            \begin{array}{l l}
                              0 & \quad \textrm{for } y < 0\\
                              \sqrt{y} & \quad \textrm{for }0 \leq y \leq 1\\
                              1 & \textrm{for } y > 1
                            \end{array} \right.
                          \end{equation}
						  Note that the CDF is a continuous function of $Y$, so $Y$ is a continuous random variable. 
						  Thus, we can find the PDF of $Y$ by differentiating $F_Y(y)$,
						  \begin{equation}
                            \nonumber f_Y(y)=F'_Y(y)  = \left\{
                            \begin{array}{l l}
                              \frac{1}{2\sqrt{y}} & \quad \textrm{for }0 \leq y \leq 1\\
                              0 & \quad \textrm{otherwise}
                            \end{array} \right.
                          \end{equation}
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<b><font size="3">The Method of Transformations</font></b><br>
			<p>So far, we have discussed how we can find the distribution of a function of a continuous random 
			variable starting from finding the CDF. If we are interested in finding the PDF of $Y=g(X)$, and 
			the function $g$ satisfies some properties, it might be easier to use a method called the method of 
			transformations. Let's start with the case where $g$ is a function satisfying the following properties:
			<ul>
                <li>$g(x)$ is differentiable;</li>
                <li>$g(x)$ is a strictly increasing function, that is, if $x_1 < x_2$, then $g(x_1) < g(x_2)$.</li>
            </ul>
			Now, let $X$ be a continuous random variable and $Y=g(X)$. We will show that you can directly find 
			the PDF of $Y$ using the following formula.
			\begin{equation}
              \nonumber f_Y(y) = \left\{
              \begin{array}{l l}
                \frac{f_X(x_1)}{g'(x_1)}=f_X(x_1).  \frac{dx_1}{dy}  & \quad \textrm{where } g(x_1)=y\\
                0 & \quad \textrm{if }g(x)=y \textrm{ does not have a solution}
              \end{array} \right.
            \end{equation}
			Note that since $g$ is strictly increasing, its inverse function $g^{-1}$ is well defined. That is, 
			for each $y \in R_Y$, there exists a unique $x_1$ such that $g(x_1)=y$. We can write $x_1=g^{-1}(y)$.
			<table align="center">			
            <tr>
              <td>$F_Y(y)$</td>
              <td>$=P(Y \leq y)$</td>
            </tr>
            <tr>
              <td></td>
              <td>$=P(g(X) \leq y)$</td>
            </tr>
			<tr>
              <td></td>
              <td>$=P(X < g^{-1}(y)) \hspace{30pt} \textrm{ since $g$ is strictly increasing}$</td>
            </tr>
			<tr>
              <td></td>
              <td>$=F_X(g^{-1}(y)).$</td>
            </tr>
            </table><br>
			To find the PDF of $Y$, we differentiate
			<table align="center">			
            <tr>
              <td>$f_Y(y)$</td>
              <td>$=\frac{d}{dy} F_X(x_1) \hspace{60pt}$</td>
			  <td>$\textrm{ where } g(x_1)=y$</td>
            </tr>
            <tr>
              <td></td>
              <td>$=\frac{dx_1}{dy} \cdot F'_X(x_1)$</td>
			  <td></td>
            </tr>
			<tr>
              <td></td>
              <td>$=f_X(x_1) \frac{dx_1}{dy}$</td>
			  <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$=\frac{f_X(x_1)}{g'(x_1)}$</td>
			  <td>$\textrm{since } \frac{dx}{dy}=\frac{1}{\frac{dy}{dx}}.$</td>
            </tr>
            </table><br>
			We can repeat the same argument for the case where $g$ is strictly decreasing. In that case, $g'(x_1)$ will 
			be negative, so we need to use $|g'(x_1)|$. Thus, we can state the following theorem for a strictly 
			monotonic function. (A function $g: \mathbb{R}\rightarrow \mathbb{R}$ is called strictly monotonic if it 
			is strictly increasing or strictly decreasing.)</p>
			
			<div style="padding: 15px; border: black 1px solid">
			<span class='theorem'>Theorem </span><br>
			Suppose that $X$ is a continuous random variable and $g: \mathbb{R}\rightarrow \mathbb{R}$ is a strictly 
			monotonic differentiable function. Let $Y=g(X)$. Then the PDF of $Y$ is given by
			\begin{equation}
               \nonumber f_Y(y)= \left\{
              \begin{array}{l l}
                \frac{f_X(x_1)}{|g'(x_1)|}=f_X(x_1).  |\frac{dx_1}{dy}|  & \quad \textrm{where } g(x_1)=y\\
                0 & \quad \textrm{if }g(x)=y \textrm{ does not have a solution}
              \end{array} \right.
			  \hspace{10pt} (4.5)
            \end{equation}
			</div><br>
			
			<p>To see how to use the formula, let's look at an example.</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>Let $X$ be a continuous random variable with PDF
			\begin{equation}
              \nonumber f_X(x) = \left\{
                \begin{array}{l l}
                  4x^3& \quad   0 < x \leq 1\\
                  0 & \quad \text{otherwise}
                \end{array} \right.
              \end{equation}
			 and let $Y=\frac{1}{X}$. Find $f_Y(y)$.</p> 
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 First note that $R_Y=[1,\infty)$. Also, note that $g(x)$ is a strictly decreasing and 
						 differentiable function on $(0,1]$, so we may use Equation 4.5. We have $g'(x)=-\frac{1}{x^2}$. 
						 For any $y \in [1,\infty)$, $x_1=g^{-1}(y)=\frac{1}{y}$. So, for $y \in [1,\infty)$
						 <table align="center">			
                          <tr>
                            <td>$f_Y(y)$</td>
                            <td>$=\frac{f_X(x_1)}{|g'(x_1)|}$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$= \frac{4 x_1^3}{|-\frac{1}{x_1^2}|}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$= 4x_1^5$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\frac{4}{y^5}.$</td>
                          </tr>
                          </table><br>
						  Thus, we conclude
                          \begin{equation}
                          \nonumber f_Y(y) = \left\{
                            \begin{array}{l l}
                              \frac{4}{y^5}& \quad   y \geq 1\\
                              0 & \quad \text{otherwise}
                            \end{array} \right.
                          \end{equation}
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			Theorem 4.1 can be extended to a more general case. In particular, if $g$ is not monotonic, we can usually 
			divide it into a finite number of monotonic differentiable functions. Figure 4.3 shows a function $g$ 
			that has been divided into monotonic parts. We may state a more general form of Theorem 4.1.
			
			<figure>
  					<img src="http://probabilitycourse.com/images/chapter4/Function-Partion_b.png" width="400" height="311" alt="Figure" title="Figure" border="0" />
  					<figcaption>Fig.4.3 - Partitioning a function to monotone parts.</figcaption>
			</figure>
			
			<div style="padding: 15px; border: black 1px solid">
			<span class='theorem'>Theorem </span><br>
			Consider a continuous random variable $X$ with domain $R_X$, and let $Y=g(X)$. Suppose that we can 
			partition $R_X$ into a finite number of intervals such that $g(x)$ is strictly monotone and differentiable 
			on each partition. Then the PDF of $Y$ is given by
			$$\hspace{40pt} f_Y(y)= \sum_{i=1}^{n} \frac{f_X(x_i)}{|g'(x_i)|}= \sum_{i=1}^{n} f_X(x_i).  
			\left|\frac{dx_i}{dy}\right| \hspace{40pt} (4.6)$$
			where $x_1, x_2,...,x_n$ are real solutions to $g(x)=y$.
			</div><br>
			
			<p>Let us look at an example to see how we can use Theorem 4.2.</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>Let $X$ be a continuous random variable with PDF
			$$f_X(x) = \frac{1}{\sqrt{2 \pi}} e^{-\frac{x^2}{2}} \hspace{20pt} \textrm{for all } x \in \mathbb{R}$$
			and let $Y=X^2$. Find $f_Y(y)$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 We note that the function $g(x)=x^2$ is strictly decreasing on the interval $(-\infty,0)$, 
						 strictly increasing on the interval $(0, \infty)$, and differentiable on both intervals, 
						 $g'(x)=2x$. Thus, we can use Equation 4.6. First, note that $R_Y=(0, \infty)$. Next, for any 
						 $y \in (0,\infty)$ we have two solutions for $y=g(x)$, in particular,
						 $$x_1=\sqrt{y}, \hspace{10pt} x_2=-\sqrt{y}$$
						 Note that although $0 \in R_X$ it has not been included in our partition of $R_X$. This not 
						 a problem, since $P(X=0)=0$. Indeed, in the statement of Theorem 4.2, we 
						 could replace $R_X$ by $R_X-A$, where $A$ is any set for which $P(X \in A)=0$. In particular, 
						 this is convenient when we exclude the endpoints of the intervals.
						 Thus, we have
						 <table align="center">			
                          <tr>
                            <td>$f_Y(y)$</td>
                            <td>$= \frac{f_X(x_1)}{|g'(x_1)|}+\frac{f_X(x_2)}{|g'(x_2)|}$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$= \frac{f_X(\sqrt{y})}{|2\sqrt{y}|}+\frac{f_X(-\sqrt{y})}{|-2\sqrt{y}|}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$= \frac{1}{2\sqrt{2 \pi y}} e^{-\frac{y}{2}}+\frac{1}{2\sqrt{2 \pi y}} e^{-\frac{y}{2}}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$= \frac{1}{\sqrt{2 \pi y}} e^{-\frac{y}{2}} \textrm{ for } y \in (0,\infty).$</td>
                          </tr>
                          </table><br>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			
			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter4/4_1_2_expected_val_variance.php">previous</a></div>
    			<div class="right"><a href="chapter4/4_1_4_solved4_1.php">next</a><a> &rarr;</a></div>
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
