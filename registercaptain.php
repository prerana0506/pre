<html>
<head>
<style>
@-webkit-keyframes roll {
  from { -webkit-transform: rotate(0deg) }
  to { -webkit-transform: rotate(360deg) }
}
@-moz-keyframes roll {
  from { -moz-transform: rotate(0deg) }
  to { -moz-transform: rotate(360deg) }
}
@keyframes roll {
  from { transform: rotate(0deg) }
  to   { transform: rotate(360deg) }
}
body {
  -moz-animation-name: roll;
  -moz-animation-duration: 1s;
  -moz-animation-iteration-count: 1;
  -webkit-animation-name: roll;
  -webkit-animation-duration: 1s;
  -webkit-animation-iteration-count: 1;
}
input[type=text], select {
    width: 25%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 2px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 20%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
background-image: url("bbb.jpg");
    background-color: #f2f2f2;
    padding: 200px;
}
body {
    background-image: url("p1.jpg");
}
</style>
</head>
<body>


<h1 align="right" style="color:orange;"><b>UPDATE TEAM CAPTAIN</h1>

<form action="updatecaptain.php" method="post" align="right" style="color:orange;">
TEAM ID  : <input type="text" name="pd"><br>
NEW CAPTAIN  : <input type="text" name="cap"><br>

<input type="submit" value="UPDATE">

</form>
</body>
</html>