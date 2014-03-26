<?php
	$section_no			= "5.3.3";
	$section_title	= "Solved Problems";
	$section_prev		= "chapter5/5_3_2_bivariate_normal_dist.php";
	$section_next		=	"chapter5/5_4_0_chapter_problems.php";
	include						"../Control/autonumber.php";
	loadHeaders(73);
	include						"section_headers.php";
?>

<!-- Section Content -->

<span class="problem">Problem </span><br />
Let $X$ and $Y$ be two jointly continuous random variables with joint PDF
  \begin{equation}
  \nonumber f_{XY}(x,y) = \left\{
  \begin{array}{l l}
    2  &  \quad  y+x \leq 1, x>0, y>0 \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
  \end{equation}
  Find $\cov(X,Y)$ and $\rho(X,Y)$.
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
  For $0 \leq x \leq 1$, we have
  \begin{align}%\label{}
  \nonumber  f_X(x)&=\int_{-\infty}^{\infty} f_{XY}(x,y)dy \\
  \nonumber  &=\int_{0}^{1-x}2dy\\
  \nonumber  &=2(1-x).
  \end{align}
  Thus,
  \begin{equation}
  \nonumber f_{X}(x) = \left\{
  \begin{array}{l l}
    2(1-x) &  \quad 0 \leq x \leq 1  \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
  \end{equation}
  Similarly, we obtain
  \begin{equation}
  \nonumber f_{Y}(y) = \left\{
  \begin{array}{l l}
    2(1-y) &  \quad 0 \leq y \leq 1  \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
  \end{equation}
  Thus, we have
  \begin{align}%\label{}
  \nonumber  EX&=\int_{0}^{1}2x(1-x)dx\\
  \nonumber  &=\frac{1}{3}=EY.
  \end{align}
  \begin{align}%\label{}
  \nonumber  EX^2&=\int_{0}^{1}2x^2(1-x)dx\\
  \nonumber  &=\frac{1}{6}=EY^2.
  \end{align}
  Thus,
  \begin{align}%\label{}
  \nonumber  \var (X)=\var(Y)=\frac{1}{18}.
  \end{align}
  We also have
  \begin{align}%\label{}
  \nonumber  EXY&=\int_{0}^{1} \int_{0}^{1-x}2xydydx\\
  \nonumber  &=\int_{0}^{1}x(1-x)^2dx\\
  \nonumber &=\frac{1}{12}.
  \end{align}


  Now, we can find $\cov(X,Y)$ and $\rho(X,Y)$:
  \begin{align}%\label{}
  \nonumber  \cov(X,Y)&=EXY-EXEY\\
  \nonumber  &=\frac{1}{12}-\left(\frac{1}{3}\right)^2\\
  \nonumber  &=-\frac{1}{36}.
  \end{align}

  \begin{align}%\label{}
  \nonumber  \rho(X,Y)&=\frac{\cov(X,Y)}{\sqrt{\var(X) \var(Y)}}\\
  \nonumber  &=-\frac{1}{2}.
  \end{align}
</li></ul>
</li></ul></div><br />

<hr /><span class="problem">Problem </span><br />
I roll a fair die $n$ times. Let $X$ be the number of $1$'s that I observe and let $Y$ be the number of $2$'s that I observe. Find $\cov(X,Y)$ and $\rho(X,Y)$. \textit{Hint:} One way to solve this problem is two look at $\var(X+Y)$.
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
  Note that you can look at this as a binomial experiment. In particular, we can say that $X$ and $Y$ are $Binomial(n,\frac{1}{6})$. Also, $X+Y$ is $Binomial(n,\frac{2}{6})$. Remember the variance of a $Binomial(n,p)$ random variable is $np(1-p)$. Thus, we can write
  \begin{align}%\label{}
  \nonumber  n\frac{2}{6}.\frac{4}{6}&=\var(X+Y)\\
  \nonumber  &=\var(X)+\var(Y)+2\cov(X,Y)\\
  \nonumber  &=n\frac{1}{6}.\frac{5}{6}+n\frac{1}{6}.\frac{5}{6}+2\cov(X,Y).
  \end{align}
  Thus,
  \begin{align}%\label{}
  \nonumber  \cov(X,Y)=-\frac{n}{36}.
  \end{align}
  And,
  \begin{align}%\label{}
  \nonumber  \rho(X,Y)=\frac{\cov(X,Y)}{\sqrt{\var(X) \var(Y)}}=-\frac{1}{5}.
  \end{align}
</li></ul>
</li></ul></div><br />


<hr /><span class="problem">Problem </span><br />
In this problem, you provide another proof for the fact that $|\rho(X,Y)| \leq 1$. By definition $\rho_{XY}=\textrm{Cov}(U,V)$, where $ U$ and $V$ are the normalized versions of $X$ and $Y$ as defined in Equation 5.22:
       \begin{align}
       \no U=\frac{X-EX}{\sigma_X}, \hspace{10pt} V=\frac{Y-EY}{\sigma_Y}.
       \end{align}
       Use the fact that $\textrm{Var}(U+V) \geq 0$ to show that $|\rho(X,Y)| \leq 1$
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
  We have
  \begin{align}%\label{}
  \nonumber \textrm{Var}(U+V)&=\textrm{Var}(U)+\textrm{Var}(V)+2 \textrm{Cov}(U,V)\\
  \nonumber &=1+1+2\rho_{XY}.
  \end{align}
  Since $\textrm{Var}(U+V) \geq 0$, we conclude $\rho(X,Y) \geq -1$. Also, from this we conclude that
  \begin{align}%\label{}
  \nonumber \rho(-X,Y) \geq -1.
  \end{align}
  But $\rho(-X,Y)=-\rho(X,Y)$, so we conclude $\rho(X,Y) \leq 1$.
</li></ul>
</li></ul></div><br />

<hr /><span class="problem">Problem </span><br />
Let $X$ and $Y$ be two independent $Uniform(0,1)$ random variables. Let also $Z=\max(X,Y)$ and $W=\min(X,Y)$. Find $\cov(Z,W)$.
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
  It is useful to find the distributions of $Z$ and $W$. To find the CDF of $Z$, we can write
  \begin{align}%\label{}
  \nonumber F_Z(z)&=P(Z \leq z) \\
  \nonumber &=P(\max(X,Y) \leq z)\\
  \nonumber &=P\bigg((X \leq z) \textrm{ and } (Y \leq z)\bigg)\\
  \nonumber &=P(X \leq z) P(Y \leq z) &(\textrm{ since }X \textrm{ and }Y \textrm{ are indpendent})\\
  \nonumber &=F_X(z)F_Y(z).
  \end{align}
  Thus, we conclude
  \textit{\begin{equation}
  \nonumber F_Z(z) = \left\{
  \begin{array}{l l}
    0  &  \quad z<0  \\
    z^2  &  \quad 0 \leq z \leq 1  \\
    1 &  \quad z>1
  \end{array} \right.
  \end{equation}
  }
  Therefore,
  \begin{equation}
  \nonumber f_Z(z) = \left\{
  \begin{array}{l l}
    2z  &  \quad 0 \leq z \leq 1  \\
    0 &  \text{otherwise}
  \end{array} \right.
  \end{equation}
  From this we obtain $EZ=\frac{2}{3}$. Note that we can find $EW$ as follows
  \begin{align}%\label{}
  \nonumber 1=E[X+Y]&=E[Z+W] \\
  \nonumber &=EZ+EW\\
  \nonumber &=\frac{2}{3}+EW.
  \end{align}
  Thus, $EW=\frac{1}{3}$. Nevertheless, it is a good exercise to find the CDF and PDF of $W$, too.
  To find the CDF of $W$, we can write
  \begin{align}%\label{}
  \nonumber F_W(w)&=P(W \leq w) \\
  \nonumber &=P(\min(X,Y) \leq w)\\
  \nonumber &=1-P(\min(X,Y) > w)\\
  \nonumber &=1-P\bigg((X > w) \textrm{ and } (Y > w)\bigg)\\
  \nonumber &=1-P(X > w) P(Y > w) &(\textrm{ since }X \textrm{ and }Y \textrm{ are independent})\\
  \nonumber &=1-(1-F_X(w))(1-F_Y(w))\\
  \nonumber &=F_X(w)+F_Y(w)-F_X(w)F_Y(w).
  \end{align}
  Thus,
  \textit{\begin{equation}
  \nonumber F_W(w) = \left\{
  \begin{array}{l l}
    0  &  \quad w<0  \\
    2w-w^2  &  \quad 0 \leq w \leq 1  \\
    1 &  \quad w>1
  \end{array} \right.
  \end{equation}
  }
  Therefore,
  \begin{equation}
  \nonumber f_W(w) = \left\{
  \begin{array}{l l}
    2-2w  &  \quad 0 \leq w \leq 1  \\
    0 &  \text{otherwise}
  \end{array} \right.
  \end{equation}
  From the above PDF we can verify that $EW=\frac{1}{3}$. Now, to find $\cov(Z,W)$, we can write
  \begin{align}%\label{}
  \nonumber \cov(Z,W)&=E[ZW]-EZEW \\
  \nonumber &=E[XY]-EZEW\\
  \nonumber &=E[X]E[Y]-E[Z]E[W] &(\textrm{ since }X \textrm{ and }Y \textrm{ are independent})\\
  \nonumber &=\frac{1}{2}.\frac{1}{2}-\frac{2}{3}.\frac{1}{3}\\
  \nonumber &=\frac{1}{36}.
  \end{align}
  Note that $\cov(Z,W)>0$ as we expect intuitively.
</li></ul>
</li></ul></div><br />


<hr /><span class="problem">Problem </span><br />
Let $X$ and $Y$ be jointly (bivariate) normal, with $\var(X)=\var(Y)$. Show that the two random variables $X+Y$ and $X-Y$ are independent.
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
   Note that since $X$ and $Y$ are jointly normal, we conclude that the random variables $X+Y$ and $X-Y$ are also jointly normal. We have
  \begin{align}%\label{}
  \nonumber  \cov(X+Y,X-Y)&=\cov(X,X)-\cov(X,Y)+\cov(Y,X)-\cov(Y,Y)\\
  \nonumber  &=\var(X)-\var(Y)\\
  \nonumber  &=0.
  \end{align}
  Since $X+Y$ and $X-Y$ are jointly normal and uncorrelated, they are independent.
</li></ul>
</li></ul></div><br />


<hr /><span class="problem">Problem </span><br />
Let $X$ and $Y$ be jointly normal random variables with parameters $\mu_X=0$, $\sigma^2_X=1$, $\mu_Y=-1$, $\sigma^2_Y=4$, and $\rho=-\frac{1}{2}$.
<ol>
  <li> Find $P(X+Y>0)$.</li>
  <li> Find the constant $a$ if we know $aX+Y$ and $X+2Y$ are independent.</li>
  <li> Find $P(X+Y>0|2X-Y=0)$.</li>
</ol>
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
<ol>
  <li> Since $X$ and $Y$ are jointly normal, the random variable $U=X+Y$ is normal. We have
  \begin{align}%\label{}
  \nonumber &EU=EX+EY=-1
  \end{align}
  \begin{align}
  \nonumber \var(U)&=\var(X)+\var(Y)+2 \cov(X,Y) \\
  \nonumber &=1+4+2 \sigma_X \sigma_Y \rho(X,Y)\\
  \nonumber &=5-2 \times 1\times2\times\frac{1}{2}\\
  \nonumber &=3.
  \end{align}
  Thus, $U \sim N(-1,3)$. Therefore,
  \begin{align}%\label{}
  \nonumber P(U>0)=1-\Phi\left(\frac{0-(-1)}{\sqrt{3}}\right)=1-\Phi\left(\frac{1}{\sqrt{3}}\right)=0.2819.
  \end{align}
	</li>


  <li> Note that $aX+Y$ and $X+2Y$ are jointly normal. Thus, for them, independence is equivalent to having $\cov(aX+Y,X+2Y)=0$. Also, note that $\cov(X,Y)=\sigma_X \sigma_Y \rho(X,Y)=-1$. We have
  \begin{align}
  \nonumber \cov(aX+Y,X+2Y)&=a\cov(X,X)+2a\cov(X,Y)+\cov(Y,X)+2\cov(Y,Y) \\
  \nonumber &=a-(2a+1)+8\\
  \nonumber &=-a+7.
  \end{align}
  Thus, $a=7$.
	</li>
	<li>
   If we define $U=X+Y$ and $V=2X-Y$, then note that $U$ and $V$ are jointly normal. We have
  \begin{align}
  \nonumber &EU=-1, \hs  \var(U)=3\\
  \nonumber &EV=2, \hs  \var(V)=12,
  \end{align}
  and
  \begin{align}%\label{}
  \nonumber  \cov(U,V)&=\cov(X+Y,2X-Y)\\
  \no &=2\cov(X,X)-\cov(X,Y)+2\cov(Y,X)-\cov(Y,Y)\\
  \nonumber  &=2\var(X)+\cov(X,Y)-\var(Y)\\
  \nonumber  &=2-1-4\\
  \nonumber  &=-3.
  \end{align}
  Thus,
  \begin{align}%\label{}
  \nonumber  \rho(U,V)&=\frac{\cov(U,V)}{\sqrt{\var(U) \var(V)}}\\
  \nonumber  &=-\frac{1}{2}.
  \end{align}

  Using Theorem 5.4, we conclude that given $V=0$, $U$ is normally distributed with
  \begin{align}%\label{}
  \nonumber  &E[U|V=1]=\mu_U+ \rho(U,V) \sigma_U \frac{0-\mu_V}{\sigma_V}=-\frac{1}{2} \\
  \nonumber  &\var(U|V=1)=(1-\rho_{UV}^2)\sigma^2_U=\frac{9}{4}.
  \end{align}
  Thus
  \begin{align}%\label{}
  \nonumber P(X+Y>0|X-2Y=1)&=P(U>0|V=0)\\
  \nonumber &=1-\Phi\left(\frac{0-(-\frac{1}{2})}{\frac{3}{2}}\right)\\
  \no &= 1-\Phi\left(\frac{1}{3}\right)=0.3694.
  \end{align}
</li>
</li></ul>
</li></ul></div><br />

<!-- /section Content -->

<?php include				"section_footer.php"; ?>
