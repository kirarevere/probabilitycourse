<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../"></base>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="section"	content="1.4.2"	/>
	<?php include '../Control/autonumber.php'; ?>
	<?php loadHeaders(15); ?>
<!--
	<style>
		body	{	counter-reset:	example	<?php getExampleStart(16);	?>;	}
		.example	{	font-weight:	bold;	}
		.example:after	{	counter-increment:	example	1;	content:	counter(example);	}
	</style>
-->
	<script type="text/x-mathjax-config">
  			MathJax.Hub.Config({
    		tex2jax: { inlineMath: [['$','$'],['\\(','\\)']] },
				"HTML-CSS": { scale: 105 }
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

	<title>Intro to Probability</title>

</head><body>
	<div id="container">
		<span class="hide_print">
		<script type="text/javascript" src="javascript/top_page_html_code.js"></script>
		</span>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter1/1_4_1_independence.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_4_3_bayes_rule.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>1.4.2 Law of Total Probability</h2></div>
    		<div class="right hide_print"><a href="videos/chapter1/video1_8.html"><img src="images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img src="images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;" id="printButton"/></div>
    		<div class="clear"></div>
			
			<p>Let us start this section by asking a very simple question: In a certain country there are three provinces, 
			call them $B_1$, $B_2$, and $B_3$ (i.e., the country is partitioned into three disjoint sets $B_1$, $B_2$, 
			and $B_3$). We are interested in the total forest area in the country. Suppose that we know that the forest 
			area in $B_1$, $B_2$, and $B_3$ are $100km^2$, $50km^2$, and $150km^2$, respectively. What is the total 
			forest area in the country? If your answer is
			$$100km^2+50km^2+150km^2=300km^2$$
			you are right. That is, you can simply add forest areas in each province (partition) to obtain the forest 
			area in the whole country. This is the idea behind the law of total probability, in which the 
			<i>area of forest</i> is replaced by <i>probability of an event $A$</i>. In particular, if you want 
			to find $P(A)$, you can look at a partition of $S$, and add the amount of probability of $A$ that 
			falls in each partition. We have already seen the special case where the partition is $B$ and $B^c$: 
			we saw that for any two events $A$ and $B$,
			$$P(A)=P(A \cap B)+P(A \cap B^c)$$
			and using the definition of conditional probability, $P(A \cap B)=P(A|B)P(B)$, we can write
			$$P(A)=P(A|B)P(B)+P(A|B^c)P(B^c)$$
			We can state a more general version of this formula which applies to a general partition of 
			the sample space $S$.</p>
			
			<div style="padding: 15px; border: black 1px solid">
			<p>Law of Total Probability:<br>
			If $B_1, B_2, B_3,\cdots$ is a partition of the sample space $S$, then for any event $A$ we have
			$$P(A)=\sum_{i} P(A \cap B_i)=\sum_{i} P(A | B_i) P(B_i)$$</p>
			</div><br>
			
			<p>Using a Venn diagram, we can pictorially see the idea behind the law of total probability. 
			In Figure 1.24, we have
			$$A_1=A \cap B_1$$
			$$A_2=A \cap B_2$$
			$$A_3=A \cap B_3$$
			As it can be seen from the figure $A_1$, $A_2$, and $A_3$ form a partition of the set $A$, 
			and thus by the third axiom of probability
			$$P(A)=P(A_1)+P(A_2)+P(A_3)$$</p>
			
			<figure>
    				<img src="images/chapter1/LOT_b.png" width="350" height="311" alt="Total probability" title="Total probability" border="0" />
  					<figcaption>Fig.1.24 - Law of total probability.</figcaption>
			</figure>
			<br>
			
			<p>Here is a rigorous proof of the law of total probability:</p>
			
			<i>Proof</i><br>
			<p>Since  $B_1, B_2, B_3,\cdots$ is a partition of the sample space $S$, we can write<br><br>
			<table align="center">
			<tr>
              <td>$S$</td>
              <td>$=\bigcup_{i} B_i$</td>
            </tr>		
            <tr>
              <td>$A$</td>
              <td>$= A \cap S$</td>
            </tr>
            <tr>
              <td></td>
              <td>$=A \cap (\bigcup_{i} B_i)$</td>
            </tr>
			<tr>
              <td></td>
              <td>$=\bigcup_{i} (A \cap B_i) \hspace{20pt} \hspace{20pt}$ by the distributive law (Theorem 1.2)</td>
            </tr>
            </table><br>
			Now note that the sets $A \cap B_i$ are disjoint (since the $B_i$'s are disjoint). 
			Thus, by the third probability axiom,
			$$P(A)=P\bigg(\bigcup_i (A \cap B_i)\bigg)=\sum_{i} P(A \cap B_i)=\sum_{i} P(A | B_i) P(B_i)$$</p>
			<hr /><br>
			
			<p>Here is a typical scenario in which we use the law of total probability. We are interested in 
			finding the probability of an event $A$, but we don't know how to find $P(A)$ directly. Instead, 
			we know the conditional probability of $A$ given some events $B_i$, where the $B_i$'s form a 
			partition of the sample space. Thus, we will be able to find $P(A)$ using the law of total probability, 
			$P(A)=\sum_{i} P(A | B_i) P(B_i)$.</p>
			
			<hr /><br>
			<a name="example24"></a>
			<span class='example'>Example </span><br>
			<p>I have three bags that each contains $100$ marbles:
			<ul>
    			<li>Bag 1 has $75$ red and $25$ blue marbles.</li>
   				<li>Bag 2 has $60$ red and $40$ blue marbles.</li>
    			<li>Bag 3 has $45$ red and $55$ blue marbles.</li>
			</ul>
			I choose one of the bags at random and then pick a marble from the chosen 
			bag, also at random. What is the probability that the chosen marble is red?</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 Let $R$ be the event that the chosen marble is red. Let $B_i$ be the event that I 
						 choose Bag $i$. We already know that
						 $$P(R|B_1) =0.75$$
						 $$(R|B_2) =0.60$$
						 $$P(R|B_3) =0.45$$
						 We choose our partition as $B_1, B_2, B_3$. Note that this is a valid partition 
						 because, firstly, the $B_i$'s are disjoint (only one of them can happen), and secondly, because 
						 their union is the entire sample space as one the bags will be chosen for sure, i.e., 
						 $P(B_1 \cup B_2 \cup B_3)=1$. Using the law of total probability, we can write<br><br>
						 <table align="center">			
                          <tr>
                            <td>$P(R)$</td>
                            <td>$ = P(R|B_1)P(B_1)+ P(R|B_2)P(B_2)+ P(R|B_3)P(B_3$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=(0.75)\frac{1}{3}+(0.60)\frac{1}{3}+(0.45)\frac{1}{3}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=0.60$</td>
                          </tr>
                          </table><br>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>

			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter1/1_4_1_independence.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_4_3_bayes_rule.php">next</a><a> &rarr;</a></div>
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
