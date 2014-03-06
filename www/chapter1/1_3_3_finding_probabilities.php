<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../"></base>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="section"	content="1.3.3"	/>
	<?php include '../Control/autonumber.php'; ?>
	<?php loadHeaders(9); ?>
<!--
	<style>
		body	{	counter-reset:	example	<?php getExampleStart(10);	?>;	}
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
	
	<link rel="stylesheet" type="text/css" href="style_sheet.css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="print.css" media="print" />

	<title>Finding Probabilities</title>
	<meta name="description" content="Using the axioms of probability and what we know about an event" />

</head><body>
	<div id="container">
		<span class="hide_print">
		<script type="text/javascript" src="javascript/top_page_html_code.js"></script>
		</span>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter1/1_3_2_probability.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_3_4_discrete_models.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>1.3.3 Finding Probabilities</h2></div>
    		<div class="right hide_print">
			<a href="videos/chapter1/video1_3.html"><img src="images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img src="images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;" id="printButton"/></div>
    		<div class="clear"></div>
			
			<p>Suppose that we are given a random experiment with a sample space $S$. To find the probability of an event, 
			there are usually two steps: first, we use the specific information that we have about the random experiment, 
			and second we use the probability axioms. Let's look at an example. Although, this is a simple example and 
			you might be tempted to write the answer without following the steps, we encourage you to follow the steps.</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>You roll a fair die. What is the probability of $E=\{1,5\}$?</p>
			
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>Let's first use the specific information that we have about the random experiment. The 
						 problem states that the die is fair, which means that all six possible outcomes are equally likely, i.e.,
						 $$P(\{1\})=P(\{2\})=\cdots=P(\{6\}).$$
						 Now we can use the axioms of probability. In particular, since the events $\{1\}, \{2\}, \cdots, 
						 \{6\}$ are disjoint we can write
						 <table align="center">			
                          <tr>
                            <td>$1$</td>
                            <td>$=P(S)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$ = P\bigg(\{1\} \cup \{2\} \cup\cdots\cup \{6\}\bigg)$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=P(\{1\})+P(\{2\})+\cdots+P(\{6\})$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=6P(\{1\})$.</td>
                          </tr>
                          </table><br>
						 Thus,
						 $$P(\{1\})=P(\{2\})=\cdots=P(\{6\})=\frac{1}{6}.$$
						 Again since $\{1\}$ and $\{5\}$ are disjoint, we have
						 $$P(E)=P(\{1,5\})=P(\{1\})+P(\{5\})=\frac{2}{6}=\frac{1}{3}.$$</p>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<p>It is worth noting that we often write $P(1)$ instead of $P(\{1\})$ to simplify the notation, but we should 
			emphasize that probability is defined for sets (events) not for individual outcomes. Thus, when we 
			write $P(2)=\frac{1}{6}$, what we really mean is that $P(\{2\})=\frac{1}{6}$.</p>
			
			<p>We will see that the two steps explained above can be used to find probabilities for much more complicated 
			events and random experiments. Let us now practice using the axioms by proving some useful facts.</p>
			
			<hr /><br>
			<a name="example10"></a>
			<span class='example'>Example </span><br>
			<p>Using the axioms of probability, prove the following:
			<ol type="a">
    			<li>For any event $A$, $P(A^c)=1-P(A)$.</li>
    			<li>The probability of the empty set is zero, i.e., $P(\emptyset)=0$.</li>
    			<li>For any event $A$, $P(A) \leq 1$.</li>
    			<li>$P(A-B)=P(A)-P(A \cap B)$.</li>
    			<li>$P(A \cup B)=P(A)+P(B)-P(A \cap B)$, (Inclusion-exclusion principle for $n=2$).</li>
    			<li>If $A \subset B$ then $P(A) \leq P(B)$.</li>
			</ol> 
			</p>
			
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <ol type="a">
    					 	 <li>This states that the probability that $A$ does not occur is $1-P(A)$. 
							 To prove it using the axioms, we can write
							 <table align="center">			
                              <tr>
                                <td>$\hspace{50pt}1$</td>
                                <td>$ = P(S)$</td>
								<td>$\textrm{(the axiom 2)}$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=P(A \cup A^c)$</td>
								<td>$\textrm{(definition of compliment)}$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=P(A)+P(A^c) \hspace{60pt}$</td>
								<td>$\textrm{(since $A$ and $A^c$ are disjoint)}$</td>
                              </tr>
                              </table><br></li>
    						 <li>Since $\emptyset=S^c$, we can use part (a) to see that $P(\emptyset)=1-P(S)=0$. Note 
							 that this makes sense as by definition: an event happens if the outcome of the random 
							 experiment belongs to that event. Since the empty set does not have any element, the 
							 outcome of the experiment never belongs to the empty set.</li><br>
    						 <li>From part (a),  $P(A)=1-P(A^c)$ and since $P(A^c) \geq 0$ (the first axiom), 
							 we have $P(A) \leq 1$.</li><br>
    						 <li>We show that $P(A)=P(A \cap B)+P(A-B)$. Note that the two sets $A \cap B$ and $A-B$ 
							 are disjoint and their union is $A$ (Figure 1.17). Thus, by the 
							 third axiom of probability<br><br>
							 <table align="center">			
                              <tr>
                                <td>$P(A)$</td>
                                <td>$=P\big((A \cap B) \cup (A-B)\big) \hspace{20pt}$</td>
								<td>$\textrm{(since }A=(A \cap B) \cup (A-B))$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=P(A \cap B)+P(A-B)$</td>
								<td>$\textrm{(since $A \cap B$ and $A-B$ are disjoint)}$</td>
                              </tr>
                              </table><br>
							 <figure>
  							 		 <img src="images/chapter1/prob_difference_b.png" width="350" height="310" alt="Difference" title="Difference" border="0" />
  									 <figcaption>Fig.1.17 - $P(A)=P(A \cap B)+P(A-B)$.</figcaption>
							 </figure>
							 Note that since $A-B=A \cap B^c$, we have shown
							 $$P(A)=P(A \cap B)+P(A \cap B^c).$$
							 Note also that the two sets $B$ and $B^c$ form a partition of the sample space (since they are disjoint 
							 and their union is the whole sample space). This is a simple form of law of total probability that we 
							 will discuss shortly and is a very useful rule in finding probability of some events.</li><br>
							 <li>Note that $A$ and $B-A$ are disjoint sets and their union is $A \cup B$. Thus,<br><br>
							 <table align="center">			
                              <tr>
                                <td>$P(A \cup B)$</td>
                                <td>$ =P(A \cup (B-A))$</td>
								<td>$\textrm{($A \cup B=A \cup (B-A$))}$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=P(A)+P(B-A)$</td>
								<td>$\textrm{(since $A$ and $B-A$ are disjoint)}$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=P(A)+P(B)-P(A \cap B) \hspace{20pt}$</td>
								<td>$\textrm{(by part (d))}$</td>
                              </tr>
                              </table>
							 </li><br>
							 <li>Note that $A \subset B$ means that whenever $A$ occurs $B$ occurs, too. Thus intuitively we 
							 expect that $P(A) \leq P(B)$. Again the proof is similar as before. If $A \subset B$, then $A \cap B=A$. 
							 Thus,<br><br>
							 <table align="center">			
                              <tr>
                                <td>$P(B)$</td>
                                <td>$ =P(A \cap B)+P(B-A) \hspace{40pt}$</td>
								<td>$\textrm{(by part (d))}$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=P(A)+P(B-A)$</td>
								<td>$\textrm{(since $A=A \cap B$)}$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$\geq P(A)$</td>
								<td>$\textrm{(by axiom 1)}$</td>
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
			
			<span class='example'>Example </span><br>
			<p>Suppose we have the following information:
			<ol type="1">
    			<li>There is a $60$ percent chance that it will rain today.</li>
    			<li>There is a $50$ percent chance that it will rain tomorrow.</li>
    			<li>There is a $30$ percent chance that it does not rain in either day.</li>
			</ol>
			Find the following probabilities:
			<ol type="a">
    			<li>The probability that it will rain today or tomorrow.</li>
    			<li>The probability that it will rain today and tomorrow.</li>
    			<li>The probability that it will rain today but not tomorrow.</li>
    			<li>The probability that it either will rain today or tomorrow, but not both.</li>
			</ol></p>
			
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>An important step in solving problems like this is to correctly convert them to probability language. 
						 This is especially useful when the problems become complex. For this problem, let's define $A$ as the 
						 event that it will rain today, and $B$ as the event that it will rain tomorrow. Then, let's summarize 
						 the available information:
						 <ol type="1">
    					 	 <li>$P(A)=0.6$</li>
    						 <li>$P(B)=0.5$</li>
    						 <li>$P(A^c \cap B^c)=0.3$</li>
						 </ol></p>
						 Now that we have summarized the information, we should be able to use them alongside probability 
						 rules to find the requested probabilities:<br><br>
						 <ol type="a">
    					 	 <li>The probability that it will rain today or tomorrow: this is $P(A \cup B)$. To find this 
							 we notice that<br><br>
							 <table align="center">			
                              <tr>
                                <td>$P(A \cup B)$</td>
                                <td>$=1-P\bigg((A \cup B)^c \bigg) \hspace{40pt}$</td>
								<td>$\textrm{by Example 1.10}$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=1-P(A^c \cap B^c)$</td>
								<td>$\textrm{by De Morgan's Law}$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=1-0.3$</td>
								<td></td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=0.7$</td>
								<td></td>
                              </tr>
                              </table><br>
							 </li>
							 <li>The probability that it will rain today and tomorrow: this is $P(A \cap B)$. To find 
							 this we note that<br><br>
							 <table align="center">			
                              <tr>
                                <td>$P(A \cap B)$</td>
                                <td>$=P(A)+P(B)-P(A \cup B) \hspace{30pt}$</td>
								<td>$\textrm{by Example 1.10}$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=0.6+0.5-0.7$</td>
								<td></td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=0.4$</td>
								<td></td>
                              </tr>
                              </table><br>
							 </li>
							 <li>The probability that it will rain today but not tomorrow: this is $P(A \cap B^c)$.<br><br>
							 <table align="center">			
                              <tr>
                                <td>$P(A \cap B^c)$</td>
                                <td>$ = P(A-B)$</td>
								<td></td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=P(A)-P(A \cap B) \hspace{60pt}$</td>
								<td>$\textrm{by Example 1.10}$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=0.6-0.4$</td>
								<td></td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=0.2$</td>
								<td></td>
                              </tr>
                              </table><br>
							 </li>
							 <li>The probability that it either will rain today or tomorrow but not both: this is 
							 $P(A-B)+P(B-A)$. We have already found $P(A-B)=.2$. Similarly, we can find $P(B-A)$:<br><br>
							 <table align="center">			
                              <tr>
                                <td>$P(B-A)$</td>
                                <td>$=P(B)-P(B \cap A) \hspace{60pt}$</td>
								<td>$\textrm{by Example 1.10}$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=0.5-0.4$</td>
								<td></td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=0.1$</td>
								<td></td>
                              </tr>
                              </table><br>
							 Thus,
							 $$P(A-B)+P(B-A)=0.2+0.1=0.3 \hspace{40pt}$$
							 </li>
						 </ol> 
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<p>In this problem it was stated that there is a $50$ percent chance that it will rain tomorrow. You might have 
			heard this information from news on the TV. A more interesting question is how the number $50$ is obtained. 
			This is an example of a real life problem in which tools from probability and statistics are used. As you 
			read more chapters from the book, you will learn many of these tools that are frequently used in practice.</p>
			
			<b><font size="3">Inclusion-Exclusion Principle:</font></b>
			<p>The formula $P(A \cup B)=P(A)+P(B)-P(A \cap B)$ that we proved in Example 1.10 is a simple form of 
			the inclusion-exclusion principle. We can extend it to the union of three or more sets.</p>
			
			<div style="padding: 15px; border: black 1px solid">
			<p>Inclusion-exclusion principle:<br>
			<ul>
    			<li>$P(A \cup B )= P(A)+(B)-P(A \cap B)$</li><br>
    			<li>$P(A \cup B \cup C) = P(A) + P(B) + P(C)$<br>
						 $ \hspace{63pt} - P(A \cap B) - P(A \cap C) - P(B \cap C) + P(A \cap B \cap C)$</li>
			</ul> </p>
			</div><br>
			
			<p>Generally for $n$ events $A_1, A_2,\cdots,A_n$, we have<br>
			<table align="center">			
            <tr>
              <td>$P\biggl(\bigcup_{i=1}^n A_i\biggr)$</td>
              <td>$ =\sum_{i=1}^n P(A_i)-\sum_{i < j}P(A_i\cap A_j)$</td>
            </tr>
            <tr>
              <td></td>
              <td>$+\sum_{i < j < k}P(A_i\cap A_j\cap A_k)-\ \cdots\ +(-1)^{n-1}\, P\biggl(\bigcap_{i=1}^n A_i\biggr)$.</td>
            </tr>
            </table><br></p>
			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter1/1_3_2_probability.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_3_4_discrete_models.php">next</a><a> &rarr;</a></div>
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
