







<?php
    session_start();
    $conn = mysqli_connect("localhost","root","","hms");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Hospital Management System</title>
</head>
<body>
    <div class="jumbotron">
        <!-- <h1 align="center">Administrator Login</h1> -->
    </div>
    <div class="container">
        <form action="">
            <div class="form-group">
                <label for="id">Admin Id</label>
                <input type="text" class="form-control" id="id" aria-describedby="emailHelp" name="id" placeholder="Enter ID">
            </div>
            <div class="form-group">
                <label for="pwd">Password</label>
                <input type="password" class="form-control" id="pwd" placeholder="Password" name="pwd">
            </div><br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </div>
</body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        $q = "SELECT * from admin where admin_id='$_POST[id]';";
        $result = mysqli_query($conn,$q);
        if(mysqli_num_rows($result))
        {
            header("location:assets/pages/access.php");
        }
    }
 ?>