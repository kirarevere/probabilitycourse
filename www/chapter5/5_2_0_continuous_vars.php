<?php
	$section_no			= "5.2.0";
	$section_title	= "Two Continuous Random Variables";
	$section_prev		= "chapter5/5_1_6_solved_prob.php";
	$section_next		= "chapter5/5_2_1_joint_pdf.php";
	include "../Control/autonumber.php";
	loadHeaders(58);
	include "section_header.php";
?>

<!-- Section Content -->
<p>
In Chapter <a href="chapter4/4_1_0_continuous_var.php">4</a>, we introduced continuous random variables. As a simplified view of things, we mentioned that when we move from discrete random variables to continuous random variables, two things happen: sums become integrals, and PMFs become PDFs. The same statement can be repeated when we talk about joint distributions: (double) sums become (double) integrals, and joint PMFs become joint PDFs. Note that the CDF has the same definition for all kinds of random variables. Experience shows that students usually can learn the concepts behind joint continuous random variables without much difficulty; however, they sometimes run into issues when dealing with double integrals. That is, in the discussion of joint continuous distributions, students' problems often relate to multivariate calculus rather than their lack of understanding of probability concepts. The good news is that in practice we do not often need to evaluate multiple integrals anyway. Nevertheless, since this part of the book relies on familiarity with multivariate calculus, we recommend a quick review of double integrals and partial derivatives in case you have not dealt with them recently. We will only need the calculus concepts very lightly and our goal here is to focus on probability.  In this section, we will discuss joint continuous distributions. Since the ideas behind the theory is very analogous to joint discrete random variables, we will provide a quick introduction to main concepts and then focus on examples.
</p>
<!-- /Section Content -->
<?php include 'section_footer.php'; ?>
