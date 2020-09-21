<?php include "myphp.php"; ?>
<!doctype html>
<html>
<head>
<title>Creat</title>    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
<link rel="stylesheet" href="css/arabic.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">    
    <link rel="stylesheet" href="css/login">
</head>
<body>
<div class="overlay"></div>        
<div class="container" style="height:700px; margin-top:30px;" id="sign">
<form method ="post">
<h1>انشاء حساب جديد</h1>    
<h3>مرحبا بك في موقع <span>وعي</span> </h3>
<input class="inp" type="text" placeholder="الاسم" name="username">     
<input class="inp" type="text" placeholder="الايميل" name="email"> 
<input class="inp" type="text" placeholder="السن" name="age">     
<input class="inp" type="password" placeholder="كلمة السر" name="password"> 
<input class="inp" type="password" placeholder="اعادة كلمة السر" name="repassword"> 
<input type="submit" class="btn btn-success" value="انشاء حساب" id="creat" name="creat">  
<br>
<br>
<h4>انشاء حساب بواسطة</h4>
<br>
<a href="#" class="fa fa-facebook"></a>    
<a href="#" class="fa fa-twitter"></a>    
<a href="#" class="fa fa-google"></a>        
    <br>
    <br>
</form>    
</div>    
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="js/main.js"></script>        
</body>    
</html>