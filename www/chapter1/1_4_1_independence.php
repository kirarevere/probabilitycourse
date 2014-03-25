<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../"></base>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="section"	content="1.4.1"	/>
	<?php include '../Control/autonumber.php'; ?>
	<?php loadHeaders(14); ?>
<!--
	<style>
		body	{	counter-reset:	example	<?php getExampleStart(15);	?>;	}
		.example	{	font-weight:	bold;	}
		.example:after	{	counter-increment:	example	1;	content:	counter(example);	}
	</style>
-->
	<script type="text/x-mathjax-config">
  			MathJax.Hub.Config({
    		tex2jax: { inlineMath: [['$','$'],['\\(','\\)']] },
				"HTML-CSS": { scale: 110 }
  			});
	</script>	
	<script type="text/javascript"
  			src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
	</script>
	
	<script type='text/javascript' src='http://code.jquery.com/jquery-1.6.3.js'></script>
	<script type="text/javascript" src="javascript/menu_js_code.js"></script>
	<script type="text/javascript" src="javascript/solved_prob.js"></script>
	
	<link rel="stylesheet" type="text/css" href="style_sheet.css" />
	<link rel="stylesheet" type="text/css" href="print.css" media="print" />
	<link rel="stylesheet" type="text/css" href="mobile.css" media="only screen and (max-device-width:700px), only screen and (max-width: 700px)" />

	<title>Independence | Conditional Independence</title>
	<meta name="description" content="If one event tells us nothing about the other, they are independent" />

</head><body>
	<div id="container">
		<span class="hide_print">
		<script type="text/javascript" src="javascript/top_page_html_code.js"></script>
		</span>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter1/1_4_0_conditional_probability.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_4_2_total_probability.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>1.4.1 Independence</h2></div>
    		<div class="right hide_print"><a href="videos/chapter1/video1_6.html"><img src="images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img src="images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;" id="printButton"/></div>
    		<div class="clear"></div>
			
			<p>Let $A$ be the event that it rains tomorrow, and suppose that $P(A)=\frac{1}{3}$. Also suppose that 
			I toss a fair coin; let $B$ be the event that it lands heads up. We have $P(B)=\frac{1}{2}$.</p>

			<p>Now I ask you, what is $P(A|B)$? What is your guess? You probably guessed that $P(A|B)=P(A)=\frac{1}{3}$. 
			You are right! The result of my coin toss does not have anything to do with tomorrow's weather. 
			Thus, no matter if $B$ happens or not, probability of $A$ should not change. This is an example 
			of two <b>independent</b> events. Two events are independent if one does not convey any information 
			about the other. Let us now provide a formal definition of independence.</p>
			
			<div align="center" style="padding: 15px; border: black 1px solid">
			Two events $A$ and $B$ are independent if $P(A \cap B)=P(A)P(B)$.
			</div><br>
			
			<p>Now, let's first reconcile this definition with what we mentioned earlier, $P(A|B)=P(A)$. 
			If two events are independent, then $P(A \cap B)=P(A)P(B)$, so<br><br>
			<table align="center">			
            <tr>
              <td>$P(A|B)$</td>
              <td>$ = \frac{P(A \cap B)}{P(B)}$</td>
            </tr>
            <tr>
              <td></td>
              <td>$= \frac{P(A)P(B)}{P(B)}$</td>
            </tr>
			<tr>
              <td></td>
              <td>$=P(A)$</td>
            </tr>
            </table><br>
			Thus, if two events $A$ and $B$ are independent and $P(B)\neq 0$, then $P(A|B)=P(A)$. To summarize, 
			we can say "independence means we can multiply the probabilities of events to obtain the 
			probability of their intersection", or equivalently, "independence means that conditional probability 
			of one event given another is the same as the original (prior) probability".</p>
			
			<p>Sometimes the independence of  two events is quite clear because the two events seem not to have 
			any physical interaction with each other (such as the two events discussed above). At other times, 
			it is not as clear and we need to check if they satisfy the independence condition. Let's look at an example.</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>I pick a random number from $\{1,2,3,\cdots,10\}$, and call it $N$. Suppose that all outcomes are 
			equally likely. Let $A$ be the event that $N$ is less than $7$, and let $B$ be the event that $N$ 
			is an even number. Are $A$ and $B$ independent?</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>We have $A=\{1,2,3,4,5,6\}$, $B=\{2,4,6,8,10\}$, and $A\cap B=\{2,4,6\}$. Then
						 $$P(A) =0.6$$
						 $$P(B) =0.5$$
						 $$P(A \cap B)=0.3$$
						 Therefore, $P(A \cap B)=P(A)P(B)$, so $A$ and $B$ are independent. This means that knowing 
						 that $B$ has occurred does not change our belief about the probability of $A$. In this 
						 problem the two events are about the same random number, but they are still independent 
						 because they satisfy the definition.</p>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>

			<p>The definition of independence can be extended to the case of three or more events.</p>
			<div style="padding: 15px; border: black 1px solid">
			Three events $A$, $B$, and $C$ are independent if <b>all</b> of the following conditions hold
			$$P(A \cap B)=P(A)P(B)$$
			$$P(A \cap C)=P(A)P(C)$$
			$$P(B \cap C)=P(B)P(C)$$
			$$P(A \cap B \cap C)=P(A)P(B)P(C)$$
			</div><br>
			
			<p>Note that all four of the stated conditions must hold for three events to be independent. 
			In particular, you can find situations in which three of them hold, but the fourth one does not. 
			In general, for $n$ events $A_1, A_2,\cdots,A_n$ to be independent we must have
			$$P(A_i \cap A_j)=P(A_i)P(A_j), \textrm{ for all } i,j \in \{1,2,\cdots,n\}$$
			$$P(A_i \cap A_j \cap A_k)=P(A_i)P(A_j)P(A_k), \textrm{ for all } i,j,k \in \{1,2,\cdots,n\}$$
			$$\hspace{50pt}  .    \hspace{50pt} .$$
			$$\hspace{50pt}  .    \hspace{50pt} .$$
			$$\hspace{50pt}  .    \hspace{50pt} .$$
			$$P(A_1 \cap A_2 \cap A_3 \cdots \cap A_n)=P(A_1)P(A_2)P(A_3) \cdots P(A_n)$$</p>
			
			<p>This might look like a difficult definition, but we can usually argue that the events are independent 
			in a much easier way. For example, we might be able to justify independence by looking at the way 
			the random experiment is performed. A simple example of an independent event is when you toss a coin 
			repeatedly. In such an experiment, the results of any subset of the coin tosses do not have any impact 
			on the other ones.</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>I toss a coin repeatedly until I observe the first tails at which point I stop. Let $X$ be 
			the total number of coin tosses. Find $P(X=5)$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>Here, the outcome of the random experiment is a number $X$. The goal is to find $P(A)=P(5)$. 
						 But, what does $X=5$ mean? It means that the first $4$ coin tosses result in heads and the 
						 forth one results in tails. Thus the problem is to find the probability of the sequence 
						 $HHHHT$ when tossing a coin five times. Note that $HHHHT$ is a short hand for the event 
						 "(The fist coin toss results in heads) and (The second coin toss results in heads) and 
						 (The third coin toss results in heads) and (The forth coin toss results in heads) and 
						 (The fifth coin toss results in tails)." Since all the coin tosses are independent, we 
						 can write<br><br>
						 <table align="center">			
                          <tr>
                            <td>$P(HHHHT)$</td>
                            <td>$ =P(H)P(H)P(H)P(H)P(T)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$= \frac{1}{2} . \frac{1}{2} . \frac{1}{2} . \frac{1}{2} . \frac{1}{2}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\frac{1}{32}$</td>
                          </tr>
                          </table><br>
						 </p>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<p><i>Discussion:</i> Some people find it more understandable if you look at the problem in the following way. 
			I never stop tossing the coin. So the outcome of this experiment is always an infinite sequence of heads 
			or tails. The value $X$ (which we are interested in) is just a function of the beginning part of the 
			sequence until you observe a tails. If you think about the problem this way, you should not worry about 
			the stopping time. For this problem it might not make a big difference conceptually, but for some similar 
			problems this way of thinking might be beneficial.</p>
			
			<hr /><br>
			
			<p>We have seen that two events $A$ and $B$ are independent if $P(A \cap B)=P(A)P(B)$. In the next two 
			results, we examine what independence can tell us about other set operations such as compliments and unions.</p>
			
			<span class='lemma'>Lemma </span><br>
			<p>If $A$ and $B$ are independent then
			<ul>
    			<li>$A$ and $B^c$ are independent,</li>
    			<li>$A^c$ and $B$ are independent,</li>
    			<li>$A^c$ and $B^c$ are independent.</li>
			</ul></p>
			
			<i>Proof</i><br>
			<p>We prove the first one as the others can be concluded from the first one immediately. We have<br><br>
			<table align="center">			
            <tr>
              <td>$P(A \cap B^c)$</td>
              <td>$ =P(A-B)$</td>
            </tr>
            <tr>
              <td></td>
              <td>$= P(A)-P(A \cap B)$</td>
            </tr>
			<tr>
              <td></td>
              <td>$=P(A)-P(A)P(B) \hspace{20pt} \textrm{since $A$ and $B$ are independent}$</td>
            </tr>
			<tr>
              <td></td>
              <td>$=P(A)(1-P(B))$</td>
            </tr>
			<tr>
              <td></td>
              <td>$=P(A)P(B^c)$</td>
            </tr>
            </table><br>
			Thus, $A$ and $B^c$ are independent.</p>
			<hr /><br>
			
			<p>Sometimes we are interested in the probability of the union of several independent 
			events $A_1, A_2,\cdots,A_n$. For independent events, we know how to find the probability of 
			intersection easily, but not the union. It is helpful in these cases to use De Morgan's Law:
			$$A_1 \cup A_2 \cup\cdots\cup A_n=(A_1^c \cap A_2^c \cap\cdots\cap A_n^c)^c$$
			Thus we can write<br><br>
			<table align="center">			
            <tr>
              <td>$P\big(A_1 \cup A_2 \cup\cdots\cup A_n\big)$</td>
              <td>$=1-P\big(A_1^c \cap A_2^c \cap\cdots\cap A_n^c\big)$</td>
            </tr>
            <tr>
              <td></td>
              <td>$=1-P(A_1^c)P(A_2^c) \cdots P(A_n^c) \hspace{20pt} \textrm{(since $A_i$'s are independent)}$</td>
            </tr>
			<tr>
              <td></td>
              <td>$=1-\big(1-P(A_1)\big)\big(1-P(A_2)\big)\cdots\big(1-P(A_n)\big)$</td>
            </tr>
            </table><br>
			</p>
			
			<div style="padding: 15px; border: black 1px solid">
			<p>If $A_1, A_2,\cdots,A_n$ are independent then
			$$P\big(A_1 \cup A_2 \cup\cdots\cup A_n\big)=1-\big(1-P(A_1)\big)\big(1-P(A_2)\big)\cdots\big(1-P(A_n)\big)$$</p>
			</div><br>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>Suppose that we know that probability of being killed in a single flight is $p_c=\frac{1}{4 \times 10^6}$ based 
			on available statistics. Assume that different flights are independent. If a businessman takes $20$ flights 
			per year, what is the probability that he is killed  in a plane crash within the next $20$ years? (Let's 
			assume that he will not die because of another reason within the next $20$ years.)</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>The total number of flights that he will take during the next $20$ years is 
						 $N=20 \times 20=400$. Let $p_s$ be the probability that he survives a given single 
						 flight. Then we have
						 $$p_s=1-p_c$$
						 Since these flights are independent, the probability that he will survive all $N=400$ flights is
						 $$P(\textrm{Survive $N$ flights})=p_s \times p_s \times \cdots \times p_s=p_s^N=(1-p_c)^N$$
						 Let $A$ be the event that the businessman is killed in a plane crash within the next $20$ years. Then
						 $$P(A)=1-(1-p_c)^N=9.9995 \times 10^{-5}\approx \frac{1}{10000}$$</p>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<p><b>Warning!</b> One common mistake is to confuse <u>independence</u> and <u>being disjoint</u>. These 
			are completely different concepts. When two events $A$ and $B$ are disjoint it means that if one of 
			them occurs, the other one cannot occur, i.e., $A\cap B=\emptyset$. Thus, event $A$ usually gives a 
			lot of information about event $B$ which means that they cannot be independent. Let's make it precise.</p>
			
			<hr /><br>
			
			<span class='lemma'>Lemma </span><br>
			<p>Consider two events $A$ and $B$, with $P(A)\neq 0$ and $P(B)\neq 0$. If $A$ and $B$ are disjoint, 
			then they are <b>not</b> independent.</p>
			
			<i>Proof</i><br>
			<p>Since $A$ and $B$ are disjoint, we have
			$$P(A \cap B) = 0 \neq P(A)P(B)$$
			thus, $A$ and $B$ are not independent. $\quad \square$</p>
			<hr /><br>
			
			Table 1.1 summarizes the two concepts of disjointness and independence.<br><br>
			
			<table border="1" cellpadding="10" align="center">			
            <tr>
              <td>Concept</td>
              <td>Meaning</td>
              <td>Formulas</td>
            </tr>
            <tr>
              <td>Disjoint</td>
              <td>$A$ and $B$ cannot occur at the same time</td>
              <td>$A \cap B=\emptyset, $ <br> $P(A \cup B)=P(A)+P(B)$</td>
            </tr>
			<tr>
              <td>Independent</td>
              <td>$A$ does not give any information about $B$</td>
              <td>$P(A|B)=P(A), P(B|A)=P(B)$ <br> $P(A \cap B)=P(A)P(B)$</td>
            </tr>
            </table><br>
			<div align="center">Table 1.1: Differences between disjointness and independence.</div><br>

		   <hr /><br>
			<span class='example'>Example </span> (A similar problem is given in <a href="bibliography.html#Suhov05">[6]</a>)<br>
			<p>Two basketball players play a game in which they alternately shoot a basketball at a hoop. The first 
			one to make a basket wins the game. On each shot, Player 1 (the one who shoots first) has probability 
			$p_1$ of success, while Player 2 has probability $P_2$ of success (assume $0 < p_1,p_2 < 1$). The shots 
			are assumed to be independent.</p>
			<ol type="a">
    			<li>Find $P(W_1)$, the probability that Player 1 wins the game.</li>
    			<li>For what values of $p_1$ and $p_2$ is this a fair game, i.e., each player has 
				$50$ percent chance of winning the game?</li>
			</ol> 
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>In this game, the event $W_1$ can happen in many different ways. We calculate the probability 
						 of each of these ways and then add them up to find the total probability of winning. In particular, 
						 Player 1 may win on her first shot, or her second shot, and so on. Define $A_i$ as the event that 
						 Player 1 wins on her $i$'th shot. What is the probability of $A_i$? $A_i$ happens if Player 1 is 
						 unsuccessful at her first $i-1$ shots and successful at her $i$th shot, while Player 2 is unsuccessful 
						 at her first $i-1$ shots. Since different shots are independent, we obtain
						 $$P(A_1) = p_1$$
						 $$P(A_2) =(1-p_1)(1-p_2)p_1$$
						 $$P(A_3) =(1-p_1)(1-p_2)(1-p_1)(1-p_2)p_1$$
						 $$\cdots$$
						 $$P(A_k) =\big[(1-p_1)(1-p_2)\big]^{k-1}p_1$$
						 $$\cdots$$
						 Note that $A_1, A_2, A_3,\cdots$ are disjoint events, because if one of them occurs the other 
						 one cannot occur. The event that Player 1 wins is the union of the $A_i$'s and since the 
						 $A_i$'s are disjoint we have<br><br>
						 <table align="center">			
                          <tr>
                            <td>$P(W_1)$</td>
                            <td>$=P(A_1 \cup A_2 \cup A_3 \cup \cdots )$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$= P(A_1)+P(A_2)+P(A_3)+ \cdots$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=p_1+(1-p_1)(1-p_2)p_1+\big[(1-p_1)(1-p_2)\big]^{2}p_1+\cdots$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=p_1 \bigg[1+(1-p_1)(1-p_2)+[(1-p_1)(1-p_2)\big]^{2}+\cdots\bigg]$</td>
                          </tr>
                          </table><br>
						 Note that since $0 < p_1,p_2 < 1$, for $x=(1-p_1)(1-p_2)$ we have $0 < x < 1$. Thus, using the 
						 geometric sum formula ($ \sum_{k=0}^{\infty} ax^k= a \frac{1}{1-x}$ for $|x| < 1$), we obtain
						 $$P(W_1)=\frac{p_1}{1-(1-p_1)(1-p_2)}=\frac{p_1}{p_1+p_2-p_1p_2}$$
						 It is always a good idea to look at limit cases to check our answer. For example, if we plug 
						 in $p_1=0, p_2\neq 0$, we obtain $P(W_1)=0$, which is what we expect. Similarly, if we let 
						 $p_2=0, p_1\neq 0$, we obtain $P(W_1)=1$, which again makes sense.</p>
						 
						 <p>Now, to make this a fair game (in the sense that $P(W_1)=.5$), we have
						 $$P(W_1)=\frac{p_1}{p_1+p_2-p_1p_2}=0.5$$
						 and we obtain
						 $$p_1 =\frac{p_2}{1+p_2}$$
						 Note that this means that $p_1 < p_2$, which makes sense intuitively. Since Player 1 
						 has the advantage of starting the game, she should have smaller success rate so that 
						 the whole game is fair.</p>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>

			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter1/1_4_0_conditional_probability.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_4_2_total_probability.php">next</a><a> &rarr;</a></div>
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
