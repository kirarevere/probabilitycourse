<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../"></base>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="section"	content="1.2.5"	/>
	<?php include '../Control/autonumber.php'; ?>
	<?php loadHeaders(6); ?>

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
	<link rel="stylesheet" type="text/css" href="mobile.css" media="only screen and (max-device-width:700px), only screen and (max-width: 700px)" />

	<title>Solved Problems for Set Theory Review</title>
	<meta name="description" content="Examples with solutions" />

</head><body>
	<div id="container">
		<span class="hide_print">
		<script type="text/javascript" src="javascript/top_page_html_code.js"></script>
		</span>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter1/1_2_4_functions.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_3_1_random_experiments.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>1.2.5 Review of Set Theory: Solved Problems</h2></div>
    		<div class="right hide_print">
			<img src="images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;" id="printButton"/></div>
    		<div class="clear"></div>
			
			<span class='problem'>Problem </span>
			<p>Let $A$, $B$, $C$ be three sets as shown in the following Venn diagram. For each 
			of the following sets, draw a Venn diagram and shade the area representing the given set.
			<ol type="a">
    			<li>$A \cup B \cup C$</li>
    			<li>$A \cap B \cap C$</li>
    			<li>$A \cup (B \cap C)$</li>
    			<li>$A-(B \cap C)$</li>
    			<li>$A \cup (B \cap C)^c$</li>
			</ol></p>
			
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>Figure 1.15 shows Venn diagrams for these sets.</p>
						 <figure>
  						 		 <img src="images/chapter1/prob1-venn_b.png" width="500" height="770" alt="Solution" title="Solution" border="0" />
  								 <figcaption>Fig.1.15 - Venn diagrams for different sets.</figcaption>
						 </figure>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<a name="problem2"></a>
			<span class='problem'>Problem </span>
			<p>Using Venn diagrams verify the following identities.
			<ol type="a">
    			<li>$A=(A \cap B) \cup (A-B)$</li>
    			<li>If $A$ and $B$ are finite sets, we have 
				$$\hspace{120pt}|A \cup B |=|A|+|B|-|A \cap B|. \hspace{120pt} (1.2)$$</li>
			</ol>
			</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>						 
						 <p>Figure 1.16 pictorially verifies the given identities. Note that in the second identity, 
						 we show the number of elements in each set by the corresponding shaded area.</p>
						 <figure>
  						 		 <img src="images/chapter1/prob2-venn_b.png" width="500" height="673" alt="Solution" title="Solution" border="0" />
  								 <figcaption>Fig.1.16 - Venn diagrams for some identities.</figcaption>
						 </figure>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span>
			<p>Let $S=\{1,2,3\}$. Write all the possible partitions of $S$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>Remember that a partition of $S$ is a collection of nonempty sets that are disjoint 
						 and their union is $S$. There are $5$ possible partitions for $S=\{1,2,3\}$:
						 <ol type="1">
    					 	 <li>$\{1\},\{2\},\{3\}$</li>
    						 <li>$\{1,2\},\{3\}$</li>
    						 <li>$\{1,3\},\{2\}$</li>
    						 <li>$\{2,3\},\{1\}$</li>
    						 <li>$\{1,2,3\}$.</li>
						</ol> </p>
						</li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span>
			<p>Determine whether each of the following sets is countable or uncountable.
			<ol type="a">
    			<li>$A=\{ x \in \mathbb{Q} | -100 \leq x \leq 100 \}$</li>
    			<li>$B=\{(x,y) | x \in \mathbb{N}, y \in \mathbb{Z} \}$</li>
    			<li>$C=(0,0.1]$</li>
    			<li>$D=\{ \frac{1}{n} | n \in \mathbb{N} \}$</li>
			</ol> </p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p><ol type="a">
    					 	 <li>$A=\{ x \in \mathbb{Q} | -100 \leq x \leq 100 \}$ is <b>countable</b> since it 
							 is a subset of a countable set, $A \subset \mathbb{Q}$.</li>
    						 <li>$B=\{(x,y) | x \in \mathbb{N}, y \in \mathbb{Z} \}$ is <b>countable</b> because 
							 it is the Cartesian product of two countable sets, i.e., $B= \mathbb{N} \times \mathbb{Z}$.</li>
    						 <li>$C=(0,.1]$ is <b>uncountable</b> since it is an interval of the form $(a,b]$, where $a < b$.</li>
    						 <li>$D=\{ \frac{1}{n} | n \in \mathbb{N} \}$ is <b>countable</b> since it is in 
							 one-to-one correspondence with the set of natural numbers. In particular, you can 
							 list all the elements in the set $D$, $D=\{1, \frac{1}{2}, \frac{1}{3},\cdots\}$.</li>
						</ol> </p>
						</li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span>
			<p>Find the range of the function $f:\mathbb{R} \rightarrow \mathbb{R}$ defined as $f(x)=\textrm{sin} (x)$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>For any real value $x$, $-1 \leq \textrm{sin} (x) \leq 1$. Also, all values in $[-1,1]$ 
						 are covered by $\textrm{sin} (x)$. Thus, Range$(f)=[-1,1]$.</p>
						</li>
					 </ul>
					 </li>
				 </ul>
			</div>
			
		<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter1/1_2_4_functions.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_3_1_random_experiments.php">next</a><a> &rarr;</a></div>
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
