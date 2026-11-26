<?php
    session_start();
    // Dùng include để kết nối 2 file
    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <style>
        .khoi {
            border: 1px solid black;
            border-radius: 10px;
            width: 250px;
            margin: 20px auto;
            background-color: antiquewhite;
        }
        input {
            padding: 5px 0;
            margin: 10px 0;
        }

        form {
            padding: 10px;
        }
        h1 {
            margin: 5px 0;
            text-align: center;
        }
        p {
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="khoi">
        <h1>Đăng nhập</h1>
        <div style="width: 80%; margin: auto; text-align: center" class="">
            <form action="dangnhap.php" method="post">
                <div class="">
                    <p><b>Tên đăng nhập</b></p>
                    <input type="text" name="tenDangNhap" placeholder="Tên đăng nhập">
                </div>
                <div class="">
                    <p><b>Mật khẩu</b></p>
                    <input type="password" name="matKhau" placeholder="Mật khẩu">
                </div>
                <div class="">
                    <button type="submit">Đăng nhập</button>
                </div>
            </form>
        </div>
    </div>
    <?php
        if (isset($_POST['tenDangNhap']) && isset($_POST['matKhau'])) {
            $tenDangNhap = $_POST['tenDangNhap'];
            $matKhau = $_POST['matKhau'];

            $sql = "SELECT * FROM `nguoi_dung` WHERE ten_dang_nhap = '$tenDangNhap' AND mat_khau = '$matKhau'";
            $result = mysqli_query($conn, $sql);
            
            /* if ($tenDangNhap == 'admin' && $matKhau == '123') {
                $_SESSION['dangnhap'] = 'thanhcong';
                header('Location: trangchu.php');  // Chuyển hướng đến trang khác
            } else {
                echo 'Tên đăng nhập hoặc mật khẩu không đúng';
            } */
            if (mysqli_num_rows($result) > 0) {
                $_SESSION['dangnhap'] = 'thanhcong';
                header('Location: index.php');  // Chuyển hướng đến trang khác
            } else {
                echo 'Tên đăng nhập hoặc mật khẩu không đúng';
            }
            
        } 
        
    ?>
</body>
</html>