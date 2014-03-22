<?php
	$section_no = "5.1.2";
	$section_title = "Joint Cumulative Distributive Function (CDF)";
	$section_prev = "chapter4/5_1_1_joint_pmf";
	$section_next = " ";
	include "../Control/autonumber.php";
	loadHeaders(58);	
	include "section_header.php";
?>

<!-- Section Content -->
<p>
Remember that, for a random variable $X$, we define the CDF as $F_X(x)=P(X \leq x)$. Now, if we have two random variables $X$ and $Y$ and we would like to study them jointly, we can define the <b>joint cumulative function</b> as follows:
</p>

<div style="border: 2px solid black; margin: 30px 40px; padding: 25px;">
The <b>joint cumulative function</b> of two random variables $X$ and $Y$ is defined as
\begin{align}%\label{}
\nonumber F_{XY}(x,y)=P(X \leq x, Y \leq y).
\end{align}
</div>

As usual, comma means "and," so we can write
\begin{align}%\label{}
\nonumber F_{XY}(x,y)&=P(X \leq x, Y \leq y) \\
\nonumber &= P\big((X \leq x)\textrm{ and }(Y\leq y)\big)=P\big((X \leq x)\cap(Y\leq y)\big).
\end{align}
Figure 5.2 shows the region associated with $F_{XY}(x,y)$ in the two-dimensional plane. Note that the above definition of joint CDF is a general definition and is applicable to discrete, continuous, and mixed random variables. Since, the joint CDF refers to the probability of an event, we must have $0 \leq F_{XY}(x,y) \leq 1$.

<img src="/images/chapter5/cdfXY.png" style="width:330px;height:auto;display:block;margin:10px auto;">
<p>Figure 5.2 $F_{XY}(x,y)$ is the probability that $(X,Y)$ belongs to the shaded region. The dots are the pairs $(x_i,_j)$ in $R_{XY}$.</p>

If we know the joint CDF of $X$ and $Y$, we can find the <i>marginal</i> CDFs, $F_X(x)$ and $F_Y(y)$. Specifically, for any $x \in \mathbb{R}$, we have
\begin{align}%\label{}
\nonumber F_{XY}(x,\infty)&=P(X \leq x, Y \leq \infty) \\
\nonumber &= P(X \leq x)=F_X(x).
\end{align}
Here, by $F_{XY}(x,\infty)$, we mean $\lim \limits_{y \rightarrow \infty} F_{XY}(x,y)$. Similarly, for any $y \in \mathbb{R}$, we have
\begin{align}%\label{}
\nonumber F_Y(y)=F_{XY}(\infty, y).
\end{align}

<div style="padding:25px;margin:30px 40px; border: 2px solid black;">
<p style="text-align:center;">Marginal CDFs of $X$ and $Y$:</p>
\begin{align}\label{Eq:CDF-marginals}
\nonumber F_X(x)=F_{XY}(x, \infty)=\lim_{y \rightarrow \infty} F_{XY}(x,y), \hspace{20pt} \textrm{ for any } x\\
 F_Y(y)=F_{XY}(\infty, y)=\lim_{x \rightarrow \infty} F_{XY}(x,y), \hspace{20pt} \textrm{ for any } y
\end{align}
</div>

Also, note that we must have
\begin{align}%\label{}
\nonumber &F_{XY}(\infty, \infty)=1\\
\nonumber &F_{XY}(-\infty, y)=0,\hspace{20pt} \textrm{ for any } y\\
\nonumber &F_{XY}(x,-\infty)=0,\hspace{20pt} \textrm{ for any } x.
\end{align}

<span class="example">Example </span><br />
Let $X \sim Bernoulli(p)$ and $Y \sim Bernoulli(q)$ be independent, where $0&lt;p,q&lt;1$. Find the joint PMF and joint CDF for $X$ and $Y$.<br />

<div class="solvedprob">
	<ul>
		<li><a><b>Solution</b></a>
			<ul>
				<li>
First note that the joint range of $X$ and $Y$ is given by
\begin{align}%\label{}
 \nonumber R_{XY}=\{(0,0),(0,1),(1,0),(1,1)\}.
\end{align}
Since $X$ and $Y$ are independent, we have
\begin{align}%\label{}
 \nonumber P_{XY}(i,j)=P_X(i)P_Y(j), \hspace{20pt} \textrm{for }i,j=0,1.
\end{align}
Thus, we conclude
\begin{align}%\label{}
 \nonumber &P_{XY}(0,0)=P_X(0)P_Y(0)=(1-p)(1-q),\\
 \nonumber &P_{XY}(0,1)=P_X(0)P_Y(1)=(1-p)q,\\
 \nonumber &P_{XY}(1,0)=P_X(1)P_Y(0)=p(1-q),\\
 \nonumber &P_{XY}(1,1)=P_X(1)P_Y(1)=pq.
\end{align}
Now that we have the joint PMF, we can find the joint CDF
\begin{align}
\nonumber F_{XY}(x,y)=P(X \leq x, Y \leq y).
\end{align}
Specifically, since $0 \leq X,Y \leq 1$, we conclude
\begin{align}
\nonumber &F_{XY}(x,y)=0, \hspace{20pt} \textrm{if } x<0\\
\nonumber &F_{XY}(x,y)=0, \hspace{20pt} \textrm{if } y<0\\
\nonumber &F_{XY}(x,y)=1, \hspace{20pt} \textrm{if } x \geq 1 \textrm{ and } y \geq 1.
\end{align}
Now, for $0 \leq x <1$ and $y \geq 1$, we have
\begin{align}%\label{}
\nonumber F_{XY}(x,y) &=P(X \leq x, Y \leq y)\\
\nonumber &= P(X=0, y \leq 1)\\
\nonumber &=P(X=0)=1-p.
\end{align}
Similarly, for $0 \leq y <1$ and $x \geq 1$, we have
\begin{align}%\label{}
\nonumber F_{XY}(x,y) &=P(X \leq x, Y \leq y)\\
\nonumber &= P(X \leq 1, y=0)\\
\nonumber &=P(Y=0)=1-q.
\end{align}
Finally, for $0 \leq x <1$ and $0 \leq y < 1$, we have
\begin{align}
\nonumber F_{XY}(x,y) &=P(X \leq x, Y \leq y)\\
\nonumber &= P(X=0, y=0)\\
\nonumber &=P(X=0)P(Y=0)=(1-p)(1-q).
\end{align}

Figure 5.3 shows the values of $F_{XY}(x,y)$ in different regions of the two-dimensional plane. Note that, in general, we actually need a three-dimensional graph to show a joint CDF of two random variables, i.e., we need three axes: $x$, $y$, and $z=F_{XY}(x,y)$. However, because the random variables of this example are simple, and can take only two values, a two-dimensional figure suffices.

<img src="images/chapter5/FxyJointCDF.png" style="width:400px;height:auto;margin:10px auto;" />
Figure 5.3 Joint CDF for $X$ and $Y$ in Example 5.2
				</li>
			</ul>
		</li>
	</ul>
</div>
<!-- End Section Content -->

<?php
	include "section_footer.php";	
?>
