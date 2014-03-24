<?php
	$section_no			= "5.1.6";
	$section_title	=	"Solved Problems";
	$section_next		= "#";
	$section_prev		= "#";
	include	'../Control/autonumber.php';
	loadHeaders(61);
	include 'section_header.php';
?>

<!-- Section Content -->
<span class="problem">Problem </span><br />
Consider two random variables $X$ and $Y$ with joint PMF given in Table 5.3.
<ol type="a"> 
  <li>Find $P(X \leq 2, Y \leq 4)$.</li>
  <li>Find the marginal PMFs of $X$ and $Y$.</li>
  <li>Find $P(Y=2 | X=1)$.</li>
  <li>Are $X$ and $Y$ independent?</li>
</ol>

<style>
	#table5_3 {
		font-size: 12pt;
		border-collapse: collapse;
		width: 400px;
		margin: 10px auto;
	}

	#table5_3 td {
		border: 2px solid black;
		text-align: center;
		vertical-align: middle;
	}
</style>
<table id="table5_3">
	<tr style="height:50px;">
		<td>&nbsp;</td>
		<td>$Y = 2$</td>
		<td>$Y = 4$</td>
		<td>$Y = 5$</td>
	</tr>
	<tr style="height:80px;">
		<td>$X = 1$</td>
		<td>$\frac{1}{12}$</td>
		<td>$\frac{1}{24}$</td>
		<td>$\frac{1}{24}$</td>
	</tr>
	<tr style="height:80px;">
		<td>$X = 2$</td>
		<td>$\frac{1}{6}$</td>
		<td>$\frac{1}{12}$</td>
		<td>$\frac{1}{8}$</td>
	</tr>
	<tr style="height:80px;">
		<td>$X = 3$</td>
		<td>$\frac{1}{4}$</td>
		<td>$\frac{1}{8}$</td>
		<td>$\frac{1}{12}$</td>
	</tr>
</table>

<div class="solvedprob"><ul><li><a><b>Solution</b></a>
<ul><li>

</li></ul>
</li></ul></div><hr /><br />
<!-- /Section Content -->

<?php include 'section_footer.php'; ?>
