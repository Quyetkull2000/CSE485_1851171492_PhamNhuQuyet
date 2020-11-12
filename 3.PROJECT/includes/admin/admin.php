<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <link rel="stylesheet" href="../../css/login.css">
  </head>
  <body>
  <div id="admin-heading-panel">
                <div class="container">
                    <div class="left-panel">
                        Xin chào <span>Admin</span>
                    </div>
                    <div class="right-panel">
                        <img height="24" src="../../images/home.png" />
                        <a href="../../index.php">Trang chủ</a>
                        <img height="24" src="../../images/logout.png" />
                        <a href="logout.php">Đăng xuất</a>
                    </div>
                </div>
            </div>
           
            <div id="content-wrapper">
                <div class="container">
                    <div class="left-menu">
                        <div class="menu-heading">Admin Menu</div>
                        <div class="menu-items">
                            <ul>
                                <li><a href="menu_listing.php">Danh mục</a></li>
                                <li><a href="#">Tin tức</a></li>
                                <li><a href="member_listing.php">Quản lý thành viên</a></li>
                            </ul>
                        </div>
                    </div>



                    <main class="container">
        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-8">
                <table class="table table-striped">
                    <thead class="" style="background: #003478;">
                        <tr style="color: white;">
                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                    <?php
                        require('config.php');
                        include("functions.php");
                        // B2: Khai bao truy van
                        $users = getAllUsers();
                        foreach($users as $row){
                    ?>
                            <tr>
                                <td scope="row"><?php echo $row[0];?></td>
                                <td><?php echo $row[1];?></td>
                                <td><?php echo $row[2];?></td>
 
                                <td><a href="edit.php?id=<?php echo $row[0];?>"><i class="fas fa-edit"></i></a></td>
                                <td><a href="delete.php?id=<?php echo $row[0];?>"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                    <?php
                        }
                    ?>
                        
                        
                    </tbody>
                </table>
           
            </div>
        </div>
      </main>



     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>