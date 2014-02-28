<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<?php include '../Control/autonumber.php'; loadHeaders(42); ?>
	<meta name='section'	content='3.3.0' />
	<script type="text/x-mathjax-config">
  			MathJax.Hub.Config({
				"HTML-CSS": { linebreaks: { automatic: true }, },
    		tex2jax: { inlineMath: [['$','$'],['\\(','\\)']] }
  			});
	</script>	
	<script type="text/javascript"
  			src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
	</script>

	<script type="text/javascript">
		window.onload = function() {
			document.getElementById('printButton').onclick = function(e) {
				print();
				window.history.go(-1);
				return false;
			};
		};
	</script>
	
	<script type='text/javascript' src='http://code.jquery.com/jquery-1.6.3.js'></script>
	<script type="text/javascript" src="http://probabilitycourse.com/javascript/menu_js_code.js"></script>
	
	<link rel="stylesheet" type="text/css" href="http://probabilitycourse.com/style_sheet.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="print.css" media="print" />
	<link rel="stylesheet" type="text/css" href="mobile.css" media="only screen and (max-device-width:700px), only screen and (max-width: 700px)" />

	<title>Intro to Probability</title>

</head><body>
	<script type="text/javascript">
	</script>
	<div id="container">
		<span class="hide_print">
			<script type="text/javascript" src="http://probabilitycourse.com/javascript/top_page_html_code.js"></script>
		</span>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter3/3_2_5_solved3_2.php">previous</a></div>
    			<div class="right"><a href="chapter4/4_1_0_continuous_var.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>3.3 End of Chapter Problems</h2></div>
    		<div class="right hide_print">
			<img id="printButton" src="http://probabilitycourse.com/images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></div>
    		<div class="clear"></div>
			
			<span class='problem'>Problem </span><br>
			<p>Let $X$ be a discrete random variable with the following PMF:
            \begin{equation}
             \nonumber P_X(x) = \left\{
            \begin{array}{l l}
               \frac{1}{2} & \quad \text{for  } x=0\\
               \frac{1}{3} & \quad \text{for  } x=1\\
               \frac{1}{6} & \quad \text{for  } x=2\\
               0   & \quad \text{otherwise}
            \end{array} \right.
            \end{equation}
			
			<ol type="a">
                <li>Find $R_X$, the range of the random variable $X$.</li>
                <li>Find $P(X\geq 1.5)$.</li>
                <li>Find $P(0 < X < 2)$.</li>
                <li>Find $P(X=0 | X < 2)$</li>
            </ol> </p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>Let $X$ be the number of the cars being repaired at a repair shop. We have the following information:
			<ul>
                <li>At any time, there are at most $3$ cars being repaired.</li>
                <li>The probability of having $2$ cars at the shop is the same as the probability of having one car.</li>
                <li>The probability of having no car at the shop is the same as the probability of having $3$ cars.</li>
                <li>The probability of having $1$ or $2$ cars is half of the probability of having $0$ or $3$ cars.</li>
            </ul>
			Find the PMF of $X$.</p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>I roll two dice and observe two numbers $X$ and $Y$. If $Z=X-Y$, find the range and PMF of $Z$.</p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>Let $X$ and $Y$ be two independent discrete random variables with the following PMFs:			
            \begin{equation}
             \nonumber P_X(k) = \left\{
            \begin{array}{l l}
               \frac{1}{4} & \quad \text{for  } k=1\\
               \frac{1}{8} & \quad \text{for  } k=2\\
               \frac{1}{8} & \quad \text{for  } k=3\\
               \frac{1}{2} & \quad \text{for  } k=4\\
               0   & \quad \text{otherwise}
            \end{array} \right.
            \end{equation}
			
			and

            \begin{equation}
             \nonumber P_Y(k) = \left\{
            \begin{array}{l l}
               \frac{1}{6} & \quad \text{for  } k=1\\
               \frac{1}{6} & \quad \text{for  } k=2\\
               \frac{1}{3} & \quad \text{for  } k=3\\
               \frac{1}{3} & \quad \text{for  } k=4\\
               0   & \quad \text{otherwise}
            \end{array} \right.
            \end{equation}
			
			<ol type="a">
                <li>Find $P(X\leq 2 \textrm{  and   } Y\leq 2)$.</li>
                <li>Find $P(X > 2 \textrm{  or   } Y > 2)$.</li>
                <li>Find $P(X >2 | Y > 2)$.</li>
                <li>Find $P(X < Y)$.</li>
            </ol></p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>$50$ students live in a dormitory. The parking lot has the capacity for $30$ cars. If each student 
			has a car with probability $\frac{1}{2}$ (independently from other students), what is the probability 
			that there won't be enough parking spaces for all the cars?</p>
			
			<hr /><br />
			<span class='problem'>Problem </span> (The Matching Problem)<br>
			<p>$N$ guests arrive at a party. Each person is wearing a hat. We collect all the hats and then randomly 
			redistribute the hats, giving each person one of the $N$ hats randomly. Let $X_N$ be the 
			number of people who receive their own hats. Find PMF of $X_N$.</p>
			
			<p><i>Hint:</i> We previously found that $P(X_N=0)=\frac{1}{2!}-\frac{1}{3!}+\frac{1}{4!}- \cdots (-1)^N\frac{1}{N!}$, 
			$\quad$ for $\quad$ $N=1,2, \cdots $. Using this, find $P(X_N=k)$ for all $k \in \{0,1, \cdots N\}$.</p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>For each of the following random variables, find $P(X > 5)$, $P(2 < X\leq6)$ and $P(X > 5|X < 8)$.
			<ol type="a">
                <li>$X \sim Geometric(\frac{1}{5})$</li>
                <li>$X \sim Binomial (10, \frac{1}{3})$</li>
                <li>$X \sim Pascal(3,\frac{1}{2})$</li>
                <li>$X \sim Hypergeometric(10,10,12)$</li>
                <li>$X \sim Poisson(5)$</li>
            </ol></p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>Suppose you take a pass-fail test repeatedly until you pass the test for the first time. On your 
			first try, you have $50$ percent chance of passing the test:
			$$P(S_1)=1-P(F_1)=\frac{1}{2}$$
			where, $S_k$ is the event that you are successful in your $k^{th}$ try, and $F_k$ is the event that you 
			fail the test in your $k^{th}$ try. Also, assume that as you take the test more often, your chance of 
			failing the test goes down, in particular:
			$$P(F_k)=\alpha P(F_{k-1})  \textrm{ for } k=2,3,4,\cdots$$
			where $0 < \alpha < 1$. Let $X$ be the total number of tests you take, so $Range(X)= \{ 1, 2, 3, \cdots\}$.
			<ol type="a">
                <li>Find $P(X=1), P(X=2), P(X=3)$. Assume $\alpha=\frac{1}{2}$.</li>
                <li>Find a general formula for $P(X=k)$ for $k=1,2, \cdots$.</li>
                <li>Find the probability that you take the test more than $2$ times.</li>
                <li>Given that you take the test more than once, find the probability that you take the test exactly twice.</li>
            </ol></p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>In this problem, we would like to show that the geometric random variable is <b>memoryless</b>. Let 
			$X \sim Geometric(p)$. Show that
			$$P(X > m+l | X > m)=P(X > l), \textrm{ for } m,l \in \{1,2,3, \cdots \}$$
			We can interpret this in the following way: Remember that a geometric random variable can be obtained 
			by tossing a coin repeatedly until observing the first heads. If we toss the coin several times, 
			and do not observe a heads, from now on it is like we start all over again. In other words, the 
			failed coin tosses do not impact the distribution of waiting time from this point forward. The 
			reason for this is that the coin tosses are independent.</p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>An urn consists of $20$ red balls and $30$ green balls. We choose $10$ balls at random from the urn. The 
			sampling is done <b>without</b> replacement (repetition not allowed).
			<ol type="a">
                <li>What is the probability that there will be exactly $4$ red balls among the chosen balls?</li>
                <li>Given that there are at least $3$ red balls among the chosen balls, what is the probability 
				that there are exactly $4$ red balls?</li>
            </ol></p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>The number of emails that I get in a weekday (Monday through Friday) can be modeled by a Poisson 
			distribution with an average of  $\frac{1}{6}$ emails per minute. The number of emails that I 
			receive on weekends (Saturday and Sunday) can be modeled by a Poisson distribution with an average 
			of $\frac{1}{30}$ emails per minute.
			<ol type="a">
                <li>What is the probability that I get no emails in an interval of length $4$ hours on a Sunday?</li>
                <li>A random day is chosen (all days of the week are equally likely to be chosen), and a random 
				interval of length one hour is chosen on the chosen day. It is observed that I did not receive 
				any emails in that interval. What is the probability that the chosen day is a weekday?</li>
            </ol></p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>Let $X$ be a discrete random variable with the following PMF:
              \begin{equation}
               \nonumber P_X(x) = \left\{
              \begin{array}{l l}
                 0.2 & \quad \text{for  } x=-2\\
                 0.3 & \quad \text{for  } x=-1\\
                 0.2 & \quad \text{for  } x=0\\
                 0.2 & \quad \text{for  } x=1\\
                 0.1 & \quad \text{for  } x=2\\
                 0   & \quad \text{otherwise}
              \end{array} \right.
              \end{equation}
  			 Find and plot the CDF of $X$.</p>
			 
			<hr /><br />
			 <span class='problem'>Problem </span><br>
			 <p>Let $X$ be a discrete random variable with the following CDF:			    
              \begin{equation}
               \nonumber F_X(x) = \left\{
              \begin{array}{l l}
                 0 & \quad \text{for  } x < 0\\
                 \frac{1}{6} & \quad \text{for  } 0 \leq x < 1\\
                 \frac{1}{2} & \quad \text{for  } 1 \leq x < 2 \\
                 \frac{3}{4} & \quad \text{for  } 2 \leq x < 3 \\
                 1 & \quad \text{for  } x \geq 3\\
              \end{array} \right.
              \end{equation}
			 Find the range and PMF of $X$.</p>
			 
			<hr /><br />
			 <span class='problem'>Problem </span><br>
			 <p>Let $X$ be a discrete random variable with the following PMF
              \begin{equation}
               \nonumber P_X(k) = \left\{
              \begin{array}{l l}
                 0.5 & \quad \text{for  } k=1\\
                 0.3 & \quad \text{for  } k=2\\
                 0.2 & \quad \text{for  } k=3\\
                 0   & \quad \text{ otherwise}
              \end{array} \right.
              \end{equation}
			 <ol type="a">
                  <li>Find $EX$.</li>
                  <li>Find Var$(X)$ and $SD(X)$.</li>
                  <li>If $Y=\frac{2}{X}$, find $EY$.</li>
             </ol></p> 
			 
			<hr /><br />
			 <span class='problem'>Problem </span><br>
			 <p>Let $X \sim Geometric(\frac{1}{3})$, and let $Y=|X-5|$. Find the range and PMF of $Y$.</p>
			 
			<hr /><br />
			 <span class='problem'>Problem </span><br>
			 <p>Let $X$ be a discrete random variable with the following PMF
					<span class="no_mobile">
              \begin{equation}
               \nonumber P_X(k) = \left\{
              \begin{array}{l l}
                 \frac{1}{21} & \quad \text{for  } k \in \{-10,-9, \cdots, -1, 0, 1, \cdots, 9, 10 \}\\
                  & \\
                 0   & \quad \text{ otherwise}
              \end{array} \right.
              \end{equation}
			 The random variable $Y=g(X)$ is defined as
              \begin{equation}
               \nonumber Y=g(X)= \left\{
              \begin{array}{l l}
                 0 & \quad \text{if  } X \leq 0\\
                 X & \quad \text{if  } 0 < X \leq 5\\
                 5  & \quad \text{ otherwise}
              \end{array} \right.
              \end{equation}
					</span>
					<span class="mobile">
               \begin{equation}
               \nonumber P_X(k) = \left\{
              \begin{array}{l l}
                 \frac{1}{21} \hspace{20pt} \text{for  } k \in \{-10,-9, \cdots, -1, 0, 1, \\
									\hspace{80pt} \cdots, 9, 10 \}\\
                 0  \hspace{30pt} \text{ otherwise}
              \end{array} \right.
              \end{equation}
			 The random variable $Y=g(X)$ is defined as
              \begin{equation}
               \nonumber Y=g(X)= \left\{
              \begin{array}{l l}
                 0 & \quad \text{if  } X \leq 0\\
                 X & \quad \text{if  } 0 < X \leq 5\\
                 5  & \quad \text{ otherwise}
              \end{array} \right.
              \end{equation}
					</span>
  			  Find the PMF of $Y$.</p>
			  
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>Let $X \sim Geometric(p)$. Find $Var(X)$.</p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>Let $X \sim Pascal(m,p)$. Find $Var(X)$.</p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>Suppose that $Y=-2X+3$. If we know $EY=1$ and $EY^2=9$, find $EX$ and $Var(X)$.</p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>There are $1000$ households in a town. Specifically, there are are $100$ households with one 
			member, $200$ households with 2 members, $300$ households with $3$ members, $200$ households 
			with 4 members, $100$ households with 5 members, and $100$ households with $6$ members. 
			Thus, the total number of people living in the town is
			$$N=100 \cdot 1+200 \cdot 2+300 \cdot 3+200 \cdot 4+100 \cdot 5+100 \cdot 6=3300$$
			
			<ol type="a">
                <li>We pick a household at random, and define the random variable $X$ as the number of people 
				in the chosen household. Find PMF and the expected value of $X$.</li>
                <li>We pick a person in the town at random, and define the random variable $Y$ as the number 
				of people in the household where the chosen person lives. Find the PMF and the expected value of $Y$.</li>
            </ol></p>
			
			<hr /><br />
			<span class='problem'>Problem </span> <a href="http://probabilitycourse.com/bibliography.html#wiki-St-Petersburg">(St. Petersburg Paradox)</a><br>
			<p>Here is a famous problem called the St. Petersburg Paradox. Wikipedia states the problem as 
			follows: "A casino offers a game of chance for a single player in which a fair coin is tossed at 
			each stage. The pot starts at $1$ dollar and is doubled every time a head appears. The first 
			time a tail appears, the game ends and the player wins whatever is in the pot. Thus the player 
			wins 1 dollar if a tail appears on the first toss, 2 dollars if a head appears on the first 
			toss and a tail on the second, $4$ dollars if a head appears on the first two tosses and a 
			tail on the third, 8 dollars if a head appears on the first three tosses and a tail on the 
			fourth, and so on. In short, the player wins $2^{k-1}$ dollars if the coin is tossed $k$ 
			times until the first tail appears. What would be a fair price to pay the casino for entering the game?"
			<ol type="a">
                <li>Let $X$ be the amount of money (in dollars) that the player wins. Find $EX$.</li>
                <li>What is the probability that the player wins more than $65$ dollars?</li>
                <li>Now suppose that the casino only has a finite amount of money. Specifically, suppose that 
				the maximum amount of the money that the casion will pay you is $2^{30}$ dollars 
				(around 1.07 billion dollars). That is, if you win more than $2^{30}$ dollars, the 
				casino is going to pay you only $2^{30}$ dollars. Let $Y$ be the money that the player 
				wins in this case. Find $EY$.</li>
            </ol></p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>Let $X$ be a random variable with mean $EX=\mu$. Define the function $f(\alpha)$ as
			$$f(\alpha)=E[(X-\alpha)^2]$$
			Find the value of $\alpha$ that minimizes $f$.</p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>You are offered to play the following game. You roll a fair die once and observe the result which 
			is shown by the random variable $X$. At this point, you can stop the game and win $X$ dollars. 
			You can also choose to roll the die for the second time to observe the value $Y$. In this case, 
			you will win $Y$ dollars. Let $W$ be the value that you win in this game. What strategy do you 
			use to maximize $EW$? What is the maximum $EW$ you can achieve using your strategy?</p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>The <b>median</b> of a random variable $X$ is defined as any number $m$ that satisfies both of the 
			following conditions:
			$$P(X \geq m) \geq \frac{1}{2} \hspace{5pt} \textrm{ and } \hspace{5pt} P(X \leq m) \geq \frac{1}{2}$$
			Note that the median of $X$ is not necessarily unique. Find the median of $X$ if
			<ol type="a">
				<li>
				The PMF of $X$ is given by
				\begin{equation}
                   \nonumber P_X(k) = \left\{
                  \begin{array}{l l}
                     0.4 & \quad \text{for  } k=1\\
                     0.3 & \quad \text{for  } k=2\\
                     0.3 & \quad \text{for  } k=3\\
                     0   & \quad \text{otherwise}
                  \end{array} \right.
                  \end{equation}
				</li>
				<li>$X$ is the result of a rolling of a fair die.</li>
				<li>$X \sim Geometric(p)$, where $0 < X <1$.</li>
			</ol></p> 

			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter3/3_2_5_solved3_2.php">previous</a></div>
    			<div class="right"><a href="chapter4/4_1_0_continuous_var.php">next</a><a> &rarr;</a></div>
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
