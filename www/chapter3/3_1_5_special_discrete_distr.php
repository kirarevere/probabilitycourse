<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<?php include '../Control/autonumber.php'; loadHeaders(35); ?>
	<meta name='section'	content='3.1.5' />
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

	<title>Special Distributions | Bernoulli Distribution | Geometric Distribution | Binomial Distribution | Pascal Distribution | Poisson Distribution</title>
	<meta name="description" content="Definitions and examples for different special distributions" />

</head><body>
	<div id="container">
		<span class="hide_print">
			<script type="text/javascript" src="http://probabilitycourse.com/javascript/top_page_html_code.js"></script>
		</span>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter3/3_1_4_independent_random_var.php">previous</a></div>
    			<div class="right"><a href="chapter3/3_1_6_solved3_1.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>3.1.5 Special Distributions</h2></div>
    		<div class="right hide_print">
			<a href="http://probabilitycourse.com/videos/chapter3/video3_3.html"><img src="http://probabilitycourse.com/images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img id="printButton" src="http://probabilitycourse.com/images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></div>
    		<div class="clear"></div>
			
			<p>As it turns out, there are some specific distributions that are used over and over in practice, thus they 
			have been given special names. There is a random experiment behind each of these distributions. Since these 
			random experiments model a lot of real life phenomenon, these special distributions are used frequently 
			in different applications. That's why they have been given a name and we devote a section to study them. 
			We will provide PMFs for all of these special random variables, but rather than trying to memorize the PMF, 
			you should understand the random experiment behind each of them. If you understand the random experiments, 
			you can simply derive the PMFs when you need them. Although it might seem that there are a lot of formulas 
			in this section, there is in fact very few new concepts. Do not get intimidated by the large number of 
			formulas, look at each distribution as a practice problem on discrete random variables.</p>
			<hr />
			
			<b><font size="3">Bernoulli Distribution</font></b><br>
			<p>What is the simplest discrete random variable (i.e., simplest PMF) that you can imagine? My answer to 
			this question is a PMF that is nonzero at only one point. For example, if you define
            \begin{equation}
             \nonumber P_X(x) = \left\{
              \begin{array}{l l}
                 1& \quad \text{for  } x=1\\
                0 & \quad \text{otherwise}
              \end{array} \right.
            \end{equation}
			then, $X$ is a discrete random variable that can only take one value, i.e., $X=1$ with probability one. 
			But this is not a very interesting distribution because it is not actually random. Then, you might ask 
			what is the next simplest discrete distribution. And my answer to that is the <b>Bernoulli</b> distribution. 
			A Bernoulli random variable is a random variable that can only take two possible values, usually $0$ and 
			$1$. This random variable models random experiments that have two possible outcomes, sometimes referred 
			to as "success" and "failure". Here are some examples:
			<ul>
                <li>You take  a pass-fail exam. You either pass (resulting in $X=1$) or fail (resulting in $X=0$).</li>
                <li>You toss a coin. The outcome is ether heads or tails.</li>
                <li>A child is born. The gender is either male or female.</li>
            </ul></p>
			
			<p>Formally, the Bernoulli distribution is defined as follows:</p>
			<div style="padding: 15px; border: black 1px solid">
			<span class='definition'>Definition </span><br>
			A random variable $X$ is said to be a <i>Bernoulli</i> random variable with <i>parameter</i> $p$, shown 
			as $X \sim Bernoulli(p)$, if its PMF is given by
			\begin{equation}
             \nonumber P_X(x) = \left\{
              \begin{array}{l l}
                 p& \quad \text{for  } x=1\\
                1-p & \quad \text{ for } x=0\\
                0  & \quad \text{ otherwise}
              \end{array} \right.
            \end{equation}
			where $0 < p < 1$.
			</div><br>
			
			<p>Figure 3.2 shows the PMF of a $Bernoulli(p)$ random variable.</p>
			
			<figure>
  					<img src="http://probabilitycourse.com/images/chapter3/bernoulli(p) color.png" width="400" height="300" alt="Figure" title="Figure" border="0" />
  					<figcaption>Fig.3.2 - PMF of a $Bernoulli(p)$ random variable.</figcaption>
			</figure>
			
			<p>A Bernoulli random variable is associated with a certain event $A$. If event $A$ occurs (for example, 
			if you pass the test), then $X=1$; otherwise $X=0$. For this reason, the Bernoulli random variable, 
			is also called the <b>indicator </b>random variable. In particular, the indicator random variable 
			$I_A$ for an event $A$ is defined by
            \begin{equation}
             \nonumber I_A = \left\{
              \begin{array}{l l}
                 1& \quad \text{ if the event $A$ occurs}\\
                 0  & \quad \text{ otherwise}
              \end{array} \right.
            \end{equation}
			The indicator random variable for an event $A$ has Bernoulli distribution with parameter $p=P(A)$, so 
			we can write
            \begin{equation}%\label{}
              \nonumber I_A \sim Bernoulli\big(P(A)\big).
            \end{equation}</p>
			
			<hr />
			
			<b><font size="3">Geometric Distribution</font></b><br>
			<p>The random experiment behind the geometric distribution is as follows. Suppose that I have a coin 
			with $P(H)=p$. I toss the coin until I observe the first heads. We define $X$ as the total number 
			of coin tosses in this experiment. Then $X$ is said to have geometric distribution with parameter 
			$p$. In other words, you can think of this experiment as repeating independent Bernoulli trials 
			until observing the first success. This is exactly the same distribution that we saw in 
			<a href="http://probabilitycourse.com/chapter3/pmf.html#ex47">Example 3.4</a>. 
			The range of $X$ here is $R_X=\{1,2,3,...\}$. In Example 3.4, we obtained
			$$P_X(k) =P(X=k)=(1-p)^{k-1} p, \textrm{ for } k=1,2,3,...$$
			We usually define $q=1-p$, so we can write  $P_X(k)=pq^{k-1}, \textrm{ for } k=1,2,3,...$. To say 
			that a random variable has geometric distribution with parameter $p$, we write $X \sim Geometric(p)$. 
			More formally, we have the following definition:</p>
			
			<div style="padding: 15px; border: black 1px solid">
			<span class='definition'>Definition </span><br>
			A random variable $X$ is said to be a <i>geometric</i> random variable with <i>parameter</i> $p$, 
			shown as $X \sim Geometric(p)$, if its PMF is given by
			\begin{equation}
             \nonumber P_X(k) = \left\{
              \begin{array}{l l}
                 p(1-p)^{k-1}& \quad \text{for  } k=1,2,3,...\\
                0  & \quad \text{ otherwise}
              \end{array} \right.
            \end{equation}
			where $ 0 < p < 1$.
			</div><br>
			
			<p>Figure 3.3 shows the PMF of a $Geometric(0.3)$ random variable.</p>
			
			<figure>
  					<img src="http://probabilitycourse.com/images/chapter3/geometric(p=0.3) color.png" width="500" height="336" alt="Figure" title="Figure" border="0" />
  					<figcaption>Fig.3.3 - PMF of a $Geometric(0.3)$ random variable.</figcaption>
			</figure>

			<p>We should note that some books define geometric random variables slightly differently. They define 
			the geometric random variable $X$ as the total number of failures before observing the first 
			success. By this definition the range of $X$ is $R_X=\{0,1,2,...\}$ and the PMF is given by			
            \begin{equation}
             \nonumber P_X(k) = \left\{
              \begin{array}{l l}
                 p(1-p)^{k}& \quad \text{for  } k=0,1,2,3,...\\
                0  & \quad \text{ otherwise}
              \end{array} \right.
            \end{equation}
			In this book, whenever we write $X \sim Geometric(p)$, we always mean $X$ as the total number of trials 
			as defined in Definition 3.5. Note that as long as you are consistent in your analysis, it does not 
			matter which definition you use. That is why we emphasize that you should understand how to derive 
			PMFs for these random variables rather than memorizing them.</p>
			
			<hr />
			
			<b><font size="3">Binomial Distribution</font></b><br>
			<p>The random experiment behind the binomial distribution is as follows. Suppose that I have a coin 
			with $P(H)=p$. I toss the coin $n$ times and define $X$ to be the total number of heads that I 
			observe. Then $X$ is binomial with parameter $n$ and $p$, and we write $X \sim Binomial(n,p)$. The 
			range of $X$ in this case is $R_X=\{0,1,2,...,n\}$. As we have seen in Section 2.1.3, the PMF of 
			$X$ in this case is given by binomial formula
			$$P_X(k)={n \choose k}p^k(1-p)^{n-k}, \textrm{ for }k=0,1,2,...,n$$
			We have the following definition:</p>
			
			<div style="padding: 15px; border: black 1px solid">
			<span class='definition'>Definition </span><br>
			A random variable $X$ is said to be a <i>binomial</i> random variable with parameters $n$ and $p$, 
			shown as $X \sim Binomial(n,p)$, if its PMF is given by
			\begin{equation}
             \nonumber P_X(k) = \left\{
              \begin{array}{l l}
                 {n \choose k}p^k(1-p)^{n-k}& \quad \text{for  } k=0,1,2,\cdots,n\\
                0  & \quad \text{ otherwise}
              \end{array} \right.
            \end{equation}
			where $0 < p < 1$.
			</div><br>
			
			<p>Figures 3.4 and 3.5 show the $Binomial(n, p)$ PMF for $n = 10$, $p = 0.3$ and $n = 20$, $p = 0.6$ respectively.</p>
			
			<figure>
  					<img src="http://probabilitycourse.com/images/chapter3/binomial(n=10,p=0.3) color.png" width="500" height="300" alt="Figure" title="Figure" border="0" />
  					<figcaption>Fig.3.4 - PMF of a $Binomial(10, 0.3)$ random variable.</figcaption>
			</figure><br>
			
			<figure>
  					<img src="http://probabilitycourse.com/images/chapter3/binomial(n=20,p=.6) color.png" width="500" height="215" alt="Figure" title="Figure" border="0" />
  					<figcaption>Fig.3.5 - PMF of a $Binomial(20, 0.6)$ random variable.</figcaption>
			</figure>
			
			<b>Binomial random variable as a sum of Bernoulli random variables</b><br>
			<p>Here is a useful way of thinking 
			about a binomial random variable. Note that a $Binomial(n,p)$ random variable can be obtained by $n$ 
			independent coin tosses. If we think of each coin toss as a $Bernoulli(p)$ random variable, the 
			$Binomial(n,p)$ random variable is a sum of $n$ independent $Bernoulli(p)$ random variables. This is 
			stated more precisely in the following lemma.</p>
			
			<span class='lemma'>Lemma </span><br>
			<p>If $X_1, X_2, ...,X_n$ are independent $Bernoulli(p)$ random variables, then the random variable 
			$X$ defined by $X=X_1+X_2+...+X_n$ has a $Binomial(n,p)$ distribution.</p>
			
			<p>To generate a random variable $X \sim Binomial(n,p)$, we can toss a coin $n$ times and count the number 
			of heads. Counting the number of heads is exactly the same as finding $X_1+X_2+...+X_n$, where each $X_i$ 
			is equal to one if the corresponding coin toss results in heads and zero otherwise. This interpretation 
			of binomial random variables is sometimes very helpful. Let's look at an example.</p>
			
			<hr /><br>
			<a name="ex50"></a>
			<span class='example'>Example </span><br>
			<p>Let $X \sim Binomial(n,p)$ and $Y \sim Binomial(m,p)$ be two independent random variables. Define a new 
			random variable as $Z=X+Y$. Find the PMF of $Z$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 Since $X \sim Binomial(n,p)$, we can think of $X$ as the number of heads in $n$ independent 
						 coin tosses, i.e., we can write
						 $$X=X_1+X_2+...+X_n$$
						 where the $X_i$'s are independent $Bernoulli(p)$ random variables. Similarly, since $Y \sim Binomial(m,p)$, 
						 we can think of $Y$ as the number of heads in $m$ independent coin tosses, i.e., we can write
						 $$Y=Y_1+Y_2+...+Y_m$$
						 where the $Y_j$'s are independent $Bernoulli(p)$ random variables. Thus, the random variable $Z=X+Y$ will 
						 be the total number of heads in $n+m$ independent coin tosses:
						 $$Z=X+Y=X_1+X_2+...+X_n+Y_1+Y_2+...+Y_m$$
						 where the $X_i$'s and $Y_j$'s are independent $Bernoulli(p)$ random variables. Thus, by Lemma 3.1 $Z$ is 
						 a binomial random variable with parameters $m+n$ and $p$, i.e., $Binomial(m+n,p)$. Therefore, the PMF 
						 of $Z$ is
                          \begin{equation}
                           \nonumber P_Z(k) = \left\{
                            \begin{array}{l l}
                               {m+n \choose k}p^k(1-p)^{m+n-k}& \quad \text{for  } k=0,1,2,3,...,m+n\\
                              0  & \quad \text{ otherwise}
                            \end{array} \right.
                          \end{equation}
						  The above solution is elegant and simple, but, we may also want to directly obtain the PMF of $Z$ 
						  using probability rules. Here is another method to solve Example 3.7. First, we note that 
						  $R_Z=\{0,1,2,...,m+n\}$. For $k \in R_Z$, we can write
						  $$P_Z(k)=P(Z=k)=P(X+Y=k)$$
						  We will find $P(X+Y=k)$ by using conditioning and the law of total probability. In particular, 
						  we can write
						  <table align="center">			
                          <tr>
                            <td>$P_Z(k)$</td>
                            <td>$=P(X+Y=k)$</td>
							<td></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=\sum_{i=0}^{n} P(X+Y=k|X=i)P(X=i)$</td>
							<td>$\textrm{ (law of total probability)}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\sum_{i=0}^{n} P(Y=k-i|X=i)P(X=i)$</td>
							<td></td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\sum_{i=0}^{n} P(Y=k-i)P(X=i)$</td>
							<td>$\textrm{ (since $X$ and $Y$ are independent)}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\sum_{i=0}^{n} {m \choose k-i}p^{k-i}(1-p)^{m-k+i} {n \choose i}p^i(1-p)^{n-i}$</td>
							<td>$\textrm{ (since $X$ and $Y$ are binomial)}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\sum_{i=0}^{n} {m \choose k-i} {n \choose i} p^{k}(1-p)^{m+n-k}$</td>
							<td></td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=p^{k}(1-p)^{m+n-k}\sum_{i=0}^{n} {m \choose k-i} {n \choose i}$</td>
							<td></td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$={m+n \choose k} p^{k}(1-p)^{m+n-k}$</td>
							<td>$\textrm{ (by Example 2.8 (part 3))}$</td>
                          </tr>
                          </table><br>
						  Thus, we have proved $Z \sim Binomial(m+n,p)$ by directly finding the PMF of $Z$.
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>

			<b><font size="3">Negative Binomial (Pascal) Distribution</font></b><br>
			<p>The negative binomial or Pascal distribution is a generalization of the geometric distribution. 
			It relates to the random experiment of repeated independent trials until observing $m$ successes. 
			Again, different authors define the Pascal distribution slightly differently, and as we mentioned 
			before if you understand one of them you can easily derive the other ones. Here is how we define 
			the Pascal distribution in this book. Suppose that I have a coin with $P(H)=p$. I toss the coin 
			until I observe $m$ heads, where $m \in \mathbb{N}$. We define $X$ as the total number of coin 
			tosses in this experiment. Then $X$ is said to have Pascal distribution with parameter $m$ and 
			$P$. We write $X \sim Pascal(m,p)$. Note that $Pascal(1,p)=Geometric(p)$. Note that by our definition 
			the range of $X$ is given by $R_X$=$\{$$m$,$m+1$,$m+2$,$m+3$,$\cdots\}$.</p>
			
			<p>Let us derive the PMF of a $Pascal(m,p)$ random variable $X$. Suppose that I toss the coin until 
			I observe $m$ heads, and $X$ is defined as the total number of coin tosses in this experiment. To 
			find the probability of the event $A=\{X=k\}$, we argue as follows. By definition, event $A$ 
			can be written as $A=B \cap C$, where
			<ul>
                <li>$B$ is the event that we observe $m-1$ heads (successes) in the first $k-1$ trials.</li>
                <li>$C$ is the event that we observe a heads in the $k$'th trial.</li>
            </ul>
			Note that $B$ and $C$ are independent events because they are related to different independent 
			trials (coin tosses). Thus we can write
			$$P(A)=P( B \cap C)=P(B)P(C)$$
			Now, we have $P(C)=p$. Note also that $P(B)$ is the probability that I observe observe $m-1$ heads 
			in the $k-1$ coin tosses. This probability is given by the binomial formula, in particular
			$$P(B)={k-1 \choose m-1} p^{m-1}(1-p)^{\big((k-1)-(m-1)\big)}={k-1 \choose m-1} p^{m-1}(1-p)^{k-m}$$
			Thus, we obtain
			$$P(A)=P( B \cap C)=P(B)P(C)={k-1 \choose m-1} p^{m}(1-p)^{k-m}$$
			To summarize, we have the following definition for the Pascal random variable</p>
			
			<div style="padding: 15px; border: black 1px solid">
			<span class='definition'>Definition </span><br>
			A random variable $X$ is said to be a <i>Pascal</i> random variable with parameters $m$ and $p$, shown 
			as $X \sim Pascal(m,p)$, if its PMF is given by
			\begin{equation}
             \nonumber P_X(k) = \left\{
              \begin{array}{l l}
                 {k-1 \choose m-1} p^{m}(1-p)^{k-m}& \quad \text{for  } k=m,m+1,m+2,m+3,...\\
                0  & \quad \text{ otherwise}
              \end{array} \right.
            \end{equation}
			where $0 < p < 1$.			
			</div><br>
			
			<p>Figure 3.6 shows the PMF of a $Pascal(m, p)$ random variable with $m = 3$ and $p = 0.5$.</p>
			
			<figure>
  					<img src="http://probabilitycourse.com/images/chapter3/pascal(m=3,p=0.5) color.png" width="500" height="336" alt="Figure" title="Figure" border="0" />
  					<figcaption>Fig.3.6 - PMF of a $Pascal(3, 0.5)$ (negative binomial) random variable.</figcaption>
			</figure>

			<hr />
			
			<b><font size="3">Hypergeometric Distribution</font></b><br>
			<p>Here is the random experiment behind the hypergeometric distribution. You have a bag that contains 
			$b$ blue marbles and $r$ red marbles. You choose $k \leq b+r$ marbles at random (without replacement). 
			Let $X$ be the number of blue marbles in your sample. By this definition, we have $X\leq \min(k,b)$. 
			Also, the number of red marbles in your sample must be less than or equal to $r$, so we conclude 
			$X\geq \max(0,k-r)$. Therefore, the range of $X$ is given by $R_X=\{\max(0,k-r), \max(0,k-r)+1, 
			\max(0,k-r)+2,..., \min(k,b)\}$.</p>
			
			<p>To find $P_X(x)$, note that the total number of ways to choose $k$ marbles from $b+r$ marbles is 
			${b+r \choose k}$. The total number of ways to choose $x$ blue marbles and $k-x$ red marbles is 
			${b \choose x} {r \choose k-x}$. Thus, we have
			$$P_X(x)= \frac{{b \choose x} {r \choose k-x}}{{b+r \choose k}},  \hspace{20pt}  \textrm{ for } x \in R_X$$
			The following definition summarizes the discussion above.</p>
			
			<div style="padding: 15px; border: black 1px solid">
			<span class='definition'>Definition </span><br>
			A random variable $X$ is said to be a <i>Hypergeometric</i> random variable with parameters $b, r$ and $k$, 
			shown as $X \sim Hypergeometric(b,r,k)$, if its range is $R_X=\{\max(0,k-r), \max(0,k-r)+1, \max(0,k-r)+2,..., 
			\min(k,b)\}$, and its PMF is given by
            \begin{equation}
             \nonumber P_X(x) = \left\{
              \begin{array}{l l}
                 \frac{{b \choose x} {r \choose k-x}}{{b+r \choose k}}& \quad \text{for  } x \in R_X\\
                0  & \quad \text{ otherwise}
              \end{array} \right.
            \end{equation}
			</div><br>

			<p>Again, there is no point to memorizing the PMF. All you need to know is how to solve problems that can be 
			formulated as a hypergeometric random variable.</p>
			
			<hr />
			
			<b><font size="3">Poisson Distribution</font></b><br>
			<p>The Poisson distribution is one of the most used probability distributions. It is usually used in 
			scenarios where we are counting the occurrences of certain events in an interval of time or space. 
			In practice, it is often an approximation of a real-life random variable. Here is an example of a 
			scenario where a Poisson random variable might be used. Suppose that we are counting the number 
			of customers who visit a certain store from $1pm$ to $2pm$. Based on data from previous days, we 
			know that on average $\lambda=15$ customers visit the store. Of course, there will be more customers 
			some days and less on others. Here, we may model the random variable $X$ showing the number customers 
			as a Poisson random variable with parameter $\lambda=15$. Let us introduce the Poisson PMF first, 
			and then we will talk about more examples and interpretations of this distribution.</p>
			
			<div style="padding: 15px; border: black 1px solid">
			<span class='definition'>Definition </span><br>
			A random variable $X$ is said to be a <i>Poisson</i> random variable with parameter $\lambda$, shown 
			as $X \sim Poisson(\lambda)$, if its range is $R_X=\{0,1,2,3,...\}$, and its PMF is given by
			\begin{equation}
             \nonumber P_X(k) = \left\{
              \begin{array}{l l}
                 \frac{e^{-\lambda} \lambda^k}{k!}& \quad \text{for  } k \in R_X\\
                0  & \quad \text{ otherwise}
              \end{array} \right.
            \end{equation}
			</div><br>
			
			<p>Before going any further, let's check that this is a valid PMF. First, we note that $P_X(k)\geq 0$ for all $k$. 
			Next, we need to check $\sum_{k \in R_X} P_X(k)=1$. To do that, let us first remember the Taylor series 
			for $e^x$, $e^x=\sum_{k=0}^{\infty}\frac{x^k}{k!}$. Now we can write</p>
			<table align="center">			
            <tr>
              <td>$\sum_{k \in R_X} P_X(k)$</td>
              <td>$= \sum_{k=0}^{\infty}\frac{e^{-\lambda} \lambda^k}{k!}$</td>
			  <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$= e^{-\lambda} \sum_{k=0}^{\infty}\frac{\lambda^k}{k!}$</td>
			  <td></td>
            </tr>
			<tr>
              <td></td>
              <td>$= e^{-\lambda} e^{\lambda}$</td>
			  <td>$\textrm{(by Taylor series for $e^\lambda$)}$</td>
            </tr>
            <tr>
              <td></td>
              <td>$=1$</td>
			  <td></td>
            </tr>
            </table><br>
			
			<p>Figures 3.7, 3.8, and 3.9 show the $Poisson(\lambda)$ PMF for $\lambda = 1$, $\lambda = 5$, and 
			$\lambda = 10$ respectively.</p>

			<figure>
  					<img src="http://probabilitycourse.com/images/chapter3/Poisson(l=1) color.png" width="500" height="378" alt="Figure" title="Figure" border="0" />
  					<figcaption>Fig.3.7 - PMF of a $Poisson(1)$ random variable.</figcaption>
			</figure><br>

			<figure>
  					<img src="http://probabilitycourse.com/images/chapter3/Poisson(l=5) color.png" width="500" height="215" alt="Figure" title="Figure" border="0" />
  					<figcaption>Fig.3.8 - PMF of a $Poisson(5)$ random variable.</figcaption>
			</figure><br>
			
			<figure>
  					<img src="http://probabilitycourse.com/images/chapter3/Poisson(l=10) color.png" width="500" height="215" alt="Figure" title="Figure" border="0" />
  					<figcaption>Fig.3.9 - PMF of a $Poisson(10)$ random variable.</figcaption>
			</figure><br>
			
			<p>Now let's look at an example.</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>The number of emails that I get in a weekday can be modeled by a Poisson distribution with an average of 
			$0.2$ emails per minute.
			<ol type="1">
                <li>What is the probability that I get no emails in an interval of length $5$ minutes?</li>
                <li>What is the probability that I get more than $3$ emails in an interval of length $10$ minutes?</li>
            </ol></p> 
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <ol type="1">
						 	 <li>Let $X$ be the number of emails that I get in the $5$-minute interval. Then, by the 
							 assumption $X$ is a Poisson random variable with parameter $\lambda=5  (0.2)=1$,
							 $$P(X=0)=P_X(0)=\frac{e^{-\lambda} \lambda^0}{0!}=\frac{e^{-1}\cdot 1}{1}=\frac{1}{e} \approx 0.3679$$
							 </li>
							 <li>Let $Y$ be the number of emails that I get in the $10$-minute interval. Then by the assumption 
							 $Y$ is a Poisson random variable with parameter $\lambda=10  (0.2)=2$,
							 <table align="center">			
                              <tr>
                                <td>$P(Y > 3)$</td>
                                <td>$=1-P(Y \leq 3)$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=1-\big(P_Y(0)+P_Y(1)+P_Y(2)+P_Y(3)\big)$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=1-e^{-\lambda}-\frac{e^{-\lambda} \lambda}{1!}-\frac{e^{-\lambda} \lambda^2}{2!}-\frac{e^{-\lambda} \lambda^3}{3!}$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=1-e^{-2}-\frac{2e^{-2}}{1!}-\frac{4e^{-2}}{4}-\frac{8e^{-2}}{6}$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=1-e^{-2}\left(1+2+1+\frac{8}{6}\right)$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=1-\frac{16}{3e^2} \approx 0.2782$</td>
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
			
			<b><font size="3">Poisson as an approximation for binomial</font></b><br>
			<p>The Poisson distribution can be viewed as the limit of binomial distribution. Suppose $X \sim Binomial(n,p)$ 
			where $n$ is very large and $p$ is very small. In particular, assume that $\lambda=np$ is a positive 
			constant. We show that the PMF of $X$ can be approximated by the PMF of a $Poisson(\lambda)$ random 
			variable. The importance of this is that Poisson PMF is much easier to compute than the binomial. 
			Let us state this as a theorem.</p>
			
			<span class='theorem'>Theorem </span><br>
			<p>Let $X \sim Binomial(n,p=\frac{\lambda}{n})$, where $\lambda>0$ is fixed. Then for any $k \in \{0,1,2,...\}$, 
			we have
			$$\lim_{n \rightarrow \infty} P_X(k)=\frac{e^{-\lambda} \lambda^k}{k!}$$</p>
			
			<i>Proof</i><br>
			We have
			<table align="center">			
            <tr>
              <td>$\lim_{n \rightarrow \infty} P_X(k)$</td>
              <td>$= \lim_{n \rightarrow \infty} {n \choose k} \left(\frac{\lambda}{n}\right)^k \left(1-\frac{\lambda}{n}\right)^{n-k}$</td>
            </tr>
            <tr>
              <td></td>
              <td>$= \lambda^k  \lim_{n \rightarrow \infty} {\frac{n!}{k! (n-k)!}} \left(\frac{1}{n^k}\right) \left(1-\frac{\lambda}{n}\right)^{n-k}$</td>
            </tr>
			<tr>
              <td></td>
              <td>$= \frac{\lambda^k}{k!} . \lim_{n \rightarrow \infty} \left(\left[ \frac{n(n-1)(n-2)...(n-k+1)}{n^k}\right] \left[ \left(1-\frac{\lambda}{n}\right)^{n}\right]  \left[\left(1-\frac{\lambda}{n}\right)^{-k}\right]\right)$</td>
            </tr>
            </table><br>
			Note that for a fixed $k$, we have
			<table align="center">			
            <tr>
              <td>$\lim_{n \rightarrow \infty} \frac{n(n-1)(n-2)...(n-k+1)}{n^k} =1$</td>
            </tr>
            <tr>
              <td>$\lim_{n \rightarrow \infty} \left(1-\frac{\lambda}{n}\right)^{-k}=1$</td>
            </tr>
			<tr>
              <td>$\lim_{n \rightarrow \infty}\left(1-\frac{\lambda}{n}\right)^{n}=e^{-\lambda}$</td>
            </tr>
            </table><br>
			Thus, we conclude
			$$\lim_{n \rightarrow \infty} P_X(k)=\frac{e^{-\lambda} \lambda^k}{k!}$$

			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter3/3_1_4_independent_random_var.php">previous</a></div>
    			<div class="right"><a href="chapter3/3_1_6_solved3_1.php">next</a><a> &rarr;</a></div>
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
