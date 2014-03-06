function goGoogle() {
document.write('<span style="width:400px; float:right;">');
var cx = "000708056221598449280:s2l0dvomcn0";
var gcse = document.createElement("script");
gcse.type = "text/javascript";
gcse.async = true;
gcse.src = (document.location.protocol == "https:" ? "https:" : "http:") +
"//www.google.com/cse/cse.js?cx=" + cx;
var s = document.getElementsByTagName("script")[0];
s.parentNode.insertBefore(gcse, s);
document.write('<gcse:search></gcse:search></span>');
}

function writeHeader() {
var header = '<div id="header">';
var google = '<span style="width:400px; float:right;">';


var htmlText = '<h1>Introduction to Probability</h1>';
htmlText += '<p class="description">Hossein Pishro-Nik</p>';
htmlText += '</div>';
htmlText += '<div id="navigation">';
htmlText += '<ul>';
htmlText += '<li><a href="http://probabilitycourse.com/index.html">HOME</a></li>';
htmlText += '<li><a href="http://probabilitycourse.com/videos/videos.html">VIDEOS</a></li>';
htmlText += '<li><a href="http://probabilitycourse.com/calculator/calculator.html">CALCULATOR</a></li>';
htmlText += '<li><a href="http://probabilitycourse.com/comments.html">COMMENTS</a></li>';
htmlText += '</ul>';
htmlText += '</div>';

document.write(header);
goGoogle();
document.write(htmlText);
}
writeHeader();
