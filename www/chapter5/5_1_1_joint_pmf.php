<?php
	$section_no = "5.1.1";
	$section_title = "Joint Probability Mass Function (PMF)";
	$section_prev = "5_1_0_joint_distributions.php";
	$section_next = " ";	
	include "section_header.php"
?>

<!-- Section content -->
Remember that for a discrete random variable $X$, we define the PMF as $P_X(x)=P(X=x)$. Now, if we have two random variables $X$ and $Y$, and we would like to study them jointly, we define the <b>joint probability mass function</b> as follows:

<div style="padding: 20px; border: 2px solid black;margin: 30px 40px;">
The <b>joint probability mass function</b> of two discrete random variables $X$ and $Y$ is defined as
\begin{align}%\label{}
\nonumber P_{XY}(x,y)=P(X=x, Y=y).
\end{align}
</div>
Note that as usual, the comma means ``and'', so we can write
\begin{align}%\label{}
\nonumber P_{XY}(x,y)&=P(X=x, Y=y) \\
\nonumber &= P\big((X=x)\textrm{ and }(Y=y)\big).
\end{align}
We can define the joint range for $X$ and $Y$ as
\begin{align}%\label{}
\nonumber R_{XY}=\{(x,y) | P_{XY}(x,y)>0\}.
\end{align}

<!-- end section content -->

<?php
	include "section_footer.php"
?>
