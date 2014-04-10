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

<h2>Expectation: </h2>
The <b>expected value vector</b> or the <b>mean vector</b> of the random vector <b>X</b> is defined as
\begin{align}
\nonumber EX = \begin{bmatrix}
       EX_1 \\%[5pt]
       EX_2 \\%[5pt]
       .   \\[-10pt]
       .   \\[-10pt]
       .   \\[5pt]
       EX_n
\end{bmatrix}.
\end{align}
Similarly, a <b>random matrix</b> is a matrix whose elements are random variables. In particular, we can have an $m$ by $n$ random matrix <b>M</b> as
\begin{align}
\nonumber M = \begin{bmatrix}
       X_{11} & X_{12} & ... & X_{1n}  \\%[5pt]
       X_{21} & X_{22} & ... & X_{2n} \\%[5pt]
       .      &   .    &  .  &  .\\[-10pt]
       .      &   .    &  .  &  .   \\[-10pt]
       .      &   .    &  .  &  .   \\[5pt]
       X_{m1} & X_{m2} & ... & X_{mn}
\end{bmatrix}.
\end{align}
We sometimes write this as <b>M</b>$=[X_{ij}]$, which means that $X_{ij}$ is the element in the $i$th row and $j$th column of <b>M</b>. The mean matrix of <b>M</b> is given by
\begin{align}
\nonumber EM = \begin{bmatrix}
       EX_{11} & EX_{12} & ... & EX_{1n}  \\%[5pt]
       EX_{21} & EX_{22} & ... & EX_{2n} \\%[5pt]
       .      &   .    &  .  &  .\\[-10pt]
       .      &   .    &  .  &  .   \\[-10pt]
       .      &   .    &  .  &  .   \\[5pt]
       EX_{m1} & EX_{m2} & ... & EX_{mn}
\end{bmatrix}.
\end{align}

Linearity of expectation is also valid for random vectors and matrices. In particular, let <b>X</b> be an $n$-dimensional random vector and the random vector  <b>Y</b> be defined as
\begin{align}
  Y=AX+b,
\end{align}
where <b>A</b> is a fixed (non-random) $m$ by $n$ matrix and <b>b</b> is a fixed $m$-dimensional vector. Then we have
\begin{align}
  EY=AEX+b.
\end{align}
Also, if $X_1$, $X_2$, $...$, $X_k$ are $n$-dimensional random vectors, then we have
\begin{align}
  E[X_1+X_2+ \cdots +X_k]=EX_1+EX_2+ \cdots +EX_k.
\end{align}

<h2>Correlation and Covariance Matrix</h2>
For a random vector <b>$X$</b>, we define the <b>correlation matrix</b>,  <b>$R_X$</b>,  as
\begin{align}
\nonumber R_X=E[XX^{T}]
 = E \begin{bmatrix}
       X_1^2 & X_1 X_2 & ... & X_1 X_n  \\%[5pt]
       X_2 X_1 & X_2^2 & ... & X_2 X_n \\%[5pt]
       .      &   .    &  .  &  .\\[-10pt]
       .      &   .    &  .  &  .   \\[-10pt]
       .      &   .    &  .  &  .   \\[5pt]
       X_n X_1 & X_n X_2  & ... & X_n^2
\end{bmatrix}
 =  \begin{bmatrix}
       EX_1^2 & E[X_1 X_2] & ... & E[X_1 X_n]  \\%[5pt]
       EX_2 X_1 & E[X_2^2] & ... & E[X_2 X_n] \\%[5pt]
       .      &   .    &  .  &  .\\[-10pt]
       .      &   .    &  .  &  .   \\[-10pt]
       .      &   .    &  .  &  .   \\[5pt]
       E[X_n X_1] & E[X_n X_2]  & ... & E[X_n^2]
\end{bmatrix},
\end{align}
where $^T$ shows matrix transposition.
<br />
<br />
The <b>covariance matrix</b>, <b>$C_X$</b>,  is defined as
\begin{align}
\nonumber C_X&=E[(X-EX)(X-EX)^{T}] \\
\nonumber \\
\nonumber &= E \begin{bmatrix}
       (X_1-EX_1)^2 & (X_1-EX_1)(X_2-EX_2) & ... & (X_1-EX_1)(X_n-EX_n)  \\%[5pt]
       (X_2-EX_2)(X_1-EX_1) & (X_2-EX_2)^2 & ... & (X_2-EX_2) (X_n-EX_n) \\%[5pt]
       .      &   .    &  .  &  .\\[-10pt]
       .      &   .    &  .  &  .   \\[-10pt]
       .      &   .    &  .  &  .   \\[5pt]
       (X_n-EX_n) (X_1-EX_1) & (X_n-EX_n) (X_2-EX_2)  & ... & (X_n-EX_n)^2
\end{bmatrix} \\

<br />
\nonumber  &=  \begin{bmatrix}
       \textrm{Var}(X_1) & \textrm{Cov}(X_1,X_2)& ... & \textrm{Cov}(X_1,X_n)  \\%[5pt]
       \textrm{Cov}(X_2,X_1) & \textrm{Var}(X_2) & ... & \textrm{Cov}(X_2,X_n) \\%[5pt]
       .      &   .    &  .  &  .\\[-10pt]
       .      &   .    &  .  &  .   \\[-10pt]
       .      &   .    &  .  &  .   \\[5pt]
       \textrm{Cov}(X_n,X_1) & \textrm{Cov}(X_n X_2)  & ... & \textrm{Var}(X_n)
\end{bmatrix}.
\end{align}
The covariance matrix is a generalization of the variance of a random variable. Remember that for a random variable, we have $\textrm{Var}(X)=EX^2-(EX)^2$. The following example extends this formula to random vectors.

<hr /><span class='example'>Example </span><br />
For a random vector <b>X</b>, show
\begin{align}
C_X= R_X-EX EX^T.
\end{align}
<div class='solvedprob'><ul><li><a><b>Solution</b></a>
<ul><li>
We have
\begin{align}
\nonumber C_X&=E[(X-EX)(X-EX)^{T}] \\
\nonumber &=E[(X-EX)(X^T-EX^T)]  \\
\nonumber &=E[X X^T]-EX EX^T-EX EX^T+EX EX^T \textrm{(by linearity of expectation)}  \\
\nonumber &=R_X-EX EX^T.
\end{align}
</li></ul>
</li></ul></div><hr /><br />

<div class='cbox' style="width:800px;">
\begin{align}
  &\textrm{Correlation matrix of X: } \\
\nonumber & \hspace{80pt} R_X=E[X X^{T}] \\
  &\textrm{Covariance matrix of X: }  \\
\nonumber & \hspace{80pt} C_X=E[(X-EX)(X-EX)^{T}]=R_X-EX EX^T \end{align}
</div>


<hr /><span class='example'>Example </span><br />
Let <b>X</b> be an $n$-dimensional random vector and the random vector  <b>Y</b> be defined as
\begin{align}%\label{}
  Y=A X+b,
\end{align}
where <b>A</b> is a fixed $m$ by $n$ matrix and <b>b</b> is a fixed $m$-dimensional vector. Show that
\begin{align}
  C_Y=A C_X A^T.
\end{align}
<div class='solvedprob'><ul><li><a><b>Solution</b></a>
<ul><li>
Note that by linearity of expectation, we have
\begin{align}
 EY=A EX+b.
\end{align}
By definition, we have
\begin{align}
  C_Y&=E[(Y-EY)(Y-EY)^{T}]\\
  &=E[(A X+b-A EX-b)(AX+b-A EX-b)^T]\\
  &=E[A(X-EX)(X-EX)^T A^T ]\\
  &=AE[(X-EX)(X-EX)^T] A^T  &\textrm{(by linearity of expectation)}\\
  &= A C_X A^T.
\end{align}
</li></ul>
</li></ul></div><br />

<hr /><span class='example'>Example </span><br />
Let $X$ and $Y$ be two jointly continuous random variables with joint PDF
\begin{equation}
 \nonumber f_{X,Y}(x,y) = \left\{
  \begin{array}{l l}
    \frac{3}{2}x^2+y  &  \quad 0&lt;x,y&lt;1  \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
\end{equation}
and let the random vector <b>U</b> be defined as
\begin{equation}
\nonumber U = \begin{bmatrix}
       X \\%[5pt]
       Y
\end{bmatrix}.
\end{equation}
Find the correlation and covariance matrices of <b>U</b>.
<div class='solvedprob'><ul><li><a><b>Solution</b></a>
<ul><li>
We first obtain the marginal PDFs of $X$ and $Y$. Note that $R_X=R_Y=(0,1)$. We have for $x \in R_X$
\begin{align}
f_X(x)&=\int_{0}^{1} \frac{3}{2}x^2+y \hspace{20pt}dy\\
&=\frac{3}{2}x^2+\frac{1}{2}, \textrm{for $0&lt;x&lt;1$}.
\end{align}
Similarly, for $y \in R_Y$, we have
\begin{align}
 f_Y(y)&=\int_{0}^{1} \frac{3}{2}x^2+y \hspace{20pt}dx\\
 &=y+\frac{1}{2}, \textrm{for $0&lt;y&lt;1$}.
\end{align}
From these, we obtain $EX=\frac{5}{8}$, $EX^2=\frac{7}{15}$, $EY=\frac{7}{12}$, and $EY^2=\frac{5}{12}$. We also need $EXY$. By LOTUS, we can write
\begin{align}
 EXY&=\int_{0}^{1} \int_{0}^{1} xy \left(\frac{3}{2}x^2+y\right) dxdy\\
 &= \int_{0}^{1} \frac{3}{8}y+\frac{1}{2}y^2 dy\\
 &=\frac{17}{48}.
\end{align}
From this, we also obtain
\begin{align}
 \textrm{Cov}(X,Y)&=EXY-EXEY\\
 &=\frac{17}{48}-\frac{5}{8}\frac{7}{12}\\
 &=-\frac{1}{96}.
\end{align}
The correlation matrix $R_U$ is given by
\nonumber R_U=E[UU^{T}]
=  \begin{bmatrix}
       EX^2 & EXY  \\%[5pt]
       EYX & EY^2
\end{bmatrix}
=  \begin{bmatrix}
       \frac{7}{15} & \frac{17}{48}  \\[5pt]
       \frac{17}{48} & \frac{5}{12}
\end{bmatrix}.
The covariance matrix $C_U$ is given by
\nonumber C_U
=  \begin{bmatrix}
       \textrm{Var}(X) & \textrm{Cov}(X,Y)  \\%[5pt]
       \textrm{Cov}(Y,X) & \textrm{Var}(Y)
\end{bmatrix}
=  \begin{bmatrix}
       \frac{73}{960} & -\frac{1}{96}  \\[5pt]
       -\frac{1}{96} & \frac{11}{144}
\end{bmatrix}.
</li></ul>
</li></ul></div><hr /><br />

<h2>Properties of the Covariance Matrix:</h2>
The covariance matrix is the generalization of the variance to random vectors. It is an important matrix and is used extensively. Let us a take a moment and discuss its properties. Here, we use concepts from linear algebra such as eigenvalues and positive definiteness. First note that, for any random vector <b>X</b>, the covariance matrix <b>$C_X$</b> is a symmetric matrix. This is because if $C_X=[c_{ij}]$, then
\begin{align}%\label{}
 c_{ij}=\textrm{Cov}(X_i,X_j)=\textrm{Cov}(X_j,X_i)=c_{ji}.
\end{align}
Thus, the covariance matrix has all the nice properties of symmetric matrices. In particular, <b>$C_X$</b> can be diagonalized and all the eigenvalues of  <b>$C_X$</b> are real. Here, we assume <b>X</b> is a real random vector, i.e., the $X_i$'s can only take real values. A special important property of the covariance matrix is that it is positive semi-definite (PSD). Remember from linear algebra that a symmetric matrix <b>M</b> is <b>positive semi-definite (PSD)</b> if, for all vectors <b>b</b>, we have
\begin{align}
  b^T M b \geq 0.
\end{align}
Also, M is said to be <b>Positive Definite (PD)</b>, if for all vectors <b>b</b>$\neq 0$, we have
\begin{align}
  b^T M b &gt; 0.
\end{align}
By the above definitions, we note that every PD matrix is also PSD, but the converse is not generally true. Here, we show that covariance matrices are always PSD.

<br /><span class='theorem'>Theorem </span>.
Let $X$ be a random vector with $n$ elements. Then, its covariance matrix <b>$C_X$</b> is positive semi-definite(PSD).
<br />
Let <b>b</b> be any fixed vector with $n$ elements. Define the random variable $Y$ as
\begin{align}
  Y=b^T (X-EX).
\end{align}
We have
\begin{align}
 0 &\leq EY^2\\
 &=E(YY^T)\\
 &=b^T E\big[(X-EX)(X-EX)^T\big]b \\
 &=b^T C_X b.
\end{align}
Note that the eigenvalues of a PSD matrix are always larger than or equal to zero. If all the eigenvalues are strictly larger than zero, then the matrix is positive definite.  From linear algebra, we know that a real symmetric matrix is positive definite if and only if all its eigenvalues are positive. Since <b>$C_X$</b> is a real symmetric matrix, we can state the following theorem.
<br /><span class='theorem'>Theorem </span>.
Let $X$ be a random vector with $n$ elements. Then its covariance matrix $\textbf{C}_\textbf{X}$ is positive definite (PD), if and only if all its eigenvalues are larger than zero. Equivalently, $\textbf{C}_\textbf{X}$ is positive definite (PD), if and only if $\det(\textbf{C}_\textbf{X})>0$.
\end{thm}
Note that the second part of the theorem is implied by the first part. This is because the determinant of a matrix is the product of its eigenvalues, and we already know that all eigenvalues of $\textbf{C}_\textbf{X}$ are larger than or equal to zero.

<hr /><span class='example'>Example </span><br />
Let $X$ and $Y$ be two independent $Uniform(0,1)$ random variables. Let the random vectors \textbf{U} and  \textbf{V} be defined as
\begin{equation}
\nonumber \textbf{U} = \begin{bmatrix}
       X \\%[5pt]
       X+Y
\end{bmatrix}, \hsb \hsb
\textbf{V} = \begin{bmatrix}
       X \\%[5pt]
       Y \\
       X+Y
\end{bmatrix}.
\end{equation}
Determine whether $\textbf{C}_\textbf{U}$ and $\textbf{C}_\textbf{V}$ are positive definite.
\end{example}
\sol Let us first find $\textbf{C}_\textbf{U}$. We have
\begin{equation}
\nonumber \textbf{C}_\textbf{U}
=  \begin{bmatrix}
       \textrm{Var}(X) & \textrm{Cov}(X,X+Y)  \\%[5pt]
       \textrm{Cov}(X+Y,X) & \textrm{Var}(X+Y)
\end{bmatrix}.
\end{equation}
Since $X$ and $Y$ are independent $Uniform(0,1)$ random variables, we have
\begin{align}%\label{}
 \textrm{Var}(X)=\textrm{Var}(&Y)=\frac{1}{12},\\
 \textrm{Cov}(X,X+Y)&=\textrm{Cov}(X,X)+\textrm{Cov}(X,Y)\\
 &=\frac{1}{12}+0=\frac{1}{12},\\
 \textrm{Var}(X+Y)=&\textrm{Var}(X)+\textrm{Var}(Y)=\frac{1}{6}.
\end{align}
Thus,
\begin{equation}
\nonumber \textbf{C}_\textbf{U}
=  \begin{bmatrix}
       \frac{1}{12} &  \frac{1}{12} \\[5pt]
       \frac{1}{12} & \frac{1}{6}
\end{bmatrix}.
\end{equation}
So we conclude
\begin{align}%\label{}
 \det(\textbf{C}_\textbf{U})&=\frac{1}{12} . \frac{1}{6} - \frac{1}{12} . \frac{1}{12}\\
 &=\frac{1}{144}>0.
\end{align}
Therefore, $\textbf{C}_\textbf{U}$ is positive definite. For $\textbf{C}_\textbf{V}$, we have
\begin{align}
\nonumber \textbf{C}_\textbf{V}
&=  \begin{bmatrix}
       \textrm{Var}(X) & \textrm{Cov}(X,Y) & \textrm{Cov}(X,X+Y)  \\%[5pt]
       \textrm{Cov}(Y,X) & \textrm{Var}(Y) &\textrm{Cov}(Y,X+Y) \\
       \textrm{Cov}(X+Y,X) &\textrm{Cov}(X+Y,Y) & \textrm{Var}(X+Y)
\end{bmatrix}\\
&=  \begin{bmatrix}
       \frac{1}{12} & 0 & \frac{1}{12}  \\[5pt]
       0 & \frac{1}{12} & \frac{1}{12} \\[5pt]
       \frac{1}{12} & \frac{1}{12} & \frac{1}{6}
\end{bmatrix}.
\end{align}
So we conclude
\begin{align}%\label{}
 \det(\textbf{C}_\textbf{V})&=\frac{1}{12} \left(\frac{1}{12} \cdot \frac{1}{6} - \frac{1}{12} \cdot \frac{1}{12} \right)-0+ \frac{1}{12} \left(0 - \frac{1}{12} \cdot \frac{1}{12} \right)\\
 &=0.
\end{align}
Thus, $\textbf{C}_\textbf{V}$ is not positive definite (we already know that it is positive semi-definite).

\begin{center}
\line(1,0){250}
\end{center}

Finally, if we have two random vectors, \textbf{X} and \textbf{Y}, we can define the \textbf{cross correlation matrix} of \textbf{X} and \textbf{Y} as
\begin{align}
\nonumber \textbf{R}_\textbf{XY}=E[\textbf{X} \textbf{Y}^T].
\end{align}
Also, the \textbf{cross covariance matrix} of \textbf{X} and \textbf{Y} is
\begin{align}
\nonumber \textbf{C}_\textbf{XY}=E[(\textbf{X}-E\textbf{X})(\textbf{Y}-E\textbf{Y})^T].
\end{align}
\subsubsection{\large{Functions of Random Vectors: The Method of Transformations}}

A function of a random vector is a random vector. Thus, the methods that we discussed regarding functions of two random variables can be used to find distributions of functions of random vectors. For example, we can state a more general form of Theorem \ref{thm:pdf-transform-2} (method of transformations). Let us first explain the method and then see some examples on how to use it.

Let $\textbf{X}$ be an $n$-dimensional random vector with joint PDF $f_{\textbf{X}}(\textbf{\textit{x}})$. Let $G:\mathbb{R}^n \mapsto \mathbb{R}^n$ be a continuous and invertible function with continuous partial derivatives and let $H=G^{-1}$. Suppose that the random vector $\textbf{Y}$ is given by $\textbf{Y}=G(\textbf{X})$ and thus $\textbf{X}=G^{-1}(\textbf{Y})=H(\textbf{Y})$. That is,
\begin{equation}
\nonumber \textbf{X} = \begin{bmatrix}
       X_1 \\%[5pt]
       X_2 \\%[5pt]
       .   \\[-10pt]
       .   \\[-10pt]
       .   \\[5pt]
       X_n
\end{bmatrix}
=\begin{bmatrix}
       H_1(Y_1,Y_2,...,Y_n) \\%[5pt]
       H_2(Y_1,Y_2,...,Y_n) \\%[5pt]
       .   \\[-10pt]
       .   \\[-10pt]
       .   \\[5pt]
       H_n(Y_1,Y_2,...,Y_n)
\end{bmatrix}.
\end{equation}
Then, the PDF of \textbf{Y}, $f_{Y_1,Y_2,...,Y_n}(y_1,y_2,...,y_n)$, is given by
\begin{center}
\vspace{10pt}
\fbox{\parbox{0.50\linewidth}{
%\centering
%\vspace{10pt}
\begin{align}
  \nonumber f_{\textbf{Y}}(\textbf{y})=f_{\textbf{X}}\big(H(\textbf{y})\big) |J|
\end{align}
%\vspace{10pt}
}}
\vspace{10pt}
\end{center}
where $J$ is the Jacobian of $H$ defined by
\begin{align}
  \nonumber J=   \det  \begin{bmatrix}
                        \frac{\partial H_1}{\partial y_1} & \frac{\partial H_1}{\partial y_2} & ... & \frac{\partial H_1}{\partial y_n}  \\[5pt]
                        \frac{\partial H_2}{\partial y_1} & \frac{\partial H_2}{\partial y_2} & ... & \frac{\partial H_2}{\partial y_n}  \\
                          \vdots &\vdots &\vdots &\vdots \\
                        \frac{\partial H_n}{\partial y_1} & \frac{\partial H_n}{\partial y_2} &... & \frac{\partial H_n}{\partial y_n}  \\
                      \end{bmatrix},
\end{align}
and evaluated at $(y_1,y_2,...,y_n)$.

\begin{example} \label{ex:PDF-vec-AXb}
Let \textbf{X} be an $n$-dimensional random vector. Let \textbf{A} be a fixed (non-random) invertible $n$ by $n$ matrix, and \textbf{b} be a fixed $n$-dimensional vector. Define the random vector \textbf{Y} as
\begin{align}%\label{}
 \textbf{Y}=\textbf{A}\textbf{X}+\textbf{b}.
\end{align}
Find the PDF of \textbf{Y} in terms of PDF of \textbf{X}.
\end{example}
\sol Since $A$ is invertible, we can write
\begin{align}%\label{}
 \textbf{X}=\textbf{A}^{-1}(\textbf{Y}-\textbf{b}).
\end{align}
We can also check that
\begin{align}
  \nonumber J= \det (\textbf{A}^{-1})=\frac{1}{\det\textbf{A}}.
\end{align}
Thus, we conclude that
\begin{align}
  f_{\textbf{Y}}(\textbf{y})=\frac{1}{|\det\textbf{A}|}f_{\textbf{X}}\big(\textbf{A}^{-1}(\textbf{y}-\textbf{b}) \big).
\end{align}




\subsubsection{\large{Normal (Gaussian) Random Vectors:}}

We discussed two jointly normal random variables previously in Section \ref{subsec:bivariate-normal}. In particular, two random variables $X$ and $Y$ are said to be \textbf{bivariate normal} or \textbf{jointly normal}, if $aX+bY$ has normal distribution for all $a,b \in \mathbb{R}$. We can extend this definition to $n$ jointly normal random variables.

\begin{center}
\vspace{10pt}
\fbox{\parbox{0.90\linewidth}{
%\centering
\vspace{10pt}
Random variables $X_1$, $X_2$,..., $X_n$ are said to be \textbf{jointly normal} if, for all $a_1$,$a_2$,..., $a_n$ $\in \mathbb{R}$, the random variable
\begin{align}%\label{}
  a_1X_1+a_2X_2+...+a_nX_n
\end{align}
is a normal random variable.
\vspace{10pt}
}}
\vspace{10pt}
\end{center}

As before, we agree that the constant zero is a normal random variable with zero mean and variance, i.e., $N(0,0)$. When we have several jointly normal random variables, we often put them in a vector. The resulting random vector is a called a normal (Gaussian) random vector.
\begin{center}
\vspace{10pt}
\fbox{\parbox{0.90\linewidth}{
%\centering
\vspace{10pt}
A random vector
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
is said to be \textbf{normal} or \textbf{Gaussian} if the random variables $X_1$, $X_2$,..., $X_n$ are jointly normal.
\vspace{10pt}
}}
\vspace{10pt}
\end{center}

To find the general form for the PDF of a Gaussian random vector it is convenient to start from the simplest case where $X_i$'s are independent and identically distributed (i.i.d), $X_i \sim N(0,1)$. In this case, we know how to find the joint PDF. It is simply the product of the individual (marginal) PDFs. Let's call such a random vector the \textbf{standard normal vector}. So let
\begin{equation}
\nonumber \textbf{Z} = \begin{bmatrix}
       Z_1 \\%[5pt]
       Z_2 \\%[5pt]
       .   \\[-10pt]
       .   \\[-10pt]
       .   \\[5pt]
       Z_n
\end{bmatrix},
\end{equation}
where $Z_i$'s are i.i.d and $Z_i \sim N(0,1)$. Then, we have
\begin{align}%\label{}
 f_{\mathbf{Z}}(\mathbf{z})&=f_{Z_1, Z_2, ..., Z_n}(z_1, z_2, ..., z_n)\\
 &=\prod_{i=1}^{n} f_{Z_i}(z_i)\\
 &=\frac{1}{(2\pi)^{\frac{n}{2}}} \exp \left\{-\frac{1}{2} \sum_{i=1}^{n} z_i^2 \right\}\\
 &=\frac{1}{(2\pi)^{\frac{n}{2}}} \exp \left\{-\frac{1}{2} \mathbf{z}^T\mathbf{z} \right\}.
\end{align}



\begin{center}
\vspace{10pt}
\fbox{\parbox{0.90\linewidth}{
%\centering
\vspace{10pt}
For a standard normal vector \textbf{Z}, where $Z_i$'s are i.i.d and $Z_i \sim N(0,1)$, the PDF is given by
\begin{align}%\label{}
 f_{\mathbf{Z}}(\mathbf{z})=\frac{1}{(2\pi)^{\frac{n}{2}}} \exp \left\{-\frac{1}{2} \mathbf{z}^T\mathbf{z} \right\}.
\end{align}
\vspace{10pt}
}}
\vspace{10pt}
\end{center}

Now, we need to extend this formula to a general normal random vector \textbf{X} with mean $\mathbf{m}$ and covariance matrix \textbf{C}. This is very similar to when we defined general normal random variables from the standard normal random variable. We remember that if $Z \sim N(0,1)$, then the random variable $X=\sigma Z+ \mu$ has $N(\mu, \sigma^2)$ distribution. We would like to do the same thing for normal random vectors.

Assume that I have a normal random vector \textbf{X} with mean $\mathbf{m}$ and covariance matrix \textbf{C}. We write $\mathbf{X} \sim N(\mathbf{m},\mathbf{C})$. Further, assume that $\mathbf{C}$ is a positive definite matrix. \footnote{The positive definiteness assumption here does not create any limitations. We already know that $\mathbf{C}$ is positive semi-definite (Theorem \ref{thm:PSD}), so $\det(\textbf{C}) \geq 0$. We also know that $\mathbf{C}$ is positive definite if and only if $\det(\textbf{C})>0$ (Theorem \ref{thm:PD}). So here, we are only excluding the case $\det(\textbf{C})=0$. If $\det(\textbf{C})=0$, then you can show that you can write some $X_i$&#39;s as a linear combination of others, so indeed we can remove them from the vector without losing any information.} Then from linear algebra we know that there exists an $n$ by $n$ matrix \textbf{Q} such that
\begin{align}%\label{}
       &\textbf{Q}\textbf{Q}^T=\textbf{I}  \hsb (\textbf{I} \textrm{ is the identity matrix})\\
       &\textbf{C}= \textbf{Q} \textbf{D} \textbf{Q}^T,
\end{align}
where \textbf{D} is a diagonal matrix
\begin{equation}
  \nonumber \textbf{D} = \begin{bmatrix}
       d_{11} &  0 & ... & 0  \\%[5pt]
       0 & d_{22} & ... & 0 \\%[5pt]
       .      &   .    &  .  &  .\\[-10pt]
       .      &   .    &  .  &  .   \\[-10pt]
       .      &   .    &  .  &  .   \\[5pt]
       0      &   0    & ... & d_{nn}
\end{bmatrix}.
\end{equation}
The positive definiteness assumption guarantees that all $d_{ii}$'s are positive. Let's define
\begin{equation}
  \nonumber \textbf{D}^{\frac{1}{2}} = \begin{bmatrix}
       \sqrt{d_{11}} &  0 & ... & 0  \\%[5pt]
       0 & \sqrt{d_{22}} & ... & 0 \\%[5pt]
       .      &   .    &  .  &  .\\[-10pt]
       .      &   .    &  .  &  .   \\[-10pt]
       .      &   .    &  .  &  .   \\[5pt]
       0      &   0    & ... & \sqrt{d_{nn}}
\end{bmatrix}.
\end{equation}
We have $\textbf{D}^{\frac{1}{2}} \textbf{D}^{\frac{1}{2}}=\mathbf{D}$ and $\textbf{D}^{\frac{1}{2}}={\textbf{D}^{\frac{1}{2}}}^{T}$. Also define
\begin{align}%\label{}
 \mathbf{A}= \textbf{Q} \textbf{D}^{\frac{1}{2}} \textbf{Q}^T.
\end{align}
Then,
\begin{align}%\label{}
 \mathbf{A} \mathbf{A}^{T}= \mathbf{A}^{T}\mathbf{A}=\mathbf{C}.
\end{align}
Now we are ready to define the transformation that converts a standard Gaussian vector to $\mathbf{X} \sim N(\mathbf{m},\mathbf{C})$. Let \textbf{Z} be a standard Gaussian vector, i.e., $\mathbf{Z} \sim N(\mathbf{0},\mathbf{I})$. Define
\begin{align}%\label{}
 \mathbf{X}=\mathbf{A}\mathbf{Z}+\mathbf{m}.
\end{align}
We claim that $\mathbf{X} \sim N(\mathbf{m},\mathbf{C})$. To see this first note that $\mathbf{X}$ is a normal random vector. The reason is that any linear combination of components of $\mathbf{X}$ is indeed a linear combination of components of $\mathbf{Z}$ plus a constant. Thus, every linear combination of components of $\mathbf{X}$ is a normal random variable. It remains to show that $E\mathbf{X}=\mathbf{m}$ and $\mathbf{C_X}=\mathbf{C}$.
First note that by linearity of expectation we have
\begin{align}%\label{}
 E\mathbf{X} &= E \left[\mathbf{A}\mathbf{Z}+\mathbf{m}\right]\\
&= \mathbf{A} E[\mathbf{Z}] +\mathbf{m}\\
&= \mathbf{m}.
\end{align}
Also, by Example \ref{ex:cov-mat-AXb} we have
\begin{align}%\label{}
 \textbf{C}_\textbf{X}&=\textbf{A} \textbf{C}_\textbf{Z} \textbf{A}^T\\
&=\mathbf{A} \mathbf{A}^{T} & (\textrm{since } \textbf{C}_\textbf{Z}=\mathbf{I})\\
&=\mathbf{C}.
\end{align}
Thus, we have shown that \textbf{X} is  a random vector with mean $\mathbf{m}$ and covariance matrix \textbf{C}. Now we can use Example \ref{ex:PDF-vec-AXb} to find the PDF of \textbf{X}. We have
\begin{align}
  f_{\textbf{X}}(\textbf{x})&=\frac{1}{|\det\textbf{A}|}f_{\textbf{Z}}\big(\textbf{A}^{-1}(\textbf{x}-\textbf{m}) \big) \\
  &=\frac{1}{(2\pi)^{\frac{n}{2}} |\det\textbf{A}|} \exp \left\{-\frac{1}{2} (\textbf{A}^{-1}(\textbf{x}-\textbf{m}))^T(\textbf{A}^{-1}(\textbf{x}-\textbf{m})) \right\}\\
  &=\frac{1}{(2\pi)^{\frac{n}{2}} \sqrt{\det\textbf{C}}} \exp \left\{-\frac{1}{2} (\textbf{x}-\textbf{m})^T\textbf{A}^{-T} \mathbf{A}^{-1}(\textbf{x}-\textbf{m}) \right\}\\
  &=\frac{1}{(2\pi)^{\frac{n}{2}} \sqrt{\det\textbf{C}}} \exp \left\{-\frac{1}{2} (\textbf{x}-\textbf{m})^T \mathbf{C}^{-1}(\textbf{x}-\textbf{m}) \right\}.
\end{align}

\begin{center}
\vspace{10pt}
\fbox{\parbox{0.90\linewidth}{
%\centering
\vspace{10pt}
For a normal vector \textbf{X} with mean $\mathbf{m}$ and covariance matrix \textbf{C}, the PDF is given by
\begin{align}\label{eq:pdf-normal-vec}
  f_{\mathbf{X}}(\mathbf{x})=\frac{1}{(2\pi)^{\frac{n}{2}} \sqrt{\det\textbf{C}}} \exp \left\{-\frac{1}{2} (\textbf{x}-\textbf{m})^T \mathbf{C}^{-1}(\textbf{x}-\textbf{m}) \right\}.
\end{align}
\vspace{10pt}
}}
\vspace{10pt}
\end{center}


\begin{example}
Let $X$ and $Y$ be two jointly normal random variables with $X \sim N(\mu_X,\sigma_X)$, $Y \sim N(\mu_Y,\sigma_Y)$, and $\rho(X,Y)=\rho$. Show that the above PDF formula for PDF of $\begin{bmatrix}
       X \\%[5pt]
       Y
\end{bmatrix}$ is the same as $f_{X,Y}(x,y)$ given in Definition \ref{def:bivariate-normal-PDF} in section \ref{subsec:bivariate-normal}. That is,
\begin{align} \label{eq:bivariate-normal}
  f_{XY}(x,y)&=\frac{1}{2 \pi \sigma_X \sigma_Y \sqrt{1-\rho^2}} \hs \cdot \\
  & \exp \left\{-\frac{1}{2 (1-\rho^2)}\bigg[\bigg(\frac{x-\mu_X}{\sigma_X}\bigg)^2
   +\bigg(\frac{y-\mu_Y}{\sigma_Y}\bigg)^2-2\rho \frac{(x-\mu_X)(y-\mu_Y)}{\sigma_X \sigma_Y} \bigg] \right\}.
\end{align}
 \end{example}
\sol Both formulas are in the form $ae^{-\frac{1}{2}b}$. Thus, it suffices to show that they have the same $a$ and $b$. Here we have
\begin{equation}
\textbf{m} = \begin{bmatrix}
       \mu_X \\%[5pt]
       \mu_Y
\end{bmatrix}.
\end{equation}
 We also have
\begin{equation}
\nonumber \textbf{C}
=  \begin{bmatrix}
       \textrm{Var}(X) & \textrm{Cov}(X,Y)  \\%[5pt]
       \textrm{Cov}(Y,X) & \textrm{Var}(Y)
\end{bmatrix}=\begin{bmatrix}
       \sigma^2_X & \rho \sigma_X \sigma_Y  \\%[5pt]
       \rho \sigma_X \sigma_Y   & \sigma^2_Y
\end{bmatrix}.
\end{equation}
From this, we obtain
\begin{align}%\label{}
 \det \mathbf{C}= \sigma^2_X \sigma^2_Y(1-\rho^2).
\end{align}
Thus, in both formulas for PDF $a$ is given by
\begin{align}%\label{}
 a= \frac{1}{2 \pi \sigma_X \sigma_Y\sqrt{1-\rho^2}}.
\end{align}
Next, we check $b$. We have
\begin{equation}
\nonumber \textbf{C}^{-1}
= \frac{1}{\sigma^2_X \sigma^2_Y(1-\rho^2)}\begin{bmatrix}
       \sigma^2_Y & -\rho \sigma_X \sigma_Y  \\%[5pt]
       -\rho \sigma_X \sigma_Y   & \sigma^2_X
\end{bmatrix}.
\end{equation}
Now by matrix multiplication we obtain
\begin{align}%\label{}
 (\textbf{x}-\textbf{m})^T \mathbf{C}^{-1}(\textbf{x}-\textbf{m}) &= \\
 &\hspace{-40pt}=\frac{1}{\sigma^2_X \sigma^2_Y(1-\rho^2)} \begin{bmatrix}
     x-\mu_X\\
     y-\mu_Y
     \end{bmatrix}^{T}
     \begin{bmatrix}
       \sigma^2_Y & -\rho \sigma_X \sigma_Y  \\%[5pt]
       -\rho \sigma_X \sigma_Y   & \sigma^2_X
\end{bmatrix} \begin{bmatrix}
     x-\mu_X\\
     y-\mu_Y
     \end{bmatrix}\\
 &\hspace{-40pt}=-\frac{1}{2 (1-\rho^2)}\left[\left(\frac{x-\mu_X}{\sigma_X}\right)^2
   +\left(\frac{y-\mu_Y}{\sigma_Y}\right)^2-2\rho \frac{(x-\mu_X)(y-\mu_Y)}{\sigma_X \sigma_Y} \right],
\end{align}
which agrees with the formula in Definition \ref{def:bivariate-normal-PDF}.

\begin{center}
\line(1,0){250}
\end{center}

Remember that two jointly normal random variables $X$ and $Y$ are independent if and only if they are uncorrelated. We can extend this to multiple jointly normal random variables. Thus, if you have a normal random vector whose components are uncorrelated, you can conclude that the components are independent. To show this, note that if the $X_i$'s are uncorrelated, then the covariance matrix $\mathbf{C}_\mathbf{X}$ is diagonal, so its inverse $\mathbf{C}^{-1}_\mathbf{X}$ is also diagonal. You can see that in this case the PDF (Equation \ref{eq:pdf-normal-vec}) becomes the products of marginal PDFs.


\begin{center}
\vspace{10pt}
\fbox{\parbox{0.90\linewidth}{
%\centering
\vspace{10pt}
If $\mathbf{X}=[X_1,X_2,...,X_n]^T$ is a normal random vector, and we know $\textrm{Cov}(X_i,X_j)=0$ for all $i \neq j$, then $X_1$,$X_2$, ..., $X_n$ are independent.
\vspace{10pt}
}}
\vspace{10pt}
\end{center}

Another important result is that if  $\mathbf{X}=[X_1,X_2,...,X_n]^T$ is a normal random vector then $\mathbf{Y}=\mathbf{A}\mathbf{X}+\mathbf{b}$ is also a random vector because any linear combination of components of $\mathbf{Y}$ is also a linear combination of components of $X$ plus a constant value.

\begin{center}
\vspace{10pt}
\fbox{\parbox{0.90\linewidth}{
%\centering
\vspace{10pt}
If $\mathbf{X}=[X_1,X_2,...,X_n]^T$ is a normal random vector, $\mathbf{X} \sim N(\mathbf{m},\mathbf{C})$, $\mathbf{A}$ is an $m$ by $n$ fixed matrix, and $\mathbf{b}$ is an $m$-dimensional fixed vector, then the random vector $\mathbf{Y}=\mathbf{A}\mathbf{X}+\mathbf{b}$ is a normal random vector with mean $\mathbf{A}E\mathbf{X}+\mathbf{b}$ and covariance matrix $\mathbf{A} \mathbf{C} \mathbf{A}^T$.
\begin{align}%\label{}
 \mathbf{Y} \sim N(\mathbf{A}E\mathbf{X}+\mathbf{b},\mathbf{A} \mathbf{C} \mathbf{A}^T)
\end{align}

\vspace{10pt}
}}
\vspace{10pt}
\end{center}






<!-- /section content -->

<?php include 'section_footer.php'; ?>
