<?php
include('Connect.php');
$query="SELECT * FROM student_registration";
$result=mysqli_query($conn,$query);


?>


<html>
<head>
    <title>Irfan</title>
</head>
<body>

    <p>The given is a name of a student.</p>
    <table>
    <tr>
       <td>name</td>
       
    </tr>
    <tr>
       <?php
       error_reporting(0);
       
       for($row=1;$row=mysqli_fetch_assoc($result);$row++){
        ?>
        <td>The student name is <?php echo $row['name']?></td>
        


   </tr> 
      <?php
      
       }

 
      ?>
    
    </table>


    
</body>
</html>


<!--?php
error_reporting(0);
include('Connect.php');
$query="SELECT * FROM student_registration";
$data=mysqli_query($conn,$query);
//echo $data;

?-->