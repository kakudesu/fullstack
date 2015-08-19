<?php
$txt="Hello World\n";
echo $txt;
?>


<?php
$txt1="Hello World";
$txt2="1234\n";
echo $txt1 . " " . $txt2;
?>

<?php
echo strlen("Hello world!\n");
?>

<?php
echo strpos("Hello world!","world");
?> 


<html>
<body>
<?php
$d=date("D");
if ($d=="Fri")
  echo "Have a nice weekend!\n"; 
else
  echo "Have a nice day!\n"; 
?>
</body>
</html>


<html>
<body>
<?php
$d=date("D");
if ($d=="Fri")
  {
  echo "Hello!<br />"; 
  echo "Have a nice weekend!\n";
  echo "See you on Monday!\n";
  }
?>
</body>
</html>


<html>
<body>
<?php
$d=date("D");
if ($d=="Fri")
  echo "Have a nice weekend!\n"; 
elseif ($d=="Sun")
  echo "Have a nice Sunday!\n"; 
else
  echo "Have a nice day!\n"; 
?>
</body>
</html>


<?php
$x = 1;
switch ($x) {
case 1:
  echo "Number 1\n";
  break;
case 2:
  echo "Number 2\n";
  break;
case 3:
  echo "Number 3\n";
  break;
default:
  echo "No number between 1 and 3\n";
}
?>



<?php
	$names = array("Peter","Quagmire","Joe");
	$names[0] = "PeterNew";
	echo $names[1] . " and " . $names[2] . " are ". $names[0] . "'s neighbors\n";
?>














