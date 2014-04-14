<?php
	$section_no			= "6.2.0";
	$section_title	= "Probability Bounds";
	$section_prev		= "chapter6/6_1_6_solved_probs.php";
	$section_next		= "chapter6/6_2_1_union_bound_and_exten.php";
	include						"../Control/autonumber.php";
	loadHeaders(82);
	include						"section_header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name='section'	content='6.2.0' />
	<?php include '../Control/autonumber.php'; initChapterHeaders(4); ?>
	
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
	<script type="text/javascript" src="http://probabilitycourse.com/javascript/solved_prob.js"></script>
	
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
				<div class="left"><a>&larr; </a><a href="chapter6/6_1_6_solved6_1.php">previous</a></div>
    			<div class="right"><a href="chapter6/6_2_1_union_bound_and_exten.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>6.2.0 Probability Bounds</h2></div>
            <!--
    		<div class="right hide_print">
			<a href="http://probabilitycourse.com/videos/chapter4/video4_1.html"><img src="http://probabilitycourse.com/images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img id="printButton" src="http://probabilitycourse.com/images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></div>
            -->
    		<div class="clear"></div>
			
			<p>In this section, we discuss probability bounds. These are inequalities that are usually applicable to a general scenario. There are several scenarios in which we resort to inequalities. Sometimes we do not have enough information to calculate a desired quantity (such as probability of an event or the expected value of a random variable). In other situations, the problem might be complicated and exact calculation might be very difficult. In other scenarios, we might want to provide a result that is general and applicable to wide range of problems. <br/>

For example, suppose that you are an engineer and you design a communication system. Your company wants to ensure that the error probability in your system be less than a given value, say $10^{-5}$. Calculating the exact value of probability might be difficult due to some unknown parameters or simply because the communication system is a complicated one. Here you do not actually need to find the error probability exactly, but all you need to do is to show that it is less than $10^{-5}$. <br/>

In this section, we will discuss several inequalities. Depending on the problem you are dealing with, you might decide which one to use.</p>

			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter6/6_1_6_solved6_1.php">previous</a></div>
    			<div class="right"><a href="chapter6/6_2_1_union_bound_and_exten.php">next</a><a> &rarr;</a></div>
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
