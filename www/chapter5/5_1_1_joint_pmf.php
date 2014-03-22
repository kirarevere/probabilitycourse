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
Note that as usual, the comma means "and," so we can write
\begin{align}%\label{}
\nonumber P_{XY}(x,y)&=P(X=x, Y=y) \\
\nonumber &= P\big((X=x)\textrm{ and }(Y=y)\big).
\end{align}
We can define the joint range for $X$ and $Y$ as
\begin{align}%\label{}
\nonumber R_{XY}=\{(x,y) | P_{XY}(x,y)>0\}.
\end{align}
In particular, if $R_X=\{x_1,x_2,... \}$ and $R_Y=\{y_1,y_2,...\}$, then we can always write
\begin{align}%\label{}
\nonumber R_{XY} & \subset R_X \times R_Y \\
\nonumber &= \{(x_i,y_j) | x_i \in R_X, y_j \in R_Y \}.
\end{align}
In fact, sometimes we define $R_{XY}=R_X \times R_Y$ to simplify the analysis. In this case, for some pairs $(x_i,y_j)$ in  $R_X \times R_Y$, $P_{XY}(x_i,y_j)$ might be zero. For two discrete random variables $X$ and $Y$, we have

<div style="padding: 20px; margin: 30px 40px; border: 2px solid black;">
\begin{align}%\label{}
\nonumber \sum_{(x_i,y_j) \in R_{XY}} P_{XY}(x_i,y_j)=1
\end{align}
</div>

We can use the joint PMF to find $P\big( (X,Y) \in A \big)$ for any set $A \subset \mathbb{R}^2$. Specifically, we have
<div style="padding: 20px; margin: 30px 40px; border: 2px solid black;">
\begin{align}%\label{}
\nonumber P\big( (X,Y) \in A \big)=\sum_{(x_i,y_j) \in (A \cap R_{XY})} P_{XY}(x_i,y_j)
\end{align}
</div>

Note that the event $X=x$ can be written as $\{(x_i,y_j): x_i=x, y_j \in R_Y \}$. Also, the event $Y=y$ can be written as $\{(x_i,y_j): x_i\in R_X, y_j=y\}$. Thus, we can write
\begin{align}%\label{}
\nonumber P_{XY}(x,y)&=P(X=x, Y=y) \\
\nonumber &=P\big((X=x)\cap(Y=y)\big).
\end{align}

<h2>Marginal PMFs</h2>
 The joint PMF contains all the information regarding the distributions of $X$ and $Y$. This means that, for example, can we obtain PMF of $X$ from its joint PMF with $Y$. Indeed, we can write
\begin{align}%\label{}
\nonumber P_X(x) &= P(X=x)\\
\nonumber &=\sum_{y_j \in R_Y} P(X=x, Y=y_j) &\textrm{law of total probablity}\\
\nonumber &=\sum_{y_j \in R_Y} P_{XY}(x,y_j).
\end{align}
Here we call $P_X(x)$ the <b>marginal PMF</b> of $X$. Similarly, we can find the marginal PMF of $Y$ as
\begin{align}%\label{}
\nonumber P_Y(Y)=\sum_{x_i \in R_X} P_{XY}(x_i,y).
\end{align}

<div style="padding: 20px; border: 2px solid black; margin: 30px 40px;">
<p style="text-align: center;">Marginal PMFs of $X$ and $Y$:</p>
\begin{align}\label{Eq:marginals}
\nonumber P_X(x)=\sum_{y_j \in R_Y} P_{XY}(x,y_j), \hspace{20pt} \textrm{ for any } x \in R_X\\
 P_Y(y)=\sum_{x_i \in R_X} P_{XY}(x_i,y), \hspace{20pt} \textrm{ for any } y \in R_Y
\end{align}
</div><br />
Let's practice these concepts by looking at an example.
</p><hr /><br />
<span class="example">Example </span>
Consider two random variables $X$ and $Y$ with joint PMF given in Table 5.1.

<div style="padding: 20px; margin: 10px auto;width:500px;">
	<style>
		#table51{
			border-collapse: collapse;
		}
		#table51 tr, #table51 td {
			border: 1px solid black;
		}
		#table51 tr td {
			width: 80px;
			text-align: center;
			vertical-align: middle;
		}
	</style>
	<h4>Table 5.1 Joint PMF of $X$ and $Y$ in Example 5.1</h4>
	<table id="table51">
		<tr>
			<td>&nbsp;</td><td>$Y = 0$</td><td>$Y = 1$</td><td>$Y = 2$</td>
		</tr>
		<tr style="height:80px;">
			<td>$X = 0$</td><td>$\frac{1}{6}$</td><td>$\frac{1}{4}$</td><td>$\frac{1}{8}$</td>	
		</tr>
		<tr style="height:80px;">
			<td>$X = 1$</td><td>$\frac{1}{8}$</td><td>$\frac{1}{6}$</td><td>$\frac{1}{6}$</td>
		</tr>
	</table>
</div>
Figure 5.1 shows $P_{XY}(x,y)$.<br />
<img src="images/chapter5/pmfXY.png" style="display:block; width:400px; height: auto; margin: 10px auto;"/>
<p style="text-align: center;">Figure 5.1: Joint PMF of $X$ and $Y$ (Example 5.1).</p>
<ol type='a'>
	<li>Find $P(X=0,Y\leq1)$.</li>
</ol>

<!-- end section content -->

<?php
	include "section_footer.php"
?>
