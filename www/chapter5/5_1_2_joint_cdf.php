<?php
	$section_no = "5.1.2";
	$section_title = "Joint Cumulative Distributive Function (CDF)";
	$section_prev = "chapter4/5_1_1_joint_pmf";
	$section_next = " ";
	include "../Control/autonumber.php";
	loadHeaders(58);	
	include "section_header.php";
?>

<!-- Section Content -->
<p>
Remember that, for a random variable $X$, we define the CDF as $F_X(x)=P(X \leq x)$. Now, if we have two random variables $X$ and $Y$ and we would like to study them jointly, we can define the \textbf{joint cumulative function} as follows:

<div style="border: 2px solid black; margin: 30px 40px; padding: 25px;">
The <b>joint cumulative function</b> of two random variables $X$ and $Y$ is defined as
\begin{align}%\label{}
\nonumber F_{XY}(x,y)=P(X \leq x, Y \leq y).
\end{align}
</div>

As usual, comma means "and," so we can write
\begin{align}%\label{}
\nonumber F_{XY}(x,y)&=P(X \leq x, Y \leq y) \\
\nonumber &= P\big((X \leq x)\textrm{ and }(Y\leq y)\big)=P\big((X \leq x)\cap(Y\leq y)\big).
\end{align}
Figure 5.2 shows the region associated with $F_{XY}(x,y)$ in the two-dimensional plane. Note that the above definition of joint CDF is a general definition and is applicable to discrete, continuous, and mixed random variables. Since, the joint CDF refers to the probability of an event, we must have $0 \leq F_{XY}(x,y) \leq 1$.

<img src="../images/chapter5/cdfXY.png">

</p>
<!-- End Section Content -->

<?php
	include "section_footer.php";	
?>
