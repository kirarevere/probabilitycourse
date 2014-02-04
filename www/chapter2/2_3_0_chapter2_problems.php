<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<?php include '../Control/autonumber.php'; loadHeaders(30); ?>
	<meta name='section'	content='2.3.0' />

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
	
	<link rel="stylesheet" type="text/css" href="http://probabilitycourse.com/style_sheet.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="print.css" media="print" />

	<title>Intro to Probability</title>

</head><body>
	<div id="container">
		<span class="hide_print">
		<script type="text/javascript" src="javascript/top_page_html_code.js"></script>
		</span>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter2/2_2_3_solved2_2.php">previous</a></div>
    			<div class="right"><a href="chapter3/3_1_1_random_variables.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>2.3 End of Chapter Problems</h2></div>
    		<div class="right hide_print">			
			<img src="http://probabilitycourse.com/images/print.png" id="printButton" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></div>
    		<div class="clear"></div>
			
			<span class='problem'>Problem </span><br>
			<p>A coffee shop has $4$ different types of coffee. You can order your coffee in a small, medium, 
			or large cup. You can also choose whether you want to add cream, sugar, or milk. In how many ways 
			can you order your coffee?</p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>Eight committee members are meeting in a room that has twelve chairs. 
			In how many ways can they seat in the chairs?</p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>There are $20$ black cell phones and $30$ white cell phones in a store. An employee takes $10$ 
			phones at random. Find the probability that
            <ol type="a">
                <li>there will be exactly $4$ black cell phones among the chosen phones.</li>
                <li>there will be less than $3$ black cell phones among the chosen phones.</li>
            </ol></p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>Five cards are dealt from a shuffled deck. What is the probability that the deck contains
			<ol type="a">
                <li>exactly one ace?</li>
                <li>at least one ace?</li>
            </ol></p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>Five cards are dealt from a shuffled deck. What is the probability that the deck contains 
			exactly two aces, given that we know it contains at least one ace?</p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>The 52 cards in a shuffled deck are dealt equally among four players, call them A, B, C, and D. 
			If A and B have exactly $7$ spades, what is the probability that C has exactly $4$ spades?</p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>There are $50$ students in a class and the professor chooses $15$ students at random. 
			What is the probability that you or your friend Joe are among the chosen students?</p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>In how many ways can you arrange the letters in the word "Massachusetts"?</p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>You have a biased coin for which $P(H)=p$. You toss the coin $20$ times. What is the probability that
			<ol type="a">
                <li>you observe $8$ heads and $12$ tails?</li>
                <li>you observe more than $8$ heads and more than $8$ tails?</li>
            </ol></p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>A wireless sensor grids consists of $200$ sensor nodes that are located at points $(i,j)$ in the plane 
			such that $i \in \{0,1,\cdots,20\}$ and $j \in \{0,1,2,\cdots,10\}$ as shown in 
			Figure 2.1. The sensor node located at point $(0,0)$ needs to send a message to a node located at 
			$(20,10)$. The messages are sent to the destination by going from each sensor to a neighboring 
			sensor located above or to the right. That is, we assume that each node located at point $(i,j)$ will 
			only send messages to the nodes located at $(i+1,j)$ or $(i,j+1)$. How many different paths do 
			exist for sending the message from node $(0,0)$ to node $(20,10)$?</p>
			
			<figure>
					<img src="http://probabilitycourse.com/images/chapter2/sensor-grid.png" width="500" height="310" alt="Grid" title="Grid" border="0" />
  					<figcaption>Fig.2.1 - Figure for problem 10.</figcaption>
			</figure>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>In problem 10 assume that all the appropriate paths are equally likely. What is the probability that 
			the sensor located at point $(10,5)$ receives the message (that is, what is the probability that 
			a randomly chosen path from $(0,0)$ to $(10,20)$ goes through the point $(5,10)$)?</p>
			
			<hr /><br />
			<span class='problem'>Problem </span>*<br>
			<p>In problem 10 assume that if a sensor has a choice, it will send the message to the above sensor 
			with probability $p_a$ and will send the message to the sensor to the right with probability $p_r=1-p_a$.  
			What is the probability that the sensor located at point $(10,5)$ receives the message?</p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>There are two coins in a bag. For coin 1, $P(H)=\frac{1}{2}$ and for coin 2, $P(H)=\frac{1}{3}$. 
			Your friend chooses one of the coins at random and tosses it 5 times.
			<ol type="a">
                <li>What is the probability of observing at least $3$ heads?</li>
                <li>* You ask your friend: "Did you observe at least three heads?". Your friend replies: "yes". 
				What is the probability that coin 2 had been chosen?</li>
            </ol></p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>There are 15 people in a party, including Hannah and Sarah. We divide the 10 people in 3 groups, 
			where each group has 5 people. What is the probability that Hannah and Sarah are in the same group?</p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>You roll a die $5$ times. What is the probability that at least one value is observed more than once?</p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>I have 10 red and 10 blue cards. I shuffle the cards and then label the cards based on their orders: 
			I write the number one on the first card, the number two on the second card, and so on. What is 
			the probability that
			<ol type="a">
                <li>All red cards are assigned numbers less than or equal to $15$?</li>
                <li>Exactly $8$ red cards are assigned numbers less than or equal to $15$?</li>
            </ol></p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>I have two bags. Bag 1 contains $10$ blue marbles, while bag 2 contains $15$ blue marbles. 
			I pick one of the bags at random, and throw $6$ red marbles in it. Then I shake the bag and 
			choose $5$ marbles (without replacement) at random from the bag. If there are exactly $2$ red 
			marbles among the $5$ chosen marbles, what is the probability that I have chosen bag 1?</p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>In a communication system, packets are transmitted from a sender to a receiver. Each packet 
			is received with no error with probability $p$ independently from other packets (with probability 
			$1-p$ the packet is lost). The receiver can decode the message as soon as it receives $k$ packets 
			with no error. Find the probability that the sender sends exactly $n$ packets until the receiver 
			can decode the message successfully.</p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>How many distinct solutions does the following equation have such that all $x_i\in \mathbb{N}$
			$$x_1+x_2+x_3+x_4+x_5=100$$</p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>How many distinct solutions does the following equation have?
			$$x_1+x_2+x_3+x_4=100, \textrm{ such that }$$
			$$x_1 \in \{0,1,2,\cdots, 10\}, x_2,x_3,x_4 \in \{0,1,2,3,...\}$$</p>
			
			<hr /><br />
			<span class='problem'>Problem </span>*<br>
			<p>For this problem suppose that $x_i$'s must be non-negative integers, i.e., $x_i\in \{0,1,2,\cdots \}$ 
			for $i=1,2,3$. How many distinct solutions does the following equation have such that at least one 
			of the $x_i$'s is larger than $10$?
			$$x_1+x_2+x_3=100$$</p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>Solve the following recurrence equations, that is find a closed form formula for $a_n$.
			<ol type="a">
                <li>$a_{n}=2a_{n-1}-\frac{3}{4} a_{n-2}$,  with $a_0=0, a_1=-1$.</li>
                <li>$a_n=4a_{n-1}-4a_{n-2}$, with $a_0=2, a_1=6$.</li>
            </ol></p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>I toss a biased coin $n$ times. Let $P(H)=p$ and let $a_{n,k}$ be the probability that I observe $k$ heads.
			<ol type="a">
                <li>By conditioning on the last coin toss show that $a_{n+1,k+1}=p \cdot a_{n,k}+ (1-p) \cdot a_{n,k+1}$.</li>
                <li>Using part (a), prove that for $0\leq k< n$, we have ${n+1 \choose k+1}={n \choose k+1}+{n \choose k}$.</li>
            </ol></p>
			
			<hr /><br />
			<span class='problem'>Problem </span>*<br>
			<p>You toss a biased coin repeatedly. If $P(H)=p$, what is the probability that two consecutive 
			$H$'s are observed before we observe two consecutive $T$'s? For example, this event happens if 
			the observed sequence is $THT\underline{HH}THTT\cdots$.</p>
			
			<hr /><br />
			<span class='problem'>Problem </span><br>
			<p>I toss a biased coin $n$ times and record the sequence of heads and tails. Assume $P(H)=p$ 
			(where $0 < p < 1$). Let $a_n$ be the probability that the number of heads is divisible by $3$. 
			Write a set of recursive equations to compute $a_n$.</p>		

			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter2/2_2_3_solved2_2.php">previous</a></div>
    			<div class="right"><a href="chapter3/3_1_1_random_variables.php">next</a><a> &rarr;</a></div>
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
