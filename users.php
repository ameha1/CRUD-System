<?php

include 'connect.php';

$message = "";

if(isset($_POST['submit'])){
    // Creating new variables and setting those variables from the variables containes by the submit function

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password  = $_POST['password'];

    


    // inserting the values from the above defined variables in to database

    $sql = "INSERT INTO crud (name,email,mobile,password)

    VALUES('$name','$email','$mobile','$password')";

    $result = mysqli_query($con,$sql);

    if($result){
        $message = 'Registered Successfully!';
    }else{
        die.mysqli_error($con);
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
    <style>
        label{color:#555; 
    font-family: 'Helvetica Neue', sans-serif; 
    font-size: 16px; 
    line-height: 50px; 
    letter-spacing: 1px; 
    border-bottom: #555;}
    </style>
</head>



<body style="background-color: #c9d0d4;">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


    <h2 style="color:#555; 
    font-family: 'Helvetica Neue', sans-serif; 
    font-size: 46px; 
    font-weight: 100; 
    line-height: 50px; 
    letter-spacing: 1px; 
    padding:  0 40% 10px ; 
   ">Register</h2>

    <div class="container my-5">

<form method="POST" action="">
         <div class="form-group">
            <label>Name</label>
            <input name="name" type="text" class="form-control" autocomplete="off" id="exampleInputEmail1" placeholder="Enter Your Name" required>
            
        </div><br>
        <div class="form-group">
            <label>Email</label>
            <input name="email" type="email" class="form-control" autocomplete="off" id="exampleInputEmail1" placeholder="Enter Your Email" required>
            
        </div><br>
        <div class="form-group">
            <label>Mobile</label>
            <input name="mobile" type="text" class="form-control" autocomplete="off" id="exampleInputEmail1" placeholder="Enter Your Contact info" required>
            
        </div><br>
        <div class="form-group">
            <label >Password</label>
            <input name="password" type="password" class="form-control" autocomplete="off" id="exampleInputPassword1" placeholder="Enter Your Password" required>
        </div><br>
      
        <button name="submit" type="submit" class="btn btn-primary">Register</button>

        <div class="mess" style=" color: #61b752; display: block; padding-bottom: 10px; text-align: centered;">

                <p> <?php echo $message ?></p>

        </div>
</form>

    </div>

</body>
</html>


