

<?php




$num=100.235;
echo  number_format($num,2);
echo "<br>"."--------------------------------"."<br>";



$str1 = addslashes("I'm ahmed and I'm good person" );
echo($str1);
echo "<br>"."--------------------------------"."<br>";

/* use htmlspecialchars EVERY time you output content within HTML,
so it is interpreted as content and not HTML. Is it before inserting data
to database or when retrieving them from the database?
function to prevent XSS attacks*/


$str2="This is some <b>bold</b> text.";
echo $str2."<br>";
echo  htmlspecialchars($str2);
echo "<br>"."--------------------------------"."<br>";
echo strip_tags("Hello <b>world!</b>");
echo "<br>"."--------------------------------"."<br>";




$email="ahmed@gmail.com";
$newemail=explode("@",$email);

print_r ($newemail);
echo "<br>"."--------------------------------"."<br>";
$str0="0599884460";
echo substr("$str0",0,3);
echo "<br>"."--------------------------------"."<br>";
$str5="123e4";
echo is_numeric($str5);
echo "<br>"."--------------------------------"."<br>";
/*the number of seconds since January 1 1970 00:00:00 GMT)*/
$timestamp = strtotime("now");
echo "TIMESTAMP==>".$timestamp;
echo "UNIQEID".uniqid($timestamp)."<br>";
$holiday = date(" l D S");
echo $holiday;
echo $timestamp;

echo "<br>"."--------------------------------"."<br>";

$email = "john.doe@example.com";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
echo("$email is a valid email address");}
?>