<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
</head>
<body>
<?php
    require('config.php');
    require('functions.php');

    $id= $_GET['id'];
    $user= getusers($id);
?>
    <form action="" name="add" method="POST">
    <label>Update</label>
    <div> 
        <label>username</label>
        <input type="text" name="username" value="<?php echo $user['username']; ?>">
    </div>

    <div>
        <label>email</label>
        <input type="text" name="email" >
    </div>


    <div>
        <label>password</label>
        <input type="text" name="password">
    </div>
    
    
    <?php
        require('config.php');
        

        if(isset($_POST['add']) && $_POST[''] != "")
        {
            $username= $_POST['username'];
            $email= $_POST['email'];
            $password= $_POST['password'];      

            $sql= "INSERT INTO users(username,email,password) VALUES ('$username','$email')";
            mysqli_query($conn,$sql);
            echo "Thêm thành công";
        }
        echo "Name không được để trống";

    ?>
    </form>
</body>
</html>