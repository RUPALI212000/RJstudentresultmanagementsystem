<?php 
include("dbcorn.php");
$id=$_GET['id'];
$data="SELECT*FROM user WHERE id=$id";
$result=mysqli_query($con,$data);
$a=mysqli_fetch_array($result);
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>FORM</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
	<div class="container">
    <center><h1 class="text-warning bg-dark">FORM</h1></center>
	<form method="post" action="update.php">
    <input type="hidden" name="id" value="<?php echo$a['id']?>" >
  <div class="form-floating mb-3">
  <input type="text" class="form-control" name="uname" placeholder=" User Name" required value="<?php echo$a['uname']?>">
  <label for="floatingInput">User Name</label>
  <br>
  <div class="form-floating mb-3">
  <input type="text" class="form-control" name="uemail" placeholder="UserEmail" required value="<?php echo$a['uemail']?>">
  <label for="floatingInput">User Email</label>
  <br>
  User course:
  <select name="course" class="form-select">
      <option value="select">select</option>
      <option
       <?php
      if ($a['course']=='B.Tech')
       {
        echo "selected";
      }
        ?>
       value="B.Tech">B.Tech</option>
      <option
      <?php
      if ($a['course']=='M.Tech')
       {
        echo "selected";
      }
        ?>
       value="M.Tech">M.Tech</option>
      <option 
      <?php
      if ($a['course']=='MBA')
       {
        echo "selected";
      }
        ?>
      value="MBA">MBA</option>
  </select>
  <br>
  User dept:
  <select name="udepart" class="form-select">
      <option value="select">select</option>
      <option 
       <?php
      if ($a['udepart']=='CSE')
       {
        echo "selected";
      }
        ?>
      value="CSE">CSE</option>
      <option
      <?php
      if ($a['udepart']=='IT')
       {
        echo "selected";
      }
        ?>
       value="IT">IT</option>
      <option 
      <?php
      if ($a['depart']=='EC')
       {
        echo "selected";
      }
        ?>
      value="EC">EC</option>
  </select>
  <br>
  User role:
  <select name="role" class="form-select">
      <option value="select">select</option>
      <option
       <?php
      if ($a['role']=='Teacher')
       {
        echo "selected";
      }
        ?>
       value="Teacher">Teacher</option>
      <option 
       <?php
      if ($a['role']=='Student')
       {
        echo "selected";
      }
        ?>
      value="Student">Student</option>

  </select>
  <br><br>
  <div class="form-floating mb-3">
  <input type="text" class="form-control" name="password" placeholder="Password" required value="<?php echo$a['password']?>">
  <label for="floatingInput">Password</label>
  <br>
  <button type="submit" name="submit" value="submit" class="btn btn-info">Submit</button>
</form>
</div>
</body>
</html>