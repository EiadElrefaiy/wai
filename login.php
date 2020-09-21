<?php include "myphp.php" ?>
<!doctype html>
<html>
<head>
<title>Login</title>    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
<link rel="stylesheet" href="css/arabic.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">    
    <link rel="stylesheet" href="css/login">
    <style>
    #logi{
    margin-top: 6%;
}
    </style>
</head>
<body>
<div class="overlay"></div>        
<div class="container" id="logi">
<form method ="post">
<h1>تسجيل الدخول</h1>    
<h3>مرحبا بك في موقع <span>وعي</span> </h3>
<input class="inp" type="text" placeholder="اسم المستخدم" name="username_log">    
<input class="inp" type="password" placeholder="كلمة السر" name="password_log"> 
<input type="submit" class="btn btn-info" value="دخول" name="enter">  
<br>
<br>
<h4>دخول بواسطة</h4>    
<br>
<a href="#" class="fa fa-facebook"></a>    
<a href="#" class="fa fa-twitter"></a>    
<a href="#" class="fa fa-google"></a>        
    <br>
    <br>
<a href="creat.php" style="text-align:right;">انشاء حساب جديد</a>   
    <br>
    <br>
</form>    
</div>    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="js/main.js"></script>        
</body>    
</html>