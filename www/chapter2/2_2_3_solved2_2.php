<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<?php include '../Control/autonumber.php'; loadHeaders(29); ?>
	<meta name='section'	content='2.2.3' />

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

	<title>Intro to Probability</title>

</head><body>
	<div id="container">
		<script type="text/javascript" src="http://probabilitycourse.com/javascript/top_page_html_code.js"></script>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock">
				<div class="left"><a>&larr; </a><a href="chapter2/2_2_2_recursion_with_conditioning.php">previous</a></div>
    			<div class="right"><a href="chapter2/2_3_0_chapter2_problems.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>2.2.3 Using Recursion: Solved Problems</h2></div>
    		<div class="right">
			<a href="http://probabilitycourse.com/chapter2/solved2_2_print.html"><img src="http://probabilitycourse.com/images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></a></div>
    		<div class="clear"></div>
			
			<span class='problem'>Problem </span><br>
			<p>Solve the following recurrence equations, that is find a closed form formula for $a_n$.
			<ol type="a">
                <li>$a_n=a_{n-1}+n$, with  $a_0=0$.</li>
                <li>$a_n=na_{n-1}$,  with $a_0=1$.</li>
                <li>$a_{n}=5a_{n-1}-6a_{n-2}$,  with $a_0=3, a_1=8$.</li>
                <li>$a_n=3a_{n-1}-4a_{n-3}$, with $a_0=3, a_1=5$, $a_2=17$.</li>
                <li>$a_n=2a_{n-1}-2a_{n-2}$, with $a_0=a_1=2$</li>
            </ol></p> 
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <ol type="a">
                              <li>Note that this equation is NOT of the form of 
							  <a style="color: #337810; background: none; padding: 0px; border: none; margin: 0px;" href="http://probabilitycourse.com/chapter2/linear_homogeneous.html#equation29">Equation 2.9</a>, 
							  so we cannot use our general methodology to solve this problem. In these situations, it 
							  is always a good idea to compute the first few terms in the sequence and try to guess a general 
							  formula, and then prove it (possibly using mathematical induction). For this problem we 
							  quickly observe that
							  $$a_n=1+2+3+\cdots+n$$
							  This is the sum of the numbers from $1$ to $n$, and it is given by $a_n=\frac{n(n+1)}{2}$. 
							  To obtain this formula, you can write
							  <table align="center">			
                              <tr>
                                <td>$a_n+a_n$</td>
                                <td>$=\bigg(1+2+3+\cdots+n \bigg)$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$+\bigg(n+(n-1)+\cdots+2+1\bigg)$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=(1+n)+(2+(n-1))+\cdots+(n+1)$</td>
                              </tr>
							  <tr>
                                <td></td>
                                <td>$=(n+1)n$</td>
                              </tr>							  
                              </table><br>
							  </li>
							  <li>This is again is not in the form of 
							  <a style="color: #337810; background: none; padding: 0px; border: none; margin: 0px;" 
							  href="http://probabilitycourse.com/chapter2/linear_homogeneous.html#equation29">Equation 2.9</a>. 
							  By writing the first few $a_i$'s we observe that
							  $$a_n=1\cdot2\cdot3\cdots n$$
							  Thus, we conclude that
							  $$a_n=n!$$
							  </li>
							  <li>This recurrence equation is in the form of 
							  <a style="color: #337810; background: none; padding: 0px; border: none; margin: 0px;" 
							  href="http://probabilitycourse.com/chapter2/linear_homogeneous.html#equation29">Equation 2.9</a>, 
							  so we can use our general method. In particular, the characteristic polynomial is
							  $$x^2-5x+6$$
							  This polynomial has two roots, $x_1=2$ and $x_2=3$, so the solution will be in the form
							  $$a_n=\alpha 2^n+\beta 3^n$$
							  Using $a_0=3$ and $a_1=8$, we obtain
							  $$a_n=2^n+2 \cdot 3^n$$
							  </li>
							  <li>This recurrence equation is in the form of 
							  <a style="color: #337810; background: none; padding: 0px; border: none; margin: 0px;" 
							  href="http://probabilitycourse.com/chapter2/linear_homogeneous.html#equation29">Equation 2.9</a>, 
							  so we can use our general method. In particular, the characteristic polynomial is
							  $$x^3-3x^2+4=(x-2)^2(x+1)$$
							  Thus, the solution will be in the form
							  $$a_n=\alpha_1 2^n+\alpha_2 n 2^n+\alpha_3 (-1)^n$$
							  using $a_0=3, a_1=5$, $a_2=17$, we obtain
							  $$a_n=(2+n)2^n+(-1)^n$$
							  </li>
							  <li>This recurrence equation is in the form of 
							  <a style="color: #337810; background: none; padding: 0px; border: none; margin: 0px;" 
							  href="http://probabilitycourse.com/chapter2/linear_homogeneous.html#equation29">Equation 2.9</a>, 
							  so we can use our general method. In particular, the characteristic polynomial is
							  $$x^2-2x+2$$
							  which has two complex roots, $x_1=1+i$, $x_2=1-i$ (where $i=\sqrt{-1}$). 
							  Thus, the solution will be in the form
							  $$a_n=\alpha (1+i)^n+\beta (1-i)^n$$
							  using $a_0=a_1=2$, we obtain
							  $$a_n=(1+i)^n+(1-i)^n$$
							  </li>
                          </ol> 
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>

			<span class='problem'>Problem </span><br>
			<p>Let $a_n$ be the total number of sequences of length $n$ (using $H$ and $T$) that do not 
			include three consecutive $H$'s. For example, we know that $a_1=2, a_2=4$ and $a_3=7$. 
			Find a recurrence equation for $a_n$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 We can solve this problem with a similar approach to the method we used in 
						 <a style="color: #337810; background: none; padding: 0px; border: none; margin: 0px;" 
						 href="http://probabilitycourse.com/chapter2/using_recursion.html#example40">Example 40</a>. 
						 In particular, we will show that
						 $$a_n=a_{n-1}+a_{n-2}+a_{n-3}$$
						 Let's call these sequences NO-HHH sequences. Consider a NO-HHH sequence of length $n$. 
						 This sequence either starts with an $T$ or an $H$.
						 <ol type="1">
                              <li>If it starts with a $T$, then the rest of the sequence is simply a NO-HHH 
							  sequence of length $n-1$. Conversely, by adding a $T$ in front of any NO-HHH 
							  sequence of length $n-1$, we can obtain a NO-HHH sequence of length $n$.</li>
                              <li>If it starts with an $H$, then the second element in the sequence is either 
							  an $H$ or a $T$:
							  <ol type="1">
                                  <li>If the second element is a $T$, then the rest of the sequence is simply a 
								  NO-HHH sequence of length $n-2$. Conversely, by adding $HT$ in front of any 
								  NO-HHH sequence of length $n-2$, we can obtain a NO-HHH sequence of length $n$.</li>
                                  <li>If the second element is also an $H$, then the third element must be a $T$, 
								  and thus the rest of the sequence is a NO-HHH sequence of length $n-3$. Conversely, 
								  by adding $HHT$ in front of any NO-HHH sequence of length $n-3$, we will obtain 
								  a NO-HHH sequence of length $n$.</li>
                              </ol> 
							  </li>
                          </ol>
						  Thus, we conclude that $a_n=a_{n-1}+a_{n-2}+a_{n-3}$.
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>

			<span class='problem'>Problem </span><br>
			<p>Let $k$ be a fixed given integer larger than $1$. Let $f(n,k)$ be the total number of sequences 
			of length $n$ (using $H$ and $T$) that do not include $k$ consecutive $H$'s. Find a recurrence 
			equation for $f(n,k)$.</p>

			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 Similar to 
						 <a style="color: #337810; background: none; padding: 0px; border: none; margin: 0px;" 
						 href="http://probabilitycourse.com/chapter2/using_recursion.html#example40">Example 40</a> 
						 and Problem 2, we can argue that
						 $$f(n,k)=f(n-1,k)+f(n-2,k)+...+f(n-k,k) \textrm{ for } n > k$$
						 And $f(n,k)=2^n$ for $n=1,2,3,...,k-1$, and $f(k,k)=2^k-1$. Using the above recursion we can 
						 define $f(0,k)=1$ so that the above recursion also holds for $n=k$.
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span><br>
			<p>Let $f(n,k,l)$ be the number of binary sequences of length $n$ with exactly $k$ ones and at least $l$ 
			consecutive zeros. Find a recursive equation along with initial values to compute $f(n,k,l)$. Assume 
			that $n \geq k+l$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 Let also $g(n,k,l)$ be the number of binary sequences of length $n$ with exactly $k$ ones 
						 and NO sequences of $l$ consecutive zeros. We have
						 $$f(n,k,l)={n \choose k}-g(n,k,l)$$
						 We provide a recursive formula for $f(n,k,l)$. First note that
						 $$f(n,k,l)=n-l+1 \textrm{ for } k+l=n$$
						 $$f(n,0,l)=1 \textrm{ for } l \geq 1$$
						 Now we prove for $n\geq 1,l \geq 1,k \geq 0$, and $k+l \leq n$ we have
						 $$f(n,k,l)=f(n-1,k-1,l)+f(n-1,k,l)+g(n-l-1,k-1,l)$$
						 Thus we have the following recursion for $f(n,k,l)$
						 $$f(n,k,l)=f(n-1,k-1,l)+f(n-1,k,l)+{n-l-1 \choose k-1}-f(n-l-1,k-1,l)$$
						 The above equation can be used to compute $f(n,k,l)$ for moderate values of $n, k$, and $l$.<br>
						 <i>Proof:</i><br>
						 Consider a sequence of length $n$ with exactly $k$ ones and at least $l$ consecutive zeros. 
						 We consider two cases:
						 <ol type="a">
                              <li>The first $n-1$ bits (positions) include at least $l$ consecutive zeros. In this case 
							  the last bit is either $0$ or a $1$ which results in $f(n-1,k-1,l)+f(n-1,k,l)$ distinct 
							  sequences.</li>
                              <li>The first $n-1$ bits do NOT include $l$ consecutive zeros. In this case the 
							  last $l$ bits must be zeros and the $(n-l)$'th bit must be a one. Thus the first 
							  $n-l-1$ bits must have exactly $k-1$ ones and no consecutive $l$ zeros. This results 
							  in $g(n-l-1,k-1,l)$ distinct sequences.</li>
                          </ol> 
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span><br>
			<p>I toss a biased coin $n$ times and record the sequence of heads and tails. If $P(H)=p$ (where $0 < p < 1$), 
			what is the probability that I do not observe two consecutive heads in the sequence?</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 Let $A_n$ be the event that we observe no consecutive heads in $n$ coin tosses, i.e., 
						 $p_n=P(A_n)$. The idea is to condition on the result of the first coin toss. There are 
						 two possibilities. Using the law of total probability and by conditioning on the result 
						 of the first coin toss, we can write<br><br>
						 <table align="center">			
                          <tr>
                            <td>$\hspace{50pt}p_n$</td>
                            <td>$=P(A_n)=P(A_n|H)P(H)+P(A_n|T)P(T)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=p \cdot P(A_n|H)+(1-p) \cdot P(A_n|T) \hspace{90pt}(2.15)$</td>
                          </tr>
                          </table><br>
						  Now, to find $P(A_n|T)$ note that if the first coin toss is a $T$, then in order to not 
						  observe an $HH$ in the entire sequence, we must not observe an $HH$ in the remaining 
						  $n-1$ coin tosses. Thus, we have
						  $$P(A_n|T)=P(A_{n-1})=p_{n-1}$$ 
						  Similarly, if the first coin toss results in an $H$, the second one must be a $T$ and we 
						  must not observe an $HH$ in the remaining $n-2$ coin tosses, thus we have
						  $$P(A_n|H)=(1-p) \cdot P(A_{n-2})=(1-p) p_{n-2}$$
						  Plugging back into Equation 2.15 we obtain
						  $$p_n=(1-p) p_{n-1}+p(1-p)p_{n-2}$$
						  Note that we also know that $p_1=1$ and $p_2=1-p^2$. Using the recursion, we also obtain 
						  $p_0=1$. Thus we can solve this recursion. We obtain the following characteristic equation
						  $$x^2-(1-p)x-p(1-p)=0$$
						  The characteristic equation has roots $x_1=\frac{1-p+\sqrt{(1-p)(1+3p)}}{2}$  and 
						  $x_2=\frac{1-p-\sqrt{(1-p)(1+3p)}}{2}$, so the general solution is given by
						  $$p_n=\alpha \bigg(\frac{1-p+\sqrt{(1-p)(1+3p)}}{2} \bigg)^n+ \beta \bigg(\frac{1-p-\sqrt{(1-p)
						  (1+3p)}}{2}\bigg)^n$$
						  Using $p_0=1$ and $p_1=1$, we obtain
						  $$\alpha=\frac{1+p+\sqrt{(1-p)(1+3p)}}{2\sqrt{(1-p)(1+3p)}}$$
						  $$\beta=1-\alpha=\frac{\sqrt{(1-p)(1+3p)}-1-p}{2\sqrt{(1-p)(1+3p)}}$$
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<span class='problem'>Problem </span><br>
			<p>Solve the following recurrence equation, that is find a closed form formula for $a_n$.
			$$a_n=\alpha a_{n-1}+ \beta, \textrm{ with } a_0=1$$
			where $\alpha \neq 0$ and $\beta$ are known constants.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 This equation is NOT exactly of the form of 
						 <a style="color: #337810; background: none; padding: 0px; border: none; margin: 0px;" 
						 href="http://probabilitycourse.com/chapter2/linear_homogeneous.html#equation29">Equation 2.9</a> 
						 (because of the constant $\beta$), so we cannot directly use our general methodology to 
						 solve this problem. However, by computing $a_n$ for a few values of $n$ we can identify 
						 the solution:
						 <table align="center">			
                          <tr>
                            <td>$a_1$</td>
                            <td>$=\alpha+\beta$</td>
                          </tr>
                          <tr>
                            <td>$a_2$</td>
                            <td>$=\alpha^2+\beta(1+\alpha)$</td>
                          </tr>
						  <tr>
                            <td>$a_3$</td>
                            <td>$=\alpha^3+\beta(1+\alpha+\alpha^2)$</td>
                          </tr>
                          <tr>
                            <td>$a_3$</td>
                            <td>$=\alpha^4+\beta(1+\alpha+\alpha^2+\alpha^3)$</td>
                          </tr>
                          </table><br>
						  In general, we obtain
						  <table align="center">			
                          <tr>
                            <td>$a_n$</td>
                            <td>$=\alpha^n+\beta(1+\alpha+\alpha^2+\cdot+\alpha^{n-1})$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$= \alpha^n+\beta \left(\frac{1-\alpha^{n}}{1-\alpha}\right)$</td>
                          </tr>
                          </table><br>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>

			<span class='problem'>Problem </span><br>
			<p>This problem has applications in coding theory: I toss a biased coin $n$ times and record 
			the sequence of heads and tails. If $P(H)=p$ (where $0 < p < 1$), what is the probability that 
			I observe an even number of $H$s?</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 Let $A_n$ be the event that I observe an even number of heads for $n=1,2,...$. Let $a_n=P(A_n)$. 
						 Conditioning on the last coin toss, we can write for $n \geq 2$:<br><br>
						 <table align="center">			
                          <tr>
                            <td>$a_n$</td>
                            <td>$=P(A_n|H)P(H)+P(A_n|T)P(T)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=p \cdot P(A_n|H)+(1-p) \cdot P(A_n|T)$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=p \cdot P(A_{n-1}^c)+(1-p)\cdot P(A_{n-1})$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=p(1-a_{n-1})+(1-p)a_{n-1}$</td>
                          </tr>
                          </table><br>
						  Thus, we obtain the following recursive equation:
						  $$a_n=(1-2p)a_{n-1}+p, \textrm{ with } a_1=1-p$$
						  From the recursion, we obtain $a_0=1$, so we have the following equation
						  $$a_n=(1-2p)a_{n-1}+p, \textrm{ with } a_0=1$$
						  This recursion is in the form given in problem 6 ($\alpha=1-2p$, $\beta=p$), 
						  so we obtain<br><br>
						  <table align="center">			
                          <tr>
                            <td>$a_n$</td>
                            <td>$= (1-2p)^n+p \left(\frac{1-(1-2p)^{n}}{2p}\right)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=\frac{1+(1-2p)^n}{2}$</td>
                          </tr>
                          </table><br>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>

			<hr />
			<div class="thinblock">
				<div class="left"><a>&larr; </a><a href="chapter2/2_2_2_recursion_with_conditioning.php">previous</a></div>
    			<div class="right"><a href="chapter2/2_3_0_chapter2_problems.php">next</a><a> &rarr;</a></div>
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
