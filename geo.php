<?php include "myphp.php" ?>
<!doctype html>
<html>
<head>
<title>Quiz</title>  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
<link rel="stylesheet" href="css/arabic.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">        
    <link rel="stylesheet" href="css/ui.css">
    <style>
.navbar #navbarNav ul li a{
    color:white;
    padding: 10px 30px;
    background-size: cover;
    border-radius: 5px;
}    
    .navbar #navbarNav ul li a i:hover{
    color:black;
}    
        .container{
            margin-right:auto;
            text-align: center;
            width: 100%;
        }
        .row{
            width:80%;
            margin: auto;
        }
        .btn-secondary{
            padding: 9px;
        }
        .btn-success{
            width: 100%;
            padding: 8px;
        }
        .ques{
          display:none;
        }
        #the_ques{
            display: none;
        }
        #end{
            background-color: white;
            width: 100%;
            height: 100%;
            position: absolute;
            top:0;
            left:0;
            z-index: -1;
        }
    </style>
</head>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script>
        $(document).ready(function(){
           $("#but").click(function(){
              this.style.backgroundColor = "red";
               this.innerHTML = "انهي الاختبار";
               $("#<?php $x = rand(46,47); echo $x;?>").fadeIn();
               $("#the_ques").fadeIn();
               document.getElementById("ques_num").innerHTML = 1;
               $("#but").click(function(){
                document.getElementById("end").style.zIndex = 100000;
                   alert(" لقد اجبت " + x + " من 22 سؤال بشكل صحيح ");
                   location.href = "geo.php";

               });
           });
             var x = 0;
            $(".correct").click(function(){
            x++;
            });
            $(".<?php echo $x;?>").click(function(){
               $("#<?php echo $x;?>").fadeOut(function(){
                   $("#<?php $x = rand(48,49); echo $x;?>").fadeIn();
                document.getElementById("ques_num").innerHTML = 2;
               }); 
            });
            $(".<?php echo $x;?>").click(function(){
               $("#<?php echo $x;?>").fadeOut(function(){
                   $("#<?php $x = rand(50,51); echo $x;?>").fadeIn();
                   document.getElementById("ques_num").innerHTML = 3;
               }); 
            });
            $(".<?php echo $x;?>").click(function(){
               $("#<?php echo $x;?>").fadeOut(function(){
                   $("#<?php $x = rand(52,53); echo $x;?>").fadeIn();
                   document.getElementById("ques_num").innerHTML = 4;
               }); 
            });
            $(".<?php echo $x;?>").click(function(){
               $("#<?php echo $x;?>").fadeOut(function(){
                   $("#<?php $x = rand(54,55); echo $x;?>").fadeIn();
                   document.getElementById("ques_num").innerHTML = 5;
               }); 
            });
            $(".<?php echo $x;?>").click(function(){
               $("#<?php echo $x;?>").fadeOut(function(){
                   $("#<?php $x = rand(56,57); echo $x;?>").fadeIn();
                   document.getElementById("ques_num").innerHTML = 6;
               }); 
            });
            $(".<?php echo $x;?>").click(function(){
               $("#<?php echo $x;?>").fadeOut(function(){
                   $("#<?php $x = rand(58,59); echo $x;?>").fadeIn();
                   document.getElementById("ques_num").innerHTML = 7;
               }); 
            });
            $(".<?php echo $x;?>").click(function(){
               $("#<?php echo $x;?>").fadeOut(function(){
                   $("#<?php $x = rand(60,61); echo $x;?>").fadeIn();
                   document.getElementById("ques_num").innerHTML = 8;
               }); 
            });
            $(".<?php echo $x;?>").click(function(){
               $("#<?php echo $x;?>").fadeOut(function(){
                   $("#<?php $x = rand(62,63); echo $x;?>").fadeIn();
                   document.getElementById("ques_num").innerHTML = 9;
               }); 
            });
            $(".<?php echo $x;?>").click(function(){
               $("#<?php echo $x;?>").fadeOut(function(){
                   $("#<?php $x = rand(64,65); echo $x;?>").fadeIn();
                   document.getElementById("ques_num").innerHTML = 10;
               }); 
            });
            $(".<?php echo $x;?>").click(function(){
               $("#<?php echo $x;?>").fadeOut(function(){
                   $("#<?php $x = rand(66,67); echo $x;?>").fadeIn();
                   document.getElementById("ques_num").innerHTML = 11;
               }); 
            });
            $(".<?php echo $x;?>").click(function(){
               $("#<?php echo $x;?>").fadeOut(function(){
                   $("#<?php $x = rand(68,69); echo $x;?>").fadeIn();
                   document.getElementById("ques_num").innerHTML = 12;
               }); 
            });
            $(".<?php echo $x;?>").click(function(){
               $("#<?php echo $x;?>").fadeOut(function(){
                   $("#<?php $x = rand(70,71); echo $x;?>").fadeIn();
                   document.getElementById("ques_num").innerHTML = 13;
               }); 
            });
            $(".<?php echo $x;?>").click(function(){
               $("#<?php echo $x;?>").fadeOut(function(){
                   $("#<?php $x = rand(72,73); echo $x;?>").fadeIn();
                   document.getElementById("ques_num").innerHTML = 14;
               }); 
            });
            $(".<?php echo $x;?>").click(function(){
               $("#<?php echo $x;?>").fadeOut(function(){
                   $("#<?php $x = rand(74,75); echo $x;?>").fadeIn();
                   document.getElementById("ques_num").innerHTML = 15;
               }); 
            });
            $(".<?php echo $x;?>").click(function(){
               $("#<?php echo $x;?>").fadeOut(function(){
                   $("#<?php $x = rand(76,77); echo $x;?>").fadeIn();
                   document.getElementById("ques_num").innerHTML = 16;
               }); 
            });
            $(".<?php echo $x;?>").click(function(){
               $("#<?php echo $x;?>").fadeOut(function(){
                   $("#<?php $x = rand(78,79); echo $x;?>").fadeIn();
                   document.getElementById("ques_num").innerHTML = 17;
               }); 
            });
            $(".<?php echo $x;?>").click(function(){
               $("#<?php echo $x;?>").fadeOut(function(){
                   $("#<?php $x = rand(80,81); echo $x;?>").fadeIn();
                   document.getElementById("ques_num").innerHTML = 18;
               }); 
            });
            $(".<?php echo $x;?>").click(function(){
               $("#<?php echo $x;?>").fadeOut(function(){
                   $("#<?php $x = rand(82,83); echo $x;?>").fadeIn();
                   document.getElementById("ques_num").innerHTML = 19;
               }); 
            });
            $(".<?php echo $x;?>").click(function(){
               $("#<?php echo $x;?>").fadeOut(function(){
                   $("#<?php $x = rand(84,85); echo $x;?>").fadeIn();
                   document.getElementById("ques_num").innerHTML = 20;
               }); 
            });
            $(".<?php echo $x;?>").click(function(){
               $("#<?php echo $x;?>").fadeOut(function(){
                   $("#<?php $x = rand(86,87); echo $x;?>").fadeIn();
                   document.getElementById("ques_num").innerHTML = 21;
               }); 
            });
            $(".<?php echo $x;?>").click(function(){
               $("#<?php echo $x;?>").fadeOut(function(){
                   $("#<?php $x = rand(88,89); echo $x;?>").fadeIn();
                   document.getElementById("ques_num").innerHTML = 22;
               }); 
            });
            $(".<?php echo $x;?>").click(function(){
             alert(" لقد اجبت " + x + " من 22 سؤال بشكل صحيح ");
                location.href = "geo.php";
          });
        });
    </script>    
<body>
<div id="end"></div>
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
<div class="container">
<div class="row"> 
<p style="direction:rtl;" class="col-6 col-lg-6 col-md-6 col-sm-6">جغرافيا</p>   
<p style="direction:ltr;" class="col-6 col-lg-6 col-md-6 col-sm-6">عدد الاسئلة: 22</p>   
<button class="btn btn-success" id="but">ابدأ الاختبار</button>   
<?php
while($row = mysqli_fetch_array($resul)){
  echo'<div class="col-12 col-lg-12 col-md-12 col-sm-12">      
  <div class="ques" id="'.$row['ques_num'].'">
  <p class="col-12 col-lg-12 col-md-12 col-sm-12">'.$row['question'].'</p>';  
 $answers = array('<button class ="btn btn-secondary col-12 col-lg-12 col-md-12 col-sm-12 correct '.$row['ques_num'].'">'.$row['answer1'].'</button>',    
  '<button class ="btn btn-secondary col-12 col-lg-12 col-md-12 col-sm-12 '.$row['ques_num'].'">'.$row['answer2'].'</button>' ,    
  '<button class ="btn btn-secondary col-12 col-lg-12 col-md-12 col-sm-12 '.$row['ques_num'].'">'.$row['answer3'].'</button>' ,   
  '<button class ="btn btn-secondary col-12 col-lg-12 col-md-12 col-sm-12 '.$row['ques_num'].'">'.$row['answer4'].'</button>');
  shuffle($answers);
  foreach($answers as $answer => $value){
    echo $value;
  }    
echo  '
  </div> 
  </div>';
}
?>
<p class="col-12 col-lg-12 col-md-12 col-sm-12" id="the_ques">السؤال <span id="ques_num">0</span></p>
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
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="js/main.js"></script>       
</body>    
</html>    