<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<?php include '../Control/autonumber.php'; loadHeaders(21); ?>
	<meta name='section'	content='2.1.1' />
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
	<script type="text/javascript" src="http://probabilitycourse.com/javascript/menu_js_code.js"></script>
	
	<link rel="stylesheet" type="text/css" href="style_sheet.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="print.css" media="print" />

	<title>Intro to Probability</title>

</head><body>
	<div id="container">
		<span class="hide_print">
		<script type="text/javascript" src="javascript/top_page_html_code.js"></script>
		</span>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter2/2_1_0_counting.php">previous</a></div>
    			<div class="right"><a href="chapter2/2_1_2_ordered_without_replacement.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>2.1.1 Ordered Sampling with Replacement</h2></div>
    		<div class="right hide_print">
			<a href="http://probabilitycourse.com/videos/chapter2/video2_1.html"><img src="http://probabilitycourse.com/images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img src="http://probabilitycourse.com/images/print.png" id="printButton" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></div>
    		<div class="clear"></div>
			
			<p>Here we have a set with $n$ elements (e.g.: $A=\{1, 2, 3,\cdots.n\}$), and we want to draw $k$ samples 
			from the set such that ordering matters and repetition is allowed. For example, if $A=\{1,2,3\}$ and $k=2$, 
			there are $9$ different possibilities:</p>
			<ol type="1">
                <li>(1,1)</li>
                <li>(1,2)</li>
                <li>(1,3)</li>
                <li>(2,1)</li>
                <li>(2,2)</li>
                <li>(2,3)</li>
                <li>(3,1)</li>
                <li>(3,2)</li>
                <li>(3,3)</li>
            </ol>
			
			<p>In general, we can argue that there are $k$ positions in the chosen list: 
			$($Position $1$, Position $2$, ..., Position $k)$. There are $n$ options for each position. 
			Thus,  when ordering matters and repetition is allowed, the total number of ways to choose $k$ objects 
			from a set with $n$ elements is
			$$n \times n \times ... \times n=n^k$$
			Note that this is a special case of the multiplication principle where there are $k$ "experiments" and each 
			experiment has $n$ possible outcomes.</p>

			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter2/2_1_0_counting.php">previous</a></div>
    			<div class="right"><a href="chapter2/2_1_2_ordered_without_replacement.php">next</a><a> &rarr;</a></div>
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
