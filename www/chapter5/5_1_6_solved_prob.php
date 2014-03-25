<?php
	$section_no			= "5.1.6";
	$section_title	=	"Solved Problems";
	$section_next		= "chapter5/5_2_0_continuous_vars.php";
	$section_prev		= "chapter5/5_1_5_conditional_expectation.php";
	include	'../Control/autonumber.php';
	loadHeaders(64);
	include 'section_header.php';
?>

<!-- Section Content -->
<span class="problem">Problem </span><br />
Consider two random variables $X$ and $Y$ with joint PMF given in Table 5.3.
<ol type="a"> 
  <li>Find $P(X \leq 2, Y \leq 4)$.</li>
  <li>Find the marginal PMFs of $X$ and $Y$.</li>
  <li>Find $P(Y=2 | X=1)$.</li>
  <li>Are $X$ and $Y$ independent?</li>
</ol>

<style>
	#table5_3 {
		font-size: 12pt;
		border-collapse: collapse;
		width: 400px;
		margin: 10px auto;
	}

	#table5_3 td {
		border: 2px solid black;
		text-align: center;
		vertical-align: middle;
	}
</style>
<table id="table5_3">
	<tr style="height:50px;">
		<td>&nbsp;</td>
		<td>$Y = 2$</td>
		<td>$Y = 4$</td>
		<td>$Y = 5$</td>
	</tr>
	<tr style="height:80px;">
		<td>$X = 1$</td>
		<td>$\frac{1}{12}$</td>
		<td>$\frac{1}{24}$</td>
		<td>$\frac{1}{24}$</td>
	</tr>
	<tr style="height:80px;">
		<td>$X = 2$</td>
		<td>$\frac{1}{6}$</td>
		<td>$\frac{1}{12}$</td>
		<td>$\frac{1}{8}$</td>
	</tr>
	<tr style="height:80px;">
		<td>$X = 3$</td>
		<td>$\frac{1}{4}$</td>
		<td>$\frac{1}{8}$</td>
		<td>$\frac{1}{12}$</td>
	</tr>
</table>

<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
<ol type="a">
  <li>To find $P(X \leq 2, Y \leq 4)$, we can write
  \begin{align}%\label{}
  \nonumber P(X \leq 2, Y \leq 4) &=P_{XY}(1,2)+ P_{XY}(1,4)+P_{XY}(2,2)+ P_{XY}(2,4)\\
  \nonumber &=\frac{1}{12}+\frac{1}{24}+\frac{1}{6}+\frac{1}{12}=\frac{3}{8}.
  \end{align}
	</li>

  <li>Note from the table that
  \begin{align}%\label{}
  \nonumber R_X=\{1,2,3\}  \textrm{and} R_Y=\{2,4,5\}.
  \end{align}
  Now we can use Equation 5.1 to find the marginal PMFs:

  \begin{equation}
 \nonumber P_X(x) = \left\{
  \begin{array}{l l}
     \frac{1}{6} &  \quad x=1  \\
      &  \quad   \\
     \frac{3}{8} &  \quad x=2  \\
      &  \quad   \\
      \frac{11}{24} &  \quad x=3  \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
\end{equation}

  \begin{equation}
 \nonumber P_Y(y) = \left\{
  \begin{array}{l l}
     \frac{1}{2} &  \quad y=2  \\
      &  \quad   \\
     \frac{1}{4} &  \quad y=4  \\
      &  \quad   \\
     \frac{1}{4} &  \quad y=5  \\
    &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
\end{equation}
	</li>
<li>Using the formula for conditional probability, we have
   \begin{align}%\label{}
       \nonumber P(Y=2 | X=1)&=\frac{P(X=1, Y=2)}{P(X=1)}\\
       \nonumber &=\frac{P_{XY}(1,2)}{P_X(1)}\\
       \nonumber &=\frac{\frac{1}{12}}{\frac{1}{6}}=\frac{1}{2}.
     \end{align}
</li>

  <li>Are $X$ and $Y$ independent? To check whether $X$ and $Y$ are independent, we need to check that $P(X=x_i,Y=y_j)=P(X=x_i)P(Y=y_j)$, for all $x_i \in R_X$ and all $y_j \in R_Y$. Looking at the table and the results from previous parts, we find
  \begin{align}%\label{}
       \nonumber P(X=2,Y=2)=\frac{1}{6} \neq P(X=2)P(Y=2)=\frac{3}{16}.
  \end{align}
  Thus, we conclude that $X$ and $Y$ are not independent.
	</li>

</li></ul>
</li></ul></div><hr /><br />

<span class="problem">Problem </span><br />
I have a bag containing $40$ blue marbles and $60$ red marbles. I choose $10$ marbles (without replacement) at random. Let $X$ be the number of blue marbles and $y$ be the number of red marbles. Find the joint PMF of $X$ and $Y$.
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
This is, in fact, a hypergeometric distribution. First, note that we must have $X+Y=10$, so
  \begin{align}%\label{}
  \nonumber R_{XY}&=\{(i,j) | i+j=10, i,j \in \mathbb{Z}, i,j \geq 0\}\\
  \nonumber &=\{(0,10),(1,9),(2,8),...,(10,0)\}.
  \end{align}

  Then, we can write
   \begin{equation}
  \nonumber P_{XY}(i,j)= \left\{
  \begin{array}{l l}
     \frac{{40 \choose i} {60 \choose j}}{{100 \choose 10}} &  \quad  i+j=10, i,j \in \mathbb{Z}, i,j \geq 0  \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
 \end{equation}

</li></ul>
</li></ul></div><hr /><br />

<span class="problem">Problem </span><br />
Let $X$ and $Y$ be two independent discrete random variables with the same CDFs $F_{X}$ and $F_Y$ . Define
  \begin{align}%\label{}
  \nonumber Z=\max (X,Y),  \\
  \nonumber W=\min(X,Y).
  \end{align}
  Find the CDFs of $Z$ and $W$.

<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
To find the CDF of $Z$, we can write
  \begin{align}%\label{}
  \nonumber F_Z(z)&=P(Z \leq z) \\
  \nonumber &=P(\max(X,Y) \leq z)\\
  \nonumber &=P\bigg((X \leq z) \textrm{ and } (Y \leq z)\bigg)\\
  \nonumber &=P(X \leq z) P(Y \leq z) &(\textrm{ since }X \textrm{ and }Y \textrm{ are independent})\\
  \nonumber &=F_X(z)F_Y(z).
  \end{align}
  To find the CDF of $W$, we can write
  \begin{align}%\label{}
  \nonumber F_W(w)&=P(W \leq w) \\
  \nonumber &=P(\min(X,Y) \leq w)\\
  \nonumber &=1-P(\min(X,Y) > w)\\
  \nonumber &=1-P\bigg((X > w) \textrm{ and } (Y > w)\bigg)\\
  \nonumber &=1-P(X > w) P(Y > w) &(\textrm{ since }X \textrm{ and }Y \textrm{ are independent})\\
  \nonumber &=1-(1-F_X(w))(1-F_Y(w))\\
  \nonumber &=F_X(w)+F_Y(w)-F_X(w)F_Y(w).
  \end{align}

</li></ul>
</li></ul></div><hr /><br />

<span class="problem">Problem </span><br />
Let $X$ and $Y$ be two discrete random variables, with range
  \begin{align}%\label{}
  \nonumber R_{XY}=\{(i,j) \in \mathbb{Z}^2|i,j \geq 0, |i-j|\leq 1\},
  \end{align}
  and joint PMF given by
  \begin{align}%\label{}
  \nonumber P_{XY}=(i,j)=\frac{1}{6 \cdot 2^{\min(i,j)}}, \hspace{10pt} \textrm{ for }(i,j) \in R_{XY}.
  \end{align}
<img src="images/chapter5/solved1.png" style="width:400px;height:auto;margin:10px auto;display:block;" />
<p style="text-align:center;">Figure 5.5: Figure shows $R_{XY}$ for $X$ and $Y$ in problem 4</p>

<ol>
    <li>Pictorially show $R_{XY}$ in the $x-y$ plane.</li>
    <li>Find the marginal PMFs $P_X(i)$, $P_Y(j)$.</li>
    <li>Find $P(X=Y|X<2)$.</li>
    <li>Find $P(1 \leq X^2+Y^2 \leq 5)$.</li>
    <li>Find $P(X=Y)$.</li>
    <li>Find $E[X|Y=2]$.</li>
    <li>Find Var$(X|Y=2)$.</li>
</ol>

<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
<ol type="a"> 
    <li>First, by symmetry we note that $X$ and $Y$ have the same PDF. Next, we can write
    \begin{align}\label{}
      \nonumber &P_X(0)=P_{XY}(0,0)+P_{XY}(0,1)=\frac{1}{6}+\frac{1}{6}=\frac{1}{3};\\
      \nonumber &P_X(1)=P_{XY}(1,0)+P_{XY}(1,1)+P_{XY}(1,2)=\frac{1}{6}\left(1+\frac{1}{2}+\frac{1}{2}\right)=\frac{1}{3};\\
      \nonumber &P_X(2)=P_{XY}(2,1)+P_{XY}(2,2)+P_{XY}(2,3)=\frac{1}{6}\left(\frac{1}{2}+\frac{1}{4}+\frac{1}{4}\right)=\frac{1}{6};\\
      \nonumber &P_X(3)=P_{XY}(3,2)+P_{XY}(3,3)+P_{XY}(3,4)=\frac{1}{6}\left(\frac{1}{4}+\frac{1}{8}+\frac{1}{8}\right)=\frac{1}{12}.
    \end{align}
    In general, we obtain
    \begin{equation}
   \nonumber P_X(k) = P_Y(k)=\left\{
    \begin{array}{l l}
    \frac{1}{3}  &  \quad k=0  \\
         &  \quad \\
    \frac{1}{3 \cdot 2^{k-1}}  &  \quad k=1,2,3,...   \\
     &  \quad \\
    0 &  \quad \text{otherwise}
   \end{array} \right.
  \end{equation}
		</li>

    <li>Find $P(X=Y|X&lt;2)$: We have
    \begin{align}\label{}
      \nonumber P(X=Y|X&lt;2)&=\frac{P(X=Y,X&lt;2)}{P(X&lt;2)}\\
      \nonumber &=\frac{P_{XY}(0,0)+P_{XY}(1,1)}{P_X(0)+P_X(1)}\\
      \nonumber &=\frac{\frac{1}{6}+\frac{1}{12}}{\frac{1}{3}+\frac{1}{3}}\\
      \nonumber &=\frac{3}{8}.
    \end{align}
		</li>

    <li>Find $P(1 \leq X^2+Y^2 \leq 5)$: We have
    \begin{align}\label{}
      \nonumber P(1 \leq X^2+Y^2 \leq 5)&=P_{XY}(0,1)+P_{XY}(1,0)+P_{XY}(1,1)+P_{XY}(1,2)+P_{XY}(2,1)\\
      \nonumber &=\frac{1}{6}+\frac{1}{6}+\frac{1}{12}+\frac{1}{12}+\frac{1}{12}\\
      \nonumber &=\frac{7}{12}.
    \end{align}
		</li>

    <li>By symmetry, we can argue that $P(X=Y)=\frac{1}{3}$. The reason is that $R_{XY}$ consists of three lines with points with the same probabilities. We can also find $P(X=Y)$ by
    \begin{align}\label{}
      \nonumber P(X=Y)&=\sum_{i=0}^{\infty} P_{XY}(i,i)\\
      \nonumber &=\sum_{i=0}^{\infty} \frac{1}{6. 2^i}\\
      \nonumber &=\frac{1}{3}.
    \end{align}
		</li>

    <li>To find $E[X|Y=2]$, we first need the conditional PMF of $X$ given $Y=2$. We have
    \begin{align}\label{}
      \nonumber P_{X|Y}(k|2) &=\frac{P_{XY}(k,2)}{P(Y=2)}\\
      \nonumber &=6P_{XY}(k,2),
    \end{align}
    so we obtain
    \begin{equation}
   \nonumber P_{X|Y}(k|2)=\left\{
    \begin{array}{l l}
    \frac{1}{2}  &  \quad k=1  \\
         &  \quad \\
    \frac{1}{4}  &  \quad k=2,3   \\
     &  \quad \\
    0 &  \quad \text{otherwise}
   \end{array} \right.
  \end{equation}
  Thus,
   \begin{align}\label{}
      \nonumber E[X|Y=2]&=1 \cdot \frac{1}{2}+2 \cdot \frac{1}{4}+3 \cdot \frac{1}{4}\\
      \nonumber &=\frac{7}{4}.
    \end{align}
		</li>
		<li>
		Find Var$(X|Y=2)$: we have

    \begin{align}\label{}
      \nonumber E[X^2|Y=2]&=1 \cdot \frac{1}{2}+4 \cdot \frac{1}{4}+9 \cdot \frac{1}{4}\\
      \nonumber &=\frac{15}{4}.
    \end{align}
    Thus,
     \begin{align}\label{}
      \nonumber \textrm{Var}(X)&=E[X^2|Y=2]-E[X|Y=2]\\
      \nonumber &=\frac{15}{4}-\frac{49}{16}\\
      \nonumber &=\frac{11}{16}.
    \end{align}
</li>
</ol>
</li></ul>
</li></ul></div><hr /><br />

<span class="problem">Problem </span><br />
 Suppose that the number of customers visiting a fast food restaurant in a given day is $N \sim Poisson(\lambda)$. Assume that each customer purchases a drink with probability $p$, independently from other customers, and independently from the value of $N$. Let $X$ be the number of customers who purchase drinks. Let $Y$ be the number of customers that do not purchase drinks; so $X+Y=N$.
<ol type="a">
        <li>Find the marginal PMFs of $X$ and $Y$.</li>
        <li>Find joint PMF of $X$ and $Y$.</li>
        <li>Are $X$ and $Y$ independent?</li>
        <li>Find $E[X^2Y^2]$.</li>
</ol>

<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
<ol type="a">
     <li>First note that $R_X=R_Y=\{0,1,2,...\}$.  Also, given $N=n$, $X$ is a sum of $n$ independent $Bernoulli(p)$ random variables. Thus, given $N=n$, $X$ has a binomial distribution with parameters $n$ and $p$, so
      \begin{align}\label{}
      \nonumber &X|N=n \hspace{10pt} \sim \hspace{10pt} Binomial(n,p),\\
      \nonumber &Y|N=n \hspace{10pt} \sim \hspace{10pt} Binomial(n,q=1-p).
      \end{align}

       We have
      \begin{align}\label{}
      \nonumber P_X(k)&=\sum_{n=0}^{\infty} P(X=k|N=n)P_N(n) & (\textrm{law of total probability})\\
      \nonumber &=\sum_{n=k}^{\infty} {n \choose k} p^k q^{n-k} e^{-\lambda} \frac{\lambda^n}{n!}\\
      \nonumber &=\sum_{n=k}^{\infty} \frac{p^k q^{n-k} e^{-\lambda} \lambda^n}{k! (n-k)!} \\
      \nonumber &=\frac{e^{-\lambda} (\lambda p)^k}{k!}  \sum_{n=k}^{\infty} \frac{(\lambda q)^{n-k}}{(n-k)!} \\
      \nonumber &=\frac{e^{-\lambda} (\lambda p)^k}{k!} e^{\lambda q} & (\textrm{Taylor series for } e^x)\\
      \nonumber &=\frac{e^{-\lambda p} (\lambda p)^k}{k!}, \hspace{40pt} \textrm{ for }k=0,1,2,...
      \end{align}
      Thus, we conclude that
      \begin{align}\label{}
      \nonumber &X \hspace{10pt} \sim \hspace{10pt} Poisson(\lambda p),\\
      \nonumber &Y \hspace{10pt} \sim \hspace{10pt} Poisson(\lambda q).
      \end{align}
		</li>
		<li>
      To find joint PMF of $X$ and $Y$, we can also use the law of total probability:
      \begin{align}\label{}
      \nonumber P_{XY}(i,j)&=\sum_{n=0}^{\infty} P(X=i, Y=j|N=n)P_N(n) & (\textrm{law of total probability}).
      \end{align}
      But note that $P(X=i, Y=j|N=n)=0$ if $N \neq i+j$, thus
      \begin{align}\label{}
      \nonumber P_{XY}(i,j)&=P(X=i, Y=j|N=i+j)P_N(i+j)\\
      \nonumber &=P(X=i|N=i+j)P_N(i+j)\\
      \nonumber &={i+j \choose i} p^i q^j e^{-\lambda} \frac{\lambda^{i+j}}{(i+j)!}\\
      \nonumber &=\frac{e^{-\lambda} (\lambda p)^i (\lambda q)^j}{i! j!}\\
      \nonumber &=\frac{e^{-\lambda p} (\lambda p)^i}{i!}. \frac{e^{-\lambda q} (\lambda q)^j}{j!}\\
      \nonumber &=P_X(i)P_Y(j).
      \end{align}
		</li>
		<li>
     $X$ and $Y$ are independent, since as we saw above
      \begin{align}\label{}
      \nonumber P_{XY}(i,j)=P_X(i)P_Y(j).
      \end{align}
		</li>
		<li>
      Since $X$ and $Y$ are independent, we have
        \begin{align}\label{}
      \nonumber E[X^2Y^2]=E[X^2]E[Y^2].
      \end{align}
       Also, note that for a Poisson random variable $W$ with parameter $\lambda$,
       \begin{align}\label{}
      \nonumber E[W^2]=\textrm{Var}(W)+(EW)^2=\lambda+\lambda^2.
      \end{align}
      Thus,
       \begin{align}\label{}
      \nonumber E[X^2Y^2]&=E[X^2]E[Y^2]\\
      \nonumber &=(\lambda p+ \lambda^2 p^2)(\lambda q+ \lambda^2 q^2)\\
      \nonumber &=\lambda^2 pq(\lambda^2 pq+ \lambda+1).
      \end{align}
		</li>
</ol>
</li></ul>
</li></ul></div><hr /><br />

<span class="problem">Problem </span><br />
I have a coin with $P(H)=p$.  I toss the coin repeatedly until I observe two consecutive heads. Let $X$ be the total number of coin tosses. Find $EX$.
<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
We solve this problem using a similar approach as in Example 5.6. Let $\mu=EX$. We first condition on the result of the first coin toss. Specifically,
  \begin{align}
     \nonumber \mu=EX&=E[X|H]P(H)+E[X|T]P(T)\\
     \nonumber  &=E[X|H]p+(1+\mu)(1-p).
  \end{align}
  In this equation, $E[X|T]=1+EX$, because the tosses are independent, so if the first toss is tails, it is like starting over on the second toss. Thus,
  \begin{align}\label{alhh}
      p\mu=pE[X|H]+(1-p).
  \end{align}
  We still need to find $E[X|H]$ so we condition on the second coin toss
   \begin{align}
     \nonumber  E[X|H]&=E[X|HH]P+E[X|HT](1-p)\\
     \nonumber  &=2p+(2+\mu)(1-p)\\
     \nonumber  &=2+(1-p)\mu.
  \end{align}
  Here, $E[X|HT]=2+EX$ because, if the first two tosses are $HT$, we have wasted two coin tosses and we start over at the third toss. By letting $E[X|H]=2+(1-p)\mu$ in 5.14, we obtain
  \begin{align}
     \nonumber \mu=EX=\frac{1+p}{p^2}.
  \end{align}

</li></ul>
</li></ul></div><hr /><br />


<span class="problem">Problem </span><br />
Let $X,Y \sim Geometric(p)$ be independent, and let $Z=\frac{X}{Y}$.
<ol type="a">
    <li>Find the range of $Z$.</li>
    <li>Find the PMF of $Z$.</li>
    <li>Find $EZ$.</li>
</ol>

<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>
<ol type="a">
    <li>The range of $Z$ is given by
    \begin{align}%\label{}
      \nonumber R_Z=\left\{\frac{m}{n}|m,n \in \mathbb{N}\right\},
   \end{align}
   which is the set of all positive rational numbers.
		</li>


    <li>To find PMF of $Z$, let $m,n \in \mathbb{N}$ such that $(m,n)=1$, where $(m,n)$ is the largest divisor of $m$ and $n$. Then
    \begin{align}%\label{}
      \nonumber P_Z\left(\frac{m}{n}\right) &= \sum_{k=1}^{\infty} P(X=mk, Y=nk)\\
      \nonumber &= \sum_{k=1}^{\infty} P(X=mk)P(Y=nk) & (\textrm{since }X \textrm{ and } Y \textrm{are independent})\\
      \nonumber &= \sum_{k=1}^{\infty} pq^{mk-1}pq^{nk-1} \hspace{40pt} \textrm{where }q=1-p\\
      \nonumber &= p^2q^{-2}\sum_{k=1}^{\infty} q^{(m+n)k}\\
      \nonumber &= \frac{p^2q^{m+n-2}}{1-q^{m+n}}\\
      \nonumber &=\frac{p^2(1-p)^{m+n-2}}{1-(1-p)^{m+n}}.
   \end{align}
		</li>
		<li>
    Find $EZ$: We can use LOTUS to find $EZ$. Let us first remember the following useful identities:
    \begin{align}%\label{}
      \nonumber \sum_{k=1}^{\infty} kx^{k-1}= \frac{1}{(1-x)^2}, \hspace{40pt} \textrm{ for }|x|<1,
   \end{align}
   \begin{align}%\label{}
      \nonumber -\ln (1-x)=\sum_{k=1}^{\infty} \frac{x^{k}}{k}, \hspace{40pt} \textrm{ for }|x|&lt;1.
   \end{align}
   The first one is obtained by taking derivative of the geometric sum formula, and the second one is a Taylor series. Now, let&#39;s apply LOTUS.
   \begin{align}%\label{}
      \nonumber E\bigg[\frac{X}{Y}\bigg]&= \sum_{n=1}^{\infty}\sum_{m=1}^{\infty} \frac{m}{n}P(X=m, Y=n)\\
      \nonumber &= \sum_{n=1}^{\infty}\sum_{m=1}^{\infty} \frac{m}{n}p^2q^{m-1}q^{n-1}\\
      \nonumber &= \sum_{n=1}^{\infty} \frac{1}{n} p^2q^{n-1}\sum_{m=1}^{\infty} mq^{m-1}\\
      \nonumber &= \sum_{n=1}^{\infty} \frac{1}{n} p^2q^{n-1}\frac{1}{(1-q)^2}\\
      \nonumber &= \sum_{n=1}^{\infty} \frac{1}{n} q^{n-1}\\
      \nonumber &=\frac{1}{q}\sum_{n=1}^{\infty} \frac{ q^{n}}{n}\\
      \nonumber &=\frac{1}{1-p}\ln \frac{1}{p}.
   \end{align}
		</li>
		</ol>
</li></ul>
</li></ul></div><hr /><br />
<!-- /Section Content -->

<?php include 'section_footer.php'; ?>
