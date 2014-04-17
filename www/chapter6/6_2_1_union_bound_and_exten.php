<?php
	$section_no			= "6.2.1";
	$section_title	= "The Union Bound and Extension";
	$section_next		= "chapter6/6_2_2_markov_chebyshev_inequalities.php";
	$section_prev		= "chapter6/6_2_0_probability_bounds.php";
	include						"../Control/autonumber.php";
	loadHeaders(83);
	include						"section_header.php";
?>
		
			<p>
            The <b>union bound</b> or <b>Boole's inequality</b> [<a href="bibliography.html#wiki-St-Petersburg">13</a>] is applicable when you need to show that the probability of union of some events is less than some value. Remember that for any two events $A$ and $B$ we have
\begin{align}%\label{}
  P(A \cup B)&=P(A)+P(B)-P(A \cap B)\\
  & \leq P(A)+P(B).
\end{align}
Similarly, for three events $A$, $B$, and $C$, we can write
<table align="center">			
                          <tr>
                            <td>$P(A \cup B \cup C)$</td>
                            <td>$= P\big((A \cup B) \cup C\big)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$\leq P(A \cup B)+P(C)$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$\leq P(A)+P(B)+P(C).$</td>
                          </tr></table>

<p>In general, using induction we prove the following</p>
<div style="padding: 15px; border: black 1px solid">
	  <p align="center">
            The Union Bound</p>
For any events $A_1, A_2, ..., A_n$, we have
\begin{align}\label{eq:union-bound}
   P\biggl(\bigcup_{i=1}^n A_i\biggr) \leq \sum_{i=1}^n P(A_i).&\qquad&\qquad (6.2)
\end{align}
</div><br>



The union bound is a very simple but useful result. It is used frequently in different applications. Here we look at one application in the area of <i>random graphs</i>. Random graphs are widely used when analyzing social networks, wireless networks, and the internet. A simple model for random graphs is the Erd&ouml;s-R&eacute;nyi model $G(n,p)$ [<a href="bibliography.html#etemadi81">11</a>,<a href="bibliography.html#RossAFirst10">12</a>]. In this model, we have $n$ nodes in the graph. In social networking context, each node might represent a person. Every pair of nodes are connected by an edge with probability $p$. The occurrence of each edge in the graph is independent from other edges in the graph. Figure 6.1 shows an example of a randomly generated graph using this model. Here, $n=5$ and $p$ was chosen to be $\frac{1}{2}$.<br/>

						<figure align="center">
              					  <img src="http://probabilitycourse.com/images/chapter6/Random-Graph_b.png" width="230" height="230" alt="Figure" title="Figure" border="0" />
              					  <figcaption align="left">Fig.6.1 - An example of a randomly generated graph based on the $G(n,p)$ model. Here $n=5$ and $p$ was chosen to be $\frac{1}{2}$.</figcaption>
   			  </figure>	
                        </p>		
<p>
The question we are interested in here is the probability that there exists an isolated node in the graph [<a href="bibliography.html#etemadi81">11</a>,<a href="bibliography.html#RossAFirst10">12</a>]. An isolated node is a node that is not connected to any other nodes in the graph. In a wireless networking context, an isolated node is a node that cannot communicate with any other node in the network.
</p>
			
			<hr /><br>
			<a name="ex64"></a>
			<span class='example'>Example </span><br>
			<p>
Let $B_n$ be the event that a graph randomly generated according to $G(n,p)$ model has at least one isolated node. Show that
\begin{align}%\label{}
 P(B_n) \leq n(1-p)^{n-1}.
\end{align}
And conclude that for any $\epsilon >0$, if $p=p_n=(1+\epsilon)\frac{\ln (n)}{n}$ then
\begin{align}%\label{}
  \lim_{n\rightarrow \infty} P(B_n)=0.
\end{align}
</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
There are $n$ nodes in the network. Let's call them Node $1$, Node $2$,..., Node $n$. Let $A_i$ be the event that the $i$th node is isolated. Then we have
\begin{align}%\label{}
  B_n=\bigcup_{i=1}^n A_i.
\end{align}
Thus, using the union bound we conclude that
\begin{align}
 P(B_n)=P(\bigcup_{i=1}^n A_i)\leq \sum_{i=1}^n P(A_i).
\end{align}
By symmetry, for all $i,j$, we have $P(A_i)=P(A_j)$, so
\begin{align}
 P(B_n)\leq n P(A_1).
\end{align}
Thus, we only need to find $P(A_1)$. The event $A_1$ occurs if Node $1$ is not connected to any of the other $n-1$ nodes. Since the connections are independent, we conclude that
\begin{align}
 P(A_1)=(1-p)^{n-1}.
\end{align}
Therefore, we obtain
\begin{align}%\label{}
 P(B_n) \leq n(1-p)^{n-1},
\end{align}
which is the desired result. To prove the limit result, we use
\begin{align}%\label{}
 \lim_{x\rightarrow \infty} \big(1+\frac{c}{x})= e^{c}, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; \textrm{ for any constant }c \in \mathbb{R}.
\end{align}
So, we obtain
<table align="center">			
                          <tr>
                            <td>$\lim_{n\rightarrow \infty} P(B_n)$</td>
                            <td>$\leq  \lim_{n\rightarrow \infty} n(1-p_n)^{n-1}$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$= \lim_{n\rightarrow \infty} n \bigg[1-(1+\epsilon) \frac{\ln n}{n}\bigg]^{n-1}$</td>
                          </tr>
						  <tr>
                            <td></td>
                            <td>$= \lim_{n\rightarrow \infty} n \bigg[1-\frac{1+\epsilon}{\frac{n}{\ln n}}\bigg]^{n-1}$</td>
                          </tr>
                           <tr>
                            <td></td>
                            <td>$= \lim_{n\rightarrow \infty} n \bigg(\bigg[1-\frac{1+\epsilon}{\frac{n}{\ln n}}\bigg]^{\frac{n}{\ln n}} \bigg)^{\frac{(n-1) \ln n}{n}} $</td>
                          </tr></tr>
                           <tr>
                            <td></td>
                            <td>$=\lim_{n\rightarrow \infty} n e^{-(1+\epsilon)\ln n}$</td>
                          </tr></tr>
                           <tr>
                            <td></td>
                            <td>$=\lim_{n\rightarrow \infty} \frac{1}{n^\epsilon}$</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>$=0.$</td>
                          </tr>
                          </table><br>
But since $P(B_n) \geq 0$, we conclude
\begin{align}%\label{}
  \lim_{n\rightarrow \infty} P(B_n)=0.
\end{align}
It is an interesting exercise to calculate $P(B_n)$ exactly using the inclusion-exclusion principle:

\begin{align}
\nonumber P\biggl(\bigcup_{i=1}^n A_i\biggr) & {} =\sum_{i=1}^n P(A_i)
-\sum_{i&lt;j}P(A_i\cap A_j) \\
\nonumber  &\qquad+\sum_{i&lt;j&lt;k}P(A_i\cap A_j\cap A_k)-\ \cdots\ +(-1)^{n-1}\, P\biggl(\bigcap_{i=1}^n A_i\biggr).
\end{align}

<p>In fact, the union bound states that the probability of union of some events is smaller than the first term in the inclusion-exclusion formula. We can in fact extend the union bound to obtain lower and upper bounds on the probability of union of events. These bounds are known as  <b>Bonferroni inequalities</b> [<a style="padding:0;background:white;border:0;color:green;"href="bibliography.html#wiki-St-Petersburg">13</a>]. The idea is very simple. Start writing the inclusion-exclusion formula. If you stop at the first term, you obtain an upper bound on the probability of union. If you stop at the second term, you obtain a lower bound. If you stop at the third term, you obtain an upper bound, etc. So in general if you write an odd number of terms, you get an upper bound and if you write an even number of terms, you get a lower bound.</p>
			
			
			<div style="padding: 15px; border: black 1px solid">			
			Generalization of the Union Bound: Bonferroni inequalities<br/>
            For any events $A_1, A_2, ..., A_n$, we have
\begin{align}%\label{eq:union-bound}
    &P\biggl(\bigcup_{i=1}^n A_i\biggr) \leq \sum_{i=1}^n P(A_i);\\
    & P\biggl(\bigcup_{i=1}^n A_i\biggr) \geq \sum_{i=1}^n P(A_i)-\sum_{i&lt;j}P(A_i\cap A_j);\\
    & P\biggl(\bigcup_{i=1}^n A_i\biggr) \leq \sum_{i=1}^n P(A_i)-\sum_{i&lt;j}P(A_i\cap A_j)+ \sum_{i&lt;j&lt;k}P(A_i\cap A_j\cap A_k).\\
    & \hspace{160pt} .\\
    & \hspace{160pt} .\\
    & \hspace{160pt} .
\end{align}
            </div>
             </li>
					 </ul>
					 </li>
				 </ul>
                 
			</div>
			<hr /><br>
            
            
			<a name="ex64"></a>
			<span class='example'>Example </span><br>
			<p>
Let $B_n$ be the event that a graph randomly generated according to $G(n,p)$ model has at least one isolated node. Show that
\begin{align}%\label{}
P(B_n) \geq n(1-p)^{n-1}-{n \choose 2} (1-p)^{2n-3}.
\end{align}
</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
Similar to Example 6.17, let $A_i$ be the event that the $i$th node is isolated. Then we have
\begin{align}%\label{}
  B_n=\bigcup_{i=1}^n A_i.
\end{align}
Thus, using two terms in the inclusion-exclusion principle, we obtain
\begin{align}
    P(B_n)=P(\bigcup_{i=1}^n A_i)\geq \sum_{i=1}^n P(A_i)-\sum_{i&lt;j}P(A_i\cap A_j).
\end{align}
By symmetry, we obtain
<p>\begin{align}
    \sum_{i=1}^n P(A_i)= n P(A_1), &\qquad &\qquad
     \end{align}</p>
   <p>\begin{align}
    \sum_{i&lt;j}P(A_i\cap A_j)={n \choose 2} P(A_1 \cap A_2).
    \end{align}</p>

Thus, we conclude
\begin{align}
    P(B_n)\geq n P(A_1)-{n \choose 2} P(A_1 \cap A_2).
\end{align}
In Example 6.17 we found
\begin{align}
   P(A_1)=(1-p)^{n-1}.
\end{align}
Similarly, we obtain
\begin{align}
   P(A_1 \cap A_2)=(1-p)^{2(n-2)+1}=(1-p)^{2n-3}.
\end{align}
The reason for this is that $A_1 \cap A_2$ is the event that Nodes $1$ and $2$ are isolated. There are $2(n-2)$  potential edges from the rest of the graph two Nodes $1$ and $2$, and also there is a potential edge from Node $1$ to Node $2$. These edges exist independently from each other and with probability $p_n$. We conclude
\begin{align}
    P(B_n)\geq n (1-p)^{n-1}-{n \choose 2}(1-p)^{2n-3},
\end{align}
which is the desired result.


             </li>
					 </ul>
					 </li>
				 </ul>
                 
			</div>
			<hr />
            <p>
            <b>Expected Value of the Number of Events:</b> It is interesting to note that the union bound formula is also equal to the expected value of the number of occurred events. To see this, let  $A_1, A_2, ..., A_n$ be any events. Define the indicator random variables $X_1$, $X_2$,...,$X_n$ as

\begin{equation}
 \nonumber X_i = \left\{
  \begin{array}{l l}
     1  &  \quad \textrm{ if }A_i \textrm{ occurs}  \\
      &  \quad   \\
    0 &  \quad \text{otherwise}
  \end{array} \right.
\end{equation}

If we define $X=X_1+X_2+X_3+...+X_n$, then $X$ shows the number of events that actually occur. We then have
<table align="center" width="85%">			
                          <tr>
                            <td>$EX$</td>
                            <td>$=EX_1+EX_2+EX_3+...+EX_n$</td>
                            <td>$\textrm{by linearity of expectation}$</td>
                          </tr>
                           <tr>
                            <td></td>
                            <td>$=P(A_1)+P(A_2)+...+P(A_n),$</td>
                            <td></td>
                          </tr>
						  </table><br>
which is indeed the righthand-side of the union bound. For example, from this we can conclude that the expected number of isolated nodes in a  a graph randomly generated according to $G(n,p)$ is equal to
\begin{align}%\label{}
 EX=n(1-p)^{n-1}.
\end{align}
            </p>
<?php include 'section_footer.php'; ?>
