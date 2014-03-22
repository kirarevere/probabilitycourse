<?php
	$section_no = "5.1.1";
	$section_title = "Joint Probability Mass Function (PMF)";
	$section_prev = "5_1_0_joint_distributions.php";
	$section_next = " ";	
	include "Control/autonumber.php";
	include "section_header.php"
	loadHeaders(56);	
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

	<style>
		#table51{
			border-collapse: collapse;
			display:block;
			width: 330px;
			margin: 20px auto;
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
	<h4 style="text-align:center">Table 5.1 Joint PMF of $X$ and $Y$ in Example 5.1</h4>
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
Figure 5.1 shows $P_{XY}(x,y)$.<br />
<img src="images/chapter5/pmfXY.png" style="display:block; width:400px; height: auto; margin: 10px auto;"/>
<p style="text-align: center;">Figure 5.1: Joint PMF of $X$ and $Y$ (Example 5.1).</p>
<ol type='a'>
	<li>Find $P(X=0,Y\leq1)$.</li>
	<li>Find the marginal PMFs of $X$ and $Y$.</li>
	<li>Find $P(Y=1|X=0)$.</li>
	<li>Are $X$ and $Y$ independent?</li>
</ol>
<div class="solvedprob">
	<ul>
		<li><a><b>Solution</b></a>
			<ul>
				<li>
					<ol type="a">
						<li>
		To find $P(X=0, Y \leq 1)$, we can write
		\begin{align}%\label{}
		\nonumber P(X=0, Y \leq 1) =P_{XY}(0,0)+ P_{XY}(0,1)=\frac{1}{6}+\frac{1}{4}=\frac{5}{12}.
		\end{align}
						</li>
						<li>
		Note that from the table,
		\begin{align}%\label{}
		\nonumber R_X=\{0,1\}  \textrm{ and }  R_Y=\{0,1,2\}.
		\end{align}
		Now we can use Equation 5.1 to find the marginal PMFs. For example, to find $P_X(0)$, we can write

		\begin{align}%\label{}
		\nonumber P_X(0)&=P_{XY}(0,0)+P_{XY}(0,1)+P_{XY}(0,2)\\
		\nonumber &=\frac{1}{6}+\frac{1}{4}+\frac{1}{8}\\
		\nonumber &=\frac{13}{24}.
		\end{align}
		We obtain
		\begin{equation}
	 \nonumber P_X(x) = \left\{
		\begin{array}{l l}
			 \frac{13}{24} &  \quad x=0  \\
				&  \quad   \\
			 \frac{11}{24} &  \quad x=1  \\
				&  \quad   \\
			0 &  \quad \text{otherwise}
		\end{array} \right.
	\end{equation}

  \begin{equation}
 \nonumber P_Y(y) = \left\{
  \begin{array}{l l}
     \frac{7}{24} &  \quad y=0  \\
      &  \quad   \\
     \frac{5}{12} &  \quad y=1  \\
      &  \quad   \\
     \frac{7}{24} &  \quad y=2  \\
    &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
\end{equation}
				</li>
				<li>
 Find $P(Y=1 | X=0)$:
  Using the formula for conditional probability, we have
   \begin{align}%\label{}
       \nonumber P(Y=1 | X=0)&=\frac{P(X=0, Y=1)}{P(X=0)}\\
       \nonumber &=\frac{P_{XY}(0,1)}{P_X(0)}\\
       \nonumber &=\frac{\frac{1}{4}}{\frac{13}{24}}=\frac{6}{13}.
     \end{align}
				</li>
				<li>
  Are $X$ and $Y$ independent? $X$ and $Y$ are not independent, because as we just found out

  \begin{align}%\label{}
       \nonumber P(Y=1|X=0)=\frac{6}{13} \neq P(Y=1)=\frac{5}{12}.
  \end{align}

  <b>Caution</b>: If we want to show that $X$ and $Y$ are independent, we need to check that $P(X=x_i,Y=y_j)=P(X=x_i)P(Y=y_j)$, for all $x_i \in R_X$ and all $y_j \in R_Y$. Thus, even if in the above calculation we had found $P(Y=1 | X=0)= P(Y=1)$, we would not yet have been able to conclude that $X$ and $Y$ are independent. For that, we would need to check the independence condition for all  $x_i \in R_X$ and all $y_j \in R_Y$.

						</li>
					</ol>
				</li>
			</ul>
		</li>
	</ul>
</div>

<!-- end section content -->

<?php
	include "section_footer.php"
?>
