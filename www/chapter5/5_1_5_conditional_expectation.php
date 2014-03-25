<?php
	$section_no			= "5.1.5";
	$section_title	= "Conditional Expectation (Revisited) and Conditional Variance";
	$section_prev		= "chapter5/5_1_4_functions_two_variables.php";
	$section_next		= "chapter5/5_1_6_solved_prob.php";
	include	'../Control/autonumber.php';
	loadHeaders(63);
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
		&. \hspace{40pt} . \\
		&. \hspace{40pt} . \\
		&. \hspace{40pt} .
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
  E[g(X)h(Y)|X]=g(X)E[h(Y)|X] \hspace{30pt} (5.6)
\end{align}
</div>
</li></ul></li></ul>
</div><hr /><br />
<!-- /Example -->

<h2>Iterated Expectations:</h2>
Let us look again at the law of total probability for expectation. Assuming $g(Y)=E[X|Y]$, we have
\begin{align}
\nonumber E[X]&=\sum_{y_j \in R_Y} E[X|Y=y_j]P_Y(y_j)\\
\nonumber &=\sum_{y_j \in R_Y} g(y_j)P_Y(y_j)\\
\nonumber &=E[g(Y)] \hspace{30pt} \textrm{by LOTUS (Equation 5.2)}\\
\nonumber &=E[E[X|Y]].
\end{align}
Thus, we conclude
\begin{align} \label{eq:iteratedE}
   E[X]=E[E[X|Y]]. \hspace{40pt} (5.7)
\end{align}
This equation might look a little confusing at first, but it is just another way of writing the law of total expectation (Equation 5.4). To better understand it, let's solve Example 5.7 using this terminology. In that example, we want to find $EX$. We can write

\begin{align}
\nonumber E[X]&=E[E[X|N]] \\
\nonumber &=E[Np] \hspace{30pt} (\textrm{since }X|N \sim Binomial(N,p)) \\
\nonumber &=pE[N]=p\lambda.
\end{align}

Equation 5.7 is called the <i>law of iterated expectations</i>. Since it is basically the same as Equation 5.4, it is also called the law of total expectation [<a href="bibliography.html">2</a>].

<div style="padding: 25px; margin: 30px 40px; border: 2px solid black;">
\begin{align}
\nonumber  \textrm{Law of Iterated Expectations: } E[X]=E[E[X|Y]]
\end{align}
</div>

<h2>Expectation for Independent Random Variables:</h2>
Note that if two random variables $X$ and $Y$ are independent, then the conditional PMF of $X$ given $Y$ will be the same as the marginal PMF of $X$, i.e., for any $x \in R_X$, we have
\begin{align}%\label{}
\nonumber  P_{X|Y}(x|y)=P_X(x).
\end{align}
Thus, for independent random variables, we have
\begin{align}%\label{}
\nonumber  E[X|Y=y]&= \sum_{x \in R_{X}} x P_{X|Y}(x|y)\\
 &= \sum_{x \in R_{X}} x P_{X}(x)\\
 &=E[X].
\end{align}
Again, thinking of this as a random variable depending on $Y$, we obtain
\begin{align}%\label{}
\nonumber  E[X|Y]=E[X], \textrm{ when $X$ and $Y$ are independent.}
\end{align}
More generally, if $X$ and $Y$ are independent then any function of $X$, say $g(X)$, and $Y$ are independent, thus
\begin{align}%\label{}
\nonumber  E[g(X)|Y]=E[g(X)].
\end{align}
Remember that for independent random variables, $P_{XY}(x,y)=P_X(x)P_Y(y)$. From this, we can show that $E[XY]=EX EY$.

<br /><hr /><span class="lemma">Lemma </span><br />
If $X$ and $Y$ are independent, then $E[XY]=EX EY$.
Using LOTUS, we have
\begin{align}%\label{}
\nonumber  E[XY] &=\sum_{x \in R_x} \sum_{y \in R_y} xy P_{XY}(x,y)\\
\nonumber   &=\sum_{x \in R_x} \sum_{y \in R_y} xy P_X(x)P_Y(y)\\
\nonumber   &=\bigg(\sum_{x \in R_x}  x P_X(x) \bigg) \bigg(\sum_{y \in R_y} yP_Y(y)\bigg)\\
\nonumber   &=EX EY. ied
\end{align}
Note that the converse is <b>not</b> true. That is, if the only thing that we know about $X$ and $Y$ is that $E[XY]=EX EY$, then $X$ and $Y$ may or may not be independent. Using essentially the same proof as above, we can show if $X$ and $Y$ are independent, then $E[g(X)h(Y)]=E[g(X)]E[h(Y)]$ for any functions $g:\mathbb{R} \mapsto \mathbb{R}$ and $h:\mathbb{R} \mapsto \mathbb{R}$.


<div style="padding: 25px;margin: 30px 40px; border: 2px solid black;">
If $X$ and $Y$ are independent random variables, then
<ol>
  <li>$E[X|Y]=EX$;</li>
  <li>$E[g(X)|Y]=E[g(X)]$;</li>
  <li>$E[XY]=EX EY$;</li>
  <li>$E[g(X)h(Y)]=E[g(X)] E[h(Y)]$.</li>
</ol>
</div>

<h2>Conditional Variance:</h2>

Similar to the conditional expectation, we can define the conditional variance of $X$, Var$(X|Y=y)$, which is the variance of $X$ in the conditional space where we know $Y=y$. If we let $\mu_{X|Y}(y)=E[X|Y=y]$, then
\begin{align}%\label{}
\nonumber  \textrm{Var}(X|Y=y) &=E\big[(X-\mu_{X|Y}(y))^2|Y=y \big] \\
\nonumber  &=\sum_{x_i \in R_X} \big(x_i-\mu_{X|Y}(y)\big)^2 P_{X|Y}(x_i)\\
\nonumber  &=E\big[X^2|Y=y\big]-\mu_{X|Y}(y)^2.
\end{align}
Note that Var$(X|Y=y)$ is a function of $y$. Similar to our discussion on $E[X|Y=y]$ and $E[X|Y]$, we define Var$(X|Y)$ as a function of the random variable $Y$. That is, Var$(X|Y)$ is a random variable whose value equals Var$(X|Y=y)$ whenever $Y=y$. Let us look at an example.

<!-- Example -->
<hr /><span class="example">Example </span><br />
Let $X$, $Y$, and $Z=E[X|Y]$ be as in Example 5.11. Let also $V=$Var$(X|Y)$.
<ol type="a">
  <li>Find the PMF of $V$.</li>
  <li>Find $EV$.</li>
  <li>Check that Var$(X)=E(V)+$Var$(Z)$.</li>
</ol>

<div class="solvedprob">
	<ul><li><a><b>Solution</b></a>
	<ul></li>
In Example 5.11, we found out that $X,Y \sim Bernoulli(\frac{2}{5})$. We also obtained
\begin{align}%\label{}
  \nonumber &X|Y=0 \hspace{5pt} \sim  \hspace{5pt} Bernoulli \left(\frac{2}{3}\right), \\
  \nonumber &P(X=0|Y=1)=1,\\
  \nonumber &\textrm{Var}(Z)=\frac{8}{75}.
\end{align}

<ol type="a">
   <li>To find the PMF of $V$, we note that $V$ is a function of $Y$. Specifically,
  \begin{equation}
  \nonumber V = \textrm{Var}(X|Y)= \left\{
  \begin{array}{l l}
    \textrm{Var}(X|Y=0)  &  \quad \textrm{if } Y=0  \\
      &  \quad   \\
    \textrm{Var}(X|Y=1)&  \quad \textrm{if } Y=1
  \end{array} \right.
  \end{equation}
  Therefore,
  \begin{equation}
  \nonumber V = \textrm{Var}(X|Y)= \left\{
  \begin{array}{l l}
    \textrm{Var}(X|Y=0)  &  \quad \textrm{with probability } \frac{3}{5} \\
      &  \quad   \\
    \textrm{Var}(X|Y=1)&  \quad \textrm{with probability } \frac{2}{5}
  \end{array} \right.
  \end{equation}
  Now, since $X|Y=0 \hspace{5pt} \sim  \hspace{5pt} Bernoulli \left(\frac{2}{3}\right)$, we have
  \begin{align}%\label{}
  \nonumber \textrm{Var}(X|Y=0)=\frac{2}{3} \cdot \frac{1}{3}=\frac{2}{9},
  \end{align}
  and since given $Y=1$, $X=1$, we have
  \begin{align}%\label{}
  \nonumber \textrm{Var}(X|Y=1)=0.
  \end{align}
  Thus,
  \begin{equation}
  \nonumber V = \textrm{Var}(X|Y)= \left\{
  \begin{array}{l l}
    \frac{2}{9}  &  \quad \textrm{with probability } \frac{3}{5}  \\
      &  \quad   \\
    0 &  \quad \textrm{with probability } \frac{2}{5}
  \end{array} \right.
  \end{equation}
  So we can write
  \begin{equation}
  \nonumber P_V(v) = \left\{
  \begin{array}{l l}
    \frac{3}{5}  &  \quad \textrm{if } v=\frac{2}{9}  \\
      &  \quad   \\
    \frac{2}{5} &  \quad \textrm{if } v=0\\
    &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
  \end{equation}
	</li>
   <li> To find $EV$, we write
   \begin{align}%\label{}
    \nonumber EV=\frac{2}{9} \cdot \frac{3}{5}+0 \cdot \frac{2}{5}=\frac{2}{15}.
   \end{align}
		</li>
   <li>To check that Var$(X)=E(V)+$Var$(Z)$, we just note that

   \begin{align}%\label{}
    \nonumber &\textrm{Var}(X)=\frac{2}{5} \cdot \frac{3}{5}=\frac{6}{25}\\
    \nonumber &EV=\frac{2}{15}\\
    \nonumber &\textrm{Var}(Z)=\frac{8}{75}.
   \end{align}
		</li></ol>
		</li><ul>
		</li></ul></div><hr /><br />

In the above example, we checked that Var$(X)=E(V)+$Var$(Z)$, which says
\begin{align}%\label{}
    \nonumber \textrm{Var}(X)=E(\textrm{Var}(X|Y))+\textrm{Var}(E[X|Y]).
\end{align}
It turns out this is true in general and it is called <i>the law of total variance</i>, or <i>variance decomposition formula</i> [<a href="bibliography.html">3</a>]. Let us first prove the law of total variance, and then we explain it intuitively. Note that if $V=$Var$(X|Y)$, and $Z=E[X|Y]$, then
\begin{align}%\label{}
    \nonumber V&=E[X^2|Y]-(E[X|Y])^2\\
    \nonumber &=E[X^2|Y]-Z^2.
\end{align}
Thus,
\begin{align}\label{eq:1of2}
    \nonumber EV&=E[E[X^2|Y]]-E[Z^2]\\
     &=E[X^2]-E[Z^2] &\big(\textrm{law of iterated expectations(Equation 5.7)}\big). \hspace{20pt} (5.8)
\end{align}
Next, we have
\begin{align}\label{eq:2of2}
    \nonumber \textrm{Var}(Z)&=E[Z^2]-(EZ)^2\\
     &=E[Z^2]-(EX)^2 &(\textrm{law of iterated expectations}). \hspace{20pt} (5.9)
\end{align}
Combining Equations 5.8 and  5.9, we obtain  the law of total variance.

<div style="padding: 25px;margin: 30px 40px; border: 2px solid black;">
<p style="text-align:center;">Law of Total Variance:</p>
\begin{align}\label{eq:LOTV}
  \textrm{Var}(X)=E[\textrm{Var}(X|Y)]+\textrm{Var}(E[X|Y]) \hspace{30pt} (5.10)
\end{align}
</div><br />
There are several ways that we can look at the law of total variance to get some intuition. Let us first note that all the terms in Equation 5.10 are positive (since variance is always positive). Thus, we conclude
\begin{align}\label{eq:condReducesVariance}
  \textrm{Var}(X) \geq E(\textrm{Var}(X|Y)). \hspace{30pt} (5.11)
\end{align}
<p>
This states that when we condition on $Y$, the variance of $X$ reduces on average. To describe this intuitively, we can say that variance of a random variable is a measure of our uncertainty about that random variable. For example, if Var$(X)=0$, we do not have any uncertainty about $X$. Now, the above inequality simply states that if we obtain some extra information, i.e., we know the value of $Y$, our uncertainty about the value of the random variable $X$  reduces on average. So, the above inequality makes sense. Now, how do we explain the whole law of total variance?
</p>
<p>
To describe the law of total variance intuitively, it is often useful to look at a population divided into several groups. In particular, suppose that we have this random experiment: We pick a person in the world at random and look at his/her height. Let's call the resulting value $X$. Define another random variable $Y$ whose value depends on the country of the chosen person, where $Y=1,2,3,...,n$, and $n$ is the number of countries in the world. Then, let's look at the two terms in the law of total variance.
</p>
\begin{align}
\nonumber  \textrm{Var}(X)=E(\textrm{Var}(X|Y))+\textrm{Var}(E[X|Y]).
\end{align}
Note that $\textrm{Var}(X|Y=i)$, is the variance of $X$ in country $i$. Thus, $E(\textrm{Var}(X|Y))$ is the average of variances in each country. On the other hand, $E[X|Y=i]$ is the average height in country $i$. Thus, $\textrm{Var}(E[X|Y])$ is the variance between countries. So, we can interpret the law of total variance in the following way. Variance of $X$ can be decomposed into two parts: the first is the average of variances in each individual country, while the second is the variance between height averages in each country.

<!-- Example -->
<br /><hr /><span class="example">Example </span><br />
Let $N$ be the number of customers that visit a certain store in a given day. Suppose that we know $E[N]$ and Var$(N)$. Let $X_i$ be the amount that the $i$'th customer spends on average. We assume $X_i$'s are independent of each other and also independent of $N$. We further assume they have the same mean and variance
\begin{align}%\label{}
\nonumber  &EX_i=EX, \\
\nonumber  &\textrm{Var}(X_i)=\textrm{Var}(X).
\end{align}
Let $Y$ be the store's total sales, i.e.,
\begin{align}%\label{}
\nonumber  Y=\sum_{i=1}^{N}X_i.
\end{align}
Find $EY$ and Var$(Y)$.

<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
To find $EY$, we cannot directly use the linearity of expectation because $N$ is random. But, conditioned on $N=n$, we can use linearity and find $E[Y|N=n]$; so, we use the law of iterated expectations:
\begin{align}%\label{}
\nonumber  EY&=E[E[Y|N]] &(\textrm{law of iterated expectations})\\
\nonumber  &=E\left[E\bigg[\sum_{i=1}^{N}X_i|N\bigg]\right]\\
\nonumber  &=E\left[\sum_{i=1}^{N}E[X_i|N] \right] & (\textrm{linearity of expectation})\\
\nonumber  &=E\left[\sum_{i=1}^{N}E[X_i] \right] & (\textrm{$X_i$'s and } N \textrm{ are indpendent})\\
\nonumber  &=E[NE[X]] & (\textrm{since $EX_i=EX$s}) \\
\nonumber  &=E[X]E[N] & (\textrm{since $EX$ is not random}).
\end{align}

To find Var$(Y)$, we use the law of total variance:
\begin{align}\label{al1}
\nonumber  \textrm{Var}(Y)&=E(\textrm{Var}(Y|N))+\textrm{Var}(E[Y|N])\\
\nonumber  &=E(\textrm{Var}(Y|N))+\textrm{Var}(NEX) &(\textrm{as above})\\
 &=E(\textrm{Var}(Y|N))+(EX)^2\textrm{Var}(N). \hspace{30pt} (5.12)
\end{align}
To find $E(\textrm{Var}(Y|N))$, note that, given $N=n$, $Y$ is a sum $n$ independent random variables. As we discussed before, for $n$ independent random variables, the variance of the sum is equal to sum of the variances. This fact is officially proved in Section 5.3 and also in Chapter 6, but we have occasionally used it as it simplifies the analysis. Thus, we can write

\begin{align}
\nonumber  \textrm{Var}(Y|N)&=\sum_{i=1}^{N} \textrm{Var}(X_i|N)\\
\nonumber  &=\sum_{i=1}^{N} \textrm{Var}(X_i) &(\textrm{since }X_i\textrm{'s are independent of }N)\\
\nonumber   &=N Var(X).
\end{align}

Thus, we have
\begin{align}\label{al2}
  E(\textrm{Var}(Y|N))=EN Var(X). \hspace{30pt} (5.13)
\end{align}
Combining Equations 5.12 and 5.13, we obtain
\begin{align}
\nonumber  \textrm{Var}(Y)= EN Var(X)+(EX)^2 Var(N).
\end{align}

</li></ul>
</li></ul></div><br />

<!-- /Section Content -->

<?php include 'section_footer.php'; ?>
