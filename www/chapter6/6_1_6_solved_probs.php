<?php
	$section_no			= "6.1.6";
	$section_title	= "Solved Problems";
	$section_prev		= "chapter6/6_1_5_random_vectors.php";
	$section_next		= "chapter6/6_2_0_#.php";
	include						"../Control/autonumber.php";
	loadHeaders(81);
	include						"section_header.php";
?>

<!-- section content -->
<span class='example'>Example </span><br />
   Let $X, Y$ and $Z$ be three jointly continuous random variables with joint PDF
  \begin{equation}
  \nonumber f_{XYZ}(x,y,z) = \left\{
  \begin{array}{l l}
     \frac{1}{3}(x+2y+3z) &  \quad 0 \leq x,y,z \leq 1  \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
  \end{equation}
  Find the joint PDF of $X$ and $Y$, $f_{XY}(x,y)$.

<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
  \begin{align}
  \nonumber f_{XY}(x,y) &= \int_{-\infty}^{\infty} f_{XYZ}(x,y,z)dz  \\
  &=\int_{0}^{1} \frac{1}{3}(x+2y+3z)dz\\
  &=\frac{1}{3}\left[(x+2y)z+\frac{3}{2}z^2\right]_0^1\\
  &=\frac{1}{3}\left(x+2y+\frac{3}{2}\right), & \mbox{for} \quad  0 \leq x,y \leq 1.
  \end{align}

  Thus,

  \begin{equation}
   \nonumber  \quad f_{XY}(x,y) =  \left\{ \begin{array}{l l}
     \frac{1}{3}\left(x+2y+\frac{3}{2}\right) &  \quad 0 \leq x \leq 1 ,0 \leq y \leq 1  \\
      &  \quad   \\
    0 &  \quad \text{otherwise} \end{array}\right.
      \end{equation}
</li></ul>
</li></ul></div><hr /><br />

<span class='example'>Example </span><br />
   Let $X, Y$ and $Z$ be three independent random variables with $X \sim N(\mu, \sigma^2)$, and $Y,Z \sim Uniform(0,2)$. We also know that
  \begin{align}%\label{}
  &E[X^2Y+XYZ]=13 \\
  &E[XY^2+ZX^2]=14.
  \end{align}
  Find $\mu$ and $\sigma$.
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>

  \begin{equation}
  X, Y, \, \text{and} \, Z \, are \, \textrm{ independent } \Rightarrow
   \left\{ \begin{array}{c}
      EX^2 \cdot EY+EX \cdot EY \cdot EZ=13  \\
     % &  \quad   \\
      EX \cdot EY^2+EZ \cdot EX^2=14    \end{array} \right.
  \end{equation}
  Since $Y,Z \sim Uniform(0,2)$, we conclude
  \begin{equation}
  \quad EY=EZ=1 ; \, \textrm{Var}(Y)=\textrm{Var}(Z)=\frac{(2-0)^2}{12}=\frac{1}{3}.
  \end{equation}
  Therefore,
  \begin{equation}
  EY^2=\frac{1}{3}+1=\frac{4}{3}.
  \end{equation}
  Thus,
  \begin{equation}
    \left\{ \begin{array}{c}
      EX^2+EX=13  \\
     % &  \quad   \\
      \frac{4}{3}EX+EX^2=14    \end{array} \right.
  \end{equation}

We conclude $EX=3$, \,$EX^2=10$. Therefore,
\begin{equation}
      \left\{ \begin{array}{c}
      \mu=3  \\
     % &  \quad   \\
      \mu^2+\sigma^2=10 \end{array} \right.
\end{equation}
So, we obtain $\mu=3$,\,$\sigma=1$.
</li></ul>
</li></ul></div><hr /><br />
<span class='example'>Example </span><br />

  Let $X_1$, $X_2$, and $X_3$ be three i.i.d $Bernoulli(p)$ random variables and
  \begin{align}
  &Y_1=\max(X_1,X_2) \\
  &Y_2=\max(X_1,X_3) \\
  &Y_3=\max(X_2,X_3) \\
  &Y=Y_1+Y_2+Y_3.
  \end{align}
  Find $EY$ and $\textrm{Var}(Y)$.

<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>

   We have
  \begin{align}
  EY=EY_1+EY_2+EY_3=3EY_1, \hsb \textrm{by symmetry.}
  \end{align}
  Also,
  \begin{align}
  \textrm{Var}(Y)&=\textrm{Var}(Y_1)+\textrm{Var}(Y_2)+\textrm{Var}(Y_3)+2\cov(Y_1,Y_2)+2\cov(Y_1,Y_3)+2\cov(Y_2,Y_3)
  \\ \quad \\
  &=3\textrm{Var}(Y_1)+6\cov(Y_1,Y_2), \hsb \textrm{by symmetry.}
  \end{align}
  Note that $Y_i$'s are also Bernoulli random variables (but they are not independent). In particular, we have
  \begin{align}
  P(Y_1=1)&=P\big((X_1=1) \textrm{ or } (X_2=1)\big)\\
  &=P(X_1=1)+P(X_2=1)-P(X_1=1,X_2=1) \hsa \textrm{(comma means "and")}\\
  &=2p-p^2.
  \end{align}
  Thus, $Y_1 \sim Bernoulli(2p-p^2)$, and we obtain
  \begin{align}
  &EY_1=2p-p^2=p(2-p)\\
  &\textrm{Var}(Y_1)=(2p-p^2)(1-2p+p^2)=p(2-p)(1-p)^2.
  \end{align}
  It remains to find $\cov(Y_1,Y_2)$. We can write
  \begin{align}
  \cov(Y_1,Y_2)&=E[Y_1 Y_2]-E[Y_1]E[Y_2]\\
  &=E[Y_1 Y_2]-p^2(2-p)^2.
  \end{align}
  Note that $Y_1Y_2$ is also a Bernoulli random variable. We have
  \begin{align}
  E[Y_1 Y_2]&=P\big(Y_1=1,Y_2=1\big)\\
  &=P\bigg((X_1=1) \textrm{ or } \big(X_2=1,X_3=1\big)\bigg)\\
  &=P(X_1=1) + P\big(X_2=1,X_3=1\big)-P\big(X_1=1,X_2=1,X_3=1 \big)\\
  &=p+p^2-p^3.
  \end{align}
  Thus, we obtain
  \begin{align}
  \cov(Y_1,Y_2)&=E[Y_1 Y_2]-p^2(2-p)^2\\
  &=p+p^2-p^3-p^2(2-p)^2.
 \end{align}
  Finally, we obtain
  \begin{align}
  EY=3EY_1=3p(2-p).
  \end{align}
  Also,
  \begin{align}
  \textrm{Var}(Y)&=3\textrm{Var}(Y_1)+6\cov(Y_1,Y_2)\\
  &=3p(2-p)(1-p)^2+6(p+p^2-p^3-p^2(2-p)^2).
  \end{align}
</li></ul>
</li></ul></div><hr /><br />

<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>

   Let $M_X(s)$ be finite for $s \in [-c,c]$, where $c>0$. Show that MGF of $Y=aX+b$ is given by
  \begin{equation}%\label{}
    M_Y(s)=e^{sb}M_X(as),
  \end{equation}
  and it is finite in $\left[-\frac{c}{|a|},\frac{c}{|a|}\right]$.
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>

  We have
     \begin{align}%\label{}
       M_{Y}(s)&=E[e^{sY}] \\
        &=E[e^{saX} e^{sb}]\\
       &=e^{sb}E[e^{(sa)X}]\\
       &=e^{sb}M_{X}(as).
     \end{align}
     Also, since $M_X(s)$ is finite for $s \in [-c,c]$, $M_X(as)$ is finite for $s \in \left[-\frac{c}{|a|},\frac{c}{|a|} \right]$.
</li></ul>
</li></ul></div><hr /><br />

<span class='example'>Example </span><br />

   Let $Z \sim N(0,1)$ Find the MGF of $Z$. Extend your result to $X \sim N(\mu,\sigma)$.
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>

   We have
  \begin{align}
    M_Z(s) &=E[e^{sZ}]  \\
    &=\frac{1}{\sqrt{2\pi}} \int_{-\infty}^{\infty} e^{sx} e^{-\frac{x^2}{2}}dx\\
    &=\frac{1}{\sqrt{2\pi}} \int_{-\infty}^{\infty} e^{\frac{s^2}{2}} e^{-\frac{(x-s)^2}{2}}dx\\
    &=e^{\frac{s^2}{2}} \frac{1}{\sqrt{2\pi}} \int_{-\infty}^{\infty} e^{-\frac{(x-s)^2}{2}}dx\\
    &=e^{\frac{s^2}{2}} \hsb \hsb \textrm{(PDF of normal integrates to $1$)}.
  \end{align}
  Using problem \ref{prob:MGFaXb}, we obtain
 \begin{align}
    M_X(s)=e^{s \mu + \frac{\sigma^2 s^2}{2}}, \hsb \hsb \textrm{for all} \quad s\in \mathbb{R}.
  \end{align}
</li></ul>
</li></ul></div><hr /><br />

<span class='example'>Example </span><br />

  Let $Y=X_1+X_2+X_3+...+X_n$, where $X_i$ are independent and $X_i \sim Poisson(\lambda_i)$. Find the distribution of $Y$.
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>

  We have
  \begin{equation}%\label{}
    M_{X_i}(s)=e^{\lambda_i(e^s-1)}, \hsa \textrm{ for all } s\in \mathbb{R}.
  \end{equation}
  Thus,
  \begin{align}%\label{}
    M_{Y}(s)&=\prod_{i=1}^{n}e^{\lambda_i(e^s-1)}\\
    &=e^{(\sum_{i=1}^n \lambda_i) (e^s-1)}, \hsa \textrm{ for all } s\in \mathbb{R}.
  \end{align}
  which is the MGF of a Poisson random variable with parameter $\lambda=\sum_{i=1}^n \lambda_i$, thus
  \begin{equation}%\label{}
    Y \sim Poisson(\sum_{i=1}^n \lambda_i).
  \end{equation}
</li></ul>
</li></ul></div><hr /><br />

<span class='example'>Example </span><br />

  <b>Probability Generating Functions (PGFs):</b> For many important discrete random variables, the range is a subset of $\{0,1$,$2,$...$\}$. For these random variables it is usually more useful to work with <i>probability generating functions (PGF)s</i>. defined as
      \begin{align}
        G_X(z)=E[Z^X]=\sum_{n=0}^{\infty} P(X=n)Z^n,
      \end{align}
      for all $Z \in \mathbb{R}$ that $G_X(Z)$ is finite.
<ol>
   <li>Show that $G_X(Z)$ is always finite for $|Z| \leq 1$.
      </li><li>   Show that if $X$ and $Y$ are independent, then
        \begin{equation}%\label{}
          G_{X+Y}(Z)=G_X(z) G_Y(z).
        \end{equation}
			</li><li>
         Show that
        \begin{equation}%\label{}
          \frac{1}{k!} \frac{d^k G_X(z)}{dz^k} \bigg{|}_{z=0}=P(X=k).
        \end{equation}
			</li><li>
         Show that
        \begin{equation}%\label{}
          \frac{d^k G_X(z)}{dz^k} \bigg{|}_{z=1}=E[X(X-1)(X-2)...(X-k+1)].
        \end{equation}
			</li></ol>

<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>


		<ol>
    <li> If $|Z| \leq 1$, then $Z^n \leq  |Z| \leq 1$, so we have
    \begin{align}
        G_X(z)&=\sum_{n=0}^{\infty} P(X=n)Z^n\\
        &\leq \sum_{n=0}^{\infty} P(X=n)=1.
    \end{align}
		</li><li>
    If $X$ and $Y$ are independent, then
        \begin{align}%\label{}
          G_{X+Y}(Z)&=E[Z^{X+Y}]\\
          &=E[Z^X Z^Y]\\
          &=E[Z^X] E[Z^Y] \hsb \textrm{since $X$ and $Y$ are independent}\\
          &=G_X(Z) G_Y(Z).
        \end{align}
		</li><li>
         By differentiation we obtain
         \begin{equation}%\label{}
          \frac{d^k G_X(z)}{dz^k}=\sum_{n=k}^{\infty} n(n-1)(n-2)...(n-k+1)P(X=n)Z^{n-k}.
        \end{equation}
        Thus,
         \begin{equation}%\label{}
          \frac{d^k G_X(z)}{dz^k}=k! P(X=k)+\sum_{n=k+1}^{\infty} n(n-1)(n-2)...(n-k+1)P(X=n)Z^{n-k}.
        \end{equation}
        Thus,
        \begin{equation}%\label{}
          \frac{1}{k!} \frac{d^k G_X(z)}{dz^k} \bigg{|}_{z=0}=P(X=k).
        \end{equation}
		</li><li>
         By letting $Z=1$ in
         \begin{equation}%\label{}
          \frac{d^k G_X(z)}{dz^k}=\sum_{n=k}^{\infty} n(n-1)(n-2)...(n-k+1)P(X=n)Z^{n-k},
        \end{equation}
        we obtain
        \begin{equation}%\label{}
          \frac{d^k G_X(z)}{dz^k}\bigg{|}_{z=1}=\sum_{n=k}^{\infty} n(n-1)(n-2)...(n-k+1)P(X=n),
        \end{equation}
        which by LOTUS is equal to $E[X(X-1)(X-2)...(X-k+1)]$.
			</li></ol>
</li></ul>
</li></ul></div><hr /><br />



<span class='example'>Example </span><br />

 Let $M_X(s)$ be finite for $s \in [-c,c]$ where $c>0$. Prove
  \begin{equation}
  \lim_{n\rightarrow\infty} \left[M_X(\frac{s}{n})\right]^n=e^{sEX}.
  \end{equation}
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>

  Equivalently, we show
  \begin{equation}
   \lim_{n\rightarrow\infty} n\ln\left(M_{X}(\frac{s}{n})\right)=sEX.
  \end{equation}
  We have
  \begin{align}
   \lim_{n\rightarrow\infty} n\ln\left(M_{X}(\frac{s}{n})\right) &=\lim_{n\rightarrow\infty} \frac{\ln\left(M_{X}(\frac{s}{n})\right)}{\frac{1}{n}} \\
   &=\frac{0}{0}.
  \end{align}
  So, we can use \'{L}H\^{o}pital's rule
  \begin{align}
  \lim_{n\rightarrow\infty} \frac{\ln\left(M_{X}(\frac{s}{n})\right)}{\frac{1}{n}} &=\lim_{t \rightarrow 0} \frac{\ln\left(M_{X}(ts)\right)}{t} \quad (\textrm{let} \quad t=\frac{1}{n})\\
  &=\lim_{t \rightarrow 0} \frac{\frac{sM_{X}^{'}(ts)}{M_{X}(ts)}}{1} \quad (\textrm{by \'{L}H\^{o}pital's rule})\\
  &= \frac{sM_{X}^{'}(0)}{M_{X}(0)} \\
  &=s\mu \quad (\textrm{since} \quad M_{X}^{'}(0)=\mu, M_{X}(0)=1).
  \end{align}
</li></ul>
</li></ul></div><hr /><br />

<span class='example'>Example </span><br />

 Let $M_X(s)$ be finite for $s \in [-c,c]$, where $c&gt;0$. Assume $EX=0$, and $\textrm{Var}(X)=1$. Prove
  \begin{align}%\label{}
   \lim_{n \rightarrow \infty} \left[M_X\left(\frac{s}{\sqrt{n}}\right)\right]^n=e^{\frac{s^2}{2}}.
  \end{align}
  \textit{Note:} From this, we can prove the Central Limit Theorem (CLT) which is discussed in Section \ref{sec:limit-thms}.
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>

   Equivalently, we show
   \begin{equation}
   \lim_{n\rightarrow\infty} n\ln\left(M_{X}(\frac{s}{\sqrt{n}})\right)=\frac{s^2}{2}.
  \end{equation}
  We have
  \begin{align}
   \lim_{n\rightarrow\infty} n\ln\left(M_{X}(\frac{s}{\sqrt{n}})\right) &= \lim_{n\rightarrow\infty} \frac{\ln\left(M_{X}(\frac{s}{\sqrt{n}})\right)}{\frac{1}{n}} \quad (\textrm{let} \quad t=\frac{1}{\sqrt{n}})\\
   &= \lim_{t \rightarrow 0}\frac{\ln\left(M_{X}(ts)\right)}{t^2}\\
   &= \lim_{t \rightarrow 0} \frac{\frac{sM_{X}^{'}(ts)}{M_{X}(ts)}}{2t} \quad (\textrm{by \'{L}H\^{o}pital's rule})\\
   &= \lim_{t \rightarrow 0} \frac{sM_{X}^{'}(ts)}{2t} \quad (\textrm{again} \quad \frac{0}{0},)\\
   &= \lim_{t \rightarrow 0} \frac{s^2M_{X}^{''}(ts)}{2} \quad (\textrm{by \'{L}H\^{o}pital's rule})\\
   &= \frac{s^2}{2} \quad (\textrm{since} \quad M_{X}^{''}(0)=EX^2=1).
  \end{align}
</li></ul>
</li></ul></div><hr /><br />

<span class='example'>Example </span><br />

 We can define MGF for jointly distributed random variables as well. For example, for two random variables $(X,Y)$, the MGF is defined by
  \begin{align}%\label{}
    \nonumber  M_{XY}(s,t)=E[e^{sX+tY}].
  \end{align}
  Similar to the MGF of a single random variable, the MGF of the joint distributions uniquely determines the joint distribution. Let $X$ and $Y$ be two jointly normal random variables with $EX=\mu_X$, $EY=\mu_Y$, $\textrm{Var}(X)=\sigma^2_X$, $\textrm{Var}(Y)=\sigma^2_Y$, $\rho(X,Y)=\rho$ . Find $M_{XY}(s,t)$.

<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>

Note that $U=sX+tY$ is a linear combination of $X$ and $Y$ and thus it is a normal random variable. We have
\begin{align}
  \nonumber EU &= sEX+tEY= s\mu_X+t\mu_Y,\\
  \nonumber \textrm{Var}(U)&= s^2\textrm{Var}(X)+t^2\textrm{Var}(Y)+2st\rho(X,Y)\sigma_X\sigma_Y\\
  \nonumber &= s^2\sigma_X^2+t^2\sigma_Y^2+2st\rho\sigma_X\sigma_Y.
  \end{align}
 Thus
 \begin{align}
 \nonumber U &\sim N(s\mu_X+t\mu_Y, s^2\sigma_X^2+t^2\sigma_Y^2+2st\rho\sigma_X\sigma_Y).
  \end{align}
Note that for a normal random variable with mean $\mu$ and variance $\sigma^2$ the MGF is given by $e^{s\mu+\frac{\sigma^2s^2}{2}}$.
Thus
\begin{align}
 \nonumber M_{XY}(s,t)&=E[e^U]=M_U(1)\\
 \nonumber &=e^{\mu_U+\frac{\sigma_U^2}{2}}\\
 \nonumber       &=e^{s\mu_X+t\mu_Y+\frac{1}{2}(s^2\sigma_X^2+t^2\sigma_Y^2+2st\rho\sigma_X\sigma_Y)}.
\end{align}
</li></ul>
</li></ul></div><hr /><br />

<span class='example'>Example </span><br />

Let $\mathbf{X}= \begin{bmatrix}
  X_1\\
  X_2
  \end{bmatrix}$ be a normal random vector with the following mean vector and covariance matrix
  \begin{equation}
  \textbf{m}
  =  \begin{bmatrix}
       0\\%[5pt]
       1
  \end{bmatrix}, \hsb \mathbf{C}=\begin{bmatrix}
       1 & -1  \\%[5pt]
       -1 & 2
  \end{bmatrix}.
  \end{equation}
  Let also
  \begin{equation}
  \textbf{A}
  =  \begin{bmatrix}
       1 & 2\\%[5pt]
       2 & 1\\
       1 & 1
  \end{bmatrix}, \hsb \mathbf{b}=\begin{bmatrix}
       0  \\%[5pt]
       1 \\
       2
  \end{bmatrix}, \hsb \mathbf{Y}=\begin{bmatrix}
       Y_1  \\%[5pt]
       Y_2  \\
       Y_3
  \end{bmatrix}
  =\mathbf{A}\mathbf{X}+\mathbf{b}.
  \end{equation}
<ol type='a'>
   <li> Find $P(0 \leq X_2 \leq 1)$.
		</li><li>
     Find the expected value vector of $\mathbf{Y}$, $\mathbf{m_Y}=E\mathbf{Y}$.
		</li><li>
     Find the covariance matrix of $\mathbf{Y}$, $\mathbf{C_Y}$.
		</li><li>
     Find $P(Y_3 \leq 4)$.
		</li></ol>
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>

(a)  From $m$ and $c$ we have
$X_2 \sim N(1,2)$. Thus\\
\begin{align}
P(0\leq X_2 \leq 1) &= \Phi\left(\frac{1-1}{\sqrt2}\right)-\Phi\left(\frac{0-1}{\sqrt2}\right)\\
&=\Phi\left(0\right)-\Phi\left(\frac{-1}{\sqrt 2}\right)=0.2602
 \end{align}

 (b)
 \begin{align}
 m_Y&=EY= AEX+b\\
 &=  \begin{bmatrix}
       1 & 2\\%[5pt]
       2 & 1\\
       1 & 1
  \end{bmatrix} . \begin{bmatrix}
       0\\%[5pt]
       1
  \end{bmatrix} + \begin{bmatrix}
       0  \\%[5pt]
       1 \\
       2
  \end{bmatrix} \\
  &= \begin{bmatrix}
       2  \\%[5pt]
       2 \\
       3
  \end{bmatrix}
 \end{align}

 (c)
 \begin{align}
 C_Y &= A C_XA^T\\
 &= \begin{bmatrix}
       1 & 2\\%[5pt]
       2 & 1\\
       1 & 1
  \end{bmatrix} . \begin{bmatrix}
       1 & -1  \\%[5pt]
      -1 & 2
  \end{bmatrix} . \begin{bmatrix}
       1 & 2 & 1\\%[5pt]
       2 & 1 & 1
  \end{bmatrix} \\
  &=  \begin{bmatrix}
       5 & 1 & 2\\%[5pt]
       1 & 2 & 1\\
       2 & 1 & 1
  \end{bmatrix}
   \end{align}
  (d)
  From $m _ Y$ and $c _ Y$ we have $Y_3 \sim N(3,1)$ thus
\begin{align}
P(Y_3 \leq 4) &= \Phi\left(\frac{4-3}{1}\right) =\Phi\left(1\right)=0.8413
 \end{align}


<span class='example'>Example </span><br />

 (Whitening/decorrelating transformation) Let <b>X</b> be an $n$-dimensional zero-mean random vector. Since $C_X$ is a real symmetric matrix, we conclude that it can be diagonalized. That is, there exists an $n$ by $n$ matrix <b>Q</b> such that
     \begin{align}%\label{}
       &QQ^T=I  (I \textrm{ is the identity matrix})\\
       &C_X= Q D Q^T,
     \end{align}
     where D is a diagonal matrix
     \begin{equation}
    \nonumber D = \begin{bmatrix}
       d_{11} &  0 & ... & 0  \\%[5pt]
       0 & d_{22} & ... & 0 \\%[5pt]
       .      &   .    &  .  &  .\\[-10pt]
       .      &   .    &  .  &  .   \\[-10pt]
       .      &   .    &  .  &  .   \\[5pt]
       0      &   0    & ... & d_{nn}
  \end{bmatrix}.
  \end{equation}
  Now suppose we define a new random vector <b>Y</b> as $Y=Q^T X$, thus
  \begin{align}%\label{}
      X= Q Y.
  \end{align}
  Show that <b>Y</b> has a diagonal covariance matrix, and conclude that components of <b>Y</b> are uncorrelated, i.e., $\textrm{Cov}(Y_i,Y_j)=0$ if $i \neq j$.
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>

     \begin{align}%\label{}
     C_Y &= E[(Y-EY)(Y-EY)^T] \\
     &=E[(Q^TX-EQ^TX)(Q^TX-EQ^TX)^T] \\
     &=E[Q^T(X-EX)(X-EX)^T]Q] \\
     &= Q^TC_XQ\\
     &=Q^TQDQ^TQ\\
     &=D \quad (\textrm{since} \quad Q^TQ=I).
     \end{align}
  Therefore Y has a diagonal covariance matrix, and $\cov(Y_i,Y_j)=0$ if $i \neq j$.
</li></ul>
</li></ul></div><hr /><br />
<!-- /section content -->

<?php include 'section_footer.php'; ?>

