<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<?php include '../Control/autonumber.php'; initChapterHeaders(2); ?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="section" content="2.1.0"/>
	
	<script type="text/x-mathjax-config">
  			MathJax.Hub.Config({
    		tex2jax: { inlineMath: [['$','$'],['\\(','\\)']] }
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

	<title>Counting | Combinatorics | Multiplication Principle | Sampling</title>
	<meta name="description" content="Finding probability in a finite space is a counting problem" />

</head><body>
	<div id="container">
		<span class="hide_print">
		<script type="text/javascript" src="http://probabilitycourse.com/javascript/top_page_html_code.js"></script>
		</span>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter1/1_5_0_chapter1_problems.php">previous</a></div>
    			<div class="right"><a href="chapter2/2_1_1_ordered_with_replacement.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>2.1 Counting</h2></div>
    		<div class="right hide_print">
			<a href="http://probabilitycourse.com/videos/chapter2/video2_1.html"><img src="http://probabilitycourse.com/images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img id="printButton" src="http://probabilitycourse.com/images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></div>
    		<div class="clear"></div>
			
			<p>Remember that for a finite sample space $S$ with equally likely outcomes, the probability of an 
			event $A$ is given by
			$$P(A)=\frac{|A|}{|S|}=\frac{M}{N}$$
			Thus, finding probability of $A$ reduces to a <b>counting</b> problem in which we need to count how 
			many elements are in $A$ and $S$. In this section, we will discuss ways to count the number of elements 
			in a set in an efficient manner. Counting is an area of its own and there are books on this subject 
			alone. Here we provide a basic introduction to the material that is usually needed in probability. 
			Almost everything that we need about counting is the result of the <b>multiplication principle</b>. 
			We previously saw the multiplication principle when we were talking about Cartesian products. 
			Here we look at it from a different perspective. Let us look at a simple example.</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>Suppose that I want to purchase a tablet computer. I can choose either a large or a small screen; 
			a $64$GB, $128$GB, or $256$ GB storage capacity, and a black or white cover. How many different options 
			do I have.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>Here are the options:
						 <ol type="1">
                              <li>L-64-B</li>
                              <li>L-64-W</li>
                              <li>L-128-B</li>
                              <li>L-128-W</li>
                              <li>L-256-B</li>
                              <li>L-256-W</li>
                              <li>S-64-B</li>
                              <li>S-64-W</li>
                              <li>S-128-B</li>
                              <li>S-128-W</li>
                              <li>S-256-B</li>
                              <li>S-256-W</li>
                         </ol><br>
						 Thus, there are $12$ possible options. The multiplication principle states that we can 
						 simply multiply the number of options in each category (screen size, memory, color) to get 
						 the total number of possibilities, i.e., the answer is $2 \times 3 \times 2 =12$.</p> 
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<p>Here is a formal statement of the multiplication principle.</p>
			<div style="padding: 15px; border: black 1px solid">
			<b>Multiplication Principle</b><br>
			<p>Suppose that we perform $r$ experiments such that the $k$'th experiment has $n_k$ possible outcomes, 
			for $k=1$,$2$,$\cdots$,$r$. Then there are a total of $n_1 \times n_2 \times n_3 \times \cdots \times n_r$ 
			possible outcomes for the sequence of $r$ experiments.</p>
			</div><br>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			I need to choose a password for a computer account. The rule is that the password must consist 
			of two lower case letters (a to z) followed by one capital letter (A to Z) followed by four digits 
			($0,1,\cdots,9$). For example, the following is a valid password
			$$ejT3018$$
			<ul>
                <li>Find the total number of possible passwords, $N$.</li>
                <li>A hacker has been able to write a program that randomly and independently generates $10^8$ 
				passwords according to the above rule. Note that the same password could be generated more than 
				once. If one of the randomly chosen password matches my password, then he can access my account 
				information. What is the probability that he is successful in accessing my account information?</li>
            </ul> 
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 To choose a password, I need to first choose a lower case letter, then another lower case 
						 letter, then one capital letter, and then $4$ digits. There are $26$ lower case letters, 
						 $26$ capital letters, and $10$ digits. Thus, by the multiplication principle, the total 
						 number of possible valid passwords is
						 $$N=26 \times 26 \times 26 \times 10 \times 10 \times 10 \times 10=26^3 \times 10^4$$
						 Let $G_i$ denote the event that the hacker's $i$'th guess matches mine, for $i=1,2,\cdots, 10^8$. 
						 The probability that the $i$'th randomly chosen password matches mine is
						 $$P(G_i)=\frac{1}{N}$$
						 Now let $p_{hack}$ be the probability that the hacker is successful, that is at least one 
						 of the randomly chosen passwords matches mine. Recall that "at least" means union:
						 $$p_{hack}=P\bigg(\bigcup_{i} G_i\bigg)$$
						 Note that the events $G_i$ are independent since the guesses are independently generated, 
						 but they are not disjoint since multiple guesses could be correct if the hacker's program 
						 generates the same password. Therefore in this case it is easier to work with intersections 
						 than unions, so we will find the probability of the complement event first:
						 <table align="center">			
                          <tr>
                            <td>$P\bigg(\bigcup_{i} G_i\bigg)^c$</td>
                            <td>$= P\bigg(\bigcap_{i} G_i^c\bigg)$</td>
							<td></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=\prod_{i=1}^{N} P(G_i^c) \hspace{30pt}$</td>
							<td>$\textrm{(by independence)}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\bigg(1-\frac{1}{N}\bigg)^{10^8}$</td>
							<td></td>
                          </tr>
                          </table><br>
						  Therefore,
						  <table align="center">			
                            <tr>
                              <td>$p_{hack}$</td>
                              <td>$=1-\bigg(1-\frac{1}{N}\bigg)^{10^8}$</td>
                            </tr>
                            <tr>
                              <td></td>
                              <td>$=1-\bigg(1-\frac{1}{26^3 \times 10^4}\bigg)^{10^8}$</td>
                            </tr>
							<tr>
                              <td></td>
                              <td>$=0.4339$</td>
                            </tr>
                            </table><br>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			
			<hr /><br>
			<a name="example30"></a>
			<span class='example'>Example </span><br>
			<p>Let $A$ be a set with $|A|=n < \infty$. How many distinct subsets does $A$ have?</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 Let's assume $A=\{a_1, a_2, a_3, \cdots,a_n\}$. We can look at this problem in the following 
						 way. To choose a subset $B$, we perform the following experiment. First we decide whether or 
						 not $a_1 \in B$ (two choices), then we decide whether or not $a_2 \in B$ (two choices), then 
						 we decide whether or not $a_3 \in B$ (two choices), ..., and finally we decide whether or not 
						 $a_n \in B$ (two choices). By the multiplication principle, the total number of subsets is 
						 then given by $2 \times 2 \times 2 \times \cdots \times 2=2^n$. To check our answer, let's 
						 assume $A=\{1,2\}$. Then our formula states that there are $4$ possible subsets. Indeed, 
						 the subsets are
						 <ol type="1">
                              <li>$\{\}=\emptyset$</li>
                              <li>$\{1\}$</li>
                              <li>$\{2\}$</li>
                              <li>$\{1,2\}$</li>
                         </ol> 
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<p>Here, we would like to provide some general terminology for the counting problems that show up in 
			probability to make sure that the language that we use is precise and clear.</p>
			
			<ul>
                <li><b>Sampling</b>: sampling from a set means choosing an element from that set. We often 
				<b>draw</b> a sample at random from a given set in which each element of the set has 
				equal chance of being chosen.</li><br>
                <li><b>With or without replacement</b>: usually we draw multiple samples from a set. If we 
				put each object back after each draw, we call this <b>sampling with replacement</b>. In 
				this case a single object can be possibly chosen multiple times. For example, if 
				$A=\{a_1, a_2, a_3, a_4\}$ and we pick 3 elements with replacement, a possible choice might 
				be $(a_3,a_1,a_3)$. Thus "with replacement" means "repetition is allowed". On the other hand, 
				if repetition is not allowed, we call it <b>sampling without replacement</b>.</li><br>
                <li><b>Ordered or unordered</b>: If ordering matters (i.e.: $a_1, a_2, a_3 \neq a_2, a_3, a_1$), 
				this is called <b>ordered sampling</b>. Otherwise, it is called <b>unordered</b>.</li>
			</ul>
				
				<p>Thus when we talk about sampling from sets, we can talk about four possibilities.</p>
				<ul>
                    <li>ordered sampling with replacement</li>
                    <li>ordered sampling without replacement</li>
                    <li>unordered sampling without replacement</li>
                    <li>unordered sampling with replacement</li>
                </ul>
				
				<p>We will discuss each of these in detail and indeed will provide a formula for each. The formulas will 
				be summarized at the end in <a href="http://probabilitycourse.com/chapter2/2_1_4_unordered_with_replacement.php#table2_1">Table 2.1</a>, 
				but we would like to emphasize that the best approach here 
				is to understand how to derive these formulas. You do not actually need to memorize them if you understand 
				they way they are obtained, and the best way to learn this material is to solve a lot of problems.</p>			

			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter1/1_5_0_chapter1_problems.php">previous</a></div>
    			<div class="right"><a href="chapter2/2_1_1_ordered_with_replacement.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>		
		</div>
		<div id="menu" class="hide_print">
			 <script type="text/javascript" src="javascript/menu_html_code.js"></script>
		</div>

		<div id="footer" class="hide_print">
			<script type="text/javascript" src="javascript/footer_html_code.js"></script>
		</div>
	</div>
</body>
</html>
