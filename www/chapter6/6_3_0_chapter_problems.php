<?php
	$section_no			= "6.3.0";
	$section_title	= "Chapter Problems";
	$section_next		= "chapter6/7_1_0_#.php";
	$section_prev		= "chapter6/6_2_6_solved6_2.php";
	include						"../Control/autonumber.php";
	loadHeaders(90);
	include						"section_header.php";
?>  

<span class='problem'>Problem </span><br />
Let $X, Y$ and $Z$ be three jointly continuous random variables with joint PDF
  \begin{equation}
   \nonumber f_{XYZ}(x,y,z) = \left\{
  \begin{array}{l l}
     x+y &  \quad 0 \leq x,y,z \leq 1  \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
  \end{equation}
<ol>
  <li> Find the joint PDF of $X$ and $Y$.</li>
  <li> Find the marginal PDF of $X$.</li>
  <li> Find the conditional PDF of $f_{XY|Z}(x,y|z)$ using
  \begin{equation}\label{}
    f_{XY|Z}(x,y|z)=\frac{f_{XYZ}(x,y,z)}{f_Z(z)}.
  \end{equation}
	</li>
	<li>
  Are $X$ and $Y$ independent of $Z$?
	</li></ol>
<hr /><br />


<span class='problem'>Problem </span><br />
Suppose that $X$, $Y$, and $Z$ are three independent random variables. If $X, Y \sim N(0,1)$ and $Z \sim Exponential(1)$, find
<ol>
   <li> $E[XY|Z=1]$.</li>
    <li> $E[X^2Y^2Z^2|Z=1]$.</li>
</ol>
<hr /><br />


<span class='problem'>Problem </span><br />
Let $X$, $Y$, and $Z$ be three independent $N(1,1)$ random variables. Find $E[XY|Y+Z=1]$.
<hr /><br />


<span class='problem'>Problem </span><br />
Let $X_1$,$X_2$,$\cdots$,$X_n$ be i.i.d random variables, where $X_i \sim Bernoulli(p)$. Define
  \begin{align}%\label{}
    &Y_1 =X_1 X_2,\\
    &Y_2 =X_2 X_3,\\
      & \vdots\\
    &Y_{n-1}=X_{n-1}X_n,\\
    &Y_n=X_n X_1.
  \end{align}
  If $Y=Y_1+Y_2+\cdots+Y_n$, find
<ol>
   <li> $E[Y]$.</li>
    <li> $\textrm{Var}(Y)$.</li>
</ol>
<hr /><br />



<span class='problem'>Problem </span><br />
In this problem, our goal is to find the variance of the hypergeometric distribution. Let's remember the random experiment behind the hypergeometric distribution. You have a bag that contains $b$ blue marbles and $r$ red marbles. You choose $k \leq b+r$ marbles at random (without replacement) and let $X$ be the number of blue marbles in your sample. Then $X \sim Hypergeometric(b,r,k)$. Now let us define the indicator random variables $X_i$ as follows.
  \begin{equation}
  \nonumber X_i = \left\{
  \begin{array}{l l}
     1 & \quad \text{if the $i$th chosen marble is blue} \\
    0  & \quad \text{ otherwise}
  \end{array} \right.
  \end{equation}
  Then, we can write
  \begin{equation}
  \nonumber X=X_1+X_2+\cdots+X_k
  \end{equation}
  Using the above equation, show
<ol>
   <li> $EX=\frac{kb}{b+r}$.</li>
    <li> $\textrm{Var}(X)=\frac{kbr}{(b+r)^2} \frac{b+r-k}{b+r-1} $.</li>
</ol>


<span class='problem'>Problem </span><br />
(MGF of the geometric distribution) If $X \sim Geometric(p)$, find the MGF of $X$.
<hr /><br />


<span class='problem'>Problem </span><br />
If $M_X(s)=\frac{1}{4}+\frac{1}{2}e^s+\frac{1}{4}e^{2s}$, find $EX$ and $\textrm{Var}(X)$.
<hr /><br />


<span class='problem'>Problem </span><br />
ing MGFs show that if $X \sim N(\mu_X,\sigma^2_X)$ and $Y \sim N(\mu_Y,\sigma^2_Y)$ are independent, then
  \begin{align}%\label{}
  \nonumber   X+Y \hspace{5pt} \sim \hspace{5pt} N\bigg(\mu_X+\mu_Y, \sigma_X^2+\sigma_Y^2\bigg).
  \end{align}
<hr /><br />



<span class='problem'>Problem </span><br />
(MGF of the Laplace distribution) Let $X$ be a continuous random variable with the following PDF
  \begin{align}%\label{}
  \nonumber   f_X(x)=\frac{\lambda}{2} e^{-\lambda|x|}.
  \end{align}
  Find the MGF of $X$, $M_X(s)$.
<hr /><br />



<span class='problem'>Problem </span><br />
(MGF of Gamma distribution) Remember that a continuous random variable $X$ is said to have a \textit{Gamma} distribution with parameters $\alpha>0$ and $\lambda>0$, shown as $X \sim Gamma(\alpha, \lambda)$, if its PDF is given by
  \begin{equation}
  \nonumber f_X(x) = \left\{
  \begin{array}{l l}
    \frac{\lambda^{\alpha} x^{\alpha-1} e^{-\lambda x}}{\Gamma(\alpha)}& \quad  x>0\\
    0 & \quad \textrm{ otherwise}
  \end{array} \right.
  \end{equation}
  If $X \sim Gamma(\alpha, \lambda)$, find the MGF of $X$.
  \textit{Hint:} Remember that $\int_0^\infty  x^{\alpha-1} e^{-\lambda x} {\rm d}x=\frac{\Gamma(\alpha)}{\lambda^{\alpha}}, \textrm{for } \alpha, \lambda >0$.
<hr /><br />


<span class='problem'>Problem </span><br />
Using the MGFs show that if $Y=X_1+X_2+\cdots+X_n$, where $X_i$'s are independent $Exponential(\lambda)$ random variables, then  $Y \sim Gamma(n, \lambda)$.
<hr /><br />



<span class='problem'>Problem </span><br />
Let $X$ be a random variable with characteristic function $\phi_X(\omega)$. If $Y=aX+b$, show that
  \begin{align}%\label{}
   \phi_Y(\omega)=e^{j\omega b} \phi_X(a\omega).
  \end{align}
<hr /><br />


<span class='problem'>Problem </span><br />
Let $X$ and $Y$ be two jointly continuous random variables with joint PDF
\begin{align}
  \nonumber f_{X,Y}(x,y) = \left\{
  \begin{array}{l l}
    \frac{1}{2} (3x+y)  &  \quad 0 \leq x,y \leq 1  \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
  \end{equation}
  and let the random vector <b>U</b> be defined as
  \begin{equation}
  \nonumber <b>U</b> = \begin{bmatrix}
       X \\%[5pt]
       Y
  \end{bmatrix}.
\end{align}
<ol>
   <li> Find the mean vector of <b>U</b>, $E\mathbf{U}$.</li>
    <li> Find the correlation matrix of <b>U</b>, $\mathbf{R}_{\mathbf{U}}$.</li>
    <li> Find the covariance matrix of <b>U</b>, $\mathbf{C}_{\mathbf{U}}$.</li>
</ol>

<hr /><br />




<span class='problem'>Problem </span><br />
Let $X \sim Uniform(0,1)$. Suppose that given $X=x$, $Y$ and $Z$ are independent and $Y|X=x \sim Uniform(0,x)$ and $Z|X=x \sim Uniform(0,2x)$. Define the random vector <b>U</b> as
\begin{align}
  \nonumber <b>U</b> = \begin{bmatrix}
       X \\%[5pt]
       Y \\
       Z
  \end{bmatrix}.
\end{align}
<ol>
   <li> Find the PDFs of $Y$ and $Z$.</li>
    <li> Find PDF of <b>U</b>, $f_{\mathbf{U}}(\mathbf{u})$, by using
    \begin{align}%\label{}
     f_{\mathbf{U}}(\mathbf{u})&=f_{XYZ}(x,y,z) \\
     &= f_{X}(x) f_{Y|X}(y|x) f_{Z|X,Y}(z|x,y).
    \end{align}
		</li></ol>
<hr /><br />



<span class='problem'>Problem </span><br />
Let $\mathbf{X}= \begin{bmatrix}
  X_1\\
  X_2
  \end{bmatrix}$ be a normal random vector with the following mean and covariance matrices
\begin{align}
		<b>m</b>
  =  \begin{bmatrix}
       1\\%[5pt]
       2
  \end{bmatrix}, C=\begin{bmatrix}
       4 & 1  \\%[5pt]
       1 & 1
  \end{bmatrix}.
  \end{equation}
  Let also
  \begin{equation}
  <b>A</b>
  =  \begin{bmatrix}
       2 & 1\\%[5pt]
       -1 & 1\\
       1 & 3
  \end{bmatrix}, b=\begin{bmatrix}
       -1  \\%[5pt]
       0 \\
       1
  \end{bmatrix}, Y=\begin{bmatrix}
       Y_1  \\%[5pt]
       Y_2  \\
       Y_3
  \end{bmatrix}
  =AX+b.
\end{align}
<ol>
    <li> Find $P( X_2 &lt; 0)$.</li>
    <li> Find expected value vector of $\mathbf{Y}$, $\mathbf{m_Y}=E\mathbf{Y}$.</li>
    <li> Find the covariance matrix of $\mathbf{Y}$, $\mathbf{C_Y}$.</li>
    <li> Find $P(Y_2 \leq 2)$.</li>
</ol>
<hr /><br />


<span class='problem'>Problem </span><br />
Let $X= \begin{bmatrix}
  X_1\\
  X_2\\
  X_3
  \end{bmatrix}$ be a normal random vector with the following mean and covariance
\begin{align}
  <b>m</b>
  =  \begin{bmatrix}
       1\\%[5pt]
       2 \\
       0
  \end{bmatrix}, C=\begin{bmatrix}
       9 & 1  &-1 \\%[5pt]
       1 & 4  & 2\\
      -1 & 2  & 4
  \end{bmatrix}.
\end{align}
  Find the MGF of $\mathbf{X}$ defined as
  \begin{align}%\label{}
   M_{\mathbf{X}}(s,t,r)=E\left[e^{sX_1+tX_2+rX_3}\right].
  \end{align}
<hr /><br />


<span class='problem'>Problem </span><br />
A system consists of $4$ components in series, so the system works properly if <span style="text-decoration:underline;">all</span> of the components are functional. In other words, the system fails if and only if at least one of its component fails. Suppose that we know that the probability that the component $i$ fails is less than or equal to $p_f=\frac{1}{100}$, for $i=1,2,3,4$. Find an upper bound on the probability that the system fails.
<hr /><br />


<span class='problem'>Problem </span><br />
A sensor network consists of $n$ sensors that are distributed randomly on the unit square. Each node's location is uniform over the unit square and is independent of the locations of the other node. A node is isolated if there are no nodes that is within distance $r$ of that node, where $0&lt;r&lt;1$.
<ol>
        <li> Show that the probability that a given node is isolated is less than or equal to $p_d=(1-\frac{\pi r^2}{4})^{(n-1)}$.</li>
        <li> Using the union bound, find an upper bound on the probability that the sensor network contains at least one isolated node.</li>
</ol>
<hr /><br />


<span class='problem'>Problem </span><br />
Let $X \sim Geometric(p)$. Using Markov's inequality find an upper bound for $P(X \geq a)$, for a positive integer $a$. Compare the upper bound with the real value of $P(X \geq a)$.
<hr /><br />


<span class='problem'>Problem </span><br />
in $Geometric(p)$. Using Chebyshev&#39;s inequality find an upper bound for $P(|X-EX| \geq b)$.
<hr /><br />


<span class='problem'>Problem </span><br />
(Cantelli's inequality [<a href="http://probabilitycourse.com/bibliography.html#wiki-chebyshev">15</a>]) Let $X$ be a random variable with $EX=0$ and $\textrm{Var}(X)=\sigma^2$. We would like to prove that for any $a>0$, we have
  \begin{equation}%\label{}
    P(X \geq a) \leq \frac{\sigma^2}{\sigma^2+a^2}.
  \end{equation}
  This inequality is sometimes called the one-sided Chebyshev inequality.

  <i>Hint:</i> One way to show this is to use $P(X \geq a)=P(X+c \geq a+c)$ for any constant $c \in \mathbb{R}$.
<hr /><br />


<span class='problem'>Problem </span><br />
The number of customers visiting a store during a day is a random variable with mean $EX=100$ and variance $Var(X)=225$.
<ol>
   <li> Using the Chebyshev's inequality, find an upper bound for having more than $120$ or less than $80$ customers in a day. That is, find an upper bound on
    \begin{equation}%\label{}
    P(X \leq 80    \textrm{ or }  X \geq 120).
   \end{equation}
	</li><li>
      Using the one-sided Chebyshev inequality (Problem 21), find an upper bound for having more than $120$  customers in a day.
		</li></ol>
<hr /><br />



<span class='problem'>Problem </span><br />
Let $X_i$ be i.i.d and $X_i \sim Exponential(\lambda)$. Using Chernoff bounds find an upper bound for $P(X_1+X_2+\cdots+X_n \geq a)$, where $a>\frac{n}{\lambda}$. Show that the bound goes to zero exponentially fast as a function of $n$.
<hr /><br />


<span class='problem'>Problem </span><br />
(Minkowski's inequality [<a href="http://probabilitycourse.com/bibliography.html#wiki-minowski">16</a>]) Prove for two random variables $X$ and $Y$ with finite moments, and $1 \leq p &lt; \infty$, we have
  \begin{align}
  E \big[\big{|}X+Y\big{|}^p \big]^{\frac{1}{p}} \leq E\big[|X|^p \big]^{\frac{1}{p}}+E\big[|Y|^p \big]^{\frac{1}{p}}.
  \end{align}
  <i>Hint:</i> Note that
  \begin{align}
   \big{|}X+Y\big{|}^p&= \big{|}X+Y\big{|}^{p-1} \big{|}X+Y\big{|} \\
   & \leq \big{|}X+Y\big{|}^{p-1} \big(|X|+|Y| \big)\\
   &\leq \big{|}X+Y\big{|}^{p-1} |X|+  \big{|}X+Y\big{|}^{p-1} |Y|.
  \end{align}
  Therefore
  \begin{align}
   E\big{|}X+Y\big{|}^p\leq E \big[\big{|}X+Y\big{|}^{p-1} |X| \big]+ E \big[\big{|}X+Y\big{|}^{p-1} |Y| \big].
  \end{align}
  Now, apply Holder&#39;s Ineqality.
<hr /><br />


<span class='problem'>Problem </span><br />
Let $X$ be a positive random variable with $EX=10$. What can you say about the following quantities?
<ol>
    <li> $E[X-X^3]$</li>
    <li> $E[X\ln \sqrt{X}]$</li>
    <li> $E\big[|2-X|\big]$</li>
</ol>
<hr /><br />


<span class='problem'>Problem </span><br />
Let $X$ be a random variable with $EX=1$ and $R_X=(0,2)$. If $Y=X^3-6X^2$, show that $EY \leq -5$.

<?php include "section_footer.php"; ?>
