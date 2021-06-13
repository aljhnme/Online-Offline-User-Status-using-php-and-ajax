<?php

 include 'mysqli.php';

 $sql="SELECT * FROM `d_user`";

 $fetch_user=$connect->query($sql);
 while ($row = $fetch_user->fetch_assoc()) 
   {
 	 ?>
 	   <div class="list list-row block">
         <div class="list-item" data-id="4">
            <div><a href="#" data-abc="true"><span class="w-48 avatar gd-success"><img src="https://img.icons8.com/color/48/000000/guest-male.png" alt="."></span></a></div>
            <div class="flex"> <a href="#" class="item-author text-color" data-abc="true"><?php echo $row['username']; ?></a>
                            
          </div>
         <div class="no-wrap">
           <div class="item-date text-muted text-sm d-none d-md-block">
            <?php 
              if (date('i') == $row['status']) 
              {
                echo"online";
              }else{
              	echo"offline";
              }
            ?>
           </div>
         </div>
      </div>
    </div>
 	 <?php
     }
     ?>