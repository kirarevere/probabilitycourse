<?php
	$section_no			=	"5.2.4";
	$section_title	= "Functions of Two Continuous Random Variables";
	$section_prev		= "chapter5/5_2_3_conditioning_independence.php";
	$section_next		= "chapter5/5_2_4_solved_prob.php";
	include					"../Control/autonumber.php";
	loadHeaders(69);
	include					"section_header.php";	
?>

<!-- Section Content -->
So far, we have seen several examples involving functions of random variables. When we have two continuous random variables $g(X,Y)$, the ideas are still the same. First, if we are just interested in $E[g(X,Y)]$, we can use LOTUS:

<div class="cbox">
<p class="centered">LOTUS for two continuous random variables:</p>
\begin{align}\label{eq:LOTUS-2D-Cont}
  E[g(X,Y)]=\int_{-\infty}^{\infty} \int_{-\infty}^{\infty} g(x,y)f_{XY}(x,y) \hspace{5pt} dxdy
\end{align}
</div>

<!-- Example -->
<hr /><span class="example">Example </span><br />
Let $X$ and $Y$ be two jointly continuous random variables with joint PDF
\begin{equation}
 \nonumber f_{XY}(x,y) = \left\{
  \begin{array}{l l}
    x+y  &  \quad 0 \leq x,y \leq 1 \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
\end{equation}
Find $E[XY^2]$.
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
We have
\begin{align}
  \nonumber E[XY^2]&=\int_{-\infty}^{\infty} \int_{-\infty}^{\infty} (xy^2)f_{XY}(x,y) \hspace{5pt} dxdy\\
  \nonumber &=\int_{0}^{1} \int_{0}^{1} xy^2(x+y) \hspace{5pt} dxdy\\
  \nonumber &=\int_{0}^{1} \int_{0}^{1} x^2y^2+xy^3 \hspace{5pt} dxdy\\
  \nonumber &=\int_{0}^{1} \left(\frac{1}{3}y^2+\frac{1}{2}y^3\right) \hs dy\\
  \nonumber &=\frac{17}{72}.
\end{align}
</li></ul>
</li></ul></div><hr /><br />
<!-- /Example -->

If $Z=g(X,Y)$ and we are interested in its distribution, we can start by writing
\begin{align}
  \nonumber F_Z(z)&=P(z \leq z)\\
  \nonumber &=P(g(X,Y) \leq z)\\
  \nonumber &=\iint\limits_D f_{XY}(x,y) \hspace{5pt} dxdy,
\end{align}
where $D=\{(x,y)|g(x,y)&lt;z\}$. To find the PDF of $Z$, we differentiate $F_Z(z)$.

<!-- Example -->
<hr /><span class="example">Example </span><br />
Let $X$ and $Y$ be two independent $Uniform(0,1)$ random variables, and $Z=XY$. Find the CDF and PDF of $Z$.
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
First note that $R_Z=[0,1]$. Thus,
\begin{align}
  \nonumber F_Z(z)&=0, \hspace{30pt} \textrm{ for }z \leq 0,\\
  \nonumber F_Z(z)&=1, \hspace{30pt} \textrm{ for }z \geq 1.
\end{align}
For $0&lt;z&lt;1$, we have
\begin{align}
  \nonumber F_Z(z)&=P(Z \leq z)\\
  \nonumber &=P(XY \leq z)\\
  \nonumber &=P\left(X \leq \frac{z}{Y}\right).
\end{align}
Just to get some practice, we will show you two ways to calculate $P(X \leq \frac{z}{Y})$ for $0&lt;z&lt;1$. The first way is just integrating $f_{XY}(x,y)$ in the region $x \leq \frac{z}{y}$. We have
\begin{align}
  \nonumber P\left(X \leq \frac{z}{Y}\right)&=\int_{0}^{1} \int_{0}^{\frac{z}{y}}f_{XY}(x,y) \hspace{5pt} dxdy\\
  \nonumber &=\int_{0}^{1} \int_{0}^{\min(1,\frac{z}{y})} 1 \hspace{5pt} dxdy\\
  \nonumber &=\int_{0}^{1} \min\left(1,\frac{z}{y}\right) \hspace{5pt} dy.
\end{align}
Note that if we let $g(y)=\min\left(1,\frac{z}{y}\right)$, then
\begin{equation}
 \nonumber g(y) = \left\{
  \begin{array}{l l}
     1 &  \quad  \textrm{for } 0&lt;y&lt;z\\
      &  \quad   \\
     \frac{z}{y} &  \quad \textrm{for } z \leq y\leq 1
  \end{array} \right.
\end{equation}
Therefore,
\begin{align}
  \nonumber P\left(X \leq \frac{z}{Y}\right)&=\int_{0}^{1} g(y) \hspace{5pt} dy\\
  \nonumber &=\int_{0}^{z} 1 \hspace{5pt} dy+ \int_{z}^{1} \frac{z}{y} \hspace{5pt} dy\\
  \nonumber &=z-z \ln z.
\end{align}
The second way to find $P(X \leq \frac{z}{Y})$ is to use the law of total probability. We have
\begin{align}
  \nonumber P(X \leq \frac{z}{Y})&=\int_{0}^{1} P(X \leq \frac{z}{Y}\bigg{|}Y=y) f_Y(y) \hspace{5pt} dy\\
\end{align}
  \nonumber &=\int_{0}^{1} P\left(X \leq \frac{z}{y}\right) f_Y(y) \hspace{5pt} dy &\textrm{ since $X$ and $Y$ are independent.}\\
Note that
\begin{equation}
 \nonumber P\left(X \leq \frac{z}{y}\right) = \left\{
  \begin{array}{l l}
     1 &  \quad  \textrm{for } 0&lt;y&lt;z\\
      &  \quad   \\
     \frac{z}{y} &  \quad \textrm{for } z \leq y\leq 1
  \end{array} \right.
\end{equation}
Therefore,
\begin{align}
  \nonumber P\left(X \leq \frac{z}{Y}\right)&=\int_{0}^{1} P\left(X \leq \frac{z}{y}\right) f_Y(y) \hspace{5pt} dy\\
  \nonumber &=\int_{0}^{z} 1 \hspace{5pt} dy+ \int_{z}^{1} \frac{z}{y} \hspace{5pt} dy\\
  \nonumber &=z-z \ln z.
\end{align}
Thus, in the end we obtain
\begin{equation}
 \nonumber F_Z(z) = \left\{
  \begin{array}{l l}
    0  &  \quad  z \leq 0 \\
    z-z \ln z &  \quad 0&lt;z&lt;1   \\
    1 &  \quad z \geq 1
  \end{array} \right.
\end{equation}
You can check that $F_Z(z)$ is a continuous function. To find the PDF, we differentiate the CDF. We have
\begin{equation}
 \nonumber f_Z(z) = \left\{
  \begin{array}{l l}
    - \ln z &  \quad 0&lt;z&lt;1   \\
    0 &  \quad \textrm{otherwise}
  \end{array} \right.
\end{equation}
</li></ul>
</li></ul></div><hr /><br />
<!-- /Example -->

<h2>The Method of Transformations:</h2>
When we have functions of two or more jointly continuous random variables, we may be able to use a method similar to Theorems 4.1 and 4.2 to find the resulting PDFs. In particular, we can state the following theorem. While the statement of the theorem might look a little confusing, its application is quite straight forward and we will see a few examples to illustrate the methodology.

<div class="cbox">
<span class="theorem">Theorem </span><br />
Let $X$ and $Y$ be two jointly continuous random variables. Let $(Z,W)=g(X,Y)=(g_1(X,Y),g_2(X,Y))$, where $g:\mathbb{R}^2 \mapsto \mathbb{R}^2$ is a continuous one-to-one (invertible) function with continuous partial derivatives. Let $h=g^{-1}$, i.e., $(X,Y)=h(Z,W)=(h_1(Z,W),h_2(Z,W))$. Then $Z$ and $W$ are jointly continuous and their joint PDF, $f_{ZW}(z,w)$, for $(z,w) \in R_{ZW}$ is given by
\begin{align}
  \nonumber f_{ZW}(z,w)=f_{XY}(h_1(z,w),h_2(z,w)) |J|,
\end{align}
where $J$ is the Jacobian of $h$ defined by
\begin{align}
  \nonumber J=   \det  \begin{bmatrix}
                        \frac{\partial h_1}{\partial z} & \frac{\partial h_1}{\partial w}  \\
                         &  \\
                        \frac{\partial h_2}{\partial z}  & \frac{\partial h_2}{\partial w}  \\
                      \end{bmatrix}
                      =\frac{\partial h_1}{\partial z}.\frac{\partial h_2}{\partial w}-\frac{\partial h_2}{\partial z}\frac{\partial h_1}{\partial w}.
\end{align}
</div>

The following examples show how to apply the above theorem.

<!-- Example -->
<hr /><span class="example">Example </span><br />
Let $X$ and $Y$ be two independent standard normal random variables. Let also
\begin{equation}
 \nonumber  \left\{
  \begin{array}{l}
    Z=2X-Y    \\
    W=-X+Y
  \end{array} \right.
\end{equation}
Find $f_{ZW}(z,w)$.
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
$X$ and $Y$ are jointly continuous and their joint PDF is given by
\begin{align}%\label{}
\nonumber f_{XY}(x,y)=f_X(x)f_Y(y)=\frac{1}{2 \pi} e^{-\frac{x^2+y^2}{2}},  \hspace{30pt} \textrm{ for all }x,y \in \mathbb{R}.
\end{align}
Here, the function $g$ is defined by $(z,w)=g(x,y)=(g_1(x,y),g_2(x,y))=(2x-y,-x+y)$. Solving for $x$ and $y$, we obtain the inverse function $h$:
\begin{equation}
 \nonumber  \left\{
  \begin{array}{l}
    x=z+w=h_1(z,w)    \\
    y=z+2w=h_2(z,w)
  \end{array} \right.
\end{equation}
We have
\begin{align}
  \nonumber f_{ZW}(z,w)&=f_{XY}(h_1(z,w),h_2(z,w)) |J|\\
  \nonumber &=f_{XY}(z+w,z+2w) |J|,
\end{align}
where
\begin{align}
  \nonumber J=   \det  \begin{bmatrix}
                        \frac{\partial h_1}{\partial z} & \frac{\partial h_1}{\partial w}  \\
                         &  \\
                        \frac{\partial h_2}{\partial z}  & \frac{\partial h_2}{\partial w}  \\
                      \end{bmatrix}
                      =\det  \begin{bmatrix}
                        1 & 1  \\
                         &  \\
                        1  & 2  \\
                      \end{bmatrix}
                      =1.
\end{align}
Thus, we conclude that
\begin{align}
  \nonumber f_{ZW}(z,w)&=f_{XY}(z+w,z+2w) |J|\\
  \nonumber &=\frac{1}{2 \pi} e^{-\frac{(z+w)^2+(z+2w)^2}{2}} \\
  \nonumber &=\frac{1}{2 \pi} e^{-\frac{2z^2+5w^2+6zw}{2}}.
\end{align}
</li></ul>
</li></ul></div><br />
<!-- /Example -->

<!-- Example -->
<hr /><span class="example">Example </span><br />
Let $X$ and $Y$ be two random variables with joint PDF $f_{XY}(x,y)$. Let $Z=X+Y$. Find $f_{Z}(z)$.
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
 To apply Theorem 5.1, we need two random variables $Z$ and $W$. We can simply define $W=X$. Thus, the function $g$ is given by
\begin{equation}
 \nonumber  \left\{
  \begin{array}{l}
    z=x+y    \\
    w=x
  \end{array} \right.
\end{equation}
Then, we can find the inverse transform:
\begin{equation}
 \nonumber  \left\{
  \begin{array}{l}
    x=w    \\
    y=z-w
  \end{array} \right.
\end{equation}
Then, we have
\begin{align}
  \nonumber |J|=  \bigg{|} \det  \begin{bmatrix}
                        0 & 1  \\
                         &  \\
                        1  & -1  \\
                      \end{bmatrix}\bigg{|}
                      =|-1|=1.
\end{align}
Thus,
\begin{align}
  \nonumber f_{ZW}(z,w)=f_{XY}(w,z-w).
\end{align}
But since we are interested in the marginal PDF, $f_Z(z)$, we have
\begin{align}
  \nonumber f_Z(z)=\int_{-\infty}^{\infty} f_{XY}(w,z-w)dw.
\end{align}
Note that, if $X$ and $Y$ are independent, then $f_{XY}(x,y)=f_X(x)f_Y(y)$ and we conclude that
\begin{align}
  \nonumber f_Z(z)=\int_{-\infty}^{\infty} f_{X}(w)f_Y(z-w)dw.
\end{align}
</li></ul>
</li></ul></div><hr /><br />
<!-- /Example -->

<div class="cbox">
<span class="theorem">Theorem </span><br />
If $X \sim N(\mu_X,\sigma^2_X)$ and $Y \sim N(\mu_Y,\sigma^2_Y)$ are independent, then
\begin{align}%\label{}
\nonumber   X+Y \hspace{5pt} \sim \hspace{5pt} N\bigg(\mu_X+\mu_Y, \sigma_X^2+\sigma_Y^2\bigg).
\end{align}
\end{thm}
 We will see an easier proof of Theorem 5.2 when we discuss <i>moment generating functions</i>.
</div>

<!-- /Section Content -->

<?php	include			"section_footer.php"; ?>
