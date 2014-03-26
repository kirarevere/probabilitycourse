<?php
	$section_no			=	"5.3.2";
	$section_title	=	"Bivariate Normal Distribution";
	$section_prev		=	"chapter5/5_3_1_covariance_correlation.php";
	$section_next		=	"chapter5/5_3_3_solved_probs.php";
	include						"../Control/autonumber.php";
	loadHeaders(72);
	include						"section_headers.php";
?>

<!-- Section Content -->
Remember that the normal distribution is very important in probability theory and it shows up in many different applications. We have discussed a single normal random variable previously; we will now talk about two or more normal random variables. We recently saw in Theorem 5.2 that the sum of two independent normal random variables is also normal. However, if the two normal random variables are not independent, then their sum is not necessarily normal. Here is a simple counter example:

<!-- Example -->
<hr /><span class='example'>Example </span><br />
Let $X \sim N(0,1)$ and $W \sim Bernoulli\left(\frac{1}{2}\right)$ be independent random variables. Define the random variable $Y$ as a function of $X$ and $W$:
\begin{equation}
 \nonumber Y = h(X,W)=\left\{
  \begin{array}{l l}
    X  &  \quad  \textrm{if }W=0 \\
      &  \quad   \\
   -X &  \quad \textrm{if }W=1
  \end{array} \right.
\end{equation}
Find the PDF of $Y$ and $X+Y$.
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
Note that by symmetry of $N(0,1)$ around zero, $-X$ is also $N(0,1)$. In particular, we can write
\begin{align}%\label{}
\no  F_Y(y) &=P(Y \leq y)\\
\no  &=P(Y \leq y | W=0) P(W=0)+P(Y \leq y | W=1) P(W=1)\\
\no  &=\frac{1}{2} P(X \leq y | W=0) +\frac{1}{2} P(-X \leq y | W=1) \\
\no  &=\frac{1}{2} P(X \leq y) +\frac{1}{2} P(-X \leq y) \hsb \textrm{(since $X$ and $W$ are independent)}\\
\no  &=\frac{1}{2} \Phi (y)  +\frac{1}{2} \Phi (y) \hsb (\textrm{since $X$ and $-X$ are }N(0,1))\\
\no &=\Phi (y).
\end{align}
Thus, $Y \sim N(0,1)$. Now, note that
\begin{equation}
 \nonumber Z=X+Y = \left\{
  \begin{array}{l l}
    2X  &  \quad  \textrm{with probability }\frac{1}{2} \\
      &  \quad   \\
   0 &  \quad \textrm{with probability }\frac{1}{2}
  \end{array} \right.
\end{equation}
Thus, $Z$ is a mixed random variable and its PDF is given by
\begin{align}%\label{}
\nonumber  f_Z(z)&=\frac{1}{2} \delta(z)+\frac{1}{2} (\textrm{PDF of $2X$ at $z$}) \\
\nonumber  f_Z(z)&=\frac{1}{2} \delta(z)+\frac{1}{2} (\textrm{PDF of a $N(0,4)$ at $z$}) \\
\nonumber  &=\frac{1}{2} \delta(z)+\frac{1}{4\sqrt{2 \pi}}e^{-\frac{z^2}{8}}.
\end{align}
In particular, note that  $X$ and $Y$ are both normal but their sum is not. Now, we are ready to define \textbf{bivariate normal} or \textbf{jointly normal} random variables.
</li></ul>
</li></ul></div><hr /><br />
<!-- /Example -->

<div class="cbox">
<span class="definition">Definition </span><br />
Two random variables $X$ and $Y$ are said to be <b>bivariate normal</b>, or <b>jointly normal</b>, if $aX+bY$ has a normal distribution for all $a,b \in \mathbb{R}$.
</div><br />
In the above definition, if we let $a=b=0$, then $aX+bY=0$. We agree that the constant zero is a normal random variable with mean and variance $0$. From the above definition, we can immediately conclude the following facts:
  - If $X$ and $Y$ are bivariate normal, then by letting $a=1$, $b=0$, we conclude $X$ must be normal.
  - If $X$ and $Y$ are bivariate normal, then by letting $a=0$, $b=1$, we conclude $Y$ must be normal.
  - If $X \sim N(\mu_X,\sigma^2_X)$ and $Y \sim N(\mu_Y,\sigma^2_Y)$ are independent, then they are jointly normal (Theorem 5.2).
  - If $X \sim N(\mu_X,\sigma^2_X)$ and $Y \sim N(\mu_Y,\sigma^2_Y)$ are jointly normal, then $X+Y \hspace{5pt} \sim \hspace{5pt} N\bigg(\mu_X+\mu_Y,\sigma^2_X+\sigma^2_Y+2 \rho(X,Y) \sigma_X \sigma_Y\bigg)$ (Equation \ref{eq:var-aX+bY}).
\end{itemize}
But how can we obtain the joint normal PDF in general? Can we provide a simple way to generate jointly normal random variables? The basic idea is that we can start from several independent random variables and by considering their linear combinations, we can obtain bivariate normal random variables. Similar to our discussion on normal random variables, we start by introducing the <b>standard bivariate normal distribution</b> and then obtain the general case from the standard one. The following example gives the idea.

<!-- Example -->
<hr /><span class="example">Example </span><br />
Let $Z_1$ and $Z_2$ be two independent $N(0,1)$ random variables. Define
\begin{align}%\label{}
\nonumber X&=Z_1  \\
\nonumber Y&=\rho Z_1 +\sqrt{1-\rho^2} Z_2,
\end{align}
where $\rho$ is a real number in $(-1,1)$.
\begin{enumerate}[(a)]
  \item Show that $X$ and $Y$ are bivariate normal.
  \item Find the joint PDF of $X$ and $Y$.
  \item Find $\rho(X,Y)$.
\end{enumerate}
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
First, note that since $Z_1$ and $Z_2$ are normal and independent, they are jointly normal, with the joint PDF
\begin{align}%\label{}
\no  f_{Z_1Z_2}(z_1,z_2)&=f_{Z_1}(z_1)f_{Z_2}(z_2)\\
\no  &=\frac{1}{2 \pi} \exp \bigg\{-\frac{1}{2} \big[ z_1^2+z^2_2\big] \bigg\}.
\end{align}

<ol type="a">
  <li> We need to show $aX+bY$ is normal for all $a,b \in \mathbb{R}$. We have
  \begin{align}
    \nonumber aX+bY&=aZ_1+b(\rho Z_1 +\sqrt{1-\rho^2} Z_2)\\
    \nonumber &=(a+b \rho)Z_1+b\sqrt{1-\rho^2} Z_2,
  \end{align}
  which is a linear combination of $Z_1$ and $Z_2$ and thus it is normal.
	</li>
<li>
   We can use the method of transformations (Theorem 5.1) to find the joint PDF of $X$ and $Y$. The inverse transformation is given by

      \begin{align}%\label{}
         \nonumber Z_1&=X=h_1(X,Y).  \\
         \nonumber Z_2&=-\frac{\rho}{\sqrt{1-\rho^2}} X+\frac{1}{\sqrt{1-\rho^2}}Y=h_2(X,Y).
      \end{align}

  We have
  \begin{align}
  \nonumber f_{XY}(z_1,z_2)&=f_{Z_1Z_2}(h_1(x,y),h_2(x,y)) |J|\\
  \nonumber &=f_{Z_1Z_2}(x,-\frac{\rho}{\sqrt{1-\rho^2}} y+\frac{1}{\sqrt{1-\rho^2}}y) |J|,
  \end{align}
  where
 \begin{align}
  \nonumber J=   \det  \begin{bmatrix}
                        \frac{\partial h_1}{\partial x} & \frac{\partial h_1}{\partial y}  \\
                         &  \\
                        \frac{\partial h_2}{\partial x}  & \frac{\partial h_2}{\partial y}  \\
                      \end{bmatrix}
                      =\det  \begin{bmatrix}
                        1 & 0  \\
                         &  \\
                        -\frac{\rho}{\sqrt{1-\rho^2}}  &  \frac{1}{\sqrt{1-\rho^2}} \\
                      \end{bmatrix}
                      =\frac{1}{\sqrt{1-\rho^2}}.
  \end{align}
  Thus, we conclude that
  \begin{align}
  \nonumber f_{XY}(x,y)&=f_{Z_1Z_2}(x,-\frac{\rho}{\sqrt{1-\rho^2}} x+\frac{1}{\sqrt{1-\rho^2}}y) |J|\\
  \nonumber &=\frac{1}{2 \pi} \exp \left\{-\frac{1}{2} \bigg[ x^2+\frac{1}{1-\rho^2}(-\rho x+y)^2 \bigg] \right\} \cdot \frac{1}{\sqrt{1-\rho^2}}\\
  \nonumber &=\frac{1}{2 \pi \sqrt{1-\rho^2}} \exp \bigg\{-\frac{1}{2 (1-\rho^2)} \big[ x^2-2\rho x y+y^2 \big] \bigg\}.
	</li>

  <li> To find $\rho(X,Y)$, first note
  \begin{align}
  \no &\var(X)=\var(Z_1)=1,\\
  \no &\var(Y)=\rho^2 \var(Z_1)+(1-\rho^2) \var(Z_2)=1.
  \end{align}
  Therefore,
  \begin{align}
  \nonumber \rho(X,Y) &=\cov(X,Y)\\
  \nonumber &=\cov(Z_1,\rho Z_1 +\sqrt{1-\rho^2} Z_2)\\
  \nonumber &=\rho \cov(Z_1,Z_1)+\sqrt{1-\rho^2} \cov(Z_1,Z_2)\\
  \nonumber &=\rho \cdot 1+ \sqrt{1-\rho^2} \cdot 0\\
  \nonumber &=\rho.
  \end{align}

  \end{align}
	</li>
</ol>
</li></ul>
</li></ul></div><hr /><br />
<!-- /Example -->

We call the above joint distribution for $X$ and $Y$ \textbf{the standard bivariate normal distribution with correlation coefficient} $\mathbf{\rho}$. It is the distribution for two jointly normal random variables when their variances are equal to one and their correlation coefficient is $\rho$.

<div class="cbox">
Two random variables $X$ and $Y$ are said to have the <b>standard bivariate normal distribution with correlation coefficient</b> $\mathbf{\rho}$ if their joint PDF is given by
\begin{align}
  \nonumber f_{XY}(x,y)=\frac{1}{2 \pi \sqrt{1-\rho^2}} \exp \{-\frac{1}{2 (1-\rho^2)} \big[ x^2-2\rho x y+y^2 \big] \},
  \end{align}
where $\rho \in (-1,1)$. If $\rho=0$, then we just say $X$ and $Y$ have the standard bivariate normal distribution.
</div><br />

Now, if you want two jointly normal random variables $X$ and $Y$ such that $X \sim N(\mu_X,\sigma^2_X)$, $Y \sim N(\mu_Y,\sigma^2_Y)$, and $\rho(X,Y)=\rho$, you can start with two independent $N(0,1)$ random variables, $Z_1$ and $Z_2$, and define

\begin{align} \label{eq:bivariate-conv}
 \left\{
  \begin{array}{l l}
  X&=\sigma_X Z_1+\mu_X  \\
  Y&=\sigma_Y (\rho Z_1 +\sqrt{1-\rho^2} Z_2)+\mu_Y
  \end{array} \right.
\end{align}

We can find the joint PDF of $X$ and $Y$ as above. While the joint PDF has a big formula, we usually do not need to use the formula itself. Instead, we usually work with properties of jointly normal random variables such as their mean, variance, and covariance.
<p>
Definition 5.3 and 5.4 are equivalent in the sense that, if X and Y are jointly normal based on one definition,
they are jointly normal based on the other definition, too. The proof of their equivalence can be concluded
from Problem 10 in Section 6.1.6. In that problem, we show that the two definitions result in the same moment
generating functions.
</p>
<!-- /Section Content -->

<div class="cbox">
<span class="definition">Definition </span><br />
Two random variables $X$ and $Y$ are said to have a <b>bivariate normal distribution</b> with parameters $\mu_X$, $\sigma^2_X$, $\mu_Y$, $\sigma^2_Y$, and $\rho$, if their joint PDF is given by
\begin{align} \label{eq:bivariate-normal}
  \nonumber f_{XY}(x,y)&=\frac{1}{2 \pi \sigma_X \sigma_Y \sqrt{1-\rho^2}} \hs \cdot\\
  & \exp \left\{-\frac{1}{2 (1-\rho^2)}\bigg[\bigg(\frac{x-\mu_X}{\sigma_X}\bigg)^2
   +\bigg(\frac{y-\mu_Y}{\sigma_Y}\bigg)^2-2\rho \frac{(x-\mu_X)(y-\mu_Y)}{\sigma_X \sigma_Y} \bigg] \right\}
  \end{align}
where $\mu_X,\mu_Y \in \mathbb{R}$,  $\sigma_X,\sigma_Y>0$ and $\rho \in (-1,1)$ are all constants.
</div><br />

In the above discussion, we introduced bivariate normal distributions by starting from independent normal random variables, $Z_1$ and $Z_2$. Another approach would have been to define the bivariate normal distribution using the joint PDF. The two definition are equivalent mathematically. In particular, we can state the following theorem.

<span class="theorem">Theorem </span><br />
Let $X$ and $Y$ be two bivariate normal random variables, i.e., their joint PDF is given by Equation 5.24. Then there exist independent standard normal random variables $Z_1$ and $Z_2$ such that
\begin{align}
 \nonumber \left\{
  \begin{array}{l l}
  X&=\sigma_X Z_1+\mu_X  \\
  Y&=\sigma_Y (\rho Z_1 +\sqrt{1-\rho^2} Z_2)+\mu_Y
  \end{array} \right.
\end{align}
<hr /><br />

<i>Proof. </i>(Sketch)
To prove the theorem, define
\begin{align}
 \nonumber \left\{
  \begin{array}{l l}
  Z_1&=\frac{X-\mu_X}{\sigma_X} \\
  Z_2&=-\frac{\rho}{\sqrt{1-\rho^2}} \frac{X-\mu_X}{\sigma_X}+\frac{1}{\sqrt{1-\rho^2}}\frac{Y-\mu_Y}{\sigma_Y}
  \end{array} \right.
\end{align}
Now find the joint PDF of $Z_1$ and $Z_2$ using the method of transformations (Theorem 5.1), similar to what we did above. You will find out that $Z_1$ and $Z_2$ are independent and standard normal and by definition satisfy the equations of Theorem 5.3.

The reason we started our discussion on bivariate normal random variables from $Z_1$ and $Z_2$ is three-fold. First, it is more convenient and insightful than the joint PDF formula. Second, sometimes the construction using $Z_1$ and $Z_2$ can be used to solve problems regarding bivariate normal distributions. Third, this method gives us a way to generate samples from the bivariate normal distribution using a computer program. Since most computing packages have a built-in command for independent normal random variable generation, we can simply use this command to generate bivariate normal variables using Equation 5.23.

<!-- Example -->
<hr /><span class="example">Example </span><br />
Let $X$ and $Y$ be jointly normal random variables with parameters $\mu_X$, $\sigma^2_X$, $\mu_Y$, $\sigma^2_Y$, and $\rho$. Find the conditional distribution of $Y$ given $X=x$.
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
One way to solve this problem is by using the joint PDF formula (Equation 5.24). In particular, since $X \sim N(\mu_X,\sigma^2_X)$, we can use
\begin{align}%\label{}
\nonumber  f_{Y|X}(y|x)=\frac{f_{XY}(x,y)}{f_X(x)}.
\end{align}
Another way to solve this problem is to use Theorem 5.3. We can write
\begin{align}
 \nonumber \left\{
  \begin{array}{l l}
  X&=\sigma_X Z_1+\mu_X  \\
  Y&=\sigma_Y (\rho Z_1 +\sqrt{1-\rho^2} Z_2)+\mu_Y
  \end{array} \right.
\end{align}
Thus, given $X=x$, we have
\begin{align}
 \nonumber Z_1=\frac{x-\mu_X}{\sigma_X},
\end{align}
and
\begin{align}
 \nonumber  Y&=\sigma_Y \rho \frac{x-\mu_X}{\sigma_X}  +\sigma_Y \sqrt{1-\rho^2} Z_2+\mu_Y.
\end{align}
Since $Z_1$ and $Z_2$ are independent, knowing $Z_1$ does not provide any information on $Z_2$. We have shown that given $X=x$, $Y$ is a linear function of $Z_2$, thus it is normal. In particular
\begin{align}%\label{}
\nonumber  E[Y|X=x]&= \sigma_Y \rho \frac{x-\mu_X}{\sigma_X}  +\sigma_Y \sqrt{1-\rho^2} E[Z_2]+\mu_Y\\
\nonumber  &=\mu_Y+ \rho \sigma_Y \frac{x-\mu_X}{\sigma_X}\\
\nonumber  \var(Y|X=x)&= \sigma^2_Y (1-\rho^2) \var(Z_2)\\
\nonumber  &=(1-\rho^2)\sigma^2_Y.
\end{align}
We conclude that given $X=x$, $Y$ is normally distributed with mean $\mu_Y$+ $\rho \sigma_Y \frac{x-\mu_X}{\sigma_X}$ and variance $(1-\rho^2)\sigma^2_Y$.
</li></ul>
</li></ul></div><hr /><br />
<!-- /Example -->

<div class="cbox">
<span class="theorem">Theorem </span><br />
  Suppose $X$ and $Y$ are jointly normal random variables with parameters $\mu_X$, $\sigma^2_X$, $\mu_Y$, $\sigma^2_Y$, and $\rho$. Then, given $X=x$, $Y$ is normally distributed with
 \begin{align}%\label{}
\nonumber  &E[Y|X=x]=\mu_Y+ \rho \sigma_Y \frac{x-\mu_X}{\sigma_X}\\
\nonumber  &\var(Y|X=x)=(1-\rho^2)\sigma^2_Y.
\end{align}
</div><br />

<!-- Example -->
<hr /><span class="example">Example </span><br />
Let $X$ and $Y$ be jointly normal random variables with parameters $\mu_X=1$, $\sigma^2_X=1$, $\mu_Y=0$, $\sigma^2_Y=4$, and $\rho=\frac{1}{2}$.
<ol type="a">
  <li> Find $P(2X+Y \leq 3)$.</li>
  <li> Find $\cov(X+Y,2X-Y)$.</li>
  <li> Find $P(Y>1|X=2)$.</li>
</ol>
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
<ol type="a">
  <li> Since $X$ and $Y$ are jointly normal, the random variable $V=2X+Y$ is normal. We have
  \begin{align}%\label{}
  \nonumber &EV=2EX+EY=2
  \end{align}
  \begin{align}
  \nonumber \var(V)&=4\var(X)+\var(Y)+4 \cov(X,Y) \\
  \nonumber &=4+4+4 \sigma_X \sigma_Y \rho(X,Y)\\
  \nonumber &=8+4 \times 1\times2\times\frac{1}{2}\\
  \nonumber &=12.
  \end{align}
  Thus, $V \sim N(2,12)$. Therefore,
  \begin{align}%\label{}
  \nonumber P(V \leq 3)=\Phi\left(\frac{3-2}{\sqrt{12}}\right)=\Phi\left(\frac{1}{\sqrt{12}}\right)=0.6136.
  \end{align}
	</li>


  <li> Note that $\cov(X,Y)=\sigma_X \sigma_Y \rho(X,Y)=1$. We have
  \begin{align}
  \nonumber \cov(X+Y,2X-Y)&=2\cov(X,X)-\cov(X,Y)+2\cov(Y,X)-\cov(Y,Y) \\
  \nonumber &=2-1+2-4=-1.
  \end{align}
	</li>
	<li>
 Using Theorem 5.4, we conclude that given $X=2$, $Y$ is normally distributed with
  \begin{align}%\label{}
  \nonumber  &E[Y|X=2]=\mu_Y+ \rho \sigma_Y \frac{2-\mu_X}{\sigma_X}=1\\
  \nonumber  &\var(Y|X=x)=(1-\rho^2)\sigma^2_Y=3.
  \end{align}
  Thus
  \begin{align}%\label{}
  \nonumber  &P(Y>1|X=2)=1-\Phi\left(\frac{1-1}{\sqrt{3}}\right)=\frac{1}{2}.
  \end{align}

</li></ol>
</li></ul>
</li></ul></div><hr /><br />
<!-- /Example -->

Remember that if two random variables $X$ and $Y$ are independent, then they are uncorrelated, i.e., $\cov(X,Y)=0$. However, the converse is not true in general. In the case of jointly normal random variables, the converse is true. Thus, for jointly normal random variables being independent and being uncorrelated are equivalent.

<div class="cbox">
<span class="theorem">Theorem </span><br />
If $X$ and $Y$ are bivariate normal and uncorrelated, then they are independent.
</div><br />

<i>Proof. </i>Since $X$ and $Y$ are uncorrelated, we have $\rho(X,Y)=0$. By Theorem 5.4, given $X=x$, $Y$ is normally distributed with
 \begin{align}%\label{}
\nonumber  &E[Y|X=x]=\mu_Y+ \rho \sigma_Y \frac{x-\mu_X}{\sigma_X}=\mu_Y\\
\nonumber  &\var(Y|X=x)=(1-\rho^2)\sigma^2_Y=\sigma^2_Y.
\end{align}
Thus $f_{Y|X}(y|x)=f_Y(y)$ for all $x,y \in \mathbb{R}$. Thus $X$ and $Y$ are independent. Another way to prove the theorem is to let $\rho=0$ in Equation 5.24 and observe that $f_{XY}(x,y)=f_X(x)f_Y(y)$.

<?php include				"section_footer.php"; ?>
