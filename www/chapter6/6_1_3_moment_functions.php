<?php
	$section_no			= "6.1.3";
	$section_title	= "Moment Generating Functions";
	$section_prev		= "chapter6/6_1_2_sums_random_variables.php";
	$section_next		= "chapter6/6_1_4_characteristic_functions.php";
	include						"../Control/autonumber.php";
	loadHeaders(78);
	include						"section_header.php";
?>

<!-- Section Content -->
Here we introduce and discuss <b>moment generating functions (MGFs)</b>. Moment generating functions are useful for several reasons, one of which is their application to analysis of sums of random variables. Before discussing MGFs, let's define moments.

<br /><span class='definition'>Definition </span>.
The <b><i>n</i>th moment</b> of a random variable $X$ is defined to be $E[X^n]$. The <b><i>n</i>th central moment</b> of $X$ is defined to be $E[(X-EX)^n]$.
<br />

For example, the first moment is the expected value $E[X]$. The second central moment is the variance of $X$. Similar to mean and variance, other moments give useful information about a random variables.

<div class='cbox'>
The moment generating function (MGF) of a random variable $X$ is a function $M_X(s)$ defined as
\begin{align}%\label{}
\nonumber  M_X(s)=E\left[e^{sX}\right].
\end{align}
We say that MGF of $X$ exists, if there exists a positive constant $a$ such that $M_X(s)$ is finite for all $s \in [-a,a]$.
</div><br />

Before going any further, let's look at an example.

<!-- begin Example -->
<hr /><span class='example'>Example </span><br />
For each of the following random variables, find the MGF.
<ol type='a'>
  <li> $X$ is a discrete random variable, with PMF
  \nonumber P_X(k) = 
  \begin{array}{l l}
     \frac{1}{3} &  \quad k=1   \\
      &  \quad   \\
    \frac{2}{3} &  \quad k=2
  \end{array} .
	</li>
	<li>
  $Y$ is a $Uniform(0,1)$ random variable.
	</li>
</ol>

<div class='solvedprob'><ul><li><a><b>Solution</b></a>
<ul><li>
<ol type='a'>
  <li> For $X$, we have
  \begin{align}%\label{}
  \nonumber M_X(s)&=E\left[e^{sX}\right]  \\
  \nonumber &=\frac{1}{3}e^s+\frac{2}{3}e^{2s}.
  \end{align}
  which is well-defined for all $s \in \mathbb{R}$.
  </li>
	<li> For $Y$, we can write
  \begin{align}%\label{}
  \nonumber M_Y(s)&=E\left[e^{sY}\right]  \\
  \nonumber &=\int_{0}^{1}e^{sy}dy\\
  \nonumber &=\frac{e^s-1}{s}.
  \end{align}
  Note that we always have $M_Y(0)=E[e^{0 \cdot Y}]=1$, thus $M_Y(s)$ is also well-defined for all $s \in \mathbb{R}$.
</li></ol>
</li></ul>
</li></ul></div><hr /><br />
 Now, the question is why is the MGF useful? There are basically two reasons for this. First, the MGF of $X$ gives us all moments of $X$. That is why it is called the moment generating function. Second, the MGF (if it exists) uniquely determines the distribution. That is, if two random variables have the same MGF, then they must have the same distribution. Thus, if you find the MGF of a random variable, you have indeed determined its distribution. We will see that this method is very useful when we work on sums of several independent random variables. Let's discuss these in detail.

<h2>Finding Moments from MGF:</h2>
Remember the Taylor series for $e^x$: for all $x \in \mathbb{R}$, we have
\begin{align}%\label{}
\nonumber  e^x=1+x+\frac{x^2}{2!}+\frac{x^3}{3!}+...=\sum_{k=0}^{\infty} \frac{x^k}{k!}.
\end{align}
Now, we can write
\begin{align}%\label{}
\nonumber  e^{sX}&=\sum_{k=0}^{\infty} \frac{(sX)^k}{k!}=\sum_{k=0}^{\infty} \frac{X^k s^k}{k!}.
\end{align}
Thus, we have
\begin{align}%\label{}
\nonumber  M_X(s)=E[e^{sX}]&=\sum_{k=0}^{\infty} E[X^k] \frac{s^k}{k!}.
\end{align}
We conclude that the $k$th moment of $X$ is the coefficient of  $\frac{s^k}{k!}$ in the Taylor series of $M_X(s)$. Thus, if we have the Taylor series of $M_X(s)$, we can obtain all moments of $X$.

<!-- begin example -->
<hr /><span class='example'>Example </span><br />
If $Y \sim Uniform(0,1)$, find $E[Y^k]$ using $M_Y(s)$.
<div class='solvedprob'><ul><li><a><b>Solution</b></a>
<ul><li>
We found $M_Y(s)$ in Example 6.3, so we have
\begin{align}%\label{}
  \nonumber M_Y(s)&=\frac{e^s-1}{s}\\
  \nonumber &=\frac{1}{s} \left(\sum_{k=0}^{\infty} \frac{s^k}{k!}-1\right)\\
  \nonumber &=\frac{1}{s} \sum_{k=1}^{\infty} \frac{s^k}{k!}\\
  \nonumber &=\sum_{k=1}^{\infty} \frac{s^{k-1}}{k!}\\
  \nonumber &=\sum_{k=0}^{\infty}\frac{1}{k+1} \frac{s^{k}}{k!}.
\end{align}
Thus, the coefficient of $\frac{s^{k}}{k!}$ in the Taylor series for $M_Y(s)$ is $\frac{1}{k+1}$, so
\begin{align}%\label{}
\nonumber  E[X^k]=\frac{1}{k+1}.
\end{align}
</li></ul>
</li></ul></div><hr /><br />

We remember from calculus that the coefficient of $\frac{s^k}{k!}$ in the Taylor series of $M_X(s)$ is obtained by taking the $k$th derivative of $M_X(s)$ and evaluating it at $s=0$. Thus, we can write

\begin{align}
\nonumber  E[X^k]=\frac{d^k}{ds^k}M_X(s)\bigg{|}_{s=0}
\end{align}

<div class='cbox'>
We can obtain all moments of $X^k$ from its MGF:
\begin{align}%\label{}
\nonumber  M_X(s)=\sum_{k=0}^{\infty} E[X^k] \frac{s^k}{k!}
\end{align}
\begin{align}%\label{}
\nonumber  E[X^k]=\frac{d^k}{ds^k}M_X(s)\bigg{|}_{s=0}
\end{align}
</div>

<!-- begin example -->
<hr /><span class='example'>Example </span><br />
Let $X \sim Exponential(\lambda)$. Find the MGF of $X$, $M_X(s)$, and all of its moments, $E[X^k]$.
<div class='solvedprob'><ul><li><a><b>Solution</b></a>
<ul><li>
Recall that the PDF of $X$ is
\begin{align}%\label{}
\nonumber f_X(x)=\lambda e^{-\lambda x} u(x),
\end{align}
where $u(x)$ is the unit step function. We conclude
\begin{align}
  \nonumber M_X(s)&=E[e^{sX}]  \\
  \nonumber &=\int_{0}^{\infty}\lambda e^{-\lambda x} e^{sx}dx\\
   &=\left[-\frac{\lambda}{\lambda-s} e^{-(\lambda-s) x}\right]_{0}^{\infty}, \textrm{for }s&lt;\lambda\\
  \nonumber &=\frac{\lambda}{\lambda-s},  \textrm{for }s&lt;\lambda.
\end{align}
Therefore, $M_X(s)$ exists for all $s&lt;\lambda$. To find the moments of $X$, we can write
\begin{align}%\label{}
  \nonumber M_X(s)&=\frac{\lambda}{\lambda-s}\\
  \nonumber &=\frac{1}{1-\frac{s}{\lambda}}\\
  \nonumber &=\sum_{k=0}^{\infty} \left(\frac{s}{\lambda}\right)^k \textrm{for }\left|\frac{s}{\lambda}\right|&lt;1\\
  \nonumber &=\sum_{k=0}^{\infty} \frac{k!}{\lambda^k} \frac{s^k}{k!}.
\end{align}
We conclude that
\begin{align}%\label{}
  \nonumber E[X^k]=\frac{k!}{\lambda^k} \textrm{ for }k=0,1,2,...
\end{align}
</li></ul>
</li></ul></div><br />
<!-- end example -->

<!-- begin example -->
<hr /><span class='example'>Example </span><br />
Let $X \sim Poisson(\lambda)$. Find the MGF of $X$, $M_X(s)$.
<div class='solvedprob'><ul><li><a><b>Solution</b></a>
<ul><li>
We have
\begin{align}%\label{}
\nonumber P_X(k)= e^{-\lambda} \frac{\lambda^k}{k!} \textrm{ for }k=0,1,2,...
\end{align}
Thus,
\begin{align}%\label{}
  \nonumber M_X(s)&=E[e^{sX}]  \\
  \nonumber &=\sum_{k=0}^{\infty} e^{sk} e^{-\lambda} \frac{\lambda^k}{k!}\\
  \nonumber &=e^{-\lambda} \sum_{k=0}^{\infty} e^{sk}\frac{\lambda^k}{k!}\\
  \nonumber &=e^{-\lambda} \sum_{k=0}^{\infty}\frac{(\lambda  e^{s})^k}{k!}\\
  \nonumber &=e^{-\lambda}e^{\lambda e^s} (\textrm{Taylor series for }e^x)\\
  \nonumber &=e^{\lambda (e^s-1)}, \textrm{ for all } s\in \mathbb{R}.
\end{align}
</li></ul>
</li></ul></div><hr /><br />
<!-- end example -->

As we discussed previously, the MGF uniquely determines the distribution. This is a very useful fact. We will see examples of how we use it shortly. Right now let's state this fact more precisely as a theorem. We omit the proof here.

<br /><span class='theorem'>Theorem </span>
Consider two random variables $X$ and $Y$. Suppose that there exists a positive constant $c$ such that MGFs of $X$ and $Y$ are finite and identical for all values of $s$ in $[-c,c]$. Then,
\begin{align}%\label{}
\nonumber  F_X(t)=F_Y(t), \textrm{ for all }t \in \mathbb{R}.
\end{align}

<!-- begin example -->
<hr /><span class='example'>Example </span><br />
For a random variable $X$, we know that
\begin{align}%\label{}
\nonumber  M_X(s)=\frac{2}{2-s}, \textrm{ for }s \in (-2,2).
\end{align}
Find the distribution of $X$.
<div class='solvedprob'><ul><li><a><b>Solution</b></a>
<ul><li>
We note that the above MGF is the MGF of an exponential random variable with $\lambda=2$ (Example 6.5). Thus, we conclude that $X \sim Exponential(2)$.
</li></ul>
</li></ul></div><hr /><br />
<!-- end example -->

<h2>Sum of Independent Random Variables:</h2>
Suppose $X_1$, $X_2$, ..., $X_n$ are $n$ independent random variables, and the random variable $Y$ is defined as
\begin{align}%\label{}
\nonumber Y=X_1+X_2+ \cdots +X_n.
\end{align}
Then,
\begin{align}%\label{}
\nonumber  M_Y(s)&=E[e^{sY}] \\
\nonumber  &=E[e^{s(X_1+X_2+ \cdots +X_n)}]\\
\nonumber  &=E[e^{sX_1} e^{sX_2} \cdots e^{sX_n}] \\
\nonumber  &=E[e^{sX_1}] E[e^{sX_2}] \cdots E[e^{sX_n}]  \hspace{10pt} \textrm{(since $X_i$'s are independent)}\\
        &=M_{X_1}(s)M_{X_2}(s) \cdots M_{X_n}(s).
\end{align}

<div class='cbox'>
If $X_1$, $X_2$, ..., $X_n$ are $n$ \underline{independent} random variables, then
\begin{align}%\label{}
\nonumber  M_{X_1+X_2+\cdots +X_n}(s)=M_{X_1}(s)M_{X_2}(s) \cdots M_{X_n}(s).
\end{align}
</div><br />

<hr /><span class='example'>Example </span><br />
If $X \sim Binomial(n,p)$ find the MGF of $X$.
<div class='solvedprob'><ul><li><a><b>Solution</b></a>
<ul><li>
We can solve this question directly using the definition of MGF, but an easier way to solve it is to use the fact that a binomial random variable can be considered as the sum of $n$ independent and identically distributed (i.i.d) Bernoulli random variables. Thus, we can write
\begin{align}%\label{}
\nonumber X=X_1+X_2+ \cdots +X_n,
\end{align}
where $X_i \sim Bernoulli(p)$. Thus,
\begin{align}%\label{}
\nonumber  M_{X}(s)&=M_{X_1}(s)M_{X_2}(s) \cdots M_{X_n}(s)\\
 &=\big(M_{X_1}(s)\big)^n  (\textrm{since $X_i$'s are i.i.d})
\end{align}
Also,
\begin{align}%\label{}
\nonumber  M_{X_1}(s)&=E[e^{sX_1}]=pe^s+1-p.
\end{align}
Thus, we conclude
\begin{align}%\label{}
\nonumber  M_{X}(s)=\big(pe^s+1-p\big)^n.
\end{align}
</li></ul>
</li></ul></div><br />

<!-- begin example -->
<hr /><span class='example'>Example </span><br />
Using MGF's prove that if $X \sim Binomial(m,p)$ and $Y \sim Binomial(n,p)$ are independent, then $X+Y \sim Binomial(m+n,p)$.
<div class='solvedprob'><ul><li><a><b>Solution</b></a>
<ul><li>
We have
\begin{align}%\label{}
 M_X(s)&= \big(pe^s+1-p\big)^m  \\
 M_Y(s)&=\big(pe^s+1-p\big)^n.
\end{align}
Since $X$ and $Y$ are independent, we conclude that
\begin{align}%\label{}
 M_{X+Y}(s)&=M_X(s)M_Y(s)\\
 &=\big(pe^s+1-p\big)^{m+n},
\end{align}
which is the MGF of a $Binomial(m+n,p)$ random variable. Thus, $X+Y \sim Binomial(m+n,p)$.
</li></ul>
</li></ul></div><hr /><br />
<!-- end example -->



<!-- /Section Content -->

<?php include 'section_footer.php'; ?>
