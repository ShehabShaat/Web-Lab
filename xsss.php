<!DOCTYPE html>
<html>
<head>
    <title>XSS Test</title>
</head>
<body>
<h1>XSS Test</h1>
<!DOCTYPE html>
<html>
<head>
    <title>XSS Test</title>
    <style>
        input {
            margin: 5px;
        }
    </style>
</head>
<body>
<h2>Please enter your first name:</h2>
<form action="xsss.php" method= "post">
    <input type="text" name="fname"><br>
    <input type="submit" value="Submit name">
</form>
</body>
</html>

<?php
$fname =@htmlspecialchars($_POST['fname']);
echo "<p>Welcome, $fname</p>\n";
?>
<h2>This is the end of the test</h2>
</body>
</html>