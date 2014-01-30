<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="section"	content="1.1.0" />
	<?php include '../Control/autonumber.php'; ?>
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
		<!-- Header - hidden from print -->
		<span class="hide_print">
		<script type="text/javascript" src="javascript/top_page_html_code.js"></script>
		</span>
		<!-- /Header -->
		
		<div id="wrapper">
			<div id="content">
			<div class="thinblock">
    			<div class="right"><a href="chapter1/1_1_1_example.php">next</a><a> &rarr;</a></div>
    			<div class="clear"></div>
    		</div>
			<hr />
						
			<div class="left"><h2>1.1 Introduction: What Is Probability?</h2></div>
    		<div class="right">
			<a href="videos/chapter1/video1_1.html"><img src="images/video_icon_lg.png" alt="Video Available" title="Video Available" border="0" style="vertical-align: middle;"/></a>
			<a href="chapter1/what_is_probability_print.html"><img src="images/print.png" width="40" height="40" alt="Printer Friendly" title="Printer Friendly" style="vertical-align: middle;"/></a>
			</div>
    		<div class="clear"></div>
			
			<p>In this chapter we provide some basic concepts and definitions. We begin with a brief 
			discussion of what probability is. Then we review some mathematical foundations that are 
			needed for developing probability theory. Next we discuss the concept of random experiments 
			and the axioms of probability.  We then introduce discrete and continuous probability models. 
			Finally, we discuss conditional probability.</p>
			<hr /><br>
			
			<p>Randomness and uncertainty exist in our daily lives as well as in every discipline in science, 
			engineering, and technology. Probability theory, the subject of the first part of this book, 
			is a mathematical framework that allows us to describe and analyze random phenomena in the world 
			around us. By random phenomena, we mean events or experiments whose outcomes we can't predict with 
			certainty.</p>

			<p>Let's consider a couple of specific applications of probability in order to get some intuition.  
			First, let's think more carefully about what we mean by the terms "randomness" and "probability" 
			in the context of one of the simplest possible random experiments: flipping a fair coin.</p>

			<p>One way of thinking about "randomness" is that it's a way of expressing what we don't know.  
			Perhaps if we knew more about the force I flipped the coin with, the initial orientation of the 
			coin, the impact point between my finger and the coin, the turbulence in the air, the surface 
			smoothness of the table the coin lands on, the material characteristics of the coin and the table, 
			and so on, we would be able to definitively say whether the coin would come up heads or tails. 
			However, in the absence of all that information, we cannot predict the outcome of the coin flip. 
			When we say that something is random, we are saying that our knowledge about the outcome is limited, 
			so we can't be certain what will happen.</p>

			<p>Since the coin is fair, if we don't know anything about how it was flipped, the probability that 
			it will come up heads is 50%, or $\frac{1}{2}$.  What exactly do we mean by this?  There are 
			two common interpretations of the word "probability". One is in terms of <b>relative frequency</b>. 
			In other words, if we flip the coin a very large number of times, it will come up heads about 
			$\frac{1}{2}$ of the time. As the number of coin flips increases, the proportion that come up 
			heads will tend to get closer and closer to $\frac{1}{2}$. In fact, this intuitive understanding 
			of probability is a special case of the <b>law of large numbers</b>, which we will state and 
			prove formally in later chapters of the book.</p>

			<p>A second interpretation of probability is that it is a quantification of our degree of 
			<b>subjective personal belief</b> that something will happen.  To get a sense of what we mean 
			by this, it may be helpful to consider a second example: predicting the weather. When we think 
			about the chances that it will rain today, we consider things like whether there are clouds in 
			the sky and the humidity. However, the beliefs that we form based on these factors may vary 
			from person to person - different people may make different estimates of the probability 
			that it will rain. Often these two interpretations of probability coincide - for instance, 
			we may base our personal beliefs about the chance that it will rain on an assessment of the 
			relative frequency of rain on days with conditions like today.</p>

			<p>The beauty of probability theory is that it is applicable regardless of the interpretation 
			of probability that we use (i.e., in terms of long-run frequency or degree of belief). 
			Probability theory provides a solid framework to study random phenomena. It starts by assuming 
			<b>axioms of probability</b>, and then building the entire theory using mathematical arguments.</p>

			<p>Before delving into studying probability theory, let us briefly look at an example showing how 
			probability theory has been applied in a real life system.</p>
			
			<hr />
			<div class="thinblock">
    			<div class="right"><a href="chapter1/1_1_1_example.php">next</a><a> &rarr;</a></div>
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
