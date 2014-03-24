<?php
	$section_no			= "5.1.5";
	$section_title	= "Conditional Expectation (Revisited) and Conditional Variance";
	$section_next		= "#";
	$section_prev		= "#";
	include	'../Control/autonumber.php';
	loadHeaders(61);
	include	'section_header.php';
?>

<!-- Section Content -->
In Section 5.1.3, we briefly discussed conditional expectation. Here, we will discuss the properties of conditional expectation in more detail as they are quite
 useful in practice. We will also discuss conditional variance. An important concept here is that we interpret the conditional expectation as a random variable.

<h2>Conditional Expectation as a Function of a Random Variable:</h2>
Remember that the conditional expectation of $X$ given that $Y=y$ is given by
\begin{align}%\label{}
\nonumber E[X|Y=y]=\sum_{x_i \in R_{X}} x_i P_{X|Y}(x_i|y).
\end{align}
Note that $E[X|Y=y]$ depends on the value of $y$. In other words, by changing $y$,  $E[X|Y=y]$ can also change. Thus, we can say $E[X|Y=y]$ is a function of $y$, so let's
 write
\begin{align}%\label{}
\nonumber g(y)=E[X|Y=y].
\end{align}
 Thus, we can think of $g(y)=E[X|Y=y]$ as a function of the value of random variable $Y$. We then write
\begin{align}%\label{}
\nonumber g(Y)=E[X|Y].
\end{align}
We use this notation to indicate that $E[X|Y]$ is a random variable whose value equals $g(y)=E[X|Y=y]$ when $Y=y$. Thus, if $Y$ is a random variable with range $R_Y=$$\{y
_1, y_2, \cdots \}$, then $E[X|Y]$ is also a random variable with

\begin{equation}
 \nonumber E[X|Y] = \left\{
  \begin{array}{l l}
    E[X|Y=y_1]  &  \quad \textrm{with probability } P(Y=y_1)  \\
    E[X|Y=y_2]  &  \quad \textrm{with probability } P(Y=y_2)  \\
  \end{array} \right.
\end{equation}

Let's look at an example.
<hr /><span class="example">Example </span>
Let $X=aY+b$. Then $E[X|Y=y]=E[aY+b|Y=y]=ay+b$. Here, we have $g(y)=ay+b$, and therefore,
\begin{align}%\label{}
\nonumber E[X|Y]=aY+b,
\end{align}
which is a function of the random variable $Y$.
<div class="solvedprob">
	<ul><li><a><b>Solution</b></a>
		<ul><li>
Since $E[X|Y]$ is a random variable, we can find its PMF, CDF, variance, etc. Let's look at an example to better understand $E[X|Y]$.
		</li></ul>
		</li></ul></div><br />

<hr /><span class="example">Example </span>
Consider two random variables $X$ and $Y$ with joint PMF given in Table 5.2. Let $Z=E[X|Y]$.
<ol type="a">
  <li>Find the Marginal PMFs of $X$ and $Y$.</li>
  <li>Find the conditional PMF of $X$ given $Y=0$ and $Y=1$, i.e., find $P_{X|Y}(x|0)$ and $P_{X|Y}(x|1)$.</li>
  <li>Find the $PMF$ of $Z$.</li>
  <li>Find $EZ$, and check that $EZ=EX$.</li>
  <li>Find Var$(Z)$.</li>
</ol>
<style>
	#table5_2 {
		border: 1px solid black;
		border-collapse: collapse;
		width: 330px;
		margin: 10px auto;
		font-size: 12pt;
	}

	#table5_2 td { 
		border: 1px solid black;
		width: 80px;
		text-align:center;
		vertical-align: middle;
	}
</style>
<p style="text-align:center">Table 5.2: Joint PMF of X and Y in example 5.11</p>
<table id="table5_2">
	<tr style="height: 50px;">
		<td>&nbsp;</td><td>$Y = 0$</td><td>$Y = 1$</td>	
	</tr>
		
	<tr style="height:80px;">
		<td>$X = 0$</td><td>$\frac{1}{5}$</td><td>$\frac{2}{5}$</td>
	</tr>

	<tr style="height: 80px;">
		<td>$X = 1$</td><td>$\frac{2}{5}$</td><td>$0$</td>
	</td>
</table>

<div class="solvedprob">
	<ul><li><a><b>Solution</b></a>
		<ul><li>
<ol type="a">
  <li>Using the table we find out
  \begin{align}%\label{}
  \nonumber &P_X(0)=\frac{1}{5}+\frac{2}{5}=\frac{3}{5},  \\
  \nonumber &P_X(1)=\frac{2}{5}+0=\frac{2}{5},  \\
  \nonumber &P_Y(0)=\frac{1}{5}+\frac{2}{5}=\frac{3}{5},  \\
  \nonumber &P_Y(1)=\frac{2}{5}+0=\frac{2}{5}.
  \end{align}
  Thus, the marginal distributions of $X$ and $Y$ are both $Bernoulli(\frac{2}{5})$. However, note that $X$ and $Y$ are not independent.
	</li>


  <li>We have
  \begin{align}%\label{}
  \nonumber &P_{X|Y}(0|0)=\frac{P_{XY}(0,0)}{P_{Y}(0)}\\
  \nonumber &= \frac{\frac{1}{5}}{\frac{3}{5}}=\frac{1}{3}.
  \end{align}
  Thus,
  \begin{align}%\label{}
  \nonumber &P_{X|Y}(1|0)=1-\frac{1}{3}=\frac{2}{3}.
  \end{align}
  We conclude
  \begin{align}%\label{}
  \nonumber X|Y=0 \hspace{5pt} \sim  \hspace{5pt} Bernoulli \left(\frac{2}{3}\right).
  \end{align}
  Similarly, we find
  \begin{align}%\label{}
  \nonumber &P_{X|Y}(0|1)=1,\\
  \nonumber &P_{X|Y}(1|1)=0.
  \end{align}
  Thus, given $Y=1$, we have always $X=0$.
	</li>

  <li>We note that the random variable $Y$ can take two values: $0$ and $1$. Thus, the random variable $Z=E[X|Y]$ can take two values as it is a function of $Y$. Specifically,
  \begin{equation}
  \nonumber Z = E[X|Y]= \left\{
  \begin{array}{l l}
    E[X|Y=0]  &  \quad \textrm{if } Y=0  \\
      &  \quad   \\
    E[X|Y=0] &  \quad \textrm{if } Y=1
  \end{array} \right.
  \end{equation}
  Now, using the previous part, we have
  \begin{align}%\label{}
  \nonumber E[X|Y=0]=\frac{2}{3}, \hspace{15pt}  E[X|Y=1]=0,
  \end{align}
  and since $P(y=0)=\frac{3}{5}$, and $P(y=1)=\frac{2}{5}$, we conclude that
  \begin{equation}
  \nonumber Z = E[X|Y]= \left\{
  \begin{array}{l l}
    \frac{2}{3}  &  \quad \textrm{with probability } \frac{3}{5}  \\
      &  \quad   \\
    0 &  \quad \textrm{with probability } \frac{2}{5}
  \end{array} \right.
  \end{equation}
  So we can write
  \begin{equation}
  \nonumber P_Z(z) = \left\{
  \begin{array}{l l}
    \frac{3}{5}  &  \quad \textrm{if } z=\frac{2}{3}  \\
      &  \quad   \\
    \frac{2}{5} &  \quad \textrm{if } z=0\\
    &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
  \end{equation}
</li>
 <li>Now that we have found the PMF of $Z$, we can find its mean and variance. Specifically,
  \begin{align}%\label{}
  \nonumber E[Z]=\frac{2}{3} \cdot \frac{3}{5}+ 0 \cdot \frac{2}{5} =\frac{2}{5}.
  \end{align}
  We also note that $EX=\frac{2}{5}$. Thus, here we have
  \begin{align}%\label{}
  \nonumber E[X]=E[Z]=E[E[X|Y]].
  \end{align}
  In fact, as we will prove shortly, the above equality always holds. It is called the law of iterated expectations.
	</li>



  <li>To find Var$(Z)$, we write
  \begin{align}%\label{}
  \nonumber \textrm{Var}(Z)&=E[Z^2]-(EZ)^2\\
  \nonumber &=E[Z^2]-\frac{4}{25},
  \end{align}
  where
  \begin{align}%\label{}
  \nonumber E[Z^2]=\frac{4}{9} \cdot \frac{3}{5}+0 \cdot \frac{2}{5}=\frac{4}{15}.
  \end{align}
  Thus,
  \begin{align}%\label{}
  \nonumber \textrm{Var}(Z)&=\frac{4}{15}-\frac{4}{25}\\
  \nonumber &=\frac{8}{75}.
  \end{align}
	</li>
</ol>


		</li></ul>

		</li></ul></div><hr /><br />
<!-- /Example -->

<!-- Example -->
<span class="example">Example </span><br />
Let $X$ and $Y$ be two random variables and $g$ and $h$ be two functions. Show that
\begin{align}%\label{}
\nonumber  E[g(X)h(Y)|X]=g(X)E[h(Y)|X].
\end{align}
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
	<ul><li>
Note that $E[g(X)h(Y)|X]$ is a random variable that is a function of $X$. In particular, if $X=x$, then $E[g(X)h(Y)|X]=E[g(X)h(Y)|X=x]$. Now, we can write
\begin{align}%\label{}
\nonumber  E[g(X)h(Y)|X=x]&=E[g(x)h(Y)|X=x]\\
\nonumber  &=g(x)E[h(Y)|X=x] \hspace{30pt} \textrm{since $g(x)$ is a constant}.
\end{align}
Thinking of this as a function of the random variable $X$, it can be rewritten as $E[g(X)h(Y)|X]=g(X)E[h(Y)|X]$. This rule is sometimes called ``taking out what is known''. The idea is that, given $X$, then $g(X)$ is a known quantity, so it can be taken out of the conditional expectation.

<div style="padding: 25px; margin: 30px 40px; border: 2px solid black;">
\begin{align}\label{eq:EGH|X}
  E[g(X)h(Y)|X]=g(X)E[h(Y)|X]
\end{align}
</div>
</li></ul></li></ul>
</div>
<!-- /Example -->


<!-- /Section Content -->

<?php include 'section_footer.php'; ?>
