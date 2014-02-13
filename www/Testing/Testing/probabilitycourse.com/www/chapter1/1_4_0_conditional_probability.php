<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../"></base>
	<!-- Autonumbering -->
	<?php include '../Control/autonumber.php'; ?>
	<?php loadHeaders(13); ?>
<!--
	<style>
		.example	{	font-weight:	bold;	}
		.example:after	{	counter-increment:	example	1;	content:	counter(example);	}
	</style>
-->
	<!-- Autonumbering -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="section"	content="1.4.0"	/>

<!--
	<style>
		.example	{	font-weight:	bold;	}
		.example:after	{	counter-increment:	example	1;	content:	counter(example);	}
	</style>
-->
	<script type="text/x-mathjax-config">
  			MathJax.Hub.Config({
    		tex2jax: { inlineMath: [['$','$'],['\\(','\\)']] },
				"HTML-CSS": { scale: 100 }
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
				<div class="left"><a>&larr; </a><a href="chapter1/1_3_6_solved2.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_4_1_independence.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>1.4 Conditional Probability</h2></div>
    		<div class="right"><a href="videos/chapter1/video1_5.html"><img src="images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<a href="chapter1/conditional_probability_print.html"><img src="images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></a></div>
    		<div class="clear"></div>
			
			<p>In this section, we discuss one of the most fundamental concepts in probability theory. Here is the 
			question: as you obtain additional information, how should you update probabilities of events? For 
			example, suppose that in a certain city, $23$ percent of the days are rainy. Thus, if you pick a 
			random day, the probability that it rains that day is $23$ percent:
			$$P(R)=0.23, \textrm{where } R \textrm{ is the event that it rains on the randomly chosen day.}$$
			Now suppose that I pick a random day, but I also tell you that it is cloudy in the chosen day. 
			Now that you have this extra piece of information, how do you update the chance that it rains in 
			that day. In other words, what is the probability that it rains <b>given that</b> it is cloudy? 
			If $C$ is the event that it is cloudy, then we write this as $P(R | C)$, the <i>conditional 
			probability of $R$ given that $C$ has occurred</i>.  It is reasonable to assume that in this 
			example, $P(R | C)$ should be larger than the original $P(R)$, which is called the <b>prior probability</b> of $C$. 
			But what exactly should $P(R | C)$ be? Before providing a general formula, let's look at a simple example.</p>
			
			<hr /><br>
			<span class="example">Example </span><br>
			<p>I roll a fair die. Let $A$ be the event that the outcome is an odd number, i.e., $A=\{1,3,5\}$. Also let $B$ 
			be the event that the outcome is less than or equal to $3$, i.e., $B=\{1,2,3\}$. What is the probability 
			of $A$, $P(A)$? What is the probability of $A$ given $B$, $P(A|B)$?</p>
			
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>This is a finite sample space, so
						 $$P(A)=\frac{|A|}{|S|}=\frac{|\{1,3,5\}|}{6}=\frac{1}{2}$$
						 Now, let's find the conditional probability of $A$ given that $B$ occurred. If we know $B$ has occurred, 
						 the outcome must be among $\{1,2,3\}$. For $A$ to also happen the outcome must be in $A \cap B=\{1,3\}$. 
						 Since all die rolls are equally likely, we argue that $P(A|B)$ must be equal to
						 $$P(A|B)=\frac{|A \cap B|}{|B|}=\frac{2}{3}$$</p>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<p>Now let's see how we can generalize the above example. We can rewrite the calculation by dividing 
			the numerator and denominator by $|S|$ in the following way
			$$P(A|B)=\frac{|A \cap B|}{|B|}=\frac{\frac{|A \cap B|}{|S|}}{\frac{|B|}{|S|}}=\frac{P(A \cap B)}{P(B)}$$
			Although, the above calculation has been done for a finite sample space with equally likely outcomes, 
			it turns out the resulting formula is quite general and can be  applied in any setting. Below, we 
			formally provide the formula and then explain the intuition behind it.</p>
			
			<div style="padding: 15px; border: black 1px solid">
			<p>If $A$ and $B$ are two events in a sample space $S$, then the <b>conditional probability of 
			$A$ given $B$</b> is defined as
			$$P(A|B)=\frac{P(A \cap B)}{P(B)}, \textrm{ when } P(B)>0$$
			</p></div><br>
			
			<p>Here is the intuition behind the formula. When we know that $B$ has occurred, every outcome that 
			is outside $B$ should be discarded. Thus, <i>our sample space is reduced to the set $B$</i>, 
			Figure 1.21. Now the only way that $A$ can happen is when the outcome belongs 
			to the set $A \cap B$. We divide $P(A \cap B)$ by $P(B)$, so that the conditional probability 
			of the new sample space becomes $1$, i.e., $P(B|B)=\frac{P(B \cap B)}{P(B)}=1$.</p>
			
			<p>Note that conditional probability of $P(A|B)$ is undefined when $P(B)=0$. That is okay because 
			if $P(B)=0$, it means that the event $B$ never occurs so it does not make sense to talk about 
			the probability of $A$ given $B$.</p>
			
			<figure>
					<img src="images/chapter1/conditional_b.png" width="300" height="300" alt="Conditional probability" title="Conditional probability" border="0" />
  					<figcaption>Fig. 1.21 - Venn diagram for conditional probability, $P(A|B)$.</figcaption>
			</figure>
			
			<p>It is important to note that conditional probability itself is a probability measure, so it satisfies 
			probability axioms. In particular,
			<ul>
    			<li>Axiom 1: For any event $A$, $P(A|B) \geq 0$.</li>
    			<li>Axiom 2: Conditional probability of $B$ given $B$ is $1$, i.e., $P(B|B)=1$.</li>
    			<li>Axiom 3: If $A_1, A_2, A_3, \cdots$ are disjoint events, then $P(A_1 \cup A_2 \cup A_3 
				\cdots|B)=P(A_1|B)+P(A_2|B)+P(A_3|B)+\cdots.$</li>
			</ul>
			In fact, all rules that we have learned so far can be extended to conditional probability. For example, 
			the formulas given in <a href="chapter1/1_3_3_finding_probabilities.php#example10">Example 1.10</a> can be rewritten:</p>
			
			<span class="example">Example </span><br>
			<p>For three events, $A$, $B$, and $C$, with $P(C)>0$ we have
			<ul>
    			<li>$P(A^c|C)=1-P(A|C)$.</li>
    			<li>$P(\emptyset|C)=0$.</li>
    			<li>$P(A|C) \leq 1$.</li>
    			<li>$P(A-B|C)=P(A|C)-P(A \cap B|C)$.</li>
    			<li>$P(A \cup B|C)=P(A|C)+P(B|C)-P(A \cap B|C)$ .</li>
    			<li>If $A \subset B$ then $P(A|C) \leq P(B|C)$.</li>
			</ul></p>
			
			<hr /><br>
			
			<p>Let's look at some special cases of conditional probability:
			<ul>
    			<li>When $A$ and $B$ are disjoint: In this case $A \cap B=\emptyset$, so<br><br>
				<table align="center">			
                <tr>
                  <td>$P(A|B)$</td>
                  <td>$=\frac{P(A \cap B)}{P(B)}$</td>
                </tr>
                <tr>
                  <td></td>
                  <td>$= \frac{P(\emptyset)}{P(B)}$</td>
                </tr>
				<tr>
                  <td></td>
                  <td>$=0$</td>
                </tr>
                </table><br>
				This makes sense, since $A$ and $B$ are disjoint they cannot both occur at the same time. 
				Thus, given that $B$ has occurred, the probability of $A$ must be zero.</li><br>
				<li>When $B$ is a subset of $A$: If $B \subset A$, then whenever $B$ happens, $A$ also happens.  
				Thus, given that $B$ occurred, we expect that probability of $A$ be one. In this case $A \cap B=B$, so<br><br>
				<table align="center">			
                <tr>
                  <td>$P(A|B)$</td>
                  <td>$=\frac{P(A \cap B)}{P(B)}$</td>
                </tr>
                <tr>
                  <td></td>
                  <td>$= \frac{P(B)}{P(B)}$</td>
                </tr>
				<tr>
                  <td></td>
                  <td>$=1$</td>
                </tr>
                </table><br>
				</li>
				<li>When $A$ is a subset of $B$: In this case $A \cap B=A$, so<br><br>
				<table align="center">			
                <tr>
                  <td>$P(A|B)$</td>
                  <td>$=\frac{P(A \cap B)}{P(B)}$</td>
                </tr>
                <tr>
                  <td></td>
                  <td>$= \frac{P(A)}{P(B)}$</td>
                </tr>
                </table><br>
				</li>
			</ul></p>
			
			<hr /><br>
			<span class="example">Example </span><br>
			<p>I roll a fair die twice and obtain two numbers $X_1=$ result of the first roll and $X_2=$  result of the second 
			roll. Given that I know $X_1+X_2=7$, what is the probability that $X_1=4$ or $X_2=4$?</p>

			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>Let $A$ be the event that $X_1=4$ or $X_2=4$ and $B$ be the event that $X_1+X_2=7$. We are 
						 interested in $P(A|B)$, so we can use
						 $$P(A|B)=\frac{P(A \cap B)}{P(B)}$$
						 We note that
						 $$A=\{(4,1),(4,2),(4,3),(4,4),(4,5),(4,6),(1,4),(2,4),(3,4),(4,4),(5,4),(6,4)\}$$
						 $$B=\{(6,1),(5,2),(4,3),(3,4),(2,5),(1,6)\}$$
						 $$A \cap B= \{(4,3),(3,4)\}$$
						 We conclude
						 $$P(A|B)=\frac{P(A \cap B)}{P(B)}$$
						 $$=\frac{\frac{2}{36}}{\frac{6}{36}}$$
						 $$=\frac{1}{3}$$</p>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<p>Conditional probability can be tricky and sometimes the results are counterintuitive. Let's look at a 
			famous probability problem, called the two-child problem. Many versions of this problem have been 
			discussed <a href="bibliography.html#wiki-two-child">[1]</a> in the literature and we will review a few of them in this chapter. We suggest that you 
			try to guess the answers before solving the problem using probability formulas.</p>
			
			<hr /><br>
			<a name="example18"></a>
			<span class="example">Example </span><br>
			<p>Consider a family that has two children. We are interested in the children's genders. Our sample space 
			is $S=\{(G,G),(G,B),(B,G),(B,B)\}$. Also assume that all four possible outcomes are equally likely.
			<ol type="a">
    			<li>What is the probability that both children are girls given that the first child is a girl?</li>
   				 <li>We ask the father: "Do you have at least one daughter?" He responds "Yes!" Given this 
				extra information, what is the probability that both children are girls? In other words, 
				what is the probability that both children are girls given that we know at least one of them 
				is a girl?</li>
			</ol> </p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 Let $A$ be the event that both children are girls, i.e., $A=\{(G,G)\}$. Let $B$ be the 
						 event that the first child is a girl, i.e., $B=\{(G,G),(G,B)\}$. Finally, let $C$ be the 
						 event that at least one of the children is a girl, i.e., $C=\{(G,G),(G,B),(B,G)\}$. Since 
						 the outcomes are equally likely, we can write
						 $$P(A)=\frac{1}{4},$$
						 $$P(B)=\frac{2}{4}=\frac{1}{2},$$
						 $$P(C)=\frac{3}{4}$$
						 <ol type="a">
    					 	 <li>What is the probability that both children are girls given that the first child is a 
							 girl? This is $P(A|B)$, thus we can write<br><br>
							 <table align="center">			
                              <tr>
                                <td>$P(A|B)$</td>
                                <td>$= \frac{P(A \cap B)}{P(B)}$</td>
								<td></td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$= \frac{P(A)}{P(B)} \hspace{20pt}$</td>
								<td>$(\textrm{since } A \subset B)$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\frac{\frac{1}{4}}{\frac{1}{2}}=\frac{1}{2}$</td>
								<td></td>
                              </tr>
                              </table><br>
							 </li>
							 <li>What is the probability that both children are girls given that we know at least 
							 one of them is a girl? This is $P(A|C)$, thus we can write<br><br>
							 <table align="center">			
                              <tr>
                                <td>$P(A|C)$</td>
                                <td>$= \frac{P(A \cap B)}{P(C)}$</td>
								<td></td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$= \frac{P(A)}{P(C)} \hspace{20pt}$</td>
								<td>$ (\textrm{since } A \subset C)$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\frac{\frac{1}{4}}{\frac{3}{4}}=\frac{1}{3}$</td>
								<td></td>
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
			
			<p><i>Discussion:</i> Asked to guess the answers, many people would guess that both $P(A|B)$ and $P(A|C)$ 
			should be $50$ percent. However, as we see  $P(A|B)$ is $50$ percent, while $P(A|C)$ is only $33$ percent. 
			This is an example where the answers are somewhat counterintuitive. We emphasize that, although it is always 
			useful to try to have intuition about probability problems, we should not rely on our intuition too much. 
			To understand the results of this problem, it is helpful to note that the event $B$ is a subset of the 
			event $C$. In fact, it is strictly smaller: it does not include the element $(B,G)$, while $C$ has that 
			element. Thus the set $C$ has more outcomes that are not in $A$ than $B$, which means that $P(A|C)$ should 
			be smaller than $P(A|B)$.</p>
			
			<p>It is often useful to think of probability as percentages. For example, to better understand the results of 
			this problem, let us imagine that there are $4000$ families that have two children. Since the outcomes 
			$(G,G),(G,B),(B,G)$, and $(B,B)$ are equally likely, we will have roughly $1000$ families associated 
			with each outcome as shown in Figure 1.22. To find probability $P(A|C)$, we are performing the 
			following experiment: we choose a random family from the families with at least one daughter. These are 
			the families shown in the box. From these families, there are $1000$ families with two girls and there are 
			$2000$ families with exactly one girl. Thus, probability of choosing a family with two girls is $\frac{1}{3}$.</p>
			
			<figure>
  					<img src="images/chapter1/GG_Problem.png" width="300" height="215" alt="Figure" title="Figure" border="0" />
  					<figcaption>Fig.1.22 - An example to help the understanding of $P(A|C)$ in Example 1.18.</figcaption>
			</figure><br>
			
			<b>Chain rule for conditional probability:</b><br>
			<p>Let us write the formula for conditional probability in the following format
			<a name="equation"></a>
			$$\hspace{100pt} P(A \cap B)=P(A)P(B|A)=P(B)P(A|B) \hspace{100pt} (1.5)$$
			This format is particularly useful in situations when we know the conditional probability, but we 
			are interested in the probability of the intersection. We can interpret this formula using a tree 
			diagram such as the one shown in Figure 1.23. In this figure, we obtain the probability 
			at each point by multiplying probabilities on the branches leading to that point. This type of diagram 
			can be very useful for some problems.</p>
			
			<figure>
  					<img src="images/chapter1/tree_b.png" width="500" height="367" alt="Tree diagram" title="Tree diagram" border="0" />
  					<figcaption>Fig.1.23 - A tree diagram.</figcaption>
			</figure>
			
			<p>Now we can extend this formula to three or more events:
			$$\hspace{70pt} P(A \cap B \cap C)=P\big(A \cap (B \cap C)\big)=P(A)P(B \cap C|A) \hspace{70pt} (1.6)$$
			From <a href="chapter1/1_4_0_conditional_probability.php#equation">Equation 1.5</a>,
			$$P(B \cap C)=P(B)P(C|B)$$
			Conditioning both sides on $A$, we obtain
			$$\hspace{110pt} P(B \cap C|A)=P(B|A)P(C|A,B)\hspace{110pt} (1.7)$$
			Combining Equation 1.6 and 1.7 we obtain the following chain rule:
			$$P(A \cap B \cap C)=P(A)P(B|A)P(C|A,B)$$
			The point here is understanding how you can derive these formulas and trying to have intuition 
			about them rather than memorizing them. You can extend the tree in Figure 1.22 to 
			this case. Here the tree will have eight leaves. A general statement of the chain rule for $n$ 
			events is as follows:</p>
			
			<div style="padding: 15px; border: black 1px solid">
			<p>Chain rule for conditional probability:
			$$P(A_1 \cap A_2 \cap \cdots \cap A_n)=P(A_1)P(A_2|A_1)P(A_3|A_2,A_1) \cdots P(A_n|A_{n-1}A_{n-2} \cdots A_1)$$</p>
			</div>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>In a factory there are $100$ units of a certain product, $5$ of which are defective. We pick 
			three units from the $100$ units at random. What is the probability that none of them are defective?</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>Let us define $A_i$ as the event that the $i$'th chosen unit is not defective, 
						 for $i=1,2,3$. We are interested in $P(A_1 \cap A_2 \cap A_3)$. Note that
						 $$P(A_1)=\frac{95}{100}$$
						 Given that the first chosen item was good, the second item will be chosen from $94$ 
						 good units and $5$ defective units, thus
						 $$P(A_2|A_1)=\frac{94}{99}$$
						 Given that the first and second chosen items were okay, the third item will be chosen 
						 from $93$ good units and $5$ defective units, thus
						 $$P(A_3|A_2,A_1)=\frac{93}{98}$$
						 Thus, we have<br><br>
						 <table align="center">			
                          <tr>
                            <td>$P(A_1 \cap A_2 \cap A_3)$</td>
                            <td>$=P(A_1)P(A_2|A_1)P(A_3|A_2,A_1)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=\frac{95}{100} \frac{94}{99} \frac{93}{98}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$= 0.8560$</td>
                          </tr>
                          </table><br>
						 As we will see later on, another way to solve this problem is to use counting arguments.</p>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>

			<hr />
			<div class="thinblock">
				<div class="left"><a>&larr; </a><a href="chapter1/1_3_6_solved2.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_4_1_independence.php">next</a><a> &rarr;</a></div>
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
