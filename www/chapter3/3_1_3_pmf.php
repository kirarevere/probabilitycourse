<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<?php include '../Control/autonumber.php'; loadHeaders(33); ?>
	<meta name='section'	content='3.1.3' />
	<script type="text/x-mathjax-config">
  			MathJax.Hub.Config({
    		tex2jax: { inlineMath: [['$','$'],['\\(','\\)']] }
  			});
	</script>	
	<script type="text/javascript"
  			src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
	</script>
	
	<script type='text/javascript' src='http://code.jquery.com/jquery-1.6.3.js'></script>
	<script type="text/javascript" src="javascript/menu_js_code.js"></script>
	<script type="text/javascript" src="javascript/solved_prob.js"></script>
	
	<link rel="stylesheet" type="text/css" href="http://probabilitycourse.com/style_sheet.css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="print.css" media="print" />

	<title>Probability Mass Function | PMF</title>
	<meta name="description" content="Definition of a probability mass function with examples" />

</head><body>
	<div id="container">
		<span class="hide_print">
			<script type="text/javascript" src="javascript/top_page_html_code.js"></script>
		</span>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter3/3_1_2_discrete_random_var.php">previous</a></div>
    			<div class="right"><a href="chapter3/3_1_4_independent_random_var.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>3.1.3 Probability Mass Function (PMF)</h2></div>
    		<div class="right hide_print">
			<a href="http://probabilitycourse.com/videos/chapter3/video3_1.html"><img src="http://probabilitycourse.com/images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img id="printButton" src="http://probabilitycourse.com/images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></div>
    		<div class="clear"></div>
			
			<p>If $X$ is a discrete random variable then its range $R_X$ is a countable set, so, we can list 
			the elements in $R_X$. In other words, we can write
			$$R_X=\{x_1,x_2,x_3,...\}$$
			Note that here $x_1, x_2,x_3,...$ are possible values of the random variable $X$. While random 
			variables are usually denoted by capital letters, to represent the numbers in the range we usually 
			use lower case letters such as $x$, $x_1$, $y$, $z$, etc. For a discrete random variable $X$, we 
			are interested in knowing the probabilities of $X=x_k$. Note that here, the event $A=\{X=x_k\}$ 
			is defined as the set of outcomes $s$ in the sample space $S$ for which the corresponding value 
			of $X$ is equal to $x_k$. In particular,
			$$A=\{s \in S | X(s)=x_k\}.$$
			The probabilities of events $\{X=x_k\}$ are formally shown by <b>probability mass function (pmf)</b> of $X$.</p>
			
			<div style="padding: 15px; border: black 1px solid">
			<span class='definition'>Definition </span><br>
			Let $X$ be a discrete random variable with range $R_X=\{x_1,x_2,x_3, ...\}$ (finite or countably infinite). 
			The function
			$$P_X(x_k)=\textrm{P}(X=x_k),  \textrm{ for } k=1,2,3,...,$$
			is called the <i>probability mass function (PMF)</i> of $X$.		
			</div><br>

			<p>Thus, the PMF is a probability measure that gives us probabilities of the possible values for a 
			random variable.  While the above notation is the standard notation for the PMF of $X$, it might 
			look confusing at first. The subscript $X$ here indicates that this is a PMF for a random variable $X$: $P_X$. 
			Thus, for example, $P_X(1)$ shows the probability that $X=1$. To better understand all of the above concepts, 
			let&#39;s look at some examples.</p>
			
			<hr /><br>
			<a name="ex46"></a>
			<span class='example'>Example </span><br>
			<p>I toss a fair coin twice, and let $X$ be defined as the number of heads I observe. Find the range of $X$, 
			$R_X$, as well as its probability mass function $P_X$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 Here our sample space is given by
						 $$S=\{HH,HT,TH,TT\}$$
						 The number of heads will be $0$, $1$ or $2$. Thus
						 $$R_X=\{0,1,2\}.$$
						 Since this is a finite (and thus a countable) set, the random variable $X$ is a discrete random 
						 variable. Next, we need to find PMF of $X$. The PMF is defined as
						 $$P_X(k)=P(X=k) \textrm{ for } k=0,1,2.$$
						 We have
						 $$P_X(0)=P(X=0)=P(TT)=\frac{1}{4},$$
						 $$P_X(1) =P(X=1)=P(\{HT,TH\})=\frac{1}{4}+\frac{1}{4}=\frac{1}{2},$$
						 $$P_X(2)=P(X=2)=P(HH)=\frac{1}{4}.$$
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>

			Although, the PMF is usually defined for values in the range, it is sometimes convenient to extend 
			the PMF of $X$ to all real numbers. If $x \notin R_X$, we can simply write $P_X(x)=P(X=x)=0$. Thus, 
			in general we can write
			
            \begin{equation}
             \nonumber P_X(x) = \left\{
              \begin{array}{l l}
                P(X=x) & \quad \text{if $x$ is in } R_X\\
                0 & \quad \text{otherwise}
              \end{array} \right.
            \end{equation}
			
			<p>To better visualize the PMF we can plot it. Figure 3.1 shows the PMF of the above 
			random variable $X$. As we see, the random variable can take three possible values $0,1$ and $2$. 
			The figure also clearly indicates that the event $X=1$ is twice as likely as the other two possible 
			values. The Figure can be interpreted in the following way: If we repeat the random experiment 
			(tossing a coin twice) a large number of times, then about half of the times we observe $X=1$, 
			about a quarter of times we observe $X=0$, and about a quarter of times we observe $X=2$.</p>
			
			<figure>
  					<img src="http://probabilitycourse.com/images/chapter3/PMF-TwoDice_b.png" width="400" height="235" alt="pmf" title="pmf" border="0" />
  					<figcaption>Fig.3.1 - PMF for random Variable $X$ in Example 3.3.</figcaption>
			</figure>
			
			<p>For discrete random variables, the PMF is also called the <b>probability distribution</b>. Thus, when 
			asked to find the probability distribution of a discrete random variable $X$, we can do this by 
			finding its PMF. The phrase <i>distribution function</i> is usually reserved exclusively for the cumulative 
			distribution function CDF (as defined later in the book). The word <i>distribution</i>, on the other 
			hand, in this book is used in a broader sense and could refer to PMF, probability density function (PDF), 
			or CDF.</p>
			
			<hr /><br>
			<a name="ex47"></a>
			<span class='example'>Example </span><br>
			<p>I have an unfair coin for which $P(H)=p$, where $0 < p < 1$. I toss the coin repeatedly until I observe a 
			heads for the first time. Let $Y$ be the total number of coin tosses. Find the distribution of $Y$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 First, we note that the random variable $Y$ can potentially take any positive integer, so we 
						 have $R_Y=\mathbb{N}=\{1,2,3,...\}$. To find the distribution of $Y$, we need to 
						 find $P_Y(k)=P(Y=k)$ for $k=1,2,3,...$. We have
						 $$P_Y(1) =P(Y=1)=P(H)=p$$
						 $$P_Y(2) =P(Y=2)=P(TH)=(1-p)p$$
						 $$P_Y(3) =P(Y=3)=P(TTH)=(1-p)^2 p$$
						 $$.  \hspace{50pt} .  \hspace{50pt} . \hspace{50pt} .$$
						 $$.  \hspace{50pt} .  \hspace{50pt} . \hspace{50pt} .$$
						 $$.  \hspace{50pt} .  \hspace{50pt} . \hspace{50pt} .$$
						 $$P_Y(k) =P(Y=k)=P(TT...TH)=(1-p)^{k-1} p.$$
						 Thus, we can write the PMF of $Y$ in the following way
						 \begin{equation}
                           \nonumber P_Y(y) = \left\{
                            \begin{array}{l l}
                               (1-p)^{y-1} p& \quad \text{for  } y=1,2,3,...\\
                              0 & \quad \text{otherwise}
                            \end{array} \right.
                          \end{equation}
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>

			<p>Consider a discrete random variable $X$ with Range$(X)=R_X$. Note that by definition the PMF 
			is a probability measure, so it satisfies all properties of a probability measure. In particular, we have
			<ul>
                <li>$0\leq P_X(x) \leq 1$ for all $x$, and</li>
                <li>$\sum_{x \in R_X} P_X(x)=1$.</li>
            </ul>
			Also note that for any set $A \subset R_X$, we can find the probability that $X \in A$ using the PMF
			$$P(X \in A)=\sum_{x \in A} P_X(x)$$</p>
			
			<div style="padding: 15px; border: black 1px solid">
			Properties of PMF:
			<ul>
                <li>$0\leq P_X(x) \leq 1$ for all $x$;</li>
                <li>$\sum_{x \in R_X} P_X(x)=1$;</li>
                <li>for any set $A \subset R_X, P(X \in A)=\sum_{x \in A} P_X(x)$.</li>
            </ul> 
			</div><br>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>For the random variable $Y$ in Example 3.4,
			<ol type="1"> 
                <li>Check that $\sum_{x \in R_Y} P_Y(y)=1$.</li>
                <li>If $p=\frac{1}{2}$, find P$(2\leq Y <5)$.</li>
            </ol> </p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 In Example 3.4, we obtained
						 $$P_Y(k) =P(Y=k)=(1-p)^{k-1} p, \textrm{ for } k=1,2,3,...$$
						 Thus,
						 <ol type="1">
                              <li>To check that $\sum_{y \in R_Y} P_Y(y)=1$, we have<br><br>
							  <table align="center">			
                              <tr>
                                <td>$\sum_{y \in R_Y} P_Y(y)$</td>
                                <td>$= \sum_{k=1}^{\infty} (1-p)^{k-1} p$</td>
								<td></td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$= p \sum_{j=0}^{\infty} (1-p)^{j}$</td>
								<td></td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$= p \frac{1}{1-(1-p)}$</td>
								<td>$\hspace{30pt}\textrm{  Geometric sum}$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$= 1$</td>
								<td></td>
                              </tr>
                              </table><br>
							  </li>
							  <li>If $p=\frac{1}{2}$, to find P$(2\leq Y < 5)$, we can write<br><br>
							  <table align="center">			
                              <tr>
                                <td>$\textrm{P}(2\leq Y < 5)$</td>
                                <td>$= \sum_{k=2}^{4} P_Y(k)$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$= \sum_{k=2}^{4} (1-p)^{k-1} p$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$= \frac{1}{2}\bigg(\frac{1}{2}+\frac{1}{4}+\frac{1}{8}\bigg)$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\frac{7}{16}$.</td>
                              </tr>
                              </table><br>
							  </li>
                          </ol> 
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>

			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter3/3_1_2_discrete_random_var.php">previous</a></div>
    			<div class="right"><a href="chapter3/3_1_4_independent_random_var.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>		
		</div>
		<div id="menu" class="hide_print">
			 <script type="text/javascript" src="javascript/menu_html_code.js"></script>
		</div>

		<div id="footer" class="hide_print">
			<script type="text/javascript" src="javascript/footer_html_code.js"></script>
		</div>
	</div>
</body>
</html>
