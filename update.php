<?php

include 'connect.php';

$message = '';

$id = $_GET['update'];
$sql = "SELECT * FROM crud WHERE id=$id";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

 
if(isset($_POST['submit'])){
 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password  = $_POST['password'];



    $sql = "UPDATE crud SET id='$id',name='$name',email='$email',mobile='$mobile',password='$password' WHERE id=$id";

    //VALUES('$name','$email','$mobile','$password')";

    $result = mysqli_query($con,$sql);

    if($result){
        $message = 'Updated Successfully!';
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


    <h2 style="color:black; 
    font-family: 'Helvetica Neue', sans-serif; 
    font-size: 46px; 
    font-weight: 100; 
    line-height: 50px; 
    letter-spacing: 1px; 
    padding:  0 40%; ">Update Info</h2>

    <div class="container my-5">

<form method="POST" action="">
         <div class="form-group">
            <label>Name</label>
            <input name="name" type="text" class="form-control" autocomplete="off" id="exampleInputEmail1" placeholder="Enter Your Name" value="<?php echo $name; ?>" required >
            
        </div><br>
        <div class="form-group">
            <label>Email</label>
            <input name="email" type="email" class="form-control" autocomplete="off" id="exampleInputEmail1" placeholder="Enter Your Email" value="<?php echo $email; ?>" required>
            
        </div><br>
        <div class="form-group">
            <label>Mobile</label>
            <input name="mobile" type="text" class="form-control" autocomplete="off" id="exampleInputEmail1" placeholder="Enter Your Contact info" value="<?php echo $mobile; ?>" required>
            
        </div><br>
        <div class="form-group">
            <label >Password</label>
            <input name="password" type="password" class="form-control" autocomplete="off" id="exampleInputPassword1" placeholder="password" value="<?php echo $password; ?>" required>
        </div><br>
      
        <button name="submit" type="submit" class="btn btn-primary">Update</button>
</form>

    </div>

    <div class="mess" style=" color: #61b752; display: block; padding-bottom: 10px; text-align: centered;">

        <p> <?php echo $message ?></p>

    </div>

</body>
</html>






