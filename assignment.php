<!DOCTYPE html>
<?php 
require_once('tabledata.php');
require_once('tableclass.php');
?>
<html>
<head>
    <meta charset="utf-8">
    <title>STUDENT TEACHER INTERACTION</title>
    <meta name="viewport" content="width=device-width", initial-scale="1.0">
    <link rel="stylesheet" href="style.css">
    <style>    
div.c {
  font-size: 150%;
  font-family: verdana;
  padding : 10px 25px 10px 550px;  
  background: url("imgs/pic1.jpeg");
  background-repeat: no-repeat;
  background-size: auto;  
  }
div.a
{  
  padding :25px;
  font-family : verdana;
  background-color:lightblue;
}
</style>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
  <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">STUDENT TEACHER INTERACTION</label>
      <ul>
      <li><a  href="index.php">Announcement</a></li>
        <li><a href="timetable.php">Timetable</a></li>
        <li><a href="subject.php">Resources</a></li>
        <li><a class="active" href="assignment.php">Assignment</a></li>
        
      </ul>
    </nav>
    <div class="a">

<h1><center>WELCOME !!!</center></h1>
<center><h1>ASSIGNMENTS TO BE SUBMITTED</h1></center>
<center><h3>UPCOMING </h3>
</div>
<div class="c">
<?php echo "<br>"; 

?>

<span>&#9733;</span>
<?php 
echo $ass1->get_title();
echo "<br>";
echo $ass1->get_description();
echo "<br>";
echo $ass1->get_due();
echo "<br>";
echo "<br>";
?>
<span>&#9733;</span>
<?php
echo $ass2->get_title();
echo "<br>";
echo $ass2->get_description();
echo "<br>";
echo $ass2->get_due();
echo "<br>";
echo "<br>";

?>
<span>&#9733;</span>
<?php
echo $ass3->get_title();
echo "<br>";
echo $ass3->get_description();
echo "<br>";
echo $ass3->get_due();
echo "<br>";

?>



    
  </body>
    


</html>