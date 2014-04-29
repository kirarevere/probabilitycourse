<?php
	$section_no			= "6.2.6";
	$section_title	= "Solved Problems";
	$section_next		= "chapter6/6_3_0_chapter_problems.php";
	$section_prev		= "chapter6/6_2_5_jensen's_inequality.php";
	include						"../Control/autonumber.php";
	loadHeaders(81);
	include						"section_header.php";
?>    		
			<!-- Problem 1 Begin -->
			<span class='problem'>Problem </span><br>
			<p> Your friend tells you that he had four job interviews last week. He says that based on how the interviews went, he thinks he has a $20\%$ chance of receiving an offer from each of the companies he interviewed with. Nevertheless, since he interviewed with four companies, he is $90\%$ sure that he will receive at least one offer. Is he right?
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>                         
                         
						 <p> Let $A_i$ be the event that your friend receives a offer from the $i$th company, i=1,2,3,4. Then, by the union bound:
						 <table align="center">			
                          <tr>
                            <td>$P\left(\bigcup_{i=1}^4 A_i\right)$</td>
                            <td>$\leq \sum P(A_i)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=0.2+0.2+0.2+0.2$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=0.8$</td>
                          </tr>
                          </table><br>
                          Thus the probability of receiving at least one offer is less than or equal to $80\%$.
					</p>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			<!-- Problem 1 End -->
            <!-- Problem 2 Begin -->
			<span class='problem'>Problem </span> 
			<p> An isolated edge in a network is an edge that connects two nodes in the network such that non of the two nodes is connected to any other nodes in the network. Let $C_n$ be the event that a graph randomly generated according to $G(n,p)$ model has at least one isolated edge.
      <ol type="a" >
      <li>Show that
        \begin{align}%\label{}
         P(C_n) \leq {n \choose 2} p(1-p)^{2(n-2)}
        \end{align}</li>
      <li> Show that, for any constant $b >\frac{1}{2}$, if $p=p_n=b \frac{\ln (n)}{n}$ then
        \begin{align}%\label{}
           \lim_{n\rightarrow \infty} P(C_n)=0.
       \end{align}</li>
       </ol>
      </p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
                         <p>There are ${n \choose 2}$ possible edges in the graph. Let $E_i$ be the event that the $i$th edge is an isolated edge, then
\begin{equation}
 P(E_i)=p(1-p)^{2(n-2)},
\end{equation}
where $p$ in the above equation is the probability that the $i$th edge is present and $(1-p)^{2(n-2)}$ is the probability that no other nodes is connected to this edge. By the union bound, we have
 						<table align="center">			
                          <tr>
                            <td>$P(C_n)$</td>
                            <td>$= P\left(\bigcup{E_i}\right)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$\leq \sum_i P(E_i)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$= {n \choose 2} p(1-p)^{2(n-2)},$</td>
                          </tr>
                          </table><br>

        which is the desired result. Now, let $P=b\frac{\ln n}{n}$, where $b>\frac{1}{2}$.</p>
        <p>
Here, it is convenient to use the following inequality:
\begin{equation}
1-x \leq e^{-x}, \quad \text{for all} \quad x \in \mathbb{R}.
\end{equation}

You can prove it by differentiating $f(x)=e^{-x}+x-1$, and showing that the minimum occurs at $x=0$.</p>
<p>
Now, we can write
<table align="center">			
                          <tr>
                            <td>$P(C_n)$</td>
                            <td>$= {n \choose 2}p(1-p)^{2(n-2)}$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$= \frac{n(n-1)}{2} \frac{b\ln n}{n} (1-p)^{2(n-2)}$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$\leq\frac{(n-1)b}{2}e^{-2p(n-2)} \quad (\text{using} \quad 1-x \leq e^{-x})$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$= \frac{(n-1)}{2} b e^{-2 \frac{b \ln n}{n}(n-2)}.$</td>
                          </tr>
                          </table><br>

Thus,
<table align="center">			
                          <tr>
                            <td>$\lim _{n\rightarrow \infty}P(C_n)$</td>
                            <td>$\leq  \lim _{n\rightarrow \infty}\frac{(n-1)}{2} b e^{-2 \frac{b \ln n}{n}(n-2)}$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=  \lim _{n\rightarrow \infty}\frac{(n-1)}{2} b n^{-2b}$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=\frac{b}{2}\lim _{n\rightarrow \infty}(n^{1-2b})$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$= 0 \quad (\text{since} \quad b > \frac{1}{2}).$</td>
                          </tr>
                          </table><br>
                     
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			<!-- Problem 2 End -->
            <!-- Problem 3 Begin -->
			<span class='problem'>Problem </span><br>
			<p>Let $X \sim Exponential(\lambda)$. Using Markov's inequality find an upper bound for $P(X \geq a)$. Compare the upper bound with the real value of $P(X \geq a)$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>If $X \sim Exponential (\lambda)$, then $EX=\frac{1}{\lambda}$, using Markov's inequality
\begin{equation}
\no P\left(X \geq a\right) \leq \frac{EX}{a}=\frac{1}{\lambda a}.
\end{equation}

The actual value of $P(X \geq a)$ is  $e^{- \lambda a}$, and we always have $ \frac{1}{\lambda a} \geq e^{- \lambda a}$.</p>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<!-- Problem 3 End -->
            <!-- Problem 4 Begin -->
			<span class='problem'>Problem </span><br>
			<p>Let $X \sim Exponential(\lambda)$. Using Chebyshev's inequality find an upper bound for $P(|X-EX| \geq b)$.</p> 
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p><ol type="a">
						 	 <li>We have $EX=\frac{1}{\lambda}$ and $Var X=\frac{1}{\lambda^2}$. Using Chebyshev's inequality, we have

							 <table align="center">			
                              <tr>
                                <td>$P\left(|X-EX| \geq b\right)$</td>
                                <td>$\leq \frac{Var(X)}{b^2}$</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>$= \frac{1}{\lambda ^2 b^2}$</td>
                              </tr>
                              </table><br>
						
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			<!-- Problem 4 End -->
            <!-- Problem 5 Begin -->
			<span class='problem'>Problem </span><br>
			<p>Let $X \sim Exponential(\lambda)$. Using Chernoff bounds find an upper bound for $P(X \geq a)$, where $a>EX$. Compare the upper bound with the real value of $P(X \geq a)$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>If $X \sim Exponential(\lambda)$, then
\begin{equation}
 M_X(s)=\frac{\lambda}{\lambda-s}, \quad \text{for} \quad  s&lt;\lambda.
\end{equation}
Using Chernoff bounds, we have
\begin{align}
 P\left(X \geq a\right) &\leq \min_{s>0} \left[e^{-sa}M_X(s)\right]\\
 &= \min_{s>0} \left[e^{-sa} \frac{\lambda}{\lambda-s}\right].
\end{align}

If $f(s)=e^{-sa} \frac{\lambda}{\lambda-s}$, to find $\min_{s>0} f(s)$ we write
\begin{equation}
 \frac{d}{ds} f(s)=0
\end{equation}
Therefore,
\begin{equation}
  s^{*}=\lambda-\frac{1}{a}.
\end{equation}
Note since $a>EX=\frac{1}{\lambda}$, then $\lambda -\frac{1}{a}>0$. Thus,
\begin{equation}
\no P\left(X \geq a\right) \leq e^{-s^{*}a} \frac{\lambda}{\lambda-s^{*}}= a \lambda e^{1-\lambda a}.
\end{equation}
   The real value of $P\left(X \geq a\right)$ is $e^{-\lambda a}$ and we have $e^{-\lambda a} \leq a\lambda e^{1-\lambda a}$, or equivalently, $a \lambda e \geq 1$, which is true since $a> \frac{1}{\lambda}$.

						 <table align="center">			
                          <tr>
                            <td>$E|Z|$</td>
                            <td>$=\frac{1}{\sqrt{2\pi}}\int_{-\infty}^{\infty} |t| e^{-\frac{t^2}{2}}dt$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=\frac{2}{\sqrt{2\pi}}\int_{0}^{\infty} |t| e^{-\frac{t^2}{2}}dt \hspace{20pt}(\textrm{integral of an even function})$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\sqrt{\frac{2}{\pi}}\int_{0}^{\infty} t e^{-\frac{t^2}{2}}dt$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$=\sqrt{\frac{2}{\pi}}\bigg[-e^{-\frac{t^2}{2}} \bigg]_{0}^{\infty}=\sqrt{\frac{2}{\pi}}$</td>
                          </tr>
                          </table><br>
						  Thus, we conclude $E|X|=\sigma E|Z|=\sigma\sqrt{\frac{2}{\pi}}$.</p>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			<!-- Problem 5 End -->
            <!-- Problem 6 Begin -->
			<span class='problem'>Problem </span><br>
			<p>Let $X$ and $Y$ be two random variables with $EX=1, Var(X)=4$, and $EY=2, Var(Y)=1$. Find the maximum possible value for $E[XY]$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>Using $\rho(X,Y) \leq 1$ and $\rho(X,Y)=\frac{Cov(X,Y)}{\sigma_X\sigma_Y}$, we conclude
\begin{equation}
   \frac{EXY-EXEY}{\sigma_X\sigma_Y} \leq 1.
\end{equation}
 Thus
 						<table align="center">			
                          <tr>
                            <td>$EXY$</td>
                            <td>$\leq \sigma_X \sigma_Y +EXEY $</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=2 \times 1 + 2 \times 1$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=4.$</td>
                          </tr>
                          </table><br>

In fact, we can achieve $EXY=4$, if we choose $Y=aX+b$.
\begin{equation}
 Y=aX+b  \quad \Rightarrow \quad \left \{\begin{array}{rcl} 2=a+b\\ \quad \\1=(a^2)(4) \end{array}\right.
\end{equation}

Solving for $a$ and $b$, we obtain

 \begin{align}
  a=\frac{1}{2}, \quad  b=\frac{3}{2}.
  \end{align}
<p>Note that if you use Cauchy-Schwarz inequality directly, you obtain:</p>
						<table align="center">			
                          <tr>
                            <td>$|EXY|^2$</td>
                            <td>$\leq EX^2 \cdot EY^2$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$= 5\times 5$</td>
                          </tr>
                        </table><br>
Thus
\begin{equation}
 EXY \leq 5.
\end{equation}
But $EXY=5$ cannot be achieved because equality in Cauchy-Schwarz is obtained only when $Y=\alpha X$. But here this is not possible.
						 
               </p>  
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			<!-- Problem 6 End -->
            <!-- Problem 7 Begin -->
			<span class='problem'>Problem </span><br>
			<p><b>(H&ouml;lder's Ineqality)</b> Prove
  \begin{align}%\label{}
    E\left[|XY|\right] \leq E\big[|X|^p\big]^{\frac{1}{p}} E\big[|Y|^q\big]^{\frac{1}{q}},
  \end{align}
  where $1&lt;p,q&lt;\infty$ and $\frac{1}{p}+\frac{1}{q}=1$. Note that, for $p=q=\frac{1}{2}$, H&ouml;lder's ineqality becomes Cauchy-Schwarz inequality.
  <em>Hint:</em> You can use Young's inequality [<a href="bibliography.html#wiki-Young">4</a>] which states that for nonnegative real numbers $\alpha$ and $\beta$ and integers $p$ and $q$ such that $1&lt;p,q&lt;\infty$ and $\frac{1}{p}+\frac{1}{q}=1$, we have
  \begin{align}%\label{}
    \alpha \beta \leq \frac{\alpha^p}{p}+\frac{\beta^q}{q},
  \end{align}
  with quality only if $\alpha^p=\beta^q$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <p>Using Young's inequality, we conclude that for random variables $U$ and  $V$ we have

  \begin{equation}
   E|UV| \leq \frac{E|U|^p}{p} + \frac{E|V|^q}{q}.
  \end{equation}
  Choose $U=\frac{|X|}{\left(E|X|^p\right)^\frac{1}{p}}$ and $V=\frac{|Y|}{\left(E|Y|^q\right)^\frac{1}{q}}$. We obtain

						 <table align="center">			
                          <tr>
                            <td>$\frac{E|XY|}{\left(E|X|^p\right)^{\frac{1}{p}}\left(E|Y|^q\right)^{\frac{1}{q}}}$</td>
                            <td>$\leq \frac{E|X|^p}{pE|X|^p} + \frac{E|Y|^q}{qE|Y|^q}$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=\frac{1}{p}+\frac{1}{q}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$= 1.$</td>
                          </tr>
                          </table><br>
						  </p>
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr />
			<!-- Problem 7 End -->
            <!-- Problem 8 Begin -->
			<span class='problem'>Problem </span><br />
			<p>
			Show that if $h:\mathbb{R}\mapsto \mathbb{R}$ is convex and non-decreasing, and $g:\mathbb{R}\mapsto \mathbb{R}$ is convex, then $f(g(x))$ is a convex function.
			</p>
			<div class='solvedprob'>
				<ul>
					<li><a><b>Solution</b></a>
					<ul>
						<li>
							<p>
							Since g is convex, we have
\begin{equation}
 g(\alpha x+ (1-\alpha)y) \leq \alpha g(x) + (1-\alpha) g(y), \quad \textrm{for all } \alpha \in [0,1].
\end{equation}
Therefore, we have
						<table align="center">			
                          <tr>
                            <td>$h(g(\alpha x+(1- \alpha) y))$</td>
                            <td>$\leq h(\alpha g(x)+(1-\alpha)g(y)) \quad (\text{h is non-decreasing)}$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$\leq \alpha h(g(x))+(1-\alpha) h(g(y)) \quad (\text{h is convex}).$</td>
                          </tr>
						  </table><br>
							</p>
						</li>
					</ul></li>
				</ul>	
			</div>
			<!-- Problem 8 End -->
            <!-- Problem 9 Begin -->
			<span class='problem'>Problem </span><br />
			<p>
			Let $X$ be a positive random variable with $EX=10$. What can you say about the following quantities?
  <ol type="a">
 	 <li>$E\big[\frac{1}{X+1}\big]$</li><br/>
 	 <li>$E\big[e^{\frac{1}{X+1}}\big]$</li><br/>
 	 <li>$E[\ln \sqrt{X}]$</li>
  </ol>
			</p>
			<div class='solvedprob'>
				<ul>
					<li><a><b>Solution</b></a>
					<ul>
						<li>
							<p>
                            <ol type="a">
                            	<li>
                                <table align="center">			
                          <tr>
                            <td>$g(x)$</td>
                            <td>$=\frac{1}{x+1}$</td>
                          </tr>
                          <tr>
                            <td>$g^{''}(x)$</td>
                            <td>$= \frac{2}{(1+x)^3} > 0,  \quad \textrm{for} \quad x>0.$</td>
                          </tr>
						  </table><br>
Thus $g$ is convex on $(0,\infty)$                         
                          <table align="center">			
                          <tr>
                            <td>$E\left[\frac{1}{X+1}\right]$</td>
                            <td>$\geq \frac{1}{1+EX} \quad (\text{Jensen's inequality})$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=\frac{1}{1+10}$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=\frac{1}{11}.$</td>
                          </tr>
						  </table><br>
</li>

<li>
If we let $h(X)=e^X , g(X)=\frac{1}{1+X}$ then $h$ is convex and non-decreasing and $g$ is convex thus by problem 8, $e^{\frac{1}{X+1}}$ is a convex function, thus
						<table align="center">			
                          <tr>
                            <td>$E\left[e^{\frac{1}{1+X}}\right]$</td>
                            <td>$\geq e^{\frac{1}{1+EX}} \quad (\text{by Jensen's inequality})$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=e^{\frac{1}{11}}.$</td>
                          </tr>
						  </table><br>

</li>

<li>
If $ g(X) = \ln{\sqrt{X}} = \frac{1}{2} \ln{X}$ then $g^{'}(X)=\frac{1}{2X}$ \quad for \quad $X>0$ and $g^{''}(X)=\frac{1}{2X^2}$. Thus $g$ is concave on $(0,\infty)$. We conclude
						<table align="center">			
                          <tr>
                            <td>$E\left[\ln{\sqrt X}\right]]$</td>
                            <td>$= \frac{1}{2} \ln X$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$\geq \frac{1}{2} \ln{EX} \quad \text{(by Jensen's inequality)}$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$= \frac{1}{2} \ln 10.$</td>
                          </tr>
						  </table><br>
</li>
</ol>
							</p>
						</li>
					</ul></li>
				</ul>	
			</div>
			<!-- Problem 9 End -->

<?php include 'section_footer.php'; ?>
