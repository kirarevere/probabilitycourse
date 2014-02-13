<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../"></base>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="section"	content="1.1.1"	/>
	<?php include '../Control/autonumber.php'; ?>
	<?php loadHeaders(0); ?>
<!--
	<style>
		body	{	counter-reset:	example	<?php getExampleStart(1);	?>;	}
		.example	{	font-weight:	bold;	}
		.example:after	{	counter-increment:	example	1;	content:	counter(example);	}
	</style>
-->

	<script type="text/x-mathjax-config">
  			MathJax.Hub.Config({
    		tex2jax: { inlineMath: [['$','$'],['\\(','\\)']] },
				"HTML-CSS": { scale: 100 }
  			});
	</script>	
	<script type="text/javascript"
  			src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
	</script>
	
	<script type='text/javascript' src='http://code.jquery.com/jquery-1.6.3.js'></script>
	<script type="text/javascript" src="javascript/menu_js_code.js"></script>
	
	<link rel="stylesheet" type="text/css" href="style_sheet.css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="print.css" media="print" />
	<link rel="stylesheet" type="text/css" href="mobile.css" media="only screen and (max-device-width:700px), only screen and (max-width: 700px)" />

	<title>Intro to Probability</title>

</head><body>
	<div id="container">
		<span class='hide_print'>
		<script type="text/javascript" src="javascript/top_page_html_code.js"></script>
		</span>
		<div id="wrapper">
			<div id="content">
			<div class="thinblock">
				<div class="left hide_print"><a>&larr; </a><a href="chapter1/1_1_0_what_is_probability.php">previous</a></div>
    			<div class="right hide_print"><a href="chapter1/1_2_0_review_set_theory.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>1.1.1 Example: Communication Systems</h2></div>
    		<div class="right hide_print">
			<a href="videos/chapter1/video1_1.html"><img src="images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img src="images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;" id="printButton"/>
			</div>
    		<div class="clear"></div>
			
			<p>Communication systems play a central role in our lives. Everyday, we use our 
			cell phones, access the internet, use our TV remote controls, and so on. Each of 
			these systems relies on transferring information from one place to another. 
			For example, when you talk on the phone, what you say is converted to a sequence 
			of $0$'s or $1$'s called <i>information bits</i>. These information bits are then 
			transmitted by your cell phone antenna to a nearby cell tower as shown in Figure 1.1.</p>			
			
			<figure>
    				<img src="images/chapter1/transmission_color.png" width="500" height="537" alt="Cellphone" title="Cellphone" border="0" />
  					<figcaption>Fig.1.1 - Transmission of data from a cell phone to a cell tower.</figcaption>
			</figure>

			<p>The problem that communication engineers must consider is that the transmission 
			is always affected by <b>noise</b>. That is, some of the bits received at the cell 
			tower are incorrect. For example, your cell phone may transmit the sequence 
			$"010\mathbf{0}10\cdots"$, while the sequence $"010\mathbf{1}10\cdots"$ might be 
			received at the cell tower. In this case, the fourth bit is incorrect. Errors 
			like this could affect the quality of the audio in your phone conversation.</p>

			<p>The noise in the transmission is a random phenomenon. Before sending the transmission 
			we do not know which bits will be affected. It is as if someone tosses a (biased) coin 
			for each bit and decides whether or not that bit will be received in error. Probability 
			theory is used extensively in the design of modern communication systems in order to 
			understand the behavior of noise in these systems and take measures to correct the errors.</p>

			<p>This example shows just one application of probability.  You can pick almost any discipline 
			and find many applications in which probability is used as a major tool. Randomness is 
			prevalent everywhere, and probability theory has proven to be a powerful way to understand 
			and manage its effects.</p>
			
			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter1/1_1_0_what_is_probability.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_2_0_review_set_theory.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>		
		</div>
		<span class="hide_print">
		<div id="menu">
			 <script type="text/javascript" src="javascript/menu_html_code.js"></script>
		</div>

		<div id="footer">
			<script type="text/javascript" src="javascript/footer_html_code.js"></script>
		</div>
		</span>
	</div>
</body>
</html>
