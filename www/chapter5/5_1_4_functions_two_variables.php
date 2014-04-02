<?php
	$section_no			=	"5.1.4";
	$section_title	= "Functions of Two Random Variables";
	$section_prev		= "chapter5/5_1_3_conditioning_independence.php";
	$section_next		= "chapter5/5_1_5_conditional_expectation.php";
	include '../Control/autonumber.php';
	loadHeaders(62);
	include 'section_header.php';
?>

<!-- Section Content -->

Analysis of a function of two random variables is pretty much the same as for a function of a single random variable. Suppose that you have two discrete random variables $X$ and $Y$, and suppose that $Z=g(X,Y)$, where $g: \mathbb{R}^2 \mapsto \mathbb{R}$. Then, if we are interested in the PMF of $Z$, we can write
\begin{align}%\label{}
\nonumber P_{Z}(z) &=P(g(X,Y)=z)  \\
\nonumber &=\sum_{(x_i,y_j) \in A_z} P_{XY}(x_i,y_j), \hspace{10pt} \textrm{ where } A_z=\{(x_i,y_j) \in R_{XY}:g(x_i,y_j)=z\}.
\nonumber
\end{align}

Note that if we are only interested in $E[g(X,Y)]$, we can directly use LOTUS, without finding $P_Z(z)$:

<div style="padding: 25px; margin: 30px 40px; border: 2px solid black;">
<p style="text-align:center;">Law of the unconscious statistician (LOTUS) for two discrete random variables:</p>
\begin{align}\label{eq:LOTUS-2D}
  E[g(X,Y)]=\sum_{(x_i,y_j) \in R_{XY}} g(x_i,y_j)P_{XY}(x_i,y_j) \hspace{20pt} (5.5)
\end{align}
</div>

<!-- Example -->
<hr /><span class="example">Example </span><br />
<b>Linearity of Expectation:</b> For two discrete random variables $X$ and $Y$, show that $E[X+Y]=EX+EY$.
<div class="solvedprob">
	<ul><li><a><b>Solution</b></a>
		<ul><li>
Let $g(X,Y)=X+Y$. Using LOTUS, we have
\begin{align}
  \nonumber E[X+Y]&=\sum_{(x_i,y_j) \in R_{XY}} (x_i+y_j)P_{XY}(x_i,y_j) \\
  \nonumber &=\sum_{(x_i,y_j) \in R_{XY}} x_iP_{XY}(x_i,y_j)+\sum_{(x_i,y_j) \in R_{XY}} y_jP_{XY}(x_i,y_j) \\
  \nonumber &=\sum_{x_i \in R_{X}} \sum_{y_j\in R_{Y}} x_iP_{XY}(x_i,y_j)+\sum_{x_i \in R_{X}} \sum_{y_j\in R_{Y}} y_jP_{XY}(x_i,y_j) \\
  \nonumber &=\sum_{x_i \in R_{X}} x_i \sum_{y_j\in R_{Y}} P_{XY}(x_i,y_j)+ \sum_{y_j\in R_{Y}} y_j \sum_{x_i \in R_{X}} P_{XY}(x_i,y_j) \\
  \nonumber &=\sum_{x_i \in R_{X}} x_i  P_{X}(x_i)+ \sum_{y_j\in R_{Y}} y_j P_{Y}(y_j)  \hspace{20pt} \textrm{(marginal PMF (Equation 5.1))} \\
  \nonumber &=EX+EY.

\end{align}
		</li></ul>
		</li></ul></div><br />
<!-- /Example -->

<!-- Example -->
<hr /><span class="example">Example </span><br />
Let $X$ and $Y$ be two independent $Geometric(p)$ random variables. Also let $Z=X-Y$. Find the PMF of $Z$.
<div class="solvedprob">
	<ul><li><a><b>Solution</b></a>
		<ul><li>
First note that since $R_X=R_Y=\mathbb{N}=\{1,2,3,...\}$, we have $R_Z=\mathbb{Z}=\{...,-3,-2,-1,0,1,2,3,...\}$. Since $X,Y \sim Geometric(p)$, we have
\begin{align}%\label{}
\nonumber P_X(k)=P_Y(k)=pq^{k-1}, \hspace{5pt} \textrm{ for }k=1,2,3,...,
\end{align}
where $q=1-p$. We can write for any $k \in \mathbb{Z}$
\begin{align}%\label{}
\nonumber P_Z(k)&=P(Z=k)  \\
\nonumber &=P(X-Y=k) \\
\nonumber &=P(X=Y+k)\\
\nonumber &=\sum_{j=1}^{\infty}P(X=Y+k|Y=j)P(Y=j) &\textrm{(law of total probability)}\\
\nonumber &=\sum_{j=1}^{\infty}P(X=j+k|Y=j)P(Y=j) \\
\nonumber &=\sum_{j=1}^{\infty}P(X=j+k)P(Y=j)  &(\textrm{since }X,Y \textrm{are independent})\\
\nonumber &=\sum_{j=1}^{\infty}P_X(j+k)P_Y(j).
\end{align}
Now, consider two cases: $k \geq 0$ and $k<0$.
If $k \geq 0$, then
\begin{align}%\label{}
\nonumber P_Z(k)&=\sum_{j=1}^{\infty}P_X(j+k)P_Y(j)\\
\nonumber &=\sum_{j=1}^{\infty}pq^{j+k-1} pq^{j-1}\\
\nonumber &= p^2 q^k\sum_{j=1}^{\infty}q^{2(j-1)}\\
\nonumber &= p^2 q^k \frac{1}{1-q^2} & \big(\textrm{geometric sum (Equation 1.4 )} \big)\\
\nonumber &=\frac{p(1-p)^k}{2-p}.
\end{align}
For $k&lt;0$, we have
\begin{align}%\label{}
\nonumber P_Z(k)&=\sum_{j=1}^{\infty}P_X(j+k)P_Y(j)\\
\nonumber &=\sum_{j=-k+1}^{\infty}pq^{j+k-1} pq^{j-1}  & (\textrm{since }P_X(j+k)=0 \textrm{ for } j&lt;-k+1)\\
\nonumber &= p^2 \sum_{j=-k+1}^{\infty}q^{k+2(j-1)}\\
\nonumber &= p^2  \big[q^{-k}+q^{-k+2}+q^{-k+4}+...\big]\\
\nonumber &= p^2q^{-k}\big[1+q^{2}+q^{4}+...\big] \\
\nonumber &=\frac{p}{(1-p)^k(2-p)} & \big(\textrm{geometric sum (Equation 1.4 )} \big).
\end{align}
	</li></ul>
	</li></ul></div><hr /><br />

<!-- /Example -->

To summarize, we conclude

\begin{equation}
 \nonumber P_Z(k) = \left\{
  \begin{array}{l l}
    \frac{p(1-p)^{|k|}}{2-p}  &  \quad  k \in \mathbb{Z}\\

    0 &  \quad \text{otherwise}
  \end{array} \right.
\end{equation}
<!-- / Section Content -->

<?php include 'section_footer.php'; ?>
