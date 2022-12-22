<?php
include("db.php");
  
?>


<div class="panel panel-default">
    <div class="panel panel-heading">
    <?php $result = mysqli_query($con, "select * from hostel_records where date='$_POST[date]'");
     $row = mysqli_fetch_array($result);
     ?>
        <div class="panel panel-body">
        <h2>ANALYSIS ON <?php echo $row['date']; ?>  </h2>
               <table class="table table-striped">
                <tr>
                <th>#SERIAL NUMBER</th>
                <th>STUDENT NAME</th>
                <th>ROLL_NO</th>
                <th>DURATION OF BEING OUTSIDE</th>
</tr>
               <?php    $serialnumber = 0;
               $counter = 0;
                while($row=mysqli_fetch_array($result)){
                   $serialnumber++;
                   
                ?>
                <tr>

                <td><?php echo $serialnumber; ?></td>
                <td><?php echo $row['name']; ?>
                
                </td>
                <td><?php echo $row['roll_number']; ?>
                
            </td>
                <td>
                <?php echo $row['duration']; ?>
                </td>
                </tr>
                <?php
                   $counter++;
                ?>


               <?php }
               ?>

                </table>
                <a class="btn btn-success" href="index.php">BACK TO HOME</a>
                


        


        </div>


</div>