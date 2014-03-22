<?php
	$section_no = "5.1.3";
	$section_title = "Conditioning and Independence";
	$section_prev = " ";
	$section_next = " ";
	include "../Control/autonumber.php";
	loadHeaders(59);
	include "section_header.php";	
?>

<!-- Section Content -->
<p>
We have discussed conditional probability before, and you have already seen some problems regarding random variables and conditional probability. Here we will discuss conditioning for random variables more in detail and introduce the conditional PMF, conditional CDF, and conditional expectation. We would like to emphasize that there is only one main formula regarding conditional probability which is
\begin{align}\label{}
  \nonumber P(A|B)=\frac{P(A \cap B)}{P(B)}, \textrm{ when } P(B)>0.
\end{align}
Any other formula regarding conditional probability can be derived from the above formula. Specifically, if you have two random variables $X$ and $Y$, you can write
\begin{align}\label{}
  \nonumber P(X \in C|Y \in D)=\frac{P(X \in C, Y \in D)}{P(Y \in D)}, \textrm{ where } C, D \subset \mathbb{R}.
\end{align}
</p>
<h2>Conditional PMF and CDF:</h2>
Remember that the PMF is by definition a probability measure, i.e., it is $P(X=x_k)$. Thus, we can talk about the \textbf{conditional PMF}. Specifically, the conditional PMF of $X$ given event $A$, is defined as
\begin{align}%\label{}
\nonumber  P_{X|A}(x_i)&=P(X=x_i|A) \\
\nonumber  &=\frac{P(X=x_i \textrm{ and } A)}{P(A)}.
\end{align}

<hr /><span class="example">Example </span><br />
I roll a fair die. Let $X$ be the observed number. Find the conditional PMF of $X$ given that we know the observed number was less than $5$.
<div class="solvedprob">
	<ul><li><a><b>Solution</b></a>
		<ul><li>
Here, we condition on the event $A=\{X <5\}$, where $P(A)=\frac{4}{6}$. Thus,
\begin{align}%\label{}
\nonumber  P_{X|A}(1)&=P(X= 1| X<5) \\
\nonumber  &=\frac{P(X= 1 \textrm{ and } X<5)}{P(X<5)}\\
\nonumber  &=\frac{P(X= 1)}{P(X<5)}=\frac{1}{4}.
\end{align}
Similarly, we have
\begin{align}%\label{}
\nonumber  P_{X|A}(2)=P_{X|A}(3)=P_{X|A}(4)=\frac{1}{4}.
\end{align}
Also,
\begin{align}%\label{}
\nonumber  P_{X|A}(5)=P_{X|A}(6)=0.
\end{align}
		</li></ul>
	</li></ul>
</div><hr /><br />

<div style="padding: 25px; border: 2px solid black; margin: 30px 40px;">
For a discrete random variable $X$ and event $A$, the <b>conditional PMF</b> of $X$ given $A$ is defined as
\begin{align}%\label{}
\nonumber  P_{X|A}(x_i)&=P(X=x_i|A) \\
\nonumber  &=\frac{P(X=x_i \textrm{ and } A)}{P(A)},  \hspace{10pt} \textrm{for any $x_i \in R_X$}.
\end{align}
Similarly, we define the <b>conditional CDF</b> of $X$ given $A$ as
\begin{align}%\label{}
\nonumber  F_{X|A}(x)&=P(X \leq x|A).
\end{align}
</div><hr />

<b>Conditional PMF of $X$ Given $Y$:</b>

In some problems, we have observed the value of a random variable $Y$, and we need to update the PMF of another random variable $X$ whose value has not yet been observed. In these problems, we use the <b>conditional PMF</b> of $X$ given $Y$. The conditional PMF of $X$ given $Y$ is defined as
\begin{align}%\label{}
\nonumber  P_{X|Y}(x_i|y_j)&=P(X=x_i|Y=y_j) \\
\nonumber  &=\frac{P(X=x_i,Y=y_j)}{P(Y=y_j)}\\
\nonumber  &=\frac{P_{XY}(x_i,y_j)}{P_Y(y_j)}.
\end{align}
Similarly, we can define the conditional probability of $Y$ given $X$:
\begin{align}%\label{}
\nonumber  P_{Y|X}(y_j|x_i)&=P(Y=y_j|X=x_i) \\
\nonumber  &=\frac{P_{XY}(x_i,y_j)}{P_X(x_i)}.
\end{align}


<div style="padding: 25px; border: 2px solid black; margin: 30px 40px;">
For discrete random variables $X$ and event $A$, the <b>conditional PMFs</b> of $X$ given $Y$ and vice versa are defined as
\begin{align}%\label{}
\nonumber  P_{X|Y}(x_i|y_j)&=\frac{P_{XY}(x_i,y_j)}{P_Y(y_j)},\\
\nonumber  P_{Y|X}(y_j|x_i)&=\frac{P_{XY}(x_i,y_j)}{P_X(x_i)}
\end{align}
for any $x_i \in R_X$ and $y_j \in R_Y$.
</div>

<h2>Independent Random Variables:</h2>
We have defined independent random variables previously. Now that we have seen joint PMFs and CDFs, we can restate the independence definition.
<div style="padding:25px; margin: 30px 40px; border: 2px solid black;">
Two discrete random variables $X$ and $Y$ are independent if
\begin{align}%\label{}
\nonumber  P_{XY}(x,y)=P_X(x) P_Y(y), \hspace{10pt} \textrm{ for all }x,y.
\end{align}
Equivalently, $X$ and $Y$ are independent if
\begin{align}%\label{}
\nonumber  F_{XY}(x,y)=F_X(x) F_Y(y), \hspace{10pt}  \textrm{ for all }x,y.
\end{align}
</div>

<img src="images/chapter5/exampleGrid.png" style="width:400px;height:auto;display:block;margin:10px auto;" />
<p style="text-align:center">Figure 5.4: Grid for example 5.4</p>

So, if $X$ and $Y$ are independent, we have
\begin{align}%\label{}
\nonumber  P_{X|Y}(x_i|y_j)&=P(X=x_i|Y=y_j)\\
\nonumber  &=\frac{P_{XY}(x_i,y_j)}{P_Y(y_j)}\\
\nonumber  &=\frac{P_X(x_i) P_Y(y_j)}{P_Y(y_j)}\\
\nonumber  &=P_X(x_i).
\end{align}
As we expect, for independent random variables, the conditional PMF is equal to the marginal PMF. In other words, knowing the value of $Y$ does not provide any information about $X$.

<!-- End Section Content -->

<?php
	include "section_footer.php";
?>
