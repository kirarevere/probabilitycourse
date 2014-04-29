<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="section"	content="4.2.1" />
	<?php include '../Control/autonumber.php'; loadHeaders(43); ?>
	
	<script type="text/x-mathjax-config">
  			MathJax.Hub.Config({
    		tex2jax: { inlineMath: [['$','$'],['\\(','\\)']] }
  			});
	</script>	
	<script type="text/javascript"
  			src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
	</script>
	
	<script type='text/javascript' src='http://code.jquery.com/jquery-1.6.3.js'></script>
	<script type="text/javascript" src="http://probabilitycourse.com/javascript/menu_js_code.js"></script>
	
	<link rel="stylesheet" type="text/css" href="http://probabilitycourse.com/style_sheet.css" media="screen" />
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
				<div class="left"><a>&larr; </a><a href="chapter4/4_1_4_solved4_1.php">previous</a></div>
    			<div class="right"><a href="chapter4/4_2_2_exponential.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>4.2.1 Uniform Distribution</h2></div>
    		<div class="right hide_print">
			<a href="http://probabilitycourse.com/videos/chapter4/video4_7.html"><img src="http://probabilitycourse.com/images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img id="printButton" src="http://probabilitycourse.com/images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></a></div>
    		<div class="clear"></div>
			
			<p>We have already seen the uniform distribution. In particular, we have the following definition:</p>
			<div style="padding: 15px; border: black 1px solid">
			<p>A continuous random variable $X$ is said to have a <i>Uniform</i> distribution over the interval $[a,b]$, 
			shown as $X \sim Uniform(a,b)$, if its PDF is given by
            \begin{equation}
             \nonumber f_X(x) = \left\{
              \begin{array}{l l}
                \frac{1}{b-a} & \quad  a < x < b\\
                0 & \quad x < a \textrm{ or } x > b
              \end{array} \right.
            \end{equation}
			</div><br>

			We have already found the CDF and the expected value of the uniform distribution. In particular, we 
			know that if $X \sim Uniform(a,b)$, then its CDF is given by 
			<a href="chapter4/4_1_0_continuous_var.php#ex64">equation 4.1 in example 4.1</a>, 
			and its mean is given by
			$$EX=\frac{a+b}{2}$$
			To find the variance, we can find $EX^2$ using LOTUS:<br><br>
			<table align="center">			
            <tr>
              <td>$EX^2$</td>
              <td>$= \int_{-\infty}^{\infty} x^2f_X(x)dx$</td>
            </tr>
            <tr>
              <td></td>
              <td>$=\int_{a}^{b} x^2 \left(\frac{1}{b-a}\right) dx$</td>
            </tr>
			<tr>
              <td></td>
              <td>$=\frac{a^2+ab+b^2}{3}$</td>
            </tr>
            </table><br>
			Therefore,
			<table align="center">			
            <tr>
              <td>$\textrm{Var}(X)$</td>
              <td>$=EX^2-(EX)^2$</td>
            </tr>
            <tr>
              <td></td>
              <td>$=\frac{(b-a)^2}{12}$</td>
            </tr>
            </table><br></p>

			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter4/4_1_4_solved4_1.php">previous</a></div>
    			<div class="right"><a href="chapter4/4_2_2_exponential.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>		
		</div>
		<div id="menu" class="hide_print">
			 <script type="text/javascript" src="javascript/menu_html_code.js"></script>
		</div>

		<div id="footer" class="hide_print">
			<script type="text/javascript" src="http://probabilitycourse.com/javascript/footer_html_code.js"></script>
		</div>
	</div>
</body>
</html>
