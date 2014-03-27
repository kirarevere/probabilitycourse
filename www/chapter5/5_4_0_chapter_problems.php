<?php
	$section_no			= "5.4.0";
	$section_title	= "End of Chapter Problems";
	$section_prev		= "chapter5/5_3_3_solved_probs.php";
	$section_next		= "chapter6/#";
	include						"../Control/autonumber.php";
	loadHeaders(73);
	include						"section_header.php";
?>

<!-- Section content -->
<span class="problem">Problem </span><br />
Consider two random variables $X$ and $Y$ with joint PMF given in Table 5.4<br />
<style>
	#table5_4 {
		font-size:12pt;
		border-collapse: collapse;
		width: 400px;
		margin: 20px auto;
	}

	#table5_4 td {
		width: 80px;
		border: 2px solid black;
	}
</style>
<p class="centered">Joint PMF of $X$ and $Y$ in Problem 1</p>
<table id="table5_4">
	<tr style="height: 50px;">
		<td>&nbsp;</td>
		<td>$Y = 1$</td>
		<td>$Y = 2$</td>
	</tr>
	<tr style="height: 80px;">
		<td>$X = 1$</td>
		<td>$\frac{1}{3}$</td>
		<td>$\frac{1}{12}$</td>
	</tr>
	<tr style="height: 80px;">
		<td>$X = 2$</td>
		<td>$\frac{1}{6}$</td>
		<td>$0$</td>
	</tr>
	<tr style="height: 80px;">
		<td>$X = 3$</td>
		<td>$\frac{1}{12}$</td>
		<td>$\frac{1}{3}$</td>
	</tr>
</table>
<ol>
  <li> Find $P(X \leq 2, Y > 1)$.</li>
  <li> Find the marginal PMFs of $X$ and $Y$.</li>
  <li> Find $P(Y=2 | X=1)$.</li>
  <li> Are $X$ and $Y$ independent?</li>
</ol>
<br />

<hr /><span class="problem">Problem </span><br />
Let $X$ and $Y$ be as defined in Problem 1. I define a new random variable $Z=X-2Y$.
<ol>
  <li> Find PMF of $Z$.</li>
  <li> Find $P(X=2 | Z=0)$.</li>
</ol>
<br />


<hr /><span class="problem">Problem </span><br />
A box contains two coins: a regular coin and a biased coin with $P(H)=\frac{2}{3}$. I choose a coin at random and toss it once.  I define the random variable $X$ as a Bernoulli random variable associated with this coin toss, i.e., $X=1$ if the result of the coin toss is heads and $X=0$ otherwise. Then I take the remaining coin in the box and toss it once. I define the random variable $Y$ as a Bernoulli random variable associated with the second coin toss. Find the joint PMF of $X$ and $Y$. Are $X$ and $Y$ independent?
<br />


<hr /><span class="problem">Problem </span><br />
Consider two random variables $X$ and $Y$ with joint PMF given by
  \begin{align}%\label{}
    P_{XY}(k,l)=\frac{1}{2^{k+l}}, \textrm{for }k,l=1,2,3,...
  \end{align}
<ol>
  <li> Show that $X$ and $Y$ are independent and find the marginal PMFs of $X$ and $Y$.</li>
  <li> Find $P(X^2+Y^2 \leq 10)$.</li>
</ol>
<br />



<hr /><span class="problem">Problem </span><br />
Let $X$ and $Y$ be as defined in Problem 1. Also, suppose that we are given that $Y=1$.
<ol>
  <li> Find the conditional PMF of $X$ given $Y=1$. That is, find $P_{X|Y}(x|1)$.</li>
  <li> Find $E[X|Y=1]$.</li>
  <li> Find $Var(X|Y=1)$.</li>
</ol>
<br />

<hr /><span class="problem">Problem </span><br />
The number of customers visiting a store in one hour has a Poisson distribution with mean $\lambda=10$. Each customer is a female with probability $p=\frac{3}{4}$ independent of other customers. Let $X$ be the total number of customers in a one-hour interval and $Y$ be the total number of female customers in the same interval. Find the joint PMF of $X$ and $Y$.
<br />



<hr /><span class="problem">Problem </span><br />
Let $X \sim Geometric(p)$. Find $Var(X)$ as follows: Find $EX$ and $EX^2$ by conditioning on the result of the first ``coin toss'', and use $Var(X)$$=EX^2-(EX)^2$.
<br />



<hr /><span class="problem">Problem </span><br />
Let $X$ and $Y$ be two independent $Geometric(p)$ random variables. Find $E\left[\frac{X^2+Y^2}{XY}\right]$.
<br />



<hr /><span class="problem">Problem </span><br />
Consider the set of points in the set $C$:
  \begin{align}%\label{}
  \nonumber  C=\{(x,y) | x,y \in \mathbb{Z}, x^2+ |y| \leq 2\}.
  \end{align}
  Suppose that we pick a point $(X,Y)$ from this set completely at random. Thus, each point has a probability of $\frac{1}{11}$ of being chosen.
	<ol>
 <li> Find the joint and marginal PMFs of $X$ and $Y$.</li>
  <li> Find the conditional PMF of $X$ given $Y=1$.</li>
  <li> Are $X$ and $Y$ independent?</li>
	</ol>
<br />


<hr /><span class="problem">Problem </span><br />
Consider the set of points in the set $C$:
  \begin{align}%\label{}
  \nonumber  G=\{(x,y) | x,y \in \mathbb{Z}, x^2+ |y| \leq 2\}.
  \end{align}
  Suppose that we pick a point $(X,Y)$ from this set completely at random. Thus, each point has a probability of $\frac{1}{11}$ of being chosen.
<ol>
 <li> Find $E[X|Y=1]$.</li>
  <li> Find $Var(X|Y=1)$.</li>
  <li> Find $E[X| |Y| \leq 1]$.</li>
  <li> Find $E[X^2 |Y| \leq 1]$.</li>
</ol>
<br />


<hr /><span class="problem">Problem </span><br />
The number of cars being repaired at a small repair shop has the following PMF:
  \begin{equation}
   \nonumber P_X(x) = \left\{
  \begin{array}{l l}
     \frac{1}{8} & \quad \text{for  } x=0\\
     \frac{1}{8} & \quad \text{for  } x=1\\
     \frac{1}{4} & \quad \text{for  } x=2\\
     \frac{1}{2} & \quad \text{for  } x=3\\
     0   & \quad \text{otherwise}
  \end{array} \right.
  \end{equation}
  Each car that is being repaired is a four-door car with probability $\frac{3}{4}$ and a two-door car with probability $\frac{1}{4}$, independently from other cars and independently from the number of cars being repaired. Let $X$ be the number of four-door cars and $Y$ be the number of two-door cars currently being repaired.
<ol>
<li> Find the marginal PMFs of $X$ and $Y$.</li>
   <li> Find joint PMF of $X$ and $Y$.</li>
    <li> Are $X$ and $Y$ independent?</li>
    <li> Find $E[XY^2]$.</li>
</ol>
<br />


<hr /><span class="problem">Problem </span><br />
Let $X$ and $Y$ be two independent random variables with PMFs
  \begin{equation}
   \nonumber P_X(k)=P_Y(k) = \left\{
  \begin{array}{l l}
     \frac{1}{5} & \quad \text{for  } x=1,2,3,4,5\\
      0   & \quad \text{otherwise}
  \end{array} \right.
  \end{equation}
  Define $Z=X-Y$. Find the PMF of $Z$.
<br />


<hr /><span class="problem">Problem </span><br />
Consider two random variables $X$ and $Y$ with joint PMF given in Table 5.5<br />
<style>
	#table5_5 {
		font-size: 12pt;
		width: 400px;
		border-collapse: collapse;
		margin: 20px auto;
	}

	#table5_5 td {
		border: 2px solid black;
		width: 80px;
	}
</style>
	<p class="centered">Table 5.5: Joint PMF of X and Y in Problem 13</p>
	<table id="table5_5">
		<tr style="height:50px;">
			<td>&nbsp;</td>
			<td>$Y = 0$</td>
			<td>$Y = 1$</td>
			<td>$Y = 2$</td>
		</tr>
		<tr style="height:80px;">
			<td>$X = 0$</td>
			<td>$\frac{1}{6}$</td>
			<td>$\frac{1}{6}$</td>
			<td>$\frac{1}{8}$</td>
		</tr>
		<tr style="height: 80px;">
			<td>$X = 1$</td>
			<td>$\frac{1}{8}$</td>
			<td>$\frac{1}{6}$</td>
			<td>$\frac{1}{4}$</td>
		</tr>
	</table>
Define the random variable $Z$ as $Z=E[X|Y]$.
<ol type="a">
  <li> Find the Marginal PMFs of $X$ and $Y$.</li>
  <li> Find the conditional PMF of $X$, given $Y=0$ and $Y=1$, i.e., find $P_{X|Y}(x|0)$ and $P_{X|Y}(x|1)$.</li>
  <li> Find the $PMF$ of $Z$.</li>
  <li> Find $EZ$, and check that $EZ=EX$.</li>
  <li> Find Var$(Z)$.</li>
</ol>
<br />



<hr /><span class="problem">Problem </span><br />
Let $X$, $Y$, and $Z=E[X|Y]$ be as in Problem 1. Define the random variable $V$ as $V=Var(X|Y)$.
<ol type="a">
  <li> Find the PMF of $V$.</li>
  <li> Find $EV$.</li>
  <li> Check that $Var(X)=EV+Var(Z)$.</li>
</ol>
<br />


<hr /><span class="problem">Problem </span><br />
Let $N$ be the number of phone calls made by the customers of a phone company in a given hour. Suppose that $N \sim Poisson (\beta)$, where $\beta>0$ is known. Let $X_i$ be the length of the $i$'th phone call, for $i=1,2,..., N$. We assume $X_i$'s are independent of each other and also independent of $N$. We further assume that  have the same mean and variance
  \begin{align}%\label{}
  \nonumber  X_i \sim Exponential(\lambda),
  \end{align}
  where $\lambda>0$ is known.
  Let $Y$ be the sum of the lengths of the phone calls, i.e.,
  \begin{align}%\label{}
  \nonumber  Y=\sum_{i=1}^{N}X_i.
  \end{align}
  Find $EY$ and Var$(Y)$.
<br />


<hr /><span class="problem">Problem </span><br />
Let $X$ and $Y$ be two jointly continuous random variables with joint PDF
  \begin{equation}
  \nonumber f_{XY}(x,y) = \left\{
  \begin{array}{l l}
     \frac{1}{2} e^{-x}+\frac{cy}{(1+x)^2} &  \quad 0 \leq x,  0 \leq y \leq 1  \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
  \end{equation}
<ol type="a">
  <li> Find the constant $c$.</li>
  <li> Find $P(0 \leq X \leq 1, 0 \leq Y \leq \frac{1}{2})$.</li>
  <li> Find $P(0 \leq X \leq 1)$.</li>
</ol>
<br />


<hr /><span class="problem">Problem </span><br />
Let $X$ and $Y$ be two jointly continuous random variables with joint PDF
  \begin{equation}
  \nonumber f_{XY}(x,y) = \left\{
  \begin{array}{l l}
     e^{-xy} &  \quad 1 \leq x \leq e,  y>0 \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
  \end{equation}
<ol type="a">
  <li> Find the marginal PDFs, $f_X(x)$ and $f_Y(y)$.</li>
  <li> Write an integral to compute $P(0 \leq Y \leq 1, 1 \leq X \leq \sqrt{e})$.</li>
</ol>
<br />



<hr /><span class="problem">Problem </span><br />
Let $X$ and $Y$ be two jointly continuous random variables with joint PDF
  \begin{equation}
  \nonumber f_{XY}(x,y) = \left\{
  \begin{array}{l l}
     \frac{1}{4}x^2+\frac{1}{6}y &  \quad -1 \leq x \leq 1,  0 \leq y \leq 2 \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
  \end{equation}
<ol type="a">
  <li> Find the marginal PDFs, $f_X(x)$ and $f_Y(y)$.</li>
  <li> Find $P( X >0, Y<1)$.</li>
  <li> Find $P( X >0  \textrm{ or } Y<1)$.</li>
  <li> Find $P( X >0 | Y<1)$.</li>
  <li> Find $P(X+Y>0)$.</li>
</ol>
<br />


<hr /><span class="problem">Problem </span><br />
Let $X$ and $Y$ be two jointly continuous random variables with joint CDF
  \begin{equation}
  \nonumber F_{XY}(x,y) = \left\{
  \begin{array}{l l}
     1-e^{-x}-e^{-2y}+e^{-(x+2y)} &  \quad  x,y>0 \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
  \end{equation}
<ol type="a">
  <li> Find the joint PDF, $f_{XY}(x,y)$.</li>
  <li> Find $P(X<2Y)$.</li>
  <li> Are $X$ and $Y$ independent?</li>
</ol>
<br />


<hr /><span class="problem">Problem </span><br />
Let $X \sim N(0,1)$.
<ol type="a">
   <li>Find the conditional PDF and CDF of $X$ given $X>0$.</li>
   <li>Find $E[X|X>0]$.</li>
  <li> Find Var$(X|X>0)$.</li>
</ol>
<br />



<hr /><span class="problem">Problem </span><br />
Let $X$ and $Y$ be two jointly continuous random variables with joint PDF
  \begin{equation}
  \nonumber f_{XY}(x,y) = \left\{
  \begin{array}{l l}
    x^2+\frac{1}{3}y  &  \quad -1 \leq x \leq 1, 0 \leq y \leq 1 \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
  \end{equation}
  For $0 \leq y \leq 1$, find
<ol type="a">
  <li> the conditional PDF of $X$ given $Y=y$;</li>
  <li> $P(X>0|Y=y)$. Does this value depend on $y$?</li>
  <li> Are $X$ and $Y$ independent?</li>
</ol>
<br />



<hr /><span class="problem">Problem </span><br />
Let $X$ and $Y$ be two jointly continuous random variables with joint PDF
  \begin{equation}
  \nonumber f_{XY}(x,y) = \left\{
  \begin{array}{l l}
    \frac{1}{2}x^2+\frac{2}{3}y  &  \quad -1 \leq x \leq 1, 0 \leq y \leq 1 \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
  \end{equation}
  Find $E[Y|X=0]$ and Var$(Y|X=0)$.
<br />




<hr /><span class="problem">Problem </span><br />
  Consider the set
  \begin{align}%\label{}
  \nonumber  E=\{(x,y)| |x|+|y| \leq 1\}.
  \end{align}
  Suppose that we choose a point $(X,Y)$ uniformly at random in $E$. That is, the joint PDF of $X$ and $Y$ is given by
  \begin{equation}
  \nonumber f_{XY}(x,y) = \left\{
  \begin{array}{l l}
    c &  \quad (x,y) \in E  \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
  \end{equation}
<ol type="a">
  <li> Find the constant $c$.</li>
  <li> Find the marginal PDFs $f_X(x)$ and $f_Y(y)$.</li>
  <li> Find the conditional PDF of $X$ given $Y=y$, where $-1 \leq y \leq 1$.</li>
  <li> Are $X$ and $Y$ independent?</li>
</ol>
<br />



<hr /><span class="problem">Problem </span><br />
Let $X$ and $Y$ be two independent $Uniform(0,2)$ random variables. Find $P(XY<1)$.
<br />



<hr /><span class="problem">Problem </span><br />
Suppose $X \sim Exponential(1)$ and given $X=x$, $Y$ is a uniform random variable in $[0,x]$, i.e.,
  \begin{align}%\label{}
  \nonumber  Y|X=x \hspace{10pt} \sim \hspace{10pt} Uniform(0,x),
  \end{align}
  or equivalently
  \begin{align}%\label{}
  \nonumber  Y|X \hspace{10pt} \sim \hspace{10pt} Uniform(0,X).
  \end{align}
<ol type="a">
  <li> Find $EY$.</li>
  <li> Find $Var(Y)$.</li>
</ol>
<br />



<hr /><span class="problem">Problem </span><br />
Let $X$ and $Y$ be two independent $Uniform(0,1)$ random variables. Find
<ol type="a">
    <li> $E[XY]$.</li>
    <li> $E[e^{X+Y}]$.</li>
    <li> $E[X^2+Y^2+XY]$.</li>
    <li> $E[Ye^{XY}]$.</li>
</ol>
<br />



<hr /><span class="problem">Problem </span><br />
Let $X$ and $Y$ be two independent $Uniform(0,1)$ random variables, and $Z=\frac{X}{Y}$. Find the CDF and PDF of $Z$.
<br />



<hr /><span class="problem">Problem </span><br />
 Let $X$ and $Y$ be two independent $N(0,1)$ random variables, and $U=X+Y$.
<ol>
   <li> Find the conditional PDF of $U$ given $X=x$, $f_{U|X}(u|x)$.</li>
    <li> Find the PDF of $U$, $f_{U}(u)$.</li>
    <li> Find the conditional PDF of $X$ given $U=u$, $f_{X|U}(x|u)$.</li>
    <li> Find $E[X|U=u]$, and $Var(X|U=u)$.</li>
</ol>
<br />



<hr /><span class="problem">Problem </span><br />
 Let $X$ and $Y$ be two independent standard normal random variables. Consider the point $(X,Y)$ in the $x-y$ plane. Let $(R,\Theta)$ be the corresponding polar coordinates as shown in Figure 5.11. The inverse transformation is given by
  \begin{equation}
  \nonumber  \left\{
  \begin{array}{l}
    X=R \cos \Theta  \\
    Y=R \sin \Theta
  \end{array} \right.
  \end{equation}
  where, $R \geq 0$ and $-\pi < \Theta \leq \pi$. Find the joint PDF of $R$ and $\Theta$. Show that $R$ and $\Theta$ are independent.
	<img src="images/chapter5/chapter11.png" style="display:block;width:400px;margin:10px auto;" />
<br />



<hr /><span class="problem">Problem </span><br />
In Problem 29, suppose that $X$ and $Y$ are independent $Uniform(0,1)$ random variables. Find the joint PDF of $R$ and $\Theta$. Are $R$ and $\Theta$ independent?
<br />



<hr /><span class="problem">Problem </span><br />
Consider two random variables $X$ and $Y$ with joint PMF given in Table 5.6.<br />

<style>
	#table5_6 {
		font-size: 12pt;
		width: 400px;
		border-collapse: collapse;
		margin: 20px auto;
	}

	#table5_6 td {
		border: 2px solid black;
		width: 80px;
	}
</style>
	<p class="centered">Table 5.6: Joint PMF of X and Y in Problem 31</p>
	<table id="table5_6">
		<tr style="height:50px;">
			<td>&nbsp;</td>
			<td>$Y = 0$</td>
			<td>$Y = 1$</td>
			<td>$Y = 2$</td>
		</tr>
		<tr style="height:80px;">
			<td>$X = 0$</td>
			<td>$\frac{1}{6}$</td>
			<td>$\frac{1}{4}$</td>
			<td>$\frac{1}{8}$</td>
		</tr>
		<tr style="height: 80px;">
			<td>$X = 1$</td>
			<td>$\frac{1}{8}$</td>
			<td>$\frac{1}{6}$</td>
			<td>$\frac{1}{6}$</td>
		</tr>
	</table>

  Find $Cov(X,Y)$ and $\rho(X,Y)$.
<br />




<hr /><span class="problem">Problem </span><br />
Let $X$ and $Y$ be two independent $N(0,1)$ random variable and
  \begin{align}%\label{}
  \nonumber  &Z=11-X+X^2Y \\
  \nonumber  &W=3-Y.
  \end{align}
  Find Cov$(Z,W)$.
<br />



<hr /><span class="problem">Problem </span><br />
Let $X$ and $Y$ be two random variables. Suppose that $\sigma^2_X=4$, and $\sigma^2_Y=9$. If we know that the two random variables $Z=2X-Y $ and $W=X+Y$ are independent, find $Cov(X,Y)$ and $\rho(X,Y)$.
<br />



<hr /><span class="problem">Problem </span><br />
Let $X \sim Uniform(1,3)$ and $Y|X \sim Exponential(X)$. Find $Cov(X,Y)$.
<br />



<hr /><span class="problem">Problem </span><br />
Let $X$ and $Y$ be two independent $N(0,1)$ random variable and
  \begin{align}%\label{}
  \nonumber  &Z=7+X+Y \\
  \nonumber  &W=1+Y.
  \end{align}
  Find $\rho(Z,W)$.
<br />



<hr /><span class="problem">Problem </span><br />
item Let $X$ and $Y$ be jointly normal random variables with parameters $\mu_X=-1$, $\sigma^2_X=4$, $\mu_Y=1$, $\sigma^2_Y=1$, and $\rho=-\frac{1}{2}$.
<ol type="a">
  <li> Find $P(X+2Y \leq 3)$.</li>
  <li> Find $Cov(X-Y,X+2Y)$.</li>
</ol>
<br />



<hr /><span class="problem">Problem </span><br />
Let $X$ and $Y$ be jointly normal random variables with parameters $\mu_X=1$, $\sigma^2_X=4$, $\mu_Y=1$, $\sigma^2_Y=1$, and $\rho=0$.
<ol type="a">
  <li> Find $P(X+2Y >4)$.</li>
  <li> Find $E[X^2Y^2]$.</li>
</ol><br />



<hr /><span class="problem">Problem </span><br />
Let $X$ and $Y$ be jointly normal random variables with parameters $\mu_X=2$, $\sigma^2_X=4$, $\mu_Y=1$, $\sigma^2_Y=9$, and $\rho=-\frac{1}{2}$.
<ol type="a">
  <li> Find $E[Y|X=3]$.</li>
  <li> Find $Var(Y|X=2)$.</li>
  <li> Find $P(X+2Y \leq 5 | X+Y=3)$.</li>
</ol><br />
<!-- /Section Content -->

<?php include				"section_footer.php"; ?>
