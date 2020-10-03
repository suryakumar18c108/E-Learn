<!DOCTYPE html>
<?php 
require_once('tabledata.php');
require_once('tableclass.php');
?>
<html>
<head>
    <meta charset="utf-8">
    <title>STUDENT TEACHER INTERACTION</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
        <li><a class="active" href="timetable.php">Timetable</a></li>
        <li><a href="subject.php">Resources</a></li>
        <li><a href="assignment.php">Assignment</a></li>
      </ul>
    </nav>

<table>

  <tr>
    <th> Date </th>
    <th>9am-10am</th>
    <th>10am-11am</th>    
    <th>11am-12pm</th>
    <th>LUNCH</th>
    <th>1pm-2pm</th>
  </tr>
  <?php $d = 4;?>
<?php foreach($tt as $dt): ?>
   <?php $display = $dt->get_day(); ?>   
  <tr>  
    <td><?php echo "0".$d."-10-2020";?></td>  
    <td><?php echo $display[0]?></td>
    <td><?php echo $display[1]?></td>
    <td><?php echo $display[2]?></td>
    <td><?php echo $display[3]?></td>
    <td><?php echo $display[4]?></td>    
    <?php $d+=1; ?>
  </tr>
<?php endforeach ?>
</table>
    
  </body>
    


</html>