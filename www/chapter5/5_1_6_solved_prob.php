<?php
	$section_no			= "5.1.6";
	$section_title	=	"Solved Problems";
	$section_next		= "#";
	$section_prev		= "#";
	include	'../Control/autonumber.php';
	loadHeaders(61);
	include 'section_header.php';
?>

<!-- Section Content -->
<span class="problem">Problem </span><br />
Consider two random variables $X$ and $Y$ with joint PMF given in Table 5.3.
<ol type="a"> 
  <li>Find $P(X \leq 2, Y \leq 4)$.</li>
  <li>Find the marginal PMFs of $X$ and $Y$.</li>
  <li>Find $P(Y=2 | X=1)$.</li>
  <li>Are $X$ and $Y$ independent?</li>
</ol>

<style>
	#table5_3 {
		font-size: 12pt;
		border-collapse: collapse;
		width: 400px;
		margin: 10px auto;
	}

	#table5_3 td {
		border: 2px solid black;
		text-align: center;
		vertical-align: middle;
	}
</style>
<table id="table5_3">
	<tr style="height:50px;">
		<td>&nbsp;</td>
		<td>$Y = 2$</td>
		<td>$Y = 4$</td>
		<td>$Y = 5$</td>
	</tr>
	<tr style="height:80px;">
		<td>$X = 1$</td>
		<td>$\frac{1}{12}$</td>
		<td>$\frac{1}{24}$</td>
		<td>$\frac{1}{24}$</td>
	</tr>
	<tr style="height:80px;">
		<td>$X = 2$</td>
		<td>$\frac{1}{6}$</td>
		<td>$\frac{1}{12}$</td>
		<td>$\frac{1}{8}$</td>
	</tr>
	<tr style="height:80px;">
		<td>$X = 3$</td>
		<td>$\frac{1}{4}$</td>
		<td>$\frac{1}{8}$</td>
		<td>$\frac{1}{12}$</td>
	</tr>
</table>

<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
<ol type="a">
  <li>To find $P(X \leq 2, Y \leq 4)$, we can write
  \begin{align}%\label{}
  \nonumber P(X \leq 2, Y \leq 4) &=P_{XY}(1,2)+ P_{XY}(1,4)+P_{XY}(2,2)+ P_{XY}(2,4)\\
  \nonumber &=\frac{1}{12}+\frac{1}{24}+\frac{1}{6}+\frac{1}{12}=\frac{3}{8}.
  \end{align}
	</li>

  <li>Note from the table that
  \begin{align}%\label{}
  \nonumber R_X=\{1,2,3\}  \textrm{and} R_Y=\{2,4,5\}.
  \end{align}
  Now we can use Equation 5.1 to find the marginal PMFs:

  \begin{equation}
 \nonumber P_X(x) = \left\{
  \begin{array}{l l}
     \frac{1}{6} &  \quad x=1  \\
      &  \quad   \\
     \frac{3}{8} &  \quad x=2  \\
      &  \quad   \\
      \frac{11}{24} &  \quad x=3  \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
\end{equation}

  \begin{equation}
 \nonumber P_Y(y) = \left\{
  \begin{array}{l l}
     \frac{1}{2} &  \quad y=2  \\
      &  \quad   \\
     \frac{1}{4} &  \quad y=4  \\
      &  \quad   \\
     \frac{1}{4} &  \quad y=5  \\
    &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
\end{equation}
	</li>
<li>Using the formula for conditional probability, we have
   \begin{align}%\label{}
       \nonumber P(Y=2 | X=1)&=\frac{P(X=1, Y=2)}{P(X=1)}\\
       \nonumber &=\frac{P_{XY}(1,2)}{P_X(1)}\\
       \nonumber &=\frac{\frac{1}{12}}{\frac{1}{6}}=\frac{1}{2}.
     \end{align}
</li>

  <li>Are $X$ and $Y$ independent? To check whether $X$ and $Y$ are independent, we need to check that $P(X=x_i,Y=y_j)=P(X=x_i)P(Y=y_j)$, for all $x_i \in R_X$ and all $y_j \in R_Y$. Looking at the table and the results from previous parts, we find
  \begin{align}%\label{}
       \nonumber P(X=2,Y=2)=\frac{1}{6} \neq P(X=2)P(Y=2)=\frac{3}{16}.
  \end{align}
  Thus, we conclude that $X$ and $Y$ are not independent.
	</li>

</li></ul>
</li></ul></div><hr /><br />

<span class="problem">Problem </span><br />
I have a bag containing $40$ blue marbles and $60$ red marbles. I choose $10$ marbles (without replacement) at random. Let $X$ be the number of blue marbles and $y$ be the number of red marbles. Find the joint PMF of $X$ and $Y$.
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
This is, in fact, a hypergeometric distribution. First, note that we must have $X+Y=10$, so
  \begin{align}%\label{}
  \nonumber R_{XY}&=\{(i,j) | i+j=10, i,j \in \mathbb{Z}, i,j \geq 0\}\\
  \nonumber &=\{(0,10),(1,9),(2,8),...,(10,0)\}.
  \end{align}

  Then, we can write
   \begin{equation}
  \nonumber P_{XY}(i,j)= \left\{
  \begin{array}{l l}
     \frac{{40 \choose i} {60 \choose j}}{{100 \choose 10}} &  \quad  i+j=10, i,j \in \mathbb{Z}, i,j \geq 0  \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
 \end{equation}

</li></ul>
</li></ul></div><hr /><br />

<span class="problem">Problem </span><br />
Let $X$ and $Y$ be two independent discrete random variables with the same CDFs $F_{X}$ and $F_Y$ . Define
  \begin{align}%\label{}
  \nonumber Z=\max (X,Y),  \\
  \nonumber W=\min(X,Y).
  \end{align}
  Find the CDFs of $Z$ and $W$.

<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
To find the CDF of $Z$, we can write
  \begin{align}%\label{}
  \nonumber F_Z(z)&=P(Z \leq z) \\
  \nonumber &=P(\max(X,Y) \leq z)\\
  \nonumber &=P\bigg((X \leq z) \textrm{ and } (Y \leq z)\bigg)\\
  \nonumber &=P(X \leq z) P(Y \leq z) &(\textrm{ since }X \textrm{ and }Y \textrm{ are independent})\\
  \nonumber &=F_X(z)F_Y(z).
  \end{align}
  To find the CDF of $W$, we can write
  \begin{align}%\label{}
  \nonumber F_W(w)&=P(W \leq w) \\
  \nonumber &=P(\min(X,Y) \leq w)\\
  \nonumber &=1-P(\min(X,Y) > w)\\
  \nonumber &=1-P\bigg((X > w) \textrm{ and } (Y > w)\bigg)\\
  \nonumber &=1-P(X > w) P(Y > w) &(\textrm{ since }X \textrm{ and }Y \textrm{ are independent})\\
  \nonumber &=1-(1-F_X(w))(1-F_Y(w))\\
  \nonumber &=F_X(w)+F_Y(w)-F_X(w)F_Y(w).
  \end{align}

</li></ul>
</li></ul></div><hr /><br />

<span class="problem">Problem </span><br />
Let $X$ and $Y$ be two discrete random variables, with range
  \begin{align}%\label{}
  \nonumber R_{XY}=\{(i,j) \in \mathbb{Z}^2|i,j \geq 0, |i-j|\leq 1\},
  \end{align}
  and joint PMF given by
  \begin{align}%\label{}
  \nonumber P_{XY}=(i,j)=\frac{1}{6 \cdot 2^{\min(i,j)}}, \hspace{10pt} \textrm{ for }(i,j) \in R_{XY}.
  \end{align}
<img src="images/chapter5/solved1.png" style="width:400px;height:auto;margin:10px auto;display:block;" />
<p style="text-align:center;">Figure 5.5: Figure shows $R_{XY}$ for $X$ and $Y$ in problem 4</p>

<ol>
    <li>Pictorially show $R_{XY}$ in the $x-y$ plane.</li>
    <li>Find the marginal PMFs $P_X(i)$, $P_Y(j)$.</li>
    <li>Find $P(X=Y|X<2)$.</li>
    <li>Find $P(1 \leq X^2+Y^2 \leq 5)$.</li>
    <li>Find $P(X=Y)$.</li>
    <li>Find $E[X|Y=2]$.</li>
    <li>Find Var$(X|Y=2)$.</li>
</ol>

<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>

</li></ul>
</li></ul></div><hr /><br />
<!-- /Section Content -->

<?php include 'section_footer.php'; ?>
