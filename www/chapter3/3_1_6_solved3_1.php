<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<?php include '../Control/autonumber.php'; loadHeaders(36); ?>
	<meta name='section'	content='3.1.6' />
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
				<div class="left"><a>&larr; </a><a href="chapter3/3_1_5_special_discrete_distr.php">previous</a></div>
    			<div class="right"><a href="chapter3/3_2_1_cdf.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>3.1.6 Discrete Random Variables: Solved Problems</h2></div>
    		<div class="right hide_print">
			<img id="printButton" src="http://probabilitycourse.com/images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></div>
    		<div class="clear"></div>
			
			<span class='problem'>Problem </span><br>
			<p>Let $X$ be a discrete random variable with the following PMF
			\begin{equation}
             \nonumber P_X(x) = \left\{
            \begin{array}{l l}
               0.1 & \quad \text{for  } x=0.2\\
               0.2 & \quad \text{for  } x=0.4\\
               0.2 & \quad \text{for  } x=0.5\\
               0.3 & \quad \text{for  } x=0.8\\
               0.2 & \quad \text{for  } x=1\\
               0   & \quad \text{ otherwise}
            \end{array} \right.
            \end{equation}
			<ol type="a">
                <li>Find $R_X$, the range of the random variable $X$.</li>
                <li>Find $P(X\leq 0.5)$.</li>
                <li>Find $P( 0.25 < X < 0.75)$.</li>
                <li>Find $P(X=0.2 | X < 0.6)$</li>
            </ol> </p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <ol type="a">
						 	 <li>The range of $X$ can be found from the PMF. The range of $X$ consists of possible 
							 values for $X$. Here we have
							 $$R_X=\{0.2, 0.4, 0.5, 0.8, 1\}$$
							 </li>
							 <li>The event $X\leq 0.5$ can happen only if $X$ is $0.2, 0.4,$ or $0.5$. Thus,
							 <table align="center">			
                              <tr>
                                <td>$P(X\leq 0.5)$</td>
                                <td>$= P(X \in \{0.2, 0.4, 0.5\})$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$= P(X=0.2)+P(X=0.4)+P(X=0.5)$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=P_X(0.2)+P_X(0.4)+P_X(0.5)$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=0.1+0.2+0.2=0.5$</td>
                              </tr>
                              </table><br>
							 </li>
							 <li>Similarly, we have
							 <table align="center">			
                              <tr>
                                <td>$P(0.25 < X < 0.75)$</td>
                                <td>$= P(X \in \{0.4, 0.5\})$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$= P(X=0.4)+P(X=0.5)$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=P_X(0.4)+P_X(0.5)$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=0.2+0.2=0.4$</td>
                              </tr>
                              </table><br>
							 </li>
							 <li>This is a conditional probability problem, so we can use our famous formula 
							 $P(A|B)=\frac{P(A \cap B)}{P(B)}$. We have
							 <table align="center">			
                              <tr>
                                <td>$P(X=0.2 | X < 0.6)$</td>
                                <td>$= \frac{P\big((X=0.2)  \textrm{ and } (X<0.6)\big)}{P(X<0.6)}$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$= \frac{P(X=0.2)}{P(X<0.6)}$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\frac{P_X(0.2)}{P_X(0.2)+P_X(0.4)+P_X(0.5)}$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\frac{0.1}{0.1+0.2+0.2}=0.2$</td>
                              </tr>
                              </table><br>
							 </li>
						 </ol> 
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span><br>
			<p>I roll two dice and observe two numbers $X$ and $Y$.
			<ol type="a">
                <li>Find $R_X, R_Y$ and the PMFs of $X$ and $Y$.</li>
                <li>Find $P(X=2, Y=6)$.</li>
                <li>Find $P(X>3|Y=2)$.</li>
                <li>Let $Z=X+Y$. Find the range and PMF of $Z$.</li>
                <li>Find $P(X=4|Z=8)$.</li>
            </ol> </p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <ol type="a">
						 	 <li>We have $R_X=R_Y=\{1,2,3,4,5,6\}$. Assuming the dice are fair, all values are 
							 equally likely so
							 \begin{equation}
                               \nonumber P_X(k) = \left\{
                                \begin{array}{l l}
                                 \frac{1}{6}& \quad \text{for  } k=1,2,3,4,5,6\\
                                 0  & \quad \text{ otherwise}
                                \end{array} \right.
                              \end{equation}
							  Similarly for $Y$,
							  \begin{equation}
                               \nonumber P_Y(k) = \left\{
                                \begin{array}{l l}
                                 \frac{1}{6}& \quad \text{for  } k=1,2,3,4,5,6\\
                                 0  & \quad \text{ otherwise}
                                \end{array} \right.
                              \end{equation}
							 </li>
							 <li>Since $X$ and $Y$ are independent random variables, we can write
							 <table align="center">			
                              <tr>
                                <td>$P(X=2,Y=6)$</td>
                                <td>$=P(X=2)P(Y=6)$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=\frac{1}{6} \cdot \frac{1}{6}=\frac{1}{36}$</td>
                              </tr>
                              </table><br>
							 </li>
							 <li>Since $X$ and $Y$ are independent, knowing the value of $X$ does not impact the 
							 probabilities for $Y$,
                			 <table align="center">			
                              <tr>
                                <td>$P(X > 3|Y=2)$</td>
                                <td>$=P(X > 3)$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=P_X(4)+P_X(5)+P_X(6)$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\frac{1}{6}+\frac{1}{6}+\frac{1}{6}=\frac{1}{2}$</td>
                              </tr>
                              </table><br>
							 </li>
							 <li>First, we have $R_Z=\{2,3,4,...,12\}$. Thus, we need to find $P_Z(k)$ for 
							 $k=2,3,..., 12$. We have
							 <table align="center">			
                              <tr>
                                <td>$P_Z(2)$</td>
                                <td>$=P(Z=2)=P(X=1,Y=1)$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=P(X=1)P(Y=1) \textrm{ (since $X$ and $Y$ are independent)}$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\frac{1}{6} \cdot \frac{1}{6}=\frac{1}{36}$</td>
                              </tr>
                              <tr>
                                <td>$P_Z(3)$</td>
                                <td>$=P(Z=3)=P(X=1,Y=2)+P(X=2,Y=1)$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=P(X=1)P(Y=2)+ P(X=2)P(Y=1)$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=\frac{1}{6} \cdot \frac{1}{6}+\frac{1}{6} \cdot \frac{1}{6}=\frac{1}{18}$</td>
                              </tr>
							  <tr>
                                <td>$P_Z(4)$</td>
                                <td>$=P(Z=4)=P(X=1,Y=3)+P(X=2,Y=2)+P(X=3,Y=1)$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=3 \cdot \frac{1}{36}=\frac{1}{12}$</td>
                              </tr>
                              </table><br>
							  And we can continue similarly:
							  <table align="center">			
                              <tr>
                                <td>$P_Z(5)$</td>
                                <td>$=\frac{4}{36}=\frac{1}{9}$</td>
                              </tr>
                              <tr>
                                <td>$P_Z(6)$</td>
                                <td>$=\frac{5}{36}$</td>
                              </tr>
							  <tr>
                                <td>$P_Z(7)$</td>
                                <td>$=\frac{6}{36}=\frac{1}{6}$</td>
                              </tr>
                              <tr>
                                <td>$P_Z(8)$</td>
                                <td>$=\frac{5}{36}$</td>
                              </tr>
							  <tr>
                                <td>$P_Z(9)$</td>
                                <td>$=\frac{4}{36}=\frac{1}{9}$</td>
                              </tr>
                              <tr>
                                <td>$P_Z(10)$</td>
                                <td>$=\frac{3}{36}=\frac{1}{12}$</td>
                              </tr>
							  <tr>
                                <td>$P_Z(11)$</td>
                                <td>$=\frac{2}{36}=\frac{1}{18}$</td>
                              </tr>
                              <tr>
                                <td>$P_Z(12)$</td>
                                <td>$=\frac{1}{36}$</td>
                              </tr>
                              </table><br>
							  It is always a good idea to check our answers by verifying that $\sum_{z \in R_Z} P_Z(z)=1$. 
							  Here, we have
							  <table align="center">			
                              <tr>
                                <td>$\sum_{z \in R_Z} P_Z(z)$</td>
                                <td>$=\frac{1}{36}+\frac{2}{36}+\frac{3}{36}+\frac{4}{36}+\frac{5}{36}+\frac{6}{36}$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$+\frac{5}{36}+\frac{4}{36}+\frac{3}{36}+\frac{2}{36}+\frac{1}{36}$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=1$</td>
                              </tr>
                              </table><br>
							 </li>
							 <li>Note that here we cannot argue that $X$ and $Z$ are independent. Indeed, $Z$ seems to 
							 completely depend on $X$, $Z=X+Y$. To find the conditional probability $P(X=4|Z=8)$, 
							 we use the formula for conditional probability
							 <table align="center">			
                              <tr>
                                <td>$P(X=4|Z=8)$</td>
                                <td>$=\frac{P(X=4,Z=8)}{P(Z=8)}$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=\frac{P(X=4,Y=4)}{P(Z=8)}$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\frac{P(X=4)P(Y=4)}{P(Z=8)} \textrm{ (since $X$ and $Y$ are independent)}$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$\frac{\frac{1}{6} \cdot \frac{1}{6}}{\frac{5}{36}}$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\frac{1}{5}$</td>
                              </tr>
                              </table><br>
							 </li>
						 </ol> 
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			
			<span class='problem'>Problem </span><br>
			<p>I roll a fair die repeatedly until a number larger than $4$ is observed. If $N$ is the total number 
			of times that I roll the die, find $P(N=k)$, for $k=1,2,3, ...$.</p>			
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 In each trial, I may observe a number larger than $4$ with probability $\frac{2}{6}=\frac{1}{3}$. 
						 Thus, you can think of this experiment as repeating a Bernoulli experiment with success 
						 probability $p=\frac{1}{3}$ until you observe the first success. Thus, $N$ is a 
						 geometric random variable with parameter $p=\frac{1}{3}$, $N \sim Geometric(\frac{1}{3})$. 
						 Hence, we have
						 \begin{equation}
                          \nonumber P_N(k) = \left\{
                          \begin{array}{l l}
                             \frac{1}{3}(\frac{2}{3})^{k-1}& \quad \text{for  } k=1,2,3,...\\
                            0  & \quad \text{ otherwise}
                          \end{array} \right.
                        \end{equation}
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>

			<span class='problem'>Problem </span><br>
			<p>You take a exam that contains $20$ multiple-choice questions. Each question has $4$ possible options. 
			You know the answer to $10$ questions, but you have no idea about the other $10$ questions so you 
			choose answers randomly. Your score $X$ in the exam is the total number of correct answers. 
			Find PMF of $X$. What is $P(X>15)$?</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 Let's define the random variable $Y$ as the number of your correct answers to the $10$ questions 
						 you answer randomly. Then your total score will be $X=Y+10$. First, let's find the PMF of 
						 $Y$. For each question your success probability is $\frac{1}{4}$. Hence, you perform $10$ 
						 independent $Bernoulli(\frac{1}{4})$ trials and $Y$ is the number of successes. Thus, 
						 we conclude $Y \sim Binomial(10,\frac{1}{4})$, so
						   \begin{equation}
                            \nonumber P_Y(y) = \left\{
                            \begin{array}{l l}
                               {10 \choose y}(\frac{1}{4})^y(\frac{3}{4})^{10-y}& \quad \text{for  } y=0,1,2,3,...,10\\
                              0  & \quad \text{ otherwise}
                            \end{array} \right.
                           \end{equation}
						  Now we need to find the PMF of $X=Y+10$. First note that $R_X=\{10,11,12,...,20\}$. We can write
						  <table align="center">			
                          <tr>
                            <td>$P_X(10)$</td>
                            <td>$=P(X=10)=P(Y+10=10)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=P(Y=0)={10 \choose 0}\left(\frac{1}{4}\right)^0\left(\frac{3}{4}\right)^{10-0}=\left(\frac{3}{4}\right)^{10}$</td>
                          </tr>
						  <tr>
                            <td>$P_X(11)$</td>
                            <td>$=P(X=11)=P(Y+10=11)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=P(Y=1)={10 \choose 1}\left(\frac{1}{4}\right)^1\left(\frac{3}{4}\right)^{10-1}=10\frac{1}{4}\left(\frac{3}{4}\right)^{9}$</td>
                          </tr>
                          </table><br>
						  So, you get the idea. In general for $k \in R_X=\{10,11,12,...,20\}$,
						  <table align="center">			
                          <tr>
                            <td>$P_X(k)$</td>
                            <td>$=P(X=k)=P(Y+10=k)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=P(Y=k-10)={10 \choose k-10}\left(\frac{1}{4}\right)^{k-10}\left(\frac{3}{4}\right)^{20-k}$</td>
                          </tr>
                          </table><br>
						  To summarize,
						  \begin{equation}
                            \nonumber P_X(k) = \left\{
                            \begin{array}{l l}
                               {10 \choose k-10}(\frac{1}{4})^{k-10}(\frac{3}{4})^{20-k}& \quad \text{for  } k=10,11,12,...,20\\
                              0  & \quad \text{ otherwise}
                            \end{array} \right.
                           \end{equation}
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<a name="prob5"></a>
			<span class='problem'>Problem </span><br>
			<p>Let $X \sim Pascal(m,p)$ and $Y \sim Pascal(l,p)$ be two independent random variables. Define a new 
			random variable as $Z=X+Y$. Find the PMF of $Z$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 This problem is very similar to 
						 <a style="color: #337810; background: none; padding: 0px; border: none; margin: 0px;" href="http://probabilitycourse.com/chapter3/3_1_5_special_discrete_distr.php#ex50">Example 3.7</a>, 
						 and we can solve it using the same 
						 methods. We will show that $Z \sim Pascal(m+l,p)$. To see this, consider a sequence of 
						 $H$s and $T$s that is the result of independent coin tosses  with $P(H)=p$, (Figure 3.2). 
						 If we define the random variable $X$ as the number of coin tosses until the $m$th heads is 
						 observed, then $X \sim Pascal(m,p)$. Now, if we look at the rest of the sequence and count 
						 the number of heads until we observe $l$ more heads, then the number of coin tosses in this 
						 part of the sequence is $Y \sim Pascal(l,p)$. Looking from the beginning, we have repeatedly 
						 tossed the coin until we have observed $m+l$ heads. Thus, we conclude the random variable $Z$ 
						 defined as $Z=X+Y$ has a $Pascal(m+l,p)$ distribution.
						 <figure>
                  				<img src="../images/chapter3/sum-Pascal_b.png" width="400" height="165" alt="sum" title="sum" border="0" />
                  				<figcaption>Fig.3.2 - Sum of two Pascal random variables.</figcaption>
                		 </figure>
						 In particular, remember that $Pascal(1,p)=Geometric(p)$. Thus, we have shown that if $X$ and $Y$ 
						 are two independent $Geometric(p)$ random variables, then $X+Y$ is a $Pascal(2,p)$ 
						 random variable. More generally, we can say that if $X_1, X_2, X_3,...,X_m$ are $m$ 
						 independent $Geometric(p)$ random variables, then the random variable $X$ defined by 
						 $X=X_1+X_2+...+X_m$ has a $Pascal(m,p)$ distribution.
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span><br>
			<p>The number of customers arriving at a grocery store is a Poisson random variable. On average $10$ customers 
			arrive per hour. Let $X$ be the number of customers arriving from $10am$ to $11:30am$. What is 
			$P(10 < X \leq 15)$?</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 We are looking at an interval of length $1.5$ hours, so the number of customers in this interval 
						 is $X \sim Poisson(\lambda=1.5 \times 10=15)$. Thus,
						 <table align="center">			
                          <tr>
                            <td>$P(10 < X \leq 15)$</td>
                            <td>$= \sum_{k=11}^{15} P_X(k)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$= \sum_{k=11}^{15} \frac{e^{-15} 15^k}{k!}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=e^{-15} \left[ \frac{15^{11}}{11!}+\frac{15^{12}}{12!}+\frac{15^{13}}{13!}+\frac{15^{14}}{14!}+\frac{15^{15}}{15!}\right]$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=0.4496$</td>
                          </tr>
                          </table><br>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span><br>
			<p>Let $X \sim Poisson(\alpha)$ and $Y \sim Poisson(\beta)$ be two independent random variables. 
			Define a new random variable as $Z=X+Y$. Find the PMF of $Z$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 First note that since $R_X=\{0,1,2,..\}$ and $R_Y=\{0,1,2,..\}$, we can 
						 write $R_Z=\{0,1,2,..\}$. We have
						 <table align="center">			
                          <tr>
                            <td>$P_Z(k)$</td>
                            <td>$=P(X+Y=k)$</td>
							<td></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=\sum_{i=0}^{k} P(X+Y=k|X=i)P(X=i)$</td>
							<td>$\textrm{ (law of total probability)}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\sum_{i=0}^{k} P(Y=k-i|X=i)P(X=i)$</td>
							<td></td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\sum_{i=0}^{k} P(Y=k-i)P(X=i)$</td>
							<td>$\textrm{ (since $X$ and $Y$ are independent)}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\sum_{i=0}^{k} \frac{e^{-\beta}\beta^{k-i}}{(k-i)!} \frac{e^{-\alpha}\alpha^{i}}{i!}$</td>
							<td></td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=e^{-(\alpha+\beta)}\sum_{i=0}^{k} \frac{\alpha^{i} \beta^{k-i}}{(k-i)!i!}$</td>
							<td></td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\frac{e^{-(\alpha+\beta)}}{k!}\sum_{i=0}^{k} \frac{k!}{(k-i)!i!} \alpha^{i} \beta^{k-i}$</td>
							<td></td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\frac{e^{-(\alpha+\beta)}}{k!}\sum_{i=0}^{k} {k \choose i} \alpha^{i} \beta^{k-i}$</td>
							<td></td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\frac{e^{-(\alpha+\beta)}}{k!}(\alpha+\beta)^k$</td>
							<td>$\textrm{(by the binomial theorem)}$</td>
                          </tr>
                          </table><br>
						  Thus, we conclude that $Z \sim Poisson(\alpha+\beta)$.
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span><br>
			Let $X$ be a discrete random variable with the following PMF
			\begin{equation}
               \nonumber P_X(k) = \left\{
              \begin{array}{l l}
                 \frac{1}{4} & \quad \text{for  } k=-2\\
                 \frac{1}{8} & \quad \text{for  } k=-1\\
                 \frac{1}{8} & \quad \text{for  } k=0\\
                 \frac{1}{4} & \quad \text{for  } k=1\\
                 \frac{1}{4} & \quad \text{for  } k=2\\
                 0   & \quad \text{ otherwise}
              \end{array} \right.
              \end{equation}
			  I define a new random variable $Y$ as $Y=(X+1)^2$.
			  <ol type="a">
                  <li>Find the range of $Y$.</li>
                  <li>Find the PMF of $Y$.</li>
              </ol> 
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 Here the random variable $Y$ is a function of the random variable $X$. This means that 
						 we perform the random experiment and obtain $X=x$, and then the value of $Y$ is 
						 determined as $Y=(x+1)^2$. Since $X$ is a random variable, $Y$ is also a random 
						 variable.
						 <ol type="a">
						 	 <li>To find $R_Y$, we note that $R_X=\{-2,-1,0,1,2\}$, and
							 <table align="center">			
                              <tr>
                                <td>$R_Y$</td>
                                <td>$=\{y=(x+1)^2 | x \in R_X \}$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=\{0,1,4,9\}$</td>
                              </tr>
                              </table><br>
							 </li>
							 <li>Now that we have found $R_Y=\{0,1,4,9\}$, to find the PMF of $Y$ we need to find 
							 $P_Y(0), P_Y(1), P_Y(4)$, and $P_Y(9)$:
							 <table align="center">			
                              <tr>
                                <td>$P_Y(0)$</td>
                                <td>$=P(Y=0)=P((X+1)^2=0)$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=P(X=-1)= \frac{1}{8}$</td>
                              </tr>
							  <tr>
                                <td>$P_Y(1)$</td>
                                <td>$=P(Y=1)=P((X+1)^2=1)$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=P\big((X=-2) \textrm{ or } (X=0) \big)$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$P_X(-2)+ P_X(0)= \frac{1}{4}+\frac{1}{8}=\frac{3}{8}$</td>
                              </tr>
							  <tr>
                                <td>$P_Y(4)$</td>
                                <td>$=P(Y=4)=P((X+1)^2=4)$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=P(X=1)= \frac{1}{4}$</td>
                              </tr>
							  <tr>
                                <td>$P_Y(9)$</td>
                                <td>$=P(Y=9)=P((X+1)^2=9)$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=P(X=2)= \frac{1}{4}$</td>
                              </tr>
                              </table><br>
							   Again, it is always a good idea to check that $\sum_{y \in R_Y} P_Y(y)=1$. We have
							   $$\sum_{y \in R_Y} P_Y(y)=\frac{1}{8}+\frac{3}{8}+\frac{1}{4}+\frac{1}{4}=1$$
							 </li>
						 </ol>   
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>

			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter3/3_1_5_special_discrete_distr.php">previous</a></div>
    			<div class="right"><a href="chapter3/3_2_1_cdf.php">next</a><a> &rarr;</a></div>
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
