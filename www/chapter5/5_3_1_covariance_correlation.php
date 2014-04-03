<?php
	$section_no			=	"5.3.1";
	$section_title	=	"Covariance and Correlation";
	$section_prev		=	"chapter5/5_2_5_solved_prob.php";
	$section_next		=	"chapter5/5_3_2_bivariate_normal_dist.php";
	include						"../Control/autonumber.php";
	loadHeaders(71);
	include						"section_header.php";
?>

<!-- Section Content -->
Consider two random variables $X$ and $Y$. Here, we define the <b>covariance</b> between $X$ and $Y$, written $\textrm{Cov}(X,Y)$. The covariance gives some information about how $X$ and $Y$ are statistically related. Let us provide the definition, and then discuss the properties and applications of covariance.

<div class="cbox">
The <b>covariance</b> between $X$ and $Y$ is defined as
\begin{align}%\label{}
\nonumber  \textrm{Cov}(X,Y)&=E\big[(X-EX)(Y-EY)\big]=E[XY]-(EX)(EY).
\end{align}
</div>
Note that
\begin{align}%\label{}
\nonumber  E\big[(X-EX)(Y-EY)\big]&=E\big[XY-X(EY)-(EY)X+(EX)(EY)\big]\\
\nonumber  &=E[XY]-(EX)(EY)-(EY)(EX)+(EX)(EY)\\
\nonumber  &=E[XY]-(EX)(EY).
\end{align}
Intuitively, the covariance between $X$ and $Y$ indicates how the values of $X$ and $Y$ move relative to each other. If the covariance is positive, we conclude that $X-EX$ and $Y-EY$ tend to have the same signs (if one is positive, the other is more likely to be positive and vice versa). In other words, if $X$ is less than $EX$, it is more likely that $Y$ is also less than $EY$ (and vice versa). On the other hand, if covariance is negative, $X-EX$ and $Y-EY$ tend to have the opposite signs; so, if $X$ is less than $EX$, it is more likely that $Y$ is greater than $EY$ and vice versa.

<!-- Example -->
<br /><hr /><span class="example">Example </span><br />
Suppose $X \sim Uniform(1,2)$, and given $X=x$, $Y$ is exponential with parameter $\lambda=x$. Find $\textrm{Cov}$(X,Y)$.
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
We can use Cov$(X,Y)=EXY-EXEY$. We have $EX=\frac{3}{2}$ and
\begin{align}%\label{}
\nonumber  EY &=E[E[Y|X]] &\big(\textrm{law of iterated expectations (Equation 5.17)}\big)\\
\nonumber  &=E\left[\frac{1}{X}\right] &\big(\textrm{since }Y|X \sim Exponential(X)\big)\\
\nonumber  &=\int_{1}^{2} \frac{1}{x} dx\\
\nonumber  &=\ln 2.
\end{align}
We also have
\begin{align}%\label{}
\nonumber  EXY &=E[E[XY|X]] &\big(\textrm{law of iterated expectations}\big)\\
\nonumber  EXY &=E[XE[Y|X]] &\big(\textrm{since} E[X|X=x]=x\big)\\
\nonumber  &=E\left[X\frac{1}{X}\right] &\big(\textrm{since }Y|X \sim Exponential(X)\big)\\
\nonumber  &=1.
\end{align}
Thus,
\begin{align}%\label{}
\nonumber  \textrm{Cov}(X,Y)=E[XY]-(EX)(EY)=1-\frac{3}{2} \ln 2.
\end{align}
</li></ul>
</li></ul></div><hr /><br />

Now we discuss the properties of covariance.
<div class="cbox">
<span class="lemma">Lemma </span><br />
The covariance has the following properties.
<ol>
  <li> $\textrm{Cov}(X,X)=\textrm{Var}(X)$</li>
  <li> If $X$ and $Y$ are independent then $\textrm{Cov}(X,Y)=0$.</li>
  <li> $\textrm{Cov}(X,Y)=\textrm{Cov}(Y,X)$</li>
  <li> $\textrm{Cov}(aX,Y)=a\textrm{Cov}(X,Y)$</li>
  <li>  $\textrm{Cov}(X+c,Y)=\textrm{Cov}(X,Y)$</li>
  <li> $\textrm{Cov}(X+Y,Z)=\textrm{Cov}(X,Z)+\textrm{Cov}(Y,Z)$</li>
  <li> More generally,</li>
</ol>
  \begin{align}%\label{}
  \nonumber  \textrm{Cov}\left(\sum_{i=1}^{m}a_iX_i, \sum_{j=1}^{n}b_jY_j\right)=\sum_{i=1}^{m} \sum_{j=1}^{n} a_ib_j \textrm{Cov}(X_i,Y_j).
  \end{align}
</div>

All of the above results can be proven directly from the definition of covariance. For example, if $X$ and $Y$ are independent, then as we have seen before $E[XY]=EX EY$, so
\begin{align}%\label{}
\nonumber  \textrm{Cov}(X,Y)=E[XY]-EX EY=0.
\end{align}
Note that the converse is not necessarily true. That is, if $\textrm{Cov}(X,Y)=0$, $X$ and $Y$ may or may not be independent.

Let us prove Item 6 in Lemma 5.3, $\textrm{Cov}(X+Y,Z)=\textrm{Cov}(X,Z)+\textrm{Cov}(Y,Z)$. We have
\begin{align}%\label{}
\nonumber  \textrm{Cov}(X+Y,Z)&=E[(X+Y)Z]-E(X+Y)EZ\\
\nonumber  &=E[XZ+YZ]-(EX+EY)EZ\\
\nonumber  &=EXZ-EXEZ+EYZ-EYEZ\\
\nonumber  &=\textrm{Cov}(X,Z)+\textrm{Cov}(Y,Z).
\end{align}
You can prove the rest of the items in Lemma 5.3 similarly.

<!-- Example -->
<hr /><span class="example">Example </span><br />
Let $X$ and $Y$ be two independent $N(0,1)$ random variable and
\begin{align}%\label{}
\nonumber  &Z=1+X+XY^2, \\
\nonumber  &W=1+X.
\end{align}
Find Cov$(Z,W)$.
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
\begin{align}%\label{}
\nonumber \textrm{Cov}(Z,W)&=\textrm{Cov}(1+X+XY^2,1+X)  \\
\nonumber  &=Cov(X+XY^2,X) &(\textrm{by part 5 of Lemma 5.3}) \\
\nonumber  &=Cov(X,X)+Cov(XY^2,X) &(\textrm{by part 6 of Lemma 5.3}) \\
\nonumber  &=Var(X)+E[X^2Y^2]-E[XY^2]EX  &(\textrm{by part 1 of Lemma 5.3 and definition of covariance})     \\
\nonumber  &=1+E[X^2]E[Y^2]-E[X]^2E[Y^2] &(\textrm{since $X$ and $Y$ are independent})\\
\nonumber  &=1+1-0=2.
\end{align}
</li></ul>
</li></ul></div><hr /><br />
<!-- /Example -->

<h2>Variance of a sum:</h2>
One of the applications of covariance is finding the variance of a sum of several random variables. In particular, if $Z=X+Y$, then
\begin{align}%\label{}
\nonumber  \textrm{Var}(Z)&=\textrm{Cov}(Z,Z)\\
 \nonumber &=\textrm{Cov}(X+Y,X+Y)\\
\nonumber  &=\textrm{Cov}(X,X)+\textrm{Cov}(X,Y)+ \textrm{Cov}(Y,X)+\textrm{Cov}(Y,Y)\\
\nonumber  &=\textrm{Var}(X)+\textrm{Var}(Y)+2 \textrm{Cov}(X,Y).
\end{align}
More generally, for $a,b \in \mathbb{R}$, we conclude:
<div class="cbox">
\begin{align}\label{eq:var-aX+bY}
 \textrm{Var}(aX+bY)=a^2\textrm{Var}(X)+b^2\textrm{Var}(Y)+2ab \textrm{Cov}(X,Y) \hspace{20pt} (5.21)
\end{align}
</div><br />

<h2>Correlation Coefficient:</h2>
The <b>correlation coefficient</b>, denoted by $\rho_{XY}$ or $\rho(X,Y)$, is obtained by normalizing the covariance. In particular, we define the correlation coefficient of two random variables $X$ and $Y$ as the covariance of the standardized versions of $X$ and $Y$. Define the standardized versions of $X$ and $Y$ as
\begin{align}\label{eq:normalize}
 U=\frac{X-EX}{\sigma_X}, \hspace{10pt} V=\frac{Y-EY}{\sigma_Y} \hspace{20pt} (5.22)
\end{align}
Then,
\begin{align}%\label{}
 \nonumber \rho_{XY}=\textrm{Cov}(U,V)&=\textrm{Cov}\left(\frac{X-EX}{\sigma_X},\frac{Y-EY}{\sigma_Y}\right)\\
 \nonumber &=\textrm{Cov}\left(\frac{X}{\sigma_X},\frac{Y}{\sigma_Y}\right) &(\textrm{by Item 5 of Lemma 5.3})\\
 \nonumber &=\frac{\textrm{Cov}(X,Y)}{\sigma_X \sigma_Y}.
\end{align}
<div class="cbox">
\begin{align}%\label{}
 \nonumber \rho_{XY}=\rho(X,Y)=\frac{\textrm{Cov}(X,Y)}{\sqrt{\textrm{Var(X) Var(Y)}}}=\frac{\textrm{Cov}(X,Y)}{\sigma_X \sigma_Y}
\end{align}
</div><br />

 A nice thing about the correlation coefficient is that it is always between $-1$ and $1$. This is an immediate result of Cauchy-Schwarz inequality that is discussed in Section 6.2.4. One way to prove that $-1 \leq \rho \leq 1$ is to use the following inequality:
 \begin{align}%\label{}
 \alpha \beta \leq \frac{\alpha^2+\beta^2}{2},  \textrm{for }\alpha,\beta \in \mathbb{R}.
\end{align}
This is because $(\alpha-\beta)^2 \geq 0$. The equality holds only if $\alpha=\beta$. From this, we can conclude that for any two random variables $U$ and $V$,
 \begin{align}%\label{}
 E[UV] \leq \frac{EU^2+EV^2}{2},
\end{align}
with equality only if $U=V$ with probability one. Now, let $ U$ and $V$ be the standardized versions of $X$ and $Y$ as defined in Equation 5.22. Then, by definition $\rho_{XY}=\textrm{Cov}(U,V)=EUV$. But since $EU^2=EV^2=1$, we conclude
\begin{align}%\label{}
 \rho_{XY}=E[UV] & \leq \frac{EU^2+EV^2}{2}=1,
\end{align}

with equality only if $U=V$ with probability one. Now, let $ U$ and $V$ be the standardized versions of $X$ and $Y$ as defined in Equation 5.22. Then, by definition $\rho_{XY}=\textrm{Cov}(U,V)=EUV$. But since $EU^2=EV^2=1$, we conclude
\begin{align}%\label{}
 \rho_{XY}=E[UV] & \leq \frac{EU^2+EV^2}{2}=1,
\end{align}
with equality only if $U=V$. That is,
\begin{align}%\label{}
 \frac{Y-EY}{\sigma_Y}=\frac{X-EX}{\sigma_X},
\end{align}
which implies
\begin{align}%\label{}
 Y&=\frac{\sigma_Y}{\sigma_X} X+ \left(EY-\frac{\sigma_Y}{\sigma_X} EX\right)\\
 &=aX+b,  \textrm{where $a$ and $b$ are constants.}
\end{align}
Replacing $X$ by $-X$, we conclude that
\begin{align}%\label{}
 \nonumber \rho(-X,Y) \leq 1.
\end{align}
But $\rho(-X,Y)=-\rho(X,Y)$, thus we conclude $\rho(X,Y) \geq -1$. Thus, we can summarize some properties of the correlation coefficient as follows.

<div class="cbox">
Properties of the correlation coefficient:
<ol>
  <li> $-1 \leq \rho(X,Y) \leq 1$;
  <li> If $\rho(X,Y)=1$, then $Y=aX+b$, where $a>0$;</li>
  <li> If $\rho(X,Y)=-1$, then $Y=aX+b$, where $a<0$;</li>
  <li> $\rho(aX+b,cY+d)=\rho(X,Y)$ for $a,b>0$.</li>
</ol>
</div><br />

<span class="definition">Definition </span><br />
Consider two random variables $X$ and $Y$:<br />
  - If $\rho(X,Y)=0$, we say that $X$ and $Y$ are  <b>uncorrelated</b>.<br />
  - If $\rho(X,Y)>0$, we say that $X$ and $Y$ are  <b>positively</b> correlated.<br />
  - If $\rho(X,Y)<0$, we say that $X$ and $Y$ are  <b>negatively</b> correlated.<br >
<hr /><br />
Note that as we discussed previously, two independent random variables are always uncorrelated, but the converse is not necessarily true. That is, if $X$ and $Y$ are uncorrelated, then $X$ and $Y$ may or may not be independent. Also, note that if $X$ and $Y$ are uncorrelated from Equation 5.21, we conclude that $\textrm{Var}(X+Y)=\textrm{Var}(X)+\textrm{Var}(Y)$.


<div class="cbox">
If $X$ and $Y$ are uncorrelated, then
\begin{align}%\label{}
\nonumber  \textrm{Var}(X+Y)=\textrm{Var}(X)+\textrm{Var}(Y).
\end{align}
More generally, if $X_1,X_2,...,X_n$ are pairwise uncorrelated, i.e., $\rho(X_i,X_j)=0$ when $i \neq j$, then
\begin{align}%\label{}
\nonumber  \textrm{Var}(X_1+X_2+...+X_n)=\textrm{Var}(X_1)+\textrm{Var}(X_2)+...+\textrm{Var}(X_n).
\end{align}
</div><br />

Note that if $X$ and $Y$ are independent, then they are uncorrelated, and so $\textrm{Var}(X+Y)=\textrm{Var}(X)+\textrm{Var}(Y)$. This is a fact that we stated previously in Chapter 3, and now we could easily prove using covariance.

<!-- Example -->
<hr /><span class="example">Example </span><br />
Let $X$ and $Y$ be as in Example 5.24 in section 5.2.3, i.e., suppose that we choose a point $(X,Y)$ uniformly at random in the unit disc
\begin{align}%\label{}
\nonumber  D=\{(x,y)|x^2+y^2 \leq 1\}.
\end{align}
Are $X$ and $Y$ uncorrelated?
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
We need to check whether $Cov(X,Y)=0$. First note that, in Example 5.24 of Section 5.2.3, we found out that $X$ and $Y$ are not independent and in fact, we found that
\begin{align}%\label{}
  \nonumber  X|Y \hspace{5pt}  \sim \hspace{5pt}  Uniform(-\sqrt{1-Y^2},\sqrt{1-Y^2}).
\end{align}
Now let's find $Cov(X,Y)=EXY-EXEY$. We have
\begin{align}%\label{}
\nonumber  EX &=E[E[X|Y]] &\big(\textrm{law of iterated expectations (Equation 5.17)}\big) \\
\nonumber  &=E[0]=0 &\big(\textrm{since }X|Y \hspace{5pt}  \sim \hspace{5pt}  Uniform(-\sqrt{1-Y^2},\sqrt{1-Y^2})\big).
\end{align}
Also, we have
\begin{align}%\label{}
\nonumber  E[XY] &=E[E[XY|Y]] &\big(\textrm{law of iterated expectations (Equation 5.17)}\big)\\
\nonumber  &=E[YE[X|Y]]  &\big( \textrm{Equation 5.6}\big) \\
\nonumber  &=E[Y \cdot 0]=0.
\end{align}
Thus,
\begin{align}%\label{}
\nonumber  Cov(X,Y)=E[XY]-EXEY=0.
\end{align}
Thus, $X$ and $Y$ are uncorrelated.
</li></ul>
</li></ul></div><hr /><br />
<!-- /Example -->


<!-- /Section Content -->

<?php include				"section_footer.php"; ?>
