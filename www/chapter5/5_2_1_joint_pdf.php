<?php
	$section_no			= "5.2.1";
	$section_title	= "Joint Probability Density Function (PDF)";
	$section_prev		= "chapter5/5_2_0_continuous_vars.php";
	$section_next		= "chapter5/5_2_2_joint_cdf.php";
	include "../Control/autonumber.php";
	loadHeaders(66);
	include "section_header.php";
?>

<!-- Section Content -->
<p>
Here, we will define jointly continuous random variables. Basically, two random variables are jointly continuous if they have a joint probability density function as defined bellow.
</p>
<div style="padding: 25px;margin:30px 40px; border: 2px solid black;">
<span class="definition">Definition </span><br />
Two random variables $X$ and $Y$ are <b>jointly continuous</b> if there exists a nonnegative function $f_{XY}:\mathbb{R}^2 \rightarrow \mathbb{R}$, such that, for any set $A\in \mathbb{R}^2$, we have
\begin{align}\label{eq:double-int}
  P\big((X,Y) \in A\big) =\iint \limits_A f_{XY}(x,y)dxdy \hspace{30pt} (5.15)
\end{align}
The function $f_{XY}(x,y)$ is called the <b>joint probability density function (PDF)</b> of $X$ and $Y$.
</div><br />
In the above definition, the domain of $f_{XY}(x,y)$ is the entire $\mathbb{R}^2$. We may define the range of $(X,Y)$ as
\begin{align}%\label{}
\nonumber  R_{XY}=\{(x,y) | f_{X,Y}(x,y)>0\}.
\end{align}
The above double integral (Equation 5.15) exists for all sets $A$ of practical interest. If we choose $A=\mathbb{R}^2$, then the probability of $(X,Y) \in A$ must be one, so we must have
<div style="padding:25px;margin:30px 40px; border: 2px solid black;">
\begin{align}%\label{}
\nonumber  \int_{-\infty}^{\infty} \int_{-\infty}^{\infty} f_{XY}(x,y)dxdy=1
\end{align}
</div><br />

The intuition behind the joint density $f_{XY}(x,y)$ is similar to that of the PDF of a single random variable. In particular, remember that for a random variable $X$ and small $\Delta$, we have
\begin{equation}%\label{}
  \nonumber P(x&lt;X \leq x+\delta) \approx f_X(x) \delta.
\end{equation}
Similarly, for small $\delta_x$ and $\delta_y$, we can write
\begin{equation}%\label{}
  \nonumber P(x&lt;X \leq x+\delta_x, y \leq Y \leq y+\delta_y ) \approx f_{XY}(x,y) \delta_x \delta_y.
\end{equation}

<!-- Example -->
<hr /><span class="example">Example </span><br />
Let $X$ and $Y$ be two jointly continuous random variables with joint PDF
\begin{equation}
 \nonumber f_{XY}(x,y) = \left\{
  \begin{array}{l l}
     x+cy^2 &  \quad 0 \leq x,y \leq 1  \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
\end{equation}
<ol type="a">
  <li>Find the constant $c$.</li>
  <li>Find $P(0 \leq X \leq \frac{1}{2}, 0 \leq Y \leq \frac{1}{2})$.</li>
</ol>
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
<ol type="a">
  <li>To find $c$, we use
\begin{align}%\label{}
\nonumber  \int_{-\infty}^{\infty} \int_{-\infty}^{\infty} f_{XY}(x,y)dxdy=1.
\end{align}
Thus, we have
  \begin{align}%\label{}
  \nonumber  1&=\int_{-\infty}^{\infty} \int_{-\infty}^{\infty} f_{XY}(x,y)dxdy\\
  \nonumber  &=\int_{0}^{1} \int_{0}^{1}  x+cy^2  \hspace{5pt} dxdy\\
  \nonumber  &=\int_{0}^{1} \bigg[ \frac{1}{2} x^2+cy^2x \bigg]_{x=0}^{x=1}  \hspace{5pt} dy\\
  \nonumber  &=\int_{0}^{1} \frac{1}{2}+cy^2  \hspace{5pt} dy\\
  \nonumber  &=\bigg[ \frac{1}{2}y+\frac{1}{3}cy^3 \bigg]_{y=0}^{y=1}\\
  \nonumber  &=\frac{1}{2}+\frac{1}{3}c.
  \end{align}
  Therefore, we obtain $c=\frac{3}{2}$.
</li>

  <li>To find $P(0 \leq X \leq \frac{1}{2}, 0 \leq Y \leq \frac{1}{2})$, we can write

  \begin{align}%\label{}
\nonumber  P\big((X,Y) \in A\big) =\iint_{A} f_{XY}(x,y)dxdy, \hspace{10pt} \textrm{for }A=\{(x,y)| 0 \leq x,y \leq 1\}.
\end{align}
  Thus,

  \begin{align}%\label{}
  \nonumber  P (0 \leq X \leq \frac{1}{2}, 0 \leq Y \leq \frac{1}{2})&= \int_{0}^{\frac{1}{2}}\int_{0}^{\frac{1}{2}} \left(x+\frac{3}{2}y^2\right) dxdy \\
  \nonumber &= \int_{0}^{\frac{1}{2}} \bigg[\frac{1}{2}x^2+\frac{3}{2}y^2x\bigg]_{0}^{\frac{1}{2}}dy\\
  \nonumber &=\int_{0}^{\frac{1}{2}} \left(\frac{1}{8}+\frac{3}{4}y^2\right) dy\\
  \nonumber &=\frac{3}{32}.
  \end{align}
</li>
</ol>
</li></ul>
</li></ul></div><hr /><br />

We can find marginal PDFs of $X$ and $Y$ from their joint PDF. This is exactly analogous to what we saw in the discrete case. In particular, by integrating over all $y$'s, we obtain $f_X(x)$. We have

<div style="padding:25px;margin:30px 40px;border:2px solid black;">
<p style="text-align:center;">Marginal PDFs</p>
\begin{align}%\label{}
\nonumber  f_X(x)=\int_{-\infty}^{\infty} f_{XY}(x,y)dy, \hspace{10pt} \textrm{ for all }x,\\
\nonumber  f_Y(y)=\int_{-\infty}^{\infty} f_{XY}(x,y)dx, \hspace{10pt} \textrm{ for all }y.
\end{align}
</div>

<!-- Example -->
<hr /><span class="example">Example </span><br />
In Example 5.15 find the marginal PDFs $f_X(x)$ and $f_Y(y)$.
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
For $0 \leq x \leq 1$, we have
\begin{align}%\label{}
\nonumber  f_X(x)&=\int_{-\infty}^{\infty} f_{XY}(x,y)dy \\
\nonumber  &=\int_{0}^{1}\left(x+\frac{3}{2}y^2\right)dy\\
\nonumber  &=\bigg[xy+\frac{1}{2}y^3 \bigg]_{0}^{1}\\
\nonumber  &=x+\frac{1}{2}.
\end{align}
Thus,
\begin{equation}
 \nonumber f_{X}(x) = \left\{
  \begin{array}{l l}
     x+\frac{1}{2} &  \quad 0 \leq x \leq 1  \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
\end{equation}
Similarly, for $0 \leq y \leq 1$, we have
\begin{align}%\label{}
\nonumber  f_Y(y)&=\int_{-\infty}^{\infty} f_{XY}(x,y)dx \\
\nonumber  &=\int_{0}^{1}\left(x+\frac{3}{2}y^2\right)dx\\
\nonumber  &=\bigg[\frac{1}{2}x^2+\frac{3}{2}y^2x \bigg]_{0}^{1}\\
\nonumber  &=\frac{3}{2}y^2+\frac{1}{2}.
\end{align}
Thus,
\begin{equation}
 \nonumber f_{Y}(y) = \left\{
  \begin{array}{l l}
     \frac{3}{2}y^2+\frac{1}{2} &  \quad 0 \leq y \leq 1  \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
\end{equation}
</li><ul>
</li></ul></div><br />
<!-- /Example -->

<!-- Example -->
<hr /><span class="example">Example </span><br />
Let $X$ and $Y$ be two jointly continuous random variables with joint PDF
\begin{equation}
 \nonumber f_{XY}(x,y) = \left\{
  \begin{array}{l l}
    cx^2y  &  \quad 0 \leq y \leq x \leq 1 \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
\end{equation}
<ol type="a">
  <li>Find $R_{XY}$ and show it in the $x-y$ plane.</li>
  <li>Find the constant $c$.</li>
  <li>Find marginal PDFs, $f_X(x)$ and $f_Y(y)$.</li>
  <li>Find $P(Y\leq \frac{X}{2})$.</li>
  <li> Find $P(Y\leq \frac{X}{4}|Y\leq \frac{X}{2})$.</li>
</ol>
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
<ol type="a">
  <li> From the joint PDF, we find that
  \begin{align}%\label{}
    \nonumber R_{XY}=\{(x,y)\in \mathbb{R}^2| 0 \leq y \leq x \leq 1 \}.
  \end{align}
  Figure 5.6 shows $R_{XY}$ in the $x-y$ plane.<br />
	<img src="images/chapter5/continuous56.png" style="display:block; width:500px;height:auto;margin:20px auto;" />
	<p style="text-align:center;">Figure 5.6: Figure shows $R_{XY}$ as well as integration region for finding $P(Y\leq \frac{X}{2})$.</p>
	</li>
	<li>
  To find the constant $c$, we can write
  \begin{align}%\label{}
  \nonumber  1&=\int_{-\infty}^{\infty} \int_{-\infty}^{\infty} f_{XY}(x,y)dxdy\\
  \nonumber  &=\int_{0}^{1} \int_{0}^{x}  cx^2y  \hspace{5pt} dydx\\
  \nonumber  &=\int_{0}^{1} \frac{c}{2} x^4 dx\\
  \nonumber  &=\frac{c}{10}.
  \end{align}
  Thus, $c=10$.
</li>
<li>
   To find the marginal PDFs, first note that $R_X=R_Y=[0,1]$. For $0 \leq x \leq 1$, we can write
  \begin{align}%\label{}
  \nonumber  f_X(x)&=\int_{-\infty}^{\infty} f_{XY}(x,y)dy\\
  \nonumber  &=\int_{0}^{x}10x^2ydy\\
  \nonumber  &=5x^4.
  \end{align}
  Thus,
  \begin{equation}
  \nonumber f_X(x) = \left\{
  \begin{array}{l l}
    5x^4  &  \quad  0 \leq x \leq 1\\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
  \end{equation}
  For $0 \leq y \leq 1$, we can write
  \begin{align}%\label{}
  \nonumber  f_Y(y)&=\int_{-\infty}^{\infty} f_{XY}(x,y)dx\\
  \nonumber  &=\int_{y}^{1}10x^2ydx\\
  \nonumber  &=\frac{10}{3}y(1-y^3).
  \end{align}
  Thus,
  \begin{equation}
  \nonumber f_Y(y) = \left\{
  \begin{array}{l l}
    \frac{10}{3}y(1-y^3)  &  \quad  0 \leq y \leq 1\\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
  \end{equation}
</li>
<li>
  To find $P(Y\leq \frac{X}{2})$, we need to integrate $f_{XY}(x,y)$ over region $A$ shown in Figure 5.6. In particular, we have
  \begin{align}%\label{}
  \nonumber  P\left(Y\leq \frac{X}{2}\right)&=\int_{-\infty}^{\infty} \int_{0}^{\frac{x}{2}} f_{XY}(x,y)dydx\\
  \nonumber  &=\int_{0}^{1} \int_{0}^{\frac{x}{2}}  10x^2y  \hspace{5pt} dydx\\
  \nonumber  &=\int_{0}^{1} \frac{5}{4} x^4 dx\\
  \nonumber  &=\frac{1}{4}.
  \end{align}
</li>

  <li> To find $P(Y\leq \frac{X}{4}|Y\leq \frac{X}{2})$, we have
  \begin{align}%\label{}
  \nonumber  P\left(Y\leq \frac{X}{4}|Y\leq \frac{X}{2}\right)&=\frac{P\left(Y\leq \frac{X}{4},Y\leq \frac{X}{2}\right)}{P\left(Y\leq \frac{X}{2}\right)}\\
  \nonumber  &=4P\left(Y\leq \frac{X}{4}\right)\\
  \nonumber  &=4\int_{0}^{1} \int_{0}^{\frac{x}{4}}  10x^2y  \hspace{5pt} dydx\\
  \nonumber  &=4\int_{0}^{1} \frac{5}{16} x^4 dx\\
  \nonumber  &=\frac{1}{4}.
  \end{align}
</li>
</li></ul>
</li></ul></div><hr /><br />


<!-- /Section Content -->
<?php include 'section_footer.php'; ?>
