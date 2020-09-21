    $(document).ready(function(){
       $("#but").click(function(){
          $("#ques").fadeIn(function(){
              document.getElementById("but").style.backgroundColor = "#F35055";
              document.getElementById("but").innerHTML = "انهي الاختبار";
              $("#but").click(function(){
                 location.href = "exam.php";  
                 alert("انتهى الاختبار");
              });
          }); 
           $(".btn").click(function(){
               $("#question1").fadeOut(function(){
                   $("#question2").fadeIn();
               });
           });
       });
        $("#creat").click(function(){
           $("#sign").slideUp(function(){
               $("#success").slideDown();
           });
            
        });
    });
           document.getElementById("log").innerHTML = "حسابك";
