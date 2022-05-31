<?php include "inc/header.php" ?>
   <?php
   $sql = "SELECT * FROM Feedback";
   $result = mysqli_query($conn, $sql);
   $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
   ?>
    <h2>Feedback</h2>

    <?php if(empty($feedback)){
 echo "There is no feedback";
    }
    ?>



<?php foreach($feedback as $item):?>
    <div class="card my-3 w-75">
     <div class="card-body">
     <?php echo $item["Text"];?>
     <div>
       By <?php echo $item["Name"]?> on <?php echo $item["Date"]?> 
     </div>
     </div>
   </div>
<?php endforeach;?>
  



<?php include "inc/footer.php" ?>
