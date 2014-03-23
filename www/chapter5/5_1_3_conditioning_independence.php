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

<!-- Example -->
<hr /><span class="example">Example </span><br />
Consider the set of points in the grid shown in Figure \ref{fig:Grid}. These are the points in set $G$ defined as
\begin{align}%\label{}
\nonumber  G=\{(x,y) | x,y \in \mathbb{Z}, |x|+|y|\leq 2\}.
\end{align}
Suppose that we pick a point $(X,Y)$ from this grid completely at random. Thus, each point has a probability of $\frac{1}{13}$ of being chosen.

<ol type="a">
	<li>Find the joint and marginal PMFs of $X$ and $Y$.</li>
 	<li>Find the conditional PMF of $X$ given $Y=1$.</li>
  <li>Are $X$ and $Y$ independent?</li>
</ol>

<div class="solvedprob">
	<ul><li><a><b>Solution</b></a>
		<ul><li>
			<ol type="a">
  <li>Here, note that
  \begin{align}%\label{}
  \nonumber  R_{XY}=G=\{(x,y) | x,y \in \mathbb{Z}, |x|+|y|\leq 2\}.
  \end{align}
  Thus, the joint PMF is given by
  \begin{equation}
 \nonumber P_{XY}(x,y) = \left\{
  \begin{array}{l l}
    \frac{1}{13}  &  \quad (x,y) \in G  \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
  \end{equation}

  To find the marginal PMF of $X$, $P_X(i)$, we use Equation 5.1. Thus,
  \begin{align}%\label{}
  \nonumber  &P_X(-2)=P_{XY}(-2,0)=\frac{1}{13},\\
  \nonumber  &P_X(-1)=P_{XY}(-1,-1)+P_{XY}(-1,0)+P_{XY}(-1,1)=\frac{3}{13},\\
  \nonumber  &P_X(0)=P_{XY}(0,-2)+P_{XY}(0,-1)+P_{XY}(0,0)\\
  \nonumber  & \hspace{40pt} +P_{XY}(0,1)+P_{XY}(0,2)=\frac{5}{13},\\
  \nonumber  &P_X(1)=P_{XY}(1,-1)+P_{XY}(1,0)+P_{XY}(1,-1)=\frac{3}{13},\\
  \nonumber  &P_X(2)=P_{XY}(2,0)=\frac{1}{13}.
  \end{align}

  Similarly, we can find

  \begin{equation}
   \nonumber P_Y(j) = \left\{
  \begin{array}{l l}
     \frac{1}{13} & \quad \text{for  } j=2,-2\\
     \frac{3}{13} & \quad \text{for  } j=-1,1\\
     \frac{5}{13} & \quad \text{for  } j=0\\
       0   & \quad \text{ otherwise}
  \end{array} \right.
  \end{equation}

  We can write this in a more compact form as
  \begin{align}%\label{}
  \nonumber  P_{X}(k)=P_{Y}(k)=\frac{5-2|k|}{13}, \hspace{10pt} \textrm{ for }k=-2,-1,0,1,2.
  \end{align}
	</li>
  <li> For $i=-1,0,1$, we can write
  \begin{align}%\label{}
  \nonumber  P_{X|Y}(i|1)&=\frac{P_{XY}(i,1)}{P_Y(1)}\\
  \nonumber  &=\frac{\frac{1}{13}}{\frac{3}{13}}=\frac{1}{3}, \hspace{10pt} \textrm{ for }i=-1,0,1.
  \end{align}
  Thus, we conclude
  \begin{equation}
  \nonumber P_{X|Y}(i|1) = \left\{
  \begin{array}{l l}
    \frac{1}{3}  &  \quad \textrm{ for }i=-1,0,1  \\
     0 &  \quad \text{otherwise}
  \end{array} \right.
  \end{equation}
  By looking at the above conditional PMF, we conclude that, given $Y=1$, $X$ is uniformly distributed over the set $\{-1,0,1\}$.

	</li>
  <li>$X$ and $Y$ are <b>not</b> independent. We can see this as the conditional PMF of $X$ given $Y=1$ (calculated above) is not the same as marginal PMF of $X$, $P_{X}(x)$.
	</li></ol></li></ul></li></ul>
</div>
<!-- /Example -->

<h2>Conditional Expectation:</h2>
Given that we know event $A$ has occurred, we can compute the conditional expectation of a random variable $X$, $E[X|A]$. Conditional expectation is similar to ordinary e
xpectation. The only difference is that we replace the PMF by the conditional PMF. Specifically, we have
\begin{align}%\label{}
\nonumber E[X|A]=\sum_{x_i \in R_{X}} x_i P_{X|A}(x_i).
\end{align}
Similarly, given that we have observed the value of random variable $Y$, we can compute the conditional expectation of $X$. Specifically, the conditional expectation of $
X$ given that $Y=y$ is
\begin{align}%\label{}
\nonumber E[X|Y=y]=\sum_{x_i \in R_{X}} x_i P_{X|Y}(x_i|y).
\end{align}

<div style="padding: 25px; margin 30px 40px; border: 2px solid black;">
<p style="text-align: center">Conditional Expectation of $X$:</p>
\begin{align}%\label{}
\nonumber &E[X|A]=\sum_{x_i \in R_{X}} x_i P_{X|A}(x_i)\\
\nonumber &E[X|Y=y_j]=\sum_{x_i \in R_{X}} x_i P_{X|Y}(x_i|y_j)
\end{align}
</div>

<!-- Example -->
<span class="example">Example </span>
Let $X$ and $Y$ be the same as in Example 5.4.
<ol type="a">
	<li>Find $E[X|Y=1|$.</li>
	<li>Find $E[X| -1&lt;Y&lt;2]$.</li>
	<li>Find $E[|X| | -1&lt;Y&lt;2]$.</li>
</ol>

<div class="solvedprob">
	<ul><li><a><b>Solution</b></a>
		<ul><li>
			<ol type="a">
				<li>
	To find $E[X|Y=1]$, we have
  \begin{align}%\label{}
  \nonumber E[X|Y=1]=\sum_{x_i \in R_{X}} x_i P_{X|Y}(x_i|1).
  \end{align}
  We found in Example 5.4 that given $Y=1$, $X$ is uniformly distributed over the set $\{-1,0,1\}$. Thus, we conclude that
  \begin{align}%\label{}
  \nonumber E[X|Y=1]=\frac{1}{3}(-1+0+1)=0.
  \end{align}
	</li><li>

  To find $E[X| -1<Y<2]$, let $A$ be the event that $-1<Y<2$, i.e., $Y \in \{0,1\}$. To find $E[X|A]$, we need to find the conditional PMF, $P_{X|A}(k)$, for $k=-2,1,0,1,2$. First, note that
      \begin{align}%\label{}
          \nonumber P(A)=P_Y(0)+P_Y(1)= \frac{5}{13}+\frac{3}{13}=\frac{8}{13}.
      \end{align}
      Thus, for $k=-2,1,0,1,2$, we have
      \begin{align}%\label{}
       \nonumber  &P_{X|A}(k)=\frac{13}{8}P(X=k,A).
      \end{align}
      So, we can write
     \begin{align}%\label{}
       \nonumber  &P_{X|A}(-2)=\frac{13}{8}P(X=-2,A)\\
       \nonumber  &=\frac{13}{8}P_{XY}(-2,0)=\frac{1}{8},\\
       \nonumber  &P_{X|A}(-1)=\frac{13}{8}P(X=-1,A)\\
       \nonumber  &=\frac{13}{8}\big[P_{XY}(-1,0)+P_{XY}(-1,1)\big]=\frac{2}{8}=\frac{1}{4},\\
       \nonumber  &P_{X|A}(\hspace{4pt}0\hspace{3pt})=\frac{13}{8}P(X=0,A)\\
       \nonumber  &=\frac{13}{8}\big[P_{XY}(0,0)+P_{XY}(0,1)\big]=\frac{2}{8}=\frac{1}{4},\\
       \nonumber  &P_{X|A}(\hspace{4pt}1\hspace{3pt})=\frac{13}{8}P(X=1,A)\\
       \nonumber  &=\frac{13}{8}\big[P_{XY}(1,0)+P_{XY}(1,1)\big]=\frac{2}{8}=\frac{1}{4},\\
       \nonumber  &P_{X|A}(\hspace{4pt}2\hspace{3pt})=\frac{13}{8}P(X=2,A)\\
       \nonumber  &=\frac{13}{8}P_{XY}(2,0)=\frac{1}{8}.
     \end{align}
     Thus, we have
     \begin{align}%\label{}
      \nonumber E[X|A]&=\sum_{x_i \in R_{X}} x_i P_{X|A}(x)\\
      \nonumber &=(-2)\frac{1}{8}+(-1)\frac{1}{4}+0 \frac{1}{4}+1 . \frac{1}{4}+2 . \frac{1}{8}=0.
     \end{align}
			</li><li>

     To find $E\big[|X| \big{|} -1&lt;Y&lt;2\big]$, we use the conditional PMF and LOTUS. We have
     \begin{align}%\label{}
      \nonumber E[|X| \big{|} A]&=\sum_{x_i \in R_{X}} |x_i| P_{X|A}(x)\\
      \nonumber &=|-2|\cdot \frac{1}{8}+|-1| \cdot \frac{1}{4}+ 0 \cdot \frac{1}{4}+1 \cdot \frac{1}{4}+2 \cdot \frac{1}{8}=1.
     \end{align}
		</li></ol>
		</li></ul>
		</li></ul></div>

<!-- /Example -->

<!-- End Section Content -->

<?php
	include "section_footer.php";
?>
