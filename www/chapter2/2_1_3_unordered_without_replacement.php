<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<?php include '../Control/autonumber.php'; loadHeaders(23); ?>
	<meta name='section'	content='2.1.3' />

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
	
	<link rel="stylesheet" type="text/css" href="http://probabilitycourse.com/style_sheet.css" />
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
				<div class="left"><a>&larr; </a><a href="chapter2/2_1_2_ordered_without_replacement.php">previous</a></div>
    			<div class="right"><a href="chapter2/2_1_4_unordered_with_replacement.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>2.1.3 Unordered Sampling without Replacement: <br>Combinations</h2></div>
    		<div class="right hide_print">
			<a href="http://probabilitycourse.com/videos/chapter2/video2_3.html"><img src="http://probabilitycourse.com/images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img src="http://probabilitycourse.com/images/print.png" id="printButton" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></div>
    		<div class="clear"></div>
			
			<p>Here we have a set with $n$ elements, e.g., $A=\{1, 2, 3,....n\}$ and we want to draw $k$ samples 
			from the set such that ordering does not matter and repetition is not allowed. Thus, we basically 
			want to choose a $k$-element subset of $A$, which we also call it a <b>$k$-combination</b> of 
			the set $A$. For example if $A=\{1,2,3\}$ and $k=2$, there are $3$ different possibilities
			<ol type="1">
                <li>{1,2}</li>
                <li>{1,3}</li>
                <li>{2,3}</li>
            </ol>
			We show the number of $k$-element subsets of $A$ by
			$${n \choose k}$$
			and is read "$n$ choose $k$". A typical scenario here is that we have a group of $n$ people, 
			and we would like to choose $k$ of them to serve on a committee. A simple way to find 
			${n \choose k}$ is to compare it with $P^n_k$. Note that the difference between the two is 
			ordering. In fact, for any $k$-element subset of $A=\{1, 2, 3,....n\}$, we can order the 
			elements in $k!$ ways, thus we can write
			$$P^n_k={n \choose k}\times k!$$
			Therefore,
			$${n \choose k}=\frac{n!}{k!(n-k)!}$$
			Note that if $k$ is an integer larger than $n$, then ${n \choose k}=0$. This makes sense, since 
			if $k>n$ there is no way to choose $k$ distinct elements from an $n$-element set.</p>
			
			<div style="padding: 15px; border: black 1px solid">
			The number of $k$-combinations of an $n$-element set is given by
			$${n \choose k}=\frac{n!}{k!(n-k)!}, \textrm{ for } 0\leq k\leq n$$
			</div><br>
			
			<p>${n \choose k}$ is also called the <b>binomial coefficient</b>. This is because the coefficients 
			in the binomial theorem are given by ${n \choose k}$. In particular, the binomial theorem 
			states that for an integer $n\geq 0$, we have
			$$(a+b)^n=\sum_{k=0}^{n} {n \choose k} a^k b^{n-k}$$</p>

			<p><i>Note:</i> There are several different common notations that are used to show the number 
			of $k$-combinations of an $n$-element set including $C_{n,k}, C(n,k), C^n_k, nCk$, etc. 
			In this book, we always use ${n \choose k}$.</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>I choose $3$ cards from the standard deck of cards. What is the probability that 
			these cards contain at least one ace?</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 Again the phrase "at least" suggests that it might be easier to first find $P(A^c)$, 
						 the probability that there is no ace. Here the sample space contains all possible 
						 ways to choose $3$ cards from $52$ cards, thus
						 $$|S|={52 \choose 3}$$
						 There are $52-4=48$ non-ace cards, so we have
						 $$|A^c|={48 \choose 3}$$
						 Thus
						 $$P(A)=1-\frac{{48 \choose 3}}{{52 \choose 3}}$$
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<a name="example34"></a>
			<span class='example'>Example </span><br>
			<p>How many distinct sequences can we make using $3$ letter "A"s and $5$ letter 
			"B"s? (AAABBBBB, AABABBBB, etc.)</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 You can think of this problem in the following way. You have $3+5=8$ positions to 
						 fill with letters A or B. From these $8$ positions, you need to choose $3$ of them 
						 for As. Whatever is left will be filled with Bs. Thus the total number of ways is
						 $${8 \choose 3}$$
						 Now, you could have equivalently chosen the locations for Bs, so the answer would have been
						 $${8 \choose 5}$$
						 Thus, we conclude that
						 $${8 \choose 3}={8 \choose 5}$$
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<p>The same argument can be repeated for general $n$ and $k$ to conclude
			$${n \choose k}={n \choose n-k}$$
			You can check this identity directly algebraically, but the way we showed it here is interesting 
			in the sense that you do not need any algebra. This is sometimes a very effective way 
			of proving some identities of binomial coefficients. This is proof by <i>combinatorial interpretation</i>. 
			The basic idea is that you count the same thing twice, each time using a different method and 
			then conclude that the resulting formulas must be equal. Let us look at some other examples.</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			Show the following identities for non-negative integers $k$ and $m$ and $n$, using 
			combinatorial interpretation arguments.
			<ol type="1">
                <li>We have $\sum_{k=0}^{n} {n \choose k}=2^n$</li>
                <li>For $0\leq k< n$, we have ${n+1 \choose k+1}={n \choose k+1}+{n \choose k}$</li>
                <li>We have ${m+n \choose k}=\sum_{i=0}^{k} {m \choose i}{n \choose k-i}$ (Vandermonde's identity)</li>
            </ol> 
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <ol type="1">
                              <li>To show this identity, we count the total number of subsets of an $n$-element 
							  set $A$. We have already seen that this is equal to $2^n$ 
							  in <a style="color: #337810; background: none; padding: 0px; border: none; margin: 0px;" href="http://probabilitycourse.com/chapter2/2_1_0_counting.php#example30">Example 2.3</a>. 
							  Another way to count the number of subsets is to first count the subsets with $0$ elements, 
							  and then add the number of subsets with $1$ element, and then add the number of subsets 
							  with $2$ elements, etc. But, we know that the number of $k$-element subsets of $A$ is 
							  ${n \choose k}$, thus we have
							  <table align="center">			
                              <tr>
                                <td>$2^n$</td>
								<td>$=\textrm{Number of subsets of $A$}$</td>
                                <td></td>
                              </tr>
                              <tr>
                                <td></td>
								<td>$=\sum_{k=0}^{n}\textrm{Number of $k$-element subsets of $A$} \hspace{70pt}$</td>
                                <td>$(2.1)$</td>
                              </tr>
							  <tr>
                                <td></td>
								<td>$=\sum_{k=0}^{n} {n \choose k}$</td>
                                <td></td>
                              </tr>
                              </table><br>
							  We can also prove this identity algebraically, using the binomial theorem, 
							  $(a+b)^n=\sum_{k=0}^{n} {n \choose k} a^k b^{n-k}$. If we let $a=b=1$, we obtain 
							  $2^n=\sum_{k=0}^{n} {n \choose k}$.
							  </li><br>
							  <li>To show this identity, let's assume that we have an arbitrary set $A$ with 
							  $n+1$ distinct elements:
							  $$A=\{a_1, a_2, a_3, ...,a_n,a_{n+1}\}$$
							  We would like to choose a $k+1$-element subset $B$. We know that we can do this in  
							  ${n+1 \choose k+1}$ ways (the right hand side of the identity). Another way to count the 
							  number of $k+1$-element subsets $B$ is to divide them into two non-overlapping categories 
							  based on whether or not they contain $a_{n+1}$. In particular, if $a_{n+1} \notin B$, then 
							  we need to choose $k+1$ elements from $\{a_1, a_2, a_3, ...,a_n\}$ which we can do in 
							  ${n \choose k+1}$ different ways. If, on the other hand, $a_{n+1} \in B$, then we need 
							  to choose another $k$ elements from $\{a_1, a_2, a_3, ...,a_n\}$ to complete $B$ and 
							  we can do this in ${n \choose k}$ different ways. Thus, we have shown that the total 
							  number of $k+1$-element subsets of an $n+1$-element set is equal to ${n \choose k+1}+{n \choose k}$.
							  </li><br>
							  <li>Here we assume that we have a set $A$ that has $m+n$ elements:
							  $$A=\{a_1,a_2,a_3,...,a_m, b_1, b_2,...,b_n\}$$
							  We would like to count the number of $k$-element subsets of $A$. This is ${m+n \choose k}$. 
							  Another way to do this is first choose $i$ elements from $\{a_1,a_2,a_3,...,a_m\}$ and 
							  then $k-i$ elements from $\{b_1, b_2,...,b_n\}$. This can be done in ${m \choose i}{n \choose k-i}$ 
							  number of ways. But $i$ can be any number from $0$ to $k$, so we conclude 
							  ${m+n \choose k}=\sum_{i=0}^{k} {m \choose i}{n \choose k-i}$.
							  </li>
                          </ol> 
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<p>Let us now provide another interpretation of ${n \choose k}$. Suppose that we have a group of $n$ people 
			and we would like to divide them two groups $A$ and $B$ such that group $A$ consists of $n$ people and 
			group $B$ consists of $n-k$ people. To do this, we just simply need to choose $k$ people and put them 
			in group $A$, and whoever is left will be in group $B$. Thus, the total number of ways to do this is 
			${n \choose k}$.</p>
			
			<div style="padding: 15px; border: black 1px solid">
			The total number of ways to divide $n$ distinct objects into two groups $A$ and $B$ such that group 
			$A$ consists of $k$ objects and group $B$ consists of $n-k$ objects is ${n \choose k}$.
			</div><br>
			
			<p><i>Note:</i> For the special case when $n=2k$ and we do not particularly care about group names $A$ 
			and $B$, the number of ways to do this division is $\frac{1}{2}{n \choose k}$ to avoid double 
			counting. For example, if $22$ players want to play a soccer game and we need to divide them into 
			two groups of $11$ players, there will be $\frac{1}{2}{22 \choose 11}$ ways to do this. The reason 
			for this is that in this case if we label the players $1$ to $22$, then the two choices
			$$A=\{1,2,3,...,11\} \textrm{ and } B=\{12,13,14,...,22\}$$
			$$A=\{12,13,14,...,22\} \textrm{ and } B=\{1,2,3,...,11\}$$
			are essentially the same.</p>
			
			<p>For example, we can solve <a href="chapter2/2_1_3_unordered_without_replacement.php#example34">Example 2.7</a> 
			in the following way: We have $8$ blank positions to be filled with letters "A" or "B". We need to 
			divide them into two groups $A$ and $B$ such that group $A$ consists of three blank positions and 
			group $B$ consists of $5$ blank spaces. The elements in group $A$ show the positions of "A"s and the 
			elements in group $B$ show the positions of "B"s. Therefore the total number of possibilities is 
			${8 \choose 3}$.</p>
			
			<b><font size="3">Bernoulli Trials and Binomial Distribution:</font></b>
			<p>Now, we are ready to discuss an important class of random experiments that appear frequently in practice. 
			First, we define Bernoulli trials and then discuss the binomial distribution. A <b>Bernoulli Trial</b> is 
			a random experiment that has two possible outcomes which we can label as "success" and "failure", such as
			<ul>
                <li>You toss a coin. The possible outcomes are "heads" and "tails". You can define "heads" as success 
				and "tails" as "failure" here.</li>
                <li>You take a pass-fail test. The possible outcomes are "pass" and "fail".</li>
            </ul></p> 

			<p>We usually denote the probability of success by $p$ and probability of failure by $q=1-p$. If we have 
			an experiment in which we perform $n$ <u>independent</u> Bernoulli trials and count the total number 
			of successes, we call it a <b>binomial</b> experiment. For example, you may toss a coin $n$ times 
			repeatedly and be interested in the total number of heads.</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			Suppose that I have a coin for which $P(H)=p$ and $P(T)=1-p$. I toss the coin $5$ times.
			<ol type="a">
                <li>What is the probability that the outcome is $THHHH$?</li>
                <li>What is the probability that the outcome is $HTHHH$?</li>
                <li>What is the probability that the outcome is $HHTHH$?</li>
                <li>What is the probability that I will observe exactly four heads and one tails?</li>
                <li>What is the probability that I will observe exactly three heads and two tails?</li>
                <li>If I toss the coin $n$ times, what is the probability that I observe exactly $k$ heads and $n-k$ tails?</li>
            </ol> 
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <ol type="a">
                              <li>To find the probability of the event $A=\{THHHH\}$, we note that $A$ is the 
							  intersection of $5$ independent events: $A\equiv$ first coin toss is tails, and the 
							  next four coin tosses result in heads. Since the individual coin tosses are independent, 
							  we obtain
							  <table align="center">			
                              <tr>
                                <td>$P(THHHH)$</td>
                                <td>$=p(T) \times p(H) \times p(H) \times p(H) \times p(H)$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=(1-p)p^4$</td>
                              </tr>
                              </table><br>
							  </li>
							  <li>Similarly,
							  <table align="center">			
                              <tr>
                                <td>$P(HTHHH)$</td>
                                <td>$=p(H) \times p(T) \times p(H) \times p(H) \times p(H)$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=(1-p)p^4$</td>
                              </tr>
                              </table><br>
							  </li>
							  <li>Similarly,
							  <table align="center">			
                              <tr>
                                <td>$P(HHTHH)$</td>
                                <td>$=p(H) \times p(H) \times p(T) \times p(H) \times p(H)$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=(1-p)p^4$</td>
                              </tr>
                              </table><br></li>
							  <li>Let $B$ be the event that I observe exactly one tails and four heads. Then
							  $$B=\{THHHH,HTHHH,HHTHH,HHHTH,HHHHT\}$$
							  Thus
							  <table align="center">			
                              <tr>
                                <td>$P(B)$</td>
                                <td>$=P(THHHH)+P(HTHHH)+P(HHTHH)+P(HHHTH)+P(HHHHT)$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=(1-p)p^4+(1-p)p^4+(1-p)p^4+(1-p)p^4+(1-p)p^4$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=5p^4(1-p)$</td>
                              </tr>
                              </table><br>
							  </li>
							  <li>Let $C$ be the event that I observe exactly three heads and two tails. Then
							  $$C=\{TTHHH,THTHH,THHHTH,...,HHHTT\}$$
							  Thus
							  <table align="center">			
                              <tr>
                                <td>$P(C)$</td>
                                <td>$=P(TTHHH)+P(THTHH)+P(THHTH)+...+P(HHHTT)$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$=(1-p)^2p^3+(1-p)^2p^3+(1-p)^2p^3+...+(1-p)^2p^3$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=|C|p^3(1-p)^2$</td>
                              </tr>
                              </table><br>
							  But what is $|C|$? Luckily, we know how to find $|C|$. This is the total number of 
							  distinct sequences that you can create using two tails and three heads. This is exactly 
							  the same as 
							  <a style="color: #337810; background: none; padding: 0px; border: none; margin: 0px;" href="chapter2/2_1_3_unordered_without_replacement.php#example34">Example 2.7</a>. 
							  The idea is that we have $5$ positions to fill 
							  with letters H or T. From these $5$ positions, you need to choose $3$ of them for Hs. 
							  Whatever is left is going to be filled with Ts. Thus the total number of elements 
							  in $C$ is ${5 \choose 3}$, and
							  $$P(C)={5 \choose 3}p^3(1-p)^2$$
							  </li>
							  <li>Finally, we can repeat the same argument when we toss the coin $n$ times and obtain
							  $$P(\textrm{$k$ heads and $n-k$ tails})={n \choose k}p^k(1-p)^{n-k}$$
							  Note that here, instead of writing $P(k$ heads and $n-k$ tails$)$, we can just write $P(k$ heads$)$.
							  </li>
                         </ol> 
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<div style="padding: 15px; border: black 1px solid">
			<b>Binomial Formula:</b>
			<p>For $n$ independent Bernoulli trials where each trial has success probability $p$, the probability 
			of $k$ successes is given by
			$$P(k)={n \choose k}p^k(1-p)^{n-k}$$</p>
			</div><br><br>
			
			<b><font size="3">Multinomial Coefficients:</font></b>
			<p>The interpretation of the binomial coefficient ${n \choose k}$ as the number of ways to divide $n$ objects 
			into two groups of size $k$ and $n-k$ has the advantage of being generalizable to dividing objects 
			into more than two groups.</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>Ten people have a potluck. Five people will be selected to bring a main dish, three people will 
			bring drinks, and two people will bring dessert. How many ways they can be divided into these three groups?</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 We can solve this problem in the following way. First, we can choose $5$ people for the 
						 main dish. This can be done in ${10 \choose 5}$ ways. From the remaining $5$ people, 
						 we then choose $3$ people for drinks, and finally the remaining $2$ people will bring desert. 
						 Thus, by the multiplication principle, the total number of ways is given by
						 $${10 \choose 5} {5 \choose 3} {2 \choose 2}=\frac{10!}{5! 5!} \cdot \frac{5!}{3! 2!}  \cdot \frac{2!}{2! 0!}=\frac{10!}{5! 3! 2!}$$
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<p>This argument can be generalized for the case when we have $n$ people and would like to divide them 
			to $r$ groups. The number of ways in this case is given by the <b>multinomial</b> coefficients. 
			In particular, if $n=n_1+n_2+...+n_r$, where all $n_i\geq 0$ are integers, then the number of ways 
			to divide $n$ distinct objects to $r$ distinct groups of sizes $n_1, n_2,..., n_r$ is given by
			$${n \choose n_1,n_2,...,n_r}=\frac{n!}{n_1! n_2! ... n_r!}$$
			We can also state the general format of the binomial theorem, which is called the multinomial theorem:
			$$(x_1 + x_2  + \cdots + x_r)^n = \sum_{n_1+n_2+\cdots+n_r=n} {n \choose n_1, n_2, \ldots, n_r} x_1^{n_1} x_2^{n_2} ... x_r^{n_r} \hspace{30pt} (2.2)$$
			Finally, the binomial formula for Bernoulli trials can also be extended to the case where each 
			trial has more than two possible outcomes.</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>I roll a die $18$ times. What is the probability that each number appears exactly $3$ times?</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 First of all, each sequence of outcomes in which each number appears $3$ times has probability
						 $$\left(\frac{1}{6}\right)^3 \times \left(\frac{1}{6}\right)^3 \times \left(\frac{1}{6}\right)^3 \times \left(\frac{1}{6}\right)^3 \times \left(\frac{1}{6}\right)^3 \times \left(\frac{1}{6}\right)^3$$
						 $$=\left(\frac{1}{6}\right)^{18}$$
						 How many distinct sequences are there with three $1$'s, three $2$'s, ..., and three $6$'s? 
						 Each sequence has $18$ positions which we need to fill with the digits. To obtain a sequence, 
						 we need to choose three positions for $1$'s, three positions for $2$'s, ..., and three positions 
						 for $6$'s. The number of ways to do this id given by the multinomial coefficient
						 $${18 \choose 3,3,3,3,3,3}=\frac{18!}{3! 3! 3! 3! 3! 3!}$$
						 Thus the total probability is
						 $$\frac{18!}{(3!)^6} \left(\frac{1}{6}\right)^{18}$$
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>

			<p>We now state the general form of the multinomial formula. Suppose that an experiment has $r$ possible 
			outcomes, so the sample space is given by
			$$S=\{s_1,s_2, ... ,s_r\}$$
			Also suppose that $P(s_i)=p_i$ for $i=1,2,...,r$. Then for $n=n_1+n_2+...+n_r$ independent trials of 
			this experiment, the probability that each $s_i$ appears $n_i$ times is given by
			$${n \choose n_1,n_2,...,n_r}=\frac{n!}{n_1! n_2! ... n_r!} p_1^{n_1} p_2^{n_2} ... p_r^{n_r}$$</p>
			
			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter2/2_1_2_ordered_without_replacement.php">previous</a></div>
    			<div class="right"><a href="chapter2/2_1_4_unordered_with_replacement.php">next</a><a> &rarr;</a></div>
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
