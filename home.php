<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="keywords" content="php,cse,ptcdb" charset="UTF-8">
    <title>THIS IS CSE HOME PAGE</title>
    <style>
        ul {
            position: absolute;
            left: 300px;
            top: 500px;
        }

        li {
            background-color: blue;
            width: 20px;
            height: 10px;
            display: inline;
            margin: 10px;
            padding: 5px;
        }

        table, td {
            border: 1px solid;
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
            text-align: center;
        }

        .new_color {
            background-color: red;
        }
    </style>
</head>
<body bgcolor="#6b8e23">
<?php echo "THIS IS my PHP SCRIPT"; ?>

<p class="new_color">THIS IS MY FIRST CSE PAGE</p>
<h1 style="text-align: center; border-style: double;background-color: aqua"> THIS DONE BY AHMED &copy</h1>
<center>
    <img src="eye_home.jpg" width="1000" height="667" alt="">
</center>
<br><br>

<ul style="list-style-type: none">
    <a href="contact.html">
        <li>FirstPage</li>
    </a>
    <a href="home.html">
        <li>SecondPage</li>
    </a>
    <li>ThirdPage</li>
</ul>
<br><br>

<table style="width:400px">
    <tr>
        <td style="background-color: aqua;text-align: center">first</td>
        <td>second</td>
    </tr>
    <tr>
        <td>third</td>
        <td>fourth</td>
    </tr>
    <tr>
        <td class="new_color">fifth</td>
        <td>sixth</td>
    </tr>

</table>

</body>
</html>