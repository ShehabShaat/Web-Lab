<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="keywords" content="php,cse,ptcdb" charset="UTF-8">
    <title>THIS IS CSE HOME PAGE</title>
    <style>
        table, td {border:1px solid;border-collapse:collapse;margin-right: auto;margin-left:auto; }
        tr,table,p,td,input{text-align: center;}
        input:valid {background-color: green;}
        input:invalid {background-color: red;}

    </style>
</head>
<body>
<p> THIS S A REG FORM</p>
<table width="400px">
<form name="text" method="post" action="" >
    <tr><td><label>NAME</label><input type="text" name="stname"  value=""></td></label> </td></tr>
    <tr><td><input type="email" name="stemail" value=""   placeholder="enter email"></td></tr>
    <tr><td><input type="date" name="stdate" value=""  placeholder="enter date"></td></tr>

    <tr><td> <input type="tel" name="stmobile" value="" pattern="05[9|6][0-9]{7}"  placeholder="0599884460"></td></tr>
    <tr><td> <input type="submit" name="submit" value="CHECK ANSWER" ></td></tr>
    <tr><td><select name="gender">
         <option value="male">male</option>
         <option value="female">female</option>

     </select></td></tr>
    <tr><td> <input type="submit" name="submit" value="CHECK ANSWER" ></td></tr>
</form>
</table>
</body>
</html>


<?php
if(@$_POST['submit'])
{
    print_r($_POST);

}
?>
