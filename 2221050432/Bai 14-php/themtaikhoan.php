
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm tài khoản</title>
    <style>
        .khoi {
            border: 1px solid black;
            border-radius: 10px;
            width: 250px;
            margin: 20vh auto;
            background-color: antiquewhite;
        }

        .i-text input {
            padding: 5px 0;
            margin: 10px 0;
            width: 100%;
        }

        button {
            padding: 5px 0;
            width: 100%;
        }

        form {
            padding: 10px;
        }

        h1 {
            margin: 5px 0;
        }
    </style>
</head>
<body>

    <h1>Thêm tài khoản</h1>

    <form class="khoi" action="index.php?page_layout=themtaikhoan" method="POST">

        <div class="i-text">
            <input type="text" name="tenDangNhap" placeholder="Tên đăng nhập">
        </div>

        <div class="i-text">
            <input type="password" name="matKhau" placeholder="Mật khẩu">
        </div>

        <div class="i-text">
            <input type="email" name="email" placeholder="Email">
        </div>

        <div class="i-text">
            <input type="text" name="hoten" placeholder="Họ và tên">
        </div>

        <div class="i-text">
            <input type="date" name="ngaysinh">
        </div>

        <div class="i-text">
            <input type="text" name="sdt" placeholder="Số điện thoại">
        </div>

        <div>
            <input type="radio" name="gioitinh" value="1" checked> Nam
            <input type="radio" name="gioitinh" value="0"> Nữ
        </div>

        <button type="submit">Thêm</button>

    </form>

    <?php

    // Kết nối database
    $conn = mysqli_connect("localhost", "root", "", "netflix");

    if (!$conn) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    }

    if(isset($_POST['tenDangNhap']) &&
       isset($_POST['matKhau']) &&
       isset($_POST['email']) &&
       isset($_POST['hoten']) &&
       isset($_POST['ngaysinh']) &&
       isset($_POST['sdt']) &&
       isset($_POST['gioitinh']))
    {
        $tenDangNhap = $_POST['tenDangNhap'];
        $matKhau = $_POST['matKhau'];
        $email = $_POST['email'];
        $hoten = $_POST['hoten'];
        $ngaysinh = $_POST['ngaysinh'];
        $sdt = $_POST['sdt'];
        $gioitinh = $_POST['gioitinh'];

        if(!empty($tenDangNhap) &&
           !empty($matKhau) &&
           !empty($email) &&
           !empty($hoten) &&
           !empty($ngaysinh) &&
           !empty($sdt))
        {
            // Người dùng nhập đủ thông tin

            $sql = "INSERT INTO nguoi_dung
            (ten_dang_nhap, mat_khau, email, ho_ten, ngay_sinh, so_dien_thoai, gioi_tinh)
            VALUES
            ('$tenDangNhap', '$matKhau', '$email', '$hoten', '$ngaysinh', '$sdt', '$gioitinh')";

            $result = mysqli_query($conn, $sql);

            if($result) {
                header("Location: index.php?page_layout=taikhoan");
                exit;
            }
            else {
                echo "Thêm người dùng thất bại: " . mysqli_error($conn);
            }

        }
        else {
            // Người dùng nhập thiếu thông tin
            echo "<p style='color: red'>Vui lòng nhập đầy đủ thông tin</p>";
        }
    }

    ?>

</body>
</html>
