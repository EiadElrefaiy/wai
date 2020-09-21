<?php include "myphp.php"?>
<!doctype html>
<html>
<head>
<title>Admin</title>  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
<link rel="stylesheet" href="css/arabic.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">        
    <link rel="stylesheet" href="css/ui.css">
    <style>
        .container{
            text-align: center;
            margin: 5% auto;
            border: 1px solid #343A40;
        }
        
        .container h2{
            margin: 30px 0;
        }
        .container input{
            height: 35px;
            margin: 15px 0;
        }
        .container input[type="file"]{
            height: 50%;
        }
        .btn{
          margin-bottom: 2%;  
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
        <a class="nav-link" href="ui.php">الرئيسية</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="Exames_list.php">التصنيفات</a>
        </li>   
        <li class="nav-item">
        <a class="nav-link" href="who.php">اقوال مأثورة</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="what.php">هل تعلم</a>
        </li>  
        <li class="nav-item">
        <a class="nav-link" href="entertainment.php">اختبارات مسلية</a>
        </li>    
        <li class="nav-item">
        <a class="nav-link" href="login.php">تسجيل الدخول</a>
        </li>
    </ul>
  </div>
</nav> 
<form method="post">
<div class="row">    
<div class="col-12 col-lg-12 col-md-12 col-sm-12">        
<div class="container">
    <h2>اضافة اختبار</h2>
<input type = "text" placeholder="اسم الصورة" name="back_img">    
<input type="text" placeholder="اسم الاختبار" name="quiz_name">    
<input type="text" placeholder="نوع الاختبار" name="level">    
<input type="text" placeholder="عدد الاسئلة" name="ques_num">
<input type="text" placeholder="العنوان" name="addr">
<br>    
<button name="upload3" class="btn btn-secondary">اضافة</button>
<button class="btn btn-secondary">تعديل</button>        
<button class="btn btn-secondary">حذف</button>            
</div>    
</div>    
</div>   
</form>
<form method="post"> 
<div class="row">  
<div class="col-12 col-lg-12 col-md-12 col-sm-12">        
<div class="container">
    <h2>اضافة مقولة</h2>
<input type="text" placeholder="اسم الصورة" name="char_img">    
<input type="text" placeholder="المقولة" name="word">    
<input type="text" placeholder="القائل" name="char">  
<br>    
<button name="upload2" class="btn btn-secondary">اضافة</button>        
<button class="btn btn-secondary">تعديل</button>        
<button class="btn btn-secondary">حذف</button>        
</div>    
</div>    
</div>   
</form>
<form method="post">
<div class="row"> 
<div class="col-12 col-lg-12 col-md-12 col-sm-12">    
<div class="container">
    <h2>اضافة معلومة</h2>
<input type = "text" name ="image" placeholder="اسم الصورة">    
<input type="text" name="caption" placeholder="المعلومة"> 
<br>    
<button name ="upload" class="btn btn-secondary">اضافة</button> 
<button class="btn btn-secondary">تعديل</button>        
<button class="btn btn-secondary">حذف</button>            
</div>    
</div>    
</div>  
</form>  
<form method="post">
<div class="row">     
<div class="col-12 col-lg-12 col-md-12 col-sm-12">        
<div class="container">
    <h2>اضافة سؤال</h2>
<input name="number" type="text" placeholder=" رقم السؤال"> 
<input name="question" type="text" placeholder="السؤال"> 
<input name="correct" type="text" placeholder="الاختيار الاول والصحيح"> 
<input name="answer2" type="text" placeholder="الاختيار الثاني"> 
<input name="answer3" type="text" placeholder="الاختيار الثالث"> 
<input name="answer4" type="text" placeholder="الاختيار الرابع"> 
<br>    
<button name="upload4" class="btn btn-secondary">اضافة</button>
<button class="btn btn-secondary">تعديل</button>        
<button class="btn btn-secondary">حذف</button>            
</div>    
</div>      
</div>      
</form>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="js/main.js"></script>       
</body>    
</html>    