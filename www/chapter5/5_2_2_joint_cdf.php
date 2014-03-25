<?php
	$section_no			= "5.2.2";
	$section_title	= "Joint Cumulative Distribution Function (CDF)";
	$section_prev		= "chapter5/5_2_1_joint_pdf.php";
	$section_next		= "chapter5/5_2_3_";
	include						"Control/autonumber.php";
	loadHeader(67);
	include						"section_header.php";
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
<hr /><span class="example">Example </span>
We have already seen the joint CDF for discrete random variables. The joint CDF has the same definition for continuous random variables. It also satisfies the same properties.

<div style="padding:25px;margin:30px 40px;border:2px solid black;">
The <b>joint cumulative function</b> of two random variables $X$ and $Y$ is defined as
\begin{align}%\label{}
\nonumber F_{XY}(x,y)=P(X \leq x, Y \leq y).
\end{align}
The joint CDF satisfies the following properties:
<ol type="a">
  <li> $F_X(x)=F_{XY}(x, \infty)$, for any $x$ (marginal CDF of $X$).</li>
  <li> $F_Y(y)=F_{XY}(\infty,y)$, for any $y$ (marginal CDF of $Y$).</li>
  <li> $F_{XY}(\infty, \infty)=1$.</li>
  <li> $F_{XY}(-\infty, y)=F_{XY}(x,-\infty)=0$.</li>
  <li> 
			$P(x_1&lt;X \leq x_2, \hspace{5pt} y_1&lt;Y \leq y_2)=$\\
     $\hspace{60pt} F_{XY}(x_2,y_2)-F_{XY}(x_1,y_2)-F_{XY}(x_2,y_1)+F_{XY}(x_1,y_1)$.
	</li>
  <li>If $X$ and $Y$ are independent, then $F_{XY}(x,y)=F_X(x)F_Y(y)$.</li>
</ol><br />

Figure 5.7 shows the values of $F_{XY}(x,y)$ in the $x-y$ plane. Note that $F_{XY}(x,y)$ is a continuous function in both arguments. This is always true for jointly continuous random variables. This fact sometimes simplifies finding $F_{XY}(x,y)$. The next example (Example 5.19) shows how we can use this fact.
<img src="images/chapter5/contcdf5_7.png" style="display:block; width: 400px; height: auto; margin: 20px auto;" />
<p style="text-align:center;">Figure 5.7: The joint CDF of two independent $Uniform(0,1)$ random variables $X$ and $Y$.</p>

</div>
<!-- /Section Content -->

<?php include				"section_footer.php"; ?>
