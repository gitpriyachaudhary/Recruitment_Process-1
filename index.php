<?php
session_start();
include("connection.php");
include("header.php");

$user_email=$_SESSION["email"] ;

//echo $user_email;die();


?>
 
<div class="container text-center">    
  <div class="row">
    <div class="col-sm-3 well">
      <div class="well custom-class">
        
        <img src="images/1.jpg" class="img-circle" height="120" width="200" alt="Avatar">

        <!-- <p><strong>ADMIN</strong></p> -->
        <p><label for="ADMIN" class="admin">ADMIN - <?php echo $user_email;?></label></p>
        
        
        
       
      </div>
      
    </div>
    <div class="col-sm-7">
    
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default text-left">
            <div class="panel-body">
             
            <form class="example" method="POST" action="search_admin.php" style="margin:auto;">
  <input type="text" placeholder="Search.." name="by_name">
  <button type="submit" name="submit"><i class="fa fa-search"></i></button>
</form>



            
            </div>
          </div>
        </div>
      </div>
      
      
      
        <div class="col-sm-18">
          <div class="well">
            <p>
            <a href="view_all.php"><button type="button" class="btn btn-raised btn-success admin-panel" >Applicant Details</button></a>
            <a href="set_interview_schedule.php"><button type="button"  class="btn btn-raised btn-success admin-panel">Set Interview Schedule</button></a><br><br>
            <a href="filter.php"><button type="button" class="btn btn-raised btn-success admin-panel" >Filter</button></a>
            <a href="insert.php"><button type="button" class="btn btn-raised btn-success admin-panel" >Add New Records</button></a><br><br>
            <a href="job_details.php"><button type="button"  class="btn btn-raised btn-success admin-panel" >Job Details</button></a>
            <a href="postjob.php"><button type="button"  class="btn btn-raised btn-success admin-panel" >Post Job</button></a><br><br>
            <a href="images.php"><button type="button"  class="btn btn-raised btn-success admin-panel" >Images</button></a>
            <a href="interview_schedule.php"><button type="button"  class="btn btn-raised btn-success admin-panel" >Interview Schedule</button></a>
            
    
    
    


            </p>
          </div>
       
    
     

</div>

<?php
include("footer.php");
?>