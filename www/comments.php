
<html lang="en">
<head>
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

	<link rel="stylesheet" type="text/css" href="http://probabilitycourse.com/style_sheet.css" />

	<title>Intro to Probability</title>

</head><body>
	<div id="container">
		<script type="text/javascript" src="http://probabilitycourse.com/javascript/top_page_html_code.js"></script>
		
		<div id="wrapper">
			<div id="content">
			
			<h2>Send us your feedback</h2>
			<p>Please fill out all the fields.</p>
			
			<form name="contactform" method="post" action="http://probabilitycourse.com/send_form_email.php">

              <table width="800px">
              <tr>
               <td valign="top">
                <label for="name">Name</label>
               </td>
               <td valign="top">
                <input type="text" name="name" maxlength="50" size="30">
               </td>
              </tr>
              <tr>
               <td valign="top">
                <label for="email">Email</label>
               </td>
               <td valign="top">
                <input  type="text" name="email" maxlength="80" size="30">
               </td>
              </tr>
              <tr>
               <td valign="top">
                <label for="comments">Comments</label>
               </td>
               <td valign="top">
                <textarea  name="comments" cols="50" rows="10"></textarea>
               </td>
              </tr>
              <tr>
							 <td>
<?php
  require_once('recaptchalib.php');
  $publickey = "6Lf8IPESAAAAAL6JeronnI-mqzKcxYURgGuw2tiD"; // you got this from the signup page
  echo recaptcha_get_html($publickey);
?>
								</td>
							<tr>
               <td  style="text-align:center">
                <input type="submit" value="Submit">
               </td>
              </tr>
              </table>
              </form>
			
		</div>
		<div id="menu">
			 <script type="text/javascript" src="http://probabilitycourse.com/javascript/menu_html_code.js"></script>
		</div>

		<div id="footer">
			<script type="text/javascript" src="http://probabilitycourse.com/javascript/footer_html_code.js"></script>
		</div>
	</div>
</body>
</html>
