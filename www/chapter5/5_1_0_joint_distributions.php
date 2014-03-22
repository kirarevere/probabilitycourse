<?php
	$section_no = "5.1.0";
	$section_title = "Joint Distributions: Two Random Variables";
	$section_prev = "chapter4/4_4_0_chapter4_problems.php";
	$section_next = "chapter5/5_1_1_joint_pmf.php";
	include 'Control/autonumber.php';
	initChapterHeaders(5);
	include 'section_header.php'; 
?>

<!-- Section content -->
<p>
In real life, we are often interested in several random variables that are related to each other.
For example, suppose that we choose a random family, and we would like to study the number
of people in the family, the household income, the ages of the family members, etc. Each of
these is a random variable, and we suspect that they are dependent. In this chapter, we develop
tools to study joint distributions of random variables. The concepts are similar to what we have
seen so far. The only difference is that instead of one random variable, we consider two or more.
In this chapter, we focus on two random variables, but once you understand the theory for two
random variables, the extension to n random variables is straight forward. We first discuss joint
distributions of discrete random variables and then extend the results to continuous random
variables.
</p>
<!-- End Section content -->
<?php
	include 'section_footer.php';
?>
