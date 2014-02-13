<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<?php include '../Control/autonumber.php'; loadHeaders(41); ?>
	<meta name='section'	content='3.2.5' />
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
				<div class="left"><a>&larr; </a><a href="chapter3/3_2_4_variance.php">previous</a></div>
    			<div class="right"><a href="chapter3/3_3_0_chapter3_problems.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>3.2.5 More about Discrete Random Variables: <br>Solved Problems</h2></div>
    		<div class="right hide_print">
			<img id="printButton" src="http://probabilitycourse.com/images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></div>
    		<div class="clear"></div>
			
			<span class='problem'>Problem </span><br>
			<p>Let $X$ be a discrete random variable with the following PMF
			\begin{equation}
               \nonumber P_X(x) = \left\{
              \begin{array}{l l}
                 0.3 & \quad \text{for  } x=3\\
                 0.2 & \quad \text{for  } x=5\\
                 0.3 & \quad \text{for  } x=8\\
                 0.2 & \quad \text{for  } x=10\\
                 0   & \quad \text{ otherwise}
              \end{array} \right.
              \end{equation}
			  Find and plot the CDF of $X$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 The CDF is defined by $F_X(x)=P(X \leq x)$. We have
						 \begin{equation}
                           \nonumber F_X(x) = \left\{
                          \begin{array}{l l}
                             0 & \quad \text{for  } x<3\\
                             P_X(3)= 0.3 & \quad \text{for  } 3 \leq x<5\\
                             P_X(3)+P_X(5)=0.5 & \quad \text{for  } 5 \leq x<8 \\
                             P_X(3)+P_X(5)+P_X(8)=0.8 & \quad \text{for  } 8 \leq x<10 \\
                             1 & \quad \text{for  } x \geq 10\\
                          \end{array} \right.
                        \end{equation}						
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span><br>
			<p>Let $X$ be a discrete random variable with the following PMF
			\begin{equation}
             \nonumber P_X(k) = \left\{
            \begin{array}{l l}
               0.1 & \quad \text{for  } k=0\\
               0.4 & \quad \text{for  } k=1\\
               0.3 & \quad \text{for  } k=2\\
               0.2 & \quad \text{for  } k=3\\
               0   & \quad \text{ otherwise}
            \end{array} \right.
            \end{equation}
			<ol type="a">
                <li>Find $EX$.</li>
                <li>Find Var$(X)$.</li>
                <li>If $Y=(X-2)^2$, Find $EY$.</li>
            </ol></p> 
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <ol type="a">
						 	 <li>
							 <table align="center">			
                              <tr>
                                <td>$EX$</td>
                                <td>$= \sum_{x_k \in R_X} x_kP_X(x_k)$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$= 0 (0.1)+ 1(0.4)+2(0.3)+3(0.2)$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=1.6$</td>
                              </tr>
                              </table><br>
							 </li>
							 <li>We can use Var$(X)=EX^2-(EX)^2=EX^2-(1.6)^2$. Thus we need to find $EX^2$. Using LOTUS, we have
							 $$EX^2 =  0^2 (0.1)+ 1^2(0.4)+2^2(0.3)+3^2(0.2)=3.4$$
							 Thus, we have
							 $$\textrm{Var}(X)= (3.4)-(1.6)^2=0.84$$
							 </li>
							 <li>Again, using LOTUS, we have
							 $$E(X-2)^2 =  (0-2)^2 (0.1)+ (1-2)^2(0.4)+(2-2)^2(0.3)+(3-2)^2(0.2)=1$$
							 </li>
						 </ol> 
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span><br>
			<p>Let $X$ be a discrete random variable with PMF
			  \begin{equation}
               \nonumber P_X(k) = \left\{
              \begin{array}{l l}
                 0.2 & \quad \text{for  } k=0\\
                 0.2 & \quad \text{for  } k=1\\
                 0.3 & \quad \text{for  } k=2\\
                 0.3 & \quad \text{for  } k=3\\
                 0   & \quad \text{ otherwise}
              \end{array} \right.
              \end{equation}
			  Define $Y=X(X-1)(X-2)$. Find the PMF of $Y$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 First, note that $R_Y=\{x(x-1)(x-2) | x \in \{0,1,2,3\}\}=\{0,6\}$. Thus,<br><br>
						 <table align="center">			
                          <tr>
                            <td>$P_Y(0)$</td>
                            <td>$=P(Y=0)=P\big( (X=0) \textrm{ or } (X=1) \textrm{ or } (X=2)\big)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=P_X(0)+P_X(1)+P_X(2)$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=0.7$</td>
                          </tr>
						  <tr>
                            <td>$P_Y(6)$</td>
                            <td>$= P(X=3)=0.3$</td>
                          </tr>
                          </table><br>
						  Thus,
						   \begin{equation}
                           \nonumber P_Y(k) = \left\{
                          \begin{array}{l l}
                             0.7 & \quad \text{for  } k=0\\
                             0.3 & \quad \text{for  } k=6\\
                             0   & \quad \text{ otherwise}
                          \end{array} \right.
                          \end{equation}
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>

 			<span class='problem'>Problem </span><br>
			<p>Let $X \sim Geometric(p)$. Find $E\left[\frac{1}{2^X}\right]$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 The PMF of $X$ is given by
						 \begin{equation}
                          \nonumber P_X(k) = \left\{
                          \begin{array}{l l}
                             pq^{k-1}& \quad \text{for  } k=1,2,3,...\\
                            0  & \quad \text{ otherwise}
                          \end{array} \right.
                          \end{equation}
						  where $q=1-p$. Thus,
						  <table align="center">			
                          <tr>
                            <td>$E\left[\frac{1}{2^X}\right]$</td>
                            <td>$=\sum_{k=1}^{\infty} \frac{1}{2^k} P_X(k)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=\sum_{k=1}^{\infty} \frac{1}{2^k} q^{k-1}p$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\frac{p}{2}\sum_{k=1}^{\infty} \left(\frac{q}{2}\right)^{k-1}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\frac{p}{2} \frac{1}{1-\frac{q}{2}}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\frac{p}{1+p}$</td>
                          </tr>
                          </table><br>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span><br>
			<p>If $X \sim Hypergeometric(b,r,k)$, find $EX$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 The PMF of $X$ is given by
						 \begin{equation}
                          \nonumber P_X(x) = \left\{
                          \begin{array}{l l}
                             \frac{{b \choose x} {r \choose k-x}}{{b+r \choose k}}& \quad \text{for  } x \in R_X\\
                            0  & \quad \text{ otherwise}
                          \end{array} \right.
                          \end{equation}
						  where  $R_X=\{\max(0,k-r), \max(0,k-r)+1, \max(0,k-r)+2,..., \min(k,b)\}$. Finding $EX$ directly 
						  seems to be very complicated. So let's try to see if we can find an easier way to find $EX$. 
						  In particular, a powerful tool that we have is linearity of expectation. Can we write $X$ 
						  as the sum of simpler random variables $X_i$? To do so, let's remember the random experiment 
						  behind the hypergeometric distribution. You have a bag that contains $b$ blue marbles and $r$ 
						  red marbles. You choose $k \leq b+r$ marbles at random (without replacement) and let $X$ be the 
						  number of blue marbles in your sample. In particular, let's define the indicator random variables 
						  $X_i$ as follows.
						  \begin{equation}
                            \nonumber X_i = \left\{
                            \begin{array}{l l}
                               1 & \quad \text{if the $i$th chosen marble is blue} \\
                              0  & \quad \text{ otherwise}
                            \end{array} \right.
                            \end{equation}
                            Then, we can write
                            $$X=X_1+X_2+\cdots+X_k$$
							Thus,
							$$EX=EX_1+EX_2+\cdots+EX_k$$
							To find $P(X_i=1)$, we note that for any particular $X_i$ all marbles are equally likely to 
							be chosen. This is because of symmetry: no marble is more likely to be chosen as the $i$'th 
							marble as any other marbles. Therefore,
							$$P(X_i=1)=\frac{b}{b+r} \textrm{ for all }i \in \{1,2,\cdots,k\}$$ 
							We conclude
							<table align="center">			
                            <tr>
                              <td>$EX_i$</td>
                              <td>$=0 \cdot p(X_i=0)+ 1 \cdot P(X_i=1)$</td>
                            </tr>
                            <tr>
                              <td></td>
                              <td>$=\frac{b}{b+r}$</td>
                            </tr>
                            </table><br>
							Thus, we have
							$$EX=\frac{kb}{b+r}$$
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span><br>
			<p>In <a href="http://probabilitycourse.com/chapter3/3_2_2_expectation.php#ex57">Example 3.14</a> we showed that if 
			$X \sim Binomial(n,p)$, then $EX=np$. We found this by writing $X$ as the sum of $n$ $Bernoulli(p)$ 
			random variables. Now, find $EX$ directly using $EX=\sum_{x_k \in R_X} x_k P_X(x_k)$. <i>Hint:</i> Use 
			$k {n \choose k}=n {n-1 \choose k-1}$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 First note that we can prove $k {n \choose k}=n {n-1 \choose k-1}$ by the following 
						 combinatorial interpretation: Suppose that from a group of $n$ students we would 
						 like to choose a committee of $k$ students one whom is chosen to be the committee 
						 chair. We can do this
						 <ol>
                            <li>by choosing $k$ people first (in ${n \choose k}$ ways), and then choosing one of them 
							to be the chair ($k$ ways) or</li>
                            <li>by choosing the chair first ($n$ possibilities and then choosing $k-1$ students 
							from the remaining $n-1$ students (in ${n-1 \choose k-1}$ ways.</li>
                         </ol>
						 Thus, we conclude
						 $$k {n \choose k}=n {n-1 \choose k-1}$$
						 Now, let's find $EX$ for $X \sim Binomial(n,p)$.
						 <table align="center">			
                          <tr>
                            <td>$EX$</td>
                            <td>$=\sum_{k=0}^{n} k {n \choose k} p^k q^{n-k}$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=\sum_{k=1}^{n} k {n \choose k} p^k q^{n-k}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\sum_{k=1}^{n} n {n-1 \choose k-1} p^k q^{n-k}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=np\sum_{k=1}^{n} {n-1 \choose k-1} p^{k-1} q^{n-k}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=np\sum_{l=0}^{n-1} {n-1 \choose l} p^l q^{(n-1)-l}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=np$</td>
                          </tr>
                          </table><br>
						  Note that the last line is true because the $\sum_{l=0}^{n-1} {n-1 \choose l} p^l q^{(n-1)-l}$ 
						  is equal to  $\sum_{l=0}^{n-1} P_Y(l)$ for a random variable $Y$ that has $Binomial(n-1,p)$ 
						  distribution, hence it is equal to $1$.
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>

			<span class='problem'>Problem </span><br>
			Let $X$ be a discrete random variable with $R_X \subset \{0,1,2,...\}$. Prove
			$$EX=\sum_{k=0}^{\infty} P(X>k)$$
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 Note that
						 <table align="center">			
                          <tr>
                            <td>$P(X > 0)$</td>
                            <td>$=P_X(1)+P_X(2)+P_X(3)+P_X(4)+\cdots$</td>
                          </tr>
                          <tr>
                            <td>$P(X > 1)$</td>
                            <td>$=P_X(2)+P_X(3)+P_X(4)+\cdots$</td>
                          </tr>
						  <tr>
                            <td>$P(X > 2)$</td>
                            <td>$=P_X(3)+P_X(4)+P_X(5)+\cdots$</td>
                          </tr>
                          </table><br>
						  Thus
						  <table align="center">			
                          <tr>
                            <td>$\sum_{k=0}^{\infty} P(X>k)$</td>
                            <td>$= P(X>0)+P(X>1)+P(X>2)+...$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=P_X(1)+2P_X(2)+3P_X(3)+4P_X(4)+...$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=EX$</td>
                          </tr>
                          </table><br>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span><br>
			<p>If $X \sim Poisson(\lambda)$, find Var$(X)$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 We already know $EX=\lambda$, thus Var$(X)=EX^2-\lambda^2$. You can find $EX^2$ directly 
						 using LOTUS; however, it is a little easier to find $E[X(X-1)]$ first. In particular, 
						 using LOTUS we have<br><br>
						 <table align="center">			
                          <tr>
                            <td>$E[X(X-1)]$</td>
                            <td>$=\sum_{k=0}^{\infty} k(k-1)P_X(k)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=\sum_{k=0}^{\infty} k(k-1) e^{-\lambda} \frac{\lambda^k}{k!}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=e^{-\lambda}  \sum_{k=2}^{\infty} \frac{\lambda^k}{(k-2)!}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=e^{-\lambda} \lambda^2 \sum_{k=2}^{\infty} \frac{\lambda^{k-2}}{(k-2)!}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=e^{-\lambda} \lambda^2 e^{\lambda}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\lambda^2$</td>
                          </tr>
                          </table><br>
						  So, we have $\lambda^2=E[X(X-1)]=EX^2-EX=EX^2-\lambda$. Thus, $EX^2=\lambda^2+\lambda$ 
						  and we conclude
						  <table align="center">			
                          <tr>
                            <td>$\textrm{Var}(X)$</td>
                            <td>$=EX^2-(EX)^2$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=\lambda^2+\lambda-\lambda^2$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\lambda$</td>
                          </tr>
                          </table><br>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span><br>
			<p>Let $X$ and $Y$ be two independent random variables. Suppose that we know Var$(2X-Y)=6$ and Var$(X+2Y)=9$. 
			Find Var$(X)$ and Var$(Y)$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 Let's first make sure we understand what Var$(2X-Y)$ and Var$(X+2Y)$ mean. They are Var$(Z)$ 
						 and Var$(W)$, where the random variables $Z$ and $W$ are defined as $Z=2X-Y$ and $W=X+2Y$. 
						 Since $X$ and $Y$ are independent random variables, then $2X$ and $-Y$ are independent 
						 random variables. Also, $X$ and $2Y$ are independent random variables. Thus, by using 
						 <a style="color: #337810; background: none; padding: 0px; border: none; margin: 0px;" href="http://probabilitycourse.com/chapter3/variance.html#eq37">Equation 3.7</a>, 
						 we can write
						 $$\textrm{Var} (2X-Y)=\textrm{Var}(2X)+\textrm{Var(-Y)}=4\textrm{Var}(X)+\textrm{Var(Y)}=6$$
						 $$\textrm{Var} (X+2Y)=\textrm{Var}(X)+\textrm{Var(2Y)}=\textrm{Var}(X)+4\textrm{Var(Y)}=9$$
						 By solving for  Var$(X)$ and Var$(Y)$, we obtain  Var$(X)=1$ and Var$(Y)=2$.
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>

			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter3/3_2_4_variance.php">previous</a></div>
    			<div class="right"><a href="chapter3/3_3_0_chapter3_problems.php">next</a><a> &rarr;</a></div>
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
