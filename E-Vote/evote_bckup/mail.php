<!DOCTYPE html>
<html>
    <title>EmailRegistration</title>
    <head>  </headd>
    <style> </style>
    <body>
        <form method='POST' action='/mail.php'>
            <label for='mail'>EMAIL &emsp;&emsp; :</label>
            <input type='email' name='mail' required><br>
            <label for='pw'>PASSWORD :</label>
            <input type='password' name='pw' required><br>
            <input type='submit' name='sub' value='LOGIN' >
        </form>
    </body>
</html> 
                     <!--PHP HERE-->
<?php

$con=mysqli_connect("localhost","root","","election") or die("connection Failed :(");

if($_SERVER['REQUEST_METHOD']=='POST'){
   $to=$_POST['mail'];
   $pw=$_POST['pw'];
    $q1 =(mysqli_query($con,"SELECT no FROM election.mail WHERE EXISTS(SELECT * from mail WHERE email='$to' and password='$pw') "));//OneLine SubQuery
    $q2=mysqli_num_rows($q1);
    echo ">>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>".$q2;
   if($q2){ //email found
     echo "<br>NUMBER SELECT:::::"; 
     $c=substr(md5(mt_rand()),-4);
     echo "<br>".$c;
     $sub="Verify Your Account";
     $body='click to Verify.<a href="/mail.php?c=.."></a>';
     $header="" ;
     //mail($to,$sub,$body,$header);
     echo "<a href='mail.php?code=$c'>click</a>";
     }  
   else{   //no email found
       ECHO "<br>SignIN...<br>";
       mysqli_query($con,"INSERT INTO election.mail (no,email,password) VALUES ('','$to','$pw') ") and print("Newly UPDATE ") or print(" Alredy EXITS"); //new mail
     }

 
}

//if($_SERVER['REQUEST_METHOD']=='GET'){
if(isset($_GET['code']) or isset($_POST['sub']) and isset($_GET['code'])){  //check the post methoe and $GET_code exits AI 
    echo $_GET['code']." POSTED successful <br>";
}
echo "<br>method:".$_SERVER['REQUEST_METHOD'];


?> 