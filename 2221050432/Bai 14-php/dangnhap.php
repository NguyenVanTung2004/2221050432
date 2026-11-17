<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .khoi{
            border: 1px solid black;
            border-radius: 10px;
            width: 250px;
            margin: 20vh auto;
            background-color: pink;
        }
        input{
            padding: 5px 0;
            margin: 10px 0;
        }
        form{
            padding: 10px;
        }
        h1{
            margin: 5px 0;
            text-align: center;
        }
        p{
            font-size: 20px;
        }


    </style>
</head>
<body>
    <div class=""khoi>
        
        
        <div style="width: 80%; margin: auto; text-align: center" class="">
            <h1>Dang Nhap</h1>
            <form action="dangnhap.php" method="POST">
                <div class="">
                    <p><b>Ten dang nhap</b></p>
                    <input type="text" name="tenDangNhap" id="" placeholder="Ten dang nhap">
                </div>
                <div class="">
                    <p><b>Mat khau</b></p>
                    <input type="password" name="matKhau" id="" placeholder="Mat khau">
                <div class="">
                    <button type="submit">Dang nhap 

                    </button>
                </div>    
                </div>
            </form>

        </div>
    </div>
    <?php
        if(isset($_POST["tenDangNhap"]) && isset($_POST["matKhau"])){
            $tenDangNhap = $_POST["tenDangNhap"];
            $matKhau = $_POST["matKhau"];
            if($tenDangNhap == "admin" && $matKhau == "123"){
                session_start();
                $_SESSION["dangnhap"] = "thanhcong";
                header("Location: trangchu.php");
            } else{
                echo "Ten dang nhap hoac mat khau khong chinh xac";
            }
        }
    
    ?>
</body>
</html>