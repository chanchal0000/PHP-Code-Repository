<html>
<head>
<title>Math 220, Preparation 3.3</title>
</head>
<body>
<i>Using PHP For Interactive Web Pages</i>
<hr>
<p></p>
<center>
<h4>Preparation for Section 3.3</h4>
</center>
<?php
$msg="Name:\n$name\n\nEmail:\n$email\n\nSummary:\n$summary\n\nProblem:\n$query";
if (mail("bennett@math.ksu.edu","Section 3.3 - $name",$msg)) {
?>
Your preparatory material has been mailed. Thank you.
<?php } else { ?>
The system was unable to mail your material. Please press the back button 
on your browser and try again. If the problem persists, please contact via email at 
<a href=mailto:snowpicks@yahoo.com>snowpicks@yahoo.com</a>
<?php } ?>
<p>
<hr>
<font size=-1>Please report any problems with this page to
<a href=snowpicks@yahoo.com</a></font>
</body>
</html>