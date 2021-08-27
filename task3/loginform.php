<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>loginform</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

     <div class="container-fluid">
      <div class="container">
        <div class="row">
          <center><h2> LOGIN FORM</h2></center>
          <div class="col-md-3">
            
          </div>
           <div class="col-md-6">
            <form  action="login.php" method="POST">
          <p>Username</p>
          <input type="text" name="uname" value="" placeholder="enter your username">
          <p>password</p>
          <input type="text" name="password" value="" placeholder="enter your password">
          <br><br>
          <button type="submit" value="submit" name="submit">submit</button></form>
          </div>
           <div class="col-md-3">
            
          </div>
        </div>

      </div>

  
     </div>
</body>
</html>