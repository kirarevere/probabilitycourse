<?php
	$section_no			= "5.2.5";
	$section_title	= "Solved Problems";
	$section_prev		= "chapter5/5_2_4_functions.php";
	$section_next		= "chapter5/5_3_";
	include						"../Control/autonumber.php";
	loadHeaders(70);
	include						"section_header.php";
?>

<!-- Section Content -->

<span class="problem">Problem </span><br />
Let $X$ and $Y$ be jointly continuous random variables with joint PDF
  \begin{equation}
  \nonumber f_{X,Y}(x,y) = \left\{
  \begin{array}{l l}
    cx+1  &  \quad  x,y \geq 0, x+y&lt;1 \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
  \end{equation}
<ol>
    <li> Show the range of $(X,Y)$, $R_{XY}$, in the $x-y$ plane.</li>
    <li> Find the constant $c$.</li>
    <li> Find the marginal PDFs $f_X(x)$ and $f_Y(y)$.</li>
    <li> Find $P(Y&lt;2X^2)$.</li>
</ol>
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
<ol>
<li>Figure 5.8(a) shows $R_{XY}$ in the $x-y$ plane.
<img src="images/chapter5/solved5_8.png" style="display:block;width:400px;height:auto;margin:10px auto;" />
<p class="centered">The figure shows (a) $R_{XY}$ as well as (b) the integration region for finding $P(Y&lt;2X^2)$ for Solved Problem 1.</p>
</li>
<li>
    \item To find the constant $c$, we write
    \begin{align}%\label{}
     \nonumber  1&=\int_{-\infty}^{\infty} \int_{-\infty}^{\infty} f_{XY}(x,y)dxdy\\
     \nonumber  &=\int_{0}^{1} \int_{0}^{1-x}  cx+1  \hspace{5pt} dydx\\
     \nonumber  &=\int_{0}^{1} (cx+1)(1-x)  \hspace{5pt} dydx\\
     \nonumber  &=\frac{1}{2}+\frac{1}{6}c.
    \end{align}
    Thus, we conclude $c=3$.
</li>
<li>
     We first note that $R_X=R_Y=[0,1]$.
    \begin{align}%\label{}
     \nonumber  f_X(x)&=\int_{-\infty}^{\infty} f_{XY}(x,y)dy\\
     \nonumber  &=\int_{0}^{1-x}  3x+1  \hspace{5pt} dy\\
     \nonumber  &=(3x+1)(1-x) \hspace{10pt} \textrm{ for }x \in [0,1].
    \end{align}
    Thus, we have
    \begin{equation}
  \nonumber f_X(x) = \left\{
  \begin{array}{l l}
    (3x+1)(1-x)  &  \quad 0 \leq x \leq 1  \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
  \end{equation}
  Similarly, we obtain

  \begin{align}%\label{}
     \nonumber  f_Y(y)&=\int_{-\infty}^{\infty} f_{XY}(x,y)dx\\
     \nonumber  &=\int_{0}^{1-y}  3x+1  \hspace{5pt} dx\\
     \nonumber  &=\frac{1}{2}(1-y)(5-3y), \hspace{10pt} \textrm{ for }y \in [0,1].
    \end{align}
    Thus, we have
    \begin{equation}
  \nonumber f_Y(y) = \left\{
  \begin{array}{l l}
    \frac{1}{2}(1-y)(5-3y)  &  \quad 0 \leq y \leq 1  \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
  \end{equation}
</li>
<li>
     To find $P(Y<2X^2)$, we need to integrate $f_{XY}(x,y)$ over the region shown in Figure 5.8(b). We have
    \begin{align}%\label{}
     \nonumber  P(Y<2X^2)&=\int_{-\infty}^{\infty} \int_{-\infty}^{2x^2} f_{XY}(x,y)dydx\\
     \nonumber &=\int_{0}^{1} \int_{0}^{\min(2x^2,1-x)}  3x+1  \hspace{5pt} dydx\\
     \nonumber &=\int_{0}^{1} (3x+1) \min(2x^2,1-x) \hspace{5pt} dx\\
     \nonumber &=\int_{0}^{\frac{1}{2}} 2x^2(3x+1) \hspace{5pt} dx + \int_{\frac{1}{2}}^1 (3x+1)(1-x) \hspace{5pt} dx\\
     \nonumber &=\frac{53}{96}.
    \end{align}
</li>


</li></ul>
</li></ul></div><br />

<hr /><span class="problem">Problem </span><br />
Let $X$ and $Y$ be jointly continuous random variables with joint PDF
  \begin{equation}
  \nonumber f_{X,Y}(x,y) = \left\{
  \begin{array}{l l}
    6e^{-(2x+3y)}  &  \quad  x,y \geq 0 \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
  \end{equation}
<ol>
    <li> Are $X$ and $Y$ independent?</li>
    <li> Find $E[Y|X&gt;2]$.</li>
    <li> Find $P(X&gt;Y)$.</li>
</ol>
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
<ol>
    <li> We can write
  \begin{align}
    \nonumber f_{X,Y}(x,y) =f_X(x)f_Y(y),
  \end{align}
  where
  \begin{align}
    \nonumber f_X(x)=2e^{-2x}u(x), \hspace{20pt}  f_Y(y)=3e^{-3y}u(y).
  \end{align}
  Thus, $X$ and $Y$ are independent.
	</li>


    <li> Since $X$ and $Y$ are independent, we have $E[Y|X&gt;2]=E[Y]$. Note that $Y \sim Exponential(3)$, thus $EY=\frac{1}{3}$.
		</li>

    <li> We have
    \begin{align}
    \nonumber P(X&gt;Y)&=\int_{0}^{\infty} \int_{y}^{\infty} 6e^{-(2x+3y)} dx dy \\
    \nonumber &=\int_{0}^{\infty} 3e^{-5y} dy \\
    \nonumber &=\frac{3}{5}.
    \end{align}
		</li>
</ol>

</li></ul>
</li></ul></div><br />


<hr /><span class="problem">Problem </span><br />
Let $X$ be a continuous random variable with PDF
  \begin{equation}
  \nonumber f_X(x) = \left\{
  \begin{array}{l l}
    2x  &  \quad  0 \leq x \leq 1 \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
  \end{equation}
  We know that given $X=x$, the random variable $Y$ is uniformly distributed on $[-x,x]$.
<ol>
   <li> Find the joint PDF $f_{XY}(x,y)$.</li>
     <li>Find $f_Y(y)$.</li>
 		<li> Find $P(|Y|&lt;X^3)$.</li>
</ol>
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
<ol>
   <li> First note that, by the assumption
    \begin{equation}
  \nonumber f_{Y|X}(y|x) = \left\{
  \begin{array}{l l}
    \frac{1}{2x}  &  \quad  -x \leq y \leq x \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
  \end{equation}
  Thus, we have
  \begin{equation}
  \nonumber f_{XY}(x,y)=f_{Y|X}(y|x)f_X(x) = \left\{
  \begin{array}{l l}
    1  &  \quad  0 \leq x \leq 1, -x \leq y \leq x \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
  \end{equation}
  Thus,
  \begin{equation}
  \nonumber f_{XY}(x,y) = \left\{
  \begin{array}{l l}
    1  &  \quad  |y| \leq x \leq 1 \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
  \end{equation}
	</li>
	<li>
    First, note that $R_Y=[-1,1]$. To find $f_Y(y)$, we can write
    \begin{align}
    \nonumber f_Y(y)&=\int_{-\infty}^{\infty}f_{XY}(x,y)dx\\
    \nonumber &=\int_{|y|}^{1} 1 dx\\
    \nonumber &=1-|y|.
    \end{align}
    Thus,
     \begin{equation}
  \nonumber f_{Y}(y) = \left\{
  \begin{array}{l l}
    1-|y|  &  \quad  |y| \leq 1 \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
  \end{equation}
	</li>

    <li> To find $P(|Y|&lt;X^3)$, we can use the law of total probability (Equation 5.16):

    \begin{align}%\label{}
    \nonumber P(|Y|&lt;X^3)&=\int_0^1 p(|Y|&lt;X^3|X=x) f_X(x) dx   \\
   \nonumber &= \int_0^1 p(|Y|&lt;x^3|X=x) 2x dx \\
   \nonumber &= \int_0^1 \left(\frac{2x^3}{2x}\right) 2x dx \hspace{20pt} \textrm{since }Y|X=x \hspace{5pt} \sim \hspace{5pt} Uniform(-x,x)\\
   \nonumber &=\frac{1}{2}.
   \end{align}
	</li>
	</ol>
</li></ul>
</li></ul></div><br />


<hr /><span class="problem">Problem </span><br />
Let $X$ and $Y$ be two jointly continuous random variables with joint PDF
  \begin{equation}
  \nonumber f_{X,Y}(x,y) = \left\{
  \begin{array}{l l}
    6xy  &  \quad  0 \leq x \leq 1, 0 \leq y \leq \sqrt{x} \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
  \end{equation}
<ol>
   <li> Show $R_{XY}$ in the $x-y$ plane.</li>
    <li> Find $f_X(x)$ and $f_Y(y)$.</li>
    <li> Are $X$ and $Y$ independent?</li>
    <li> Find the conditional PDF of $X$ given $Y=y$, $f_{X|Y}(x|y)$.</li>
    <li> Find $E[X|Y=y]$, for $0 \leq y \leq 1$.</li>
    <li> Find $Var(X|Y=y)$, for $0 \leq y \leq 1$.</li>
</ol>
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
<ol>
<li> Figure 5.9 shows $R_{XY}$ in the $x-y$ plane.
<img src="images/chapter5/solved5_9.png" style="width:400px;height:auto;display:block;margin:10px auto;" />
<p class="centered">Figure 5.9: The figure shows $R_{XY}$ for solved problem 4.</p>
</li>
<li>
First, note that $R_X=R_Y=[0,1]$. To find $f_X(x)$ for $0 \leq x \leq 1$, we can write
    \begin{align}
    \nonumber f_X(x)&=\int_{-\infty}^{\infty}f_{XY}(x,y) \hspace{5pt} dy\\
    \nonumber &=\int_{0}^{\sqrt{x}} 6xy \hspace{5pt} dy\\
    \nonumber &=3x^2.
    \end{align}
    Thus,
    \begin{equation}
  \nonumber f_X(x) = \left\{
  \begin{array}{l l}
    3x^2  &  \quad  0 \leq x \leq 1 \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
 \end{equation}


     To find $f_Y(y)$ for $0 \leq y \leq 1$, we can write
    \begin{align}
    \nonumber f_Y(y)&=\int_{-\infty}^{\infty}f_{XY}(x,y) \hspace{5pt} dx\\
    \nonumber &=\int_{y^2}^{1} 6xy \hspace{5pt} dx\\
    \nonumber &=3y(1-y^4).
    \end{align}
    \begin{equation}
  \nonumber f_Y(y) = \left\{
  \begin{array}{l l}
    3y(1-y^4)  &  \quad  0 \leq y \leq 1 \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
 \end{equation}
</li>
<li>
$X$ and $Y$ are not independent, since $f_{XY}(x,y)\neq f_x(x)f_Y(y)$.
</li>
<li>
    We have
    \begin{align}
    \nonumber f_{X|Y}(x|y)&=\frac{f_{XY}(x,y)}{f_Y(y)}\\
    \nonumber &=\left\{
  \begin{array}{l l}
    \frac{2x}{1-y^4}  &  \quad   y^2 \leq x \leq 1 \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
    \end{align}


    </li>
<li> We have
    \begin{align}
    \nonumber E[X|Y=y]&=\int_{-\infty}^{\infty}xf_{X|Y}(x|y) \hspace{5pt} dx\\
    \nonumber &=\int_{y^2}^{1} x\frac{2x}{1-y^4} \hspace{5pt} dx\\
    \nonumber &=\frac{2(1-y^6)}{3(1-y^4)}.
    \end{align}


</li>
    <li> Find We have
    \begin{align}
    \nonumber E[X^2|Y=y]&=\int_{-\infty}^{\infty}x^2f_{X|Y}(x|y) \hspace{5pt} dx\\
    \nonumber &=\int_{y^2}^{1} x^2\frac{2x}{1-y^4} \hspace{5pt} dx\\
    \nonumber &=\frac{1-y^8}{2(1-y^4)}.
    \end{align}
    Thus,
    \begin{align}
    \nonumber \textrm{Var}(X|Y=y)&=E[X^2|Y=y]-(E[X|Y=y])^2\\
    \nonumber &=\frac{1-y^8}{2(1-y^4)}-\left(\frac{2(1-y^6)}{3(1-y^4)}\right)^2.
    \end{align}
</li>
</ol>

</li></ul>
</li></ul></div><br />

<hr /><span class="problem">Problem </span><br />
Consider the unit disc
\begin{align}%\label{}
\nonumber  D=\{(x,y)|x^2+y^2 \leq 1\}.
\end{align}
Suppose that we choose a point $(X,Y)$ uniformly at random in $D$. That is, the joint PDF of $X$ and $Y$ is given by
\begin{equation}
 \nonumber f_{XY}(x,y) = \left\{
  \begin{array}{l l}
    \frac{1}{\pi} &  \quad (x,y) \in D  \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
\end{equation}
  Let $(R,\Theta)$ be the corresponding polar coordinates as shown in Figure 5.10. The inverse transformation is given by
  \begin{equation}
  \nonumber  \left\{
  \begin{array}{l}
    X=R \cos \Theta  \\
    Y=R \sin \Theta
  \end{array} \right.
  \end{equation}
  where $R \geq 0$ and $-\pi &lt; \Theta \leq \pi$. Find the joint PDF of $R$ and $\Theta$.
	<img src="images/chapter5/solved5_10.png" style="display:block;width:400px;height:auto;margin:10px auto;" />
	<p class="centered">Figure 5.10: Polar Coordinates</p>
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
Here $(X,Y)$ are jointly continuous and are related to $(R,\Theta)$ by a one-to-one relationship. We use the method of transformations (Theorem 5.1). The function $h(r,\theta)$ is given by
  \begin{equation}
  \nonumber  \left\{
  \begin{array}{l}
    x=h_1(r,\theta)=r \cos \theta  \\
    y=h_2(r,\theta)=r \sin \theta
  \end{array} \right.
  \end{equation}
  Thus, we have
\begin{align}
  \nonumber f_{R\Theta}(r,\theta)&=f_{XY}(h_1(r,\theta),h_2(r,\theta)) |J|\\
  \nonumber &=f_{XY}(r \cos \theta,r \sin \theta) |J|.
\end{align}
where
\begin{align}
  \nonumber J=   \det  \begin{bmatrix}
                        \frac{\partial h_1}{\partial r} & \frac{\partial h_1}{\partial \theta}  \\
                         &  \\
                        \frac{\partial h_2}{\partial r}  & \frac{\partial h_2}{\partial \theta}  \\
                      \end{bmatrix}
                      =\det  \begin{bmatrix}
                        \cos \theta & -r \sin \theta  \\
                         &  \\
                        \sin \theta  & r \cos \theta  \\
                      \end{bmatrix}
                      =r \cos^2 \theta+r \sin^2 \theta=r.
\end{align}
We conclude that
\begin{align}
  \nonumber f_{R\Theta}(r,\theta)&=f_{XY}(r \cos \theta,r \sin \theta) |J|\\
  \nonumber &=\left\{
  \begin{array}{l l}
    \frac{r}{\pi} &  \quad r \in [0,1],  \theta \in (-\pi,\pi]  \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
  \end{align}
  Note that from above we can write
  \begin{align}
  \nonumber f_{R\Theta}(r,\theta)=f_R(r)f_{\Theta}(\theta),
  \end{align}
  where
  \begin{equation}
  \nonumber f_R(r) = \left\{
  \begin{array}{l l}
    2r  &  \quad  r \in [0,1] \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
  \end{equation}
  \begin{equation}
  \nonumber f_\Theta(\theta) = \left\{
  \begin{array}{l l}
    \frac{1}{2\pi}  &  \quad  \theta \in (-\pi,\pi] \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
  \end{equation}
  Thus, we conclude that $R$ and $\Theta$ are independent.
</li></ul>
</li></ul></div><br />

<!-- /Section Content -->

<?php include				"section_footer.php"; ?>
