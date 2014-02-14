<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../"></base>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="section"	content="1.5.0"	/>
	<?php include '../Control/autonumber.php'; ?>
	<?php loadHeaders(19); ?>
<!--
	<style>
		body	{	counter-reset:	example	<?php getExampleStart(20);	?>;	}
		.example	{	font-weight:	bold;	}
		.example:after	{	counter-increment:	example	1;	content:	counter(example);	}
	</style>
-->
	<script type="text/x-mathjax-config">
  			MathJax.Hub.Config({
    		tex2jax: { inlineMath: [['$','$'],['\\(','\\)']] },
				"HTML-CSS" : {scale: 100}
  			});
	</script>	
	<script type="text/javascript"
  			src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
	</script>
	
	<script type='text/javascript' src='http://code.jquery.com/jquery-1.6.3.js'></script>
	<script type="text/javascript" src="javascript/menu_js_code.js"></script>
	
	<link rel="stylesheet" type="text/css" href="style_sheet.css" />
	<link rel="stylesheet" type="text/css" href="print.css" media="print" />
	<link rel="stylesheet" type="text/css" href="mobile.css" media="only screen and (max-device-width:700px), only screen and (max-width: 700px)" />

	<title>Intro to Probability</title>

</head><body>
	<div id="container">
		<span class="hide_print">
		<script type="text/javascript" src="javascript/top_page_html_code.js"></script>
		</span>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter1/1_4_5_solved3.php">previous</a></div>
    			<div class="right"><a href="chapter2/2_1_0_counting.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>1.5 End of Chapter Problems</h2></div>
    		<div class="right hide_print">			
			<img src="images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;" id="printButton"/></div>
    		<div class="clear"></div>
			
			<span class='problem'>Problem </span><br>
			<p>Suppose that the universal set $S$ is defined as $S=\{1,2,\cdots,10\}$ and $A=\{1,2,3\}$, 
			$B=\{X \in S : 2 \leq X \leq 7\}$, and $C= \{7,8,9,10\}$.
			<ol type="a">
                <li>Find $A \cup B$.</li>
                <li>Find $\left(A \cup C\right)-B$.</li>
                <li>Find $\bar{A} \cup \left(B-C\right)$.</li>
                <li>Do $A,B,$ and $C$ form a partition of $S$?</li>
            </ol></p> 
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>When working with real numbers, our universal set is $\mathbb{R}$. Find each of the following sets.
			<ol type="a">
                <li>$[6,8] \cup [2,7)$ </li>
                <li>$[6,8] \cap [2,7)$</li>
                <li>$[0,1]^{c}$</li>
                <li>$[6,8] - (2,7)$</li>
            </ol></p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>For each of the following Venn diagrams, write the set denoted by the shaded area.
			<ol type="a">
				<li><br><img src="images/chapter1/1a.png" width="200" height="185" alt="3a" title="3a" border="0" /></li><br>
				<li><br><img src="images/chapter1/1b.png" width="200" height="185" alt="3b" title="3b" border="0" /></li><br>
				<li><br><img src="images/chapter1/1c.png" width="200" height="185" alt="3c" title="3c" border="0" /></li><br>
				<li><br><img src="images/chapter1/1d.png" width="200" height="185" alt="3d" title="3d" border="0" /></li><br>
			</ol> </p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>A coin is tossed twice. Let $S$ be the set of all possible pairs that can be observed, i.e., 
			$S=\{H,T\} \times \{H,T\}=\{(H,H),(H,T),(T,H),(T,T)\}.$ Write the following sets by listing their elements.
			<ol type="a">
                <li>$A$: The first coin toss results in head.</li>
                <li>$B$: At least one tail is observed.</li>
                <li>$C$: The two coin tosses result in different outcomes.</li>
            </ol></p>
			
			<hr /><br />
			<span class='problem'>Problem </span>*<br>
			<p>Let $A=\{1,2,\cdots,100\}$. For any $i \in \mathbb{N}$, Define $A_i$ as the set of numbers 
			in $A$ that are divisible by $i$. For example:<br>
			$$A_2=\{2,4,6,\cdots,100\}$$
  			$$A_3=\{3,6,9, \cdots, 99\}.$$
			<ol type="a">
                <li>Find $|A_2|$,$|A_3|$,$|A_4|$,$|A_5|$.</li>
                <li>Find $|A_2 \cup A_3 \cup A_5|$.</li>
            </ol></p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>Suppose that $A_1$, $A_2$, $A_3$ form a partition of the universal set $S$. Let $B$ be an 
			arbitrary set. Assume that we know
			$$|B \cap A_1|=10$$
			$$|B \cap A_2|=20$$
			$$|B \cap A_3|=15.$$
  			Find $|B|$.</p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>Determine whether each of the following sets is countable or uncountable.
			<ol type="a">
                <li>$A=\{1,2,\cdots,10^{10}\}$</li>
                <li>$B=\{a+b\sqrt{2}|\quad a,b \in \mathbb{Q}\}$</li>
                <li>$C=\{(X,Y) \in \mathbb{R}^2 |\quad x^2+y^2 \leq 1\}$.</li>
            </ol></p>
			
			<hr /><br />
			<span class='problem'>Problem </span>*<br>
			<p>Let $A_n=\left[0,\frac{n-1}{n}\right)=\{x \in \mathbb{R}|\quad 0 \leq x < \frac{n-1}{n}\}$, for $n=2,3,\cdots$. Define
			$$A=\bigcup_{n=1}^{\infty}A_n= A_1 \cup A_2 \cup A_3 \cdots$$
			Find $A$.</p>
			
			<hr /><br />
			<span class='problem'>Problem </span>*<br>
			<p>Let $A_n=[0,\frac{1}{n})=\{x \in \mathbb{R}|\quad 0 \leq x < \frac{1}{n}\}$ for $n=1,2,\cdots$. Define
			$$A_n=\bigcap_{n=1}^{\infty}A_n=A_1 \cap A_2 \cap \cdots$$
			Find $A$.</p>
			
			<hr /><br />
			<span class='problem'>Problem </span>*<br>
			<p>In this problem our goal is to show that sets that are not in the form of intervals 
			may also be uncountable. In particular, consider the set $A$ defined as the set of 
			all subsets of $\mathbb{N}$:
			$$A=\{B: B \subset \mathbb{N}\}.$$
			We usually denote this set by $A=2^\mathbb{N}$.
			<ol type="a">
                <li>Show that $2^\mathbb{N}$ is in one-to-one correspondence with the set of all (infinite) binary sequences:
				$$C=\{b_1,b_2,b_3,\cdots|\quad b_i \in \{0,1\}\}.$$</li>
				<li>Show that $C$ is in one-to-one correspondence with $[0,1]$.</li>
            </ol>
			From (a) and (b) we conclude that the set $2^\mathbb{N}$ is uncountable.</p>
			
			<hr /><br />
			<span class='problem'>Problem </span>**<br>
			<p>Show the set $[0,1)$ is uncountable. That is you can never provide a list in the form 
			of $\{a_1,a_2,a_3,\cdots\}$ that contains all the elements in $[0,1)$.</p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>Recall that
			<table align="center">			
            <tr>
              <td>$\{H,T\}^3$</td>
              <td>$= \{H,T\} \times \{H,T\} \times \{H,T\}$</td>
            </tr>
            <tr>
              <td></td>
              <td>$= \{(H,H,H),(H,H,T),\cdots,(T,T,T)\}$.</td>
            </tr>
            </table><br>
			Consider the following function
			$$f: \{H,T\}^3 \longrightarrow \mathbb{N}.$$
			Defined as
			$$f(x)=\text{the number of H's in x}.$$
			For example,
			$$f(HTH)=2.$$
			<ol type="a">
                <li>Determine the domain and co-domain for $f$.</li>
                <li>Find range of $f$:Range($f$).</li>
                <li>If we know $f(x)=2$, what can we say about $x$?</li>
            </ol></p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>Two teams $A$ and $B$ play a soccer match, and we are interested in the winner. 
			The sample space can be defined as
			$$S=\{a,b,d\},$$
			where $a$ shows the outcome that $A$ wins, $b$ shows the outcome that $B$ wins, and $d$ 
			shows the outcome that they draw. Suppose that we know that (1) the probability that $A$ 
			wins is $P(a)=P(\{a\})=0.5$ (2) the probability of a draw is $P(d)=P(\{d\})=0.25$.
			<ol type="a">
                <li>Find the probability that $B$ wins.</li>
                <li>Find the probability that $B$ wins or a draw occurs.</li>
            </ol></p>

			<hr /><br />
			<span class='problem'>Problem </span>*<br>
			<p>Let $A$ and $B$ be two events such that
			$$P(A)=0.4, P(B)=0.7, P(A \cup B)=0.9$$
			<ol type="a">
                <li>Find $P(A \cap B)$.</li>
                <li>Find $P(A^c \cap B)$.</li>
                <li>Find $P(A-B)$.</li>
                <li>Find $P(A^c - B)$.</li>
                <li>Find $P(A^c \cup B)$.</li>
                <li>Find $P(A \cap (B \cup A^c))$.</li>
            </ol></p>
			
			<hr /><br />
			<span class='problem'>Problem </span>*<br>
			<p>I roll a fair dice twice and obtain two numbers: $X_1=$ result of the first roll, 
			$X_2=$ result of the second roll.
			<ol type="a">
                <li>Find the probability that $X_2=4$.</li>
                <li>Find the probability that $X_1+X_2=7$.</li>
                <li>Find the probability that $X_1 \neq 2$ and $ X_2 \geq 4$.</li>
            </ol></p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>Consider a random experiment with a sample space.
			$$S=\{1,2,3,\cdots\}$$
 			Suppose that we know:
			$$P(k)=P(\{k\})=\frac{c}{3^k} \quad \textrm{for} \quad k=1,2,\cdots,$$
			where $c$ is a constant number.
			<ol type="a">
                <li>Find $c$.</li>
                <li>Find $P(\{2,4,6\})$.</li>
                <li>Find $P(\{3,4,5,\cdots\})$.</li>
            </ol></p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>Four teams $A,B,C,$ and $D$ compete in a tournament, and exactly one of them will win the tournament. Teams $A$ and $B$ have the same chance of 
			winning the tournament. Team $C$ is twice as likely to win the tournament as team $D$. The probability 
			that either team $A$ or team $C$ wins the tournament is $0.6$. Find the probabilities of each team 
			winning the tournament.</p>

			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>Let $T$ be the time needed to complete a job at a certain factory. By using the historical data, we know that
			\begin{equation}
				P(T \leq t)= \left\{ \begin{array} {ccc} \frac{1}{16}t^2 & \mbox{for} & 0 \leq t\leq 4\\
				1 & \mbox{for} & t \geq 4 \end{array}\right.
			\end{equation}	

			<ol type="a">
                <li>Find the probability that the job is completed in less than one hour, i.e., find $P(T \leq 1)$.</li>
                <li>Find the probability that the job needs more than 2 hours.</li>
                <li>Find the probability that $1 \leq T \leq 3$.</li>
            </ol></p>
			
			<hr /><br />
			<span class='problem'>Problem </span>*<br>
			<p>You choose a point $(A,B)$ uniformly at random in the unit square $\{(x,y):0 \leq x,y \leq 1\}$.<br>
			<img src="images/chapter1/2.png" width="200" height="200" alt="19" title="19" border="0" /><br>
			What is the probability that the equation
			$$AX^2+X+B=0$$
			has real solutions?</p>
			
			<hr /><br />
			<span class='problem'>Problem </span>** (continuity of probability)<br>
			<p><ol type="a">
                <li>Let $A_1, A_2, A_3, \cdots$ be a sequence of increasing events, that is
				$$A_1 \subset A_2 \subset A_3 \subset \cdots$$
				Show that
				$$P\left(\bigcup_{i=1}^{\infty}A_i\right)=\lim_{n\rightarrow \infty}P(A_i)$$</li><br>
				<li>Using part(a), show that if $A_1,A_2,\cdots$ is a decreasing sequence of events, i.e.,
				$$A_1 \supset A_2 \supset A_3 \supset \cdots$$
				Then
				$$P\left(\bigcap_{i=1}^{\infty}A_i\right)=\lim_{n\rightarrow \infty}P(A_i).$$</li>
            </ol> </p>
			
			<hr /><br />
			<span class='problem'>Problem </span>** (continuity of probability)<br>
			<p>For any sequence of events $A_1,A_2,A_3,\cdots$, prove
			$$P\left(\bigcup_{i=1}^{\infty}A_i \right)=\lim_{n\rightarrow\infty}P\left(\bigcup_{i=1}^{n}A_i \right)$$
			$$P\left(\bigcap_{i=1}^{\infty}A_i \right)=\lim_{n\rightarrow\infty}P\left(\bigcap_{i=1}^{n}A_i \right).$$</p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>Suppose that, of all the customers at a coffee shop,
			<ul>
                <li>$70\%$ purchase a cup of coffee.</li>
                <li>$40\%$ purchase a piece of cake.</li>
                <li>$20\%$ purchase both a cup of coffee and a piece of cake.</li>
            </ul>
			Given that a randomly chosen customer has purchased a piece of cake, what is the probability 
			that he/she has also purchased a cup of coffee?</p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>Let $A,B$, and $C$ be three events with probabilities given below:<br>
			<img src="images/chapter1/3.png" width="250" height="210" alt="23" title="23" border="0" /><br>
			<ol type="a">
                <li>Find $P(A|B)$</li>
                <li>Find $P(C|B)$</li>
                <li>Find $P(B|A \cup C)$</li>
                <li>Find $P(B|A,C)=P(B|A \cap C)$</li>
            </ol> </p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>A real number $X$ is selected uniformly at random in the interval $[0,10]$.
			<ol type="a">
                <li>Find $P\left(2 \leq X \leq 5\right)$.</li>
                <li>Find $P\left(X \leq 2| X \leq 5\right)$.</li>
                <li>Find $P\left(3 \leq X \leq 8| X \leq 4\right)$.</li>
            </ol></p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>A professor thinks students who live on campus are more likely to get $A$s in the 
			probability course. To check this theory, the professor combines the data from the past few years:
			<ol type="a">
                <li>$600$ students have taken the course.</li>
                <li>$120$ students have got $A$s.</li>
                <li>$200$ students lived on campus.</li>
                <li>$80$ students lived off campus and got $A$s.</li>
            </ol>
			Does this data suggest that "getting an $A$" and "living on campus" are dependent or independent?</p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>I roll a dice $n$ times, $n \in \mathbb{N}$. Find the probability that numbers 
			$1$ and $6$ are both observed at least once.</p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>Consider a communication system. At any given time, the communication channel is in 
			good condition with probability $0.8$, and is in bad condition with probability $0.2$. 
			An error occurs in a transmission with probability $0.1$ if the channel is in good 
			condition, and with probability $0.3$ if the channel is in bad condition. Let $G$ be 
			the event that the channel is in good condition and $E$ be the event that there is 
			an error in transmission.
			<ol type="a">
                <li>Complete the following tree diagram:<br>
				<img src="images/chapter1/4.png" width="400" height="400" alt="27a" title="27a" border="0" /></li>
                <li>Using the tree find $P(E)$.</li>
                <li>Using the tree find $P(G|E^c).$</li>
            </ol></p>
			
			<hr /><br />
			<span class='problem'>Problem </span>*<br>
			<p>In a factory there are $100$ units of a certain product, $5$ of which are defective. 
			We pick three units from the 100 units at random. What is the probability that exactly 
			one of them is defective?</p>
			
			<hr /><br />
			<span class='problem'>Problem </span> Reliability<br>
			<p>Real-life systems often are composed of several components. For example, a system may consist 
			of two components that are connected in parallel as shown in Figure 1.28. When the system's 
			components are connected in parallel, the system works if <u>at least one</u> of 
			the components is functional. The components might also be connected in series as shown in 
			Figure 1.28. When the system's components are connected in series, the system works if <u>all</u> 
			of the components are functional.</p>			
			<figure>
  					<img align="center" src="images/chapter1/5-1.png" width="150" height="113" alt="Parallel" title="Parallel" border="0" />
					<img align="center" src="images/chapter1/5-2.png" width="200" height="50" alt="Series" title="Series" border="0" />
  					<figcaption>Fig.1.28 - In left figure, Components $C_1$ and $C_2$ are connected in parallel. 
					The system is functional if at least one of the $C_1$ and $C_2$ is functional. 
					In right figure, Components $C_1$ and $C_2$ are connected in series. The system is 
					functional only if both $C_1$ and $C_2$ are functional.</figcaption>
			</figure><br>
			<p>For each of the following systems, find the probability that the system is functional. 
			Assume that component $k$ is functional with probability $P_k$ independent of other components.</p>
			<ol type="a">
				<li><br><img src="images/chapter1/5a.png" width="295" height="50" alt="29a" title="29a" border="0" /></li><br>
				<li><br><img src="images/chapter1/5b.png" width="150" height="150" alt="29b" title="29b" border="0" /></li><br>
				<li><br><img src="images/chapter1/5c.png" width="200" height="100" alt="29c" title="29c" border="0" /></li><br>
				<li><br><img src="images/chapter1/5d.png" width="200" height="135" alt="29d" title="29d" border="0" /></li><br>
				<li><br><img src="images/chapter1/5e.png" width="200" height="123" alt="29e" title="29e" border="0" /></li><br>
			</ol>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>You choose a point $(X,Y)$ uniformly at random in the unit square
			$$S=\{(x,y) \in \mathbb{R}^2: 0 \leq x \leq 1, 0 \leq y \leq 1\}.$$
			Let $A$ be the event $\{(x,y) \in S:|x-y| \leq \frac{1}{2}\}$ and $B$ be the event 
			$\{(x,y) \in S: y\geq x\}$.
			<ol type="a">
                <li>Show sets $A$ and $B$ in the x-y plane.</li>
                <li>Find $P(A)$ and $P(B)$.</li>
                <li>Are $A$ and $B$ independent?</li>
            </ol></p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>One way to design a spam filter is to look at the words in an email. In particular, some words 
			are more frequent in spam emails. Suppose that we have the following information:
			<ul>
                <li>$50\%$ of emails are spam. </li>
                <li>$1\%$ of spam emails contain the word "refinance".</li>
                <li>$0.001\%$ of non-spam emails contain the word "refinance".</li>
            </ul>
			Suppose that an email is checked and found out to contain the word refinance. What is the 
			probability that the email is a spam?</p>
			
			<hr /><br />
			<span class='problem'>Problem </span>*<br>
			<p>You would like to go from point $A$ to point $B$ in Figure 1.28. There are 5 bridges on different 
			branches of the river as shown in Figure 1.29.
			<figure>
  					<img src="images/chapter1/6.png" width="450" height="310" alt="Bridge" title="Bridge" border="0" />
  					<figcaption>Fig.1.29 - Problem 32.</figcaption>
			</figure>
			Bridge $i$ is open with probability $P_i$, $i=1,2,3,4,5$. Let $A$ be the event that there is a path 
			from $A$ to $B$ and let $B_k$ be the event that $k^{th}$ bridge is open.
			<ol type="a">
                <li>Find $P(A)$.</li>
                <li>Find $P(B_3|A)$.</li>
            </ol></p>
			
			<hr /><br />
			<span class='problem'>Problem </span>* <a href="http://en.wikipedia.org/wiki/Monty_Hall_problem">(The Monty Hall Problem)</a><br>
			<p>You are in a game show, and the host gives you the choice of three doors. Behind one door is a car and 
			behind the others are goats. You pick a door, say Door $1$. The host who knows what is behind the doors 
			opens a different door and reveals a goat (the host can always open such a door because there is only 
			one door behind which is a car). The host then asks you: "Do you want to switch?" The question is, 
			is it to your advantage to switch your choice?</p>
			<img src="images/chapter1/7.png" width="300" height="60" alt="Monte Hall" title="Monte Hall" border="0" /><br><br>
			
			<span class='problem'>Problem </span><br>
			<p>I toss a fair die twice, and obtain two numbers $X$ and $Y$. Let $A$ be the event that $X=2$, $B$ be 
			the event that $X+Y=7$, and $C$ be the event that $Y=3$.
			<ol type="a">
                <li>Are $A$ and $B$ independent?</li>
                <li>Are $A$ and $C$ independent?</li>
                <li>Are $B$ and $C$ independent?</li>
                <li>Are $A$, $B$, and $C$ are independent?</li>
            </ol></p>
			
			<span class='problem'>Problem </span>*<br>
			<p>You and I play the following game: I toss a coin repeatedly. The coin is unfair and $P(H)=p$. The 
			game ends the first time that two consecutive heads (HH) or two consecutive tails (TT) are observed. 
			I win if (HH) is observed and you win if (TT) is observed. Given that I won the game find the probability 
			that the first coin toss resulted in head?</p>
			
			<span class='problem'>Problem </span>*<br>
			<p>A box contains two coins: a regular coin and one fake two headed coin (P(H)=1). I choose a coin at 
			random and toss it $n$ times. If the first $n$ coin tosses result in heads, what is the probability 
			that the $(n+1)^{th}$ coin toss will also result in head?</p>
			
			<span class='problem'>Problem </span>*<br>
			<p>A family has $n$ children, $n \geq 2$. We ask the father: "Do you have at least one daughter?" He 
			responds "Yes!" Given this extra information, what is the probability that all $n$ children are girls? 
			In other words, what is the probability that all of their children are girls, given that at least one of 
			them is a girl?</p>
			
			<span class='problem'>Problem </span>*<br>
			<p>A family has $n$ children, $n\geq 2$. We ask from the father, "Do you have at least one daughter named Lilia?" 
			He replies, "Yes!"  What is the probability that all of their children are girls? In other words, we want 
			to find the probability that all $n$ children are girls, given that the family has at least one daughter named 
			Lilia. Here you can assume that if a child is a girl, her name will be Lilia with probability $\alpha \ll 1$ 
			independently from other children's names. If the child is a boy, his name will not be Lilia.</p>
			
			<span class='problem'>Problem </span>*<br>
			<p>A family has $n$ children. We pick one of them at random and find out that she is a girl. What 
			is the probability that all their children are girls?</p>

			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter1/1_4_5_solved3.php">previous</a></div>
    			<div class="right"><a href="chapter2/2_1_0_counting.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>		
		</div>
		<span class="hide_print">
		<div id="menu">
			 <script type="text/javascript" src="javascript/menu_html_code.js"></script>
		</div>

		<div id="footer">
			<script type="text/javascript" src="javascript/footer_html_code.js"></script>
		</div>
		</span>
	</div>
</body>
</html>
