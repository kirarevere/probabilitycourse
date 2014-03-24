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
	}

	#table5_2 td { 
		border: 1px solid black;
		width: 80px;
		text-align:center;
		vertical-align: middle;
	}
</style>
<table id="table5_2">
	<tr style="height: 50px;">
		<td>&nbsp;</td><td>TEST $Y = 0$</td><td>$Y = 1$</td>	
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

		</li></ul>
A
		</li></ul></div><hr /><br />

<!-- /Section Content -->

<?php include 'section_footer.php'; ?>
