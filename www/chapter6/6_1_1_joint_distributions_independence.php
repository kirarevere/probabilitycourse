<?php
	$section_no			= "6.1.1";
	$section_title	= "Joint Distributions and Independence";
	$section_prev		= "chapter6/6_1_0_multiple_random_variables.php";
	$section_next		= "chapter6/#";
	include						"../Control/autonumber.php";
	loadHeaders(75);
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
<hr /><br />
<!-- /End Example -->
</p>
<!-- /Section Content -->

<?php include 'section_footer.php'; ?>
