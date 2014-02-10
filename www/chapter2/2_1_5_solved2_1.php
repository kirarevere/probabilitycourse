<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<?php include '../Control/autonumber.php'; loadHeaders(25); ?>
	<meta name='section'	content='2.1.5' />

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	
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
	
	<link rel="stylesheet" type="text/css" href="http://probabilitycourse.com/style_sheet.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="print.css" media="print" />

	<title>Intro to Probability</title>

</head><body>
	<div id="container">
		<span class="hide_print">
		<script type="text/javascript" src="http://probabilitycourse.com/javascript/top_page_html_code.js"></script>
		</span>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter2/2_1_4_unordered_with_replacement.php">previous</a></div>
    			<div class="right"><a href="chapter2/2_2_0_using_recursion.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>2.1.5 Combinatorics: Solved Problems</h2></div>
    		<div class="right hide_print">
			<img src="http://probabilitycourse.com/images/print.png" id="printButton" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></div>
    		<div class="clear"></div>
			
			<span class='problem'>Problem </span><br>
			<p>Let $A$ and $B$ be two finite sets, with $|A|=m$ and $|B|=n$. How many distinct functions (mappings) 
			can you define from set $A$ to set $B$, $f:A \rightarrow B$?</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 We can solve this problem using the multiplication principle. Let
						 $$A =\{a_1,a_2,a_3,...,a_m\}$$
						 $$B =\{b_1,b_2,b_3,...,b_n\}$$
						 Note that to define a mapping from $A$ to $B$, we have $n$ options for 
						 $f(a_1)$, i.e., $f(a_1) \in  B=\{b_1,b_2,b_3,...,b_n\}$. Similarly we have $n$ options for 
						 $f(a_2)$, and so on. Thus by the multiplication principle, the total number of distinct 
						 functions $f:A \rightarrow B$ is
						 $$n \cdot n \cdot n \cdots  n = n^m$$
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span><br>
			<p>A function is said to be <strong>one-to-one</strong> if for all $x_1\neq x_2$, we have $f(x_1)\neq f(x_2)$. Equivalently, 
			we can say a function is one-to-one if whenever $f(x_1)=f(x_2)$, then $x_1=x_2$. Let $A$ and $B$ be two finite 
			sets, with $|A|=m$ and $|B|=n$. How many distinct one-to-one functions (mappings) can you define from set $A$ 
			to set $B$, $f:A \rightarrow B$?</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 Again let
						 $$A =\{a_1,a_2,a_3,...,a_m\}$$
						 $$B =\{b_1,b_2,b_3,...,b_n\}$$
						 To define a one-to-one mapping from $A$ to $B$, we have $n$ options for $f(a_1)$, i.e., 
						 $f(a_1) \in  B=\{b_1,b_2,b_3,...,b_n\}$. Given $f(a_1)$, we have $n-1$ options for $f(a_2)$, 
						 and so on. Thus by the multiplication principle, the total number of distinct functions 
						 $f:A \rightarrow B$, is
						 $$n \cdot (n-1) \cdot (n-2) \cdots (n-m+1) = P^n_{m}$$
						 Thus, in other words, choosing a one-to-one function from $A$ to $B$ is equivalent to choosing 
						 an $m$-permutation from the $n$-element set $B$ (ordered sampling without replacement) and as 
						 we have seen there are $P^n_{m}$ ways to do that.
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span><br>
			<p>An urn contains $30$ red balls and $70$ green balls. What is the probability of getting exactly $k$ red balls 
			in a sample of size $20$ if the sampling is done <b>with</b> replacement (repetition allowed)? Assume 
			$0\leq k \leq 20$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 Here any time we take a sample from the urn we put it back before the next sample (sampling with 
						 replacement). Thus in this experiment each time we sample, the probability of choosing a red ball 
						 is $\frac{30}{100}$, and we repeat this in $20$ independent trials. This is exactly the binomial 
						 experiment. Thus, using the binomial formula we obtain
						 $$P(k \textrm{ red balls})={20 \choose k} (0.3)^k(0.7)^{20-k}$$
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span><br>
			<p>An urn consists of $30$ red balls and $70$ green balls. What is the probability of getting exactly $k$ 
			red balls in a sample of size $20$ if the sampling is done <b>without</b> replacement (repetition not allowed)?</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 Let $A$ be the event (set) of getting exactly $k$ red balls. To find $P(A)=\frac{|A|}{|S|}$, we 
						 need to find $|A|$ and $|S|$. First, note that $|S|={100 \choose 20}$. Next, to find $|A|$, 
						 we need to find out in how many ways we can choose $k$ red balls and $20-k$ green balls. 
						 Using the multiplication principle, we have
						 $$|A|= {30 \choose k}{70 \choose 20-k}$$
						 Thus, we have
						 $$P(A)= \frac{{30 \choose k}{70 \choose 20-k}}{{100 \choose 20}}$$
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>

			<span class='problem'>Problem </span><br>
			Assume that there are $k$ people in a room and we know that:
			<ul>
                <li>$k=5$ with probability $\frac{1}{4}$</li>
                <li>$k=10$ with probability $\frac{1}{4}$</li>
                <li>$k=15$ with probability $\frac{1}{2}$</li>
            </ul>
			<ol type="a">
                <li>What is the probability that at least two of them have been born in the same month? 
				Assume that all months are equally likely.</li>
                <li>Given that we already know there are at least two people that celebrate their birthday 
				in the same month, what is the probability that $k=10$?</li>
            </ol> 
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <ol type="a">
                              <li>The first part of the problem is very similar to the birthday problem, one 
							  difference here is that here $n=12$ instead of $365$. Let $A_k$ be the event that 
							  at least two people out of $k$ people have birthdays in the same month. We have
							  $$P(A_k)=1-\frac{P^{12}_k}{12^k},  \textrm{for } k \in \{2,3,4,...,12\}$$
							  Note that $P(A_k)=1$ for $k>12$. Let $A$ be the event that at least two people in the 
							  room were born in the same month. Using the law of total probability we, have
							  <table align="center">			
                              <tr>
                                <td>$P(A)$</td>
                                <td>$= \frac{1}{4} P(A_5)+\frac{1}{4} P(A_{10})+ \frac{1}{2} P(A_{15})$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$= \frac{1}{4} \left(1-\frac{P^{12}_5}{12^5}\right)+\frac{1}{4} \left(1-\frac{P^{12}_{10}}{12^{10}}\right)+ \frac{1}{2}$</td>
                              </tr>
                              </table><br>
							  </li>
							  <li>The second part of the problem asks for $P(k=10 | A)$. We can use Bayes&#39; rule to write
							  <table align="center">			
                              <tr>
                                <td>$P(k=10 | A)$</td>
                                <td>$=\frac{P(A|k=10)P(k=10)}{P(A)}$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$= \frac{P(A_{10})}{4P(A)}$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=\frac{1-\frac{P^{12}_{10}}{12^{10}}}{(1-\frac{P^{12}_5}{12^5})+(1-\frac{P^{12}_{10}}{12^{10}})+ 2}$</td>
                              </tr>
                              </table><br>
							  </li>
                         </ol> 
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span><br>
			<p>How many distinct solutions does the following equation have?
			$$x_1+x_2+x_3+x_4=100, \textrm{ such that }$$
			$$x_1 \in \{1,2,3..\}, x_2 \in \{2,3,4,..\}, x_3,x_4 \in \{0,1,2,3,...\}$$</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 We already know that in general the number of solutions to the equation
						 $$x_1+x_2+...+x_n=k, \textrm{ where } x_i \in \{0,1,2,3,...\}$$
						 is equal to
						 $${n+k-1 \choose k}={n+k-1 \choose n-1}$$
						 We need to convert the restrictions in this problem to match this general form. 
						 We are given that $x_1 \in \{1,2,3..\}$, so if we define
						 $$y_1=x_1-1$$
						 then $y_1 \in \{0,1,2,3,...\}$. Similarly define $y_2 =x_2-2$, so $y_2 \in \{0,1,2,3,...\}$. 
						 Now the question becomes equivalent to finding the number of solutions to the equation
						 $$y_1+1+y_2+2+x_3+x_4=100, \textrm{ where } y_1,y_2,x_3,x_4 \in \{0,1,2,3,...\}$$
						 or equivalently, the number of solutions to the equation
						 $$y_1+y_2+x_3+x_4=97, \textrm{ where } y_1,y_2,x_3,x_4 \in \{0,1,2,3,...\}$$
						 As we know this is equal to
						 $${4+97-1 \choose 3}={100 \choose 3}$$
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span> (The matching problem)<br>
			<p>Here is a famous problem: $N$ guests arrive at a party. Each person is wearing a hat. We collect all 
			hats and then randomly redistribute the hats, giving each person one of the $N$ hats randomly. 
			What is the probability that at least one person receives his/her own hat?<br>
			<i>Hint:</i> Use the inclusion-exclusion principle.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 Let $A_i$ be the event that $i$&#39;th person receives his/her own hat. Then we are interested in 
						 finding $P(E)$, where $E=A_1 \cup A_2 \cup A_3 \cup ... \cup A_N$. To find $P(E)$, we use the 
						 inclusion-exclusion principle. We have
						 <table align="center">			
                          <tr>
                            <td>$P(E)=P\biggl(\bigcup_{i=1}^N A_i\biggr)$</td>
                            <td>$=\sum_{i=1}^N P(A_i)-\sum_{i,j\,:\,i < j}P(A_i\cap A_j)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$+\sum_{i,j,k\,:\,i < j < k}P(A_i\cap A_j\cap A_k)-\ \cdots\ +(-1)^{N-1}\, P\biggl(\bigcap_{i=1}^N A_i\biggr)$</td>
                          </tr>
                          </table><br>
						  Note that there is complete symmetry here, that is, we can write
						  $$P(A_1) =P(A_2)=P(A_3)=...=P(A_N)$$
						  $$P(A_1 \cap A_2)=P(A_1 \cap A_3)=...=P(A_2 \cap A_4)=...$$
						  $$P(A_1 \cap A_2 \cap A_3)=P(A_1 \cap A_2 \cap A_4)=...=P(A_2 \cap A_4 \cap A_5)=...$$
						  $$...$$
						  Thus, we have
						  $$\sum_{i=1}^N P(A_i)=N P(A_1)$$
						  $$\sum_{i,j\,:\,i < j}P(A_i\cap A_j)= {N \choose 2} P(A_1 \cap A_2)$$
						  $$\sum_{i,j,k\,:\,i < j < k}P(A_i\cap A_j\cap A_k)={N \choose 3} P(A_1 \cap A_2 \cap A_3)$$
						  $$...$$
						  Therefore, we have
						  <table align="center">			
                          <tr>
                            <td>$P(E)$</td>
                            <td>$=NP(A_1)- {N \choose 2} P(A_1 \cap A_2)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$+ {N \choose 3} P(A_1 \cap A_2 \cap A_3)-...+(-1)^{N-1}P(A_1 \cap A_2 \cap A_3 ... \cap A_N) \hspace{30pt} (2.5)$</td>
                          </tr>
                          </table><br>
						  Now, we only need to find $P(A_1)$, $P(A_1 \cap A_2)$, $P(A_1 \cap A_2 \cap A_3)$, etc. to finish 
						  solving the problem. To find $P(A_1)$, we have
						  $$P(A_1)=\frac{|A_1|}{|S|}$$
						  Here the sample space $S$ consists of all possible permutations of $N$ objects (hats). Thus, we have
						  $$|S|=N!$$
						  On the other hand, $A_1$ consists of all possible permutations of $N-1$ objects 
						  (because the first object is fixed). Thus
						  $$|A_1|=(N-1)!$$
						  Therefore, we have
						  $$P(A_1)=\frac{|A_1|}{|S|}=\frac{(N-1)!}{N!}=\frac{1}{N}$$
						  Similarly, we have
						  $$|A_1 \cap A_2|=(N-2)!$$
						  Thus,
						  $$P(A_1 \cap A_2)=\frac{|A_1 \cap A_2|}{|S|}=\frac{(N-2)!}{N!}=P^{N}_{N-2}$$
						  Similarly,
						  $$P(A_1 \cap A_2 \cap A_3)=\frac{|A_1 \cap A_2 \cap A_3|}{|S|}=\frac{(N-3)!}{N!}=P^{N}_{N-3}$$
						  $$P(A_1 \cap A_2 \cap A_3 \cap A_4)=\frac{|A_1 \cap A_2 \cap A_3 \cap A_4|}{|S|}=\frac{(N-4)!}{N!}=P^{N}_{N-4}$$
						  $$...$$
						  Thus, using Equation 2.5 we have
						  $$P(E)=N. \frac{1}{N}- {N \choose 2} P^{N}_{N-2}+ {N \choose 3} P^{N}_{N-3}-...+(-1)^{N-1}\frac{1}{N!} \hspace{40pt} (2.6)$$
						  By simplifying a little bit, we obtain
						  $$P(E) =1- \frac{1}{2!}+\frac{1}{3!}-....+(-1)^{N-1}\frac{1}{N!}$$
						  We are done. It is interesting to note what happens when $N$ becomes large. To see 
						  that, we should remember the Taylor series for $e^{x}$. In particular,
						  $$e^x=1+\frac{x}{1!}+\frac{x^2}{2!}+\frac{x^3}{3!}+...$$
						  Letting $x=-1$, we have
						  $$e^{-1}=1-\frac{1}{1!}+\frac{1}{2!}-\frac{1}{3!}+...$$
						  Thus, we conclude that as $N$ becomes large, $P(E)$ approaches $1-\frac{1}{e}$.
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>

			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter2/2_1_4_unordered_with_replacement.php">previous</a></div>
    			<div class="right"><a href="chapter2/2_2_0_using_recursion.php">next</a><a> &rarr;</a></div>
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
