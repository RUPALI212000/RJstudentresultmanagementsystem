
<?php
session_start();
include("header.php");
include("dbcorn.php");
?>
 <?php
    $id=$_SESSION['id'];
    $c = "SELECT * from user where id=$id";
    $d = mysqli_query($con,$c);
    while ($info=mysqli_fetch_array($d))
     {

      ?>
      <center>
      <div class="row">
        <div class="col-md-6">
          <?php 
          echo "ID:";
           echo $info['id'];
          ?>
        </div>
        <div class="col-md-6">
          <?php 
          echo "Course:";
           echo $info['course'];
          ?>
        </div>
      </div>
       <div class="row">
        <div class="col-md-6">
          <?php 
          echo "Name:";
           echo $info['uname'];
          ?>
        </div>
        <div class="col-md-6">
          <?php 
          echo "Department:";
           echo $info['udepart'];
          ?>
        </div>
      </div>
    </center>
       <?php

    }
    ?>
<br>
<table class="table">
  <thead>
    <th colspan="7" class=" text-center text-warning bg-dark">STUDENT RESULT</th>
    <tr>
      <th scope="col">SUBJECT1</th>
      <th scope="col">SUBJECT2</th>
      <th scope="col">SUBJECT3</th>
      <th scope="col">SUBJECT4</th>
      <th scope="col">SUBJECT5</th>
      <th scope="col">TOTAL MARKS</th>
      <th scope="col">PERCENTAGE</th>
    </tr>
  </thead>
  <tbody>
  	 <?php
    $id=$_SESSION['id'];
    $a = "SELECT * from result where user_id=$id";
    $b = mysqli_query($con,$a);
    while ($result=mysqli_fetch_array($b))
     {

      ?>
    <tr>
      <td><?php  echo $c=$result['sub1']?></td>
      <td><?php  echo $d=$result['sub2']?></td>
      <td><?php  echo $e=$result['sub3']?></td>
      <td><?php  echo $f= $result['sub4']?></td>
      <td><?php  echo $g= $result['sub5']?></td>
      <td><?php echo $total=$c+$d+$e+$f+$g;?></td>
      <td><?php echo $P=($total/5)?>%</td>
    </tr>



    <?php

    }
    ?>
  </tbody>
</table>
<?php include("footer.php"); ?>