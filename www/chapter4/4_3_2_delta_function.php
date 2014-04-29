<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="section"	content="4.3.2" />
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
				<div class="left"><a>&larr; </a><a href="chapter4/4_3_1_mixed.php">previous</a></div>
    			<div class="right"><a href="chapter4/4_3_3_solved4_3.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>4.3.2 Using the Delta Function</h2></div>
    		<div class="right hide_print">
			<a href=""><img src="http://probabilitycourse.com/images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img id="printButton" src="http://probabilitycourse.com/images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></div>
    		<div class="clear"></div>
			
			<p>In this section, we will use the Dirac delta function to analyze mixed random variables. Technically speaking, 
			the Dirac delta function is not actually a function. It is what we may call a generalized function. 
			Nevertheless, its definition is intuitive and it simplifies dealing with probability distributions.</p>
			
			<p>Remember that any random variable has a CDF. Thus, we can use the CDF to answer questions regarding discrete, 
			continuous, and mixed random variables. On the other hand, the PDF is defined only for continuous random 
			variables, while the PMF is defined only for discrete random variables. Using delta functions will allow 
			us to define the PDF for discrete and mixed random variables. Thus, it allows us to unify the theory of 
			discrete, continuous, and mixed random variables.</p>
			
			<b><font size="3">Dirac Delta Function</font></b><br>
			<p>Remember, we cannot define the PDF for a discrete random variable because its CDF has jumps. If we could 
			somehow differentiate the CDF at jump points, we would be able to define the PDF for discrete random 
			variables as well. This is the idea behind our effort in this section. Here, we will introduce the 
			<i>Dirac delta function</i> and discuss its application to probability distributions. If you are less 
			interested in the derivations, you may directly jump to <b>Definition 4.3</b> and continue from there. 
			Consider the unit step function $u(x)$ defined by
            \begin{equation}
			  \hspace{50pt}
              u(x) = \left\{
              \begin{array}{l l}
                1  &  \quad  x \geq 0 \\
                0 &  \quad \text{otherwise}
              \end{array} \right.
			  \hspace{50pt} (4.8)
            \end{equation}
			This function has a jump at $x=0$. Let us remove the jump and define, for any $\alpha > 0$, the function 
			$u_{\alpha}$ as
            \begin{equation}
             \nonumber u_{\alpha}(x) = \left\{
              \begin{array}{l l}
                1  &  \quad   x \geq \frac{\alpha}{2} \\
                \frac{1}{\alpha} (x+\frac{\alpha}{2})  &   \quad  -\frac{\alpha}{2} \leq x \leq \frac{\alpha}{2} \\
                0 &  \quad \text{otherwise}
              \end{array} \right.
            \end{equation}
			The good thing about $u_{\alpha}(x)$ is that it is a continuous function. Now let us define the 
			function $\delta_{\alpha}(x)$ as the derivative of $u_{\alpha}(x)$ wherever it exists.
            \begin{equation}
             \nonumber \delta_{\alpha}(x)=\frac{ d u_{\alpha}(x)}{dx} = \left\{
              \begin{array}{l l}
                \frac{1}{\alpha}  &  \quad  |x| < \frac{\alpha}{2}   \\
                0 &  \quad |x| > \frac{\alpha}{2}
              \end{array} \right.
            \end{equation}
			Figure 4.10 shows these functions.</p>
			
			<figure>
  					<img src="http://probabilitycourse.com/images/chapter4/Delta_b.png" width="600" height="520" alt="Figure" title="Figure" border="0" />
  					<figcaption>Fig.4.10 - Functions $u(x), u_{\alpha}(x)$, and $\delta_{\alpha}(x)$.</figcaption>
			</figure>
			
			<p>We notice the following relations:
			$$\hspace{50pt} \delta_{\alpha}(x)=\frac{d}{dx} u_{\alpha}(x), \hspace{15pt}  u(x)=\lim_{\alpha \rightarrow 0} u_{\alpha}(x) \hspace{50pt} (4.9)$$
			Now, we would like to define the <i>delta "function"</i>, $\delta(x)$, as
			$$\hspace{100pt} \delta(x)=\lim_{\alpha \rightarrow 0} \delta_{\alpha}(x) \hspace{100pt} (4.10)$$
			Note that as $\alpha$ becomes smaller and smaller, the height of $\delta_{\alpha}(x)$ becomes larger 
			and larger and its width becomes smaller and smaller. Taking the limit, we obtain
            \begin{equation}
            \nonumber  \delta(x) = \left\{
              \begin{array}{l l}
                \infty  &  \quad x=0  \\
                0 &  \quad \text{otherwise}
              \end{array} \right.
            \end{equation}
			Combining  Equations 4.9 and 4.10, we would like to symbolically write
			$$\delta(x)=\frac{d}{dx} u(x).$$
			Intuitively, when we are using the delta function, we have in mind $\delta_{\alpha}(x)$ with extremely small $\alpha$. 
			In particular, we would like to have the following definitions. Let $g:\mathbb{R} \mapsto \mathbb{R}$ be 
			a continuous function. We <u>define</u>
			$$\hspace{50pt} \int_{-\infty}^{\infty} g(x) \delta(x-x_0) dx = \lim_{\alpha \rightarrow 0} 
			\bigg[ \int_{-\infty}^{\infty} g(x) \delta_{\alpha} (x-x_0) dx \bigg] \hspace{50pt} (4.11)$$
			Then, we have the following lemma, that in fact is the most useful property of the delta function.</p>
			
			<span class='lemma'>Lemma </span><br>
			<p>Let $g:\mathbb{R} \mapsto \mathbb{R}$ be a continuous function. We have
			$$\int_{-\infty}^{\infty} g(x) \delta(x-x_0) dx = g(x_0).$$</p>
			
			<i>Proof</i><br>
			<p>Let $I$ be the value of the above integral. Then, we have
			<table align="center">			
            <tr>
              <td>$I$</td>
              <td>$= \lim_{\alpha \rightarrow 0} \bigg[ \int_{-\infty}^{\infty} g(x) \delta_{\alpha} (x-x_0) dx \bigg]$</td>
            </tr>
            <tr>
              <td></td>
              <td>$=\lim_{\alpha \rightarrow 0} \bigg[ \int_{x_0-\frac{\alpha}{2}}^{x_0+\frac{\alpha}{2}} \frac{g(x)}{\alpha} dx \bigg].$</td>
            </tr>
            </table><br>
			By the mean value theorem in calculus, for any $\alpha>0$,  we have
			$$\int_{x_0-\frac{\alpha}{2}}^{x_0+\frac{\alpha}{2}} \frac{g(x)}{\alpha} dx=\alpha \frac{g(x_{\alpha})}{\alpha}=g(x_{\alpha}),$$
			for some $x_{\alpha} \in (x_0-\frac{\alpha}{2},x_0+\frac{\alpha}{2}).$ Thus, we have
			$$I = \lim_{\alpha \rightarrow 0} g(x_{\alpha})=g(x_0).$$
			The last equality holds because $g(x)$ is a continuous function and $\lim_{\alpha \rightarrow 0} x_{\alpha}=x_0$.</p>
			
			<p>For example, if we let $g(x)=1$ for all $x \in \mathbb{R}$, we obtain
			$$\int_{-\infty}^{\infty} \delta(x) dx =1.$$
			It is worth noting that the Dirac $\delta$ function is not strictly speaking a valid function. The reason 
			is that there is no function that can satisfy both of the conditions
			$$\delta(x)=0, \textrm{ for }x \neq 0 \hspace{20pt} \textrm{and} \hspace{20pt} \int_{-\infty}^{\infty} \delta(x) dx =1.$$
			We can think of the delta function as a convenient notation for the integration condition 4.11. The delta function 
			can also be developed formally as a generalized function. Now, let us summarize properties of the delta function.</p>
			
			<div style="padding: 15px; border: black 1px solid">
			<span class='definition'>Definition </span>: Properties of the delta function<br>
			We define the delta function $\delta(x)$ as an object with the following properties:
			<ol type="1">
				<li>$\delta(x) = \left\{
                \begin{array}{l l}
                  \infty  &  \quad x=0  \\
                  0 &  \quad \text{otherwise}
                \end{array} \right.$</li>
				<li>$\delta(x)=\frac{d}{dx} u(x)$, where $u(x)$ is the unit step function (Equation 4.8);</li>
				<li>$\int_{-\epsilon}^{\epsilon} \delta(x) dx =1$, for any $\epsilon>0$;</li>
				<li>For any $\epsilon>0$ and any function $g(x)$ that is continuous over $(x_0-\epsilon, x_0+\epsilon)$, we have
				$$\int_{-\infty}^{\infty} g(x) \delta(x-x_0) dx =\int_{x_0-\epsilon}^{x_0+\epsilon} g(x) \delta(x-x_0) dx = g(x_0).$$</li>
			</ol> 
			</div><br>
			
			<p>Figure 4.11 shows how we represent the delta function. The delta function, $\delta(x)$, is shown by 
			an arrow at $x=0$. The height of the arrow is equal to $1$. If we want to represent $2\delta(x)$, 
			the height would be equal to $2$. In the figure, we also show the function $\delta(x-x_0)$, which 
			is the shifted version of $\delta(x)$.</p>
			
			<figure>
  					<img src="http://probabilitycourse.com/images/chapter4/Delta-Pulse_b.png" width="500" height="220" alt="Figure" title="Figure" border="0" />
  					<figcaption>Fig.4.11 - Graphical representation of delta function.</figcaption>
			</figure>
			
			<b><font size="3">Using the Delta Function in PDFs of Discrete and Mixed Random Variables</font></b><br>
			<p>In this section, we will use the delta function to extend the definition of the PDF to discrete and 
			mixed random variables. Consider a discrete random variable $X$ with range $R_X=\{x_1,x_2,x_3,...\}$ 
			and PMF $P_X(x_k)$. Note that the CDF for $X$ can be written as
			$$F_X(x)=\sum_{x_k \in R_X} P_X(x_k)u(x-x_k).$$
			Now that we have symbolically defined the derivative of the step function as the delta function, 
			we can write a PDF for $X$ by "differentiating" the CDF:
			<table align="center">			
            <tr>
              <td>$f_X(x)$</td>
              <td>$=\frac{dF_X(x)}{dx}$</td>
            </tr>
            <tr>
              <td></td>
              <td>$=\sum_{x_k \in R_X} P_X(x_k)\frac{d}{dx} u(x-x_k)$</td>
            </tr>
			<tr>
              <td></td>
              <td>$=\sum_{x_k \in R_X} P_X(x_k)\delta(x-x_k).$</td>
            </tr>
            </table><br>
			We call this the <b>generalized PDF</b>.</p>
			
			<div style="padding: 15px; border: black 1px solid">
			For a discrete random variable $X$ with range $R_X=\{x_1,x_2,x_3,...\}$ and PMF $P_X(x_k)$, we define 
			the (generalized) probability density function (PDF) as
			$$f_X(x)=\sum_{x_k \in R_X} P_X(x_k)\delta(x-x_k).$$
			</div><br>
			
			<p>Note that for any $x_k \in R_X$, the probability of $X=x_k$ is given by the coefficient of the 
			corresponding $\delta$ function, $\delta(x-x_k)$.</p>
			
			<p>It is useful to use the generalized PDF because all random variables have a generalized PDF, so we 
			can use the same formulas for discrete, continuous, and mixed random variables. If the (generalized) 
			PDF of a random variable can be written as the sum of delta functions, then $X$ is a discrete random 
			variable. If the PDF does not include any delta functions, then $X$ is a continuous random variable. 
			Finally, if the PDF has both delta functions and non-delta functions, then $X$ is a mixed random variable. 
			Nevertheless, the formulas for probabilities, expectation and variance are the same for all kinds of 
			random variables.</p>
			
			<p>To see how this works, we will consider the calculation of the expected value of a discrete random 
			variable. Remember that the expected value of continuous random variable is given by
			$$EX=\int_{-\infty}^{\infty} xf_X(x)dx.$$
			Now suppose that I have a discrete random variable $X$. We can write
			<table align="center">			
            <tr>
              <td>$EX$</td>
              <td>$=\int_{-\infty}^{\infty} xf_X(x)dx$</td>
			  <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$=\int_{-\infty}^{\infty} x\sum_{x_k \in R_X} P_X(x_k)\delta(x-x_k)dx$</td>
			  <td></td>
            </tr>
			<tr>
              <td></td>
              <td>$=\sum_{x_k \in R_X} P_X(x_k) \int_{-\infty}^{\infty} x \delta(x-x_k)dx$</td>
			  <td></td>
            </tr>
			<tr>
              <td></td>
              <td>$=\sum_{x_k \in R_X} x_kP_X(x_k)$</td>
			  <td>$\textrm{by the 4th property in Definition 4.3,}$</td>
            </tr>
            </table><br>
			which is the same as our original definition of expected value for discrete random variables. Let us 
			practice these concepts by looking at an example.</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>Let $X$ be a random variable with the following CDF:
			\begin{equation}
             \nonumber F_X(x) = \left\{
              \begin{array}{l l}
                \frac{1}{2}+ \frac{1}{2}(1-e^{-x})& \quad  x \geq 1\\
                \frac{1}{4}+ \frac{1}{2}(1-e^{-x})& \quad  0 \leq x < 1\\
                0 & \quad x < 0
              \end{array} \right.
            \end{equation}
			<ol type="a">
                <li>What kind of random variable is $X$ (discrete, continuous, or mixed)?</li>
                <li>Find the (generalized) PDF of $X$.</li>
                <li>Find $P(X>0.5)$, both using the CDF and using the PDF.</li>
                <li>Find $EX$ and Var$(X)$.</li>
            </ol></p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p><ol type="a">
						 	 <li>Let us plot $F_X(x)$ to better understand the problem. Figure 4.12 shows $F_X(x)$. We 
							 see that the CDF has two jumps, at $x=0$ and $x=1$. The CDF  increases continuously from 
							 $x=0$ to $x=1$ and also after $x=1$. Since the CDF is neither in the form of a staircase 
							 function, nor is it continuous, we conclude that $X$ is a mixed random variable.
							 <figure>
                      			<img src="http://probabilitycourse.com/images/chapter4/CDF-Mixed-2_b.png" width="400" height="166" alt="Figure" title="Figure" border="0" />
                      			<figcaption>Fig.4.11 - The CDF of $X$ in Example 77.</figcaption>
                    		 </figure></li>
							 		 <li>To find the PDF, we need to differentiate the CDF. We must be careful about the points of 
							 discontinuity. In particular, we have two jumps: one at $x=0$ and one at $x=1$. The size of 
							 the jump for both points is equal to $\frac{1}{4}$. Thus, the CDF has two delta functions: 
							 $\frac{1}{4} \delta(x)+\frac{1}{4} \delta(x-1)$. The continuous part of the CDF can be written 
							 as $\frac{1}{2}(1-e^{-x})$, for $x>0$. Thus, we conclude
							 $$f_X(x)=\frac{1}{4} \delta(x)+\frac{1}{4} \delta(x-1)+\frac{1}{2} e^{-x}u(x).$$</li>
							 <li>Using the CDF, we have
							 <table align="center">			
                              <tr>
                                <td>$P(X > 0.5)$</td>
                                <td>$=1-F_X(0.5)$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=1-\left[\frac{1}{4}+ \frac{1}{2}(1-e^{-x})\right]$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\frac{1}{4}+\frac{1}{2}e^{-0.5}$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=0.5533$</td>
                              </tr>
                              </table><br>
							  Using The PDF, we can write
							  <table align="center">			
                              <tr>
                                <td>$P(X > 0.5)$</td>
                                <td>$=\int_{0.5}^{\infty} f_X(x)dx$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=\int_{0.5}^{\infty} \bigg(\frac{1}{4} \delta(x)+\frac{1}{4} \delta(x-1)+\frac{1}{2}e^{-x}u(x)\bigg)dx$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=0+\frac{1}{4}+\frac{1}{2} \int_{0.5}^{\infty} e^{-x}dx \hspace{30pt} (\textrm{using property 3 in Definition 4.3})$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\frac{1}{4}+\frac{1}{2}e^{-0.5}=0.5533.$</td>
                              </tr>
                              </table><br>
							  </li>
							  <li>We have
							  <table align="center">			
                              <tr>
                                <td>$EX$</td>
                                <td>$=\int_{-\infty}^{\infty} xf_X(x)dx$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=\int_{-\infty}^{\infty} \bigg(\frac{1}{4} x\delta(x)+\frac{1}{4} x\delta(x-1)+\frac{1}{2}xe^{-x}u(x)\bigg)dx$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\frac{1}{4} \times 0+ \frac{1}{4} \times 1 + \frac{1}{2}  \int_{0}^{\infty} xe^{-x}dx \hspace{30pt} (\textrm{using Property 4 in Definition 4.3})$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\frac{1}{4}+\frac{1}{2}\times 1=\frac{3}{4}.$</td>
                              </tr>
                              </table><br>
							  Note that here $\int_{0}^{\infty} xe^{-x}dx $ is just the expected value of an $Exponential(1)$ 
							  random variable, which we know is equal to $1$.
							  <table align="center">			
                              <tr>
                                <td>$EX^2$</td>
                                <td>$=\int_{-\infty}^{\infty} x^2f_X(x)dx$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=\int_{-\infty}^{\infty} \bigg(\frac{1}{4} x^2\delta(x)+\frac{1}{4} x^2\delta(x-1)+\frac{1}{2}x^2e^{-x}u(x)\bigg)dx$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\frac{1}{4} \times 0+ \frac{1}{4} \times 1 + \frac{1}{2}  \int_{0}^{\infty} x^2e^{-x}dx \hspace{30pt} (\textrm{using Property 4 in Definition 4.3})$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\frac{1}{4}+\frac{1}{2}\times 2=\frac{5}{4}$.</td>
                              </tr>
                              </table><br>
							  Again, note that $\int_{0}^{\infty} x^2e^{-x}dx $ is just $EX^2$ for an $Exponential(1)$ random 
							  variable, which we know is equal to $2$. Thus,
							  <table align="center">		
                              <tr>
                                <td>$\textrm{Var}(X)$</td>
                                <td>$=EX^2-(EX)^2$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=\frac{5}{4}-\left(\frac{3}{4}\right)^2$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\frac{11}{16}$.</td>
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
			
			<p>In general, we can make the following statement:</p>
			
			<div style="padding: 15px; border: black 1px solid">
			The (generalized) PDF of a mixed random variable can be written in the form
			$$f_X(x)=\sum_{k} a_k \delta(x-x_k) + g(x).$$
			where $a_k=P(X=x_k)$, and $g(x)\geq 0$ does not contain any delta functions. Furthermore, we have
			$$\int_{-\infty}^{\infty} f_X(x)dx=\sum_{k} a_k + \int_{-\infty}^{\infty} g(x)dx=1.$$
			</div><br>

			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter4/4_3_1_mixed.php">previous</a></div>
    			<div class="right"><a href="chapter4/4_3_3_solved4_3.php">next</a><a> &rarr;</a></div>
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
