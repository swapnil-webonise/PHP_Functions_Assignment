<?php
$str1="PHP parses a file by looking for <br/> one of the special tags that tells it to start interpreting the text as PHP code. The parser then executes all of the code it finds until it runs into a PHP closing <br/> tag.";

$str2="PHP does not require (or support) explicit type definition in variable declaration; a variable's type is determined by the context in which the variable is used.";


$hstr1=<<<BI
PHP parses a file by looking for <br/> one of the special tags that tells it to start interpreting the text as PHP code. The parser then executes all of the code it finds until it runs into a PHP closing <br/> tag.
BI;

$hstr2=<<<DI
PHP parses a file by looking for <br/> one of the special tags that tells it to start interpreting the text as PHP code. The parser then executes all of the code it finds until it runs into a PHP closing 1<br/> tag.
DI;

echo "<br />Q1.Find occurance of PHP from string 1:".substr_count($str1,'PHP')."<br />";

echo "<br />Q2.Find the position where PHP occures in the string 1.:".strpos($str1,'PHP')."<br />";

echo "<br />Q3.Create array of words in string 1 & print them using a recursive function.:";
echo "<pre>";
$arr=explode(" ", $str1);

printRecursive($arr,count($arr)-1);
function printRecursive($arr,$count)
{
	if($count>0) 
	{
		printRecursive($arr,$count-1);
		echo " [$count] => $arr[$count] <br />";
	}		
	return;	
}
echo "</pre>";
echo "<br />";

echo "<br />Q4.Capitalise string 1:".strtoupper($str1)."<br />";

echo "<br />Q5.Combine string 1 & 2.:".$str1.$str2."<br />";

echo "<br />Q6.Echo string 1 & 2 using heredoc.:".$hstr1.$hstr2."<br />";

echo "<br />Q7.Print current date:".date("d.m.y")."<br />";

echo "<br />Q8.print 12th Jan 2012:".date("dS M Y", mktime(0,0,0,"1","12","2012"))."<br />";

echo "<br />Q9.add 7 days in current date:".date('Y-m-d', strtotime(date('Y-m-d'). ' + 7 day'))."<br />";

echo "<br />Q10.Cut the string 1 into 4 parts & print it.:";
$arr=str_split($str1, ceil((strlen($str1)/4)));
print_r($arr);
echo "<br />";

echo "<br />Q11.Divide the string 1 by occurances of '.'. Combine the array in reverse word sequence:";
$a1=explode(".",$str1);
foreach($a1 as &$val)
{
	$val=strrev($val);
}
print_r($a1);
echo "<br />";

echo "<br />Q12.Remove the HTML characters from string.:".strip_tags($str1)."<br />";

echo "<br />Q13.Print the 'PHP' word from string 1 by traversing it using string functions:";
echo "<br />";
$len=strlen($str1)-3;
$i=0;
while($i<$len)
{
	if(substr($str1,$i,3)=='PHP')
	{
		echo "Position:".$i." ".substr($str1,$i,3)."<br />";
	}
	$i++;
}
echo "<br />";

echo "<br />Q14.Find the length of string 1 & 2:";
echo "<br />Length of str1:".strlen($str1);
echo "<br />Length of str2:".strlen($str2);
echo "<br />";

echo "<br />Q15.Create file & write string 1 to that file using PHP functions.:";
$fp=fopen("/var/www/f1.txt","w") or exit("Unable to open file");
fputs($fp,$str1);
echo "<br />File Contents:<br />";
$fp1=fopen("/var/www/f1.txt","r") or exit("Unable to open file");
while($ch=fgetc($fp1))
{
	echo $ch;
}
echo "<br />";

echo "<br />Q16.Print all Global varibles provided by PHP:";
echo "<pre>";
echo "SERVER variable";
print_r($_SERVER);
echo "Post variable";
print_r($_POST);
echo "Get variable";
print_r($_GET);
echo "File variable";
print_r($_FILES);
session_start();
echo "Session variable";
print_r($_SESSION);
echo "ENV variable";
print_r($_ENV);
print_r($GLOBALS);
echo "</pre>";
echo "<br />";

echo "<br />Q17.Usage and examples of Header (PHP):";
echo "<br />Location:header('Location: http://www.google.com/')";
echo "<br />Cache-Control:header('Cache-Control: no-cache, must-revalidate')";
echo "<br />Expires:header('Expires: Sat, 26 Jul 1997 05:00:00 GMT')";
echo "<br />Content-type:header('Content-type: application/pdf')";
echo "<br />Content-Length:header('Content-Length: '.strlen($content))";
echo "<br />Content-Description:header('Content-Description: File Transfer')";
echo "<br />Status:header('Status: 404 Not Found')";
echo "<br />";

echo "<br />Q18.Redirect page 1 to page 2. :header('Location: http://www.google.com/');<br />";

echo "<br />Q19.Compare two dates. (12-4-2010 & 12-5-2011). Calculate the days between these two dates.:";
$now = strtotime("12-4-2010"); 
$your_date = strtotime("12-5-2011");
     $datediff = $your_date-$now;
     echo floor($datediff/(60*60*24));
echo "<br />";

echo "<br />Q20.Print date after 20 days from current date:".date('Y-m-d', strtotime(date('Y-m-d'). ' + 20 day'))."<br />";

echo "<br />Q21.Print date in array format.:";
print_r(date_parse('2012-07-09 10:30:00'));
echo "<br />";

echo "<br />Q22.create array of size 54 and split it into size of 4 indexes and print the new  and and count of new array:";
$arr=range(0,53);
$arr=array_chunk($arr,4);
echo "<br />No of array:".count($arr)."<br />";
print_r($arr);
echo "<br />";
?>
