<!DOCTYPE html>
<html>
<head>
	<base href="../" />
	<title>4.2.4 Gamma Distribution</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="en-US" />
	<!-- Auto Numbering Required Fields-->
	<meta name='section' content='4.2.4' />
	<?php include '../Control/autonumber.php'; loadHeaders(51); ?>

	<!-- /Auto Numbering -->

	<!-- MathJax -->
	<script type="text/javascript"
		src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
	</script>
	<script type="text/x-mathjax-config">
		MathJax.Hub.Config({
			tex2jax: { inlineMath: [['$','$'],['\\(','\\)']] }
		});
	</script>
	
	<!-- /MathJax -->

	<!-- Javascript -->
	<script type='text/javascript' src='http://code.jquery.com/jquery-1.6.3.js' ></script>
	<script type='text/javascript' src='javascript/menu_js_code.js'/></script>
	<script type='text/javascript' src='javascript/solved_prob.js' ></script>
	
	<!-- /Javascript -->
	
	<!-- CSS Stylesheets -->
	<link rel="stylesheet" type="text/css" href="style_sheet.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="print.css" media="print" />
	<!-- /CSS Stylesheets -->
</head>
<body>
	<!-- Something meaninful -->
	<div id="container">
		<!-- Hide when printed -->
		<span class="hide_print">
			<script type="text/javascript" src="http://probabilitycourse.com/javascript/top_page_html_code.js"></script>
		</span>

		<div id="wrapper">
			<div id="content">
				<div class="thinblock hide_print">
					<div class="left">
						&larr;<a href="chapter4/4_2_3_normal.php">previous</a>
					</div>
					<!-- /left div -->
					<div class="right">
						<a href="chapter4/4_2_5_other_distr.php">next</a>&rarr;
					</div>
					<!-- /right div -->
					<br style="clear:both;" />
				</div>
				<!-- /thinblock hide_print div -->
				<hr>
			
				<!-- Section header -->
				<div class="left">
					<h2>4.2.4 Gamma Distribution</h2>
				</div>
				<!-- /Section header div -->
			
				<!-- Video / Print buttons -->
				<div class="right hide_print">
					<a href="#"><img src="http://probabilitycourse.com/images/video_icon_lg.png" 
							alt="Video Available" 
							title="Video Available" 
							border="0" 
							style="vertical-align: middle;"/></a>
					<img src="http://probabilitycourse.com/images/print.png" 
							id="printButton"
							width="40" 
							height="40" 
							alt="Printer Friendly" 
							title="Printer Friendly" 
							style="vertical-align: middle;"/>
				</div>
				<!-- /Video and Print buttons -->
				<br style="clear:both;" />
				<hr />

				<!-- Section Content -->
				<p>
					The gamma distribution is another widely used distribution. Its importance is largely due to
					its relation to exponential and normal distributions. Here, we provide an introduction to the
					gamma distribution. In Chapters <a href="#">6</a> and <a href="#">11</a>, we will discuss more properties of the gamma
					random variables. Before introducing the gamma random variable, we need to introduce the
					gamma function.
				</p>
				<p>
					<b>Gamma function:</b> The gamma function [<a href="#">12</a>], shown by $ \Gamma(x)$, is an extension of the factorial
					function to real (and complex) numbers. Specifically, if $n \in \{1,2,3,...\} $, then
					$$ \Gamma(n) = (n-1)!$$
					More generally, for any positive real number $\alpha$, $\Gamma(\alpha)$ is defined as
					$$ \Gamma(\alpha) = \int_0^\infty x^{\alpha - 1} e^{-x} {\rm d}x, \hspace{20pt} \textrm{for }\alpha&gt;0 $$
				<br />
					Figure [x] shows the gamma function for positive real values.
				</p>
				<p>
					Note that for $\alpha=1$
				</p>
				<!-- /Section Content -->

				<!-- Bottom nav -->
				<div class="thinblock hide_print">
					<div class="left">
						&larr;<a href="chapter4/4_2_3_normal.php">previous</a>
					</div>
					<!-- /left div -->
					<div class="right">
						<a href="chapter4/4_2_5_other_distr.php">next</a>&rarr;
					</div>
					<!-- /right div -->
					<br style="clear:both;" />
				</div>
				<!-- /bottom nav div -->
			</div>
			<!-- /content div -->
				<!-- Sidebar menu -->
				<div id="menu" class="hide_print">
				 <script type="text/javascript" src="javascript/menu_html_code.js"></script>
				</div>
				<!-- /Sidebar menu -->

				<!-- footer -->
				<div id="footer" class="hide_print">
					<script type="text/javascript" src="http://probabilitycourse.com/javascript/footer_html_code.js"></script>
				</div>
				<!-- /footer -->
		</div>
		<!-- /wrapper div -->
	</div>
	<!-- /container div -->
</body>
</html>
