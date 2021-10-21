<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Hệ thống quản lý ngân hàng máu</u></title>
</head>
<body>
    <div class ="container-fluid">
        <div class = "row header">
            <div class = "co-md-12">
                <img src="../src/1234.png" alt="" class="img-fluid">
            </div>
        </div>
        <div class = "row nav-menu">
            <div class="col-md-12">
              <nav class=" navbar-light bg-light">
                  <div class="container-fluid">
                  <div class="row">
                  <div class="col-md-12">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="admin.php"><i class="fas fa-home"></i>Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="cc.php"></i>Danh sách hiến máu</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#">Hỗ trợ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ">Hướng dẫn</a>
                        </li>
                    </ul>
                </div>
                </div>
                </div>
              </nav>
            </div>
        </div>
        <div>
                    <h1>Danh sách người hiến máu</h1>
                   
</div>            
            <div class="col">
                <table class="table">
                  <thead>
                    <tr>
                    <th scope="col">STT</th>
                                    <th scope="col">Họ và tên</th>
                                    <th scope="col">giới tính</th>
                                    <th scope="col">tuổi</th>
                                    <th scope="col">số lượng máu cần nhận máu</th>
                                    <th scope="col">nhóm máu</th>
                                    <th scope="col">ngày</th>
                                    <th scope="col">số điện thoại</th>
                                 
                    </tr>
                  </thead>
                  <tbody>

                    <?php

                    #Lấy dữ liệu từ CSDL và đổ ra bảng(phần lặp lại)
                     //b1 :ket noi csdl
                     $conn=mysqli_connect('localhost','root','','cc');
                                //b2 khai bao va thuc hien truy vấn
                                $sql = "SELECT * from blood_donor";
                                $result = mysqli_query($conn, $sql);

                                //b3  kiem tra va xu li tap ket qua  - ung voi cau lenh select  
                                if (mysqli_num_rows($result) > 0) {
                                    $i = 1;
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                        <tr>
                                            <th scope="row"><?php echo $i; ?></th>
                                            <td><?php echo $row['bd_name']; ?></td>
                                            <td><?php echo $row['bd_sex']; ?></td>
                                            <td><?php echo $row['bd_age']; ?></td>
                                            <td><?php echo $row['bd_bqnty']; ?></td>
                                            <td><?php echo $row['bd_bgroup']; ?></td>
                                            <td><?php echo $row['bd_reg_date']; ?></td>
                                            <td><?php echo $row['bd_phno']; ?></td>
                                            
                                          
                                        </tr>
                                <?php
                                        $i++;
                                    }
                                }

                    ?>
                    
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<?php 
include('./footer.php');
?>
</html>