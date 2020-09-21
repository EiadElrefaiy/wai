<?php include "myphp.php" ?>
<!doctype html>
<html>
<head>
<title>Account</title>  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
<link rel="stylesheet" href="css/arabic.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">        
    <link rel="stylesheet" href="css/ui.css">
        <style>
        .container{
            text-align: center;
            margin: 10% auto;
            padding: 10px;
            border: 1px solid #343A40;
            border-radius: 8px;
        }
            #result{
                background-color: #343A40;
                color: #EFEFEF;;
                font-size: 20px;
                border: 2.5px solid #1A73E8;  

            }
            .update{
                padding: 5px;
                height: 30px;
                width: 58%;
                display: none;
            }
            #email{
                width:78%;
            }
            #data{
              display:none;
            }
            .qu{
              display:none;
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
    <script src="js/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
      $("#update").click(function(){
          $(".update1").toggle();
          $(".update").toggle();
      });  
    });
    </script>
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
<?php while($row = mysqli_fetch_array($r)){;
echo  '<div class="container qu" id="'.$row['name'].'">
<div class="row">  
<div class="col-12 col-lg-3 col-md-6 col-sm-12 col-xs-12">    
<span class="inf">اسم المستخدم : <span class="update1">'.$row['name'].'</span><input class="update" type="text" placeholder="تعديل الاسم"></span>
</div>  
<div class="col-12 col-lg-3 col-md-6 col-sm-12 col-xs-12">     
<span class="inf">الايميل : <span class="update1">'.$row['email'].'</span><input id="email" class="update" type="text" placeholder="تعديل الايميل"></span> 
</div>    
<div class="col-12 col-lg-3 col-md-6 col-sm-12 col-xs-12">         
<span class="inf">السن : <span class="update1">'.$row['age'].' عام</span><input class="update" type="text" placeholder="تعديل السن"></span> 
</div>     
<div class="col-12 col-lg-3 col-md-6 col-sm-12 col-xs-12">             
<span class="inf">كلمة السر : <span class="update1">'.$row['password'].'</span><input class="update" type="text" placeholder="تعديل كلمة السر"></span>
</div>         
</div>
<a href="#" id="update">تعديل الحساب</a>    
</div>
</div>';
}
?> 
</div>    
<div class="container" id="result">
<div class="row">  
<div class="col-12 col-lg-12 col-md-12 col-sm-12">    
<span class="inf">عدد الاختبارات <span>100</span></span>
</div>  
<div class="col-6 col-lg-6 col-md-6 col-sm-6">     
<span class="inf">نجح في : <span></span>50</span> 
</div>    
<div class="col-6 col-lg-6 col-md-6 col-sm-6">         
<span class="inf">رسب في : <span>50</span></span> 
</div>     
<div class="col-12 col-lg-12 col-md-12 col-sm-12">             
<span class="inf">نسبة النجاح : <span>50%</span></span> 
</div>         
<div class="col-12 col-lg-12 col-md-12 col-sm-12">             
<span class="inf">عدد الاجابات الصحيحة <span>111500</span>
 من اجمالي <span>1123100</span> بنسبة <span>%50</span></span> 
</div>                 
<div class="col-12 col-lg-12 col-md-12 col-sm-12">             
<span class="inf">التقييم : <span>انت ممتاز ومثقف تستحق التحية والتقدير</span></span> 
</div>             
</div> 
</div>        
<div class="social">
<p>جميع حقوق النشر محفوظة</p> 
<br>    
<a href="#" class="fa fa-facebook"></a>    
<a href="#" class="fa fa-twitter"></a>    
<a href="#" class="fa fa-instagram"></a>    
<a href="#" class="fa fa-google"></a>    
</div> 
<script         src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="js/main.js"></script>       
</body>    
</html>