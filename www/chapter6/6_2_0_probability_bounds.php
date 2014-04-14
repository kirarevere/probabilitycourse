<?php
	$section_no			= "6.2.0";
	$section_title	= "Probability Bounds";
	$section_prev		= "chapter6/6_1_6_solved_probs.php";
	$section_next		= "chapter6/6_2_1_union_bound_and_exten.php";
	include						"../Control/autonumber.php";
	loadHeaders(82);
	include						"section_header.php";
?>
			
			<p>In this section, we discuss probability bounds. These are inequalities that are usually applicable to a general scenario. There are several scenarios in which we resort to inequalities. Sometimes we do not have enough information to calculate a desired quantity (such as probability of an event or the expected value of a random variable). In other situations, the problem might be complicated and exact calculation might be very difficult. In other scenarios, we might want to provide a result that is general and applicable to wide range of problems. <br/>

For example, suppose that you are an engineer and you design a communication system. Your company wants to ensure that the error probability in your system be less than a given value, say $10^{-5}$. Calculating the exact value of probability might be difficult due to some unknown parameters or simply because the communication system is a complicated one. Here you do not actually need to find the error probability exactly, but all you need to do is to show that it is less than $10^{-5}$. <br/>

In this section, we will discuss several inequalities. Depending on the problem you are dealing with, you might decide which one to use.</p>

<?php include 'section_footer.php'; ?>
