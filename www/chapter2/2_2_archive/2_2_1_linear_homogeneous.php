<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<?php include '../Control/autonumber.php'; loadHeaders(27); ?>
	<meta name='section'	content='2.2.1' />

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	
	<script type="text/x-mathjax-config">
  			MathJax.Hub.Config({
    		tex2jax: { inlineMath: [['$','$'],['\\(','\\)']] }
  			});
	</script>	
	<script type="text/javascript"
  			src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
	</script>
	
	<script type='text/javascript' src='http://code.jquery.com/jquery-1.6.3.js'></script>
	<script type="text/javascript" src="javascript/menu_js_code.js"></script>
	<script type="text/javascript" src="javascript/solved_prob.js"></script>
	
	<link rel="stylesheet" type="text/css" href="http://probabilitycourse.com/style_sheet.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="print.css" media="print" />

	<title>Solving Linear Homogeneous Recurrence Equations | Constant Coefficient | Characteristic Equation</title>
	<meta name="description" content="Process for solving recurrence equations" />

</head><body>
	<div id="container">
		<script type="text/javascript" src="http://probabilitycourse.com/javascript/top_page_html_code.js"></script>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter2/2_2_0_using_recursion.php">previous</a></div>
    			<div class="right"><a href="chapter2/2_2_2_recursion_with_conditioning.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>2.2.1 Solving Linear Homogeneous Recurrence <br>Equations with Constant Coefficients</h2></div>
    		<div class="right hide_print">
			<img src="http://probabilitycourse.com/images/print.png" id="printButton" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></a></div>
    		<div class="clear"></div>
			
			<p>Suppose that we have the following recursive equation:
			<a name="equation29"></a>
			$$\hspace{55pt} a_n+c_1 a_{n-1}+c_2 a_{n-2}+c_3 a_{n-3}+...+c_d a_{n-d}=0 \hspace{55pt} (2.9)$$
			where the $c_i$'s are known constants. Also suppose that we already know the values of $a_i$ for 
			$d$ different values of $i$. For example, we might know the values of $a_1, a_2,..., a_d$. To 
			solve this recursive equation, we first solve the following <i>characteristic</i> equation
			$$\hspace{63pt} x^d+c_1 x^{d-1}+c_2 x^{d-2}+c_3 x^{n-3}+...+c_d=0 \hspace{63pt} (2.10)$$
			This equation is obtained by replacing $a_i$ by $x^i$ in the recursive Equation 2.9. Let 
			$x_1,x_2,...,x_d$ be $d$ distinct roots of the characteristic polynomial (we will discuss 
			the case of repeated roots shortly). Then the general format for solutions to the 
			recursive Equation 2.9 is given by
			$$\hspace{80pt} a_n=\alpha_1 x_1^n+\alpha_2 x_2^n+\alpha_3 x_3^n+...+\alpha_d x_d^n \hspace{80pt} (2.11)$$
			The values of $\alpha_1, \alpha_2,..., \alpha_d$ can be obtained from the known values of $a_i$. If a 
			root is repeated $r$ times, we need to include $r$ terms for that root, each scaled by a power of $n$. 
			For example, if $x_1$ is a repeated root of multiplicity $r$, then we write
			$$a_n=\alpha_{11} x_1^n+\alpha_{12} n x_1^n+\alpha_{13} n^2 x_1^n+ ...+\alpha_{1r} 
			n^{r-1} x_1^n+ \alpha_2 x_2^n+\alpha_3 x_3^n+...+\alpha_d x_d^n \hspace{20pt} (2.12)$$
			To better understand all this let's look at some examples.</p>
			
			<hr /><br>
			<span class='example'>Example </span><br>
			<p>Solve the following recurrence equations:
			<ol type="a">
                <li>$a_n=3a_{n-1}-2a_{n-2}$, where $a_0=2$, $a_1=3$</li>
                <li>$a_n=4a_{n-1}-5a_{n-2}+2a_{n-3}$, where $a_0=0$, $a_1=2$, and $a_2=5$</li>
            </ol></p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 <ol type="a">
                              <li>The characteristic polynomial for $a_n=3a_{n-1}-2a_{n-2}$ is $x^2-3x+2$. 
							  It has roots $x_1=2$ and $x_2=1$. Thus the general solution is of the form
							  $$a_n=\alpha 2^n+ \beta$$
							  Since $a_0=2$, $a_1=3$, we obtain $\alpha=1$, $\beta=1$. Therefore, $a_n$ is given by
							  $$a_n=2^n+1, \textrm{ for } n=0,1,2,...$$
							  </li>
							  <li>The characteristic polynomial for $a_n=4a_{n-1}-5a_{n-2}+2a_{n-3}$ is $x^3-4x^2+5x-2$. 
							  We can factor this polynomial as
							  $$x^3-4x^2+5x-2 =(x-1)^2(x-2)$$
							  Thus we have two roots, $x_1=1$ with multiplicity $2$, and $x_2=2$. 
							  The general formula for $x_n$ can be written as
							  $$a_n=\alpha_1 +\alpha_2 n+ \alpha_3 2^n$$
							  Using $a_0=0$, $a_1=2$, and $a_2=5$, we obtain
							  $$a_n=2^n+n-1$$
							  </li>
                          </ol> 
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<p>Note that recurrences could be much more complicated than the form given in Equation 2.9, and 
			sometimes we may not be able to find simple closed form solutions for them. Nevertheless, we 
			can usually use computer programs to compute them for at least moderate values of $n$. 
			In general, if the recursion is not in the form of Equation 2.9, a good start would be to 
			compute $a_n$ for small $n$ and see if we can identify a pattern and guess a general formula 
			for $a_n$. If we are lucky and we can guess a general formula, then we usually can prove it 
			mathematically using induction.</p>

			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter2/2_2_0_using_recursion.php">previous</a></div>
    			<div class="right"><a href="chapter2/2_2_2_recursion_with_conditioning.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>		
		</div>
		<div id="menu" class="hide_print">
			 <script type="text/javascript" src="javascript/menu_html_code.js"></script>
		</div>

		<div id="footer" class="hide_print">
			<script type="text/javascript" src="javascript/footer_html_code.js"></script>
		</div>
	</div>
</body>
</html>
