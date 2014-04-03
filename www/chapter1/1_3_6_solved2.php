<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../"></base>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="section"	content="1.3.6"	/>
	<?php include '../Control/autonumber.php'; ?>
	<?php loadHeaders(12); ?>
<!--
	<style>
		body	{	counter-reset:	example	<?php getExampleStart(13);	?>;	}
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
	<link rel="stylesheet" type="text/css" href="print.css" media="print" />

	<title>Solved Problems Random Experiments</title>
	<meta name="description" content="Example problems and solutions" />

</head><body>
	<div id="container">
		<span class="hide_print">
		<script type="text/javascript" src="javascript/top_page_html_code.js"></script>
		</span>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter1/1_3_5_continuous_models.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_4_0_conditional_probability.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>1.3.6 Solved Problems:<br>Random Experiments and Probabilities</h2></div>
    		<div class="right hide_print"><img src="images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;" id="printButton"/></div>
    		<div class="clear"></div>
			
			<span class='problem'>Problem </span><br>
			Consider a sample space $S$ and three events $A$, $B$, and $C$. For each of the following 
			events draw a Venn diagram representation as well as a set expression.
			<ol type="a">
    			<li>Among $A$, $B$, and $C$, only $A$ occurs.</li>
    			<li>At least one the events $A$, $B$, or $C$ occurs.</li>
    			<li>$A$ or $C$ occurs, but not $B$.</li>
    			<li>At most two of the events $A$, $B$, or $C$ occur.</li>
			</ol> 
			
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <ol type="a">
    					 	 <li>Among $A$, $B$, and $C$, only $A$ occurs: $A-B-C=A-(B \cup C)$.</li>
    						 <li>At least one the events $A$, $B$, or $C$ occurs: $A \cup B \cup C$.</li>
    						 <li>$A$ or $C$ occurs, but not $B$: $(A \cup C)-B$.</li>
    						 <li>At most two of the events $A$, $B$, or $C$ occur: $(A \cap B \cap C)^c=A^c \cup B^c \cup C^c$.</li>
						 </ol><br>
						 The Venn diagrams are shown in Figure 1.19.
						 <figure>
  						 		 <img src="images/chapter1/Prob_events_b.png" width="500" height="500" alt="Probability events" title="Probability events" border="0" />
  								 <figcaption>Fig.1.19 - Venn diagrams for solved problem 1.</figcaption>
						 </figure>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span>
			<p>Write the sample space $S$ for the following random experiments.
			<ol type="a">
    			<li>We toss a coin until we see two consecutive tails. We record the total number of coin tosses.</li>
    			<li>A bag contains $4$ balls: one is red, one is blue, one is white, and one is green. 
				We choose two distinct balls and record their color in order.</li>
    			<li>A customer arrives at a bank and waits in the line. We observe $T$, which is the 
				total time (in hours) that the customer waits in the line. The bank has a strict policy 
				that no customer waits more than $20$ minutes under any circumstances.</li>
			</ol></p> 
			
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>Remember that the sample space is the set of all possible outcomes. Usually, when 
						 you have a random experiment, there are different ways to define the sample space 
						 $S$ depending on what you observe as the outcome. In this problem, for each experiment 
						 it is stated what outcomes we observe in order to help you write down the sample space $S$.</p>
						 <ol type="a">
    					 	 <li>We toss a coin until we see two consecutive tails. We record the total number of coin 
							 tosses: Here, the total number of coin tosses is a natural number larger than or equal to 
							 $2$. The sample space is
							 $$S=\{2,3,4,\cdots\}$$
							 </li>
							 <li>A bag contains $4$ balls: one is red, one is blue, one is white, and one is green. We 
							 choose two distinct balls and record their color in order: The sample space can be written as
							 $$S=\{(R,B),(B,R),(R,W),(W,R),(R,G),(G,R),$$
							 $$(B,W),(W,B),(B,G),(G,B),(W,G),(G,W)\}$$
							 </li>
							 <li>A customer arrives at a bank and waits in the line. We observe $T$...: In theory $T$ 
							 can be any real number between $0$ and $\frac{1}{3}=20$ minutes. Thus,
							 $$S=\big[0,\frac{1}{3}\big]=\big\{x \in \mathbb{R} | 0 \leq x \leq \frac{1}{3} \big\}$$
							 </li>
						 </ol> 
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span>
			<p>Let $A$, $B$, and $C$ be three events in the sample space $S$. Suppose we know
			<ul>
    			<li>$A \cup B \cup C=S$,</li>
    			<li>$P(A)=\frac{1}{2}$,</li>
    			<li>$P(B)=\frac{2}{3}$,</li>
    			<li>$P(A \cup B)=\frac{5}{6}$.</li>
			</ul>
			Answer the following questions:
			<ol type="a">
    			<li>Find $P(A \cap B)$.</li>
    			<li>Do $A$, $B$, and $C$ form a partition of $S$?</li>
    			<li>Find $P\big(C-(A \cup B)\big)$.</li>
    			<li>If $P(C \cap (A \cup B))=\frac{5}{12}$, find $P(C)$.</li>
			</ol></p> 
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>As before, it is always useful to draw a Venn diagram; however, here we provide 
						 the solution without using a Venn diagram.</p>
						 <ol type="a">
    					 	 <li>Using the inclusion-exclusion principle, we have
							 $$P(A \cup B)=P(A)+P(B)-P(A \cap B)$$
							 Thus,<br><br>
							 <table align="center">			
                              <tr>
                                <td>$P(A \cap B)$</td>
                                <td>$=P(A)+P(B)-P(A \cup B)$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=\frac{1}{2}+\frac{2}{3}-\frac{5}{6}$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\frac{1}{3}$</td>
                              </tr>
                              </table><br>
							 </li>
							 <li>No since $A \cap B \neq \emptyset$.</li>
							 <li>We can write<br><br>
							 <table align="center">			
                              <tr>
                                <td>$C-(A \cup B)$</td>
                                <td>$=\bigg(C \cup (A\cup B)\bigg)-(A\cup B)\hspace{30pt}$</td>
								<td></td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=S-(A \cup B)$</td>
								<td>$\textrm{(since $A \cup B \cup C=S$)}$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=(A \cup B)^c$</td>
								<td></td>
                              </tr>
                              </table><br>
							 Thus<br><br>
							 <table align="center">			
                              <tr>
                                <td>$P\big(C-(A \cup B)\big)$</td>
                                <td>$=P\big((A \cup B)^c\big)$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=1-P(A \cup B)$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\frac{1}{6}$</td>
                              </tr>
                              </table><br>
							 </li>
							 <li>We have
							 $$P(C)=P(C \cap (A \cup B))+P(C-(A \cup B))=\frac{5}{12}+\frac{1}{6}=\frac{7}{12}$$
							 </li>
						</ol> 
						 
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span><br>
			I roll a fair die twice and obtain two numbers $X_1=$ result of the first roll, and $X_2=$ result of the 
			second roll. Find the probability of the following events
			<ol type="a">
    			<li>$A$ defined as "$X_1 &lt; X_2$".</li>
    			<li>$B$ defined as "You observe a $6$ at least once".</li>
			</ol> 
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>As we saw before, the sample space $S$ has $36$ elements.</p>
						 <ol type="a">
						 	 <li>We have
							 $$A= \{(1,2),(1,3),(1,4),(1,5),(1,6),(2,3),(2,4),(2,5),$$
							 $$(2,6),(3,4),(3,5),(3,6),(4,5),(4,6), (5,6) \}$$
							 Then, we obtain
							 $$P(A)=\frac{|A|}{|S|}=\frac{15}{36}=\frac{5}{12}$$
							 </li>
							 <li>We have
							 $$B = \{(6,1),(6,2),(6,3),(6,4),(6,5),(6,6),(1,6),(2,6),(3,6),(4,6),(5,6)\}$$
							 We obtain
							 $$P(B)=\frac{|B|}{|S|}=\frac{11}{36}$$
							 </li>
						 </ol> 
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span>
			<p>You purchase a certain product. The manual states that the lifetime $T$ of the product, defined as 
			the amount of time (in years) the product works properly until it breaks down, satisfies
			$$P(T \geq t)=e^{-\frac{t}{5}} \textrm{ for all } t \geq 0$$
			For example, the probability that the product lasts more than (or equal to) $2$ years 
			is $P(T \geq 2)=e^{-\frac{2}{5}}=0.6703$.
			<ol type="a">
    			<li>This is an example of a continuous probability model. Write down the sample space $S$.</li>
    			<li>Check that the statement in the manual makes sense by finding $P(T \geq 0)$ and 
				$\lim_{t\rightarrow \infty} P(T \geq t)$.</li>
    			<li>Also check that if $t_1 < t_2$, then $P(T \geq t_1)\geq P(T \geq t_2)$. Why does this need to be true?</li>
    			<li>Find the probability that the product breaks down within three years of the purchase time.</li>
    			<li>Find the probability that the product breaks down in the second year, i.e., find $P(1 \leq T < 2)$.</li>
			</ol></p> 
			
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <ol type="a">
    					 	 <li>The sample space $S$ is the set of all possible outcomes. Here, the possible 
							 outcomes are the possible values for $T$ which can be any real number larger than 
							 or equal to zero. Thus
							 $$S=[0, \infty)$$
							 </li>
							 <li>We have
							 $$P(T \geq 0)=e^{-\frac{0}{5}}=1$$
							 $$\lim_{t\rightarrow \infty} P(T \geq t)=e^{-\infty}=0$$
							 which is what we expect, in particular, $T$ is always larger than or equal to zero, 
							 thus we expect $P(T \geq 0)=1$. Also since the product will eventually fail at some point, 
							 we expect that $P(t)$ approaches zero as $t$ goes to infinity.
							 </li><br>
							 <li>
							 First note that if $t_1 < t_2$, then $P(T \geq t_1)= e^{-\frac{t_1}{5}}>e^{-\frac{t_2}{5}}$$=P(T \geq t_2)$ 
							 (since $f(x)=e^{(x)}$ is an increasing function). Here we have two events, $A$ is the event that $T \geq t_1$ 
							 and $B$ is the event that $T \geq t_2$. That is,
							 $$A =(t_1,\infty), B=(t_2, \infty)$$
							 Since $B$ is a subset of $A$, $B \subset A$, we must have $P(B)\leq P(A)$, thus
							 $$P(A)=P(T \geq t_1)\geq P(t_2 \geq t_2)=P(B)$$
							 </li>
							 <li>The probability that the product breaks down within three years of the purchase time is
							 $$P(T < 3)=1-P(T \geq 3)=1-e^{-\frac{3}{5}} \approx 0.4512$$
							 </li>
							 <li>Note that if $A \subset B$, then<br><br>
							 <table align="center">			
                              <tr>
                                <td>$P(B-A)$</td>
                                <td>$ =P(B)-P(B \cap A)$</td>
								<td></td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=P(B)-P(A) \hspace{25pt}$</td>
								<td>$ \textrm{since } A \subset B$</td>
                              </tr>
                              </table><br>
							 Choosing $A=[1, \infty)$ and $B=[2,\infty)$, we can write<br><br>
							 <table align="center">			
                              <tr>
                                <td>$P(1 \leq T < 2)$</td>
                                <td>$=P(T \geq 1)-P(T \geq 2)$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=e^{-\frac{1}{5}}-e^{-\frac{2}{5}}$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=0.1484$</td>
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
			
			<span class='problem'>Problem </span>
			<p>I first saw this question in a math contest many years ago: You get a stick and break it 
			randomly into three pieces. What is the probability that you can make a triangle using 
			the three pieces? You can assume the break points are chosen completely at random, i.e. 
			if the length of the original stick is $1$ unit, and $x, y, z$ are the lengths of the three 
			pieces, then $(x,y,z)$ are uniformly chosen from the set
			$$\{(x,y,z) \in \mathbb{R}^3 | x+y+z=1, x,y,z \geq 0\}$$</p>
			
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>This is again a problem on a continuous probability space. The basic idea is pretty simple. 
						 First, we need to identify the sample space $S$. In this case the sample space is going 
						 to be a two-dimensional set. Second, we need to identify the set $A$ that represents the 
						 favorable outcome (the set of $(x,y,z)$ in $S$ that form a triangle). And finally, since 
						 the space is uniform, we will divide area of set $A$ by the area of $S$ to obtain $P(A)$.</p>
						 
						 <p>First, we need to find the sets $S$ and $A$. This is basically a geometry problem. The two 
						 sets, $S$ and $A$ are shown in Figure 1.20.</p>
						 
						 <figure>
  						 		 <img src="images/chapter1/Prob-triangle_b.png" width="500" height="235" alt="Two sets" title="Two sets" border="0" />
  								 <figcaption>Fig.1.20 - The sample space and set $A$ for Problem 6.</figcaption>
						 </figure>
						 
						 <p>Note that in $\mathbb{R}^3$, $x+y+z=1$ represents a plane that goes through the points 
						 $(1,0,0), (0,1,0), (0,0,1)$. To find the sample space $S$, note that $S=\{(x,y,z) \in \mathbb{R}^3 | x+y+z=1, 
						 x,y,z \geq 0\}$, thus $S$ is the part of the plane that is shown in Figure 1.20.</p>
						 
						 <p>To find the set $A$, note that we need $(x,y,z)$ to satisfy the triangle inequality
						 $$x+y &gt; z$$
						 $$y+z &gt; x$$
						 $$x+z &gt; y$$
						 Note that since $x+y+z=1$, we can equivalently write the three equations as
						 $$x &lt; \frac{1}{2}$$
						 $$y &lt; \frac{1}{2}$$
						 $$z &lt; \frac{1}{2}$$
						 Thus, we conclude that the set $A$ is the area shown in Figure 20. 
						 In particular, we note that the set $S$ consists of four triangles with equal areas. 
						 Therefore, its area is four times area of $A$, and we have
						 $$P(A)=\frac{\textrm{Area of } A}{\textrm{Area of } S}=\frac{1}{4}$$</p>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>

			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter1/1_3_5_continuous_models.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_4_0_conditional_probability.php">next</a><a> &rarr;</a></div>
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
