<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../"></base>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="section"	content="1.3.4"	/>
	<?php include '../Control/autonumber.php'; ?>
	<?php loadHeaders(10); ?>
<!--
<style>
	body	{	counter-reset:	example	<?php getExampleStart(11);	?>;	}
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
				<div class="left"><a>&larr; </a><a href="chapter1/1_3_3_finding_probabilities.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_3_5_continuous_models.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>1.3.4 Discrete Probability Models</h2></div>
    		<div class="right hide_print"><a href="videos/chapter1/video1_4.html"><img src="images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img src="images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;" id="printButton"/></div>
    		<div class="clear"></div>
			
			<p>Here, we will distinguish between two different types of sample spaces, discrete and continuous. We will 
			discuss the difference more in detail later on, when we discuss random variables. The basic idea 
			is that in discrete probability models we can compute probability of events by adding all the 
			corresponding outcomes, while in continuous probability models we need to use integration instead of summation.</p>

			<p>Consider a sample space $S$. If $S$ is a <i>countable</i> set, this refers to a <b>discrete</b> probability 
			model. In this case, since $S$ is countable, we can list all the elements in $S$:
			$$S=\{s_1, s_2, s_3,\cdots\}.$$
			If $A \subset S$ is an event, then $A$ is also countable, and by the third axiom of probability we can write
			$$P(A)=P(\bigcup_{s_j \in A} \{s_j\})=\sum_{s_j \in A} P(s_j).$$
			Thus in a countable sample space, to find probability of an event, all we need to do is sum the probability 
			of individual elements in that set.</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>I play a gambling game in which I will win $k-2$ dollars with probability $\frac{1}{2^k}$ for any 
			$k \in \mathbb{N}$, that is,
			<ul>
    			<li>with probability $\frac{1}{2}$, I lose $1$ dollar;</li>
    			<li>with probability $\frac{1}{4}$, I win $0$ dollar;</li>
    			<li>with probability $\frac{1}{8}$, I win $1$ dollar;</li>
    			<li>with probability $\frac{1}{16}$, I win $2$ dollars;</li>
    			<li>with probability $\frac{1}{32}$, I win $3$ dollars;</li>
    			<li>$\cdots$</li>
			</ul> </p>
			<p>What is the probability that I win more than or equal to $1$ dollar and less than $4$ dollars? What is 
			the probability that I win more than $2$ dollars?</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 In this problem, the random experiment is the gambling game and the outcomes are the amount 
						 in dollars that I win (lose). Thus we may write
						 $$S=\{-1,0,1,2,3,4,5,\cdots\}.$$
						 As we see this is an infinite but countable set. The problem also states that
						 $$P(k)=P(\{i\})=\frac{1}{2^{k+2}} \textrm{  for $k \in S$}.$$
						 First, let's check that this is a valid probability measure. To do so, we should check if all 
						 probabilities add up to one, i.e., $P(S)=1$. We have<br><br>
						 <table align="center">			
                          <tr>
                            <td>$P(S)$</td>
                            <td>$ =\sum_{k=-1}^{\infty} P(k)$</td>
							<td></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$= \sum_{k=-1}^{\infty} \frac{1}{2^{k+2}}$</td>
							<td></td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$= \frac{1}{2}+\frac{1}{4}+\frac{1}{8}+\cdots \hspace{20pt}$</td>
							<td>$\textrm{(geometric sum)}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=1$.</td>
							<td></td>
                          </tr>
                          </table><br>
						 Now let's solve the problem. Let's define $A$ as the event that I win more than or equal 
						 to $1$ dollar and less than $4$ dollars, and $B$ as the event that I win more than $2$ dollars. Thus,
						 $$A=\{1,2,3\}, B=\{3,4,5,\cdots\}.$$
						 Then<br>
						 <table align="center">			
                          <tr>
                            <td>$P(A)$</td>
                            <td>$=P(1)+P(2)+P(3)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=\frac{1}{8}+\frac{1}{16}+\frac{1}{32}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\frac{7}{32}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$\approx 0.219$</td>
                          </tr>
                          </table><br>
						 Similarly,<br>
						 <table align="center">			
                          <tr>
                            <td>$P(B)$</td>
                            <td>$=P(3)+P(4)+P(5)+P(6)+\cdots$</td>
							<td></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=\frac{1}{32}+\frac{1}{64}+\frac{1}{128}+\frac{1}{256}+\cdots \hspace{20pt}$</td>
							<td>$\textrm{(geometric sum)}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\frac{1}{16}$</td>
							<td></td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$= 0.0625$</td>
							<td></td>
                          </tr>
                          </table><br>
						 Note that another way to find $P(B)$ is to write<br><br>
						 <table align="center">			
                          <tr>
                            <td>$P(B)$</td>
                            <td>$=1-P(B^c)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=1-P(\{-1,0,1,2\})$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=1-\bigg(P(-1)+P(0)+P(1)+P(2)\bigg)$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=1-\left(\frac{1}{2}+\frac{1}{4}+\frac{1}{8}+\frac{1}{16}\right)$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=1-\frac{15}{16}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\frac{1}{16}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$= 0.0625$</td>
                          </tr>
                          </table><br>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<i>Note:</i> Here we have used the geometric series sum formula. In particular, for any 
			$a,x \in \mathbb{R}$, we have
			$$a + ax + a x^2 + a x^3 + \cdots + a x^{n-1} = \sum_{k=0}^{n-1} ax^k= a \frac{1-x^{n}}{1-x}. \hspace{30pt} (1.3)$$
			Moreover, if $|x|<1$, then we have
			$$a + ax + a x^2 + a x^3 + \cdots = \sum_{k=0}^{\infty} ax^k= a \frac{1}{1-x}. \hspace{70pt} (1.4)$$
			<hr /><br>
			
			<b><font size="3">Finite Sample Spaces with Equally Likely Outcomes:</font></b>
			<p>An important special case of discrete probability models is when we have a finite sample space $S$, 
			where each outcome is equally likely, i.e.,
			$$S=\{s_1,s_2,\cdots,s_N\}, \textrm{ where } P(s_i)=P(s_j) \textrm{ for all }i,j \in \{1,2,\cdots,N\}.$$
			Rolling a fair die is an instance of such a probability model. Since all outcomes are equally likely, we must have
			$$P(s_i)=\frac{1}{N}, \textrm{ for all }i \in \{1,2,\cdots,N\}.$$
			In such a model, if $A$ is any event with cardinality $|A|=M$, we can write
			$$P(A)=\sum_{s_j \in A} P(s_j)=\sum_{s_j \in A} \frac{1}{N}=\frac{M}{N}=\frac{|A|} {|S|}.$$
			Thus, finding probability of $A$ reduces to a <i>counting</i> problem in which we need to count how many 
			elements are in $A$ and $S$.</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>I roll a fair die twice and obtain two numbers: $X_1=$ result of the first roll, and $X_2=$ result of the second roll. 
			Write down the sample space $S$, and assuming that all outcomes are equally likely (because the die is fair), 
			find the probability of the event $A$ defined as the event that $X_1+X_2=8$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 The sample space $S$ can be written as<br><br>
						 <table align="center">			
                          <tr>
                            <td>$S=\{$</td>
                            <td>$(1,1),(1,2),(1,3),(1,4),(1,5),(1,6),$</td>
                          </tr>
                          
						  <tr>
                            <td></td>
                            <td>$(2,1),(2,2),(2,3),(2,4),(2,5),(2,6),$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$(3,1),(3,2),(3,3),(3,4),(3,5),(3,6),$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$(4,1),(4,2),(4,3),(4,4),(4,5),(4,6),$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$(5,1),(5,2),(5,3),(5,4),(5,5),(5,6),$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$(6,1),(6,2),(6,3),(6,4),(6,5),(6,6)\}$.</td>
                          </tr>
                          </table><br>
						 As we see there are $|S|=36$ elements in $S$. To find probability of $A$, all we need to do is 
						 find $M=|A|$. In particular, $A$ is defined as<br><br>
						 <table align="center">			
                          <tr>
                            <td>$A$</td>
                            <td>$=\{(X_1,X_2) | X_1+X_2=8, X_1,X_2 \in \{1,2,\cdots,6\}\}$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=\{(2,6),(3,5),(4,4),(5,3),(6,2)\}$.</td>
                          </tr>
                          </table><br>		
						 Thus, $|A|=5$, which means that
						 $$P(A)=\frac{|A|}{|S|}=\frac{5}{36}.$$
						 A very common mistake is not distinguishing between, say $(2,6)$ and $(6,2)$. It is important to 
						 note that these are two different outcomes: $(2,6)$ means that the first roll is a $2$ and the 
						 second roll a $6$, while $(6,2)$ means that the first roll is a $6$ and the second roll a is $2$. 
						 Note that it is very common to write $P(X_1+X_2=8)$ when referring to $P(A)$ as defined above. 
						 In fact, $X_1$ and $X_2$ are examples of <i>random variables</i> that will be discussed in detail 
						 later on.
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<div style="padding: 15px; border: black 1px solid">
			<p>In a finite sample space $S$, where all outcomes are equally likely, the probability of any event $A$ can be found by
			$$P(A)=\frac{|A|}{|S|}.$$</p>
			</div><br>

			<p>The formula $P(A)=\frac{|A|} {|S|}$ suggests that it is important to be able to count elements in sets. If sets are 
			small, this is an easy task; however, if the sets are large and defined implicitly, this could be a difficult job. 
			That is why we discuss counting methods later on.</p>

			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter1/1_3_3_finding_probabilities.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_3_5_continuous_models.php">next</a><a> &rarr;</a></div>
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
