<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../"></base>
	<!-- Autonumbering -->
	<?php include '../Control/autonumber.php'; ?>
	<?php loadHeaders(17); ?>
<!--
	<style>
		.example	{	font-weight:	bold;	}
		.example:after	{	counter-increment:	example	1;	content:	counter(example);	}
	</style>
-->
	<!-- Autonumbering -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="section"	content="1.4.4"	/>
<!--
<style>
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

	<title>Conditional Independence</title>
	<meta name="description" content="Definition for conditional independence" />

</head><body>
	<div id="container">
		<span class="hide_print">
		<script type="text/javascript" src="javascript/top_page_html_code.js"></script>
		</span>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter1/1_4_3_bayes_rule.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_4_5_solved3.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>1.4.4 Conditional Independence</h2></div>
    		<div class="right hide_print"><img src="images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;" id="printButton"/></div>
    		<div class="clear"></div>
			
			<p>As we mentioned earlier, almost any concept that is defined for probability can also be extended 
			to conditional probability. Remember that two events $A$ and $B$ are independent if
			$$P(A \cap B)=P(A)P(B) \hspace{10pt} \textrm{, or equivalently, } P(A|B)=P(A)$$
			We can extend this concept to conditionally independent events. In particular,</p>
			
			<span class='definition'>Definition </span><br>
			<p>Two events $A$ and $B$ are <b>conditionally independent</b> given an event $C$ with $P(C)>0$ if
			<a name="eq18"></a>
			$$\hspace{100pt}P(A \cap B|C)=P(A|C)P(B|C) \hspace{100pt} (1.8)$$</p>
			
			<p>Recall that from the definition of conditional probability,
			$$P(A|B)=\frac{P(A \cap B)}{P(B)}$$
			If $P(B)>0$. By conditioning on $C$, we obtain
			$$P(A|B,C)=\frac{P(A \cap B|C)}{P(B|C)}$$
			if $P(B|C), P(C) \neq 0$. If $A$ and $B$ are conditionally independent given $C$, we obtain<br>
			<table align="center">			
            <tr>
              <td>$P(A | B,C)$</td>
              <td>$=\frac{P(A \cap B|C)}{P(B|C)}$</td>
            </tr>
            <tr>
              <td></td>
              <td>$=\frac{P(A|C)P(B|C)}{P(B|C)}$</td>
            </tr>
			<tr>
              <td></td>
              <td>$=P(A|C)$</td>
            </tr>
            </table><br>
			Thus, if $A$ and $B$ are conditionally independent given $C$, then
			<a name="eq19"></a>
			$$\hspace{100pt}P(A | B,C)=P(A|C) \hspace{100pt} (1.9)$$
			Thus, Equations <a href="chapter1/1_4_4_conditional_independence.php#eq18">1.8</a> and 
			<a href="1_4_4_conditional_independence.php#eq19">1.9</a> are equivalent statements of the definition of 
			conditional independence. Now let's look at an example.</p>
			
			<hr /><br>
			<span class="example">Example </span><br>
			<p>A box contains two coins: a regular coin and one fake two-headed coin ($P(H)=1$). I choose 
			a coin at random and toss it twice. Define the following events.
			<ul>
    			<li>A= First coin toss results in an $H$.</li>
    			<li>B= Second coin toss results in an $H$.</li>
    			<li>C= Coin 1 (regular) has been selected.</li>
			</ul>
			Find $P(A|C), P(B|C), P(A \cap B|C), P(A), P(B),$ and $P(A \cap B)$. Note that $A$ 
			and $B$ are NOT independent, but they are <i>conditionally</i> independent given $C$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>We have $P(A|C)=P(B|C)=\frac{1}{2}$. Also, given that Coin 1 is selected, we have 
						 $P(A \cap B|C)=\frac{1}{2}.\frac{1}{2}=\frac{1}{4}$. To find $P(A), P(B),$ and 
						 $P(A \cap B)$, we use the law of total probability:<br>
						 <table align="center">			
                          <tr>
                            <td>$P(A)$</td>
                            <td>$ =P(A|C)P(C)+P(A|C^c)P(C^c)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=\frac{1}{2}\cdot \frac{1}{2} + 1\cdot \frac{1}{2}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\frac{3}{4}$</td>
                          </tr>
                          </table><br>
						 Similarly, $P(B)=\frac{3}{4}$. For $P(A \cap B)$, we have<br><br>
						 <table align="center">			
                          <tr>
                            <td>$P(A \cap B)$</td>
                            <td>$ = P(A \cap B|C)P(C)+P(A \cap B|C^c)P(C^c)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=P(A|C)P(B|C)P(C)+P(A|C^c)P(B|C^c)P(C^c)$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$\hspace{120pt} \textrm{ (by conditional independence of $A$ and $B$)}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\frac{1}{2}\cdot \frac{1}{2}\cdot \frac{1}{2}  + 1\cdot 1\cdot \frac{1}{2}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\frac{5}{8}$</td>
                          </tr>
                          </table><br>
						 </p>						 
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>

			<p>As we see, $P(A \cap B)=\frac{5}{8}\neq P(A)P(B)=\frac{9}{16}$, which means that $A$ and $B$ 
			are not independent. We can also justify this intuitively. For example, if we know $A$ has 
			occurred (i.e., the first coin toss has resulted in heads), we would guess that it is more 
			likely that we have chosen Coin 2 than Coin 1. This in turn can increase the probability 
			that $B$ occurs. Thus, knowing that $A$ has occurred, changes the conditional probability 
			of $B$. This suggests that $A$ and $B$ are not independent. On the other hand, given $C$ 
			(Coin 1 is selected), $A$ and $B$ are independent.</p>
			
			<p>One important lesson here is that, generally speaking, conditional independence neither implies (nor 
			is it implied by) independence. Thus, we can have two events that are conditionally independent but 
			they are not unconditionally independent (such as $A$ and $B$ above). Also, we can have two events 
			that are independent but not conditionally independent, given an event $C$. Here is a simple 
			example regarding this case. Consider rolling a die and let
			$$A=\{1,2\}$$
			$$B=\{2,4,6\}$$
			$$C=\{1,4\}$$
			Then, we have
			$$P(A)=\frac{1}{3}, P(B)=\frac{1}{2}$$
			$$P(A \cap B)=\frac{1}{6}=P(A)P(B)$$
			Thus, $A$ and $B$ are independent. But we have
			$$P(A|C)=\frac{1}{2}, P(B|C)=\frac{1}{2}$$
			$$P(A \cap B|C)=P(\{2\}|C)=0$$
			Thus
			$$P(A \cap B|C) \neq P(A|C)P(B|C)$$
			which means $A$ and $B$ are not conditionally independent given $C$.</p>

			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter1/1_4_3_bayes_rule.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_4_5_solved3.php">next</a><a> &rarr;</a></div>
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
