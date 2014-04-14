<?php
	$section_no			= "6.2.5";
	$section_title	= "Cauchy-Schwarz Inequality";
	$section_next		= "chapter6/6_2_6_solved6_2.php";
	$section_prev		= "chapter6/6_2_3_chernoff_bounds.php";
	include						"../Control/autonumber.php";
	loadHeaders(87);
	include						"section_header.php";
?>
		
			<p>
           You might have seen <b>Cauchy-Schwarz inequality</b> in your linear algebra course. The same inequality is valid for random variables. Let us state and prove Cauchy-Schwarz inequality for random variables.
            </p>
			
			<div style="padding: 15px; border: black 1px solid">
			<p align="center">Cauchy-Schwarz Inequality</p>

<p style="padding-top:5px;">For any two random variables $X$ and $Y$, we have
\begin{align}%\label{}
  |EXY| \leq \sqrt{E[X^2] E[Y^2]},
\end{align}
where equality holds if and only if $X=\alpha Y$, for some constant $\alpha \in \mathbb{R}$.</p>
			</div><br>
            <p>You can prove Cauchy-Schwarz inequality with the same methods that we used to prove $|\rho(X,Y)| \leq 1$ in <a href="http://probabilitycourse.com/chapter5/5_3_1_covariance_correlation.php">Section 5.3.1.</a> Here we provide another proof. Define the random variable $W=(X-\alpha Y)^2$. Clearly, $W$ is a nonnegative random variable for any value of $\alpha \in \mathbb{R}$. Thus, we obtain
            <table align="center" width="60%">			
                          <tr>
                            <td>$ 0 \leq EW$</td>
                            <td>$=E(X-\alpha Y)^2$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=E[X^2-2\alpha XY+ \alpha^2 Y^2]$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=E[X^2]-2\alpha E[XY]+ \alpha^2 E[Y^2],$</td>
                          </tr>
						  </table><br>
so, if we let $f(\alpha)=E[X^2]-2\alpha E[XY]+ \alpha^2 E[Y^2]$. Then, we know that $f(\alpha) \geq 0$ for all $\alpha \in \mathbb{R}$. Moreover, if $f(\alpha)=0$ for some $\alpha$, then we have $EW=E(X-\alpha Y)^2=0$, which essentially means $X= \alpha Y$ with probability one. To prove Cauchy-Schwarz inequality, choose $\alpha=\frac{EXY}{EY^2}$. We obtain
<table align="center">			
                          <tr>
                            <td>$0$</td>
                            <td>$\leq E[X^2]-2\alpha E[XY]+ \alpha^2 E[Y^2]$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=E[X^2]-2\frac{EXY}{EY^2} E[XY]+ \frac{(EXY)^2}{(EY^2)^2} E[Y^2]$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=E[X^2]-\frac{(E[XY])^2}{EY^2}.$</td>
                          </tr>
						  </table><br>
Thus, we conclude
\begin{align}%\label{}
  (E[XY])^2 \leq E[X^2] E[Y^2],
\end{align}
which implies
\begin{align}%\label{}
  |EXY| \leq \sqrt{E[X^2] E[Y^2]}.
\end{align}
Also, if $|EXY| = \sqrt{E[X^2] E[Y^2]}$, we conclude that $f(\frac{EXY}{EY^2})=0$, which implies $X= \frac{EXY}{EY^2} Y$ with probability one.</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>Using Cauchy-Schwarz inequality, show that for any two random variables $X$ and $Y$
\begin{align}%\label{}
  |\rho(X,Y)| \leq 1.
\end{align}
Also, $|\rho(X,Y)| = 1$ if and only if $Y=aX+b$ for some constants $a,b \in \mathbb{R}$.</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 Let
\begin{align}%\label{}
  U=\frac{X-EX}{\sigma_X}, &\qquad V=\frac{Y-EY}{\sigma_Y}.
\end{align}
Then $EU=EV=0$, and $Var(U)=Var(V)=1$. Using Cauchy-Schwarz inequality for $U$ and $V$, we obtain
\begin{align}%\label{}
  |EUV| \leq \sqrt{E[U^2] E[V^2]}=1.
\end{align}
But note that $EUV=\rho(X,Y)$, thus we conclude
\begin{align}%\label{}
  |\rho(X,Y)| \leq 1,
\end{align}
where equality holds if and only if $V=\alpha U$ for some constant $\alpha \in \mathbb{R}$. That is
\begin{align}%\label{}
  \frac{Y-EY}{\sigma_Y}=\alpha \frac{X-EX}{\sigma_X},
\end{align}
which implies
\begin{align}%\label{}
  Y=\frac{\alpha \sigma_Y}{\sigma_X} X+ (EY-\frac{\alpha \sigma_Y}{\sigma_X} EX).
\end{align}
In the Solved Problems section, we provide a generalization of Cauchy-Schwrarz inequality, called <em>H&ouml;lder's inequality</em>.
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
						
			<p><b><font size="3">Comparison between Markov, Chebyshev, and Chernoff Bounds:</font></b></p>
			<p>Above, we found upper bounds on $P(X \geq \alpha n)$ for $X \sim Binomial(n,p)$. It is interesting to compare them. Here, are the results that we obtain for $p=\frac{1}{4}$ and $\alpha=\frac{3}{4}$:
\begin{align}%\label{}
  &P(X \geq \frac{3n}{4})\leq \frac{2}{3}  \hspace{58pt} \textrm{Markov} \\
  &P(X \geq \frac{3n}{4})\leq \frac{4}{n}  \hspace{57pt} \textrm{Chebshev} \\
  &P(X \geq \frac{3n}{4})\leq \big(\frac{16}{27}\big)^{\frac{n}{4}}  \hspace{35pt} \textrm{Chernoff}.
\end{align}
The bound given by Markov is the "weakest" one. It is constant and does not change as $n$ increases. The bound given by Chebyshev's inequality is "stronger" than the one given by Markov's inequality. In particular, note that $\frac{4}{n}$ goes to zero as $n$ goes to infinity. The strongest bound is the Chenoff bound. It goes to zero exponentially fast.
</p>
			
			<hr />
<?php include 'section_footer.php'; ?>
