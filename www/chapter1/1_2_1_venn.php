<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../"></base>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="section"	content="1.2.1"	/>
	<?php include '../Control/autonumber.php'; ?>
	<?php loadHeaders(2); ?>
<!--
	<style>
		body	{	counter-reset:	example	<?php getExampleStart(3);	?>;	}
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

	<title>Intro to Probability</title>

</head><body>
	<div id="container">
		<span class="hide_print">
		<script type="text/javascript" src="javascript/top_page_html_code.js"></script>
		</span>
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter1/1_2_0_review_set_theory.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_2_2_set_operations.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>1.2.1 Venn Diagrams</h2></div>
    		<div class="right hide_print">
			<a href="videos/chapter1/video1_2.html"><img src="images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<img id="printButton" src="images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></div>
    		<div class="clear"></div>
			
			<p>Venn diagrams are very useful in visualizing relation between sets. In a <b>Venn diagram</b> 
			any set is depicted by a closed region. Figure 1.2 shows an example of a Venn diagram. 
			In this figure, the big rectangle shows the universal set $S$. The shaded area shows another set $A$.</p>
			
			<figure>
  					<img src="images/chapter1/venn_b.png" width="300" height="286" alt="Venn diagram" title="Venn diagram" border="0" />
  					<figcaption>Fig.1.2 - Venn Diagram.</figcaption>
			</figure>
			
			<br>
			<p>Figure 1.3 shows two sets $A$ and $B$, where $B \subset A$.</p>
			
			<figure>
  					<img src="images/chapter1/subset_b.png" width="300" height="260" alt="Subset" title="Subset" border="0" />
  					<figcaption>Fig.1.3 - Venn Diagram for two sets $A$ and $B$, where $B \subset A$.</figcaption>
			</figure>
			<br>

			<hr />
			<div class="thinblock hide_print">
				<div class="left"><a>&larr; </a><a href="chapter1/1_2_0_review_set_theory.php">previous</a></div>
    			<div class="right"><a href="chapter1/1_2_2_set_operations.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>		
		</div>
		<span class="hide_print">
		<div id="menu">
			 <script type="text/javascript" src="javascript/menu_html_code.js"></script>
		</div>

		<div id="footer">
			<script type="text/javascript" src="javascript/footer_html_code.js"></script>
		</span>
		</div>
	</div>
</body>
</html>
