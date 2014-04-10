<?php
	$section_no			= "6.1.5";
	$section_title	= "Characteristic Functions";
	$section_prev		= "chapter6/6_1_4_characteristic_functions.php";
	$section_next		= "chapter6/6_1_6_#.php";
	include						"../Control/autonumber.php";
	loadHeaders(80);
	include						"section_header.php";
?>

<!-- section content -->
When dealing with multiple random variables, it is sometimes useful to use vector and matrix notations. This makes the formulas more compact and lets us use facts from linear algebra. In this section, we briefly explore this avenue. The reader should be familiar with matrix algebra before reading this section.

When we have $n$ random variables $X_1$, $X_2$, ..., $X_n$ we can put them in a (column) vector $\textbf{X}$:
\begin{equation}
\nonumber \textbf{X} = \begin{bmatrix}
       X_1 \\%[5pt]
       X_2 \\%[5pt]
       .   \\[-10pt]
       .   \\[-10pt]
       .   \\[5pt]
       X_n
\end{bmatrix}.
\end{equation}
We call <b>X</b> a <b>random vector</b>. Here <b>X</b> is an $n$-dimensional vector because it consists of $n$ random variables. In this book, we use bold capital letters such as <b>X, Y</b> and  <b>Z</b> to represent a random vector. To show a possible value of a random vector we use bold lower case letters such as <b><i>x</i>, y</b> and  <b>z</b>. Thus, we can write the CDF of the random vector <b>X</b> as
\begin{align}
 F_{X}(x)&=F_{X_1, X_2, ..., X_n}(x_1, x_2, ..., x_n) \\
 &=P(X_1 \leq x_1, X_2 \leq x_2, ..., X_n \leq x_n).
\end{align}
If the $X_i$'s are jointly continuous, the PDF of X can be written as
\begin{align}
 f_{X}(x)=f_{X_1, X_2, ..., X_n}(x_1, x_2,..., x_n).
\end{align}

<!-- /section content -->

<?php include 'section_footer.php'; ?>
