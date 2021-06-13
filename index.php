<!DOCTYPE html>
<html>
<head>
	<?php  
   session_start();
   if (!isset($_SESSION['user_id'])) 
     {
     	 header('location:register.php'); 
     }
	?>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="insert_online_ofline.js"></script>
</head>
<body>
  <div class="page-content page-container" id="page-content">
  	<div class="padding">
  		<div class="row">
  			<div class="col-sm-6">
  				<div class="list_user">
  					
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
</body>
<script type="text/javascript">
	$(document).ready(function(){
      setInterval(function(){

          $.ajax({
            url:"fetch_user.php",
            success:function(data)
            {
              $(".list_user").html(data);
            }
          })
        },2000)
	});
</script>
</html>