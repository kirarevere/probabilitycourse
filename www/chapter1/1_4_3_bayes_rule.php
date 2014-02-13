<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../"></base>
	<!-- Autonumbering -->
	<?php include '../Control/autonumber.php'; ?>
	<?php loadHeaders(16); ?>
<!--
	<style>
		body	{	counter-reset:	example	<?php getExampleStart(17);	?>;	}
		.example	{	font-weight:	bold;	}
		.example:after	{	counter-increment:	example	1;	content:	counter(example);	}
	</style>
-->
	<!-- /Autonumbering -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="section"	content="1.4.3"	/>
	<script type="text/x-mathjax-config">
  			MathJax.Hub.Config({
    		tex2jax: { inlineMath: [['$','$'],['\\(','\\)']] },
				"HTML-CSS": { scale: 125 }
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

	<title>Intro to Probability</title>

</head><body>
	<div id="container">
		<span class="hide_print">
		<script type="text/javascript" src="javascript/top_page_html_code.js"></script>
		</span>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter1/1_4_2_total_probability.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_4_4_conditional_independence.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>1.4.3 Bayes' Rule</h2></div>
    		<div class="right hide_print"><a href="videos/chapter1/video1_9.html"><img src="images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img src="images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;" id="printButton"/></div>
    		<div class="clear"></div>
			
			<p>Now we are ready to state one of the most useful results in conditional probability: Bayes' rule. 
			Suppose that we know $P(A|B)$, but we are interested in the probability $P(B|A)$. Using the 
			definition of conditional probability, we have
			$$P(A|B)P(B)=P(A \cap B)=P(B|A)P(A)$$
			Dividing by $P(A)$, we obtain
			$$P(B|A)=\frac{P(A|B)P(B)}{P(A)}$$
			which is the famous Bayes' rule. Often, in order to find $P(A)$ in Bayes' formula we need to use 
			the law of total probability, so sometimes Bayes' rule is stated as
			$$P(B_j|A)=\frac{P(A|B_j)P(B_j)}{\sum_{i} P(A | B_i) P(B_i)}$$
			where $B_1, B_2,\cdots, B_n$ form a partition of the sample space.</p>
			
			<div style="padding: 15px; border: black 1px solid">
			Bayes' Rule<br>
			<ul>
    			<li>For any two events $A$ and $B$, where $P(A)\neq 0$, we have
				$$P(B|A)=\frac{P(A|B)P(B)}{P(A)}$$</li>
				<li>If $B_1, B_2, B_3,\cdots$ form a partition of the sample space $S$, and $A$ is 
				any event with $P(A)\neq 0$, we have
				$$P(B_j|A)=\frac{P(A|B_j)P(B_j)}{\sum_{i} P(A | B_i) P(B_i)}$$</li>
			</ul> 
			</div><br>
			
			<hr /><br>
			<!-- EXAMPLE -->
			<span class="example">Example </span><br>
			<p>In <a href="chapter1/1_4_2_total_probability.php#example24">Example 1.24</a>, suppose that we observe that the chosen marble is red. 
			What is the probability that bag 1 was chosen?</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>Here we know $P(R|B_i)$ but we are interested in $P(B_1|R)$, so this is a scenario 
						 in which we can use the Bayes' rule. We have<br>
						 <table align="center">			
                          <tr>
                            <td>$P(B_1|R)$</td>
                            <td>$=\frac{P(R|B_1)P(B_1)}{P(R)}$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=\frac{0.75 \times \frac{1}{3}}{0.6}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\frac{5}{12}$</td>
                          </tr>
                          </table><br>
						 $P(R)$ was obtained using the law of total probability in Example 1.24, 
						 thus we did not have to recompute it here. Also, note that $P(B_1|R)= \frac{5}{12}>\frac{1}{3}$. 
						 This makes sense intuitively because bag 1 is the bag with the highest number of red marbles. 
						 Thus if the chosen marble is red, it is more likely that bag 1 was chosen.</p>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class="example">Example </span> (False positive paradox <a href="bibliography.html#wiki-False-positive-paradox">[5]</a>)<br>
			<p>A certain disease affects about $1$ out of $10,000$ people. There is a test to check whether the person 
			has the disease. The test is quite accurate. In particular, we know that
			<ul>
    			<li>the probability that the test result is positive (suggesting the person has the disease), 
				given that the person does not have the disease, is only 2 percent.</li>
    			<li>the probability that the test result is negative (suggesting the person does 
				not have the disease), given that the person has the disease, is only 1 percent.</li>
			</ul>
			A random person gets tested for the disease and the result comes back positive. 
			What is the probability that the person has the disease?</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>Let $D$ be the event that the person has the disease, and let $T$ be the event that the 
						 test result is positive. We know
						 $$P(D)=\frac{1}{10,000}$$
						 $$P(T|D^c)=0.02$$
						 $$P(T^c|D)=0.01$$
						 What we want to compute is $P(D|T)$. Again, we use the Bayes' rule:<br>
						 <table align="center">			
                          <tr>
                            <td>$P(D|T)$</td>
                            <td>$=\frac{P(T|D)P(D)}{P(T|D)P(D)+P(T|D^c)P(D^c)}$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=\frac{(1-0.01)\times .0001}{(1-0.01)\times .0001+0.02 \times (1-0.0001)}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=0.0049$</td>
                          </tr>
                          </table><br>
						 This means that there is less than half a percent chance that the person has the disease.</p>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<p><i>Discussion:</i> This might seem somewhat counterintuitive as we know the test is quite accurate. 
			The point is that the disease is also very rare. Thus, there are two competing forces here, and 
			since the rareness of the disease (1 out of 10,000) is stronger than the accuracy of the test 
			(98 or 99 percent), there is still good chance that the person does not have the disease.</p>
			
			<p>Another way to think about this problem is illustrated in the tree diagram in Figure 1.25. 
			Suppose 1 million people get tested for the disease. Out of the one million people, about $100$ 
			of them have the disease, while the other $999,900$ do not have the disease. Out of the $100$ 
			people who have the disease $100 \times .99=99$ people will have positive test results. However, 
			out of the people who do not have the disease  $999,900 \times .02=19998$ people will have 
			positive test results. Thus in total there are $19998+99$ people with positive test results, 
			and only $99$ of them actually have the disease. Therefore, the probability that a person from 
			the "positive test result" group actually have the disease is
			$$P(D|P)=\frac{99}{19998+99}=0.0049$$</p>
			
			<figure>
  					<img src="images/chapter1/DiseaseTree_b.png" width="600" height="330" alt="Tree diagram" title="Tree diagram" border="0" />
  					<figcaption>Fig.1.25 - Tree diagram for Example 1.26.</figcaption>
			</figure>

			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter1/1_4_2_total_probability.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_4_4_conditional_independence.php">next</a><a> &rarr;</a></div>
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
