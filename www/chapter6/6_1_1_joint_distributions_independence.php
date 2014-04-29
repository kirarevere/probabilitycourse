<?php
	$section_no			= "6.1.1";
	$section_title	= "Joint Distributions and Independence";
	$section_prev		= "chapter6/6_1_0_multiple_random_variables.php";
	$section_next		= "chapter6/6_1_2_sums_random_variables.php";
	include						"../Control/autonumber.php";
	loadHeaders(69);
	include						"section_header.php";
?>

<!-- Section Content -->
<p>
For three or more random variables, the joint PDF, joint PMF, and joint CDF are defined in a similar way to what we have already seen for the case of two random variables. Let $X_1$, $X_2$, $\cdots$, $X_n$ be $n$ discrete random variables. The joint PMF of  $X_1$, $X_2$, $\cdots$, $X_n$ is defined as
\begin{align}%\label{}
\nonumber  P_{X_1,X_2,...,X_n}(x_1,x_2,...,x_n)=P(X_1=x_1,X_2=x_2,...,X_n=x_n).
\end{align}
For $n$ jointly continuous random variables $X_1$, $X_2$, $\cdots$, $X_n$, the joint PDF is defined to be the function $f_{X_1X_2...X_n}(x_1,x_2,...,x_n)$ such that the probability of any set $A \subset \mathbb{R}^n$ is given by the integral of the PDF over the set $A$. In particular, for a set $A \in \mathbb{R}^n$, we can write
\begin{align}%\label{}
\nonumber  P\bigg((X_1,X_2,\cdots,X_n) \in A \bigg)=\int \cdots\int \limits_A\cdots  \int  f_{X_1X_2 \cdots X_n}(x_1,x_2, \cdots ,x_n) dx_1dx_2 \cdots dx_n.
\end{align}
The marginal PDF of $X_i$ can be obtained by integrating all other $X_j$'s. For example,
\begin{align}%\label{}
\nonumber  f_{X_1}(x_1)=\int_{-\infty}^{\infty} \cdots \int_{-\infty}^{\infty}   f_{X_1X_2...X_n}(x_1,x_2,...,x_n) dx_2 \cdots dx_n.
\end{align}
The joint CDF of $n$ random variables $X_1$, $X_2$,...,$X_n$ is defined as
\begin{align}%\label{}
\nonumber  F_{X_1,X_2,...,X_n}(x_1,x_2,...,x_n)=P(X_1 \leq x_1,X_2 \leq x_2,...,X_n \leq x_n).
\end{align}
</p>

<!-- Begin Example -->
<hr /><span class='example'>Example </span><br />
Let $X, Y$ and $Z$ be three jointly continuous random variables with joint PDF
\begin{equation}
 \nonumber f_{XYZ}(x,y,z) = \left\{
  \begin{array}{l l}
     c(x+2y+3z) &  \quad 0 \leq x,y,z \leq 1  \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
\end{equation}
<ol>
  <li> Find the constant $c$.</li>
  <li> Find the marginal PDF of $X$.</li>
</ol>

<div class='solvedprob'><ul><li><a><b>Solution</b></a>
<ul><li>
	<ol><li><br />
   \begin{align}%\label{}
  \nonumber  1&=\int_{-\infty}^{\infty} \int_{-\infty}^{\infty} \int_{-\infty}^{\infty} f_{XYZ}(x,y,z)dxdydz\\
  \nonumber  &=\int_{0}^{1} \int_{0}^{1} \int_{0}^{1} c(x+2y+3z) \hspace{5pt} dxdydz\\
  \nonumber  &=\int_{0}^{1} \int_{0}^{1} c\left(\frac{1}{2}+2y+3z\right)  \hspace{5pt} dydz\\
  \nonumber  &=\int_{0}^{1} c\left(\frac{3}{2}+3z\right)  \hspace{5pt} dz\\
  \nonumber  &=3c.
  \end{align}
  Thus, $c=\frac{1}{3}$.
	</li>
	<li>
  To find the marginal PDF of $X$, we note that $R_X=[0,1]$. For $0 \leq x \leq 1$, we can write
  \begin{align}%\label{}
  \nonumber  f_X(x)&=\int_{-\infty}^{\infty} \int_{-\infty}^{\infty} f_{XYZ}(x,y,z)dydz\\
  \nonumber  &=\int_{0}^{1} \int_{0}^{1}  \frac{1}{3}(x+2y+3z) \hspace{5pt} dydz\\
  \nonumber  &=\int_{0}^{1} \frac{1}{3}(x+1+3z)  \hspace{5pt} dz\\
  \nonumber  &=\frac{1}{3}\left(x+\frac{5}{2}\right).
  \end{align}
  Thus,
  \begin{equation}
  \nonumber f_X(x) = \left\{
  \begin{array}{l l}
    \frac{1}{3}\left(x+\frac{5}{2}\right)  &  \quad  0 \leq x \leq 1 \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
  \end{equation}
	</li></ol>
</li></ul>
</li></ul></div><hr /><br />
<br />
<!-- /End Example -->

<b>Independence:</b> The idea of independence is exactly the same as what we have seen before. We restate it here in terms of the joint PMF, joint PDF, and joint CDF. Random variables $X_1$, $X_2$, $...$ , $X_n$ are independent, if for all $(x_1, x_2, ..., x_n) \in \mathbb{R}^n$,
\begin{align}%\label{}
\nonumber  F_{X_1, X_2, ..., X_n}(x_1, x_2, ..., x_n)= F_{X_1}(x_1)F_{X_2}(x_2) \cdots F_{X_n}(x_n).
\end{align}
Equivalently, if  $X_1$, $X_2$, ..., $X_n$ are discrete, then they are independent, if for all $(x_1, x_2, ..., x_n) \in \mathbb{R}^n$, we have
\begin{align}%\label{}
\nonumber  P_{X_1, X_2, ..., X_n}(x_1, x_2, ..., x_n)= P_{X_1}(x_1)P_{X_2}(x_2) \cdots P_{X_n}(x_n).
\end{align}
If  $X_1$, $X_2$, ..., $X_n$ are continuous, then they are independent if for all $(x_1, x_2, ..., x_n) \in \mathbb{R}^n$, we have
\begin{align}%\label{}
\nonumber  f_{X_1,X_2, ..., X_n}(x_1, x_2, ..., x_n)= f_{X_1}(x_1)f_{X_2}(x_2) \cdots f_{X_n}(x_n).
\end{align}
If random variables $X_1$, $X_2$, ..., $X_n$ are independent, then we have
\begin{align}%\label{}
\nonumber  E[X_1 X_2 \cdots X_n]=E[X_1]E[X_2] \cdots E[X_n].
\end{align}

In some situations we are dealing with random variables that are independent and are also identically distributed, i.e, the have the same CDFs. It is usually easier to deal with such random variables, since independence and being identically distributed often simplify the analysis. We will see examples of such analyses shortly.

<div class='cbox'>
<span class='definition'>Definition </span>.
Random variables $X_1$, $X_2$, ..., $X_n$ are said to be <b>independent and identically distributed (i.i.d)</b> if they are <i>independent</i>, and they have the <i>same marginal distributions</i>:
\begin{align}%\label{}
\nonumber  F_{X_1}(x)=F_{X_2}(x)=...=F_{X_n}(x), \textrm{ for all }x \in \mathbb{R}
\end{align}
</div><br />

For example, if random variables $X_1$, $X_2$, ..., $X_n$ are i.i.d, they will have the same means and variances, so we can write
\begin{align}%\label{}
\nonumber  E[X_1 X_2 \cdots X_n]&=E[X_1]E[X_2] \cdots E[X_n] &(\textrm{because $X_i$'s are indepenednt})\\
 &= E[X_1]E[X_1] \cdots E[X_1]&(\textrm{because $X_i$'s are identically distributed})\\
 &=E[X_1]^n.
\end{align}


<!-- /Section Content -->

<?php include 'section_footer.php'; ?>
