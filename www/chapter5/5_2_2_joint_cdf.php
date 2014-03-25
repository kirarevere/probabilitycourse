<?php
	$section_no			= "5.2.2";
	$section_title	= "Joint Cumulative Distribution Function (CDF)";
	$section_prev		= "chapter5/5_2_1_joint_pdf.php";
	$section_next		= "chapter5/5_2_3_";
	include "../Control/autonumber.php";
	loadHeaders(67);
	include "section_header.php";
?>

<!-- Section Content -->

We have already seen the joint CDF for discrete random variables. The joint CDF has the same definition for continuous random variables. It also satisfies the same properties.

<div style="padding:25px;margin:30px 40px;border:2px solid black;">
The <b>joint cumulative function</b> of two random variables $X$ and $Y$ is defined as
\begin{align}%\label{}
\nonumber F_{XY}(x,y)=P(X \leq x, Y \leq y).
\end{align}
The joint CDF satisfies the following properties:
<ol>
  <li> $F_X(x)=F_{XY}(x, \infty)$, for any $x$ (marginal CDF of $X$).</li>
	<li> $F_Y(y)=F_{XY}(\infty,y)$, for any $y$ (marginal CDF of $Y$).</li>
  <li> $F_{XY}(\infty, \infty)=1$.</li>
  <li> $F_{XY}(-\infty, y)=F_{XY}(x,-\infty)=0$.</li>
	<li>
   $P(x_1&lt;X \leq x_2, \hspace{5pt} y_1&lt;Y \leq y_2)=$\\
     $\hspace{60pt} F_{XY}(x_2,y_2)-F_{XY}(x_1,y_2)-F_{XY}(x_2,y_1)+F_{XY}(x_1,y_1)$.
	</li>
  <li>If $X$ and $Y$ are independent, then $F_{XY}(x,y)=F_X(x)F_Y(y)$.</li>
</ol>
</div><br />

<!-- Example -->
<hr /><span class="example">Example </span><br />
Let $X$ and $Y$ be two independent $Uniform(0,1)$ random variables. Find $F_{XY}(x,y)$.

<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
Since $X,Y \sim Uniform(0,1)$, we have

\begin{equation}
  \nonumber F_X(x)  = \left\{
  \begin{array}{l l}
    0 & \quad \textrm{for } x < 0 \\
    x & \quad \textrm{for } 0 \leq x \leq 1\\
    1 & \quad \textrm{for } x > 1
  \end{array} \right.
  \end{equation}
\begin{equation}
  \nonumber F_Y(y)  = \left\{
  \begin{array}{l l}
    0 & \quad \textrm{for } y < 0 \\
    y & \quad \textrm{for } 0 \leq y \leq 1\\
    1 & \quad \textrm{for } y > 1
  \end{array} \right.
\end{equation}
Since, $X$ and $Y$ are independent, we obtain
\begin{equation}
  \nonumber F_{XY}(x,y)=F_X(x)F_Y(y)  = \left\{
  \begin{array}{l l}
    0 & \quad \textrm{for } y < 0 \textrm{ or } x<0 \\
     &  \\
    xy & \quad \textrm{for } 0 \leq x,y \leq 1\\
     &  \\
    y & \quad \textrm{for } x>1, 0 \leq y \leq 1\\
     &  \\
    x & \quad \textrm{for } y>1, 0 \leq x \leq 1\\
     &  \\
    1 & \quad \textrm{for } x,y > 1
  \end{array} \right.
\end{equation}

Figure 5.7 shows the values of $F_{XY}(x,y)$ in the $x-y$ plane. Note that $F_{XY}(x,y)$ is a continuous function in both arguments. This is always true for jointly continuous random variables. This fact sometimes simplifies finding $F_{XY}(x,y)$. The next example (Example 5.19) shows how we can use this fact.
<img src="images/chapter5/contcdf5_7.png" style="display:block; width: 400px; height: auto; margin: 20px auto;" />
<p style="text-align:center;">Figure 5.7: The joint CDF of two independent $Uniform(0,1)$ random variables $X$ and $Y$.</p>

Remember that, for a single random variable, we have the following relationship between the PDF and CDF:
\begin{align}\label{}
  \nonumber F_X(x) &=\int_{-\infty}^{x} f_X(u)du,  \\
  \nonumber f_X(x) &=\frac{dF_X(x)}{dx}.
\end{align}
Similar formulas hold for jointly continuous random variables. In particular, we have the following:
<div style="padding:25px;margin:30px 40px;border:2px solid black;">
\begin{align}\label{}
  \nonumber F_{XY}(x,y) &=\int_{-\infty}^{y}\int_{-\infty}^{x}  f_{XY}(u,v)dudv  \\
  \nonumber \\
  \nonumber f_{XY}(x,y) &=\frac{\partial^2}{\partial x \partial y} F_{XY}(x,y)
\end{align}
</div>

</li></ul>
</li></ul></div><br />
<!-- /Example -->

<!-- Example -->
<hr /><span class="example">Example </span><br />
Find the joint CDF for $X$ and $Y$ in Example 5.15

<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
In Example 5.15, we found
\begin{equation}
 \nonumber f_{XY}(x,y) = \left\{
  \begin{array}{l l}
     x+\frac{3}{2}y^2 &  \quad 0 \leq x,y \leq 1  \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
\end{equation}
First, note that since $R_{XY}=\{(x,y)|0 \leq x,y \leq 1\}$, we find that
\begin{align}\label{}
  \nonumber &F_{XY}(x,y)=0,    \textrm{ for }x&lt;0 \textrm{ or } y&lt;0,\\
  \nonumber &F_{XY}(x,y)=1,    \textrm{ for }x \geq 1 \textrm{ and } y \geq 0.
 \end{align}
To find the joint CDF for $x>0$ and $y>0$, we need to integrate the joint PDF:
\begin{align}\label{}
  \nonumber F_{XY}(x,y) &=\int_{-\infty}^{y}\int_{-\infty}^{x}  f_{XY}(u,v)dudv \\
  \nonumber &=\int_{0}^{y}\int_{0}^{x}  f_{XY}(u,v)dudv \\
  \nonumber &=\int_{0}^{\min(y,1)}\int_{0}^{\min (x,1)} \left(u+\frac{3}{2}v^2\right) dudv.
 \end{align}
 For $0 \leq x,y \leq 1$, we obtain
 \begin{align}\label{}
  \nonumber F_{XY}(x,y) &=\int_{0}^{y}\int_{0}^{x} \left(u+\frac{3}{2}v^2\right)  dudv\\
  \nonumber &=\int_{0}^{y} \bigg[\frac{1}{2}u^2+\frac{3}{2}v^2u \bigg]_{0}^{x} dv\\
  \nonumber &=\int_{0}^{y} \left(\frac{1}{2}x^2+\frac{3}{2}xv^2\right) dv\\
    \nonumber &=\frac{1}{2}x^2y+\frac{1}{2}xy^3.
 \end{align}
  For $0 \leq x \leq 1$ and $y \geq 1$, we use the fact that $F_{XY}$ is continuous to obtain
 \begin{align}\label{}
  \nonumber F_{XY}(x,y) &=F_{XY}(x,1)\\
    \nonumber &=\frac{1}{2}x^2+\frac{1}{2}x.
 \end{align}
 Similarly, for $0 \leq y \leq 1$ and $x \geq 1$, we obtain
 \begin{align}\label{}
  \nonumber F_{XY}(x,y) &=F_{XY}(1,y)\\
    \nonumber &=\frac{1}{2}y+\frac{1}{2}y^3.
 \end{align}
</li></ul>
</li></ul></div><br />

<!-- /Example -->

<!-- /Section Content -->

<?php include				"section_footer.php"; ?>
