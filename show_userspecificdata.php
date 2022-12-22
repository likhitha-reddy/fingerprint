<?php
include("db.php");
  
?>


<div class="panel panel-default">
    <div class="panel panel-heading">
    <?php $result = mysqli_query($con, "select * from hostel_records where name='$_POST[name]'");
     $row = mysqli_fetch_array($result);
     ?>
        <div class="panel panel-body">
        <h2>ANALYSIS OF <?php echo $row['name']; ?>  </h2>
               <table class="table table-striped">
                <tr>
                <th>S_NO</th>
                <th>DATE</th>
                <th>ROLL_NO</th>
                <th>DURATION</th>
</tr>
               <?php
               $serialnumber = 0;
               $counter = 0;
                while($row=mysqli_fetch_array($result)){
                   $serialnumber++;
                   
                ?>
                <tr>

                <td><?php echo $serialnumber; ?></td>
                <td><?php echo $row['date']; ?>
                
                </td>
                <td><?php echo $row['roll_number']; ?>
                
            </td>
                <td>
                <?php echo $row['duration']; ?>
                </td>
                <td>
                    <form action="showuseranddatespecific.php" method="POST">
                        <input type="hidden" value="<?php echo $row['date'] ?>" name="date">
                        <input type="hidden" value="<?php echo $row['name'] ?>" name="name">
                        <input type="submit" class="btn btn-primary" value="SHOW DAILY ANALYSIS">
                    </form>
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