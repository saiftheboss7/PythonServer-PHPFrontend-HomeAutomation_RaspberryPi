<?php
$file = "buttonStatus3.txt";
$handle = fopen($file,'w+');
if (isset($_POST['on2']))
{
$onstring = "ON";
fwrite($handle,$onstring);
fclose($handle);
print "
<html>

<body>

<title>shuvo</title>
<style type=text/css>
h1{
	padding-left: 300px;
}
h2{
	position: absolute;
	top: 100px;
	left: 450px;
}
</style>



<h1>Home Automation</h2>

<h2>The Device 3 has been Turned ON </h2>
</body>
</html>
";
}
else if(isset($_POST['off2']))
{
$offstring = "OFF";
fwrite($handle, $offstring);
fclose($handle);
print "
<html>
<body>
<title>Shuvo</title>
<style type=text/css>
h1{
	padding-left: 300px;
}
h2{
	position: absolute;
	top: 100px;
	left: 450px;
}
</style>
<h1>Home Automation</h2>
<h2>The Device 3 has been Turned OFF </h2>
</body>
</html>
";
}


?>