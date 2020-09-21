<?php include "myphp.php"; ?>
<!doctype html>
<html>
<head>
<title>Do you know?</title>  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
<link rel="stylesheet" href="css/arabic.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">        
    <link rel="stylesheet" href="css/ui.css">
    <style>
        .container{
            background-image: url(images/32aa55c7a06db911f5d90941ed174c06.jpg);
            background-size: cover;
            position: relative;
            width: 80%;
            height: 50%;
            padding: 15% 2% 2% 10%;
            margin: 7% auto;
            color: white;
            opacity: 0.975;
            border-radius: 15px;
        }
        .overlay{
    height: 100%;
    width:100%;
    position: absolute;
    left:0;
    top:0;
    background-color:black;
    opacity: 0.7;
     border-radius: 15px;        
    z-index: -1;
}
        .mywords{
            width: 115%;
            padding: 20px;
            margin-right: 0;
            
        }
        h1{
            text-align: center;
            margin-top : 6%
        }
.navbar #navbarNav ul li a{
    color:white;
    padding: 10px 30px;
    background-size: cover;
    border-radius: 5px;
}    
    .navbar #navbarNav ul li a i:hover{
    color:black;
}    
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="ui.php"><i class="fa fa-home"></i>الرئيسية</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="Exames_list.php"><i class="fa fa-list-alt"></i>التصنيفات</a>
        </li>   
        <li class="nav-item">
        <a class="nav-link" href="who.php"><i class="fa fa-lightbulb-o"></i>
اقوال مأثورة</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="what.php"><i class="fa fa-question-circle-o" ></i>
هل تعلم</a>
        </li>  
        <li class="nav-item">
        <a class="nav-link" href="entertainment.php"><i class="fa fa-smile-o"></i>
اختبارات مسلية</a>
        </li>   
    </ul>
  </div>
</nav>
<h1>هل تعلم..؟</h1>    
 <?php 
 while($row = mysqli_fetch_array($re)){
 echo "<div class='container' style='background-image: url(images/".$row['image'].".jpg'>";
 echo "<div class='overlay'></div>";
 echo "<div class='mywords'>";
 echo "<p>".$row['caption']."</p>";
 echo "</div>";
 echo "</div>";
}
 ?>   
<div class="social">
<p>جميع حقوق النشر محفوظة</p> 
<br>    
<a href="#" class="fa fa-facebook"></a>    
<a href="#" class="fa fa-twitter"></a>    
<a href="#" class="fa fa-instagram"></a>    
<a href="#" class="fa fa-google"></a>    
</div>            
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="js/main.js"></script>       
</body>    
</html>    
