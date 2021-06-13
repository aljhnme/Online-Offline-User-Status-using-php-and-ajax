<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h2>Register Form</h2>
<form>
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Register</button>

    <div id="alert">
      
    </div>

  </div>
</form>
</body>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){

    $('form').submit(function(e){

        e.preventDefault();
        $.ajax({
            
            url:"insert.php",
            type:"post",
            data:$(this).serialize(),
            success:function(data)
            {
               $("#alert").text(data); 
               if (data == 'succeeded') 
               {
                location.href="index.php";
               }
            }

        });
      });
    });
</script>
</html>
