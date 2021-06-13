<?php 

  include 'mysqli.php';
  session_start();

  $sql_up_st="UPDATE `d_user` SET `status`='".date('i')."' 
             WHERE user_id='".$_SESSION['user_id']."'";

   $connect->query($sql_up_st);

?>