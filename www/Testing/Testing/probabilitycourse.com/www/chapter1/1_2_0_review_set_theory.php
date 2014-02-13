<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" / >
	<!-- Autonumbering -->
	<?php include '../Control/autonumber.php'; ?>
	<?php loadHeaders(1); ?>
	<!-- Autonumbering -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="section"	content="1.2.0" />
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
	
	<link rel="stylesheet" type="text/css" href="style_sheet.css" />

	<title>Intro to Probability</title>

</head><body>
	<div id="container">
		<script type="text/javascript" src="javascript/top_page_html_code.js"></script>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock">
				<div class="left"><a>&larr; </a><a href="chapter1/1_1_1_example.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_2_1_venn.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
			
			<div class="left"><h2>1.2 Review of Set Theory</h2></div>
    		<div class="right">
			<a href="videos/chapter1/video1_2.html"><img src="images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<a href="chapter1/review_set_theory_print.html"><img src="images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></a></div>
    		<div class="clear"></div>
			
			<p>Probability theory uses the language of sets. As we will see later, probability is defined 
			and calculated for sets. Thus, here we briefly review some basic concepts from set theory 
			that are used in this book. We discuss set notations, definitions, and operations (such as 
			intersections and unions). We then introduce countable and uncountable sets. Finally, we 
			briefly discuss functions. This section may seem somewhat theoretical and thus less interesting 
			than the rest of the book, but it lays the foundation for what is to come.</p>

			<p>A <b>set</b> is a collection of some items (elements). We often use capital letters to denote 
			a set. To define a set we can simply list all the elements in curly brackets, for example to 
			define a set $A$  that consists of the two elements $\clubsuit$ and $\diamondsuit$, we write 
			$A=\{\clubsuit,\diamondsuit\}$. To say that $\diamondsuit$ belongs to $A$, we write $\diamondsuit \in A$, 
			where "$\in$" is pronounced "belongs to". To say that an element does not belong to a set, we 
			use $\notin$. For example, we may write $\heartsuit \notin A$.</p>
			
			<div align="center"><p style="padding: 15px; border: black 1px solid">A <b>set</b> is a 
			collection of things (elements).</p></div>

			<p>Note that <u>ordering does not matter</u>, so the two sets $\{\clubsuit,\diamondsuit\}$ and 
			$\{\diamondsuit,\clubsuit\}$ are equal. We often work with sets of numbers. Some important 
			sets are given the following example.</p>
			
			<hr /><br>
			<!-- Example -->
			<p><span class="example">Example </span><br>
			The following sets are used in this book:
			<ul>
    			<li>The set of natural numbers, $\mathbb{N}=\{1,2,3,\cdots\}$.</li>
    			<li>The set of integers, $\mathbb{Z}=\{\cdots,-3,-2,-1,0,1,2,3,\cdots\}$.</li>
    			<li>The set of rational numbers $\mathbb{Q}$.</li>
    			<li>The set of real numbers $\mathbb{R}$.</li>
    			<li>Closed intervals on the real line. For example, $[2,3]$ is the set of all real numbers 
				$x$ such that $2\leq x\leq3$.</li>
    			<li>Open intervals on the real line. For example $(-1,3)$ is the set of all real numbers $x$ 
				such that $-1< x <3$.</li>
    			<li>Similarly, $[1,2)$ is the set of all real numbers $x$ such that $1\leq x <2$.</li>
    			<li>The set of complex numbers $\mathbb{C}$ is the set of numbers in the form of $a+bi$, 
				where $a,b \in \mathbb{R}$, and $i=\sqrt{-1}$.</li>
			</ul></p>
			<hr /><br>
			<!-- /Example -->

			
			<p>We can also define a set by mathematically stating the properties satisfied by 
			the elements in the set. In particular, we may write
			<div align="center">$A=\{x | x \textrm{ satistifies some property} \}$ <br>
			or <br>
			$A=\{x : x \textrm{ satistifies some property} \}$</div><br>
			The symbols $"|"$ and $":"$ are pronounced "such that".
			</p>

			<hr /><br>
			<p><span class='example'>Example </span><br>
			Here are some examples of sets defined by stating the properties satisfied by the elements:
			<ul>
    			<li>If the set $C$ is defined as $C=\{x | x \in \mathbb{Z}, -2 \leq x < 10\}$, then $C=\{-2,-1,0,\cdots,9\}$.</li>
    			<li>If the set $D$ is defined as $D=\{x^2 |x\in \mathbb{N}\}$, then $D=\{1,4,9,16,\cdots\}$.</li>
    			<li>The set of rational numbers can be defined as $\mathbb{Q}=\{\frac{a}{b}|a,b \in \mathbb{Z}, b \neq 0\}$.</li>
    			<li>For real numbers $a$ and $b$, where $a < b$, we can write $(a,b]=\{x \in \mathbb{R} \mid a< x \leq b \}$.</li>
    			<li>$\mathbb{C}=\{a+bi \mid a,b \in \mathbb{R}, i=\sqrt{-1}\}$.</li>
			</ul></p>
			<hr /><br>
			
			<p>Set $A$ is a <b>subset</b> of set $B$ if every member of $A$ is also a member of $B$. We write $A \subset B$, 
			where "$\subset$" indicates "subset". Equivalently, we say $B$ is a <b>superset</b> of $A$, or $B \supset A$.</p>
			
			<hr /><br>
			<p><span class='example'>Example </span><br>
			Here are some examples of sets and their subsets:
			<ul>
    			<li>If $E=\{1,4\}$ and $C=\{1,4,9\}$, then $E\subset C$.</li>
    			<li>$\mathbb{N}\subset \mathbb{Z}$.</li>
    			<li>$\mathbb{Q}\subset \mathbb{R}$.</li>
			</ul> </p>
			<hr /><br>
	
			<p>Two sets are equal if they have the exact same elements. Thus, $A=B$ if and only if $A\subset B$ 
			and $B\subset A$. For example, $\{1,2,3\}=\{3,2,1\}$, and  $\{a,a,b\}=\{a,b\}$. The set with no 
			elements, i.e., $\emptyset=\{ \}$ is the <b>null set</b> or the <b>empty set</b>. For any set $A$, 
			$\emptyset \subset A$.</p>

			<p>The <b>universal set</b> is the set of all things that we could possibly consider in the context 
			we are studying. Thus every set $A$ is a subset of the universal set. In this book, we often denote 
			the universal set by $S$ (As we will see, in the language of probability theory, the universal set is 
			called the <i>sample space</i>.) For example, if we are discussing rolling of a die, our universal 
			set maybe defined as $S=\{1,2,3,4,5,6\}$, or if we are discussing tossing of a coin once, our universal 
			set might be $S=\{H,T\}$ ($H$ for heads and $T$ for tails).</p>
			
			<hr />
			<div class="thinblock">
				<div class="left"><a>&larr; </a><a href="chapter1/1_1_1_example.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_2_1_venn.php">next</a><a> &rarr;</a></div>
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
