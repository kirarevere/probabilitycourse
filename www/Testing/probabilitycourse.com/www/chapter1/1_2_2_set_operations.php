<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../"></base>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="section"	content="1.2.2"	/>
	<?php include '../Control/autonumber.php'; ?>
	<?php loadHeaders(3); ?>
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
				<div class="left"><a>&larr; </a><a href="chapter1/1_2_1_venn.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_2_3_cardinality.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>1.2.2 Set Operations</h2></div>
    		<div class="right">
			<a href="videos/chapter1/video1_2.html"><img src="images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<a href="chapter1/set_operations_print.html"><img src="images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></a></div>
    		<div class="clear"></div>
			
			<p>The <b>union</b> of two sets is a set containing all elements that are in $A$ <u>or</u> in 
			$B$ (possibly both). For example, $\{1,2\}\cup\{2,3\}=\{1,2,3\}$. Thus, we can write $x\in(A\cup B)$ 
			if and only if $(x\in A)$ or $(x\in B)$. Note that $A \cup B=B \cup A$. In Figure 1.4, 
			the union of sets $A$ and $B$ is shown by the shaded area in the Venn diagram.</p>
			
			<figure>
  					<img src="images/chapter1/union_b.png" width="300" height="200" alt="Union" title="Union" border="0" />
  					<figcaption>Fig.1.4 - The shaded area shows the set $B \cup A$.</figcaption>
			</figure>
			<br>

			<p>Similarly we can define the union of three or more sets. In particular, if $A_1, A_2, A_3,\cdots, A_n$ are $n$ 
			sets, their union $A_1 \cup A_2 \cup A_3 \cdots \cup A_n$ is a set containing all elements that are 
			in at least one of the sets. We can write this union more compactly by
   			$$\bigcup_{i=1}^{n} A_i$$
			For example, if $A_1=\{a,b,c\}, A_2=\{c,h\}, A_3=\{a,d\}$  then $\bigcup_{i} A_i=A_1 \cup A_2 
			\cup A_3=\{a,b,c,h,d\}$. We can similarly define the union of infinitely many sets 
			$A_1 \cup A_2 \cup A_3 \cup\cdots$.</p>

			<p>The <b>intersection</b> of two sets $A$ and $B$, denoted by $A \cap B$, consists of all elements 
			that are both in $A$ $\underline{\textrm{and}}$  $B$. For example, $\{1,2\}\cap\{2,3\}=\{2\}$. 
			In Figure 1.5, the intersection of sets $A$ and $B$ is shown by the shaded area using a Venn diagram.</p>
			
			<figure>
  					<img src="images/chapter1/intersection_b.png" width="300" height="185" alt="Intersection" title="Intersection" border="0" />
  					<figcaption>Fig.1.5 - The shaded area shows the set $B \cap A$.</figcaption>
			</figure>
			<br>		
			
			<p>More generally, for sets $A_1,A_2,A_3,\cdots$, their intersection $\bigcap_i A_i$ is defined as the 
			set consisting of the elements that are in all $A_i$'s. Figure 1.6 shows the intersection of three sets.</p>
			
			<figure>
  					<img src="images/chapter1/intersection3_b.png" width="300" height="248" alt="Intersection of 3 sets" title="Intersection of 3 sets" border="0" />
  					<figcaption>Fig.1.6 - The shaded area shows the set $A \cap B \cap C$.</figcaption>
			</figure>
			<br>

 			<p>The <b>complement</b> of a set $A$, denoted by $A^c$ or $\bar{A}$, is the set of all elements that are 
			in the universal set $S$ but are not in $A$. In Figure 1.7, $\bar{A}$ is shown by the shaded area using a Venn diagram.</p>
			
			<figure>
  					<img src="images/chapter1/complement_b.png" width="300" height="260" alt="Complement" title="Complement" border="0" />
  					<figcaption>Fig.1.7 - The shaded area shows the set $\bar{A}=A^c$.</figcaption>
			</figure>
			<br>

			<p>The <b>difference (subtraction)</b> is defined as follows. The set $A-B$ consists of elements that are 
			in $A$ but not in $B$. For example if $A=\{1,2,3\}$ and $B=\{3,5\}$, then $A-B=\{1,2\}$. In Figure 1.8, 
			$A-B$ is shown by the shaded area using a Venn diagram. Note that $A-B=A \cap B^c$.</p>
			
			<figure>
  					<img src="images/chapter1/difference_b.png" width="300" height="220" alt="Difference" title="Difference" border="0" />
  					<figcaption>Fig.1.8 - The shaded area shows the set $A-B$.</figcaption>
			</figure>
			<br>
			
			<p>Two sets $A$ and $B$ are <b>mutually exclusive</b> or <b>disjoint</b> if they do not have any shared 
			elements; i.e., their intersection is the empty set, $A \cap B=\emptyset$. More generally, several sets 
			are called disjoint if they are pairwise disjoint, i.e., no two of them share a common elements. 
			Figure 1.9 shows three disjoint sets.</p>
			
			<a name="figure9"></a>
			<figure>
  					<img src="images/chapter1/disjoint_b.png" width="300" height="220" alt="Disjoint sets" title="Disjoint sets" border="0" />
  					<figcaption>Fig.1.9 - Sets $A, B,$ and $C$ are disjoint.</figcaption>
			</figure>
			<br>

			<p>If the earth's surface is our sample space, we might want to partition it to the different continents. 
			Similarly, a country can be partitioned to different provinces. In general, a collection of nonempty 
			sets $A_1, A_2,\cdots$ is a <b>partition</b> of a set $A$ if they are disjoint and their union is $A$. 
			In Figure 1.10, The sets $A_1, A_2, A_3$ and $A_4$ form a partition of the universal set $S$.</p>
			
			<figure>
  					<img src="images/chapter1/partition_b.png" width="300" height="220" alt="Partition" title="Partition" border="0" />
  					<figcaption>Fig.1.10 - The collection of sets $A_1, A_2, A_3$ and $A_4$ is a partition of $S$.</figcaption>
			</figure>
			<br>

			<p>Here are some rules that are often useful when working with sets. We will see examples of their usage shortly.</p>
			
			<hr /><br>
			<span class='theorem'>Theorem </span><b>: De Morgan's law</b><br>
			<p>For any sets $A_1$, $A_2$, $\cdots$, $A_n$, we have
			<ul>
    			<li>$(A_1 \cup A_2 \cup A_3 \cup \cdots A_n)^c=A_1^c \cap A_2^c \cap A_3^c\cdots \cap A_n^c$</li>
    			<li>$(A_1 \cap A_2 \cap A_3 \cap \cdots A_n)^c=A_1^c \cup A_2^c \cup A_3^c\cdots \cup A_n^c$</li>
			</ul> </p>
			<hr /><br>
			
			<span class='theorem'>Theorem </span><b>: Distributive law</b><br>
			<p>For any sets $A$, $B$, and $C$ we have
			<ul>
    			<li>$A \cap (B \cup C)=(A \cap B) \cup (A\cap C)$</li>
    			<li>$A \cup (B \cap C)=(A \cup B) \cap (A\cup C)$</li>
			</ul> </p>
			<hr /><br>
			
			<span class='example'>Example </span><br>
			<p>If the universal set is given by $S=\{1,2,3,4,5,6\}$, and $A=\{1,2\}$, $B=\{2,4,5\}, 
			C=\{1,5,6\} $ are three sets, find the following sets:
			<ol type="a">
    			<li>$A \cup B$</li>
    			<li>$A \cap B$</li>
    			<li>$\overline{A}$</li>
    			<li>$\overline{B}$</li>
    			<li>Check De Morgan's law by finding $(A \cup B)^c$ and $A^c \cap B^c$.</li>
    			<li>Check the distributive law by finding $A \cap (B \cup C)$ and $(A \cap B) \cup (A\cap C)$.</li>
			</ol></p>
			
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p><ol type="a">
    					 	<li>$A \cup B=\{1,2,4,5\}$</li>
    						<li>$A \cap B=\{2\}$</li>
    						<li>$\overline{A}=\{3,4,5,6\}$ ($\overline{A}$ consists of elements that are in $S$ but not in $A$.)</li>
    						<li>$\overline{B}=\{1,3,6\}$.</li>
							<li>We have $$(A \cup B)^c=\{1,2,4,5\}^c=\{3,6\}$$ which is the same as
							$$A^c \cap B^c=\{3,4,5,6\} \cap \{1,3,6\}=\{3,6\}$$</li>
							<li>We have $$A \cap (B \cup C)=\{1,2\} \cap \{1,2,4,5,6\}=\{1,2\}$$ which is the same as
							$$(A \cap B) \cup (A\cap C)=\{2\} \cup \{1\}=\{1,2\}$$</li>
							</ol> 
						 </p>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>

			<p>A <b>Cartesian product</b> of two sets $A$ and $B$, written as $A\times B$, is the set containing <b>ordered</b> 
			pairs from $A$ and $B$. That is, if $C=A \times B$, then each element of $C$ is of the form $(x,y)$, where 
			$x \in A$ and $y \in B$:
			$$A \times B = \{(x,y) | x \in A \textrm{ and } y \in B \}$$
			For example if $A=\{1,2,3\}$ and $B=\{H,T\}$ then
			$$A \times B=\{(1,H),(1,T),(2,H),(2,T),(3,H),(3,T)\}$$
			Note that here the pairs are ordered, so for example, $(1,H)\neq (H,1)$. Thus $A \times B$ is <b>not</b> the 
			same as $B \times A$.</p>

			<p>If you have two finite sets $A$ and $B$, where $A$ has $M$ elements and $B$ has $N$ elements, then $A \times B$ 
			has $M \times N$ elements. This rule is called the <b>multiplication principle</b> and is very useful in counting 
			the numbers of elements in sets. The number of elements in a set is denoted by $|A|$, so here we write $|A|=M, 
			|B|=N$, and $|A \times B|=MN$. In the above example, $|A|=3, |B|=2$, thus $|A \times B|=3 \times 2 = 6$. 
			We can similarly define the Cartesian product of $n$ sets $A_1, A_2, \cdots, A_n$,
			$$A_1 \times A_2 \times A_3 \times \cdots \times A_n = \{(x_1, x_2, \cdots, x_n) | x_1 \in A_1 \textrm{ and } 
			x_2 \in A_2 \textrm{ and }\cdots x_n \in A_n \}$$
			The multiplication principle states that for finite sets $A_1, A_2, \cdots, A_n$,  if $|A_1|=M_1, |A_2|=M_2, 
			\cdots, |A_n|=M_n$, then $\mid A_1 \times A_2 \times A_3 \times \cdots \times A_n \mid=M_1 \times M_2 
			\times M_3 \times \cdots \times M_n$.</p>

			<p>An important example of sets obtained using a Cartesian product is $\mathbb{R}^n$, where $n$ is a natural 
			number. For $n=2$, we have
			<table align="center">			
            <tr>
              <td>$\mathbb{R}^2$</td>
              <td>$= \mathbb{R}\times \mathbb{R}$</td>
            </tr>
            <tr>
              <td></td>
              <td>$= \{(x,y) | x \in \mathbb{R}, y \in \mathbb{R} \}$</td>
            </tr>
            </table><br>

			Thus, $\mathbb{R}^2$ is the set consisting of all points in the two-dimensional plane. Similarly, 
			$\mathbb{R}^3=\mathbb{R}\times \mathbb{R} \times  \mathbb{R}$ and so on.</p>
			
			<hr />
			<div class="thinblock">
				<div class="left"><a>&larr; </a><a href="chapter1/1_2_1_venn.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_2_3_cardinality.php">next</a><a> &rarr;</a></div>
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
