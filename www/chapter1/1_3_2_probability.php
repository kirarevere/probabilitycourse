<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../"></base>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="section"	content="1.3.2"	/>
	<?php include '../Control/autonumber.php'; ?>
	<?php loadHeaders(8); ?>
<!--
	<style>
		body	{	counter-reset:	example	<?php getExampleStart(9);	?>;	}
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

	<title>Intro to Probability</title>

</head><body>
	<div id="container">
		<span class="hide_print">
		<script type="text/javascript" src="javascript/top_page_html_code.js"></script>
		</span>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter1/1_3_1_random_experiments.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_3_3_finding_probabilities.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
			
			<div class="left"><h2>1.3.2 Probability</h2></div>
    		<div class="right hide_print">
			<a href="videos/chapter1/video1_3.html"><img src="images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img src="images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;" id="printButton"/></div>
    		<div class="clear"></div>
			
			<p>We assign a <b>probability</b> measure $P(A)$ to an event $A$. This is a value between $0$ and $1$ 
			that shows how likely the event is. If $P(A)$ is close to $0$, it is very unlikely that the event $A$ occurs. 
			On the other hand, if $P(A)$ is close to $1$, $A$ is very likely to occur. The main subject of probability 
			theory is to develop tools and techniques to calculate probabilities of different events. Probability 
			theory is based on some axioms that act as the foundation for the theory, so let us state and explain 
			these axioms.</p>
			
			<div style="padding: 15px; border: black 1px solid">
			<p>Axioms of Probability:<br>
			<ul>
    			<li>Axiom 1: For any event $A$, $P(A) \geq 0$.</li><br>
    			<li>Axiom 2: Probability of the sample space $S$ is $P(S)=1$.</li><br>
    			<li>Axiom 3: If $A_1, A_2, A_3, \cdots$ are disjoint events, then $P(A_1 \cup A_2 \cup A_3 
				\cdots)=P(A_1)+P(A_2)+P(A_3)+\cdots$</li>
			</ul></p>
			</div><br>
			
			<p>Let us take a few moments and make sure we understand each axiom thoroughly. The first axiom states 
			that probability cannot be negative. The smallest value for $P(A)$ is zero and if $P(A)=0$, then the 
			event $A$ will never happen. The second axiom states that the probability of the whole sample 
			space is equal to one, i.e., $100$ percent. The reason for this is that the sample space $S$ 
			contains all possible outcomes of our random experiment. Thus, the outcome of each trial always 
			belongs to $S$, i.e., the event $S$ always occurs and $P(S)=1$. In the example of rolling a die, 
			$S=\{1,2,3,4,5,6\}$, and since the outcome is always among the numbers $1$ through $6$, $P(S)=1$.</p>
			
			<p>The third axiom is probably the most interesting one. The basic idea is that if some events are disjoint 
			(i.e., there is no overlap between them), then the probability of their union must be the summations 
			of their probabilities. Another way to think about this is to imagine the probability of a set as 
			the area of that set in the Venn diagram. If several sets are disjoint such as the ones shown 
			<a href="chapter1/1_2_2_set_operations.php#figure9">Figure 1.9</a>, then the total area of their union is the sum of individual areas. The following example 
			illustrates the idea behind the third axiom.</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>In a presidential election, there are four candidates. Call them A, B, C, and D. Based on our polling 
			analysis, we estimate that A has a $20$ percent chance of winning the election, while B has a $40$ percent 
			chance of winning. What is the probability that A <b>or</b> B win the election?</p>
			
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>Notice that the events that $\{\textrm{A wins} \}$, $\{\textrm{B wins} \}$, $\{\textrm{C wins} \}$, 
						 and $\{\textrm{D wins} \}$ are disjoint since more than one of them cannot occur at the same time. 
						 For example, if A wins, then B cannot win. From the third axiom of probability, the probability 
						 of the union of two disjoint events is the summation of individual probabilities. Therefore,
						 <table align="center">			
                          <tr>
                            <td>$P(\textrm{A wins or B wins})$</td>
                            <td>$ = P\big(\{\textrm{A wins}\} \cup \{\textrm{B wins}\}\big)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$= P(\{\textrm{A wins}\})+ P(\{\textrm{B wins}\})$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$= 0.2+0.4$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$= 0.6$</td>
                          </tr>
                          </table><br>
						  </p>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<p>In summary, if $A_1$ and $A_2$ are disjoint events, then $P(A_1 \cup A_2)=P(A_1)+P(A_2)$. The same argument 
			is true when you have $n$ disjoint events $A_1, A_2,\cdots,A_n$:
			$$P(A_1 \cup A_2 \cup A_3 \cdots\cup A_n)=P(A_1)+P(A_2)+\cdots+P(A_n), \textrm{ if } A_1, A_2,\cdots, A_n 
			\textrm{ are disjoint.}$$
			In fact, the third axiom goes beyond that and states that the same is true even for a countably infinite 
			number of disjoint events. We will see more examples of how we use the third axiom shortly.</p>
			
			<hr /><br>
			<p>As we have seen, when working with events, <i>intersection</i> means <i>"and"</i>, and <i>union</i> means <i>"or"</i>. 
			The probability of intersection of $A$ and $B$, $P(A \cap B)$, is sometimes shown by $P(A,B)$ or $P(AB)$.</p>
			
			<div style="padding: 15px; border: black 1px solid">
			<p>Notation:<br>
			<ul>
    			<li>$P(A \cap B)= P(A \textrm{ and } B)=P(A,B)$</li><br>
    			<li>$P(A \cup B)=P(A \textrm{ or } B)$</li>
			</ul> </p>
			</div>
			
			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter1/1_3_1_random_experiments.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_3_3_finding_probabilities.php">next</a><a> &rarr;</a></div>
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
