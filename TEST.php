<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
      table,td,input { text-align: center;border:1px solid;border-collapse: collapse;margin-left: auto;margin-right: auto;}
       input:valid {background-color: green;}
       input:invalid {background-color: red;}
    </style>
</head>
<body>
<P STYLE="text-align: center">THIS THE FIRST TES CODE</P>
<table width="400px" >
<form name="form1" method="post" action="">
  <tr><td>
    <label><input type=number max="10" min="1"  name="num1" value="" >
    </label> </td></tr>
  <!--<tr><td> <input type="text" name="num2" value="" size="30" ></td></tr>
  <tr><td><input type="text" name="answer" value=""></td></tr>
    <tr><td><input type="date" name="date" value=""  ></td></tr>-->
    <tr><td><label>
                <input type="tel" name="mobile" pattern="05[6|9][0-9]{7}" value="" maxlength="10"  >
            </label></td></tr>
    <tr><td><label>
                <input type="text" name="gender" >
            </label></td></tr>

    <tr><td><label>
                <select name="choose">
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                            <option value="3">Engineer</option>

                        </select>
            </label></td></tr>

    <tr><td>
            <fieldset>
            male<label>
                    <input type=radio name="choose1" value="1">
                </label>
                female<label>
                    <input type=radio name="choose1" value="2">
                </label>
            </fieldset>
      </td></tr>
    <tr><td><input type="submit" name="submit1" value="CHECK"></td></tr>

</form>
</table>
</body>
</html>

<?php
if(@$_POST['submit1'])
{
/*$n1= $_POST['num1'];
$n2= $_POST['num2'];
$ans=$_POST['answer'];*/
print_r($_POST);
/*$result=$n1*$n2;
if($ans==$result) echo "ok";
else "not ok";*/
}
?>