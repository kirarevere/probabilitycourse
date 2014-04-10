<?php
	$section_no			= "6.1.2";
	$section_title	= "Joint Distributions and Independence";
	$section_prev		= "chapter6/6_1_1_joint_distributions_independence.php";
	$section_next		= "chapter6/6_1_3_moment_functions.php";
	include						"../Control/autonumber.php";
	loadHeaders(77);
	include						"section_header.php";
?>

<!-- Section Content -->
<p>
In many applications, we need to work with a sum of several random variables. In particular, we might need to study a random variable $Y$ given by
\begin{align}%\label{}
\nonumber Y=X_1+X_2+ \cdots +X_n.
\end{align}
The linearity of expectation tells us that
\begin{align}%\label{}
\nonumber EY=EX_1+EX_2+ \cdots +EX_n.
\end{align}
We can also find the variance of $Y$ based on our discussion in Section 5.3. In particular, we saw that the variance of a sum of two random variables is
\begin{align}%\label{}
\nonumber  \textrm{Var}(X_1+X_2)=\textrm{Var}(X_1)+\textrm{Var}(X_2)+2 \textrm{Cov}(X_1,X_2).
\end{align}
For $Y=X_1+X_2+ \cdots +X_n$, we can obtain a more general version of the above equation. We can write
\begin{align}
\nonumber \textrm{var} (Y)&=\textrm{cov}\left(\sum_{i=1}^{n}X_i,\sum_{j=1}^{n}X_j\right)\\
\nonumber &=\sum_{i=1}^{n}\sum_{j=1}^{n} \textrm{cov}(X_i,X_j)  &\textrm{(using part 7 of Lemma 5.3)}\\
\nonumber &=\sum_{i=1}^{n} \textrm{var}(X_i)+2 \sum_{i&lt;j} \textrm{cov}(X_i,X_j).
\end{align}
</p>

<div class='cbox'>
\begin{align}%\label{}
\nonumber \left(\sum_{i=1}^{n} X_i\right)=\sum_{i=1}^{n} \textrm{var}(X_i)+2 \sum_{i&lt;j} \textrm{cov}(X_i,X_j)
\end{align}
</div><br />

If the $X_i$'s are independent, then $\textrm{cov}(X_i,X_j)=0$ for $i \neq j$. In this case, we can write
<div class='cbox' style='width:700px;'>
\begin{align}%\label{}
\nonumber \textrm{If $X_1$, $X_2$,...,$X_n$ are independent, }\textrm{var} \left(\sum_{i=1}^{n} X_i\right)=\sum_{i=1}^{n} \textrm{var}(X_i).
\end{align}
</div>

<!-- Begin Example -->
<hr /><span class='example'>Example </span><br />
$N$ people sit around a round table, where $N&gt;5$. Each person tosses a coin. Anyone whose outcome is different from his/her two neighbors will receive a present. Let $X$ be the number of people who receive presents. Find $EX$ and $\textrm{var}(X)$.
<div class='solvedprob'><ul><li><a><b>Solution</b></a>
<ul><li>
Number the $N$ people from $1$ to $N$. Let $X_i$ be the indicator random variable for the $i$th person, that is, $X_i=1$ if the $i$th person receives a present and zero otherwise. Then
\begin{align}%\label{}
X=X_1+X_2+...+X_N.
\end{align}
First note that $P(X_i=1)=\frac{1}{4}$. This is the probability that the person to right has a different outcome times the probability that the person to the left has a different outcome. In other words, if we define $H_i$ and $T_i$ be the events that the $i$th person's outcome is heads and tails respectively, then we can write
\begin{align}%\label{}
EX_i &=P(X_i=1)\\
&=P(H_{i-1},T_i,H_{i+1})+P(T_{i-1},H_i,T_{i+1})\\
&=\frac{1}{8}+\frac{1}{8}=\frac{1}{4}.
\end{align}
Thus, we find
\begin{align}%\label{}
EX=EX_1+EX_2+...+EX_N=\frac{N}{4}.
\end{align}
Next, we can write
\begin{align}%\label{}
\nonumber \textrm{var} (X)=\sum_{i=1}^{N} \textrm{var}(X_i)+\sum_{i=1}^{N} \sum_{j \neq i} \textrm{cov}(X_i,X_j).
\end{align}
Since $X_i \sim Bernoulli(\frac{1}{4})$, we have
\begin{align}%\label{}
\nonumber \textrm{var} (X_i)=\frac{1}{4} . \frac{3}{4}=\frac{3}{16}.
\end{align}
It remains to find $\textrm{cov}(X_i,X_j)$. First note that $X_i$ and $X_j$ are independent if $i$th person and the $j$th person do not share a neighbor. In other words, if $j>i+2$ or $i>j+2$, then $X_i$ and $X_j$ are independent, so
\begin{align}%\label{}
\textrm{cov}(X_i,X_j)=0,  \textrm{ for $j>i+2$ or $i>j+2$.}
\end{align}
Also, note that there is a lot of symmetry in the problem:
\begin{align}%\label{}
\nonumber &\textrm{cov} (X_1,X_2)=\textrm{cov} (X_2,X_3)=\textrm{cov} (X_3,X_4)=...=\textrm{cov} (X_{N-1},X_{N})=\textrm{cov} (X_N,X_1)\\
\nonumber &\textrm{cov} (X_1,X_3)=\textrm{cov} (X_2,X_4)=\textrm{cov} (X_3,X_5)=...=\textrm{cov} (X_{N-1},X_{1})=\textrm{cov} (X_N,X_2).
\end{align}
Thus, we can write
\begin{align}%\label{}
\nonumber \textrm{var} (X)&=N \textrm{var}(X_1)+ N \textrm{cov}(X_1,X_2)+N\textrm{cov}(X_1,X_3)\\
&=\frac{3N}{16}+N \textrm{cov}(X_1,X_2)+N\textrm{cov}(X_1,X_3).
\end{align}
So we need to find $\textrm{cov}(X_1,X_2)$ and $\textrm{cov}(X_1,X_3)$. We have
\begin{align}%\label{}
E[X_1X_2]&=P(X_1=1,X_2=1)\\
&=P(H_N,T_1,H_2,T_3)+P(T_N,H_1,T_2,H_3) \\
&=\frac{1}{16}+\frac{1}{16}=\frac{1}{8}.
\end{align}
Thus,
\begin{align}%\label{}
 \textrm{cov}(X_1,X_2)&=E[X_1X_2]-E[X_1]E[X_2]\\
 &=\frac{1}{8}-\frac{1}{16}=\frac{1}{16},
\end{align}
\begin{align}%\label{}
E[X_1X_3]&=P(X_1=1,X_3=1)\\
&=P(H_N,T_1,H_2,T_3,H_4)+P(T_N,H_1,T_2,H_3,T_4) \\
&=\frac{1}{32}+\frac{1}{32}=\frac{1}{16}.
\end{align}
Thus,
\begin{align}%\label{}
 \textrm{cov}(X_1,X_3)&=E[X_1X_3]-E[X_1]E[X_3]\\
 &=\frac{1}{16}-\frac{1}{16}=0.
\end{align}
Therefore,
\begin{align}%\label{}
\nonumber \textrm{var} (X)&=\frac{3N}{16}+N \textrm{cov}(X_1,X_2)+N\textrm{cov}(X_1,X_3)\\
&=\frac{3N}{16}+\frac{N}{16}\\
&=\frac{N}{4}.
\end{align}
</li></ul>
</li></ul></div><hr /><br />

 We now know how to find the mean and variance of a sum of $n$ random variables, but we might need to go beyond that. Specifically, what if we need to know the PDF of $Y=X_1+X_2+$...$+X_n$? In fact we have addressed that problem for the case where $Y=X_1+X_2$ and $X_1$ and $X_2$ are independent (Example 5.30 in section 5.2.4). For this case, we found out the PDF is given by convolving the PDF of $X_1$ and $X_2$, that is
\begin{align}
  \nonumber f_Y(y)=f_{X_1}(y) \ast f_{X_2}(y)=\int_{-\infty}^{\infty} f_{X_1}(x)f_{X_2}(y-x)dx.
\end{align}
For $Y=X_1+X_2+$...$+X_n$, we can use the above formula repeatedly to obtain the PDF of $Y$:
\begin{align}
  \nonumber f_Y(y)=f_{X_1}(y) \ast f_{X_2}(y) \ast ... \ast f_{X_n}(y).
\end{align}
Nevertheless, this quickly becomes computationally difficult. Thus, we often resort to other methods if we can. One method that is often useful is using moment generating functions as we discuss in the next section.


<!-- /End Example -->
<!-- /Section Content -->

<?php include 'section_footer.php'; ?>
