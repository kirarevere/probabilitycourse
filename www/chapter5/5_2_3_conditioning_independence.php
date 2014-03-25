<?php
	$section_no			= "5.2.3";
	$section_title	= "Conditioning and Independence";
	$section_prev		= "5_2_2_joint_cdf.php";
	$section_next		= "5_2_4_";
	include						"../Control/autonumber.php";
	loadHeaders(68);
	include						"section_header.php";
?>

<!-- Section Content -->
Here, we discuss conditioning for continuous random variables. In particular, we discuss the conditional PDF, conditional CDF, and conditional expectation. We have discussed conditional probability for discrete random variables before. The ideas behind conditional probability for continuous random variables are very similar to the discrete case. The difference lies in the fact that we need to work with probability density in the case of continuous random variables. Nevertheless, we would like to emphasize again that there is only one main formula regarding conditional probability which is
\begin{align}\label{}
  \nonumber P(A|B)=\frac{P(A \cap B)}{P(B)}, \textrm{ when } P(B)>0.
\end{align}
Any other formula regarding conditional probability can be derived from the above formula. In fact, for some problems we only need to apply the above formula. You have already used this in Example \ref{ex:joint-PDF-third}. As another example, if you have two random variables $X$ and $Y$, you can write
\begin{align}\label{}
  \nonumber P(X \in C|Y \in D)=\frac{P(X \in C, Y \in D)}{P(Y \in D)}, \textrm{ where } C, D \subset \mathbb{R}.
\end{align}
However, sometimes we need to use the concepts of conditional PDFs and CDFs. The formulas for conditional PDFs and CDFs of continuous random variables are very similar to those of discrete random variables. Since there is no new fundamental ideas in this section, we usually provide the main formulas and guidelines, and then work on examples. Specifically, we do not spend much time deriving formulas. Nevertheless, to give you the basic idea of how to derive these formulas, we start by deriving a formula for the conditional CDF and PDF of a random variable $X$ given that $X \in I=[a,b]$.
Consider a continuous random variable $X$. Suppose that we know that the event $X \in I=[a,b]$ has occurred. Call this event $A$. The conditional CDF of $X$ given $A$, denoted by $F_{X|A}(x)$ or $F_{X| a \leq X \leq b}(x)$, is
\begin{align}%\label{}
\nonumber  F_{X|A}(x) &=P(X \leq x|A)\\
\nonumber &=P(X \leq x|a \leq X \leq b)\\
\nonumber &=\frac{P(X \leq x, a \leq X \leq b)}{P(A)}.
\end{align}
Now if $x &lt; a$, then $F_{X|A}(x)=0$. On the other hand, if $a \leq x \leq b$,  we have
\begin{align}%\label{}
\nonumber  F_{X|A}(x)&=\frac{P(X \leq x, a \leq X \leq b)}{P(A)}\\
\nonumber &=\frac{P(a \leq X \leq x)}{P(A)}\\
\nonumber &=\frac{F_X(x)-F_X(a)}{F_X(b)-F_X(a)}.
\end{align}
Finally, if $x>b$, then $F_{X|A}(x)=1$. Thus, we obtain
\begin{equation}
 \nonumber F_{X|A}(x) = \left\{
  \begin{array}{l l}
    1 &  \quad  x>b \\
     &  \quad   \\
    \frac{F_X(x)-F_X(a)}{F_X(b)-F_X(a)}  &  \quad  a \leq x&lt;b  \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
\end{equation}
Note that since $X$ is a continuous random variable, we do not need to be careful about end points, i.e., changing $x&gt;b$ to $x \geq b$ does not make a difference in the above formula. To obtain the conditional PDF of $X$,  denoted by $f_{X|A}(x)$, we can differentiate $F_{X|A}(x)$. We obtain
\begin{equation}
 \nonumber f_{X|A}(x) = \left\{
  \begin{array}{l l}
    \frac{f_X(x)}{P(A)}  &  \quad  a \leq x&lt;b  \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
\end{equation}
It is insightful if we derive the above formula for $f_{X|A}(x)$ directly from the definition of the PDF for continuous random variables. Recall that the PDF of $X$ can be defined as
\begin{align}%\label{}
\nonumber  f_X(x)=\lim_{\Delta \rightarrow 0} \frac{P(x&lt;X \leq x+\Delta)}{\Delta}.
\end{align}
Now, the conditional PDF of $X$ given $A$, denoted by $f_{X|A}(x)$, is
\begin{align}%\label{}
\nonumber  f_{X|A}(x)&=\lim_{\Delta \rightarrow 0} \frac{P(x&lt;X \leq x+\Delta|A)}{\Delta}\\
\nonumber &=\lim_{\Delta \rightarrow 0} \frac{P(x&lt;X \leq x+\Delta,A)}{\Delta P(A)}\\
\nonumber &=\lim_{\Delta \rightarrow 0} \frac{P(x&lt;X \leq x+\Delta,a \leq X \leq b)}{\Delta P(A)}.
\end{align}
Now consider two cases. If $a \leq x&lt;b$, then
\begin{align}%\label{}
\nonumber  f_{X|A}(x)&=\lim_{\Delta \rightarrow 0} \frac{P(x&lt;X \leq x+\Delta,a \leq X \leq b)}{\Delta P(A)}\\
\nonumber &=\frac{1}{P(A)}\lim_{\Delta \rightarrow 0} \frac{P(x&lt;X \leq x+\Delta)}{\Delta}\\
\nonumber &=\frac{f_X(x)}{A}.
\end{align}
On the other hand, if $x&lt;a$ or $x \geq b$, then
\begin{align}%\label{}
\nonumber  f_{X|A}(x)&=\lim_{\Delta \rightarrow 0} \frac{P(x&lt;X \leq x+\Delta,a \leq X \leq b)}{\Delta P(A)}\\
\nonumber &=0.
\end{align}


<div style="padding:25px;margin:30px 40px;border:2px solid black;">
If $X$ is a continuous random variable, and $A$ is the event that $a \leq X \leq b$ (where possibly $b=\infty$ or $a=-\infty$), then
\begin{equation}
 \nonumber F_{X|A}(x) = \left\{
  \begin{array}{l l}
    1 &  \quad  x&gt;b \\
     &  \quad   \\
    \frac{F_X(x)-F_X(a)}{F_X(b)-F_X(a)}  &  \quad  a \leq x&lt;b  \\
      &  \quad   \\
    0 &  \quad x&lt;a
  \end{array} \right.
\end{equation}
\begin{equation}
 \nonumber f_{X|A}(x) = \left\{
  \begin{array}{l l}
    \frac{f_X(x)}{P(A)}  &  \quad  a \leq x&lt;b  \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
\end{equation}
</div><br />

The conditional expectation and variance are defined by replacing the PDF by conditional PDF in the definitions of expectation and variance. In general, for a random vari
able $X$ and an event $A$, we have the following:

<div style="padding:25px; margin:30px 40px; border:2px solid black;">
\begin{align}%\label{}
\nonumber &E[X|A]=\int_{-\infty}^{\infty}xf_{X|A}(x)dx  \\
\nonumber &E[g(X)|A]=\int_{-\infty}^{\infty}g(x)f_{X|A}(x)dx  \\
\nonumber &\textrm{Var}(X|A)=E[X^2|A]-(E[X|A])^2
\end{align}
</div><br />

<!-- Example -->
<span class="example">Example </span><br />
Let $X \sim Exponential(1)$.
<ol type="a">
  <li> Find the conditional PDF and CDF of $X$ given $X&gt;1$.</li>
  <li> Find $E[X|X&gt;1]$.</li>
  <li> Find Var$(X|X&gt;1)$.</li>
</ol>

<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
<ol type="a">
<li>
   Let $A$ be the event that $X>1$. Then
  \begin{align}%\label{}
    \nonumber P(A)&= \int_{1}^{\infty}e^{-x}dx \\
    \nonumber &=\frac{1}{e}.
  \end{align}
  Thus,
  \begin{equation}
  \nonumber f_{X|X>1}(x) = \left\{
  \begin{array}{l l}
    e^{-x+1}  &  \quad  x>1  \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
  \end{equation}
  For $x>1$, we have
  \begin{align}%\label{}
    \nonumber F_{X|A}(A)&=\frac{F_X(x)-F_X(a)}{P(A)}\\
    \nonumber &=e^{-a+1}-e^{-x+1}.
  \end{align}
  Thus,
  \begin{equation}
  \nonumber F_{X|A}(x) = \left\{
  \begin{array}{l l}
    e^{-a+1}-e^{-x+1}  &  \quad   x>1  \\
      &  \quad   \\
    0 &  \quad \textrm{otherwise}
  \end{array} \right.
  \end{equation}
</li>
<li>
  \item We have
  \begin{align}%\label{}
    \nonumber E[X|X&gt;1]&= \int_{1}^{\infty}xf_{X|X&gt;1}(x)dx \\
    \nonumber &=\int_{1}^{\infty}xe^{-x+1}dx\\
    \nonumber &=e \int_{1}^{\infty}xe^{-x}dx\\
    \nonumber &=e\bigg[-e^{-x}-xe^{-x} \bigg]_{1}^{\infty}\\
    \nonumber &=e \frac{2}{e}\\
    \nonumber &=2.
  \end{align}
</li>
<li>
   We have
  \begin{align}%\label{}
    \nonumber E[X^2|X&gt;1]&= \int_{1}^{\infty}x^2f_{X|X&gt;1}(x)dx \\
    \nonumber &=\int_{1}^{\infty}x^2e^{-x+1}dx\\
    \nonumber &=e \int_{1}^{\infty}x^2e^{-x}dx\\
    \nonumber &=e \bigg[-2e^{-x}-2xe^{-x}-x^2e^{-x} \bigg]_{1}^{\infty}\\
    \nonumber &=e \frac{5}{e}\\
    \nonumber &=5.
  \end{align}
  Thus,
  \begin{align}%\label{}
    \nonumber \textrm{Var}(X|X&gt;1)&=E[X^2|X&gt;1]-(E[X|X&gt;1])^2 \\
    \nonumber &=5-4=1.
  \end{align}
</li>
</ol>
</li></ul>
</li></ul></div><hr /><br />
<h2>Conditioning by Another Random Variable:</h2>
<p>
If $X$ and $Y$ are two jointly continuous random variables, and we obtain some information regarding $Y$, we should update the PDF and CDF of $X$ based on the new information. In particular, if we get to observe the value of the random variable $Y$, then how do we need to update the PDF and CDF of $X$? Remember for the discrete case, the conditional PMF of $X$ given $Y=y$ is given by
</p>
\begin{align}%\label{}
\nonumber  P_{X|Y}(x_i|y_j)&=\frac{P_{XY}(x_i,y_j)}{P_Y(y_j)}.
\end{align}
Now, if $X$ and $Y$ are jointly continuous, the conditional PDF of $X$ given $Y$ is given by
\begin{align}%\label{}
\nonumber  f_{X|Y}(x|y)=\frac{f_{XY}(x,y)}{f_Y(y)}.
\end{align}
This means that if we get to observe $Y=y$, then we need to use the above conditional density for the random variable $X$. To get an intuition about the formula, note that by definition, for small $\Delta_x$ and $\Delta_y$ we should have
\begin{align}%\label{}
\nonumber   f_{X|Y}(x|y) &\approx  \frac{P(x \leq X \leq x+\Delta_x | y \leq Y \leq y+\Delta_y)}{\Delta_x} \hspace{20pt} \textrm{(definition of PDF)}\\
\nonumber   &=\frac{P(x \leq X \leq x+\Delta_x , y \leq Y \leq y+\Delta_y)}{P(y \leq Y \leq y+\Delta_y) \Delta_x}\\
\nonumber   &\approx \frac{f_{XY}(x,y) \Delta_x \Delta_y}{f_Y(y) \Delta_y \Delta_x}\\
\nonumber   &=\frac{f_{XY}(x,y)}{f_Y(y)}.
\end{align}
Similarly, we can write the conditional PDF of $Y$, given $X=x$, as
\begin{align}%\label{}
\nonumber  f_{Y|X}(y|x)=\frac{f_{XY}(x,y)}{f_X(x)}.
\end{align}

<div style="padding:25px;margin:30px 40px; border:2px solid black">
For two jointly continuous random variables $X$ and $Y$, we can define the following conditional concepts:
\begin{enumerate}
<ol>
<li>
  The Conditional PDF of $X$ given $Y=y$:
  \begin{align}
   \nonumber f_{X|Y}(x|y)=\frac{f_{XY}(x,y)}{f_Y(y)}
  \end{align}
</li>
<li>
   The conditional probability that $X \in A$ given $Y=y$:
  \begin{align}
   \nonumber P(X \in A|Y=y)=\int_{A} f_{X|Y}(x|y) dx
  \end{align}
</li>
<li>
  The conditional CDF of $X$ given $Y=y$:
  \begin{align}
   \nonumber F_{X|Y}(x|y)=P(X \leq x|Y=y)=\int_{-\infty}^{x} f_{X|Y}(x|y) dx
  \end{align}
</li>
</ol>
</div>

<!-- Example -->
<hr /><span class="example">Example </span>
Let $X$ and $Y$ be two jointly continuous random variables with joint PDF
\begin{equation}
 \nonumber f_{XY}(x,y) = \left\{
  \begin{array}{l l}
    \frac{x^2}{4}+\frac{y^2}{4}+\frac{xy}{6}  &  \quad 0 \leq x \leq 1, 0 \leq y \leq 2 \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
\end{equation}
For $0 \leq y \leq 2$, find
<ol type="a">
  <li>the conditional PDF of $X$ given $Y=y$;</li>
  <li> $P(X&lt;\frac{1}{2}|Y=y)$.</li>
</ol>

<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
<ol type="a">
<li>
   Let us first find the marginal PDF of $Y$. We have
\begin{align}%\label{}
\nonumber f_Y(y)&=\int_{0}^{1} \frac{x^2}{4}+\frac{y^2}{4}+\frac{xy}{6} \hspace{5pt} dx \\
\nonumber  &=\frac{3y^2+y+1}{12}, \hspace{20pt} \textrm{for }0 \leq y \leq 2.
\end{align}
Thus, for  $0 \leq y \leq 2$,   we obtain
\begin{align}
   \nonumber f_{X|Y}(x|y)&=\frac{f_{XY}(x,y)}{f_Y(y)}\\
   \nonumber &=\frac{3x^2+3y^2+2xy}{3y^2+y+1}, \hspace{20pt} \textrm{for }0 \leq x \leq 1.
\end{align}
Thus, for  $0 \leq y \leq 2$, we have
\begin{equation}
 \nonumber f_{X|Y}(x|y) = \left\{
  \begin{array}{l l}
    \frac{3x^2+3y^2+2xy}{3y^2+y+1}   &  \quad  0 \leq x \leq 1 \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
\end{equation}
</li>
<li>
    We have
   \begin{align}%\label{}
   \nonumber P\left(X&lt;\frac{1}{2}|Y=y\right) &=\int_{0}^{\frac{1}{2}} \frac{3x^2+3y^2+2xy}{3y^2+y+1} \hspace{5pt} dx \\
   \nonumber  &=\frac{1}{3y^2+y+1} \bigg[ x^3+yx^2+3y^2x \bigg]_{0}^{\frac{1}{2}}\\
   \nonumber  &=\frac{\frac{3}{2}y^2+\frac{y}{4}+\frac{1}{8}}{3y^2+y+1}.
   \end{align}
   Note that, as we expect, $P\left(X&lt;\frac{1}{2}|Y=y\right)$ depends on $y$.
</li>
</ol>
</li></ul>
</li></ul></div><hr /><br />
<!-- /Example -->

Conditional expectation and variance are similarly defined. Given $Y=y$, we need to replace $f_X(x)$ by $f_{X|Y}(x|y)$ in the formulas for expectation:

<div style="margin:30px 40px; border: 2px solid black; padding: 25px;">
For two jointly continuous random variables $X$ and $Y$, we have:
<ol>
<li>
  Expected value of $X$ given $Y=y$:
  \begin{align}
   \nonumber E[X|Y=y]=\int_{-\infty}^{\infty} xf_{X|Y}(x|y) dx.
  \end{align}
</li>
<li>
   Conditional LOTUS:
  \begin{align}
   \nonumber E[g(X)|Y=y]=\int_{-\infty}^{\infty} g(x)f_{X|Y}(x|y) dx.
  \end{align}
</li>
<li>
   Conditional variance of $X$ given $Y=y$:
  \begin{align}
   \nonumber Var(X|Y=y)=E[X^2|Y=y]-(E[X|Y=y])^2.
  \end{align}
</li>
</ol>
</div>

<!-- Example -->
<hr /><span class="example">Example </span><br />
Let $X$ and $Y$ be as in Example 5.21. Find $E[X|Y=1]$ and Var$(X|Y=1)$.
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
\begin{align}
   \nonumber E[X|Y=1]&=\int_{-\infty}^{\infty} xf_{X|Y}(x|1) dx\\
   \nonumber &=\int_{0}^{1} x\frac{3x^2+3y^2+2xy}{3y^2+y+1}|_{y=1} \hspace{5pt} dx\\
   \nonumber &=\int_{0}^{1} x\frac{3x^2+3+2x}{3+1+1} \hspace{5pt} dx    \hspace{30pt}  (y=1)\\
   \nonumber &=\frac{1}{5} \int_{0}^{1} 3x^3+2x^2+3x \hspace{5pt} dx \\
   \nonumber &=\frac{7}{12},
\end{align}
\begin{align}
   \nonumber E[X^2|Y=1]&=\int_{-\infty}^{\infty} x^2f_{X|Y}(x|1) dx\\
   \nonumber &=\frac{1}{5} \int_{0}^{1} 3x^4+2x^3+3x^2 \hspace{5pt} dx \\
   \nonumber &=\frac{21}{50}.
\end{align}
So we have
\begin{align}
   \nonumber \textrm{Var}(X|Y=1)&=E[X^2|Y=1]-(E[X|Y=1])^2\\
   \nonumber &=\frac{21}{50}-\left(\frac{7}{12}\right)^2\\
   \nonumber &=\frac{287}{3600}.
\end{align}
</li></ul>
</li></ul></div><hr /><br />

<h2>Independent Random Variables:</h2>
When two jointly continuous random variables are independent, we must have
\begin{align}%\label{}
\nonumber  f_{X|Y}(x|y)=f_X(x).
\end{align}
That is, knowing the value of $Y$ does not change the PDF of $X$. Since $f_{X|Y}(x|y)=\frac{f_{XY}(x,y)}{f_Y(y)}$, we conclude that for two independent continuous random variables we must have
\begin{align}%\label{}
\nonumber  f_{XY}(x,y)=f_X(x)f_Y(y).
\end{align}

<div class="cbox">
  Two continuous random variables $X$ and $Y$ are independent if
\begin{align}%\label{}
\nonumber  f_{XY}(x,y)=f_X(x) f_Y(y), \hspace{10pt} \textrm{ for all }x,y.
\end{align}
Equivalently, $X$ and $Y$ are independent if
\begin{align}%\label{}
\nonumber  F_{XY}(x,y)=F_X(x) F_Y(y), \hspace{10pt}  \textrm{ for all }x,y.
\end{align}
  If $X$ and $Y$ are independent, we have
\begin{align}%\label{}
\nonumber  &E[XY]=EX EY, \\
\nonumber  &E[g(X)h(Y)]=E[g(X)]E[h(Y)].
\end{align}
</div><br />
Suppose that we are given the joint PDF $f_{XY}(x,y)$ of two random variables $X$ and $Y$. If we can write
\begin{align}%\label{}
\nonumber  f_{XY}(x,y)=f_1(x)f_2(y),
\end{align}
then $X$ and $Y$ are independent.

<!-- Example -->
<hr /><span class="example">Example </span><br />
Determine whether $X$ and $Y$ are independent:
<ol type="a">
<li>
   $f_{XY}(x,y) = \left\{
  \begin{array}{l l}
     2e^{-x-2y} &  \quad x,y>0  \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.$
</li>
<li>
  $f_{XY}(x,y) = \left\{
  \begin{array}{l l}
     8xy &  \quad 0&lt;x&lt;y&lt;1   \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.$
</li>
</ol>
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul></li>
<ol type="a">
<li>
   We can write
  \begin{align}%\label{}
  \nonumber  f_{XY}(x,y)=\big[e^{-x}u(x)\big]\big[2e^{-2y}u(y)\big],
  \end{align}
  where  $u(x)$  is the unit step function:
  \begin{align}%\label{}
  \nonumber  u(x)= \left\{
  \begin{array}{l l}
     1 &  \quad x \geq 1   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
  \end{align}
  Thus, we conclude that $X$ and $Y$ are independent.
</li>
<li>
  \item For this case, it does not seem that we can write $f_{XY}(x,y)$ as a product of some $f_1(x)$ and $f_2(y)$. Note that the given region $0&lt;x&lt;y&lt;1$ enforces that $x&lt;y$. That is, we always have $X&lt;Y$. Thus, we conclude that $X$ and $Y$ are not independent. To show this, we can obtain the marginal PDFs of $X$ and $Y$ and show that $f_{XY}(x,y) \neq f_X(x) f_Y(y), \textrm{ for some }x,y$. We have for $0 \leq x \leq 1$:
      \begin{align}%\label{}
      \nonumber f_X(x)&=\int_{x}^{1}8xy dy   \\
      \nonumber  &=4x(1-x^2).
     \end{align}
     Thus,
    \begin{equation}
    \nonumber f_X(x) = \left\{
    \begin{array}{l l}
    4x(1-x^2)  &  \quad 0&lt;x&lt;1  \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
    \end{array} \right.
    \end{equation}
  Similarly, we obtain
  \begin{equation}
    \nonumber f_Y(y) = \left\{
    \begin{array}{l l}
    4y^3  &  \quad 0&lt;y&lt;1  \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
    \end{array} \right.
    \end{equation}
  As we see, $f_{XY}(x,y)\neq f_X(x) f_Y(y)$, thus $X$ and $Y$ are NOT independent.
</li>
</ol>
</li></ul>
</li></ul></div><br />
<!-- /Example -->

<!-- Example -->
<hr /><span class="example">Example </span><br />
Consider the unit disc
\begin{align}%\label{}
\nonumber  D=\{(x,y)|x^2+y^2 \leq 1\}.
\end{align}
Suppose that we choose a point $(X,Y)$ uniformly at random in $D$. That is, the joint PDF of $X$ and $Y$ is given by
\begin{equation}
 \nonumber f_{XY}(x,y) = \left\{
  \begin{array}{l l}
    c &  \quad (x,y) \in D  \\
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
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
<ol type="a">
<li>
  We have

  \begin{align}%\label{}
  \nonumber  1&=\int_{-\infty}^{\infty} \int_{-\infty}^{\infty} f_{XY}(x,y)dxdy\\
  \nonumber  &=\iint \limits_{D}   c  \hspace{5pt} dxdy\\
  \nonumber  &=c (\textrm{area of } D)\\
  \nonumber  &=c (\pi).
  \end{align}
  Thus, $c=\frac{1}{\pi}$.
</li>
<li>
    For $-1 \leq x \leq 1$, we have
  \begin{align}%\label{}
  \nonumber  f_X(x)&=\int_{-\infty}^{\infty} f_{XY}(x,y)dy\\
  \nonumber  &=\int_{-\sqrt{1-x^2}}^{\sqrt{1-x^2}}  \frac{1}{\pi}\hspace{5pt} dy\\
  \nonumber  &=\frac{2}{\pi}\sqrt{1-x^2}.
  \end{align}
  Thus,
  \begin{equation}
    \nonumber f_X(x) = \left\{
    \begin{array}{l l}
    \frac{2}{\pi}\sqrt{1-x^2}  &  \quad -1 \leq x \leq 1  \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
    \end{array} \right.
    \end{equation}
  Similarly,
  \begin{equation}
      \nonumber f_Y(y) = \left\{
    \begin{array}{l l}
    \frac{2}{\pi}\sqrt{1-y^2}  &  \quad -1 \leq y \leq 1  \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
    \end{array} \right.
    \end{equation}
</li>
<li>
   We have
  \begin{align}%\label{}
  \nonumber  f_{X|Y}(x|y)&=\frac{f_{XY}(x,y)}{f_Y(y)}\\
  \nonumber  &=\left\{
    \begin{array}{l l}
    \frac{1}{2\sqrt{1-y^2}}  &  \quad -\sqrt{1-y^2} \leq x \leq \sqrt{1-y^2}  \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
    \end{array} \right.
  \end{align}
  Note that the above equation indicates that, given $Y=y$, $X$ is uniformly distributed on $[-\sqrt{1-y^2},\sqrt{1-y^2}]$. We write
  \begin{align}%\label{}
  \nonumber  X|Y=y \hspace{5pt}  \sim \hspace{5pt}  Uniform(-\sqrt{1-y^2},\sqrt{1-y^2}).
  \end{align}
</li>
<li>
   Are $X$ and $Y$ independent? No, because $f_{XY}(x,y)\neq f_X(x) f_Y(y)$.
</li>
</ol>
</li><ul>
</li><ul></div><hr /><br />
<!-- /Example -->

<h2>Law of Total Probability:</h2>
We now discuss the law of total probability for continuous random variables. This is completely analogous to the discrete case. In particular, the law of total probability, the law of total expectation (law of iterated expectations), and the law of total variance can be stated as follows:

<div class="cbox">
<p style="text-align:center;">Law of Total Probability:</p>
\begin{align}\label{eq:LOTP-cont}
  P(A)=\int_{-\infty}^{\infty}P(A|X=x)f_X(x) \hspace{5pt} dx
\end{align}
</div><br />

<div class="cbox">
<p class="centered">Law of Total Expectation:</p>
\begin{align}\label{eq:LOTE-cont}
  \nonumber E[Y]&=\int_{-\infty}^{\infty}E[Y|X=x]f_X(x) \hspace{5pt} dx\\
  &=E[E[Y|X]]
\end{align}
</div><br />

<div class="cbox">
<p class="centered">Law of Total Variance:</p>
\begin{align}\label{eq:LOTV-cont}
  \textrm{Var}(Y)=E[\textrm{Var}(Y|X)]+\textrm{Var}(E[Y|X])
\end{align}
</div>

Let's look at some examples.
<!-- Example -->
<hr /><span class="example">Example </span><br />
Let $X$ and $Y$ be two independent $Uniform(0,1)$ random variables. Find $P(X^3+Y&lt;1)$.
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
Using the law of total probability (Equation 5.16), we can write
\begin{align}%\label{}
\nonumber  P(X^3+Y&lt;1)&= \int_{-\infty}^{\infty}P(X^3+Y&lt;1|X=x)f_X(x) \hspace{5pt} dx\\
\nonumber  &=\int_{0}^{1}P(x^3+Y&gt;1|X=x) \hspace{5pt} dx\\
\nonumber  &=\int_{0}^{1}P(Y&gt;1-x^3) \hspace{5pt} dx &\textrm{(since $X$ and $Y$ are independent)} \\
\nonumber  &=\int_{0}^{1}x^3 \hspace{5pt} dx  &\textrm{(since $Y \sim Uniform(0,1)$) }\\
\nonumber  &=\frac{1}{4}.
\end{align}
</li></ul>
</li></ul></div><br />
<!-- /Example -->

<!-- Example -->
<span class="example">Example </span><br />
Suppose $X \sim Uniform(1,2)$ and given $X=x$, $Y$ is an exponential random variable with parameter $\lambda=x$, so we can write
\begin{align}%\label{}
\nonumber  Y|X=x \hspace{10pt} \sim \hspace{10pt} Exponential(x).
\end{align}
We sometimes write this as
\begin{align}%\label{}
\nonumber  Y|X \hspace{10pt} \sim \hspace{10pt} Exponential(X).
\end{align}
<ol type="a">
  <li> Find $EY$.</li>
  <li> Find Var(Y)$.</li>
</ol>
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
<ol type="a">
  <li> We use the law of total expectation (Equation \ref{eq:LOTE-cont}) to find $EY$. Remember that if $Y \sim Exponential(\lambda)$, then $EY=\frac{1}{\lambda}$. Thus we conclude
  \begin{align}
  \nonumber E[Y|X=x]=\frac{1}{x}.
  \end{align}
  Using the law of total expectation, we have
  \begin{align}
  \nonumber EY&=\int_{-\infty}^{\infty} E[Y|X=x] f_X(x)dx\\
  \nonumber &=\int_{1}^{2} E[Y|X=x] \cdot 1 \hs dx\\
  \nonumber &=\int_{1}^{2}\frac{1}{x}dx\\
  \nonumber &= \ln 2.
  \end{align}

  Another way to write the above calculation is

  \begin{align}
  \nonumber EY&=E[E[Y|X]] &(\textrm{law of total expectation})\\
  \nonumber &=E\left[\frac{1}{X}\right]   &(\textrm{since } E[Y|X]=\frac{1}{X})\\
  \nonumber &=\int_{1}^{2}\frac{1}{x}dx\\
  \nonumber &= \ln 2.
  \end{align}
</li>
<li>
   To find $\var(Y)$, we can write
  \begin{align}
  \nonumber \var(Y)&=E[Y^2]-(E[Y])^2\\
  \no &=E[Y^2]-(\ln 2)^2\\
  \no &=E\big[E[Y^2|X]\big]-(\ln 2)^2 & (\textrm{law of total expectation})\\
  \no &=E\left[\frac{2}{X^2}\right]-(\ln 2)^2 & \big(\textrm{since } Y|X \hs \sim \hs Exponential(X)\big)\\
  \no &=\int_{1}^{2}\frac{2}{x^2}dx-(\ln 2)^2 \\
  \no &=1-(\ln 2)^2.
  \end{align}
  Another way to find $\var(Y)$ is to apply the law of total variance:
  \begin{align}
  \no \textrm{Var}(Y)=E[\textrm{Var}(Y|X)]+\textrm{Var}(E[Y|X]).
  \end{align}
  Since $Y|X \hs \sim \hs Exponential(X)$, we conclude
  \begin{align}
  \no &E[Y|X]=\frac{1}{X},\\
  \no &\var(Y|X)=\frac{1}{X^2}.
  \end{align}
  Therefore
  \begin{align}
  \no \textrm{Var}(Y)&=E\left[\frac{1}{X^2}\right]+\textrm{Var}\left(\frac{1}{X}\right)\\
  \no &=E\left[\frac{1}{X^2}\right]+E\left[\frac{1}{X^2}\right]-\left(E\left[\frac{1}{X}\right]\right)^2\\
  \no &=E\left[\frac{2}{X^2}\right]-(\ln 2)^2\\
  \no &=1-(\ln 2)^2.
  \end{align}
</li>
</ol>
</li><ul>
</li></ul></div><hr /><br />
<!-- /Example -->


<!-- /Section Content -->


<?php include 'section_footer.php'; ?>
