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

\begin{center}
\vspace{10pt}
\fbox{\parbox{0.50\linewidth}{
\begin{align}%\label{}
\nonumber \sum_{(x_i,y_j) \in R_{XY}} P_{XY}(x_i,y_j)=1
\end{align}
}}
\vspace{10pt}
\end{center}

We can use the joint PMF to find $P\big( (X,Y) \in A \big)$ for any set $A \subset \mathbb{R}^2$. Specifically, we have
\begin{center}
\vspace{10pt}
\fbox{\parbox{0.50\linewidth}{
\begin{align}%\label{}
\nonumber P\big( (X,Y) \in A \big)=\sum_{(x_i,y_j) \in (A \cap R_{XY})} P_{XY}(x_i,y_j)
\end{align}
}}
\vspace{10pt}
\end{center}

<!-- end section content -->

<?php
	include "section_footer.php"
?>
