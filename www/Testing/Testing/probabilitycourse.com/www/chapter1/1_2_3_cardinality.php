<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../"></base>
	<!-- Autonumbering -->
	<?php include '../Control/autonumber.php'; ?>
	<?php loadHeaders(4); ?>

	<!-- Autonumbering -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="section"	content="1.2.3"	/>
	<script type="text/x-mathjax-config">
  			MathJax.Hub.Config({
				displayAlign: "left",
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
				<div class="left"><a>&larr; </a><a href="chapter1/1_2_2_set_operations.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_2_4_functions.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>1.2.3 Cardinality: Countable and Uncountable Sets</h2></div>
    		<div class="right">
			<a href="videos/chapter1/video1_2.html"><img src="images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<a href="chapter1/cardinality_print.html"><img src="images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></a></div>
    		<div class="clear"></div>
			
			<p>Here we need to talk about <b>cardinality</b> of a set, which is basically the size of the set. 
			The cardinality of a set is denoted by $|A|$. We first discuss cardinality for finite sets and 
			then talk about infinite sets.</p>
			
			<b><font size="3">Finite Sets:</font></b>
			
			<p>Consider a set $A$. If $A$ has only a finite number of elements, its cardinality is simply the 
			number of elements in $A$. For example, if $A=\{2,4,6,8,10\}$, then $|A|=5$. Before discussing 
			infinite sets, which is the main discussion of this section, we would like to talk about a very 
			useful rule: the <b>inclusion-exclusion principle</b>. For two finite sets $A$ and $B$, we have
			$$|A \cup B |=|A|+|B|-|A \cap B|$$
			To see this, note that when we add $|A|$ and $|B|$, we are counting the elements in $|A \cap B|$ twice, 
			thus by subtracting it from $|A|+|B|$, we obtain the number of elements in $|A \cup B |$, (you can 
			refer to Figure 1.16 in <a href="1_2_5_solved1.php#problem2">Problem 2</a> to see this pictorially). We can extend the same idea to three or more sets.</p>			
			
			<div style="padding: 15px; border: black 1px solid">
			<p>Inclusion-exclusion principle:
			<ol>
    			<li>$|A \cup B |= |A|+|B|-|A \cap B|$</li><br>
    			<li>$|A \cup B \cup C| = |A| + |B| + |C| - |A \cap B| - |A \cap C| - |B \cap C| + |A \cap B \cap C|$</li>
			</ol></p> 
			</div>
			<br>

			<p>Generally, for $n$ finite sets $A_1, A_2, A_3,\cdots, A_n$, we can write
			<div style="padding: 15px;padding-left: 45px; border: black 1px solid">
			$$\biggl|\bigcup_{i=1}^n A_i\biggr|=\sum_{i=1}^n\left|A_i\right|-\sum_{i < j}\left|A_i\cap A_j\right|$$
			$$\>\>\>\>\>\>\>+\sum_{i < j < k}\left|A_i\cap A_j\cap A_k\right|-\ \cdots\ + \left(-1\right)^{n+1} \left|A_1\cap\cdots\cap A_n\right|$$
			</div>
			
			<hr /><br>
			<span class="example">Example </span><br>
			<p>In a party,
			<ul>
    			<li>There are $10$ people with white shirts and $8$ people with red shirts.</li>
    			<li>$4$ people have black shoes and white shirts.</li>
    			<li>$3$ people have black shoes and red shirts.</li>
    			<li>The total number of people with white or red shirts or black shoes is $21$.</li>
			</ul> 
			How many people have black shoes?</p>
			
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>Let $W$, $R$, and $B$, be the number of people with white shirts, red shirts, and black shoes 
						 respectively. Then, here is the summary of the available information:
						 $$|W|=10$$
						 $$|R|=8$$
						 $$|W \cap B|=4$$
						 $$|R \cap B|=3$$
						 $$|W \cup B \cup R|=21$$
						 Also, it is reasonable to assume that $W$ and $R$ are disjoint, $|W \cap R|=0$. Thus by applying 
						 the inclusion-exclusion principle we obtain
						 <table align="center">			
                          <tr>
                            <td>$|W \cup R \cup B|$</td>
                            <td>$ = 21$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$= |W| + |R| + |B|- |W \cap R| - |W \cap B| - |R \cap B| + |W \cap R \cap B|$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=10+8+|B|-0-4-3+0$</td>
                          </tr>
                          </table><br>
						 
						 Thus
						 $$|B|=10$$						 
						 </p>
						 
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<p>Note that another way to solve this problem is using a Venn diagram as shown in Figure 1.11.</p>
			<figure>
  					<img src="images/chapter1/venn-inc-exc_b.png" width="350" height="315" alt="Inclusion-exclusion diagram" title="Inclusion-exclusion diagram" border="0" />
  					<figcaption>Fig.1.11 - Inclusion-exclusion Venn diagram.</figcaption>
			</figure>
			<hr /><br>
			
			<b><font size="3">Infinite Sets:</font></b>
			<p>What if $A$ is an infinite set? It turns out we need to distinguish between two types of infinite sets, 
			where one type is significantly "larger" than the other. In particular, one type is called <b>countable</b>, 
			while the other is called <b>uncountable</b>. Sets such as $\mathbb{N}$ and $\mathbb{Z}$ are called countable, 
			but "bigger" sets such as $\mathbb{R}$ are called uncountable. The difference between the two types is 
			that you can list the elements of a countable set $A$, i.e., you can write $A=\{a_1, a_2,\cdots\}$, 
			but you cannot list the elements in an uncountable set. For example, you can write:
			<ul>
    			<li>$\mathbb{N}=\{1,2,3,\cdots\}$</li>
    			<li>$\mathbb{Z}=\{0,1,-1,2,-2,3,-3,\cdots\}$</li>
			</ul></p>
			
			<p>The fact that you can list the elements of a countably infinite set means that the set can be put in one-to-one 
			correspondence with natural numbers $\mathbb{N}$. On the other hand, you cannot list the elements in $\mathbb{R}$, 
			so it is an uncountable set. To be precise, here is the definition.</p>
			
			<div style="padding: 15px; border: black 1px solid">
			<span class='definition'>Definition </span><br>
			<p>Set $A$ is called countable if one of the following is true
			<ol type="a">
    			<li>if it is a finite set, $\mid A \mid < \infty$</li>
    			<li>or it can be put in one-to-one correspondence with natural numbers $\mathbb{N}$, in which 
				case the set is said to be countably infinite.</li>
			</ul>
			A set is called uncountable if it is not countable.</p>
			</div>
			<br>
			
			<p>Here is a simple guideline for deciding whether a set is countable or not. As far as applied probability 
			is concerned, this guideline should be sufficient for most cases.</p>
			
			<div style="padding: 15px; border: black 1px solid">
			<ul>
    			<li>$\mathbb{N}, \mathbb{Z}, \mathbb{Q}$ and any of their subsets are countable.</li>
    			<li>Any set containing an interval on the real line such as $[a,b], (a,b], [a,b),$ or $(a,b)$, 
				where $a < b$ is uncountable.</li>
			</ul> 
			</div><br>
			
			<p>The above rule is usually sufficient for the purpose of this book. However, to make the argument 
			more concrete, here we provide some useful results that help us prove if a set is countable or not. 
			If you are less interested in proofs, you may decide to skip them.</p>
			
			<hr /><br>
			<span class='theorem'>Theorem </span><br>
			<p>Any subset of a countable set is countable.<br>
 			Any superset of an uncountable set is uncountable.</p>
			
			<i>Proof</i><br>
			<p>The intuition behind this theorem is the following. If a set is countable, then any "smaller" set 
			should also be countable, so a subset of a countable set should be countable as well. To provide 
			a proof, we can argue in the following way.</p>
			
			<p>Let $A$ be a countable set and $B \subset A$. If $A$ is a finite set, then $|B|\leq |A| < \infty$, 
			thus $B$ is countable. If $A$ is countably infinite, then  we can list the elements in $A$, 
			then by removing the elements in the list that are not in $B$, we can obtain a list for $B$, 
			thus $B$ is countable.</p>
			
			<p>The second part of the theorem can be proved using the first part. Assume $B$ is uncountable. 
			If $B \subset A$ and  $A$ is countable, by the first part of the theorem $B$ is also a countable 
			set which is a contradiction.</p>
			<hr /><br>
			
			<span class='theorem'>Theorem </span><br>
			<p>If $A_1, A_2,\cdots$ is a list of countable sets then the set $\bigcup_{i} A_i=A_1 \cup A_2 \cup A_3\cdots$ 
			is also countable.</p>
			
			<i>Proof</i><br>
			<p>It suffices to create a list of elements in  $\bigcup_{i} A_i$. Since each $A_i$ is countable we can 
			list its elements: $A_i=\{a_{i1},a_{i2},\cdots\}$. Thus, we have:
			<ul>
    			<li>$A_1=\{a_{11},a_{12},\cdots\}$</li>
    			<li>$A_2=\{a_{21},a_{22},\cdots\}$</li>
    			<li>$A_3=\{a_{31},a_{32},\cdots\}$</li>
    			<li>...</li>
			</ul>
			Now we need to make a list that contains all the above lists. This can be done in different ways. 
			One way to do this is to use the ordering shown in Figure 1.12 to make a list. Here, we can write
			$$\hspace{100pt} \bigcup_{i} A_i=\{a_{11}, a_{12}, a_{31}, a_{22}, a_{13}, a_{14}, \cdots \} \hspace{100pt} (1.1)$$</p>
			
			<figure>
  					<img src="images/chapter1/countable_list_b.png" width="350" height="300" alt="Ordering" title="Ordering" border="0" />
  					<figcaption>Fig.1.12 - Ordering to make a list.</figcaption>
			</figure>
			<br>
			
			<p>We have been able to create a list that contains all the elements in $\bigcup_{i} A_i$, so this 
			set is countable.</p>
			<hr /><br>

			<span class='theorem'>Theorem </span><br>
			<p>If $A$ and $B$ are countable, then $A \times B$ is also countable.</p>
			
			<i>Proof</i><br>
			<p>The proof of this theorem is very similar to the previous theorem. Since $A$ and $B$ are 
			countable, we can write
			$$A = \{a_1, a_2, a_3, \cdots \}$$
			$$B = \{b_1, b_2, b_3, \cdots \}$$
			Now, we create a list containing all elements in $A \times B = \{(a_i,b_j) | i,j=1,2,3,\cdots \}$. 
			The idea is exactly the same as before. Figure 1.13 shows one possible ordering.</p>
			
			<figure>
       				<img src="images/chapter1/countable_list_2_b.png" width="350" height="240" alt="Ordering" title="Ordering" border="0" />
  					<figcaption>Fig.1.13 - Ordering to make a list.</figcaption>
			</figure>
			<br><hr /><br>
			
			<p>The above arguments can be repeated for any set $C$ in the form of
			$$C=\bigcup_i \bigcup_j \{ a_{ij} \}$$
			where indices $i$ and $j$ belong to some countable sets. Thus, any set in this form is countable. 
			For example, a consequence of this is that the set of rational numbers $\mathbb{Q}$ is countable. 
			This is because we can write
			$$\mathbb{Q}=\bigcup_{i \in \mathbb{Z}} \bigcup_{j \in \mathbb{N}} \{ \frac{i}{j} \}$$</p>

			<p>The above theorems confirm that sets such as $\mathbb{N}, \mathbb{Z}, \mathbb{Q}$ and their 
			subsets are countable. However, as we mentioned, intervals in $\mathbb{R}$ are uncountable. Thus, 
			you can never provide a list in the form of $\{a_1, a_2, a_3,\cdots\}$ that contains all the 
			elements in, say, $[0,1]$. This fact can be proved using a so-called diagonal argument, and we omit 
			the proof here as it is not instrumental for the rest of the book.</p>
					
			<hr />
			<div class="thinblock">
				<div class="left"><a>&larr; </a><a href="chapter1/1_2_2_set_operations.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_2_4_functions.php">next</a><a> &rarr;</a></div>
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
