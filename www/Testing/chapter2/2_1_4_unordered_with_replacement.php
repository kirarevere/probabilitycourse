<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<?php include '../Control/autonumber.php'; loadHeaders(24); ?>
	<meta name='section'	content='2.1.4' />

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
	
	<link rel="stylesheet" type="text/css" href="http://probabilitycourse.com/style_sheet.css" />
	<link rel="stylesheet" type="text/css" href="print.css" media="print" />

	<title>Intro to Probability</title>

</head><body>
	<div id="container">
		<span class="hide_print">
		<script type="text/javascript" src="http://probabilitycourse.com/javascript/top_page_html_code.js"></script>
		</span>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter2/2_1_3_unordered_without_replacement.php">previous</a></div>
    			<div class="right"><a href="chapter2/2_1_5_solved2_1.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>2.1.4 Unordered Sampling with Replacement</h2></div>
    		<div class="right hide_print">
			<a href="http://probabilitycourse.com/videos/chapter2/video2_4.html"><img src="http://probabilitycourse.com/images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img src="http://probabilitycourse.com/images/print.png" id="printButton" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></div>
    		<div class="clear"></div>
			
			<p>Among the four possibilities we listed for ordered/unordered sampling with/without replacement, unordered 
			sampling with replacement is the most challenging one. Suppose that we want to sample from the set 
			$A=\{a_1,a_2,...,a_n\}$ $k$ times such that repetition is allowed and ordering does not matter. For 
			example, if $A=\{1,2,3\}$ and $k=2$, then there are $6$ different ways of doing this
			<ul>
                <li>1,1</li>
                <li>1,2</li>
                <li>1,3</li>
                <li>2,2</li>
                <li>2,3</li>
                <li>3,3</li>
            </ul></p>
			
			<p>How can we get the number $6$ without actually listing all the possibilities? One way to think 
			about this is to note that any of the pairs in the above list can represented by the number of $1$'s, 
			$2$'s and $3$'s it contains. That is, if $x_1$ is the number of ones, $x_2$ is the number of twos, 
			and $x_3$ is the number of threes, we can equivalently represent each pair by a vector $(x_1,x_2,x_3)$, 
			i.e.,
			<ul>
                <li>1,1 $\rightarrow (x_1,x_2,x_3)=(2,0,0)$</li>
                <li>1,2 $\rightarrow (x_1,x_2,x_3)=(1,1,0)$</li>
                <li>1,3 $\rightarrow (x_1,x_2,x_3)=(1,0,1)$</li>
                <li>2,2 $\rightarrow (x_1,x_2,x_3)=(0,2,0)$</li>
                <li>2,3 $\rightarrow (x_1,x_2,x_3)=(0,1,1)$</li>
                <li>3,3 $\rightarrow (x_1,x_2,x_3)=(0,0,2)$</li>
            </ul></p>
			
			<p>Note that here $x_i\geq 0$ are integers and $x_1+x_2+x_3=2$. Thus, we can claim that the number of 
			ways we can sample two elements from the set $A=\{1,2,3\}$ such that ordering does not matter and 
			repetition is allowed is the same as solutions to the following equation
			$$x_1+x_2+x_3=2, \textrm{ where } x_i \in \{0,1,2\}$$
			This is an interesting observation and in fact using the same argument we can make the following 
			statement for general $k$ and $n$.</p>
			
			<span class='lemma'>Lemma </span><br>
			<p>The total number of distinct $k$ samples from an $n$-element set such that repetition is allowed 
			and ordering does not matter is the same as the number of distinct solutions to the equation
			$$x_1+x_2+...+x_n=k, \textrm{ where } x_i \in \{0,1,2,3,...\}$$
			So far we have seen the number of unordered $k$-samples from an $n$ element set is the same as the number 
			of solutions to the above equation. But how do we find the number of solutions to that equation?</p>
			
			<span class='theorem'>Theorem </span><br>
			<p>The number of distinct solutions to the equation
			$$x_1+x_2+...+x_n=k, \textrm{ where } x_i \in \{0,1,2,3,...\} \hspace{50pt} (2.3)$$
			is equal to
			$${n+k-1 \choose k}={n+k-1 \choose n-1}$$</p>
			
			<i>Proof</i><br>
			<p>Let us first define the following simple mapping in which we replace an integer $x_i\geq 0$ with $x_i$ 
			vertical lines, i.e.,
			<table align="center">			
            <tr>
              <td>$1 \rightarrow |$</td>
            </tr>
            <tr>
              <td>$2 \rightarrow ||$</td>
            </tr>
			 <tr>
              <td>$3 \rightarrow |||$</td>
            </tr>
			<tr>
              <td>$...$</td>
            </tr>
            </table><br></p>
			<p>Now suppose we have a solution to the Equation 2.3, we can replace $x_i$ by their 
			equivalent vertical lines. Thus, for example if we have $x_1+x_2+x_3+x_4=3+0+2+1$, we can equivalently 
			write $|||++||+|$. Thus, we claim that for each solution to the Equation 2.3, we have 
			unique representation using vertical lines ('$|$') and plus signs ('$+$'). Indeed, each solution can be 
			represented by $k$ vertical lines (since the $x_i$ sum to $k$) and $n-1$ plus signs. Now, this is exactly 
			the same as <a href="chapter2/2_1_3_unordered_without_replacement.php#example34">Example 2.7</a>: 
			how many distinct sequences you can make using $k$ vertical lines 
			($|$) and $n-1$ plus signs ($+$)? The answer as we have seen is
			$${n+k-1 \choose k}={n+k-1 \choose n-1}$$</p>

			<hr /><br>
			<span class='example'>Example </span><br>
			<p>Ten passengers get on an airport shuttle at the airport. The shuttle has a route that includes $5$ hotels, 
			and each passenger gets off the shuttle at his/her hotel. The driver records how many passengers leave the 
			shuttle at each hotel. How many different possibilities exist?</p>
			<div class="solvedprob">
				 <ul>
				 	 <li><a><b>Solution</b></a>
				 	 <ul>
					 	 <li>
						 Let $x_i$ be the number of passengers that get off the shuttle at Hotel $i$. Then we have
						 $$x_1+x_2+x_3+x_4+x_5=10, \textrm{where } x_i \in \{0,1,2,3,...\}$$
						 Thus, the number of solutions is
						 $${5+10-1 \choose 10}={5+10-1 \choose 5-1}={14 \choose 4}$$
						 </li>
					 </ul>
					 </li>
				 </ul>
			</div>
			<hr /><br>
			
			<p>Let us know summarize the formulas for the four categories of sampling. Assuming that we have a set 
			with $n$ elements, and we want to draw $k$ samples from the set, then the total number of ways we 
			can do this is given by the following table.</p>
			
			<a name="table2_1"></a>
			<table border="1" cellpadding="10" align="center">			
            <tr>
              <td>ordered sampling with replacement</td>
              <td>$n^k$</td>
            </tr>
            <tr>
              <td>ordered sampling without replacement</td>
              <td>$P^n_k=\frac{n!}{(n-k)!}$</td>             
            </tr>
			<tr>
              <td>unordered sampling without replacement</td>
              <td>${n \choose k}= \frac{n!}{k!(n-k)!}$</td>
            </tr>
			<tr>
              <td>unordered sampling with replacement</td>
              <td>${n+k-1 \choose k}$</td>
            </tr>
            </table><br>
			<div align="center">Table 2.1: Counting results for different sampling methods.</div><br>

			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter2/2_1_3_unordered_without_replacement.php">previous</a></div>
    			<div class="right"><a href="chapter2/2_1_5_solved2_1.php">next</a><a> &rarr;</a></div>
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
