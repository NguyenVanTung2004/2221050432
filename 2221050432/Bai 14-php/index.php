<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul {
            list-style: none;
            display: flex;
            gap: 10px;
            background-color: blue;
            padding: 10px;
        }
        a {
            text-decoration:  none;
            color: white;
        }
    </style>
</head>
<body>
    <?php
        session_start();
        // Nếu chưa đăng nhập thì chưa chuyển trang
        if (!isset($_SESSION['dangnhap'])) {
            header('Location: dangnhap.php');
        }
        include 'connect.php';
    ?>

    <nav>
        <ul>
            <li><a href="index.php?page_layout=trangchu">Trang chủ</a></li>
            <li><a href="index.php?page_layout=taikhoan">Tài khoản</a></li>
            <li><a href="index.php?page_layout=theloai">Thể loại</a></li>
            <li><a href="index.php?page_layout=phim">Phim</a></li>
        </ul>
    </nav>

    <?php
        if (isset($_GET['page_layout'])) {
            $page = $_GET['page_layout'];
            switch ($page) {
                case 'trangchu':
                    include 'trangchu.php';
                    break;
                case 'taikhoan':
                    include 'taikhoan.php';
                    break;
                case 'theloai':
                    include 'theloai.php';
                    break;
                case 'phim':
                    include 'phim.php';
                    break;
                case 'themtaikhoan':
                    include 'themtaikhoan.php';
                    break;
                case 'capnhattaikhoan':
                    include 'capnhattaikhoan.php';
                    break;
                case 'xoataikhoan':
                    include 'xoataikhoan.php';
                    break;
                case 'themtheloai':
                    include 'themtheloai.php';
                    break;
                case 'capnhattheloai':
                    include 'capnhattheloai.php';
                    break;
                case 'xoatheloai':
                    include 'xoatheloai.php';
                    break;
                case 'themphim':
                    include 'themphim.php';
                    break;
                case 'capnhatphim':
                    include 'capnhatphim.php';
                    break;
                case 'xoaphim':
                    include 'xoaphim.php';
                    break;
            }
        }
    ?>
</body>
</html>