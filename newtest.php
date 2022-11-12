<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="keywords" content="php,cse,ptcdb" charset="UTF-8">
    <title>THIS IS CSE HOME PAGE</title>
    <style>
        table, td {border:1px solid;border-collapse:collapse;margin-right: auto;margin-left:auto; }
        tr,table,p,td,input{text-align: center;}

    </style>
</head>
<body>
<p> THIS S A SIMPLE TEST EXAM</p>
<table width="400px">
<form name="text" method="post" action="" >
    <tr><td><input type="text" name="num1" disabled value="<?php echo rand(1,100);   ?>"  placeholder="enter number 1"></td></tr>
    <tr><td><input type="text" name="num2" value=""  placeholder="enter number 2"></td></tr>
    <tr><td> <input type="text" name="answer" value=""  placeholder="enter the multi. of two numbers"></td></tr>
    <tr><td> <input type="submit" name="submit" value="CHECK ANSWER" ></td></tr>

</form>
</table>
</body>
</html>


<?php
if(@$_POST['submit'])
{
 /* print_r($_POST);*/
  echo "<br>";
$number1= $_POST['num1'];

    $number2=$_POST['num2'];
$result=$number1*$number2;
$answer=$_POST['answer'];
if($result==$answer) {
    echo "<p style='text-align: center;color: chartreuse;font-size: 40px;'>TRUE ANSWER</p>";
    echo "<img src='eyehome.jpg'>";
}
else
    echo "<p style='text-align: center;color:red;font-size: 40px;'>TRUE ANSWER</p>";



}
?>
