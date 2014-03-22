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

<!-- End Section Content -->

<?php
	include "section_footer.php";
?>
