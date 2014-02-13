<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<?php include '../Control/autonumber.php'; loadHeaders(28); ?>
	<meta name='section'	content='2.2.2' />

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	
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
	
	<link rel="stylesheet" type="text/css" href="http://probabilitycourse.com/style_sheet.css" />

	<title>Intro to Probability</title>

</head><body>
	<div id="container">
		<script type="text/javascript" src="javascript/top_page_html_code.js"></script>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock">
				<div class="left"><a>&larr; </a><a href="chapter2/2_2_1_linear_homogeneous.php">previous</a></div>
    			<div class="right"><a href="chapter2/2_2_3_solved2_2.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>2.2.2 Using Recursion with Conditioning</h2></div>
    		<div class="right">
			<a href="http://probabilitycourse.com/videos/chapter2/video2_5.html"><img src="http://probabilitycourse.com/images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<a href="http://probabilitycourse.com/chapter2/recursion_with_conditioning_print.html"><img src="http://probabilitycourse.com/images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></a></div>
    		<div class="clear"></div>
			
			<p>As we have seen so far, conditioning is a powerful method to solve probability problems. 
			In some problems, after conditioning we get a recursive relation that can help us solve the 
			problem. As an easy example, let's start with a problem closely related to 
			<a href="chapter2/2_2_0_using_recursion.php#example40">Example 2.17</a>.</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>I toss a fair coin $n$ times and record the sequence of heads and tails. What is the probability 
			that I do not observe two consecutive heads in the sequence?</p>   
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 Let $p_n$ be the probability of not observing two consecutive heads in $n$ coin tosses. 
						 One way to solve this problem is to use our answer to Example 40. In that 
						 example we found the total number of sequences of length $n$ with no $HH$ to be
						 $$a_n= \frac{5+3 \sqrt{5}}{10} \bigg(\frac{1+\sqrt{5}}{2} \bigg)^n+ \frac{5-3 
						 \sqrt{5}}{10} \bigg(\frac{1-\sqrt{5}}{2}\bigg)^n$$
						 Now, since the total number of sequences of length $n$ is $2^n$ and all sequences 
						 are equally likely we obtain
						 <table align="center">			
                          <tr>
                            <td>$p_n$</td>
                            <td>$=\frac{a_n}{2^n}$</td>
							<td></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=\frac{5+3 \sqrt{5}}{10} \bigg(\frac{1+\sqrt{5}}{4} \bigg)^n+ \frac{5-3 
							\sqrt{5}}{10} \bigg(\frac{1-\sqrt{5}}{4}\bigg)^n $</td>
							<td>$\hspace{70pt} (2.13)$</td>
                          </tr>
                          </table><br>
						  Here we will solve this problem directly using conditioning. Let $A_n$ be the event that 
						  we observe no consecutive heads in $n$ coin tosses, i.e., $p_n=P(A_n)$. The idea is to 
						  condition on the result of the first coin toss. There are two possibilities. Using the 
						  law of total probability and by conditioning on the result of the first coin toss, we can 
						  write
						  <table align="center">			
                          <tr>
                            <td>$p_n$</td>
                            <td>$=P(A_n)=P(A_n|H)P(H)+P(A_n|T)P(T)$</td>
							<td></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=\frac{1}{2}P(A_n|H)+\frac{1}{2}P(A_n|T)$</td>
							<td>$$\hspace{70pt} (2.14)$$</td>
                          </tr>
                          </table><br>
						  Now, to find $P(A_n|T)$ note that if the first coin toss is a $T$, then in order to 
						  not observe an $HH$ in the entire sequence, we must not observe an $HH$ in the remaining 
						  $n-1$ coin tosses. Thus, we have
						  $$P(A_n|T)=P(A_{n-1})=p_{n-1}$$
						  Similarly, if the first coin toss results in an $H$, the second one must be a $T$ and we 
						  must not observe an $HH$ in the remaining $n-2$ coin tosses, thus we have
						  $$P(A_n|H)=\frac{1}{2} \cdot P(A_{n-2})=\frac{1}{2} p_{n-2}$$
						  Plugging back into Equation 2.14 we obtain
						  $$p_n=\frac{1}{2}p_{n-1}+\frac{1}{4}p_{n-2}$$
						  Note that we also know that $p_1=1$ and $p_2=\frac{3}{4}$. Using the recursion, we also 
						  obtain $p_0=1$. Thus we can solve this recursion. We obtain the following characteristic 
						  equation
						  $$x^2-\frac{1}{2}x-\frac{1}{4}=0$$
						  The characteristic equation has roots $x_1=\frac{1+\sqrt{5}}{4}$  and $x_2=\frac{1-\sqrt{5}}{4}$, 
						  so the general solution is given by
						  $$p_n=\alpha \bigg(\frac{1+\sqrt{5}}{4} \bigg)^n+ \beta \bigg(\frac{1-\sqrt{5}}{4}\bigg)^n$$
						  Using $p_0=1$ and $p_1=1$, we obtain
						  $$p_n=\frac{5+3 \sqrt{5}}{10} \bigg(\frac{1+\sqrt{5}}{4} \bigg)^n+ \frac{5-3 \sqrt{5}}{10} 
						  \bigg(\frac{1-\sqrt{5}}{4}\bigg)^n$$
						  Which as we expect is the same as Equation 2.13.
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>

			<b><font size="3">Gambler's Ruin Problem:</font></b><br>
			<p>Here we discuss a famous problem, called the Gambler's Ruin. It refers to a simple gambling 
			game in which two gamblers play repeatedly until one of them runs out of money. This is 
			also an example of a <i>random walk</i>.</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>Two gamblers, call them Gambler A and Gambler B, play repeatedly. In each round A wins 
			$1$ dollars with probability $p$ or loses $1$ dollar with probability $q=1-p$ (thus, 
			equivalently in each round B wins $1$ dollar with probability $q=1-p$ and loses $1$ dollar 
			with probability $p$). We assume that different rounds are independent. 
			Suppose that initially A has $i$ dollars and B has $N-i$ dollars. 
			The game ends when one of the gamblers runs out of money (in which case the other gambler 
			will have $N$ dollars). Find $p_i$, the probability that A wins the game given that he has 
			initially $i$ dollars.</p>

			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 At first it might not be clear that this problem can be solved using recursive methods. 
						 The main idea is very simple. Condition on the result of the first round. After the first 
						 round, A will have either $i-1$ dollars (if he loses) or will have $i+1$ dollars (if he wins). 
						 This way we can relate $p_i$ to $p_{i-1}$ and $p_{i+1}$. In particular, applying the law of 
						 total probability, we obtain<br><br>
						 <table align="center">			
                          <tr>
                            <td>$p_i$</td>
                            <td>$=P(\textrm{A wins the game}| \textrm{A wins the first round})P(\textrm{A wins the first round})$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$+P(\textrm{A wins the game}| \textrm{A loses the first round})P(\textrm{A loses the first round})$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=p_{i+1} p+p_{i-1}(1-p)$</td>
                          </tr>
                          </table><br>
						  Thus we obtain the recursive equation
						  $$p_i=p_{i+1} p+p_{i-1}(1-p)$$
						  We can rewrite the equation as
						  $$p p_{i+1}=p_i-(1-p)p_{i-1}$$
						  To solve this recursion we need to know the value of $p_i$ for two different values of $i$. 
						  We already know that $p_0=0$. If A starts with $0$ dollars he is automatically the loser. 
						  Similarly, if B starts with $0$ dollars (i.e., A starts with $N$ dollars), then A is 
						  automatically the winner. Thus, we have $p_N=1$. The characteristic equation is
						  $$p x^2-x+(1-p)=0$$
						  Solving this equation we obtain two roots, $x_1=1$ and $x_2=\frac{1-p}{p}=\frac{q}{p}$. 
						  The roots are different if $p\neq q$. Thus, we need to consider two cases: if $p \neq q$ 
						  (i.e., when $p \neq \frac{1}{2}$) we can write the general solution as
						  $$p_i=\alpha + \beta \left(\frac{q}{p}\right)^i$$
						  Using $ p_0=0$ and $p_N=1$, we obtain
						  $$p_i=\frac{1-(\frac{q}{p})^i}{1-(\frac{q}{p})^N}$$
						  If $p=q=\frac{1}{2}$, the characteristic equation has a repeated root 
						  of $x_1=1$, so the general solution can be written as
						  $$p_i=\alpha' + \beta' i$$
						  Using $ p_0=0$ and $p_N=1$, we obtain
						  $$p_i=\frac{i}{N}$$
						  To summarize, for $i=0,1,2,...,N$, we have
						  \begin{equation}
                           \nonumber p_i=\left\{
                            \begin{array}{l} \label{eq:gamb-ruin}
                              \frac{1-(\frac{q}{p})^i}{1-(\frac{q}{p})^N}  \textrm{ if } p \neq \frac{1}{2}\\
                              \frac{i}{N} \textrm{ if } p=\frac{1}{2}
                            \end{array} \right.
                           \end{equation}
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<p><i>Discussion:</i> Using the above answer, we can draw some conclusions. The set up of this problem 
			in some sense can be a model for someone who goes to the casino and gambles repeatedly. We can look 
			at this problem from two points of view. First, let us be somewhat optimistic and assume that the 
			casino games are fair. In that case, you can win or lose with probability $p=q=\frac{1}{2}$ each time. 
			But the casino has usually much more money than an individual gambler, that is $i < < N$. This means 
			that your chance of winning, $\frac{i}{N}$ is very small. Thus, if you gamble repeatedly you are most 
			likely to lose all your money. What if you are very rich? Assume that you have the same amount of 
			money as the casino. Even in that case, you are in no luck. The reason is that the games are usually 
			unfair (casino has some advantage), so $p < \frac{1}{2}$. Now, if you and the casino both have a 
			large sum of money $\frac{N}{2}$ then your chance of winning is</p>
			<table align="center">			
            <tr>
              <td>$p_i$</td>
              <td>$=\frac{1-(\frac{q}{p})^i}{1-(\frac{q}{p})^N}$</td>
			  <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$=\frac{1-(\frac{q}{p})^{\frac{N}{2}}}{1-(\frac{q}{p})^N}$</td>
			  <td>$\textrm{ since } i=\frac{N}{2}$</td>
            </tr>
			<tr>
              <td></td>
              <td>$\approx \frac{-(\frac{q}{p})^{\frac{N}{2}}}{-(\frac{q}{p})^N}$</td>
			  <td>$\textrm{ since $N$ is large and $q > p$}$</td>
            </tr>
			<tr>
              <td></td>
              <td>$=\frac{1}{(\frac{q}{p})^{\frac{N}{2}}} \rightarrow 0 \textrm{ as $N$ becomes large}$</td>
			  <td></td>
            </tr>
            </table><br>
			
			<p>Thus, even if you have the same amount of money as the casino, you will most likely lose all your 
			money if you gamble repeatedly.</p>

			<hr />
			<div class="thinblock">
				<div class="left"><a>&larr; </a><a href="chapter2/2_2_1_linear_homogeneous.php">previous</a></div>
    			<div class="right"><a href="chapter2/2_2_3_solved2_2.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>		
		</div>
		<div id="menu">
			 <script type="text/javascript" src="javascript/menu_html_code.js"></script>
		</div>

		<div id="footer">
			<script type="text/javascript" src="javascript/footer_html_code.js"></script>
		</div>
	</div>
</body>
</html>
