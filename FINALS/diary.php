<html>
<style>
  header {
  
  text-align:center;
  font-family: courier new;
  font-size: 30px;


}
body{
  background-color:lightgray;
text-align:center;
}

#head{
  text-align: center;
  font-family: courier new;
  font-size: 80px;
  color: black;
  background-color:none;
  height: 100px;
}
.topnav {
  background-color:none;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 15px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: red;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color:teal;
  color: white;
}
b{
  font-size: 25px;
  color: black;
}

</style>
<br><br><br>
 <header id = "topnav">Diary Listing </header><br> 
<body class = "form1">
      <div class = "top">

      <h2><b></b></h2><br><?php echo $_POST["top"]; ?> 
      <div class = "cat">
      <b></b><br> <?php echo $_POST["cat"]; ?> </div>
      <div class = "con">
      <i><b></b></i><br> <?php echo $_POST["con"]; ?></div>
      <h5><b></b></h5><br> <?php echo $_POST["date"]; ?> 
<br>
<br>
<br>

<div class="topnav">
  <a class="active" href="http://localhost/FINALS/diary.html">Back</a>
  
</div>
   </body>
</html>