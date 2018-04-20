<!DOCTYPE html>
<html lang="en">

<head>
  <title>AIMBEYOND</title>
  <meta charset="utf-8">
  <script type="text/javascript" src="jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  


<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>







 <script>  
// function validateform(){  
// var name=document.myform.name.value;  
  
  
// if (name==null || name==""){  
//   alert("Name can't be blank"); 
//   document.myform.name.focus();  
  
//   return false;  
// }
//   }    
</script>


  <style>


     .container {
      text-align: center;
      margin-bottom:3%;
      width: 100%;
    }
    .container0 {
     
      text-align: center;
      padding-bottom: 2px;
      margin-bottom:4%;
      width:100%;
    }
    table {
   width:100%;
}
    th, td{
        padding:1%;
        text-align: center;

    }
    .btn-warning{
        float:right;
        margin-top:8px;
        margin-bottom: 10px;

    }
    .btn-info{
        float:right;
        margin-top:8px;
        margin-right: 9px;
    }
    
    .container1{
     
      text-align: center;
      padding-bottom: 2px;
      width:100%;
    }

    .container2{
     
      text-align: center;
      padding-bottom: 2px;
      width:100%;
    }

    .container3{
      
      text-align: center;
      padding-bottom: 2px;
      width:100%;
    }
    .admin-panel{
    font-size:22px;
    background-color:#9cb85c;

    }
   

    .input-group-addon {
   color: #fff;
   background-color: #337ab7;
}
.form_search{
  text-align: center;
  margin-bottom: 40px;
  margin-top: 30px;

}


}
label{
  text-align: left !important;
}
#qualification{
  color:red;
}


.panel-body {
    padding: 0px;
}
.img-circle {
    
    margin-bottom: 50px;
}

.well{
  min-height:565px;
}

    .footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: black;
      color: white;
      text-align: center;
    }

.btn-square {
  border-radius: 0 !important;
}







form.example input[type=text] {
    padding: 10px;
    font-size: 17px;
    border: 1px solid grey;
    float: left;
    width: 80%;
    background: #f1f1f1;
}

form.example button {
    float: left;
    width: 20%;
    padding: 10px;
    background: #2196F3;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
    margin-bottom:%;
}

form.example button:hover {
    background: #0b7dda;
}

form.example::after {
    content: "";
    clear: both;
    display: table;
}
.admin{
  font-size: 20px;
  color: red;
}


  .custom-class{
    border:none;
  }

  </style>







</head>

<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">AIMBEYOND</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active">
            <a href="index.php">HOME</a>
          </li>
          <li>
            <a href="#">SERVICES</a>
          </li>
          <li>
            <a href="#">CONTACT US</a>
          </li>
          <li>
            <a href="#">ABOUT US</a>
          </li>
        </ul>

   
<?php


session_start();
include("connection.php");


if (isset($_SESSION["email"]))
{

?>
<a href="logout.php" >
<button type="button" class="btn btn-info" name="logout">LogOut</button></a>

<?php }
?>

                



   </div>  
</div> 




    
  </nav>
