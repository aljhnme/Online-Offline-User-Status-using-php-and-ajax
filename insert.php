<?php 

   session_start();
   include 'mysqli.php';

   $sql="INSERT INTO `d_user`(`username`,`password`) 
                      VALUES ('".$_POST['uname']."','".$_POST['psw']."')";


    if ($connect->query($sql)) 
    {   
        $user_id=$connect->insert_id;
        $_SESSION['user_id']=$user_id;
    	echo "succeeded"; 
    }

?>