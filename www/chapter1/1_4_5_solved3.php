<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../"></base>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="section"	content="1.4.5"	/>
	<?php include '../Control/autonumber.php'; ?>
	<?php loadHeaders(18); ?>
<!--
	<style>
		body	{	counter-reset:	example	<?php getExampleStart(19);	?>;	}
		.example	{	font-weight:	bold;	}
		.example:after	{	counter-increment:	example	1;	content:	counter(example);	}
	</style>
-->
	<script type="text/x-mathjax-config">
  			MathJax.Hub.Config({
    		tex2jax: { inlineMath: [['$','$'],['\\(','\\)']] },
				"HTML-CSS": { scale: 125}
  			});
	</script>	
	<script type="text/javascript"
  			src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
	</script>
	
	<script type='text/javascript' src='http://code.jquery.com/jquery-1.6.3.js'></script>
	<script type="text/javascript" src="javascript/menu_js_code.js"></script>
	<script type="text/javascript" src="javascript/solved_prob.js"></script>
	
	<link rel="stylesheet" type="text/css" href="style_sheet.css" />

	<title>Intro to Probability</title>

</head><body>
	<div id="container">
		<script type="text/javascript" src="javascript/top_page_html_code.js"></script>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock">
				<div class="left"><a>&larr; </a><a href="chapter1/1_4_4_conditional_independence.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_5_0_chapter1_problems.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>1.4.5 Conditional Probability: Solved Problems</h2></div>
    		<div class="right"><a href="videos/chapter1/video1_10.html"><img src="images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<a href="chapter1/solved3_print.html"><img src="images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></a></div>
    		<div class="clear"></div>
			
			<p>In die and coin problems, unless stated otherwise, it is assumed coins and dies are fair 
			and repeated trials are independent.</p>
			
			<hr /><br>
			<span class='problem'>Problem </span><br>
			<p>You purchase a certain product. The manual states that the lifetime $T$ of the product, 
			defined as the amount of time (in years) the product works properly until it breaks down, satisfies
			$$P(T \geq t)=e^{-\frac{t}{5}} \textrm{ for all } t \geq 0$$
			For example, the probability that the product lasts more than (or equal to) $2$ years is 
			$P(T \geq 2)=e^{-\frac{2}{5}}=0.6703$. I purchase the product and use it for two years without 
			any problems. What is the probability that it breaks down in the third year?</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>Let $A$ be the event that a purchased product breaks down in the third year. Also, let $B$ be the event 
						 that a purchased product does not break down in the first two years. We are interested in $P(A|B)$. We have<br><br>
						 <table align="center">			
                          <tr>
                            <td>$P(B)$</td>
                            <td>$=P(T \geq 2)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=e^{-\frac{2}{5}}$</td>
                          </tr>
                          </table><br>
						 We also have<br>
						 <table align="center">			
                          <tr>
                            <td>$P(A)$</td>
                            <td>$=P(2 \leq T \leq 3)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=P(T \geq 2)-P(T \geq 3)$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=e^{-\frac{2}{5}}-e^{-\frac{3}{5}}$</td>
                          </tr>
                          </table><br>
						 Finally, since $A \subset B$, we have $A \cap B=A$. Therefore,<br><br>
						 <table align="center">			
                          <tr>
                            <td>$P(A|B)$</td>
                            <td>$=\frac{P(A \cap B)}{P(B)}$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=\frac{P(A)}{P(B)}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\frac{e^{-\frac{2}{5}}-e^{-\frac{3}{5}}}{e^{-\frac{2}{5}}}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=0.1813$</td>
                          </tr>
                          </table><br>
						 </p>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>

			<span class='problem'>Problem </span><br>
			<p>You toss a fair coin three times:
			<ol type="a">
    			<li>What is the probability of three heads, $HHH$?</li>
    			<li>What is the probability that you observe exactly one heads?</li>
    			<li>Given that you have observed <i>at least</i> one heads, what is the probability 
				that you observe at least two heads?</li>
			</ol></p> 
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>We assume that the coin tosses are independent.
						 <ol type="a">
    					 	 <li>$P(HHH)=P(H)\cdot P(H) \cdot P(H)=0.5^3=\frac{1}{8}$.</li>
    						 <li>To find the probability of exactly one heads, we can write<br><br>
							 <table align="center">			
                              <tr>
                                <td>$P(\textrm{One heads})$</td>
                                <td>$=P(HTT \cup THT \cup TTH)$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=P(HTT)+P(THT)+P(TTH)$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\frac{1}{8}+\frac{1}{8}+\frac{1}{8}$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\frac{3}{8}$</td>
                              </tr>
                              </table><br>
							 </li>
							 <li>Given that you have observed <i>at least</i> one heads, what is the probability 
							 that you observe at least two heads? Let $A_1$ be the event that you observe at 
							 least one heads, and $A_2$ be the event that you observe at least two heads. Then
							 $$A_1 =S-\{TTT\}, \textrm{ and } P(A_1)=\frac{7}{8}$$
							 $$A_2 =\{HHT,HTH,THH,HHH\}, \textrm{ and } P(A_2)=\frac{4}{8}$$
							 Thus, we can write<br>
							 <table align="center">			
                              <tr>
                                <td>$P(A_2|A_1)$</td>
                                <td>$=\frac{P(A_2 \cap A_1)}{P(A_1)}$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=\frac{P(A_2)}{P(A_1)}$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\frac{4}{8}.\frac{8}{7}=\frac{4}{7}$</td>
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

			<span class='problem'>Problem </span><br>
			<p>For three events $A$, $B$, and $C$, we know that
			<ul>
    			<li>$A$ and $C$ are independent,</li>
    			<li>$B$ and $C$ are independent,</li>
    			<li>$A$ and $B$ are disjoint,</li>
    			<li>$P(A \cup C)=\frac{2}{3}, P(B \cup C)=\frac{3}{4}, P(A \cup B\cup C)=\frac{11}{12}$</li>
			</ul>
			Find $P(A), P(B)$, and $P(C)$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>We can use the Venn diagram in Figure 1.26 to better 
						 visualize the events in this problem. In write $P(A)=a, P(B)=b, P(C)=c$. Note that 
						 the assumptions about independence and disjointness of sets are already included in the figure.</p>
						 <figure>
  						 		 <img src="images/chapter1/venn-prob-IndepDisj_b.png" width="300" height="230" alt="Venn diagram" title="Venn diagram" border="0" />
  								 <figcaption>Fig.1.26 - Venn diagram for Problem 3.</figcaption>
						 </figure>
						 <p>Now we can write
						 $$P(A \cup C)= a+c-ac=\frac{2}{3}$$
						 $$P(B \cup C)=b+c-bc=\frac{3}{4}$$
						 $$P(A \cup B\cup C)=a+b+c-ac-bc=\frac{11}{12}$$
						 By subtracting the third equation from the sum of the first and second equations, we 
						 immediately obtain $c=\frac{1}{2}$, which then gives $a=\frac{1}{3}$ and $b=\frac{1}{2}$.</p>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>

			<span class='problem'>Problem </span><br>
			<p>Let $C_1, C_2,\cdots,C_M$ be a partition of the sample space $S$, and $A$ and $B$ be two events. 
			Suppose that we know that
			<ul>
    			<li>$A$ and $B$ are conditionally independent given $C_i$, for all $i \in \{1,2,\cdots,M\}$.</li>
    			<li>$B$ is independent of all $C_i$'s.</li>
			</ul>
			Prove that $A$ and $B$ are independent.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>Since the $C_i$'s form a partition of the sample space, we can apply the law of 
						 total probability for $A \cap B$:<br><br>
						 <table align="center">			
                          <tr>
                            <td>$P(A \cap B)$</td>
							<td>$=\sum_{i=1}^{M} P(A \cap B|C_i)P(C_i)$</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td></td>
							<td>$=\sum_{i=1}^{M} P(A|C_i)P(B|C_i)P(C_i) \hspace{10pt}$</td>
                            <td>$\textrm{  $A$ and $B$ are conditionally independent}$</td>
                          </tr>
						  <tr>
                            <td></td>
							<td>$=\sum_{i=1}^{M} P(A|C_i)P(B)P(C_i)$</td>
                            <td>$\textrm{  $B$ is independent of all $C_i$'s}$</td>
                          </tr>
						  <tr>
                            <td></td>
							<td>$=P(B) \sum_{i=1}^{M} P(A|C_i)P(C_i)$</td>
                            <td></td>
                          </tr>
						  <tr>
                            <td></td>
							<td>$=P(B) P(A)$</td>
                            <td>$\textrm{ law of total probability}$</td>
                          </tr>
                          </table><br>
						  </p>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>

			<span class='problem'>Problem </span><br>
			<p>In my town, it's rainy one third of the days. Given that it is rainy, there will be heavy 
			traffic with probability $\frac{1}{2}$, and given that it is not rainy, there will be heavy 
			traffic with probability $\frac{1}{4}$. If it's rainy and there is heavy traffic, I arrive 
			late for work with probability $\frac{1}{2}$. On the other hand, the probability of being 
			late is reduced to $\frac{1}{8}$ if it is not rainy and there is no heavy traffic. In 
			other situations (rainy no traffic, not rainy and traffic) the probability of being late 
			is $0.25$. You pick a random day.
			<ol type="a">
    			<li>What is the probability that it's not raining and there is heavy traffic and I am not late?</li>
    			<li>What is the probability that I am late?</li>
    			<li>Given that I arrived late at work, what is the probability that it rained that day?</li>
			</ol></p> 
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>Let $R$ be the event that it's rainy, $T$ be the event that there is heavy traffic, 
						 and $L$ be the event that I am late for work. As it is seen from the problem statement, 
						 we are given conditional probabilities in a chain format, thus it is useful to draw 
						 a tree diagram. Figure 1.27 shows a tree diagram for this problem. 
						 In this figure, each leaf in the tree corresponds to a single outcome in the sample space. 
						 We can calculate the probabilities of each outcome in the sample space by multiplying 
						 the probabilities on the edges of the tree that lead to the corresponding outcome.</p>
						 <figure>
  						 		 <img src="images/chapter1/prob-late_b.png" width="600" height="405" alt="Tree diagram" title="Tree diagram" border="0" />
  								 <figcaption>Fig.1.27 - Tree diagram for Problem 5.</figcaption>
						 </figure>
						 <ol type="a">
    					 	 <li>The probability that it's not raining and there is heavy traffic and I am not late can 
							 be found using the tree diagram which is in fact applying the chain rule:<br><br>
							 <table align="center">			
                              <tr>
                                <td>$P(R^c \cap T \cap L^c)$</td>
                                <td>$= P(R^c)P(T|R^c)P(L^c|R^c \cap T)$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=\frac{2}{3} \cdot \frac{1}{4} \cdot \frac{3}{4}$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\frac{1}{8}$</td>
                              </tr>
                              </table><br>
							 </li>
							 <li>The probability that I am late can be found from the tree. All we need to do is sum 
							 the probabilities of the outcomes that correspond to me being late. In fact, we are using 
							 the law of total probability here.<br><br>
							 <table align="center">			
                              <tr>
                                <td>$P(L)$</td>
                                <td>$ = P(R,T,L)+P(R,T^c,L)+P(R^c,T,L)+P(R^c,T^c,L)$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=\frac{1}{12}+\frac{1}{24}+\frac{1}{24}+\frac{1}{16}$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$= \frac{11}{48}$</td>
                              </tr>
                              </table><br>
							 </li>
							 <li>We can find $P(R|L)$ using $P(R|L)=\frac{P(R \cap L)}{P(L)}$. We have already found 
							 $P(L)=\frac{11}{48}$, and we can find $P(R \cap L)$ similarly by adding the probabilities 
							 of the outcomes that belong to $R \cap L$. In particular,<br><br>
							 <table align="center">			
                              <tr>
                                <td>$P(R \cap L)$</td>
                                <td>$ = P(R,T,L)+P(R,T^c,L)$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=\frac{1}{12}+\frac{1}{24}$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$= \frac{1}{8}$</td>
                              </tr>
                              </table><br>
							 Thus, we obtain<br><br>
							 <table align="center">			
                              <tr>
                                <td>$P(R|L)$</td>
                                <td>$ = \frac{P(R \cap L)}{P(L)}$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=\frac{1}{8}. \frac{48}{11}$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$= \frac{6}{11}$</td>
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
			<p>A box contains three coins: two regular coins and one fake two-headed coin ($P(H)=1$),
			<ul>
    			<li>You pick a coin at random and toss it. What is the probability that it lands heads up?</li>
    			<li>You pick a coin at random and toss it, and get heads. What is the probability that it is the two-headed coin?</li>
			</ul></p> 
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>This is another typical problem for which the law of total probability is useful. 
						 Let $C_1$ be the event that you choose a regular coin, and let $C_2$ be the event 
						 that you choose the two-headed coin. Note that $C_1$ and $C_2$ form a partition of 
						 the sample space. We already know that
						 $$P(H|C_1)=0.5$$
						 $$P(H|C_2)=1$$
						 <ol type="a">
    					 	 <li>Thus, we can use the law of total probability to write<br><br>
							 <table align="center">			
                              <tr>
                                <td>$P(H)$</td>
                                <td>$=P(H|C_1)P(C_1)+P(H|C_2)P(C_2)$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$= \frac{1}{2}. \frac{2}{3} + 1 . \frac{1}{3}$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\frac{2}{3}$</td>
                              </tr>
                              </table><br>
							 </li>
							 <li>Now, for the second part of the problem, we are interested in $P(C_2|H)$. We use Bayes' rule<br><br>
							 <table align="center">			
                              <tr>
                                <td>$P(C_2|H)$</td>
                                <td>$=\frac{P(H|C_2)P(C_2)}{P(H)}$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=\frac{1 . \frac{1}{3}}{\frac{2}{3}}$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\frac{1}{2}$</td>
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

			<span class='problem'>Problem </span><br>
			<p>Here is another variation of the family-with-two-children 
			problem  <a href="bibliography.html#wiki-two-child">[1]</a> <a href="bibliography.html#mlodinow08">[7]</a>. 
			A family has two children. We ask from the father, "Do you have at least one daughter named Lilia?" 
			He replies, "Yes!"  What is the probability that both children are girls? In other words, we want to find 
			the probability that both children are girls, given that the family has at least one daughter named Lilia. 
			Here you can assume that if a child is a girl, her name will be Lilia with probability $\alpha \ll 1$ 
			independently from other children's names. If the child is a boy, his name will not be Lilia. Compare your 
			result with the second part of <a href="chapter1/1_4_0_conditional_probability.php#example18">Example 1.18</a>.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>Here we have four possibilities, $GG=(\textrm{girl, girl}), GB, BG, BB$, 
						 and $P(GG)=P(GB)=P(BG)=P(BB)=\frac{1}{4}$. Let also $L$ be the event that the family 
						 has at least one child named Lilia. We have
						 $$P(L|BB)=0$$
						 $$P(L|BG)=P(GB)=\alpha$$
						 $$P(L|GG)=\alpha (1-\alpha)+ (1-\alpha) \alpha +\alpha^2=2 \alpha-\alpha^2$$
						 We can use Bayes' rule to find $P(GG|L)$:<br><br>
						 <table align="center">			
                          <tr>
                            <td>$P(GG|L)$</td>
                            <td>$=\frac{P(L|GG)P(GG)}{P(L)}$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$= \frac{P(L|GG)P(GG)}{P(L|GG)P(GG)+P(L|GB)P(GB)+P(L|BG)P(BG)+P(L|BB)P(BB)}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=  \frac{(2 \alpha-\alpha^2)\frac{1}{4}}{(2 \alpha-\alpha^2)\frac{1}{4}+ \alpha \frac{1}{4}+ \alpha \frac{1}{4}+0.\frac{1}{4}}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$= \frac{2-\alpha}{4-\alpha}\approx \frac{1}{2}$</td>
                          </tr>
                          </table><br>
						  </p>
						 
						 <p>Let's compare the result with part (b) of Example 1.18. Amazingly, we notice that the 
						 extra information about the name of the child increases the conditional probability of 
						 $GG$ from $\frac{1}{3}$ to about $\frac{1}{2}$. How can we explain this intuitively? 
						 Here is one way to look at the problem. In  part (b) of Example 1.18, 
						 we know that the family has at least one girl. Thus, the sample space reduces to three 
						 equally likely outcomes: $GG, GB, BG$, thus the conditional probability of $GG$ is 
						 one third in this case. On the other hand, in this problem, the available information 
						 is that the event $L$ has occurred. The conditional sample space here still is $GG, GB, 
						 BG$, but these events are not equally likely anymore. A family with two girls is more 
						 likely to name at least one of them Lilia than a family who has only one girl 
						 ($P(L|BG)=P(GB)=\alpha$, $ P(L|GG)=2 \alpha-\alpha^2$), thus in this case the conditional 
						 probability of $GG$ is higher. We would like to mention here that these problems are confusing 
						 and counterintuitive to most people. So, do not be disappointed if they seem confusing to you. 
						 We seek several goals by including such problems.</p>
						 
						 <p>First, we would like to emphasize that we should not rely too much on our intuition when solving 
						 probability problems. Intuition is useful, but at the end, we must use laws of probability to solve 
						 problems. Second, after obtaining counterintuitive results, you are encouraged to think deeply 
						 about them to explain your confusion. This thinking process can be very helpful to improve our 
						 understanding of probability. Finally, I personally think these paradoxical looking problems makes 
						 probability more interesting.</p>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span><br>
			If you are not yet confused, let's look at another family-with-two-children problem! I know that a 
			family has two children. I see one of the children in the mall and notice that she is a girl. 
			What is the probability that both children are girls? Again compare your result with the second 
			part of <a href="chapter1/1_4_0_conditional_probability.php#example18">Example 1.18</a>. 
			Note: Let's agree on what precisely the problem statement means. Here is a more precise statement of the 
			problem: "A family has two children. We choose one of them at random and find out that she is a girl. 
			What is the probability that both children are girls?"
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>Let's first agree on what precisely the problem statement means. Here is a more precise statement 
						 of the problem: "A family has two children. We choose one of them at random and find out that 
						 she is a girl. What is the probability that both children are girls?" Here again, we have four 
						 possibilities, $GG=(\textrm{girl, girl}), GB, BG, BB$, and $P(GG)=P(GB)=P(BG)=P(BB)=\frac{1}{4}$. 
						 Now, let $G_r$ be the event that a randomly chosen child is a girl. Then we have
						 $$P(G_r|GG)=1$$
						 $$P(G_r|GB)=P(G_r|BG)=\frac{1}{2}$$
						 $$P(G_r|BB)=0$$
						 We can use the Bayes' rule to find $P(GG|G_r)$:<br><br>
						 <table align="center">			
                          <tr>
                            <td>$P(GG|G_r)$</td>
                            <td>$=\frac{P(G_r|GG)P(GG)}{P(G_r)}$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$= \frac{P(G_r|GG)P(GG)}{P(G_r|GG)P(GG)+P(G_r|GB)P(GB)+P(G_r|BG)P(BG)+P(G_r|BB)P(BB)}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=  \frac{1.\frac{1}{4}}{1. \frac{1}{4}+ \frac{1}{2} \frac{1}{4}+ \frac{1}{2} \frac{1}{4}+0.\frac{1}{4}}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$= \frac{1}{2}$</td>
                          </tr>
                          </table><br>
						 </p>
						 
						 <p>So the answer again is different from the second part of Example 1.18. This is surprising to 
						 most people. The two problem statement look very similar but the answers are completely different. 
						 This is again similar to the previous problem (please read the explanation there). The conditional 
						 sample space here still is $GG, GB, BG$, but the point here is that these are not equally likely 
						 such as they are in Example 1.18. The probability that a randomly chosen child 
						 from a family with two girls is a girl is one, while this probability for a family who has 
						 only one girl is $\frac{1}{2}$. Thus, intuitively, the conditional probability of the outcome 
						 $GG$ in this case is higher than $GB$ and $BG$, and thus this conditional probability must be 
						 larger than one third.</p>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>

			<span class='problem'>Problem </span><br>
			<p>Okay, another family-with-two-children problem. Just kidding! This problem has nothing to do with the 
			two previous problems. I toss a coin repeatedly. The coin is unfair and $P(H)=p$. The game ends the 
			first time that two consecutive heads ($HH$) or two consecutive tails ($TT$) are observed. I win if 
			$HH$ is observed and lose if $TT$ is observed. For example if the outcome is $HTH\underline{TT}$, I 
			lose. On the other hand, if the outcome is $THTHT\underline{HH}$, I win. Find the probability that I 
			win.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 Let $W$ be the event that I win. We can write down the set $W$ by listing all different 
						 sequences that result in my winning. It is cleaner if we divide $W$ into two parts depending 
						 on the result of the first coin toss,
						 $$W  =\{HH, HTHH, HTHTHH,\cdots \} \cup \{THH, THTHH, THTHTHH,\cdots \}$$
						 Let $q=1-p$. Then<br><br>
						 <table align="center">			
                          <tr>
                            <td>$W$</td>
                            <td>$=P(\{HH, HTHH, HTHTHH,\cdots \})+P(\{THH, THTHH, THTHTHH,\cdots \})$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=p^2+p^3q+ p^4q^2+\cdots+q^2q+p^3q^2+ p^4q^3+\cdots$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=p^2(1+pq+(pq)^2+(pq)^3+\cdots)+p^2q(1+pq+(pq)^2+(pq)^3+\cdots)$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=p^2(1+q)(1+pq+(pq)^2+(pq)^3+\cdots)$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\frac{p^2(1+q)}{1-pq}, \hspace{10pt}\textrm{ Using the geometric series formula}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\frac{p^2(2-p)}{1-p+p^2}$</td>
                          </tr>
                          </table><br>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>

			<hr />
			<div class="thinblock">
				<div class="left"><a>&larr; </a><a href="chapter1/1_4_4_conditional_independence.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_5_0_chapter1_problems.php">next</a><a> &rarr;</a></div>
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
