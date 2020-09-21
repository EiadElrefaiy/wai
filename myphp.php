<?php 
$conn = mysqli_connect("localhost" , "root" , "" , "site");
$r = mysqli_query($conn , "select * from users");
$re = mysqli_query($conn , "select * from do_you_konw");
$res = mysqli_query($conn , "select * from important_words");
$resu = mysqli_query($conn , "select * from exames_list");
$resul = mysqli_query($conn , "select * from field");
$result = mysqli_query($conn , "select * from login_case");
$username = "";
$email = "";
$password = "";
$repassword="";
$age = 0;
$username_log = "";
$pass = "";
if(isset($_POST['username'])){
    $username = $_POST['username'];
}
if(isset($_POST['email'])){
    $email = $_POST['email'];
}
if(isset($_POST['age'])){
    $age = $_POST['age'];
}
if(isset($_POST['password'])){
    $password = $_POST['password'];
}
if(isset($_POST['repassword'])){
    $repassword = $_POST['repassword'];
}

if(isset($_POST['creat'])){
    mysqli_query($conn, "insert into users values('$username','$email','$password','$repassword','$age')");
    header("location:login.php");
}
if (isset($_POST['username_log'])){
    $username_log = $_POST['username_log'];
}
if (isset($_POST['password_log'])){
    $password_log = $_POST['password_log'];
}
if(isset($_POST['enter'])){
  $result =  mysqli_query($conn , "select * from users where name = '$username_log' and password = '$password_log'");
  $rows = mysqli_fetch_array($result);
  if($rows['name'] == $username_log && $rows['password'] == $password_log){
         header("location:account.php");
  }
  else{
      echo "<script>";
      echo "location.href = 'ui.php';";
      echo "alert('خطا في اسم المستخدم او كلمة السر');";
      echo "</script>";
  }
 }
$image="";
$caption = "";
if(isset($_POST['image'])){
    $image =   $_POST['image'];
}
if(isset($_POST['caption'])){
    $caption = $_POST['caption'];
}
if(isset($_POST['upload'])){
 mysqli_query($conn , "insert into do_you_konw values('$image' , '$caption')");
 header("location:what.php");   
}
$char_img="";
$word="";
$char="";
if(isset($_POST['char_img'])){
    $char_img = $_POST['char_img'];
}
if(isset($_POST['word'])){
    $word = $_POST['word'];
}
if(isset($_POST['char'])){
    $char = $_POST['char'];
}
if(isset($_POST['upload2'])){
mysqli_query($conn,"insert into important_words values('$char_img','$word','$char')");
header("location:who.php");
}
$back_img = "";
$quiz_name="";
$level = "";
$ques_num = 0;
if(isset($_POST['addr'])){
    $addr = $_POST['addr'];
}
if(isset($_POST['back_img'])){
    $back_img = $_POST['back_img'];
}
if(isset($_POST['quiz_name'])){
    $quiz_name=$_POST['quiz_name'];
}
if(isset($_POST['level'])){
    $level = $_POST['level'];
}
if(isset($_POST['ques_num'])){
    $ques_num = $_POST['ques_num'];
}
$count = 0;
if(isset($_POST['num_of_quizes'])){
    $count = $_POST['num_of_quizes'];
}
if(isset($_POST['upload3'])){
    mysqli_query($conn , "insert into exames_list values('$addr' , '$back_img' , '$quiz_name' , '$level' , '$ques_num','$count')");
    header("location:Exames_list.php");
}
$number = "";
$question = "";
$correct = "";
$answer2 = "";
$answer3 = "";
$answer4 = "";
if(isset($_POST['number'])){
    $number = $_POST['number'];
}
if(isset($_POST['question'])){
    $question = $_POST['question'];
}
if(isset($_POST['correct'])){
    $correct = $_POST['correct'];
}
if(isset($_POST['answer2'])){
    $answer2 = $_POST['answer2'];
}
if(isset($_POST['answer3'])){
    $answer3 = $_POST['answer3'];
}
if(isset($_POST['answer4'])){
    $answer4 = $_POST['answer4'];
}
if(isset($_POST['upload4'])){
    mysqli_query($conn , "insert into field values('$number' , '$question' , '$correct' , '$answer2' ,'$answer3' , '$answer4')");
    echo "<script>alert('تم اضافة السؤال')</script>";
}
?>
