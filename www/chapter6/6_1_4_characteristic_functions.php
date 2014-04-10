<?php
	$section_no			= "6.1.4";
	$section_title	= "Characteristic Functions";
	$section_prev		= "chapter6/6_1_3_moment_functions.php";
	$section_next		= "chapter6/6_1_5_random_vectors.php";
	include						"../Control/autonumber.php";
	loadHeaders(79);
	include						"section_header.php";
?>

<!-- section content -->
There are random variables for which the moment generating function does not exist on any real interval with positive length. For example, consider the random variable $X$ that has a \textit{Cauchy} distribution
\begin{align}%\label{}
   f_X(x)=\frac{\frac{1}{\pi}}{1+x^2}, \textrm{for all }x \in \mathbb{R}.
\end{align}
You can show that for any nonzero real number $s$
\begin{align}%\label{}
\nonumber  M_{X}(s)=\int_{-\infty}^{\infty} e^{sx}\frac{\frac{1}{\pi}}{1+x^2} dx=\infty.
\end{align}
Therefore, the moment generating function does not exist for this random variable on any real interval with positive length.

If a random variable does not have a well-defined MGF, we can use the characteristic function defined as
\begin{align}%\label{}
 \no  \phi_{X}(\omega)&=E[e^{j \omega X}],
\end{align}
where $j=\sqrt{-1}$ and $\omega$ is a real number. It is worth noting that $e^{j \omega X}$ is a complex-valued random variable. We have not discussed complex-valued random variables. Nevertheless, you can imagine that a complex random variable can be written as $X=Y+jZ$, where $Y$ and $Z$ are ordinary real-valued random variables. Thus, working with a complex random variable is like working with two real-valued random variables.  The advantage of the characteristic function is that it is defined for all real-valued random variables. Specifically, if $X$ is a real-valued random variable, we can write
\begin{align}%\label{}
   \no  |e^{j \omega X}|=1.
\end{align}
Therefore, we conclude
\begin{align}%\label{}
    |\phi_{X}(\omega)|&=|E[e^{j \omega X}]| \\
    &\leq E[|e^{j \omega X}|]\\
    &\leq 1.
\end{align}
The characteristic function has similar properties to the MGF. For example, if $X$ and $Y$ are independent
\begin{align}%\label{}
    \phi_{X+Y}(\omega)&=E[e^{j \omega (X+Y)}]\\
    &=E[e^{j \omega X} e^{j \omega Y}]\\
    &=E[e^{j \omega X}]E[e^{j \omega Y}] \textrm{(since $X$ and $Y$ are indpendent)}\\
    &=\phi_{X}(\omega) \phi_{Y}(\omega).
\end{align}

More generally, if $X_1$, $X_2$, ..., $X_n$ are $n$ <span style="text-decoration:underline;">independent</span> random variables, then
\begin{align}
\nonumber  \phi_{X_1+X_2+\cdots +X_n}(\omega)=\phi_{X_1}(\omega) \phi_{X_2}(\omega) \cdots \phi_{X_n}(\omega).
\end{align}


<!-- begin example -->
<hr /><span class='example'>Example </span><br />
If $X \sim Exponential (\lambda)$, show that
\begin{align}%\label{}
    \phi_{X}(\omega)&=\frac{\lambda}{\lambda-j\omega}.
\end{align}
<div class='solvedprob'><ul><li><a><b>Solution</b></a>
<ul><li>
Recall that the PDF of $X$ is
\begin{align}%\label{}
\nonumber f_X(x)=\lambda e^{-\lambda x} u(x),
\end{align}
where $u(x)$ is the unit step function. We conclude
\begin{align}%\label{}
  \nonumber \phi_{X}(\omega)&=E[e^{j \omega X}]  \\
  \nonumber &=\int_{0}^{\infty}\lambda e^{-\lambda x} e^{j \omega x}dx\\
   &=\left[\frac{\lambda}{j \omega-\lambda} e^{(j \omega-\lambda) x}\right]_{0}^{\infty}\\
  \nonumber &=\frac{\lambda}{\lambda-j \omega}.
\end{align}
Note that since $\lambda&gt;0$, the value of $e^{(j \omega-\lambda) x}$, when evaluated at $x=+\infty$, is zero.
</li></ul>
</li></ul></div><hr /><br />
<!-- end example -->

<!-- /section content -->

<?php include 'section_footer.php'; ?>
