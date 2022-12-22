<?php
include("db.php");
?>

<div class="panel panel-default">
    <div class="panel panel-heading">
       
        <div class="panel panel-body">
            
               <table class="table table-striped">
                <tr>
                <th>SERIAL NUMBER</th>
                <th>DATES</th>
                <th>SHOW DATA</th>
</tr>
               <?php $result = mysqli_query($con, "select distinct date from hostel_records");
               $serialnumber = 0;
                while($row=mysqli_fetch_array($result)){
                   $serialnumber++;
                   
                ?>
                <tr>

                <td><?php echo $serialnumber; ?></td>
                <td><?php echo $row['date']; ?>
                </td>
                <td>
                    <form action="show_dataondate.php" method="POST">
                        <input type="hidden" value="<?php echo $row['date']?>" name="date">
                        <input type="submit" class="btn btn-primary" value="SHOW DATA">
                    </form>
                </td>
                </tr>
               


               <?php }
               ?>



                </table>
                <a class="btn btn-success" href="all_students.php">DISPLAY ALL STUDENTS</a>
                



        </div>


</div>