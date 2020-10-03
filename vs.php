<!DOCTYPE html>

<?php
require_once('tableclass.php');
require_once('tabledata.php');
?>
<html>
<head>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style>    
div.c {
  font-size: 150%;
  font-family:verdana;
  padding : 10px 25px 10px 550px;  
  background: url("imgs/pic0.jpeg");
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
</head>


<body>
  <div class="a">

<h1><center>WELCOME !!!</center></h1>
<center><h1>BULLET - IN BOARD</h1></center>
<center><h3>UPCOMING EVENTS</h3>
</div>
<div class="c">
<?php echo "<br>";?>

<span>&#9733;</span>
<?php 
echo $IOT->get_ename();
echo "<br>";
echo $IOT->get_date();
echo "<br>";
echo $IOT->get_time();
echo "<br>";
echo "<br>";
?>
<span>&#9733;</span>
<?php
echo $DSA->get_ename();
echo "<br>";
echo $DSA->get_date();
echo "<br>";
echo $DSA->get_time();
echo "<br>";
echo "<br>";

?>
<span>&#9733;</span>
<?php
echo $dbms->get_ename();
echo "<br>";
echo $dbms->get_date();
echo "<br>";
echo $dbms->get_time();
echo "<br>";

?>


</div>
</div>
</body>
</html>
