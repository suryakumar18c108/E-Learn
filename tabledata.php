

<?php
require_once('tableclass.php');
?>
<?php
        $day1 = new table(array("Discrete Mathematics","DBMS","Design thinking","lunch","Algorithms "));
        $day2 = new table(array("Discrete Mathematics","OS","Constitution of India","lunch","  - "));
        $day3 = new table(array("DBMS","Constitution of India","-","lunch","Algorithms  Lab"));
        $day4 = new table(array("Professional English","DBMS","Design thinking","lunch","Algorithms "));
        $day5 = new table(array("OS","DBMS","Discrete Mathematics","lunch","OS lab"));
        $tt = array($day1,$day2,$day3,$day4,$day5);


        $IOT= new Subdivision("Webminar on Internet of Things(IOT)","30-09-2020","10am-12pm");
        $DSA = new Subdivision("Coding Challenge(HackerRank)","04-10-2020","6pm-7.30pm");
        $dbms = new Subdivision("DBMS-SQL MASTER QUIZ COMPETITION","07-10-2020","4pm-5pm");
        
        
        $ass1 = new Assignment("DBMS","Draw the Schema diagram for the library management","08.10.2020(06:30pm)");
        $ass2 = new Assignment("OS","Design the Disk Scheduling for the following:21,14,59,63,24,82,16,30,53,67 t","21.10.2020(05:00pm)");
        $ass3 = new Assignment("DISCRETE MATHEMATICS"," Describe universal instanstiasion with an example","22.10.2020(01:30pm)");
        
        
        
        
?>  

