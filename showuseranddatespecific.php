<?php
include("db.php");
  
?>


<div class="panel panel-default">
    <div class="panel panel-heading">
    <?php $result = mysqli_query($con, "select * from hostel_records where date='$_POST[date]' and name='$_POST[name]'");
               $serialnumber = 0;
               $counter = 5;
               $row = mysqli_fetch_array($result);
                
                   
                ?>
        <div class="panel panel-body">
          <h2>ANALYSIS OF <?php echo $row['name']; ?> ON <?php echo $row['date']; ?> </h2>
               <table class="table table-striped">
                <tr>
                <th></th>
                <th>    LOGIN TIME</th>
                <th>LOGOUT TIME</th>
</tr>
               
                <?php while( $serialnumber<10){
                   $serialnumber++;
                  ?>
                <tr>

                <td><?php echo $serialnumber; ?></td>
                <td><?php echo $row[$counter]; ?>
                <?php
                   $counter++;
                ?>

                <td><?php echo $row[$counter]; ?>
                
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